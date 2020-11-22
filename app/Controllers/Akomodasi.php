<?php

namespace App\Controllers;

use App\Models\M_admin;
use App\Models\M_akomodasi;

class Akomodasi extends BaseController
{

    protected $m_admin;
    protected $m_akomodasi;
    protected $db;
    public function __construct()
    {
        $this->m_admin = new M_admin();
        $this->m_akomodasi = new M_akomodasi();
        $this->validation = \Config\Services::validation();
        $this->db = \Config\Database::connect();
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

    public function apartemen()
    {
        $data = [
            'akun' => $this->m_admin->getAkun(session()->get('email')),
            'title' => 'Akomodasi Hotel | YukNgotel',
            'akomodasi' => $this->m_akomodasi->getApartemen(),
        ];
        return view('data_table/akomodasi/data_apartemen', $data);
    }
    public function villa()
    {
        $data = [
            'akun' => $this->m_admin->getAkun(session()->get('email')),
            'title' => 'Akomodasi Hotel | YukNgotel',
            'akomodasi' => $this->m_akomodasi->getVilla(),
        ];
        return view('data_table/akomodasi/data_villa', $data);
    }
    public function motel()
    {
        $data = [
            'akun' => $this->m_admin->getAkun(session()->get('email')),
            'title' => 'Akomodasi Hotel | YukNgotel',
            'akomodasi' => $this->m_akomodasi->getMotel(),
        ];
        return view('data_table/akomodasi/data_motel', $data);
    }
    public function homestay()
    {
        $data = [
            'akun' => $this->m_admin->getAkun(session()->get('email')),
            'title' => 'Akomodasi Hotel | YukNgotel',
            'akomodasi' => $this->m_akomodasi->getHomestay(),
        ];
        return view('data_table/akomodasi/data_homestay', $data);
    }
    public function resort()
    {
        $data = [
            'akun' => $this->m_admin->getAkun(session()->get('email')),
            'title' => 'Akomodasi Hotel | YukNgotel',
            'akomodasi' => $this->m_akomodasi->getResort(),
        ];
        return view('data_table/akomodasi/data_resort', $data);
    }

    public function detail($id)
    {
        $data = [
            'akun' => $this->m_admin->getAkun(session()->get('email')),
            'akomodasi' => $this->m_akomodasi->getAkomodasi_byId($id),
            'kamar' => $this->m_akomodasi->getKamarByIdAkomodasi($id),
            'title' => 'Akomodasi Hotel | YukNgotel',
        ];
        return view('data_table/akomodasi/detail_hotel', $data);
    }

    public function add()
    {
        $data = [
            'akun' => $this->m_admin->getAkun(session()->get('email')),
            'title' => 'Input Akomodasi | YukNgotel',
            'tipe' => $this->m_akomodasi->getTipeAkomodasi(),
            'validation' => $this->validation
        ];
        return view('data_table/akomodasi/input_akomodasi', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'kecamatan' => 'required',
            'nama' => 'required',
            'tipeAkomodasi' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required',
            'email' => 'required|valid_email',
            'telepon' => 'required',
            'kecamatan' => 'required|numeric',
            'foto' => 'is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]'
        ])) {
            // return redirect()->to('/Akomodasi/add')->withInput()->with('validation', $this->validation);
            return redirect()->to('/Akomodasi/add')->withInput();
        }

        // ambil data file gambar
        $fileFoto = $this->request->getFile('foto');
        if ($fileFoto->getError() == 4) {
            $namaFoto = "default.jpg";
        } else {
            // generate nama file random untuk nama foto
            $namaFoto = $fileFoto->getRandomName();
            // pindahkan gambar ke folder
            $fileFoto->move('upload/akomodasi', $namaFoto);
        }


        $this->m_akomodasi->save([
            'id_kecamatan' => $this->request->getVar('kecamatan'),
            'nama_akomodasi' => $this->request->getVar('nama'),
            'id_tipeAkomodasi' => $this->request->getVar('tipeAkomodasi'),
            'alamat_lengkap' => $this->request->getVar('alamat'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'bintang' => $this->request->getVar('bintang'),
            'email' => $this->request->getVar('email'),
            'telepon' => $this->request->getVar('telepon'),
            'tag' => $this->request->getVar('tag'),
            'foto' => $namaFoto
        ]);

        session()->setFlashdata('pesan', 'Added');

        $idTipe = $this->request->getVar('tipeAkomodasi');
        $namaTipe = $this->m_akomodasi->getTipeAkomodasi_byId($idTipe);
        return redirect()->to('/Akomodasi/' . $namaTipe['nama_tipe']);
    }

    public function update($id)
    {
        $data = [
            'akun' => $this->m_admin->getAkun(session()->get('email')),
            'title' => 'Update Akomodasi | YukNgotel',
            'tipe' => $this->m_akomodasi->getTipeAkomodasi(),
            'validation' => $this->validation,
            'akomodasi' => $this->m_akomodasi->getAkomodasi_byId($id)
        ];

        return view('data_table/akomodasi/update_akomodasi', $data);
    }

    public function save_update($id)
    {
        if (!$this->validate([
            'nama' => 'required',
            'tipeAkomodasi' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required',
            'email' => 'required|valid_email',
            'telepon' => 'required',
            // 'foto' => 'is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]'
        ])) {
            // return redirect()->to('/Akomodasi/add')->withInput()->with('validation', $this->validation);
            return redirect()->to('/Akomodasi/update/' . $id)->withInput();
        }

        $fileFoto = $this->request->getFile('foto');

        // cek gambar, apakah tetap gambar yang lama
        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getVar('fotoLama');
        } else {
            // generate nama file random untuk nama foto
            $namaFoto = $fileFoto->getRandomName();
            // pindahkan gambar ke folder
            $fileFoto->move('upload/akomodasi', $namaFoto);
            // hapus foto lama
            unlink('upload/akomodasi/' . $this->request->getVar('fotoLama'));
        }

        $this->m_akomodasi->save([
            'id_akomodasi' => $id,
            'nama_akomodasi' => $this->request->getVar('nama'),
            'id_tipeAkomodasi' => $this->request->getVar('tipeAkomodasi'),
            'alamat_lengkap' => $this->request->getVar('alamat'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'bintang' => $this->request->getVar('bintang'),
            'email' => $this->request->getVar('email'),
            'telepon' => $this->request->getVar('telepon'),
            'tag' => $this->request->getVar('tag'),
            'foto' => $namaFoto,
        ]);

        session()->setFlashdata('pesan', 'Updated');

        $idTipe = $this->request->getVar('tipeAkomodasi');
        $namaTipe = $this->m_akomodasi->getTipeAkomodasi_byId($idTipe);
        return redirect()->to('/Akomodasi/' . $namaTipe['nama_tipe']);
    }

    public function delete($id)
    {
        // get foto berdasarkan id
        $foto = $this->m_akomodasi->getAkomodasi_byId($id);

        // cek jika file gambar default.jpg
        if ($foto['foto'] != 'default.jpg') {
            // hapus foto akomodasi
            unlink('upload/akomodasi/' . $foto['foto']);
        }

        $this->m_akomodasi->delete($id);
        session()->setFlashdata('pesan', 'Deleted');
        return redirect()->to('/Akomodasi/' . $foto['nama_tipe']);
    }
}
