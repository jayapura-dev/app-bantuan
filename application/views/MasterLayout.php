<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>assets/img/logo/1.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/adminpro-custon-icon.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/data-table/bootstrap-editable.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/c3.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/responsive.css">
    <script src="<?php echo base_url()?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="<?php echo base_url()?>Dashboard"><img src="<?php echo base_url()?>assets/img/logo/1.png" alt="" />
                    </a>
                    <h3 class="uppercase">APP</h3>
                    <?php if ($this->session->userdata('level') == '1'):?>
                    <p>Administrator</p>
                  <?php endif ?>
                    <strong>APP</strong>
                </div>
                <?php $this->load->view('menu_level') ?>
            </nav>
        </div>
        <!-- Header top area start-->
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-success navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="img/logo/log.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                    <ul class="nav navbar-nav mai-top-nav">
                                        <li class="nav-item dropdown">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">API <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                            <div role="menu" class="dropdown-menu animated flipInX">
                                                <a href="#" class="dropdown-item">Dokumentasi API </a>

                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                                <span class="admin-name"><?php echo $this->session->userdata('nama') ?></span>
                                                <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                                <li><a href="<?php echo base_url()?>home/hukum"><span class="adminpro-icon adminpro-settings author-log-ic"></span>File Hukum</a>
                                                </li>
                                                <li><a href="<?php echo base_url()?>Auth/logout"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Keluar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-tasks"></i></a>

                                            <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated flipInX">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end-->
            <!-- Breadcome start-->

            <!-- Breadcome End-->
            <!-- Mobile Menu start -->
            <?php $this->load->view('menu_level_mobile') ?>
            <!-- Start Content !-->
            <?php echo $contents?>
            <!-- End Content !-->
        </div>
    </div>
    <!-- Footer Start-->
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Created By Burkassss</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->

    <script src="<?php echo base_url()?>assets/js/vendor/jquery-1.11.3.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.meanmenu.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.sticky.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/wow/wow.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/counterup/waypoints.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/counterup/counterup-active.js"></script>
    <script src="<?php echo base_url()?>assets/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url()?>assets/js/jvectormap/jvectormap-active.js"></script>
    <script src="<?php echo base_url()?>assets/js/peity/jquery.peity.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/peity/peity-active.js"></script>
    <script src="<?php echo base_url()?>assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/sparkline/sparkline-active.js"></script>
    <script src="<?php echo base_url()?>assets/js/flot/Chart.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/flot/dashtwo-flot-active.js"></script>

    <script src="<?php echo base_url()?>assets/js/data-table/bootstrap-table.js"></script>
    <script src="<?php echo base_url()?>assets/js/data-table/tableExport.js"></script>
    <script src="<?php echo base_url()?>assets/js/data-table/data-table-active.js"></script>
    <script src="<?php echo base_url()?>assets/js/data-table/bootstrap-table-editable.js"></script>
    <script src="<?php echo base_url()?>assets/js/data-table/bootstrap-editable.js"></script>
    <script src="<?php echo base_url()?>assets/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="<?php echo base_url()?>assets/js/data-table/colResizable-1.5.source.js"></script>
    <script src="<?php echo base_url()?>assets/js/data-table/bootstrap-table-export.js"></script>

    <script src="<?php echo base_url()?>assets/js/main.js"></script>
</body>

</html>
