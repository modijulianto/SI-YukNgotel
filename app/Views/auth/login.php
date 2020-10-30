<?= $this->extend('layout/template_auth'); ?>

<?= $this->section('content'); ?>
<?php if (session()->getFlashdata('registered')) : ?>
    <?= session()->getFlashdata('registered'); ?>
<?php endif; ?>
<form action="/Auth/login" method="POST" class="login100-form validate-form">
    <span class="login100-form-logo">
        <a href="/"><img src="/assets/images/logo/logo.png" width="90px" alt=""></a>
    </span>

    <span class="login100-form-title p-b-30 p-t-25">
        Log in
    </span>

    <div class="wrap-input100 validate-input" data-validate="Enter email">
        <input class="input100" type="text" name="email" placeholder="Username">
        <span class="focus-input100" data-placeholder="&#xf207;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Enter password">
        <input class="input100" type="password" name="password" placeholder="Password">
        <span class="focus-input100" data-placeholder="&#xf191;"></span>
    </div>

    <div class="contact100-form-checkbox">
        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
        <label class="label-checkbox100" for="ckb1">
            Remember me
        </label>
    </div>

    <div class="container-login100-form-btn">
        <button class="login100-form-btn">
            Login
        </button>
    </div>

    <div class="text-center p-t-10">
        <a class="txt1" href="/auth/registration">
            Create an account?
        </a>
    </div>
</form>
<?= $this->endSection('content'); ?>