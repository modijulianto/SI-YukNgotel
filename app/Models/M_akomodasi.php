<?php

namespace App\Models;

use CodeIgniter\Model;

class M_akomodasi extends Model
{
    protected $table = 'tb_akomodasi';
    protected $primaryKey = 'id_akomodasi';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_kecamatan', 'nama_akomodasi', 'id_tipeAkomodasi', 'alamat_lengkap', 'deskripsi', 'bintang', 'email', 'telepon', 'tag', 'foto'];

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function getAkomodasi($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id_akomodasi' => $id])->first();
    }

    public function getAkomodasi_byId($id)
    {
        $query = $this->db->table('tb_akomodasi')->where('id_akomodasi', $id)->get();
        return $query->getRowArray();
    }

    public function getHotel()
    {
        $query = $this->db->table('tb_akomodasi')->orderBy('id_akomodasi', 'DESC')->getWhere('id_tipeAkomodasi=1');
        return $query->getResultArray();
    }

    public function getTipeAkomodasi()
    {
        $query = $this->db->table('tb_tipeAkomodasi')->get();
        return $query->getResultArray();
    }
}
