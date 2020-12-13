<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title><?= $judul; ?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url(); ?>assets/img/core-img/untirta.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets/img/core-img/dsa.png" width="250" alt=""></a>
                            </div>
                            <div class="login-content">
                                <?php if(!$this->session->userdata('nama')): ?>
                                    <a href="<?= base_url('auth/login'); ?>">Login</a>
                                <?php else: ?>
                                    <p>Hello, <?= $this->session->userdata('nama') ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                
                                    <li><a href="<?= base_url() ?>">Home</a></li>
                                    <li><a href="<?= base_url() ?>home/about">Tentang</a></li>
                                    <li><a href="<?= base_url('home/informasi') ?>">Informasi</a></li>
                                    <li><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                                
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="<?= base_url(); ?>"><i class="icon-telephone-2"></i> <span>(0254) 280330</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->