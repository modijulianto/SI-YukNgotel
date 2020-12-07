<?php

namespace App\Models;

use CodeIgniter\Model;

class M_hotel extends Model
{

    protected $table = 'tb_akomodasi';
    protected $primarykey = 'id_akomodasi';

    // public function __construct()
    // {
    //     $this->db = \Config\Database::connect();
    // }

    public function getAkomodasi($id)
    {
        $query = $this->db->table('tb_akomodasi')
            ->where('tb_akomodasi.id_tipeAkomodasi', $id)
            ->join('tb_tipeAkomodasi', 'tb_tipeAkomodasi.id_tipeAkomodasi=tb_akomodasi.id_tipeAkomodasi')
            ->get();

        return $query->getResultArray();
    }

    public function getTipeAkomodasi($id)
    {
        $query = $this->db->table('tb_tipeAkomodasi')
            ->where('id_tipeAkomodasi', $id)
            ->get();

        return $query->getRowObject();
    }

    public function search($destination)
    {
        // $builder = $this->table('tb_akomodasi');
        // $builder->like('nama_akomodasi', $destination);
        // return $builder;

        return $this->table('tb_akomodasi')->like('nama_akomodasi', $destination);
    }
}
