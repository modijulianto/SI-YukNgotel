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
        $query = $this->db->table('tb_akomodasi')->join('tb_tipeAkomodasi', 'tb_tipeAkomodasi.id_tipeAkomodasi=tb_akomodasi.id_tipeAkomodasi')->where('id_akomodasi', $id)->get();
        return $query->getRowArray();
    }

    public function getTipeAkomodasi_byId($id)
    {
        $query = $this->db->table('tb_tipeAkomodasi')->where('id_tipeAkomodasi', $id)->get();
        return $query->getRowArray();
    }

    public function getKamarByIdAkomodasi($id)
    {
        $query = $this->db->table('tb_kamar')->where('id_akomodasi', $id)->join('tb_tipeKamar', 'tb_tipeKamar.id_tipeKamar=tb_kamar.id_tipeKamar')->get();
        return $query->getResultArray();
    }

    public function getHotel()
    {
        $query = $this->db->table('tb_akomodasi')->orderBy('id_akomodasi', 'DESC')->getWhere('id_tipeAkomodasi=1');
        return $query->getResultArray();
    }

    public function getApartemen()
    {
        $query = $this->db->table('tb_akomodasi')->orderBy('id_akomodasi', 'DESC')->getWhere('id_tipeAkomodasi=2');
        return $query->getResultArray();
    }

    public function getVilla()
    {
        $query = $this->db->table('tb_akomodasi')->orderBy('id_akomodasi', 'DESC')->getWhere('id_tipeAkomodasi=3');
        return $query->getResultArray();
    }

    public function getMotel()
    {
        $query = $this->db->table('tb_akomodasi')->orderBy('id_akomodasi', 'DESC')->getWhere('id_tipeAkomodasi=4');
        return $query->getResultArray();
    }

    public function getHomestay()
    {
        $query = $this->db->table('tb_akomodasi')->orderBy('id_akomodasi', 'DESC')->getWhere('id_tipeAkomodasi=5');
        return $query->getResultArray();
    }

    public function getResort()
    {
        $query = $this->db->table('tb_akomodasi')->orderBy('id_akomodasi', 'DESC')->getWhere('id_tipeAkomodasi=6');
        return $query->getResultArray();
    }

    public function getTipeAkomodasi()
    {
        $query = $this->db->table('tb_tipeAkomodasi')->get();
        return $query->getResultArray();
    }
}
