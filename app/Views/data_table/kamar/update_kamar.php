<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>
<div class="page-title">
    <div class="title_left">
        <h3>UPDATE KAMAR</h3>
    </div>
</div>

<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>UPDATE KAMAR</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form action="/Room/save_update/<?= $kamar['id_kamar']; ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_akomodasi" value="<?= $kamar['id_akomodasi']; ?>"><br>
                    <input type="hidden" id="jumlah-img" value="1">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <div style="border:1px solid white;height:200px;overflow-y:hidden;overflow-x:scroll;">
                                <p style="width:max-content;">
                                    <img src="/upload/kamar/default.jpg" height="150px" alt="">
                                    <div id="insert-img">asd</div>
                                    <button type="button" class="btn btn-secondary ml-3 btnTambahFoto" style="height: 130px; width:130px">
                                        <h1><i class="fa fa-plus"></h1></i>
                                        Tambah Foto
                                    </button>
                                </p>
                            </div> -->
                            <div class="row">
                                <div class="col-md-3">
                                    <!-- <img src="/upload/kamar/default.jpg" height="150px" alt=""> -->
                                    <center>
                                        <img src="/upload/kamar/default.jpg" alt="Kamar" width="200px" class="img-thumbnail img-responsive img-preview">
                                        <div class="custom-file">
                                            <input type="file" id="foto[]" name="foto[]" onchange="previewImgRoom()" class="custom-file-input ">
                                            <div class="invalid-feedback">
                                            </div>
                                            <label for="foto" class="custom-file-label">Pilih gambar...</label>
                                        </div>
                                    </center>
                                </div>
                                <div id="insert-img"></div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-secondary btnTambahFoto" style="height: 150px; width:150px">
                                        <h1><i class="fa fa-plus"></h1></i>
                                        Tambah Foto
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <hr>
                            <div class="row form-group mt-4">
                                <label class="col-form-label col-md-2 col-sm-2" for="nama">Tipe Kamar <span class="required">*</span>
                                </label>
                                <div class="col-md col-sm">
                                    <select id="tipeKamar" name="tipeKamar" required class="form-control <?= ($validation->hasError('tipeKamar')) ? 'is-invalid' : ''; ?>">
                                        <?php foreach ($tipeKamar as $val) { ?>
                                            <option <?= ($kamar['id_tipeKamar'] == $val['id_tipeKamar']) ? 'selected' : ''; ?> value="<?= $val['id_tipeKamar']; ?>"><?= $val['nama_tipeKamar']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-form-label col-md-2 col-sm-2" for="noKamar">No. Kamar <span class="required">*</span>
                                </label>
                                <div class="col-md col-sm ">
                                    <input type="number" id="noKamar" name="noKamar" class="form-control <?= ($validation->hasError('noKamar')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan nomor kamar" value="<?= (old('noKamar')) ? old('noKamar') : $kamar['no_kamar']; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('noKamar'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-form-label col-md-2 col-sm-2" for="tarif">Tarif <span class="required">*</span>
                                </label>
                                <div class="col-md col-sm ">
                                    <input type="number" id="tarif" name="tarif" class="form-control <?= ($validation->hasError('tarif')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan tarif kamar" value="<?= (old('tarif')) ? old('tarif') : $kamar['tarif']; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('tarif'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-form-label col-md-2 col-sm-2" for="keterangan">Keterangan <span class="required">*</span>
                                </label>
                                <div class="col-md col-sm ">
                                    <textarea class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?>" name="keterangan" rows="3" placeholder="Masukkan keterangan kamar"><?= (old('keterangan')) ? old('keterangan') : $kamar['keterangan']; ?></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('keterangan'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-form-label col-md-2 col-sm-2" for="luas_kamar">Luas Kamar <span class="required">*</span>
                                </label>
                                <div class="col-md-4 col-sm-4 ">
                                    <input type="number" id="luas_kamar" name="luas_kamar" class="form-control <?= ($validation->hasError('luas_kamar')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan luas kamar" value="<?= (old('luas_kamar')) ? old('luas_kamar') : $kamar['luas_kamar']; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('luas_kamar'); ?>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <h2>M<sup>2</sup></h2>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-form-label col-md-2 col-sm-2" for="max_guest">Jumlah Tamu Maksimal <span class="required">*</span>
                                </label>
                                <div class="col-md-4 col-sm-4 ">
                                    <input type="number" id="max_guest" name="max_guest" class="form-control <?= ($validation->hasError('max_guest')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan max_guest kamar" value="<?= (old('max_guest')) ? old('max_guest') : $kamar['max_guest']; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('max_guest'); ?>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row form-group">
                                <label class="col-form-label col-md-2 col-sm-2">
                                </label>
                                <div class="col-md col-sm ">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.btnTambahFoto').click(function() {
            var jumlah = parseInt($('#jumlah-img').val());
            var nextImg = jumlah + 1;

            $('#insert-img').append("");
        })
    })
</script>

<?= $this->endSection('content'); ?>