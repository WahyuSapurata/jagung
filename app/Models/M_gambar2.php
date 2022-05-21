<?php

namespace App\Models;

use CodeIgniter\Model;

class M_gambar2 extends Model
{
    protected $table      = 'gambar2';
    protected $primaryKey = 'id_gambar';
    protected $allowedFields = ['gambar'];
}