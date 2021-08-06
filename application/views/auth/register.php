<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo base_url('assets/uploads/sites/Jualin.png'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400&display=swap" rel="stylesheet">


    <link href="<?php echo get_theme_uri('custom/auth/register/fonts/icomoon/style.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo get_theme_uri('custom/auth/register/css/owl.carousel.min.css'); ?>" rel="stylesheet" media="all">

    <link href="<?php echo get_theme_uri('custom/auth/register/css/bootstrap.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo get_theme_uri('custom/auth/register/css/style.css'); ?>" rel="stylesheet" media="all">

    <title><?php echo get_store_name(); ?></title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1" style="background-image: url(<?php echo get_theme_uri('images/register.jpg'); ?>);width:600px"></div>
    <div class="contents order-2">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 py-5">
            <h3>Registrasi Akun <strong><?php echo get_store_name(); ?></strong></h3>
            <p class="mb-4">Pelopor dessert box #1 di Indonesia</p>
            <?php echo form_open('auth/register/verify'); ?>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="fname">Username</label>
                    <input class="form-control" type="text" placeholder="" minlength="4" maxlength="16" name="username" value="<?php echo set_value('username'); ?>" required>
                    <?php echo form_error('username'); ?>
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Password</label>
                    <input class="form-control" type="password" placeholder="" name="password" value="<?php echo set_value('password'); ?>" required>
                    <?php echo form_error('password'); ?>
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="email">Nama lengkap</label>
                    <input class="form-control" type="text" placeholder="" name="name" value="<?php echo set_value('name'); ?>" required>
                    <?php echo form_error('name'); ?>
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">No. HP</label>
                    <input class="form-control" type="text" placeholder="" minlength="9" maxlength="15" name="phone_number" value="<?php echo set_value('phone_number'); ?>" required>
                    <?php echo form_error('phone_number'); ?>
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Email</label>
                    <input class="form-control" minlength="10" type="email" placeholder="" name="email" value="<?php echo set_value('email'); ?>" required>
                    <?php echo form_error('email'); ?>
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="email">Alamat</label>
                    <input class="form-control" type="text" placeholder="" name="address" value="<?php echo set_value('address'); ?>" required>
                    <?php echo form_error('address'); ?>
                  </div>    
                </div>
                
              </div>
              
              <div class="d-flex mb-5 mt-4 align-items-center">
              <p class="mb-4" style='font-size:15px'>Sudah memiliki akun? <a href="<?php echo site_url('auth/login'); ?>">Login</a></p>             
              </div>
              <input style='background-color:#8ad120; border-color:#8ad120' type="submit" value="Register" class="btn px-5 btn-primary">
              </div>

              

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>