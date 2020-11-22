<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>
<div class="page-title">
    <div class="title_left">
        <h3>INPUT KAMAR</h3>
    </div>
</div>

<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>INPUT KAMAR</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form action="/Room/save_room/<?= $akomodasi['id_akomodasi']; ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div name="foto" action="/Room/save_room/<?= $akomodasi['id_akomodasi']; ?>" class="dropzone"></div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <input type="hidden" id="jumlah-img" value="1"><br><br><br>
                            <div class="row form-group mt-4">
                                <label class="col-form-label col-md-2 col-sm-2" for="nama">Tipe Kamar <span class="required">*</span>
                                </label>
                                <div class="col-md col-sm">
                                    <select id="tipeKamar" name="tipeKamar" required class="form-control <?= ($validation->hasError('tipeKamar')) ? 'is-invalid' : ''; ?>">
                                        <?php foreach ($tipeKamar as $val) { ?>
                                            <option value="<?= $val['id_tipeKamar']; ?>"><?= $val['nama_tipeKamar']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-form-label col-md-2 col-sm-2" for="noKamar">No. Kamar <span class="required">*</span>
                                </label>
                                <div class="col-md col-sm ">
                                    <input type="text" id="noKamar" name="noKamar" class="form-control <?= ($validation->hasError('noKamar')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan nomor kamar" value="<?= old('noKamar'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('noKamar'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-form-label col-md-2 col-sm-2" for="tarif">Tarif <span class="required">*</span>
                                </label>
                                <div class="col-md col-sm ">
                                    <input type="number" id="tarif" name="tarif" class="form-control <?= ($validation->hasError('tarif')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan tarif kamar" value="<?= old('tarif'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('tarif'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-form-label col-md-2 col-sm-2" for="keterangan">Keterangan <span class="required">*</span>
                                </label>
                                <div class="col-md col-sm ">
                                    <textarea class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?>" name="keterangan" rows="3" placeholder="Masukkan keterangan kamar" value="<?= old('keterangan'); ?>"></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('keterangan'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-form-label col-md-2 col-sm-2" for="luas_kamar">Luas Kamar <span class="required">*</span>
                                </label>
                                <div class="input-group col-md-4 col-sm-4 ">
                                    <input type="number" id="luas_kamar" name="luas_kamar" class="form-control <?= ($validation->hasError('luas_kamar')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan luas kamar" value="<?= old('luas_kamar'); ?>">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">M<sup>2</sup></span>
                                    </div>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('luas_kamar'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-form-label col-md-2 col-sm-2" for="max_guest">Jumlah Tamu Maksimal <span class="required">*</span>
                                </label>
                                <div class="col-md-4 col-sm-4 ">
                                    <input type="number" id="max_guest" name="max_guest" class="form-control <?= ($validation->hasError('max_guest')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan max_guest kamar" value="<?= old('max_guest'); ?>">
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
                        <br><br><br><br><br><br><br>
                        <div class="col-md-12">
                            <form action="input_kamar.php" class="dropzone"></form>
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