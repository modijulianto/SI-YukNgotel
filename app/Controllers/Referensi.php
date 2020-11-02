<?php

namespace App\Controllers;

use App\Models\M_admin;
use App\Models\M_akomodasi;

class Referensi extends BaseController
{
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
