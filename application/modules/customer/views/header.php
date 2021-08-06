<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ID-id">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?> | <?php echo get_store_name(); ?></title>
  
    <link rel="stylesheet" href="<?php echo get_theme_uri('plugins/fontawesome-free/css/all.min.css', 'adminlte'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_uri('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css', 'adminlte'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_uri('css/adminlte.min.css', 'adminlte'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_uri('plugins/toastr/toastr.min.css', 'adminlte'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_uri('plugins/air-datepicker/dist/css/datepicker.min.css', 'adminlte'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_uri('plugins/select2js/dist/css/select2.min.css', 'adminlte'); ?>">

    <link rel="icon" href="<?php echo base_url('assets/uploads/sites/Jualin.png'); ?>">
    <link href='https://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet'>

    <script src="<?php echo get_theme_uri('plugins/jquery/jquery.min.js', 'adminlte'); ?>"></script>
    <script src="<?php echo get_theme_uri('plugins/bootstrap/js/bootstrap.bundle.min.js', 'adminlte'); ?>"></script>

    <script src="<?php echo base_url('assets/plugins/toastr/toastr.min.js'); ?>"></script>
    <script>
      toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      }
    </script>
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          </li>
        </ul>

    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style='text-align:center;'>
          <i class="fas fa-ellipsis-v" style="display: inline-block; width: 100%;"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right" style="left: inherit; right: 0px;">
          <a href="<?php echo site_url('customer/profile');?>" class="dropdown-item">
          <i class="fas fa-user-alt mr-2"></i></i> Profil

          </a>
          <div class="dropdown-divider"></div>
          <a href="<?php echo site_url('auth/logout'); ?>" class="dropdown-item">
          <i class="fas fa-sign-out-alt mr-2"></i></i> Logout

          </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-2">
    <!-- Brand Logo -->
    

      <a href="<?php echo base_url(); ?>" class="brand-link">
        <img src="<?php echo get_store_logo(); ?>" alt="<?php echo get_store_name(); ?> Logo" class="brand-image img-circle" style="opacity: .8">
        <br>
      </a>
  
   

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo get_user_image(); ?>" class="img-circle" alt="Foto profil <?php echo get_user_name(); ?>">
        </div>
        <div class="info">
          <a href="<?php echo site_url('customer/profile'); ?>" class="d-block"><strong><?php echo get_user_name(); ?></strong></a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?php echo site_url('customer'); ?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('customer/orders'); ?>" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Order Saya
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('customer/payments'); ?>" class="nav-link">
              <i class="nav-icon fa fa-money-bill"></i>
              <p>
                Pembayaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('customer/reviews'); ?>" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Review
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>