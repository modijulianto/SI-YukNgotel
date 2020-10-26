<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>
<div class="page-title">
    <div class="title_left">
        <h3>DATA MANAGER</h3>
    </div>
</div>

<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2>DATA MANAGER</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                    <a href="<?= base_url("Export/excel_admin") ?>" class="btn btn-primary" style="float: left">
                        <i class="fa fa-download"></i>
                        Excel
                    </a>
                    <a href="<?= base_url("Export/pdf_admin") ?>" class="btn btn-primary" style="float: left">
                        <i class="fa fa-download"></i>
                        PDF
                    </a>
                    <button type="button" id="tombolTambahAdmin" class="btn btn-primary tombolTambahAdmin" data-toggle="modal" data-target="#modalAdmin" style="float: right">
                        <i class="fa fa-plus"></i>
                        Add Manager
                    </button>
                    <div class="card-box table-responsive">
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <br><br><br>
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Nama Administrator</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Foto</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($manager as $man) { ?>
                                    <tr>
                                        <td class="text-center"><?= $i++; ?></td>
                                        <td><?= $man['nama']; ?></td>
                                        <td><?= $man['email']; ?></td>
                                        <td><?= $man['foto']; ?></td>
                                        <td><?= $man['foto']; ?></td>
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
<?= $this->endSection('content'); ?>