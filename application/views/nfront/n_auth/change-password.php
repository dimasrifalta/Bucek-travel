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



    <!-- Sing in  Form -->
    <!-- <section class="sign-in">
                <div class="container">
                    <div class="signin-content">
                        <div class="signin-image">
                            <figure><img src="<?= base_url(''); ?>assets/vendors/photon/images/big-images/nature_big_3 - Copy.jpg" alt="sing up image">
                            </figure>

                        </div>

                        <div class="signin-form">
                            <h2 class="form-title">Forgot Password</h2>
                            <?= $this->session->flashdata('message'); ?>
                            <form class="register-form" id="login-form" method="post" action="<?= base_url('auth/changepassword'); ?>">

                                <div class="form-group">
                                    <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="password1" id="password1" placeholder="Enter new Password" />
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="password2" id="password2" placeholder="Repeat new Password" />
                                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>



                                <div class="form-group form-button">
                                    <input type="submit" name="signin" id="signin" class="form-submit" value="Reset" />
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </section>



        </div> -->

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="post" action="<?= base_url('auth/changepassword'); ?>">
                    <span class="login100-form-title p-b-26">
                        Forgot Password
                    </span>
                    <span class="login100-form-title p-b-48">

                        <i class="zmdi zmdi-font"></i>
                    </span>
                    <?= $this->session->flashdata('message'); ?>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password1" id="password1" />
                        <span class="focus-input100" data-placeholder="Enter new Password"></span>
                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password2" id="password2" />
                        <span class="focus-input100" data-placeholder="Repeat new Password"></span>
                        <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Reset
                            </button>
                        </div>
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

</html>