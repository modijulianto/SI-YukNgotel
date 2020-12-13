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

    public function getAkomodasiById($id)
    {
        return $this->table('tb_akomodasi')->where('id_tipeAkomodasi', $id);
    }

    public function getMaxCost()
    {
        return $this->db->table('tb_kamar')
            ->select('MAX(tarif) AS max_tarif')
            ->get()->getRowArray();
    }

    public function getMaxGuests()
    {
        $cost = $this->db->table('tb_kamar')
            ->select('MAX(max_guest) AS max_guest')
            ->get();
        return $cost->getRowArray();
    }

    public function getTipeAkomodasi($id)
    {
        $query = $this->db->table('tb_tipeAkomodasi')
            ->where('id_tipeAkomodasi', $id)
            ->get();

        return $query->getRowObject();
    }

    public function getNamaAkomodasi($id)
    {
        $query = $this->db->table('tb_akomodasi')
            ->where('tb_akomodasi.id_akomodasi', $id)
            ->join('tb_tipeAkomodasi', 'tb_tipeAkomodasi.id_tipeAkomodasi=tb_akomodasi.id_tipeAkomodasi')
            ->get();

        return $query->getRowObject();
    }

    // Get room sesuai dengan akomodasi yang dipilih
    public function getRoomsById($id)
    {
        return $this->db->table('tb_kamar')
            ->where('tb_kamar.id_akomodasi', $id)
            ->join('tb_akomodasi', 'tb_akomodasi.id_akomodasi=tb_kamar.id_akomodasi')
            ->join('tb_tipeKamar', 'tb_tipeKamar.id_tipeKamar=tb_kamar.id_tipeKamar')
            ->get()->getResultArray();
    }

    // Get informasi room
    public function getRoomById($id)
    {
        return $this->db->table('tb_kamar')
            ->where('tb_kamar.id_kamar', $id)
            ->join('tb_akomodasi', 'tb_akomodasi.id_akomodasi=tb_kamar.id_akomodasi')
            ->join('tb_tipeKamar', 'tb_tipeKamar.id_tipeKamar=tb_kamar.id_tipeKamar')
            ->get()->getRowArray();
    }

    public function search($destination)
    {
        // $builder = $this->table('tb_akomodasi');
        // $builder->like('nama_akomodasi', $destination);
        // return $builder;

        return $this->table('tb_akomodasi')->like('id_kecamatan', $destination);
    }
}
