<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>
<!-- page content -->
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>INPUT AKOMODASI</h3>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>INPUT AKOMODASI</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form action="/Akomodasi/save" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        <?= csrf_field(); ?>
                        <div class="col-md-4 col-sm-4  profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img src="/upload/akomodasi/default.jpg" alt="Avatar" class="img-thumbnail img-responsive avatar-view img-preview">
                                </div>
                            </div>
                            <div class="custom-file">
                                <input type="file" id="foto" name="foto" onchange="previewImg()" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('foto'); ?>
                                </div>
                                <label for="foto" class="custom-file-label">Pilih gambar...</label>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 ">
                            <div class="row form-group">
                                <label class="col-form-label col-md-2 col-sm-2" for="nama">Tipe Akomodasi <span class="required">*</span>
                                </label>
                                <div class="col-md col-sm ">
                                    <select id="tipeAkomodasi" name="tipeAkomodasi" required class="form-control <?= ($validation->hasError('tipeAkomodasi')) ? 'is-invalid' : ''; ?>">
                                        <?php foreach ($tipe as $val) { ?>
                                            <option value="<?= $val['id_tipeAkomodasi']; ?>"><?= $val['nama_tipe']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <br><br>
                            <div class="row form-group">
                                <label class="col-form-label col-md-2 col-sm-2" for="nama">Nama Akomodasi <span class="required">*</span>
                                </label>
                                <div class="col-md col-sm ">
                                    <input type="text" id="nama" name="nama" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan nama akomodasi" value="<?= old('nama'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-form-label col-md-2 col-sm-2" for="provinsi">Provinsi <span class="required">*</span>
                                </label>
                                <div class="col-md-10 col-sm-10">
                                    <select class="form-control" name="provinsi" id="provinsi"></select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-form-label col-md-2 col-sm-2" for="kabupaten">Kabupaten/Kota <span class="required">*</span>
                                </label>
                                <div class="col-md-10 col-sm-10">
                                    <select class="form-control" name="kabupaten" id="kabupaten"></select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-form-label col-md-2 col-sm-2" for="kecamatan">Kecamatan <span class="required">*</span>
                                </label>
                                <div class="col-md-10 col-sm-10">
                                    <select class="form-control <?= ($validation->hasError('kecamatan')) ? 'is-invalid' : ''; ?>" name="kecamatan" id="kecamatan"></select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('kecamatan'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-form-label col-md-2 col-sm-2" for="alamat">Alamat Lengkap<span class="required">*</span>
                                </label>
                                <div class="col-md col-sm ">
                                    <input type="text" id="alamat" name="alamat" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan alamat" value="<?= old('alamat'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('alamat'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-form-label col-md-2 col-sm-2" for="deskripsi">Deskripsi <span class="required">*</span>
                                </label>
                                <div class="col-md col-sm ">
                                    <textarea class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" name="deskripsi" rows="3" placeholder="Masukkan deskripsi akomodasi" value="<?= old('deskripsi'); ?>"></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('deskripsi'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-form-label col-md-2 col-sm-2" for="email">Email
                                </label>
                                <div class="col-md col-sm ">
                                    <input type="text" id="email" name="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan email" value="<?= old('email'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('email'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-form-label col-md-2 col-sm-2" for="telpon">Telepon
                                </label>
                                <div class="col-md col-sm ">
                                    <input type="text" id="telepon" name="telepon" class="form-control <?= ($validation->hasError('telepon')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan telpon" value="<?= old('telepon'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('telepon'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="control-label col-md-2 col-sm-2">Bintang </label>
                                <div class="col-md col-sm ">
                                    1: <input type="radio" class="flat" name="bintang" value="1" checked required /> &emsp;
                                    2: <input type="radio" class="flat" name="bintang" value="2" />&emsp;
                                    3: <input type="radio" class="flat" name="bintang" value="3" />&emsp;
                                    4: <input type="radio" class="flat" name="bintang" value="4" />&emsp;
                                    5: <input type="radio" class="flat" name="bintang" value="5" />
                                </div>
                            </div>
                            <div class="control-group row">
                                <label class="control-label col-md-2 col-sm-2">Input Tags </label>
                                <div class="col-md col-sm ">
                                    <input id="tags_1" type="text" name="tag" class="tags form-control" value="<?= old('tag'); ?>" />
                                    <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                                </div>
                            </div>
                            <br>
                            <div class="control-group row">
                                <div class="control-label col-md-2 col-sm-2"></div>
                                <div class="col-md col-sm">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<script>
    $("#provinsi").select2({
        minimumInputLength: 3,
        allowClear: true,
        placeholder: 'Masukkan nama provinsi',
        ajax: {
            url: "/Referensi/cari_provinsi",
            type: "post",
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    prov: params.term // search term
                };
            },
            processResults: function(response) {
                return {
                    results: response
                };
            },
            cache: true
        }
    });

    $("#kabupaten").select2({
        minimumInputLength: 3,
        allowClear: true,
        placeholder: 'Masukkan nama kabupaten/kota',
        ajax: {
            url: "/referensi/cari_kabupaten",
            type: "post",
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    kab: params.term, // search term
                    prov: function() {
                        return $('#provinsi').val();
                    }
                };
            },
            processResults: function(response) {
                return {
                    results: response
                };
            },
            cache: true
        }
    });

    $("#kecamatan").select2({
        minimumInputLength: 3,
        allowClear: true,
        placeholder: 'Masukkan nama kecamatan',
        ajax: {
            url: "/referensi/cari_kecamatan",
            type: "post",
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    kec: params.term, // search term
                    kab: function() {
                        return $('#kabupaten').val();
                    }
                };
            },
            processResults: function(response) {
                return {
                    results: response
                };
            },
            cache: true
        }
    });
</script>
<?= $this->endSection('content'); ?>