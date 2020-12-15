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
        <h2 class="StepTitle">Payment</h2>
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