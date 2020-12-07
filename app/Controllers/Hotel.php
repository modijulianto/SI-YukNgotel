<?php

namespace App\Controllers;

use App\Models\M_admin;
use App\Models\M_akomodasi;
use App\Models\M_hotel;

class Hotel extends BaseController
{
	protected $m_admin;
	protected $m_akomodasi;
	protected $m_hotel;
	public function __construct()
	{
		$this->m_admin = new M_admin();
		$this->m_akomodasi = new M_akomodasi();
		$this->m_hotel = new M_hotel();
	}

	public function index()
	{
		$data = [
			'title' => "Satu Aplikasi untuk Booking Hotel Termurah | YukNgotel",
			'akomodasi' => $this->m_akomodasi->getTipeAkomodasi()
		];

		return view('frontend/beranda', $data);
	}

	public function old()
	{
		$data = [
			'title' => "Satu Aplikasi untuk Booking Hotel Termurah | YukNgotel",
			'akomodasi' => $this->m_akomodasi->getTipeAkomodasi()
		];
		return view('frontend/beranda1', $data);
	}

	public function cari()
	{
		$destination = $this->request->getVar('destination');
		if ($destination) {
			$cari = $this->m_hotel->search($destination);
		} else {
			$cari = $this->M_hotel;
		}

		$data = [
			'title' => "Pencarian Data Akomodasi",
			'akomodasi' => $this->m_akomodasi->getTipeAkomodasi(),
			'hotel' => $cari->paginate(4, 'tb_akomodasi'),
			'pager' => $this->m_hotel->pager,
		];

		return view('frontend/hasil_cari', $data);
	}

	public function akomodasi($id)
	{
		$data = [
			'title' => "Pencarian Data Akomodasi",
			'akomodasi' => $this->m_akomodasi->getTipeAkomodasi(),
			// 'hotel' => $this->m_hotel->getAkomodasi($id),
			'hotel' => $this->m_hotel->paginate(4, 'tb_akomodasi'),
			'pager' => $this->m_hotel->pager,
			'tipe' => $this->m_hotel->getTipeAkomodasi($id)
		];

		return view('frontend/akomodasi', $data);
	}

	//--------------------------------------------------------------------

}
