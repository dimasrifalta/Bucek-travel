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

<div class="block-37" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
        <div class="block-30 item" style="background-image: url('<?php echo base_url() . 'assets/vendors/images/kontak.jpg' ?>');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <span class="subheading-sm">Pemesanan</span>
                        <h2 class="heading">Cara Pemesanan</h2>
                        <p><a href="<?= base_url('paket_tour'); ?>" class="btn py-4 px-5 btn-primary">How can we help you?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END nav -->

<style>
    .panel1-group .panel1 {
        border-radius: 0;
        box-shadow: none;
        border-color: #EEEEEE;
    }

    .panel1-default>.panel1-heading {
        padding: 0;
        border-radius: 0;
        color: #212121;
        background-color: #FAFAFA;
        border-color: #EEEEEE;
    }

    .panel1-title {
        font-size: 14px;
    }

    .panel1-title>a {
        display: block;
        padding: 15px;
        text-decoration: none;
        background-color: #fff;
    }

    .more-less {
        float: right;
        color: #ffc704;
    }

    .panel1-default>.panel1-heading+.panel1-collapse>.panel1-body {
        border-top-color: #ededed;
    }
</style>
<div class="site-section bg-light">

    <div class="container demo">
        <span class="subheading-sm">Pemesanan</span>
        <h2 class="heading">Bagaimana Cara Saya Pemesanan Paket Tour Wisata</h2>

        <div class="panel1-group" id="accordion" role="tablist" aria-multiselectable="true">

            <div class="panel1 panel1-default">
                <div class="panel1-heading" role="tab" id="headingOne">
                    <h4 class="panel1-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="more-less fa fa-chevron-down"></i>
                            1. Masuk kehalamn home sumbawa tour. Di halaman awal SumbawaTour, ketuk tanggal Chekin. Isi tanggal perjalanan, jumlah penumpang pada kotak pencarian, lalu ketuk Check Availabilty.
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel1-collapse collapse" role="tabpanel1" aria-labelledby="headingOne">
                    <div class="panel1-body">
                        <img src="<?php echo base_url() . 'assets/carapemesanan/1.png' ?>" class="img-fluid" alt="Responsive image"><br><br>


                    </div>
                </div>
            </div>

            <div class="panel1 panel1-default">
                <div class="panel1-heading" role="tab" id="headingTwo">
                    <h4 class="panel1-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="more-less fa fa-chevron-down"></i>

                            2. Setelah melakukan pencarian data paket tour berdasarkan tanggal anda akan ditampilkan data paket tour tersedia sesuai dengan tanggal Anda inputkan. Untuk melihat paket tour ketuk judul paket tour.

                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel1-collapse collapse" role="tabpanel1" aria-labelledby="headingTwo">
                    <div class="panel1-body">
                        <img src="<?php echo base_url() . 'assets/carapemesanan/2.png' ?>" class="img-fluid" alt="Responsive image"><br><br>

                    </div>
                </div>
            </div>

            <div class="panel1 panel1-default">
                <div class="panel1-heading" role="tab" id="headingThree">
                    <h4 class="panel1-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="more-less fa fa-chevron-down"></i>
                            3. Anda akan ditampilkan informasi secara spesifik mengenai detail paket tour wisata, jika anda tertarik langkah selanjutnya ketuk pesan sekarang.

                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel1-collapse collapse" role="tabpanel1" aria-labelledby="headingThree">
                    <div class="panel1-body">
                        <img src="<?php echo base_url() . 'assets/carapemesanan/3.png' ?>" class="img-fluid" alt="Responsive image"><br><br>


                    </div>
                </div>
            </div>


            <div class="panel1 panel1-default">
                <div class="panel1-heading" role="tab" id="headingThree">
                    <h4 class="panel1-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#4" aria-expanded="false" aria-controls="4">
                            <i class="more-less fa fa-chevron-down"></i>
                            4. Isi Data Pemesan dan Detail Traveler. Mohon pastikan untuk mengisi nama dan data sesuai dengan kartu identitas seperti KTP atau paspor. Jika nama Anda menggunakan tanda baca, mohon isi nama Anda tanpa tanda baca tersebut. Kemudian isi data wisata seperti jumlah wisatawan dan tanggal paket tour.

                        </a>
                    </h4>
                </div>
                <div id="4" class="panel1-collapse collapse" role="tabpanel1" aria-labelledby="headingThree">
                    <div class="panel1-body">
                        <img src="<?php echo base_url() . 'assets/carapemesanan/4.png' ?>" class="img-fluid" alt="Responsive image"><img src="<?php echo base_url() . 'assets/carapemesanan/5.png' ?>" class="img-fluid" alt="Responsive image"><br><br>


                    </div>
                </div>
            </div>



            <div class="panel1 panel1-default">
                <div class="panel1-heading" role="tab" id="headingThree">
                    <h4 class="panel1-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#5" aria-expanded="false" aria-controls="5">
                            <i class="more-less fa fa-chevron-down"></i>
                            5. Pilih metode pembayaran yang Anda inginkan


                        </a>
                    </h4>
                </div>
                <div id="5" class="panel1-collapse collapse" role="tabpanel1" aria-labelledby="headingThree">
                    <div class="panel1-body">
                        <img src="<?php echo base_url() . 'assets/carapemesanan/6.png' ?>" class="img-fluid" alt="Responsive image"><br><br>


                    </div>
                </div>
            </div>


            <div class="panel1 panel1-default">
                <div class="panel1-heading" role="tab" id="headingThree">
                    <h4 class="panel1-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#6" aria-expanded="false" aria-controls="6">
                            <i class="more-less fa fa-chevron-down"></i>
                            6. Selanjutnya Anda akan menerima notifikasi sukses melakukan order. Mohon periksa email anda kami akan mengirimkan jumlah yang harus anda bayar dan nomor rekening tujuan pembayaran. Kemudian ketuk konfirmasi untuk melakukan konfirmasi pembayaran tiket Anda, Mohon melakukan konfirmasi pembayaran < 24 dari waktu pemesanan, jika lebih dari 24 jam kami berhak tidak melanjuti pesanan Anda. </a> </h4> </div> <div id="6" class="panel1-collapse collapse" role="tabpanel1" aria-labelledby="headingThree">
                                <div class="panel1-body">
                                    <img src="<?php echo base_url() . 'assets/carapemesanan/7.png' ?>" class="img-fluid" alt="Responsive image"><img src="<?php echo base_url() . 'assets/carapemesanan/8.png' ?>" class="img-fluid" alt="Responsive image"><br><br>


                                </div>
                </div>
            </div>


            <div class="panel1 panel1-default">
                <div class="panel1-heading" role="tab" id="headingThree">
                    <h4 class="panel1-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#7" aria-expanded="false" aria-controls="7">
                            <i class="more-less fa fa-chevron-down"></i>
                            7. Kemudian mengisi data konfirmasi pembayaran anda dan mengirim bukti pembayaran tiket anda. Jika data pemesanan Anda valid kami akan memproses tiket pakket tour anda 1X24 jam dari waktu anda melakukan konfirmasi pembayaran.

                        </a>
                    </h4>
                </div>
                <div id="7" class="panel1-collapse collapse" role="tabpanel1" aria-labelledby="headingThree">
                    <div class="panel1-body">
                        <img src="<?php echo base_url() . 'assets/carapemesanan/9.png' ?>" class="img-fluid" alt="Responsive image"><br><br>



                    </div>
                </div>
            </div>

            <div class="panel1 panel1-default">
                <div class="panel1-heading" role="tab" id="headingThree">
                    <h4 class="panel1-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#8" aria-expanded="false" aria-controls="8">
                            <i class="more-less fa fa-chevron-down"></i>
                            8. E-Tiket paket tour wisata anda telah terbit.


                        </a>
                    </h4>
                </div>
                <div id="8" class="panel1-collapse collapse" role="tabpanel1" aria-labelledby="headingThree">
                    <div class="panel1-body">
                        <img src="<?php echo base_url() . 'assets/carapemesanan/10.png' ?>" class="img-fluid tocenter" alt="Responsive image"><br><br>
                    </div>
                </div>
            </div>



        </div>
    </div><!-- container -->

</div>
<i class="more-less fas fa-chevron-down"></i>

<script>
    function toggleIcon(e) {
        $(e.target)
            .prev('.panel1-heading')
            .find(".more-less")
            .toggleClass('fas fa-chevron-up fas fa-chevron-down');
    }
    $('.panel1-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel1-group').on('shown.bs.collapse', toggleIcon);
</script>