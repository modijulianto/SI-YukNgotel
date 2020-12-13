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
                        <!-- Smart Wizard -->
                        <div id="wizard" class="form_wizard wizard_horizontal">
                            <ul class="wizard_steps">
                                <li>
                                    <a href="#step-1">
                                        <span class="step_no">1</span>
                                        <span class="step_descr">
                                            Step 1<br />
                                            <small>Order</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-2">
                                        <span class="step_no">2</span>
                                        <span class="step_descr">
                                            Step 2<br />
                                            <small>Payment</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-3">
                                        <span class="step_no">3</span>
                                        <span class="step_descr">
                                            Step 3<br />
                                            <small>Complete</small>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div id="step-1">
                                <form class="form-horizontal form-label-left">
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
                                            <textarea name="lainnya" placeholder="Lainnya" class="form-control" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="step-2">
                                <h2 class="StepTitle">Step 2 Content</h2>
                                <p>
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                            <div id="step-3">
                                <h2 class="StepTitle">Step 3 Content</h2>
                                <p>
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                    eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </div>
                        <!-- End SmartWizard Content -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Detail Pemesanan</h5>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>