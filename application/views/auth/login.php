<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="id-ID">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <title><?php echo get_store_name(); ?></title>


    <link rel="icon" href="<?php echo base_url('assets/uploads/sites/Jualin.png'); ?>">

    <link href="<?php echo get_theme_uri('custom/auth/login/css/owl.carousel.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_theme_uri('custom/auth/login/css/bootstrap.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo get_theme_uri('custom/auth/login/css/style.css'); ?>" rel="stylesheet" type="text/css" />

    
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  </head>
  
  <body>
  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url(<?php echo get_theme_uri('images/sayur.jpg'); ?>);"></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Login ke <strong><?php echo get_store_name(); ?></strong></h3>
            <p class="mb-4">Belanja produk olahan dari RT 13, dijamin murah, segar dan berkualitas</p>
            
            <?php if ($flash_message) : ?>
            <div class="flash-message">
                <?php echo $flash_message; ?>
            </div>
            <?php endif; ?>

            <?php if ($redirection) : ?>
            <div class="flash-message">
                Login sebagai customer untuk melanjutkan
            </div>
            <?php endif; ?>
            
            <?php echo form_open('auth/login/do_login'); ?>
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" name="username" value="<?php echo set_value('username', $old_username); ?>" class="form-control" placeholder="Username" minlength="4" maxlength="16" required>
                <?php echo form_error('username'); ?>
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <?php echo form_error('password'); ?>
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <span class="ml-auto"><a href="<?php echo site_url('auth/register'); ?>" class="forgot-pass">Buat akun baru</a></span> 
              </div>

              <input  style='background-color:#8ad120; border-color:#8ad120' type="submit" value="Log In" class="btn btn-block btn-primary">
              <?php echo form_close(); ?>
              <br>
              <button style='background-color:#8ad120;border-color:#8ad120' class="btn btn-block btn-primary"><a style="color:#fff" href="<?=base_url('home')?>">Kembali</a></button>
            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    <script src="<?php echo get_theme_uri('custom/auth/login/js/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?php echo get_theme_uri('custom/auth/login/js/popper.min.js'); ?>"></script>
    <script src="<?php echo get_theme_uri('custom/auth/login/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo get_theme_uri('custom/auth/login/js/main.js'); ?>"></script>
  </body>
</html>