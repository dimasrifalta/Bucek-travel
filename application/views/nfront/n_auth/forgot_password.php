<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title;?></title>

    <!-- Font Icon -->
    <link rel="stylesheet"
        href="<?=base_url('assets/vendors/login');?>/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?=base_url('assets/vendors/login');?>/css/style.css">
    <!--   <link rel="stylesheet" href="<?=base_url('assets/vendors/');?>/po-portfolio/css/bootstrap.min.css"> -->
</head>

<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img
                                src="<?=base_url('');?>assets/vendors/photon/images/big-images/nature_big_3 - Copy.jpg"
                                alt="sing up image"></figure>

                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Forgot Password</h2>
                        <?=$this->session->flashdata('message');?>
                        <form class="register-form" id="login-form" method="post"
                            action="<?=base_url('auth/forgotPassword');?>">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="Enter your email"
                                    value="<?=set_value('email');?>">
                                <?=form_error('email', '<small class="text-danger pl-3">', '</small>');?>
                            </div>



                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </section>



    </div>

    <!-- JS -->
    <script src="<?=base_url('assets/vendors/login');?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url('assets/vendors/login');?>/js/main.js"></script>
    <!--     <script src="<?=base_url('assets/vendors/');?>/js/bootstrap.min.js"></script> -->
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>