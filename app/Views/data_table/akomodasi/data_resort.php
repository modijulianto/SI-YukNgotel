<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>
<div class="page-title">
    <div class="title_left">
        <h3>DATA RESORT</h3>
    </div>
</div>

<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2>DATA RESORT</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                    <a href="<?= base_url("Export/excel_resort") ?>" class="btn btn-primary" style="float: left">
                        <i class="fa fa-download"></i>
                        Excel
                    </a>
                    <a href="<?= base_url("Export/pdf_resort") ?>" class="btn btn-primary" style="float: left">
                        <i class="fa fa-download"></i>
                        PDF
                    </a>
                    <a href="/Akomodasi/add" class="btn btn-primary" style="float: right">
                        <i class="fa fa-plus"></i>
                        Add Akomodasi
                    </a>
                    <div class="card-box table-responsive">
                        <table id="datatable" class="table table-hover table-bordered" style="width:100%">
                            <?php if (session()->getFlashdata('pesan')) : ?>
                                <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
                            <?php endif; ?>
                            <br><br><br>
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Images</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Alamat</th>
                                    <th class="text-center">Bintang</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($akomodasi as $val) { ?>
                                    <tr>
                                        <td class="text-center"><?= $i++; ?></td>
                                        <td class="text-center">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img width="150px" src="/upload/akomodasi/<?= $val['foto']; ?>" alt="image" />
                                                </div>
                                            </div>
                                        </td>
                                        <td><?= $val['nama_akomodasi']; ?></td>
                                        <td><?= $val['alamat_lengkap']; ?></td>
                                        <td>
                                            <center>
                                                <div class="rating rating_<?= $val['bintang']; ?>">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <a class="btn btn-info btn-sm" href="/Akomodasi/detail/<?= $val['id_akomodasi']; ?>"><i class="fa fa-eye"></i></a>
                                                <a class="btn btn-primary btn-sm" href="/Akomodasi/update/<?= $val['id_akomodasi']; ?>"><i class="fa fa-pencil"></i></a>
                                                <form action="/Akomodasi/delete/<?= $val['id_akomodasi']; ?>" method="POST" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data akomodasi ini?')"><i class="fa fa-trash"></i></button>
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
<?= $this->endSection('content'); ?>