<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(''); ?>">SumbawaTour</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item"><a href="<?= base_url(''); ?>" class="nav-link">Home</a></li>
                <li class="nav-item active dropdown">
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
                <li class="nav-item"><a href="<?= base_url('semua_album'); ?>" class="nav-link">Album dan Foto</a></li>
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

<div class="block-30 block-30-sm item" style="background-image: url('<?php echo base_url() . 'assets/vendors/images/post.jpg' ?>');" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <span class="subheading-sm">Travel</span>
                <h2 class="heading">Testimoni </h2>
            </div>
        </div>
    </div>
</div>






<div class="site-section block-13 bg-light ">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-7 section-heading">
                <span class="subheading-sm">Testimoni</span></span>
                <h2 class="heading">Pelanggan &amp;Reviews</h2>


            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-4">
                <div class="nonloop-block-13 owl-carousel">
                    <?php foreach ($testimoni_order->result_array() as $a) :
                        $id = $a['idtestimoni'];
                        $nama = $a['nama'];
                        $email = $a['email'];
                        $pesan = $a['pesan'];
                        $status = $a['status'];
                        $tglpost = $a['tgl_post'];
                    ?>
                        <div class="item">
                            <div class="block-33">
                                <div class="vcard d-flex mb-3">
                                    <div class="image align-self-center"><img src="<?= base_url(); ?>assets\images\user_blank.png" alt="Person here"></div>
                                    <div class="name-text align-self-center">
                                        <h2 class="heading"><?= $nama; ?></h2>
                                        <span class="meta"><?= $email; ?></span>
                                    </div>
                                </div>
                                <div class="text">
                                    <blockquote>
                                        <p>&rdquo; <?= $pesan; ?>. &ldquo;</p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div>

            </div>

        </div> <!-- .col-md-12 -->
    </div>
</div>