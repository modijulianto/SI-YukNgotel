<?php

namespace App\Controllers;

use App\Models\M_admin;
use App\Models\M_akomodasi;

class Hotel extends BaseController
{
	protected $m_admin;
	protected $m_akomodasi;
	public function __construct()
	{
		$this->m_admin = new M_admin();
		$this->m_akomodasi = new M_akomodasi();
	}

	public function index()
	{
		$data = [
			'title' => "Satu Aplikasi untuk Booking Hotel Termurah | YukNgotel",
			'akomodasi' => $this->m_akomodasi->getTipeAkomodasi()
		];
		return view('frontend/beranda', $data);
	}

	//--------------------------------------------------------------------

}
