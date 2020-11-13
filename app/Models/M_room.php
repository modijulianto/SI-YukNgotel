<?php

namespace App\Models;

use CodeIgniter\Model;

class M_room extends Model
{
    protected $table = 'tb_kamar';
    protected $primaryKey = 'id_kamar';
    protected $allowedFields = ['no_kamar', 'id_akomodasi', 'id_tipeKamar', 'tarif', 'keterangan', 'max_guest', 'foto_kamar', 'status'];

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function getTipeKamar()
    {
        $query = $this->db->table('tb_tipeKamar')->get();
        return $query->getResultArray();
    }

    public function getKamarById($id)
    {
        $query = $this->db->table('tb_kamar')->where('id_kamar', $id)->get();
        return $query->getRowArray();
    }
}
