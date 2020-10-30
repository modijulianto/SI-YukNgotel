<?php

namespace App\Controllers;

use App\Models\M_admin;
use App\Models\M_akomodasi;

class Akomodasi extends BaseController
{

    protected $m_admin;
    protected $m_akomodasi;
    public function __construct()
    {
        $this->m_admin = new M_admin();
        $this->m_akomodasi = new M_akomodasi();
        // if (session()->get('email') == null) {
        //     is_loggin();
        // }
    }

    public function hotel()
    {
        $data = [
            'akun' => $this->m_admin->getAkun(session()->get('email')),
            'title' => 'Akomodasi Hotel | YukNgotel',
            'akomodasi' => $this->m_akomodasi->getHotel(),
        ];
        return view('data_table/akomodasi/data_hotel', $data);
    }
}
