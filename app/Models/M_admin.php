<?php

namespace App\Models;

use CodeIgniter\Model;

class M_admin extends Model
{
    protected $table = 'tb_akun';
    protected $primaryKey = 'id_akun';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'email', 'password', 'foto', 'role_id', 'is_active'];

    public function getAkun($email)
    {
        return $this->where(['email' => $email])->first();
    }

    public function getManager()
    {
        // return $this->findAll();
        $this->where(['role_id' => 1]);
        return $this->findAll();
    }

    public function getAdmin($id_akun = false)
    {
        if ($id_akun == false) {
            $this->where(['role_id' => 2]);
            return $this->findAll();
        }

        return $this->where(['id_akun' => $id_akun])->first();
    }

    // RECEPTIONIST
    public function getReceptionist($id_akun = false)
    {
        if ($id_akun == false) {
            $this->orderBy('id_akun', 'DESC');
            $this->where(['role_id' => 3]);
            return $this->findAll();
        } else {
            return $this->getWhere(['id_akun' => $id_akun]);
        }
    }

    public function updateReceptionist($data, $id_akun)
    {
        $updateQuery = $this->db->table($this->table)->update($data, array('id_akun' => $id_akun));
        return $updateQuery;
    }

    public function saveReceptionist($data)
    {
        $saveQuery = $this->db->table($this->table)->insert($data);
        return $saveQuery;
    }

    public function deleteReceptionist($id_akun)
    {
        $deleteQuery = $this->db->table($this->table)->delete(array('id_akun' => $id_akun));
        return $deleteQuery;
    }
    // END RECEPTIONIST
}
