<?php

namespace App\Controllers;

use App\Models\M_kategori;
use App\Models\M_jagung;
use App\Models\M_gambar1;
use App\Models\M_gambar2;
use App\Models\M_addcart;
use App\Models\M_checkout;
use App\Models\M_login;
use CodeIgniter\HTTP\Response;
use CodeIgniter\Test\TestResponse;

class Admin extends BaseController
{
    protected $session;
    protected $M_kategori;
    protected $M_jagung;
    protected $M_gambar1;
    protected $M_gambar2;
    protected $M_addcart;
    protected $M_checkout;
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
        return view('admin/beranda', $data);
    }

    public function kategori_jagung()
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['title'] = 'Kategori Jagung';
        $data['kategori'] = $this->M_kategori->findAll();
        echo view('admin/kategori', $data);
        echo view('admin/tambah/kategori');
    }

    public function tambah_kategori()
    {
        $periksa = $this->validate([
            'file_upload' => [
                'uploaded[file_upload]',
                'mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file_upload,10000]',
            ],
        ]);
        if ($periksa) {
            $file = $this->request->getFile('file_upload');
            $newName = $file->getRandomName();
            $file->move('uploads/kategori', $newName);

            $this->M_kategori->save([
                'jenis_kategori' => $this->request->getVar('jenis_kategori'),
                'foto' => $newName,
            ]);

            session()->setFlashdata("success", "Data berhasil di tambah.");
            return redirect()->to(base_url('admin/kategori_jagung'));
        } else {
            session()->setFlashdata("error", "Data gagal di tambah.");
            return redirect()->to(base_url('admin/kategori_jagung'));
        }
    }
    public function hapus_kategori($id_kategori)
    {
        $kategori = $this->M_kategori->find($id_kategori);
        unlink('uploads/kategori/' . $kategori['foto']);

        $this->M_kategori->delete($id_kategori);
        session()->setFlashdata("success", "Data Berhasil di Hapus.");
        return redirect()->to(base_url('admin/kategori_jagung'));
    }
    public function edit_kategori($id_kategori)
    {
        $periksa = $this->validate([
            'file_upload' => [
                'uploaded[file_upload]',
                'mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file_upload,10000]',
            ],
        ]);

        if ($periksa) {
            $file = $this->request->getFile('file_upload');
            $newName = $file->getRandomName();
            $file->move('uploads/kategori', $newName);
            unlink('uploads/kategori/' . $this->request->getVar('lama'));

            $this->M_kategori->save([
                'id_kategori' => $id_kategori,
                'jenis_kategori' => $this->request->getVar('jenis_kategori'),
                'foto' => $newName,
            ]);

            session()->setFlashdata("success", "Data berhasil di ubah.");
            return redirect()->to(base_url('admin/kategori_jagung'));
        } else {
            $this->M_kategori->save([
                'id_kategori' => $id_kategori,
                'jenis_kategori' => $this->request->getVar('jenis_kategori'),
            ]);
            session()->setFlashdata("success", "Data berhasil di ubah.");
            return redirect()->to(base_url('admin/kategori_jagung'));
        }
    }

    public function jagung($id_kategori = 0)
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['title'] = 'Jagung';
        // $data['jagung'] = $this->M_jagung->findAll();
        $data['join_jagung'] = $this->M_jagung->join_jagung()->getResultArray();
        // dd($data['join_jagung']);
        $data['kategori'] = $this->M_kategori->findAll();
        $data['id_kategori'] = $id_kategori;
        echo view('admin/jagung', $data);
        echo view('admin/tambah/jagung');
    }
    public function tambah_jagung()
    {
        $periksa = $this->validate([
            'file_upload' => [
                'uploaded[file_upload]',
                'mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file_upload,10000]',
            ],
        ]);
        if ($periksa) {
            $file = $this->request->getFile('file_upload');
            $newName = $file->getRandomName();
            $file->move('uploads/jagung', $newName);

            $this->M_jagung->save([
                'judul' => $this->request->getVar('judul'),
                'id_kategori' => $this->request->getVar('id_kategori'),
                'harga' => $this->request->getVar('harga'),
                'tersedia' => $this->request->getVar('tersedia'),
                'deskripsi' => $this->request->getVar('deskripsi'),
                'foto_jagung' => $newName,
            ]);

            session()->setFlashdata("success", "Data berhasil di tambah.");
            return redirect()->to(base_url('admin/jagung'));
        } else {
            session()->setFlashdata("error", "Data gagal di tambah.");
            return redirect()->to(base_url('admin/jagung'));
        }
    }
    public function hapus_jagung($id_jagung)
    {
        $jagung = $this->M_jagung->find($id_jagung);
        unlink('uploads/jagung/' . $jagung['foto_jagung']);

        $this->M_jagung->delete($id_jagung);
        session()->setFlashdata("success", "Data Berhasil di Hapus.");
        return redirect()->to(base_url('admin/jagung'));
    }
    public function edit_jagung($id_jagung)
    {
        $periksa = $this->validate([
            'file_upload' => [
                'uploaded[file_upload]',
                'mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file_upload,10000]',
            ],
        ]);

        if ($periksa) {
            $file = $this->request->getFile('file_upload');
            $newName = $file->getRandomName();
            $file->move('uploads/jagung', $newName);
            unlink('uploads/jagung/' . $this->request->getVar('lama'));

            $this->M_jagung->save([
                'id_jagung' => $id_jagung,
                'judul' => $this->request->getVar('judul'),
                'id_kategori' => $this->request->getVar('id_kategori'),
                'harga' => $this->request->getVar('harga'),
                'tersedia' => $this->request->getVar('tersedia'),
                'deskripsi' => $this->request->getVar('deskripsi'),
                'foto_jagung' => $newName,
            ]);

            session()->setFlashdata("success", "Data berhasil di ubah.");
            return redirect()->to(base_url('admin/jagung'));
        } else {
            $this->M_jagung->save([
                'id_jagung' => $id_jagung,
                'judul' => $this->request->getVar('judul'),
                'id_kategori' => $this->request->getVar('id_kategori'),
                'harga' => $this->request->getVar('harga'),
                'tersedia' => $this->request->getVar('tersedia'),
                'deskripsi' => $this->request->getVar('deskripsi'),
            ]);
            session()->setFlashdata("success", "Data berhasil di ubah.");
            return redirect()->to(base_url('admin/jagung'));
        }
    }

    public function pesanan()
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['title'] = 'Pesanan';
        $data['pesanan'] = $this->M_checkout->findAll();
        return view('admin/pesanan', $data);
    }
    public function hapus_pesanan($id_checkout)
    {
        $this->M_checkout->delete($id_checkout);
        session()->setFlashdata("success", "Data Berhasil di Hapus.");
        return redirect()->to(base_url('admin/pesanan'));
    }
    public function edit_pesanan($id_checkout)
    {
        $this->M_checkout->save([
            'id_checkout' => $id_checkout,
            'status' => $this->request->getVar('status')
        ]);
        session()->setFlashdata("success", "Data Berhasil di Ubah.");
        return redirect()->to(base_url('admin/pesanan'));
    }

    public function gambar1()
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['title'] = 'Gambar';
        $data['gambar'] = $this->M_gambar1->findAll();
        echo view('admin/gambar1', $data);
        echo view('admin/tambah/gambar1', $data);
    }
    public function tambah_gambar1()
    {
        $periksa = $this->validate([
            'file_upload' => [
                'uploaded[file_upload]',
                'mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file_upload,10000]',
            ],
        ]);
        if ($periksa) {
            $file = $this->request->getFile('file_upload');
            $newName = $file->getRandomName();
            $file->move('uploads/gambar1', $newName);

            $this->M_gambar1->save([
                'gambar' => $newName,
            ]);

            session()->setFlashdata("success", "gambar berhasil di tambah.");
            return redirect()->to(base_url('admin/gambar1'));
        } else {
            session()->setFlashdata("error", "gambar gagal di tambah.");
            return redirect()->to(base_url('admin/gambar1'));
        }
    }
    public function hapus_gambar1($id_gambar)
    {
        $gambar = $this->M_gambar1->find($id_gambar);
        unlink('uploads/gambar1/' . $gambar['gambar']);

        $this->M_gambar1->delete($id_gambar);
        session()->setFlashdata("success", "gambar Berhasil di Hapus.");
        return redirect()->to(base_url('admin/gambar1'));
    }
    public function edit_gambar1($id_gambar)
    {
        $periksa = $this->validate([
            'file_upload' => [
                'uploaded[file_upload]',
                'mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file_upload,10000]',
            ],
        ]);

        if ($periksa) {
            $file = $this->request->getFile('file_upload');
            $newName = $file->getRandomName();
            $file->move('uploads/gambar1', $newName);
            unlink('uploads/gambar1/' . $this->request->getVar('lama'));

            $this->M_gambar1->save([
                'id_gambar' => $id_gambar,
                'gambar' => $newName,
            ]);

            session()->setFlashdata("success", "gambar berhasil di ubah.");
            return redirect()->to(base_url('admin/gambar1'));
        } else {
            session()->setFlashdata("error", "gambar berhasil di ubah.");
            return redirect()->to(base_url('admin/gambar1'));
        }
    }

    public function gambar2()
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['title'] = 'Gambar';
        $data['gambar'] = $this->M_gambar2->findAll();
        echo view('admin/gambar2', $data);
        echo view('admin/tambah/gambar2', $data);
    }
    // public function tambah_gambar2()
    // {
    //     $periksa = $this->validate([
    //         'file_upload' => [
    //             'uploaded[file_upload]',
    //             'mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]',
    //             'max_size[file_upload,10000]',
    //         ],
    //     ]);
    //     if ($periksa) {
    //         $file = $this->request->getFile('file_upload');
    //         $newName = $file->getRandomName();
    //         $file->move('uploads/gambar2', $newName);

    //         $this->M_gambar2->save([
    //             'gambar' => $newName,
    //         ]);

    //         session()->setFlashdata("success", "gambar berhasil di tambah.");
    //         return redirect()->to(base_url('admin/gambar2'));
    //     } else {
    //         session()->setFlashdata("error", "gambar gagal di tambah.");
    //         return redirect()->to(base_url('admin/gambar2'));
    //     }
    // }
    // public function hapus_gambar2($id_gambar)
    // {
    //     $gambar = $this->M_gambar2->find($id_gambar);
    //     unlink('uploads/gambar2/' . $gambar['gambar']);

    //     $this->M_gambar2->delete($id_gambar);
    //     session()->setFlashdata("success", "gambar Berhasil di Hapus.");
    //     return redirect()->to(base_url('admin/gambar2'));
    // }
    public function edit_gambar2($id_gambar)
    {
        $periksa = $this->validate([
            'file_upload' => [
                'uploaded[file_upload]',
                'mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file_upload,10000]',
            ],
        ]);

        if ($periksa) {
            $file = $this->request->getFile('file_upload');
            $newName = $file->getRandomName();
            $file->move('uploads/gambar2', $newName);
            unlink('uploads/gambar2/' . $this->request->getVar('lama'));

            $this->M_gambar2->save([
                'id_gambar' => $id_gambar,
                'gambar' => $newName,
            ]);

            session()->setFlashdata("success", "gambar berhasil di ubah.");
            return redirect()->to(base_url('admin/gambar2'));
        } else {
            session()->setFlashdata("error", "gambar berhasil di ubah.");
            return redirect()->to(base_url('admin/gambar2'));
        }
    }

    public function chat()
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['title'] = 'Chat';
        $data['chat'] = $this->M_login->where('kondisi = 2')->findAll();
        // dd($data['chat']);
        return view('admin/chat', $data);
    }

    public function chatku($id_login)
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['title'] = 'Chat';
        $data['chat'] = $this->M_login->where('kondisi = 2')->findAll();
        $data['chatku'] = $this->M_login->where('id_login', $id_login)->first();
        $request = \Config\Services::request();
        $no =  $request->uri->getSegment(3);
        $data['pesanku'] = $this->M_login->get_pesan($no);
        return view('admin/chatku', $data);
    }
}
