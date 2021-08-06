<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id-ID">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <title>
        <?php echo get_store_name(); ?>
    </title>


    <link rel="icon" href="<?php echo base_url('assets/uploads/sites/Jualin.png'); ?>">

    <link href="<?php echo get_theme_uri('custom/auth/login/css/owl.carousel.min.css'); ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo get_theme_uri('custom/auth/login/css/bootstrap.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo get_theme_uri('custom/auth/login/css/css/style.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_theme_uri('custom/auth/login/fonts/icomoon/style.css'); ?>" rel="stylesheet" />

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2"
            style="background-image: url("<?php echo get_theme_uri('custom/auth/login/images/bg_1.jpg'); ?>");"></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3>Login ke <strong>
                                <?php echo get_store_name(); ?>
                            </strong></h3>
                        <p class="mb-4">Pelopor dessert box #1 di Indonesia</p>

                        <?php if ($flash_message) : ?>
                        <div class="flash-message">
                            <?php echo $flash_message; ?>
                        </div>
                        <?php endif; ?>

                        <?php if ($redirection) : ?>
                        <div class="flash-message">
                            Silahkan login untuk melanjutkan...
                        </div>
                        <?php endif; ?>

                        <?php echo form_open('auth/login/do_login'); ?>
                        <div class="form-group first">
                            <label for="username">Username</label>
                            <input type="text" name="username"
                                value="<?php echo set_value('username', $old_username); ?>" class="form-control"
                                placeholder="Username" minlength="4" maxlength="16" required>
                            <?php echo form_error('username'); ?>
                        </div>
                        <div class="form-group last mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                            <?php echo form_error('password'); ?>
                        </div>

                        <div class="d-flex mb-5 align-items-center">
                            <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                        </div>

                        <input type="submit" value="Log In" class="btn btn-block btn-primary">
                        <?php echo form_close(); ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <footer>
        <p class="copyright-agileinfo"> &copy; 2018
            <?php echo anchor(base_url(), get_store_name()); ?>
        </p>
    </footer>


    <script src="<?php echo get_theme_uri('custom/auth/login/js/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?php echo get_theme_uri('custom/auth/login/js/popper.min.js'); ?>"></script>
    <script src="<?php echo get_theme_uri('custom/auth/login/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo get_theme_uri('custom/auth/login/js/main.js'); ?>"></script>
</body>

</html>