<?php

namespace App\Models;

use CodeIgniter\Model;

class M_addcart extends Model
{
    protected $table      = 'cart';
    protected $primaryKey = 'id_cart';
    protected $allowedFields = ['id_jagung', 'id_login'];

    public function join_cart()
    {
        $query =  $this->db->table('cart')
            ->join('jagung', 'cart.id_jagung = jagung.id_jagung')
            ->where('id_login', session('id_login'))
            ->get();
        return $query;
    }

    public function jumlah_cart()
    {
        $data = session('id_login');
        $query = $this->db->query("SELECT * FROM cart where id_login = '$data'");
        return $query->getNumRows();
    }
}