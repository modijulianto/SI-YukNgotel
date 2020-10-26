<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= (isset($title)) ? $title : ""; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/assets/Auth/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/Auth/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/Auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/Auth/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/Auth/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/Auth/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/Auth/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/Auth/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/Auth/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/Auth/css/util.css">
    <link rel="stylesheet" type="text/css" href="/assets/Auth/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('/assets/Auth/images/bg-01.jpg');">
            <div class="wrap-login100">

                <?= $this->renderSection('content'); ?>

            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="/assets/Auth/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="/assets/Auth/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="/assets/Auth/vendor/bootstrap/js/popper.js"></script>
    <script src="/assets/Auth/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="/assets/Auth/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="/assets/Auth/vendor/daterangepicker/moment.min.js"></script>
    <script src="/assets/Auth/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="/assets/Auth/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="/assets/Auth/js/main.js"></script>

</body>

</html>