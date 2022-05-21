<?php

namespace App\Controllers;

use App\Models\M_login;

class Login extends BaseController
{
    protected $session;
    protected $Mlogin;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
        $this->M_login = new M_login();
        $this->email = \Config\Services::email();
    }

    public function index()
    {
        $data['title'] = 'Login';
        return view('login/login', $data);
    }

    public function login()
    {
        $username = $this->request->getVar('username');
        $password = md5($this->request->getVar('password'));
        $login = $this->M_login->where('username', $username)->where('password', $password)->first();

        if (!is_null($login)) {
            $data = [
                'username' => $login['username'],
                'nama' => $login['nama'],
                'email' => $login['email'],
                'id_login' => $login['id_login'],
            ];
            session()->set($data);
            if ($login['kondisi'] == 1) {
                return redirect()->to(base_url('admin/beranda'));
            } else if ($login['kondisi'] == 2) {
                return redirect()->to(base_url('home/beranda'));
            } else {
                session()->setFlashdata("error", "Gagal login.");
                return redirect()->to(base_url('login/index'));
            }
        } else {
            session()->setFlashdata("error", "Data tidak sesuai.");
            return redirect()->to(base_url('login/index'));
        }

        // $username = $this->request->getVar('username');
        // $password = md5($this->request->getVar('password'));
        // $admin = $this->M_login->where('username', $username)->where('password', $password)->where('kondisi', '1')->first();
        // if (!is_null($admin)) {
        //     $nama = $admin["nama"];
        //     session()->set($nama);
        //     return redirect()->to(base_url('admin/beranda'));
        // } else {
        //     session()->setFlashdata("error", "Data tidak sesuai.");
        //     return redirect()->to(base_url('login/login'));
        // }
    }

    public function daftar()
    {
        $data['title'] = 'Registrasi';
        return view('login/daftar', $data);
    }

    public function kirim()
    {
        $periksa = $this->validate([
            'password1' => [
                'rules' => 'required|trim|min_length[3]|matches[password2]'
            ],
            'password2' => [
                'rules' => 'required|trim|min_length[3]|matches[password1]'
            ],

        ]);
        if ($periksa) {
            helper('text');
            $kodeOtp = random_string('numeric', 5);
            $isipesan = "kode OTP : " . $kodeOtp;
            $this->email->setFrom('wh260200@gmail.com', 'Superior Corn');
            $this->email->setTo($this->request->getVar('email'));

            $this->email->setSubject('Kode Verifikasi Anda');

            $this->email->setMessage($isipesan);

            if (!$this->email->send()) {
                return false;
            } else {
                $email = $this->request->getVar('email');
                session()->set($email);
                $this->M_login->save([
                    'nama' => $this->request->getVar('nama'),
                    'email' => $email,
                    'username' => $this->request->getVar('username'),
                    'password' => md5($this->request->getVar('password1')),
                    'otp' => $kodeOtp,
                ]);
                session()->setFlashdata("success", "Biodata berhasil di kirim.");
                return redirect()->to(base_url('login/validasi'));
            }
        } else {
            session()->setFlashdata("error", "Password 1 dan 2 tidak sesuai.");
            return redirect()->to(base_url('login/daftar'));
        }
    }

    public function validasi()
    {
        $data['title'] = 'Validasi Otp';
        return view('login/validasi', $data);
    }

    public function validasi_otp()
    {
        $email = session('email');
        $otp = $this->request->getVar('otp');
        $cek = $this->M_login->where('email', $email)->where('otp', $otp)->find();
        if (!is_null($cek)) {
            return redirect()->to(base_url('login/index'));
        } else {
            session()->setFlashdata("error", "Otp tidak valid.");
            return redirect()->to(base_url('login/validasi'));
        }
    }

    public function logout()
    {
        unset(
            $_SESSION['username'],
            $_SESSION['nama'],
            $_SESSION['email'],
            $_SESSION['id_login'],
        );
        session()->destroy();
        return redirect()->to(base_url('login/index'));
    }
}
