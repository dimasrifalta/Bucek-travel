<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(''); ?>">Bucektravel</a>
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
                        <a class="dropdown-item" href="#">Cara Pesan</a>

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


<div class="block-30 block-30-sm item" style="background-image: url('http://localhost/bucektravel/assets/vendors/images/the_journey_sm.jpg');" data-stellar-background-ratio="0.5">
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

<div class="container">

    <div class="row site-section">
        <div class="col-lg-7 mb-5">
            <img src="<?php echo base_url() . 'assets/gambars/' . $n['gambar']; ?>" alt="Image placeholder" class="img-fluid img-shadow">
        </div>
        <div class="col-lg-5 pl-md-5">

            <div class="media block-6">
                <div class="icon"><span class="ion-ios- "></span></div>
                <div class="media-body">
                    <h3 class="heading text-danger">Nama Paket Tours</h3>
                    <p class="bg-success text-white "><?php echo $n['nama_paket']; ?>.</p>
                </div>
            </div>

            <div class="media block-6">
                <div class="icon"><span class="ion-ios-checkmark"></span></div>
                <div class="media-body">
                    <h3 class="heading">Deskripsi &amp; Fasilitas</h3>
                    <p><?php echo $n['deskripsi']; ?>.</p>
                    <p><a href="<?php echo base_url() . 'paket_tour/pesan_paket/' . $n['idpaket']; ?>" class="btn btn-primary py-3 px-5">Pesan Sekarang</a></p>
                </div>
            </div>

        </div>
    </div>




</div>