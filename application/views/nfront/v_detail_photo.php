<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(''); ?>">SumbawaTour</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item "><a href="<?= base_url(''); ?>" class="nav-link">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profil
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('kontak'); ?>" class="nav-link">Hubungi Kami</a>
                        <a class="dropdown-item" href="<?= base_url('kontak/carapesan'); ?>">Cara Pesan</a>

                        <a class="dropdown-item" href="<?= base_url('testimoni'); ?>">Tingalkan Testimoni</a>
                    </div>
                </li>
                <li class="nav-item "><a href="<?= base_url('paket_tour'); ?>" class="nav-link">Paket Tours</a></li>
                <li class="nav-item"><a href="<?= base_url('wisata_post'); ?>" class="nav-link">Tempat Wisata</a></li>
                <li class="nav-item "><a href="<?= base_url('Konfirmasi'); ?>" class="nav-link">Konfirmasi</a></li>
                <li class="nav-item active"><a href="<?= base_url('semua_album'); ?>" class="nav-link">Album dan
                        Foto</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Akun &nbsp;
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        $id = $this->session->userdata('email');

                        if ($this->session->userdata('email')) { ?>

                            <a class="dropdown-item text-secondary" href="<?= base_url('paket_tour/booking'); ?>">Booking(<?= $id; ?>)</a>

                            <a class="dropdown-item text-secondary" href="<?= base_url('auth/logout'); ?>">Logout</a>

                        <?php
                        } else { ?>
                            <a class="dropdown-item text-secondary" href="<?= base_url('auth'); ?>">Login</a>

                        <?php
                        } ?>
                    </div>
                </li>




            </ul>

        </div>
    </div>
</nav>
<!-- END nav -->

<div class="block-37 block-37-sm item" style="background-image: url('<?php echo base_url() . 'assets/vendors/images/img_4.jpg' ?>');" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <span class="subheading-sm">Travel</span>
                <h2 class="heading ">Foto &amp; Album</h2>
            </div>
        </div>
    </div>
</div>

<div class="site-section" data-aos="fade">
    <div class="container-fluid">

        <div class="row justify-content-center">

            <div class="col-md-7">
                <div class="row mb-5">
                    <div class="col-12 ">
                        <h2 class="site-section-heading text-center">Nature Gallery</h2>
                    </div>
                </div>
            </div>

        </div>

        <div class="row justify-content-center" id="lightgallery">

            <?php
            foreach ($photo->result_array() as $b) {
                $id_galeri = $b['id_galeri'];
                $jdl_galeri = $b['jdl_galeri'];
                $gbr_galeri = $b['gbr_galeri'];
                $albumid = $b['albumid']; ?>

                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item " data-aos="fade" data-src="<?php echo base_url() . 'assets/gambars/' . $gbr_galeri; ?>" data-sub-html="<h4><?php echo $jdl_galeri; ?></h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloremque hic excepturi fugit, sunt impedit fuga tempora, ad amet aliquid?</p>">
                    <a href="#"><img src="<?php echo base_url() . 'assets/gambars/' . $gbr_galeri; ?>" alt="IMage" class="img-fluid"></a>
                </div>
            <?php
            }
            ?>


        </div>

        <div class="row justify-content-center" id="video-gallery">



            <div class="col-md-6 embed-responsive embed-responsive-16by9">
                <object width="420" height="315" data="https://www.youtube.com/v/tgbNymZ7vqY">
                </object>
            </div>
        </div>
    </div>
</div>



<div class="row mt-5">
    <div class="col-md-12 pt-5">
        <?= $page; ?>


    </div>
</div>
</div><!-- .container -->

</div><!-- .outer-container -->
<script type="text/javascript">
    $('#video-gallery').lightGallery();
</script>