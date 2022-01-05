<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Login | <?php echo get_store_name(); ?></title>

    <!-- Icons font CSS-->
    <link href="<?php echo get_theme_uri('custom/auth/register/vendor/mdi-font/css/material-design-iconic-font.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo get_theme_uri('custom/auth/register/vendor/font-awesome-4.7/css/font-awesome.min.css'); ?>" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo get_theme_uri('custom/auth/register/vendor/select2/select2.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo get_theme_uri('custom/auth/register/vendor/datepicker/daterangepicker.css'); ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo get_theme_uri('custom/auth/register/css/main.css'); ?>" rel="stylesheet" media="all">

    <style>
        .input--style-2:hover {
            border-bottom: 1px solid #2c6ed5;
            /* color: #4DAE3C */
            color: black;
        }

        .alert {
            text-align: center;
            position: relative;
            padding: 1rem 1rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }

        .alert-dismissible {
            padding-right: 3rem;
        }

        .alert-dismissible .btn-close {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 2;
            padding: 1.25rem 1rem;
        }

        .alert-danger {
            color: #842029;
            background-color: #f8d7da;
            border-color: #f5c2c7;
        }

        .alert-dismissible .close {
            position: absolute;
            top: 0;
            right: 0;
            padding: 1rem 1.5rem;
            color: inherit;
        }

        .btn {
            display: inline-block;
            font-weight: 600;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.625rem 1.25rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.375rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .btn-success {
            color: #fff;
            background-color: #2dce89;
            border-color: #2dce89;
            box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
        }

        .btn-sm,
        .btn-group-sm>.btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.375rem;
        }
    </style>
</head>

<body>
    <div class="page-wrapper bg-blue p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading1"></div>
                <div class="card-body">
                    <h2 class="title">Login ke <?php echo get_store_name(); ?></h2>

                    <!-- notifikasi gagal login -->
                    <?php if ($flash_message) : ?>
                        <div class="alert alert-danger alert-dismissible btn-close">
                            <strong><?php echo $flash_message; ?></strong>
                        </div>
                    <?php endif; ?>

                    <?php if ($redirection) : ?>
                        <div class="alert alert-danger alert-dismissible btn-close">
                            Silahkan login untuk melanjutkan...
                        </div>
                    <?php endif; ?>

                    <?php echo form_open('auth/login/do_login'); ?>
                    <!-- <div class="row row-space"> -->
                    <!-- <div class="col"> -->
                    <div class="input-group">
                        <input class="input--style-2" type="text" placeholder="Username" minlength="4" maxlength="16" name="username" value="<?php echo set_value('username'); ?>" required>
                        <?php echo form_error('username'); ?>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="row row-space"> -->
                    <!-- <div class="col"> -->
                    <div class="input-group">
                        <input class="input--style-2" type="password" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>" required>
                        <?php echo form_error('password'); ?>
                    </div>
                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class="col-2">
                        <div class="forgot">
                            <?php echo anchor('auth/forget-password', 'Lupa password?'); ?>
                            <p><input type="checkbox" name="remember_me" value="1">Ingat saya</p>
                        </div>
                    </div> -->
                    <div class="p-t-30">
                        <button class="btn btn--radius btn--blue" type="submit">Login</button>
                    </div>
                    <!-- <a href="<?php echo base_url(); ?>" class="btn btn-sm btn-success mt-5"><i class="fa fa-home mr-1" aria-hidden="true"></i> Home</a> -->
                    <?= form_close(); ?>
                </div>

            </div>

        </div>
    </div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->