<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<style>
    .float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .my-float {
        margin-top: 16px;
    }
</style>
<a href="https://api.whatsapp.com/send?phone=+6285738601017&text=Hallo%20Kak!%20saya%20mau%20pesan%20paket%20tour%20wisatanya%20." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
<div class="block-22">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
                <h2 class="heading mb-4">Be Sure To Get Our Promos</h2>
                <form action="#" class="subscribe">
                    <div class="form-group">
                        <input type="email" class="form-control email" placeholder="Enter your email">
                        <!-- <input type="submit" class="btn btn-primary submit"> -->
                        <button type="submit" class="btn btn-primary submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg-4">
                <h3 class="heading-section">WHO WE ARE</h3>
                <p class="mb-5">Sumbawa Tour adalah platform perjalanan berbasis pengalaman yang meyakini bahwa perjalanan adalah cara hidup. Bagi kami, bepergian adalah menemukan beberapa pelajaran terbesar dalam hidup. Ini tentang menentukan momen yang mengubah hidup Anda. Ini tentang bertemu orang-orang yang mengubah seluruh perspektif Anda. Mengakui bahwa Anda hanya hidup sekali, tetapi jika Anda melakukannya dengan benar, itu saja yang Anda butuhkan.</p>
                <p><a href="#" class="btn btn-primary px-4">Button</a></p>
            </div>
            <div class="col-md-6 col-lg-4">
                <h3 class="heading-section">Wisata</h3>
                <?php
                foreach ($berita->result_array() as $p) :
                    $nama_wisata = $p['nama_wisata'];
                    $deskripsi = $p['deskripsi'];
                    $gambar = $p['gambar'];
                    $idberita = $p['idwisata'];
                ?>
                    <div class="block-21 d-flex mb-4">
                        <figure class="mr-3">
                            <img src="<?php echo base_url() . 'assets/gambars/' . $gambar; ?>" alt="" class="img-fluid">
                        </figure>
                        <div class="text">
                            <h3 class="heading"><a href="<?php echo base_url() . 'wisata_post/detail_wisata/' . $idberita; ?>"><?= $nama_wisata; ?></a></h3>

                        </div>
                    </div>
                <?php endforeach ?>


            </div>

            <div class="col-md-6 col-lg-4">
                <div class="block-23">
                    <h3 class="heading-section">Contact Info</h3>
                    <ul>
                        <li><span class="icon icon-map-marker"></span><span class="text">Jln. Lintas Seteluk Poto Tano, 84454 Kab.Sumbawa NTB Indonesia</span></li>
                        <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929
                                    210</span></a></li>
                        <li><a href="#"><span class="icon icon-envelope"></span><span class="text">sumbawatour@gmal.com</span></a></li>
                        <li><span class="icon icon-clock-o"></span><span class="text">Senin &mdash; Jum'at 8:00 pagi -
                                5:00 sore</span></li>
                    </ul>
                    <br>
                    <h3 class="heading-section"><a href="<?php echo base_url() . 'kontak/faq' ?>">
                            FAQ
                        </a></h3>
                    <h3 class="heading-section"><a href="<?php echo base_url() . 'kontak/terms' ?>">
                            Terms Of Services
                        </a></h3><br>
                </div>
            </div>


        </div>
        <div class="row pt-5">
            <div class="col-md-12 text-left">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


<script src="<?= base_url('assets/vendors/'); ?>/photon/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/vendors/'); ?>/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url('assets/vendors/'); ?>/js/popper.min.js"></script>
<script src="<?= base_url('assets/vendors/'); ?>/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/vendors/'); ?>/js/jquery.easing.1.3.js"></script>
<script src="<?= base_url('assets/vendors/'); ?>/js/jquery.waypoints.min.js"></script>
<script src="<?= base_url('assets/vendors/'); ?>/js/jquery.stellar.min.js"></script>
<script src="<?= base_url('assets/vendors/'); ?>/js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/vendors/'); ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('assets/vendors/'); ?>/js/bootstrap-datepicker.js"></script>

<script src="<?= base_url('assets/vendors/'); ?>/js/aos.js"></script>
<script src="<?= base_url('assets/vendors/'); ?>/js/jquery.animateNumber.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?= base_url('assets/vendors/'); ?>/js/google-map.js"></script>
<script src="<?= base_url('assets/vendors/'); ?>/js/main.js"></script>
<script type='text/javascript' src='<?= base_url('assets/vendors/'); ?>/po-portfolio/js/jquery.js'></script>
<script type='text/javascript' src='<?= base_url('assets/vendors/'); ?>/po-portfolio/js/custom.js'></script>



<script src="<?= base_url('assets/vendors/'); ?>/photon/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/vendors/'); ?>/photon/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url('assets/vendors/'); ?>/photon/js/jquery-ui.js"></script>

<script src="<?= base_url('assets/vendors/'); ?>/photon/js/jquery.countdown.min.js"></script>

<script src="<?= base_url('assets/vendors/'); ?>/photon/js/swiper.min.js"></script>
<script src="<?= base_url('assets/vendors/'); ?>/photon/js/aos.js"></script>

<script src="<?= base_url('assets/vendors/'); ?>/photon/js/picturefill.min.js"></script>
<script src="<?= base_url('assets/vendors/'); ?>/photon/js/lightgallery-all.min.js"></script>
<script src="<?= base_url('assets/vendors/'); ?>/photon/js/lg-video.min.js"></script>
<script src="<?= base_url('assets/vendors/'); ?>/photon/js/lg-video.js"></script>
<script src="<?= base_url('assets/vendors/'); ?>/photon/js/jquery.mousewheel.min.js"></script>

<script src="<?= base_url('assets/vendors/'); ?>/photon/js/main.js"></script>









<script type="text/javascript">
    $(document).ready(function() {
        $(".dropdown-toggle").dropdown();

    });
</script>
<style>
    .dropdown-toggle::after {
        display: none;
    }
</style>




<script>
    $(document).ready(function() {
        $('#lightgallery').lightGallery();
        $('#video-gallery').lightGallery();
    });
</script>

<script>
    $('#video-player-param').lightGallery({
        youtubePlayerParams: {
            modestbranding: 1,
            showinfo: 0,
            rel: 0,
            controls: 0
        },
        vimeoPlayerParams: {
            byline: 0,
            portrait: 0,
            color: 'A90707'
        }
    });
</script>
</body>

</html>