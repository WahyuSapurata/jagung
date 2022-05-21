<?php

namespace App\Models;

use CodeIgniter\Model;

class M_chat extends Model
{
    protected $table      = 'pesan';
    protected $primaryKey = 'id_pesan';
    protected $allowedFields = ['id_login', 'id_lawan', 'isi', 'waktu', 'kondisi'];

    public function getChat($id_login, $id_lawan)
    {
        // $query =  $this->db->table('pesan')
        //     ->where('id_login', $id_login.'
        //     and id_lawan'$id_lawan'
        //     `or` id_login='.$id_lawan.'
        //     `and` id_lawan='.$id_login)
        //     ->get();
        $query = $this->db->query("SELECT * FROM pesan where id_login='$id_login' and id_lawan='$id_lawan' or id_login='$id_lawan' and id_lawan='$id_login'");
        return $query->getResultArray();
    }

    public function jumlah_chat()
    {
        $data = session('id_login');
        $query = $this->db->query("SELECT * FROM pesan where id_lawan = '$data' and kondisi = '1'");
        return $query->getNumRows();
    }
}