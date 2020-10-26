<?php

namespace App\Controllers;

use App\Models\M_admin;
use Config\Validation;

class Admin extends BaseController
{

    protected $m_admin;
    public function __construct()
    {
        $this->m_admin = new M_admin();
    }

    public function index()
    {
        $data = [
            'akun' => $this->m_admin->getAkun(session()->get('email')),
            'title' => 'Beranda | YukNgotel',
        ];
        return view('layout/template_admin', $data);
    }

    // MANAGER
    public function manager()
    {
        // $manager = $this->m_admin->findAll();

        $data = [
            'akun' => $this->m_admin->getAkun(session()->get('email')),
            'title' => "Data Manager",
            'manager' => $this->m_admin->getManager()
        ];

        // $manager = $this->m_admin->where(['role_id' => 1]);

        return view('data_table/data_manager', $data);
    }
    // END MANAGER

    // ADMIN
    public function admin()
    {
        $data = [
            'akun' => $this->m_admin->getAkun(session()->get('email')),
            'title' => "Data Admin",
            'admin' => $this->m_admin->getAdmin(),
            'validation' => \Config\Services::validation()
        ];
        return view('data_table/data_admin', $data);
    }

    public function save_admin()
    {
        // validasi input data
        if (!$this->validate([
            'nama' => 'required',
            'email' => [
                'rules' => 'required|is_unique[tb_akun.email]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ]
        ])) {
            $validaion = \Config\Services::validation();
            // dd($validaion);
            return redirect()->to('/admin/admin')->withInput()->with('validation', $validaion);
        }

        $this->m_admin->save([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'foto' => $this->request->getVar('foto'),
            'role_id' => 2
        ]);

        session()->setFlashdata('$this->validation = \Config\Services::validation();esan', 'Created');
        return redirect()->to('/admin/admin');
    }

    public function update_admin($id_akun)
    {
        dd(json_encode($this->m_admin->getAdmin($id_akun)));
    }

    public function delete_admin($id_akun)
    {
        // die;
        dd($id_akun);
        $this->m_admin->delete(['md5(id_akun)' => $id_akun]);
        session()->setFlashdata('pesan', 'Deleted');
        return redirect()->to('/admin/admin');
    }
    // END ADMIN


    // RECEPTIONIST
    public function receptionist()
    {
        $data = [
            'akun' => $this->m_admin->getAkun(session()->get('email')),
            'title' => "Data Receptionist",
            'validation' => \Config\Services::validation()
        ];
        return view('data_table/data_receptionist', $data);
    }

    public function ambilReceptionist()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'receptionist' => $this->m_admin->getReceptionist(),
                'validation' => \Config\Services::validation()
            ];

            $msg = [
                'data' => view('data_table/table_receptionist', $data)
            ];

            echo json_encode($msg);
        } else {
            exit('Maaf data tidak dapat diproses');
        }
    }

    public function save_receptionist()
    {
        $validaion = \Config\Services::validation();
        if ($this->request->isAJAX()) {

            $valid = $this->validate([
                'name' => 'required',
                'email' => [
                    'rules' => 'required|valid_email|is_unique[tb_akun.email]',
                    'errors' => [
                        'required' => 'The email field is required.',
                        'is_unique' => 'Email already registered.'
                    ]
                ],
                'password' => 'required'
            ]);

            if (!$valid) {
                $msg = ['error' => [
                    'name' => $validaion->getError('name'),
                    'email' => $validaion->getError('email'),
                    'password' => $validaion->getError('password'),
                ]];
            } else {
                if ($this->request->getVar('foto') == null) {
                    $foto = 'default.jpeg';
                } else {
                    $foto = $this->request->getVar('foto');
                }
                $this->m_admin->save([
                    'nama' => $this->request->getVar('name'),
                    'email' => $this->request->getVar('email'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                    'foto' => $foto,
                    'role_id' => 3
                ]);

                $msg = [
                    'sukses' => 'Data Receptionist has been saved.'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function update_receptionist()
    {
        if ($this->request->isAJAX()) {
            $id_akun = $this->request->getVar('id_akun');
            $row = $this->m_admin->find($id_akun);

            // dd($row);

            $data = [
                'segment' => 'saveUpdate_receptionist',
                'id_akun' => $row['id_akun'],
                'nama' => $row['nama'],
                'foto' => $row['foto'],
            ];

            $msg = [
                'sukses' => view('data_table/modal/modalEdit_akun', $data)
            ];

            echo json_encode($msg);
        }
    }

    public function saveUpdate_receptionist()
    {
        $validaion = \Config\Services::validation();
        if ($this->request->isAJAX()) {

            $valid = $this->validate([
                'name' => 'required',
            ]);

            if (!$valid) {
                $msg = ['error' => [
                    'name' => $validaion->getError('name'),
                ]];
            } else {
                $id = $this->request->getVar('id');

                if ($this->request->getVar('foto') == null) {
                    $foto = 'default.jpeg';
                } else {
                    $foto = $this->request->getVar('foto');
                }
                $this->m_admin->update($id, [
                    'nama' => $this->request->getVar('name'),
                    'foto' => $foto,
                ]);

                $msg = [
                    'sukses' => 'Data Receptionist has been di updated.'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function hapus()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getVar('id_akun');
            $this->m_admin->delete($id);

            $msg = [
                'sukses' => 'Receptionist data has been deleted.'
            ];

            echo json_encode($msg);
        }
    }
    // END RECEPTIONIST
    //--------------------------------------------------------------------

}
