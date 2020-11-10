<?php

namespace App\Models;

use CodeIgniter\Model;

class M_room extends Model
{
    protected $table = 'tb_akomodasi';
    protected $primaryKey = 'id_akomodasi';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_kecamatan', 'nama_akomodasi', 'id_tipeAkomodasi', 'alamat_lengkap', 'deskripsi', 'bintang', 'email', 'telepon', 'tag', 'foto'];

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
}
