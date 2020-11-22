<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>
<!-- page content -->
<div class="page-title">
    <div class="title_left">
        <h3>DETAIL AKOMODASI</h3>
    </div>
</div>
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
<?php endif; ?>
<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2><?= strtoupper($akomodasi['nama_akomodasi']); ?></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-md-3 col-sm-3  profile_left">
                    <div class="profile_img">
                        <div id="crop-avatar">
                            <!-- Current avatar -->
                            <img class="img-responsive avatar-view" src="/upload/akomodasi/<?= $akomodasi['foto']; ?>" width="250px" alt="Avatar" title="Change the avatar">
                        </div>
                    </div>
                    <h3><?= $akomodasi['nama_akomodasi']; ?></h3>

                    <ul class="list-unstyled user_data">
                        <li>
                            <i class="fa fa-building user-profile-icon"></i> <?= $akomodasi['nama_tipe']; ?>
                        </li>
                        <li><i class="fa fa-map-marker user-profile-icon"></i> <?= $akomodasi['alamat_lengkap']; ?>
                        </li>
                        <li class="m-top-xs">
                            <i class="fa fa-at user-profile-icon"></i>
                            <a href="http://www.kimlabs.com/profile/" target="_blank"><?= $akomodasi['email']; ?></a>
                        </li>
                    </ul>

                    <a class="btn btn-success" href="/Akomodasi/update/<?= $akomodasi['id_akomodasi']; ?>"><i class="fa fa-edit m-right-xs"></i>Edit</a>
                    <a class="btn btn-primary" href="/Room/add/<?= $akomodasi['id_akomodasi']; ?>"><i class="fa fa-plus m-right-xs"></i>Tambah Kamar</a>
                    <br />



                </div>
                <div class="col-md-9 col-sm-9 ">

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tab_content1" id="kamars-tab" role="tab" data-toggle="tab" aria-expanded="true">Kamar</a>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane active " id="tab_content1" aria-labelledby="kamars-tab">

                                <table id="datatable" class="table table-hover table-bordered" style="width:100%">
                                    <?php if (session()->getFlashdata('pesan')) : ?>
                                        <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
                                    <?php endif; ?>
                                    <br><br><br>
                                    <thead>
                                        <tr>
                                            <th class="text-center">Foto</th>
                                            <th class="text-center">No. Kamar</th>
                                            <th class="text-center">Tipe Kamar</th>
                                            <th class="text-center">Tarif</th>
                                            <th class="text-center">Max Tamu</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($kamar as $val) { ?>
                                            <tr>
                                                <td class="text-center">
                                                    <div class="thumbnail">
                                                        <div class="image view view-first">
                                                            <img width="150px" src="/upload/kamar/<?= $val['foto_kamar']; ?>" alt="image" />
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center"><?= $val['no_kamar']; ?></td>
                                                <td><?= $val['nama_tipeKamar']; ?></td>
                                                <td><?= $val['tarif']; ?></td>
                                                <td><?= $val['max_guest']; ?></td>
                                                <td><?= $val['status']; ?></td>
                                                <td>
                                                    <center>
                                                        <a class="btn btn-info btn-sm" href="/Room/detail/<?= $val['id_kamar']; ?>"><i class="fa fa-eye"></i></a>
                                                        <a class="btn btn-primary btn-sm" href="/Room/update/<?= $val['id_kamar']; ?>"><i class="fa fa-pencil"></i></a>
                                                        <form action="/Room/delete/<?= $val['id_kamar']; ?>" method="POST" class="d-inline">
                                                            <?= csrf_field(); ?>
                                                            <input type="hidden" name="_method" kamarue="DELETE">
                                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data kamar ini?')"><i class="fa fa-trash"></i></button>
                                                        </form>
                                                    </center>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<?= $this->endSection('content'); ?>