<?php

namespace App\Controllers;


class Buat_file extends BaseController
{
    public function index()
    {
        return view('form');
    }
    public function proses()
    {
        $newfile = fopen($this->request->getVar('namafile') . '.txt', "w");
        $str = "username : " . $this->request->getVar('username');
        fwrite($newfile, $str);
        fclose($newfile);
        $data = [
            'nama' => 'Anas'
        ];
        $this->response->setStatusCode(200);
        return $this->response->setJSON($data);
    }
}
