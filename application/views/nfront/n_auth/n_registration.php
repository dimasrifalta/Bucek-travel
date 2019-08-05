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
    <!--     <link rel="stylesheet" href="<?=base_url('assets/vendors/');?>/po-portfolio/css/bootstrap.min.css"> -->
</head>

<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <?=$this->session->flashdata('message');?>
                        <form class="user" method="post" action="<?=base_url('auth/registration');?>">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="email" id="email" placeholder="Your Email"
                                    value="<?=set_value('email');?>">
                                <?=form_error('email', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password1" id="password1" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password2" id="password2"
                                    placeholder="Repeat your password" />
                                <?=form_error('password1', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                    statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img
                                src="<?=base_url('');?>assets/vendors/photon/images/big-images/nature_big_1 - Copy.jpg"
                                alt="sing up image"></figure>
                        <a href="<?=base_url('auth');?>" class="signup-image-link">I am already member</a>
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