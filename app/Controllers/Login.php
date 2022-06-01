<?php

namespace App\Controllers;

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;
use \Mailjet\Resources;

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
        // $this->email = \Config\Services::email();
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
            // $client = \Config\Services::curlrequest();
            // $response = $client->request('POST', 'https://bladerlaiga.my.id/api/v1/mail', [
            //     "headers" => [
            //         "content-type" => "application/json"
            //     ]
            // ]);

            // echo "<pre>";
            // print_r($response);

            // $url =  'https://bladerlaiga.my.id/api/v1/mail';
            // $curl = curl_init($url);

            helper('text');
            $kodeOtp = random_string('numeric', 5);
            $email = $this->request->getVar('email');
            // $data = [
            //     'to' => $email,
            //     'from' => 'bladerlaiga.97@gmail.com',
            //     'reply' => $email,
            //     'message' => 'Kode Otp : ' . $kodeOtp,
            //     'message_html' => 'Kode Otp : ' . $kodeOtp,
            //     'subject' => 'SuperiorCorn'
            // ];
            // $post = json_encode($data);
            // curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
            // curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            //     'Content-Type:application/json',
            // ));
            // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            // $result = curl_exec($curl);
            // json_decode($result);
            // curl_close($curl);
            // dd($hasil);
            // $mail = new PHPMailer(true);
            // helper('text');
            // $kodeOtp = random_string('numeric', 5);
            // try {
            //     $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            //     $mail->isSMTP();
            //     $mail->Host       = 'smtp.googlemail.com';
            //     $mail->SMTPAuth   = true;
            //     $mail->Username   = 'wm337708@gmail.com';
            //     $mail->Password   = 'wahyuhidayat';
            //     $mail->SMTPSecure = 'ssl';
            //     $mail->Port       = 465;

            //     $mail->setFrom('wh260200@gmail.com', 'Superior Corn');
            //     $mail->addAddress($this->request->getVar('email'));
            //     $mail->addReplyTo($this->request->getVar('email'));

            //     $mail->isHTML(true);
            //     $mail->Subject = 'Kode Verifikasi Anda';
            //     $mail->Body    = "kode OTP : " . $kodeOtp;

            //     $mail->send();

            //     $email = $this->request->getVar('email');

            $mj = new \Mailjet\Client('19b6b7293c39d204e46d42833ee7c9eb', 'c213951236cd934c6ffcaad9e0dcc2e6', true, ['version' => 'v3.1']);
            $body = [
                'Messages' => [
                    [
                        'From' => [
                            'Email' => "superiorcorn6@gmail.com",
                            'Name' => "superior"
                        ],
                        'To' => [
                            [
                                'Email' => $email,
                            ]
                        ],
                        'Subject' => "SuperiorCorn",
                        'TextPart' => "kode OTP : " . $kodeOtp,
                        'HTMLPart' => "kode OTP : " . $kodeOtp,
                    ]
                ]
            ];
            $response = $mj->post(Resources::$Email, ['body' => $body]);
            $response->success() && var_dump($response->getData());

            $data = [
                'email' => $email
            ];
            session()->set($data);
            $this->M_login->save([
                'nama' => $this->request->getVar('nama'),
                'email' => $email,
                'username' => $this->request->getVar('username'),
                'password' => md5($this->request->getVar('password1')),
                'otp' => $kodeOtp,
            ]);
            session()->setFlashdata("success", "Biodata berhasil di kirim.");
            return redirect()->to(base_url('login/validasi'));
            // } catch (Exception $e) {
            //     session()->setFlashdata('error', "Gagal mengirim email. Error: " . $mail->ErrorInfo);
            //     return redirect()->to(base_url('login/daftar'));
            // }
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
        // dd($email);
        $otp = $this->request->getVar('otp');
        // dd($otp);
        $cek = $this->M_login->where('email', $email)->where('otp', $otp)->first();
        // dd($cek);
        if (is_null($cek)) {
            session()->setFlashdata("error", "Otp tidak valid.");
            return redirect()->to(base_url('login/validasi'));
        } else {
            // session()->destroy();
            return redirect()->to(base_url('login/index'));
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
