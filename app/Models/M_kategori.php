<?php

namespace App\Models;

use CodeIgniter\Model;

class M_kategori extends Model
{
    protected $table      = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $allowedFields = ['jenis_kategori', 'foto'];
}