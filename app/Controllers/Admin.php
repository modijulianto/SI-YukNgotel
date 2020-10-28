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
        // if (session()->get('email') == null) {
        //     is_loggin();
        // }
    }

    public function index()
    {
        $data = [
            'akun' => $this->m_admin->getAkun(session()->get('email')),
            'title' => 'Beranda | YukNgotel',
        ];
        return view('layout/template_admin', $data);
    }

    /////////////////////////////////// MANAGER ///////////////////////////////////
    public function manager()
    {
        if (session()->get('email') == null) {
            return redirect()->to('/Auth');
        }

        $data = [
            'akun' => $this->m_admin->getAkun(session()->get('email')),
            'title' => "Data Manager | YukNgotel",
            'validation' => \Config\Services::validation()
        ];
        return view('data_table/data_manager', $data);
    }

    public function ambilManager()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'manager' => $this->m_admin->getManager(),
                'validation' => \Config\Services::validation()
            ];

            $msg = [
                'data' => view('data_table/table_manager', $data)
            ];

            echo json_encode($msg);
        } else {
            exit('Maaf data tidak dapat diproses');
        }
    }

    public function save_manager()
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
                    'role_id' => 1
                ]);

                $msg = [
                    'sukses' => 'Data Manager has been saved.'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function update_manager()
    {
        if ($this->request->isAJAX()) {
            $id_akun = $this->request->getVar('id_akun');
            $row = $this->m_admin->find($id_akun);

            $data = [
                'segment' => 'saveUpdate_manager',
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

    public function saveUpdate_manager()
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
                    'sukses' => 'Data Manager has been di updated.'
                ];
            }
            echo json_encode($msg);
        }
    }
    /////////////////////////////////// END MANAGER ///////////////////////////////////

    /////////////////////////////////// ADMIN ///////////////////////////////////
    public function admin()
    {
        if (session()->get('email') == null) {
            return redirect()->to('/Auth');
        }

        $data = [
            'akun' => $this->m_admin->getAkun(session()->get('email')),
            'title' => "Data Admin | YukNgotel",
            'validation' => \Config\Services::validation()
        ];
        return view('data_table/data_admin', $data);
    }

    public function ambilAdmin()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'admin' => $this->m_admin->getAdmin(),
                'validation' => \Config\Services::validation()
            ];

            $msg = [
                'data' => view('data_table/table_admin', $data)
            ];

            echo json_encode($msg);
        } else {
            exit('Maaf data tidak dapat diproses');
        }
    }

    public function save_admin()
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
                    'role_id' => 2
                ]);

                $msg = [
                    'sukses' => 'Data Admin has been saved.'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function update_admin()
    {
        if ($this->request->isAJAX()) {
            $id_akun = $this->request->getVar('id_akun');
            $row = $this->m_admin->find($id_akun);

            $data = [
                'segment' => 'saveUpdate_admin',
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

    public function saveUpdate_admin()
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
                    'sukses' => 'Data Admin has been di updated.'
                ];
            }
            echo json_encode($msg);
        }
    }
    /////////////////////////////////// END ADMIN ///////////////////////////////////


    /////////////////////////////////// RECEPTIONIST ///////////////////////////////////
    public function receptionist()
    {
        if (session()->get('email') == null) {
            return redirect()->to('/Auth');
        }

        $data = [
            'akun' => $this->m_admin->getAkun(session()->get('email')),
            'title' => "Data Receptionist | YukNgotel",
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

    /////////////////////////////////// END RECEPTIONIST ///////////////////////////////////s

    /////////////////////////////////// GUEST ///////////////////////////////////
    public function guest()
    {
        if (session()->get('email') == null) {
            return redirect()->to('/Auth');
        }

        $data = [
            'akun' => $this->m_admin->getAkun(session()->get('email')),
            'title' => "Data Guest | YukNgotel",
            'validation' => \Config\Services::validation()
        ];
        return view('data_table/data_guest', $data);
    }

    public function ambilGuest()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'guest' => $this->m_admin->getGuest(),
                'validation' => \Config\Services::validation()
            ];

            $msg = [
                'data' => view('data_table/table_guest', $data)
            ];

            echo json_encode($msg);
        } else {
            exit('Maaf data tidak dapat diproses');
        }
    }

    public function save_guest()
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
                    'role_id' => 4
                ]);

                $msg = [
                    'sukses' => 'Data Guest has been saved.'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function update_guest()
    {
        if ($this->request->isAJAX()) {
            $id_akun = $this->request->getVar('id_akun');
            $row = $this->m_admin->find($id_akun);

            $data = [
                'segment' => 'saveUpdate_guest',
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

    public function saveUpdate_guest()
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
                    'sukses' => 'Data Guest has been di updated.'
                ];
            }
            echo json_encode($msg);
        }
    }
    /////////////////////////////////// END GUEST ///////////////////////////////////

    public function hapus()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getVar('id_akun');
            $this->m_admin->delete($id);

            $msg = [
                'sukses' => 'Data has been deleted.'
            ];

            echo json_encode($msg);
        }
    }
}
