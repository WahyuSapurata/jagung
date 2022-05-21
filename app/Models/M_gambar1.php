<?php

namespace App\Models;

use CodeIgniter\Model;

class M_gambar1 extends Model
{
    protected $table      = 'gambar1';
    protected $primaryKey = 'id_gambar';
    protected $allowedFields = ['gambar'];
}