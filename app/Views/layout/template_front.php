<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title><?= (isset($title)) ? $title : ''; ?></title>

    <!-- Bootstrap -->
    <link href="/assets/backend/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/assets/backend/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/assets/backend/build/css/custom.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('/assets/images/logo/logo.png') ?>" style="width:16px; height:16px">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/assets/frontend/style.css">

    <!-- Select2 -->
    <link href="/assets/backend/vendors/select2/dist/css/select2.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="/assets/backend/vendors/jquery/dist/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="/assets/backend/vendors/select2/dist/js/select2.min.js"></script>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Search Form -->
        <div class="search-form d-flex align-items-center">
            <div class="container">
                <form action="index.html" method="get">
                    <input type="search" name="search-form-input" id="searchFormInput" placeholder="Type your keyword ...">
                    <button type="submit"><i class="icon_search"></i></button>
                </form>
            </div>
        </div>

        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">

                    <div class="col-6">
                        <div class="top-header-content">
                            <a href="#"><i class="icon_phone"></i> <span>(123) 456-789-1230</span></a>
                            <a href="#"><i class="icon_mail"></i> <span>yukngotel@gmail.com</span></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="top-header-content">
                            <!-- Top Social Area -->
                            <div class="top-social-area ml-auto">
                                <a href="/Admin"><i class="fa fa-bar-chart"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="robertoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="/"><img src="/assets/images/logo/h_logo.png" width="200px" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="/">Home</a></li>
                                    <li><a href="#">Akomodasi</a>
                                        <ul class="dropdown">
                                            <?php foreach ($akomodasi as $val) { ?>
                                                <li><a href="/Hotel/akomodasi/<?= $val['id_tipeAkomodasi']; ?>">-> <?= $val['nama_tipe']; ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <?php if (session()->get('email') != null) { ?>
                                        <li><a href="/Auth/logout">Logout</a></li>
                                    <?php } else { ?>
                                        <li><a href="/Auth">Login</a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <?= $this->renderSection('content'); ?>

    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0" style="margin-left: 0px;">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row align-items-baseline justify-content-between">
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Footer Logo -->
                            <a href="#" class="footer-logo"><img src="/assets/images/logo/h_logo.png" alt=""></a>

                            <h4>+12 345-678-9999</h4>
                            <span>yukngotel@gmail.com</span>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Akomodasi</h5>

                            <!-- Footer Nav -->
                            <ul class="footer-nav">
                                <?php foreach ($akomodasi as $val) { ?>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?= $val['nama_tipe']; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-8 col-lg-4">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Subscribe Newsletter</h5>
                            <span>Subscribe our newsletter gor get notification about new updates.</span>

                            <!-- Newsletter Form -->
                            <form action="index.html" class="nl-form">
                                <input type="email" class="form-control" placeholder="Enter your email...">
                                <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row align-items-center">
                    <div class="col-12 col-md-8">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- Bootstrap -->
    <script src="/assets/backend/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery 2.2.4 -->
    <script src="/assets/frontend/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="/assets/frontend/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="/assets/frontend/js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="/assets/frontend/js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="/assets/frontend/js/default-assets/active.js"></script>
    <!-- NProgress -->
    <link href="/assets/backend/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- jQuery Smart Wizard -->
    <script src="/assets/backend/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="/assets/backend/build/js/custom.min.js"></script>

</body>

</html>