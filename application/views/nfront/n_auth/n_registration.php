<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>



    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/login_v2/'); ?>/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/login_v2'); ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/login_v2'); ?>/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/login_v2'); ?>/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/login_v2'); ?>/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/login_v2'); ?>/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/login_v2'); ?>/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/login_v2'); ?>/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/login_v2'); ?>/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/login_v2'); ?>/css/main.css">
</head>

<body>


    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="post" action="<?= base_url('auth/registration'); ?>">
                    <span class="login100-form-title p-b-26">
                        Registration

                    </span>
                    <span class="login100-form-title p-b-48">

                        <i class="zmdi zmdi-font"></i>
                    </span>
                    <?= $this->session->flashdata('message'); ?>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                        <input class="input100" name="name" id="name" value="<?= set_value('name'); ?>">
                        <span class="focus-input100" data-placeholder="Name"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" name="email" id="email" value="<?= set_value('email'); ?>">
                        <span class="focus-input100" data-placeholder="Email"></span>
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password1" id="password1" />
                        <span class="focus-input100" data-placeholder="Password"></span>
                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password2" id="password2" />
                        <span class="focus-input100" data-placeholder="Repeat your password"></span>
                        <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Register
                            </button>
                        </div>
                    </div>

                    <div class="text-center p-t-115">
                        <span class="txt1">
                            I am already member
                        </span>

                        <a class="txt2" href="<?= base_url('auth'); ?>">
                            Login
                        </a>

                    </div>


                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <script src="<?= base_url('assets/vendors/login_v2'); ?>/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/vendors/login_v2'); ?>/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/vendors/login_v2'); ?>/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url('assets/vendors/login_v2'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/vendors/login_v2'); ?>/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/vendors/login_v2'); ?>/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url('assets/vendors/login_v2'); ?>/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/vendors/login_v2'); ?>/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/vendors/login_v2'); ?>/js/main.js"></script>


</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>