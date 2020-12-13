<?php

namespace App\Controllers;

use App\Models\M_admin;
use App\Models\M_akomodasi;

class Referensi extends BaseController
{
    function cari_destination()
    {
        $db = \Config\Database::connect();
        $des = $this->request->getVar("des");

        $sql = "select id as id,nama as text from wilayah_kecamatan where nama like '%" . $des . "%' order by id asc";
        // $sql = "select wilayah_provinsi.id as id,wilayah_provinsi.nama as text from wilayah_provinsi where nama like '%" . $des . "%' order by id asc";
        // $sql = $db->table('tb_akomodasi')
        //     ->join('wilayah_kecamatan', 'wilayah_kecamatan.id=tb_akomodasi.id_kecamatan')
        //     ->join('wilayah_kabupaten', 'wilayah_kabupaten.id=wilayah_kecamatan.kabupaten_id')
        //     ->join('wilayah_provinsi', 'wilayah_provinsi.id=wilayah_kabupaten.provinsi_id')
        //     ->select('wilayah_kecamatan.id AS id')
        //     ->select('wilayah_provinsi.nama AS text')
        //     ->select('wilayah_kabupaten.nama AS text')
        //     ->select('wilayah_kecamatan.nama AS text')
        //     ->like('wilayah_kecamatan.nama', $des)
        //     ->orLike('wilayah_kabupaten.nama', $des)
        //     ->orLike('wilayah_provinsi.nama', $des)
        //     ->get();
        // $data_tindakan = $sql->getResultArray();
        $data_tindakan = $db->query($sql)->getResultArray();

        echo json_encode($data_tindakan);
    }

    function cari_provinsi()
    {
        $db = \Config\Database::connect();
        $prov = $this->request->getVar("prov");

        $sql = "select id as id,nama as text from wilayah_provinsi where nama like '%" . $prov . "%' order by id asc";
        //die($sql);
        $data_tindakan = $db->query($sql)->getResultArray();

        echo json_encode($data_tindakan);
    }

    function cari_kabupaten()
    {
        $db = \Config\Database::connect();
        $kab = $this->request->getVar("kab");
        $prov = $this->request->getVar("prov");
        $sql = "select id as id,nama as text from wilayah_kabupaten where nama like '%" . $kab . "%' and provinsi_id='" . $prov . "' order by id asc";
        //die($sql);
        $data_tindakan = $db->query($sql)->getResultArray();

        echo json_encode($data_tindakan);
    }

    function cari_kecamatan()
    {
        $db = \Config\Database::connect();
        $kec = $this->request->getVar("kec");
        $kab = $this->request->getVar("kab");
        $sql = "select id as id,nama as text from wilayah_kecamatan where nama like '%" . $kec . "%' and kabupaten_id='" . $kab . "' order by id asc";
        //die($sql);
        $data_tindakan = $db->query($sql)->getResultArray();

        echo json_encode($data_tindakan);
    }
}
