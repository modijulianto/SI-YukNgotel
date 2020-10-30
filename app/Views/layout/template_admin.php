<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= (isset($title)) ? $title : ""; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= (isset($meta)) ? $meta : ""; ?>">
    <meta name="author" content="Akamana Coffee">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="icon" type="image/png" href="<?= base_url('/assets/images/logo/logo.png') ?>" style="width:16px; height:16px">

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <!-- Datatables -->
    <link href="/assets/backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/assets/backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/assets/backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/assets/backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/assets/backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="/assets/backend/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/assets/backend/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/assets/backend/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/assets/backend/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="/assets/backend/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/assets/backend/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="/assets/backend/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="/assets/backend/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet" />

    <!-- Custom Theme Style -->
    <link href="/assets/backend/build/css/custom.min.css" rel="stylesheet">
    <link href="/assets/backend/build/css/style.css" rel="stylesheet">
    <script language="JavaScript" type="text/javascript" src="/assets/backend/build/js/google_chart/loader.js"></script>

    <!-- Select2 -->
    <link href="/assets/backend/vendors/select2/dist/css/select2.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="/assets/backend/vendors/jquery/dist/jquery.min.js"></script>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col menu_fixed">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="User" class="site_title"><img src="/assets/images/logo/logo.png" alt="" width="40px"> <span>
                                <font size="3"><b> YUK NGOTEL</b></font>
                            </span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="/upload/<?= $akun['foto']; ?>" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><?= $akun['nama']; ?></h2>
                            <span><?= $akun['role']; ?></span>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li><a href="/admin"><i class="fa fa-bar-chart"></i> DASHBOARD </a></li>
                                <li><a><i class="fa fa-user"></i> DATA USER <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/Admin/manager">Manager</a></li>
                                        <li><a href="/Admin/admin">Admin</a></li>
                                        <li><a href="/Admin/receptionist">Receptionist</a></li>
                                        <li><a href="/Admin/guest">Guest</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-building-o"></i> DATA AKOMODASI <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/Akomodasi/hotel">Hotel</a></li>
                                        <li><a href="/Akomodasi/apartemen">Apartemen</a></li>
                                        <li><a href="/Akomodasi/villa">Villa</a></li>
                                        <li><a href="/Akomodasi/motel">Motel</a></li>
                                        <li><a href="/Akomodasi/homestay">Homestay</a></li>
                                        <li><a href="/Akomodasi/resort">Resort</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <!-- <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="fa fa-gears" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="fa fa-arrows-alt" aria-hidden="true"></span>
                    </a> -->
                        <a data-toggle="tooltip" data-placement="top" title="Back to Front" href="<?= base_url('/'); ?>" style="width: 50%;">
                            <span class="fa fa-mail-reply" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url('Auth/logout') ?>" style="width: 50%;">
                            <span class="fa fa-sign-out" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="/upload/<?= $akun['foto']; ?>" alt="..." class="img-circle"><?= $akun['nama']; ?>
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?= base_url('User/my_profile') ?>"> Profile</a>
                                    <a class="dropdown-item" href="<?= base_url('Auth/logout') ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </div>
                            </li>


                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">

                <?= $this->renderSection('content'); ?>

            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Copyright &copy; Gentelella | Made with <i class="fa fa-heart"></i> <?= date('Y'); ?>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    <script src="/assets/backend/vendors/validator/multifield.js"></script>
    <script src="/assets/backend/vendors/validator/validator.js"></script>
    <!-- <script language="JavaScript" type="text/javascript" src="/assets/backend/build/js/jquery-3.5.1.min.js"></script> -->



    <!-- Bootstrap -->
    <script src="/assets/backend/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="/assets/backend/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/assets/backend/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="/assets/backend/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="/assets/backend/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/assets/backend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/assets/backend/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/assets/backend/vendors/skycons/skycons.js"></script>
    <!-- morris.js -->
    <script src="/assets/backend/vendors/raphael/raphael.min.js"></script>
    <script src="/assets/backend/vendors/morris.js/morris.min.js"></script>
    <!-- Flot -->
    <script src="/assets/backend/vendors/Flot/jquery.flot.js"></script>
    <script src="/assets/backend/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="/assets/backend/vendors/Flot/jquery.flot.time.js"></script>
    <script src="/assets/backend/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="/assets/backend/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/assets/backend/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/assets/backend/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/assets/backend/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/assets/backend/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/assets/backend/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/assets/backend/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/assets/backend/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/assets/backend/vendors/moment/min/moment.min.js"></script>
    <script src="/assets/backend/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- jQuery custom content scroller -->
    <script src="/assets/backend/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/assets/backend/build/js/custom.min.js"></script>

    <script type="text/javascript" src="/assets/backend/build/js/dst/jquery.mask.min.js"></script>

    <!-- Datatables -->
    <script src="/assets/backend/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/assets/backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="/assets/backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/assets/backend/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="/assets/backend/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="/assets/backend/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/assets/backend/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/assets/backend/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="/assets/backend/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="/assets/backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/backend/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="/assets/backend/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="/assets/backend/vendors/jszip/dist/jszip.min.js"></script>
    <script src="/assets/backend/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="/assets/backend/vendors/pdfmake/build/vfs_fonts.js"></script>


    <!-- SweatAlert -->
    <script language="JavaScript" type="text/javascript" src="/assets/backend/build/js/dist/sweetalert2.all.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="/assets/backend/build/js/dist/myscript.js"></script>

    <script language="JavaScript" type="text/javascript" src="/assets/backend/build/js/script.js"></script>
    <script language="JavaScript" type="text/javascript" src="/assets/backend/build/js/script-export.js"></script>
    <script language="JavaScript" type="text/javascript" src="/assets/backend/build/js/google_chart/loader.js"></script>

    <?php if (isset($chart) == TRUE) { ?>
        <!-- High Chart -->
        <script language="JavaScript" type="text/javascript" src="/assets/backend/build/js/highcharts/highcharts.js"></script>
        <script language="JavaScript" type="text/javascript" src="/assets/backend/build/js/highcharts/jquery.highchartTable-min.js"></script>
        <!-- <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharttable.org/master/jquery.highchartTable-min.js"></script> -->
    <?php } ?>

    <script language="JavaScript" type="text/javascript" src="/assets/backend/vendors/select2/dist/js/select2.min.js"></script>


    <script>
        //UPDATE ADMINISTRATOR
        $('.tombolUbahAdmin').on('click', function() {
            $('#judulModal').html('Update Data Administrator');
            $('.modal-footer button[type=submit]').html('Update Data');
            $('.modal-body form').attr('action', '/Admin/saveUpdate_admin');
            // alert($('.modal-body form').attr('action'));


            // hide form input
            $('#labelPasswordAdmin').hide();
            $('#passwordAdmin').hide();
            $('#labelEmailAdmin').hide();
            $('#emailAdmin').hide();

            const id = $(this).data('id');

            $.ajax({
                url: '/Admin/update_admin/' + $(this).data('id'),
                data: {
                    id: id
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    $('#id').val(data.id_akun);
                    $('#nama').val(data.nama);
                    $('#emailAdmin').val(data.email);
                    $('#old_image').val(data.image);
                    $('#old_pass').val(data.password);
                    $('#passwordAdmin').val(data.password);
                }
            });
        });
    </script>
</body>

</html>