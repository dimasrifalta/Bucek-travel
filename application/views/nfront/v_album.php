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
                <li class="nav-item"><a href="<?= base_url('wisata_post'); ?>" class="nav-link">Tempat Wisata</a></li>
                <li class="nav-item "><a href="<?= base_url('Konfirmasi'); ?>" class="nav-link">Konfirmasi</a></li>
                <li class="nav-item active"><a href="<?= base_url('semua_album'); ?>" class="nav-link">Album dan
                        Foto</a></li>




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



<div class="outer-container home-page">
    <div class="container portfolio-page">
        <div class="row">
            <div class="col">
                <ul class="breadcrumbs flex align-items-center">

                </ul><!-- .breadcrumbs -->
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="row">

            <?php
                foreach ($alm->result_array() as $b) {
                    $idalbum=$b['idalbum'];
                    $judul=$b['jdl_album'];
                    $cover=$b['cover'];
                    $jumlah=$b['jml'];
            ?>
            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img src="<?php echo base_url().'assets/gambars/'.$cover;?>" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3><a href="<?php echo base_url().'detail_photo/index/'.$idalbum;?>"><?php echo $judul;?>
                                (<?php echo $jumlah;?>)</a></h3>

                        <ul class="flex flex-wrap justify-content-center">

                            <li><a href="<?php echo base_url().'detail_photo/index/'.$idalbum;?>"><?php echo $jumlah;?>
                                    Foto</a></li>
                        </ul>
                    </div><!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <?php
                }
            ?>

        </div><!-- .row -->

        <div class="scroll-down flex flex-column justify-content-center align-items-center d-none d-lg-block">
            <span class="arrow-down flex justify-content-center align-items-center"><img
                    src="<?= base_url('assets/vendors/'); ?>/po-portfolio/images/arrow-down.png" alt="arrow"></span>
            <span class="scroll-text">Scroll Down</span>
        </div><!-- .scroll-down -->
        <div class="row mt-5">
            <div class="col-md-12 pt-5">
                <?=$page ;?>


            </div>
        </div>
    </div><!-- .container -->
</div><!-- .outer-container -->