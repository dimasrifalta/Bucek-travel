<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(''); ?>">SumbawaTour</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ac"><a href="<?= base_url(''); ?>" class="nav-link">Home</a></li>
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
                <li class="nav-item active"><a href="<?= base_url('paket_tour'); ?>" class="nav-link">Paket Tours</a>
                </li>
                <li class="nav-item"><a href="<?= base_url('wisata_post'); ?>" class="nav-link">Tempat Wisata</a></li>
                <li class="nav-item "><a href="<?= base_url('Konfirmasi'); ?>" class="nav-link">Konfirmasi</a></li>
                <li class="nav-item "><a href="<?= base_url('semua_album'); ?>" class="nav-link">Album dan Foto</a></li>
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


<style>
    .scrollbar-deep-purple::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-color: #F5F5F5;
        border-radius: 10px;
    }

    .scrollbar-deep-purple::-webkit-scrollbar {
        width: 12px;
        background-color: #F5F5F5;
    }

    .scrollbar-deep-purple::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-color: #512da8;
    }

    .scrollbar-cyan::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-color: #F5F5F5;
        border-radius: 10px;
    }

    .scrollbar-cyan::-webkit-scrollbar {
        width: 12px;
        background-color: #F5F5F5;
    }

    .scrollbar-cyan::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-color: #00bcd4;
    }

    .scrollbar-dusty-grass::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-color: #F5F5F5;
        border-radius: 10px;
    }

    .scrollbar-dusty-grass::-webkit-scrollbar {
        width: 12px;
        background-color: #F5F5F5;
    }

    .scrollbar-dusty-grass::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-image: -webkit-linear-gradient(330deg, #d4fc79 0%, #96e6a1 100%);
        background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%);
    }

    .scrollbar-ripe-malinka::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-color: #F5F5F5;
        border-radius: 10px;
    }

    .scrollbar-ripe-malinka::-webkit-scrollbar {
        width: 12px;
        background-color: #F5F5F5;
    }

    .scrollbar-ripe-malinka::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-image: -webkit-linear-gradient(330deg, #f093fb 0%, #f5576c 100%);
        background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%);
    }

    .bordered-deep-purple::-webkit-scrollbar-track {
        -webkit-box-shadow: none;
        border: 1px solid #512da8;
    }

    .bordered-deep-purple::-webkit-scrollbar-thumb {
        -webkit-box-shadow: none;
    }

    .bordered-cyan::-webkit-scrollbar-track {
        -webkit-box-shadow: none;
        border: 1px solid #00bcd4;
    }

    .bordered-cyan::-webkit-scrollbar-thumb {
        -webkit-box-shadow: none;
    }

    .square::-webkit-scrollbar-track {
        border-radius: 0 !important;
    }

    .square::-webkit-scrollbar-thumb {
        border-radius: 0 !important;
    }

    .thin::-webkit-scrollbar {
        width: 6px;
    }

    .example-1 {
        position: relative;
        overflow-y: scroll;
        height: 500px;
    }
</style>


<div class="block-30 block-30-sm item" style="background-image: url('<?php echo base_url() . 'assets/vendors/images/the_journey_sm.jpg' ?>');" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <span class="subheading-sm">Travel</span>
                <h2 class="heading">Paket &amp; Tours</h2>
            </div>
        </div>
    </div>
</div>
<?php
$n = $news->row_array();
?>
<style type="text/css">
    .margintt {
        margin-top: 80px;
    }
</style>

<?php if ($foto->num_rows() >= 1) { ?>
    <div class="container-fluid  margintt">
        <div class="swiper-container images-carousel">
            <div class="swiper-wrapper">
                <?php
                foreach ($foto->result_array() as $b) {
                    // $idberita = $b['idwisata'];
                    // $judul = $b['nama_wisata'];
                    // $isi = $b['deskripsi'];
                    $gbr = $b['gbr_galeri'];
                ?>
                    <div class="swiper-slide">
                        <div class="image-wrap">
                            <div class="image-info">


                            </div>
                            <img src="http://localhost/bucektravel/assets/gambars/<?= $gbr; ?>" alt="Image">
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
<?php } ?>







<div class="container">

    <div class="row site-section">

        <div class="col-md-6 sm-4">

            <div class="media-body">
                <h3 class="heading text-danger"><?php echo $n['nama_paket']; ?>.</h3>

            </div>

            <img src="<?php echo base_url() . 'assets/gambars/' . $n['gambar']; ?>" alt="Image placeholder" class="img-fluid img-shadow">
            <?php if ($ketersediaan->num_rows() > 0) { ?>
                <ul class="list-group">
                    <li class="list-group-item active">Tanggal Tersedia</li>
                    <?php foreach ($ketersediaan->result_array() as $i) :
                        $kode = $i['id'];
                        $tgl_awal = $i['tgl_awal'];
                        $tgl_akhir = $i['tgl_akhir'];
                        $jumlah_ketersedian = $i['jumlah_ketersedian'];
                    ?>

                        <li class="list-group-item"><?= tanggal($tgl_awal); ?> - <?= tanggal($tgl_akhir); ?>(Tersedia <?= $jumlah_ketersedian; ?> Orang)</li>

                    <?php endforeach; ?>
                <?php } else { ?>

                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Jadwal Belum Tersedia!</h4>
                        <p>Mohon maaf, atas ketidaknyamanan. Untuk saat ini jadwal paket tour belum tersedia.</p>

                    </div>
                <?php } ?>
                </ul>
        </div>
        <!-- Grid column -->
        <style>
            a.disabled {
                /* Make the disabled links grayish*/
                color: gray;
                /* And disable the pointer events */
                pointer-events: none;
            }
        </style>
        <div class="col-md-6 sm-5">

            <!-- Exaple 1 -->

            <div class="media-body">
                <h3 class="heading">Deskripsi &amp; Fasilitas</h3>

            </div>
            <div class="media block-6">

                <div class="card example-1 square scrollbar-cyan bordered-cyan">
                    <div class="card-body">





                        <div class="media block-6">
                            <div class="icon"><span class="ion-ios-checkmark"></span></div>
                            <div class="media-body">

                                <p><?php echo $n['deskripsi']; ?>.</p>


                                <p>
                                    <?php if ($ketersediaan->num_rows() < 1) { ?>
                                        <a href="<?php echo base_url() . 'paket_tour/pesan_paket/' . $n['idpaket']; ?>" class="btn btn-primary py-3 px-5 disabled">Pesan Sekarang</a>
                                    <?php } else { ?>
                                        <a href="<?php echo base_url() . 'paket_tour/pesan_paket/' . $n['idpaket']; ?>" class="btn btn-primary py-3 px-5">Pesan Sekarang</a>

                                    <?php } ?>
                                </p>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- Exaple 1 -->

            </div>
            <!-- Grid column -->
        </div>





    </div>
</div>
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