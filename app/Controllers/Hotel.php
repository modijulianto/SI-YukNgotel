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

	public function cari()
	{
		$destination = $this->request->getVar('destination');
		if ($destination) {
			$cari = $this->m_hotel->search($destination);
		} else {
			$cari = $this->M_hotel;
		}

		$data['title'] = "Pencarian Data Akomodasi";
		$data['akomodasi'] = $this->m_akomodasi->getTipeAkomodasi();
		$data['hotel'] = $cari->paginate(4, 'tb_akomodasi');
		$data['pager'] = $this->m_hotel->pager;
		// $data['tipe'] = $this->m_hotel->getTipeAkomodasi($id);
		$data['max_cost'] = $this->m_hotel->getMaxCost();
		$data['max_guest'] = $this->m_hotel->getMaxGuests();

		return view('frontend/hasil_cari', $data);
	}

	public function akomodasi($id)
	{
		// get akomodasi sesuai dengan ID tipe akomodasi
		$group = $this->m_hotel->getAkomodasiById($id);

		$data['title'] = "Data Akomodasi";
		$data['akomodasi'] = $this->m_akomodasi->getTipeAkomodasi();
		$data['hotel'] = $group->paginate(4, 'tb_akomodasi');
		$data['pager'] = $this->m_hotel->pager;
		$data['tipe'] = $this->m_hotel->getTipeAkomodasi($id);
		$data['max_cost'] = $this->m_hotel->getMaxCost();
		$data['max_guest'] = $this->m_hotel->getMaxGuests();

		// dd($data['max_cost']);

		return view('frontend/akomodasi', $data);
	}

	public function rooms($id)
	{
		$data['title'] = "List Kamar Hotel";
		$data['akomodasi'] = $this->m_akomodasi->getTipeAkomodasi();
		$data['rooms'] = $this->m_hotel->getRoomsById($id);
		$data['nama'] = $this->m_hotel->getNamaAkomodasi($id);
		$data['max_cost'] = $this->m_hotel->getMaxCost();
		$data['max_guest'] = $this->m_hotel->getMaxGuests();

		return view('frontend/rooms', $data);
	}

	public function detail($id)
	{
		$data['title'] = "Detail Kamar";
		$data['akomodasi'] = $this->m_akomodasi->getTipeAkomodasi();
		$data['room'] = $this->m_hotel->getRoomById($id);
		$data['max_cost'] = $this->m_hotel->getMaxCost();
		$data['max_guest'] = $this->m_hotel->getMaxGuests();

		return view('frontend/detail', $data);
	}

	public function booking($id)
	{
		$data['akomodasi'] = $this->m_akomodasi->getTipeAkomodasi();
		$data['book'] = $this->m_hotel->getRoomById($id);

		return view('frontend/booking/order', $data);
	}

	//--------------------------------------------------------------------

}
