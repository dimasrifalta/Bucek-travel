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
                <li class="nav-item"><a href="<?= base_url('Konfirmasi'); ?>" class="nav-link">Konfirmasi</a>
                </li>
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

<div class="block-30 block-30-sm item" style="background-image: url('<?php echo base_url() . 'assets/vendors/images/travel.jpg' ?>');" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <span class="subheading-sm">Travel</span>
                <h2 class="heading">Booking List</h2>
            </div>
        </div>
    </div>
</div>

<!-- END nav -->

<div class="px-4 px-lg-0">
    <!-- For demo purpose -->
    <div class="container text-black py-5 text-center">
        <h1 class="display-4">Daftar Booking Paket Tour Saya</h1>

    </div>
    <!-- End -->

</div>

<div class="pb-5">
    <div class="container">
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

                <!-- Shopping cart table -->
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="p-2 px-3 text-uppercase">Nama Paket</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Tanggal berangkat</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Alamat Pemesan</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Aksi</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                foreach ($data as $b) {
                                    $date = date('Y-m-d', strtotime("+1 day"));

                                ?>
                                    <th scope="row" class="border-0">
                                        <div class="p-2">
                                            <img src="http://localhost/bucektravel/assets/gambars/<?= $b['gambar'] ?> " alt="" width="50" class="img-fluid rounded shadow-sm">
                                            <div class="ml-6 d-inline-block align-middle">
                                                <h5 class="mb-0"> <a href="<?php echo base_url() . 'paket_tour/Detail_booking/' . $b['id_order']; ?>" class="text-dark d-inline-block align-middle"><?php echo $b['nama_paket'] ?></a></h5><span class="text-muted font-weight-normal font-italic d-block"><?php echo $b['id_order'] ?></span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="border-0 align-middle"><strong><?php echo $b['berangkat'] ?></strong></td>
                                    <td class="border-0 align-middle"><strong><?php echo $b['alamat'] ?></strong></td>
                                    <td class="border-0 align-middle">
                                        <?php
                                        if ($b['pembatalan'] ==  "CANCEL" or $b['pembatalan'] == "BATAL") { ?>

                                            <a href="<?php echo base_url() . 'paket_tour/Detail_booking/' . $b['id_order']; ?>" class="text-dark"><i class='fa fa-window-close'>CANCELED</i></a></td>
                                <?php } elseif ($date > $b['berangkat']) { ?>
                                    <a href="<?php echo base_url() . 'paket_tour/Detail_booking/' . $b['id_order']; ?>" class="text-dark"><i class='fa fa-window-close'>Lihat Tetimoni</i></a></td>

                                <?php } else { ?>
                                    <a href="<?php echo base_url() . 'paket_tour/Detail_booking/' . $b['id_order']; ?>" class="text-dark"><i class='fa fa-trash'>Batalkan</i></a></td>
                                <?php } ?>


                            </tr>

                        <?php
                                }
                        ?>

                        </tbody>
                    </table>
                </div>
                <!-- End -->
            </div>
        </div>

    </div>
</div>

<!-- SweetAlet -->
<script src="<?php echo base_url() . 'assets/plugins/SweetAlert/sweetalert-dev.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/SweetAlert/sweetalert.min.js' ?>"></script>
<!-- <script src="<?php echo base_url() . 'assets/plugins/SweetAlert/myscript.js' ?>"></script> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<?php if ($this->session->flashdata('flash')) : ?>
    <script>
        setTimeout(function() {
            swal('Succes!', 'Terimah kasih Telah mempercayakan Liburan Anda Kepada Kami. Kami akan terus memperbaikki kualitas pelayan kami', 'success')
        }, 10);
        window.setTimeout(function() {

        }, 1200);
    </script>
<?php endif; ?>