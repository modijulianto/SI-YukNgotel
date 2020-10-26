<?= $this->extend('layout/template_auth'); ?>

<?= $this->section('content'); ?>
<form action="/Auth/regis" method="POST" class="login100-form validate-form">
    <span class="login100-form-logo">
        <i class="zmdi zmdi-hotel"></i>
    </span>

    <span class="login100-form-title p-b-30 p-t-25">
        REGISTER
    </span>

    <div class="wrap-input100 validate-input" data-validate="Enter username">
        <input class="input100" type="text" name="name" placeholder="Username" value="<?= old('name'); ?>">
        <span class="focus-input100" data-placeholder="&#xf207;"></span>
        <?= $validation->getError('name'); ?>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Enter email">
        <input class="input100" type="text" name="email" placeholder="Email" value="<?= old('email'); ?>">
        <span class="focus-input100" data-placeholder="&#xf207;"></span>
        <?= $validation->getError('email'); ?>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Enter password">
        <input class="input100" type="password" name="password1" placeholder="Password">
        <span class="focus-input100" data-placeholder="&#xf191;"></span>
        <?= $validation->getError('password1'); ?>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Enter repeat password">
        <input class="input100" type="password" name="password2" placeholder="Repeat Password">
        <span class="focus-input100" data-placeholder="&#xf191;"></span>
    </div>

    <div class="container-login100-form-btn">
        <button type="submit" class="login100-form-btn">
            Register
        </button>
    </div>

    <div class="text-center p-t-10">
        <a class="txt1" href="/auth">
            Already have an account? Login!
        </a>
    </div>
</form>
<?= $this->endSection('content'); ?>