<?php

namespace App\Controllers;

use App\Models\M_admin;
use App\Models\M_hotel;

class Hotel extends BaseController
{
	protected $m_admin;
	public function __construct()
	{
		$this->m_admin = new M_admin();
		$this->m_hotel = new M_hotel();
		// if (session()->get('email') == null) {
		//     is_loggin();
		// }
	}

	public function index()
	{
		$data = [
			'title' => "Satu Aplikasi untuk Booking Hotel Termurah | YukNgotel",
			'akomodasi' => $this->m_hotel->getAkomodasi()
		];
		return view('frontend/beranda', $data);
	}

	//--------------------------------------------------------------------

}
