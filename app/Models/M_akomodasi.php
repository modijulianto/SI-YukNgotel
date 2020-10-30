<?php

namespace App\Models;

use CodeIgniter\Model;

class M_akomodasi extends Model
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function getAkomodasi()
    {
        $query = $this->db->table('tb_tipeAkomodasi')->get();
        return $query->getResultArray();
    }

    public function getHotel()
    {
        $query = $this->db->table('tb_akomodasi')->getWhere('id_tipeAkomodasi=1');
        return $query->getResultArray();
    }
}
