<?php

namespace App\Models;

use CodeIgniter\Model;

class M_login extends Model
{
    protected $table      = 'login';
    protected $primaryKey = 'id_login';
    protected $allowedFields = ['nama', 'email', 'username', 'password', 'otp'];

    public function get_pesan($no)
    {
        $query =  $this->db->table('login')
            ->where('id_login', $no)
            ->get();
        return $query->getRowArray();
    }

    public function customchat()
    {
        $query = $this->db->query("SELECT * FROM login ORDER BY id_login ASC");
        return $query->getRowArray();
    }
}