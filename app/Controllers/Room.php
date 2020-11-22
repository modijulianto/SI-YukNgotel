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
            'akomodasi' => $this->m_akomodasi->getAkomodasi_byId($id),
            'validation' => $this->validation,
            'tipeKamar' => $this->m_room->getTipeKamar(),
        ];
        return view('data_table/kamar/input_kamar', $data);
    }

    public function save_room($id)
    {
        dd($_FILES['foto']['name']);
        if (!$this->validate([
            'noKamar' => 'required',
            'tarif' => 'required|numeric',
            'keterangan' => 'required',
            'luas_kamar' => 'required|numeric',
            'max_guest' => 'required|numeric',
        ])) {
            // return redirect()->to('/Akomodasi/add')->withInput()->with('validation', $this->validation);
            return redirect()->to('/Room/add/' . $id)->withInput();
        }
        // dd($id);

        $this->m_room->save([
            'no_kamar' => $this->request->getVar('noKamar'),
            'id_akomodasi' => $id,
            'id_tipeKamar' => $this->request->getVar('tipeKamar'),
            'tarif' => $this->request->getVar('tarif'),
            'keterangan' => $this->request->getVar('keterangan'),
            'luas_kamar' => $this->request->getVar('luas_kamar'),
            'max_guest' => $this->request->getVar('max_guest'),
            'foto_kamar' => "default.jpg",
            'status' => 'V'
        ]);

        session()->setFlashdata('pesan', 'Added');
        return redirect()->to('/Akomodasi/detail/' . $id);
    }

    public function update($id)
    {
        $data = [
            'akun' => $this->m_admin->getAkun(session()->get('email')),
            'title' => 'Tambah Data Kamar Hotel | YukNgotel',
            'kamar' => $this->m_room->getKamarById($id),
            'validation' => $this->validation,
            'tipeKamar' => $this->m_room->getTipeKamar(),
        ];
        return view('data_table/kamar/update_kamar', $data);
    }

    public function save_update($id)
    {
        if (!$this->validate([
            'noKamar' => 'required',
            'tarif' => 'required|numeric',
            'keterangan' => 'required',
            'luas_kamar' => 'required|numeric',
            'max_guest' => 'required|numeric',
        ])) {
            // return redirect()->to('/Akomodasi/add')->withInput()->with('validation', $this->validation);
            return redirect()->to('/Room/add/' . $id)->withInput();
        }
        // dd($id);

        $this->m_room->save([
            'id_kamar' => $id,
            'no_kamar' => $this->request->getVar('noKamar'),
            'id_tipeKamar' => $this->request->getVar('tipeKamar'),
            'tarif' => $this->request->getVar('tarif'),
            'keterangan' => $this->request->getVar('keterangan'),
            'luas_kamar' => $this->request->getVar('luas_kamar'),
            'max_guest' => $this->request->getVar('max_guest'),
            'foto_kamar' => "default.jpg"
        ]);

        session()->setFlashdata('pesan', 'Added');
        return redirect()->to('/Akomodasi/detail/' . $this->request->getVar('id_akomodasi'));
    }

    public function delete($id)
    {
        // get foto berdasarkan id
        $foto = $this->m_room->getKamarById($id);
        $id_Akomodasi = $foto['id_akomodasi'];

        // cek jika file gambar default.jpg
        if ($foto['foto_kamar'] != 'default.jpg') {
            // hapus foto akomodasi
            unlink('upload/kamar/' . $foto['foto_kamar']);
        }

        $this->m_room->delete($id);
        session()->setFlashdata('pesan', 'Deleted');
        return redirect()->to('/Akomodasi/detail/' . $id_Akomodasi);
    }
}
