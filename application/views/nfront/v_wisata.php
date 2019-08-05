<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Bucektravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item "><a href="<?= base_url(''); ?>" class="nav-link">Home</a></li>
                <li class="nav-item "><a href="<?= base_url('paket_tour'); ?>" class="nav-link">Paket Tours</a></li>
                <li class="nav-item active"><a href="<?= base_url('wisata_post'); ?>" class="nav-link">Tempat Wisata</a>
                </li>
                <li class="nav-item "><a href="<?= base_url('Konfirmasi'); ?>" class="nav-link">Konfirmasi</a></li>
                <li class="nav-item "><a href="<?= base_url('semua_album'); ?>" class="nav-link">Album dan Foto</a></li>




            </ul>
            <div class="btn-group ml-4 rights">
                <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><i class="fa fa-list-alt"></i>
                </button>
                <div class="dropdown-menu">
                    <?php

                      if ($this->session->userdata('email')) {?>

                    <a class="dropdown-item text-secondary" href="<?=base_url('booking');?>">Booking</a>

                    <a class="dropdown-item text-secondary" href="<?=base_url('auth/logout');?>">Logout</a>

                    <?php
                      } else {?>
                    <a class="dropdown-item text-secondary" href="<?=base_url('auth');?>">Login</a>

                    <?php
                    }?>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- END nav -->




<style type="text/css">
.margintt {
    margin-top: 80px;
}
</style>


<div class="container-fluid  margintt" data-aos="fade" data-aos-delay="500">
    <div class="swiper-container images-carousel">
        <div class="swiper-wrapper">
            <?php
      foreach ($news->result_array() as $b) {
        $idberita=$b['idwisata'];
        $judul=$b['nama_wisata'];
        $isi=limit_words($b['deskripsi'],25);
        $gbr=$b['gambar'];
        ?>
            <div class="swiper-slide">
                <div class="image-wrap">
                    <div class="image-info">

                        <h2 class="mb-3"><?php echo $judul;?></h2>
                        <a href="<?php echo base_url().'wisata_post/detail_wisata/'.$idberita;?>"
                            class="btn btn-outline-white py-2 px-4">More Info</a>
                    </div>
                    <img src="http://localhost/bucektravel/assets/gambars/<?= $gbr ;?>" alt="Image">
                </div>
            </div>
            <?php
      }
      ?>

        </div>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-scrollbar"></div>
    </div>
</div>







</div>
<?php 
function limit_words($string, $word_limit){
  $words = explode(" ",$string);
  return implode(" ",array_splice($words,0,$word_limit));
}

?>




<script src="<?= base_url(); ?>assets/vendors/photon/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/photon/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/photon/js/jquery-ui.js"></script>
<script src="<?= base_url(); ?>assets/vendors/photon/js/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/photon/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/photon/js/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/photon/js/jquery.stellar.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/photon/js/jquery.countdown.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/photon/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/photon/js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/photon/js/swiper.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/photon/js/aos.js"></script>

<script src="<?= base_url(); ?>assets/vendors/photon/js/picturefill.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/photon/js/lightgallery-all.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/photon/js/jquery.mousewheel.min.js"></script>

<script src="<?= base_url(); ?>assets/vendors/photon/js/main.js"></script>

<script>
$(document).ready(function() {
    $('#lightgallery').lightGallery();
});
</script>

</body>

</html>