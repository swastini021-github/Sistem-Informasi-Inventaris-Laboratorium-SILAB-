<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url('assets2/images/logo-undiksha.png') ?>">
    <title><?= $title ?></title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="<?= base_url("assets2") ?>/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url("assets2") ?>/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url("assets2") ?>/css/core.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url("assets2") ?>/css/components.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url("assets2") ?>/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="<?= base_url("assets2") ?>/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="<?= base_url("assets2") ?>/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url("assets2") ?>/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url("assets2") ?>/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="<?= base_url("assets2") ?>/js/plugins/visualization/d3/d3.min.js"></script>
    <script type="text/javascript" src="<?= base_url("assets2") ?>/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script type="text/javascript" src="<?= base_url("assets2") ?>/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="<?= base_url("assets2") ?>/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="<?= base_url("assets2") ?>/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="<?= base_url("assets2") ?>/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="<?= base_url("assets2") ?>/js/plugins/pickers/daterangepicker.js"></script>

    <script type="text/javascript" src="<?= base_url("assets2") ?>/js/core/app.js"></script>
    <script type="text/javascript" src="<?= base_url("assets2") ?>/js/pages/dashboard.js"></script>

    <script type="text/javascript" src="<?= base_url("assets2") ?>/js/plugins/ui/ripple.min.js"></script>
    <!-- /theme JS files -->

</head>

<body class="navbar-bottom">

    <!-- Main navbar -->
    <div class="navbar navbar-inverse bg-primary-800 navbar-lg">
        <div class="navbar-header">
            <ul class="nav navbar-nav visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav">
                <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= base_url("assets2") ?>/images/admin.jpg" alt="">
                        <span>Administrator</span>
                        <i class="caret"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="<?= site_url("login") ?>"><i class="icon-switch2"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page header -->
    <div class="page-header">
        <div class="breadcrumb-line bg-slate-700">
            <div>
                <marquee>
                    <h4>
                        <img src="<?= base_url("assets2") ?>/images/logo-undiksha.png" width="30px" height="30px">
                        SELAMAT DATANG DI SISTEM INFORMASI LABORATORIUM UNIVERSITAS PENDIDIKAN GANESHA
                        <img src="<?= base_url("assets2") ?>/images/logo-undiksha.png" width="30px" height="30px">
                    </h4>
                </marquee>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Page container -->
    <div class="page-container bg-info-300">

        <!-- Page content -->
        <div class="page-content ">

            <!-- Main sidebar -->
            <div class="sidebar sidebar-main sidebar-default">
                <div class="sidebar-content">

                    <!-- Main navigation -->
                    <div class="sidebar-category sidebar-category-visible">
                        <div class="sidebar-user-material">
                            <div class="category-content">
                                <div class="sidebar-user-material-content">
                                    <a href="#"><img src="<?= base_url("assets2") ?>/images/logo-undiksha.png" class="img-circle img-responsive" alt=""></a>
                                    <div class="text-white">
                                        <h6>Universitas Pendidikan Ganesha</h6>
                                        <span class="text-size-small">Jln. Abimanyu No.11 Singaraja</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" category-content no-padding">
                            <ul class="navigation navigation-main navigation-accordion">

                                <!-- Main -->
                                <li><a href="<?= site_url('Admin/index') ?>"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                                <li>
                                    <a href="<?= site_url('Admin/input_user') ?>"><i class="icon-stack2"></i> <span>Master Data User</span></a>

                                </li>
                                <li>
                                    <a href="#"><i class="icon-stack2"></i> <span>Master Data Lokasi</span></a>
                                    <ul>
                                        <li>
                                            <a href="<?= site_url('Admin/input_lokasi') ?>"> <i class="icon-pen"></i> <span>Input Lokasi</span></a>
                                        </li>
                                        <li>
                                            <a href="<?= site_url('Admin/data_lokasi') ?>"> <i class="icon-stack"></i> <span>Data Lokasi</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-stack2"></i> <span>Master Data Prodi</span></a>
                                    <ul>
                                        <li>
                                            <a href="<?= site_url('User/input_prodi') ?>"> <i class="icon-pen"></i> <span>Input Prodi</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-stack2"></i> <span>Data Pelaporan</span></a>
                                    <ul>
                                        <li>
                                            <a href="<?= site_url('User/input_pelaporan') ?>"> <i class="icon-pen"></i> <span>Input Pelaporan</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-stack2"></i> <span>Data Aset</span></a>
                                    <ul>
                                        <li>
                                            <a href="<?= site_url('Admin/input_aset') ?>"> <i class="icon-pen"></i> <span>Input Aset</span></a>
                                        </li>
                                        <li>
                                            <a href="<?= site_url('Admin/data_aset') ?>"> <i class="icon-stack"></i> <span>Daftar Aset</span></a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- /main -->

                                <!-- Forms -->

                                <!-- /appearance -->

                                <!-- Layout -->

                                <!-- Page kits -->

                                <!-- /page kits -->

                            </ul>
                        </div>
                    </div>
                    <!-- /main navigation -->

                </div>
            </div>
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content">
                <section class="courses">
                    <?php $this->load->view($content); ?>
                </section>
            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->


    <!-- Footer -->
    <div class="navbar navbar-default navbar-fixed-bottom bg-slate-700 footer">
        <ul class="nav navbar-nav visible-xs-block">
            <li><a class="text-center collapsed" data-toggle="collapse" data-target="#footer"><i class="icon-circle-up2"></i></a></li>
        </ul>

        <div class="navbar-collapse collapse bg-slate-700" id="footer">
            <div class="navbar-text">
                &copy; 2019. <a href="https://undiksha.ac.id/" class="navbar-link text-white">
                    <h7>Universitas Pendidikan Ganesha</h7>
                </a>
            </div>

            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="https://web.facebook.com/undiksha.bali/?ref=br_rs"><img src="<?= base_url("assets2") ?>/images/brands/facebook.png" width="30px" height="30px"></a></li>
                    <li><a href="https://www.instagram.com/undiksha.bali/"><img src="<?= base_url("assets2") ?>/images/instagram.png" width="30px" height="30px"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /footer -->

</body>

</html>