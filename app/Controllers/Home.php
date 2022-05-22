<?php

namespace App\Controllers;

use App\Models\M_kategori;
use App\Models\M_jagung;
use App\Models\M_gambar1;
use App\Models\M_gambar2;
use App\Models\M_addcart;
use App\Models\M_checkout;
use App\Models\M_chat;
use App\Models\M_login;


class Home extends BaseController
{
    protected $session;
    protected $M_kategori;
    protected $M_jagung;
    protected $M_gambar1;
    protected $M_gambar2;
    protected $M_addcart;
    protected $M_checkout;
    protected $M_chat;
    protected $M_login;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
        $this->M_kategori = new M_kategori();
        $this->M_jagung = new M_jagung();
        $this->M_gambar1 = new M_gambar1();
        $this->M_gambar2 = new M_gambar2();
        $this->M_addcart = new M_addcart();
        $this->M_checkout = new M_checkout();
        $this->M_chat = new M_chat();
        $this->M_login = new M_login();

        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '2048M');
    }

    public function beranda()
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['title'] = 'Beranda';
        $data['kategori'] = $this->M_kategori->findAll();
        $data['jagung'] = $this->M_jagung->findAll();
        $data['gambar1'] = $this->M_gambar1->findAll();
        $data['gambar2'] = $this->M_gambar2->findAll();
        $data['chat'] = $this->M_login->customchat();
        // dd($data['chat']);
        // dd($data['kategori']);
        return view('home/beranda', $data);
    }

    public function keranjang()
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['chat'] = $this->M_login->customchat();
        $data['title'] = 'Keranjang Belanja';
        $data['keranjang'] = $this->M_addcart->join_cart()->getResultArray();
        $data['jagung'] = $this->M_jagung->findAll();
        // dd($data['keranjang']);
        return view('home/keranjang', $data);
    }
    public function hapus_cart($id_cart)
    {
        $this->M_addcart->delete($id_cart);
        session()->setFlashdata("success", "Data Berhasil di Hapus.");
        return redirect()->to(base_url('home/keranjang'));
    }

    public function chat_mobile($id_login)
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['chat'] = $this->M_login->customchat();
        $data['title'] = 'Chat';
        $request = \Config\Services::request();
        $no =  $request->uri->getSegment(3);
        $data['pesanku'] = $this->M_login->get_pesan($no);
        // dd($data['pesanku']);

        $this->M_chat->whereIn('id_login', [$id_login])
            ->set(['kondisi' => 2])
            ->update();
        return view('home/chat-mobile', $data);
    }
    public function loadchat()
    {
        $id_login = $this->request->getVar('id_login');
        $id_lawan = $this->request->getVar('id_lawan');
        $data = $this->M_chat->getChat($id_login, $id_lawan);

        echo json_encode([
            'data' => $data
        ]);
    }
    public function kirim_pesan()
    {
        date_default_timezone_set('Asia/Makassar');
        $waktu = date("Y-m-d H:i:s");
        $isi = $this->request->getVar('isi');
        $id_login = $this->request->getVar('id_login');
        $id_lawan = $this->request->getVar('id_lawan');

        $this->M_chat->save([
            'waktu' => $waktu,
            'isi' => $isi,
            'id_login' => $id_login,
            'id_lawan' => $id_lawan
        ]);

        $log = array('status' => true);
        echo json_encode($log);
        return true;
    }

    public function user()
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['chat'] = $this->M_login->customchat();
        $data['title'] = 'Akun Saya';
        return view('home/akun', $data);
    }

    public function pesanan()
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['chat'] = $this->M_login->customchat();
        $data['title'] = 'Pesanan Saya';
        $data['jagung'] = $this->M_checkout->join_checkout()->getResultArray();
        // dd($data['jagung']);
        return view('home/pesanan', $data);
    }

    public function detail_pesanan($id_checkout)
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['chat'] = $this->M_login->customchat();
        $data['detail'] = $this->M_checkout->join_detail($id_checkout);
        // dd($data['detail']);
        return view('home/detail-pesanan', $data);
    }

    public function detail_jagung($id_kategori)
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['chat'] = $this->M_login->customchat();
        $data['title'] = 'Jagung';
        $data['dJagung'] = $this->M_jagung->where('id_kategori', $id_kategori)->find();
        $data['kategori'] = $this->M_kategori->where('id_kategori', $id_kategori)->find();
        // dd($data['dJagung']);
        return view('home/detail-jagung', $data);
    }

    public function belanja($id_jagung)
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['chat'] = $this->M_login->customchat();
        $data['title'] = 'Belanja';
        $data['belanja'] = $this->M_jagung->where('id_jagung', $id_jagung)->find();
        $data['jumlah_terjual'] = $this->M_checkout->jumlah_terjual($id_jagung);
        // dd($data['jumlah_terjual']);
        return view('home/belanja', $data);
    }

    public function addcart($id_jagung = 0)
    {
        $this->M_addcart->save([
            'id_jagung' => $this->request->getVar('id_jagung'),
            'id_login' => session()->get('id_login')
        ]);
        echo json_encode('1');

        // $cek = $this->M_addcart->where('id_jagung', $id_jagung)->first();
        // if ($cek > 0) {
        //     echo json_encode('2');
        // }
    }

    public function checkout($id_jagung)
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['chat'] = $this->M_login->customchat();
        $data['title'] = 'Checkout';
        $data['belanja'] = $this->M_jagung->where('id_jagung', $id_jagung)->first();
        $data['jumlah_terjual'] = $this->M_checkout->jumlah_terjual($id_jagung);
        // dd($data['belanja']);
        return view('home/checkout', $data);
    }

    public function tambah_belanja()
    {
        $this->M_checkout->save([
            'id_login' => session()->get('id_login'),
            'total' => $this->request->getVar('total'),
            'nama' => $this->request->getVar('nama'),
            'nomor' => $this->request->getVar('nomor'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'koordinat' => $this->request->getVar('koordinat'),
            'alamat' => $this->request->getVar('alamat'),
            'alamat_lengkap' => $this->request->getVar('alamat_lengkap'),
            'id_jagung' => $this->request->getVar('id_jagung'),
            'qty' => $this->request->getVar('qty'),
            'status' => $this->request->getVar('status'),
        ]);
        session()->setFlashdata("success", "Checkout berhasil👏.");
        return redirect()->to(base_url('home/pesanan'));
    }

    public function proses_count()
    {
        $query = $this->M_addcart->jumlah_cart();
        // dd($query);
        echo json_encode($query);
    }

    public function count_chat()
    {
        $query = $this->M_chat->jumlah_chat();
        // dd($query);
        echo json_encode($query);
    }

    public function cari()
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['chat'] = $this->M_login->customchat();
        $cari = $this->request->getVar('cari');
        $data['cari'] = $cari;
        $data['hasil'] = $this->M_jagung->cari_jagung($cari);
        // dd($data);
        return view('home/hasil-cari', $data);
    }

    public function blocked_admin()
    {
        $data['title'] = 'Eror 404';
        return view('eror/blocked-admin', $data);
    }
}
