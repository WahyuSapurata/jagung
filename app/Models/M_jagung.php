<?php

namespace App\Models;

use CodeIgniter\Model;

class M_jagung extends Model
{
    protected $table      = 'jagung';
    protected $primaryKey = 'id_jagung';
    protected $allowedFields = ['judul', 'id_kategori', 'harga', 'tersedia', 'foto_jagung', 'deskripsi'];

    public function join_jagung()
    {
        $query =  $this->db->table('jagung')
            ->join('kategori', 'jagung.id_kategori = kategori.id_kategori')
            ->get();
        return $query;
    }

    public function cari_jagung($cari)
    {
        $query = $this->db->query("SELECT * FROM jagung WHERE judul LIKE '%$cari%'");
        return $query->getResultArray();
    }
}