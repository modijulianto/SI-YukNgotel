<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class M_hotel extends Model
{
    protected $db;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        // if (session()->get('email') == null) {
        //     is_loggin();
        // }
    }

    public function getAkomodasi()
    {
        $query = $this->db->table('tb_tipeAkomodasi')->get();
        return $query->getResultArray();
    }
}
