<?php

namespace App\Controllers;

use App\Models\M_admin;
use App\Models\M_akomodasi;
use App\Models\M_room;

class Room extends BaseController
{
    protected $m_admin;
    protected $m_akomodasi;
    protected $m_room;
    protected $db;
    public function __construct()
    {
        $this->m_admin = new M_admin();
        $this->m_akomodasi = new M_akomodasi();
        $this->m_room = new M_room();
        $this->validation = \Config\Services::validation();
        $this->db = \Config\Database::connect();
    }

    public function add($id)
    {
        $data = [
            'akun' => $this->m_admin->getAkun(session()->get('email')),
            'title' => 'Tambah Data Kamar Hotel | YukNgotel',
            'akomodasi' => $this->m_akomodasi->getHotel(),
        ];
        return view('data_table/kamar/input_kamar', $data);
    }
}
