<?php
defined('BASEPATH') or exit('No direct script access allowed');
$query = $this->input->get('search_query');
?>
<!DOCTYPE html>
<html lang="id-ID">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title><?= $title; ?></title>

  <!-- Favicon -->
  <link href="<?= get_theme_uri('/assets/img/brand/favicon.png', 'argon1'); ?>" rel="icon" type="image/png">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

  <!-- Icons -->
  <link href="<?= get_theme_uri('/assets/js/plugins/nucleo/css/nucleo.css', 'argon1'); ?>" rel="stylesheet">
  <link href="<?= get_theme_uri('/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css', 'argon1'); ?>" rel="stylesheet">

  <!-- Argon CSS -->
  <link type="text/css" href="<?= get_theme_uri('/assets/css/argon-dashboard.min.css', 'argon1'); ?>" rel="stylesheet">

</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="<?= site_url(); ?>">
        <img src="<?php echo get_store_logo(); ?>" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <!-- <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="<?php echo get_user_image(); ?>
">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="<?php echo site_url('customer/profile'); ?>" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>Profil Saya</span>
            </a>
            <!-- <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Pengaturan</span>
            </a> -->
            <div class="dropdown-divider"></div>
            <a href="<?php echo site_url('auth/logout'); ?>" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="./assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <?php if (get_controller() == 'orders') : ?>
          <form class="mt-4 mb-3 d-md-none" action="<?php echo site_url('admin/orders'); ?>">
          <?php else : ?>
            <form class="mt-4 mb-3 d-md-none" action="<?php echo site_url('admin/products/search'); ?>">
            <?php endif; ?>
            <div class="input-group input-group-rounded input-group-alternative input-group-merge">
              <input type="text" method="get" value="<?php echo (isset($query) ? $query : ''); ?>" class="form-control form-control-rounded form-control-prepended" placeholder="Cari Order..." aria-label="search">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <span class="fa fa-search"></span>
                </div>
              </div>
            </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
              <li class="nav-item  ">
                <a class="nav-link  " href="<?php echo site_url('customer'); ?>">
                  <i class="fas fa-tachometer-alt text-primary" aria-hidden="true"></i> Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo site_url('customer/orders'); ?>">
                  <i class="ni ni-cart text-red"></i> Order Saya
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo site_url('customer/payments'); ?>">
                  <i class="ni ni-money-coins text-green"></i> Pembayaran
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo site_url('customer/reviews'); ?>">
                  <i class="ni ni-send text-yellow"></i> Review
                </a>
              </li>
            </ul>
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="btn btn-xl btn-default mb-0 text-white text-uppercase d-none d-lg-inline-block" href="<?php echo base_url(); ?>">Belanja Sekarang!</a>
        <!-- Form -->
        <?php if (get_controller() == 'orders') : ?>
          <form action="<?php echo site_url('customer/orders'); ?>" class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <?php else : ?>
            <form action="<?php echo site_url('customer/orders/search'); ?>" class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
            <?php endif; ?>
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" name="search_query" value="<?php echo (isset($query) ? $query : ''); ?>" placeholder="Cari Order..." type="text">
              </div>
            </div>
            </form>
            <!-- User -->
            <ul class="navbar-nav align-items-center d-none d-md-flex">
              <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="media align-items-center">
                    <span class="avatar avatar-sm rounded-circle">
                      <img alt="Image placeholder" src="<?php echo get_user_image(); ?>">
                    </span>
                    <div class="media-body ml-2 d-none d-lg-block">
                      <span class="mb-0 text-sm  font-weight-bold"><?php echo get_user_name(); ?></span>
                    </div>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                  <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome!</h6>
                  </div>
                  <a href="<?php echo site_url('customer/profile'); ?>" class="dropdown-item">
                    <i class="ni ni-single-02"></i>
                    <span>Profil Saya</span>
                  </a>
                  <!-- <a href="./examples/profile.html" class="dropdown-item">
                    <i class="ni ni-settings-gear-65"></i>
                    <span>Pengaturan</span>
                  </a> -->
                  <div class="dropdown-divider"></div>
                  <a href="<?php echo site_url('auth/logout'); ?>" class="dropdown-item">
                    <i class="ni ni-user-run"></i>
                    <span>Logout</span>
                  </a>
                </div>
              </li>
            </ul>
      </div>
    </nav>
    <!-- End Navbar -->