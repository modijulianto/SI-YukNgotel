<?= $this->extend('layout/template_front'); ?>

<?= $this->section('content'); ?>
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(/assets/frontend/img/bg-img/16.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2 class="page-title">Booking Now</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Booking</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

<!-- Rooms Area Start -->
<div class="roberto-rooms-area section-padding-100-0" style="background-color:whitesmoke;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col-md">
                            </div>
                            <div class="col-md-9">
                                <div class="row text-center">
                                    <div class="col-md-3 col-sm-3">
                                        <h6 class="text-success">1. ORDER</h6>
                                    </div>
                                    <div class="col-sm">
                                        <h5 class="text-success">></h5>
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <h6>2. PAYMENT</h6>
                                    </div>
                                    <div class="col-sm">
                                        <h5>></h5>
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <h6>3. COMPLETE</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                            </div>
                            <div class="col-md-12">
                                <form action="/Hotel/booking" method="POST" class="mt-3">
                                    <h5>Detail Pemesan</h5>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="nama" name="nama" required="required" class="form-control" value="<?= session()->get('nama'); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">No Telepon <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="no" name="no" required="required" class="form-control  ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat email <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="birthday" disabled class="date-picker form-control" required="required" type="text" value="<?= session()->get('email'); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label class="col-form-label col-md col-sm ">Check-in <span class="required">*</span></label>
                                            <div class="col-md col-sm ">
                                                <input id="check-in" class="date-picker form-control" required="required" type="date">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label col-md col-sm ">Check-out <span class="required">*</span></label>
                                            <div class="col-md col-sm ">
                                                <input id="check-out" class="date-picker form-control" required="required" type="date">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <h5>Permintaan Khusus</h5>
                                    <hr>
                                    Punya permintaan khusus yang membuatmu makin nyaman? Minta di sini. Permintaanmu tergantung persediaan dan mungkin dikenakan biaya tambahan.
                                    <div class="row mt-3">
                                        <div class="col-md-4 col-sm-4 ">
                                            <input type="checkbox" value="Bebas Asap Rokok"> Bebas Asap Rokok
                                        </div>
                                        <div class="col-md-4 col-sm-4 ">
                                            <input type="checkbox" value="Kamar Dengan Pintu Terhubung"> Kamar Dengan Pintu Terhubung
                                        </div>
                                        <div class="col-md-4 col-sm-4 ">
                                            <input type="checkbox" value="Lantai Atas"> Lantai Atas
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Tipe Kasur <span class="required">*</span></label>
                                        <div class="col-md col-sm ">
                                            <!-- <input id="birthday" disabled class="date-picker form-control" required="required" type="text" value="<?= session()->get('email'); ?>"> -->
                                            <select name="tipeKasur" id="tipeKasur">
                                                <option value="1">1 Ranjang Besar</option>
                                                <option value="2">2 Ranjang Single</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Lainnya <span class="required">*</span></label>
                                        <div class="col-md col-sm ">
                                            <!-- <input id="birthday" disabled class="date-picker form-control" required="required" type="text" value="<?= session()->get('email'); ?>"> -->
                                            <textarea name="lainnya" placeholder="Lainnya" class="form-control" id="" cols="10" rows="5"></textarea>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary" style="float: right;">Next</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Detail Pemesanan</h5>
                        <hr>
                        <img src="/upload/kamar/<?= $book['foto_kamar']; ?>" class="d-block w-100" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>