<?php

namespace App\Models;

use CodeIgniter\Model;

class M_checkout extends Model
{
    protected $table      = 'checkout';
    protected $primaryKey = 'id_checkout';
    protected $allowedFields = ['total', 'nama', 'nomor', 'jenis_kelamin', 'koordinat', 'alamat', 'alamat_lengkap', 'id_jagung', 'qty', 'status', 'id_login'];

    public function join_checkout()
    {
        $query =  $this->db->table('checkout')
            ->join('jagung', 'checkout.id_jagung = jagung.id_jagung')
            ->where('id_login', session('id_login'))
            ->get();
        return $query;
    }

    public function join_detail($id_checkout)
    {
        $query =  $this->db->table('checkout')
            ->join('jagung', 'checkout.id_jagung = jagung.id_jagung')
            ->where('id_checkout', $id_checkout)
            ->get();
        return $query->getRowArray();
    }

    public function jumlah_terjual($id_jagung)
    {
        $query = $this->db->query("SELECT * FROM checkout where id_jagung='$id_jagung'");
        return $query->getNumRows();
    }
}
