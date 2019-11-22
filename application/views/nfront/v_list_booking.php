<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(''); ?>">Bucektravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item "><a href="<?= base_url(''); ?>" class="nav-link">Home</a></li>
                <li class="nav-item "><a href="<?= base_url('paket_tour'); ?>" class="nav-link">Paket Tours</a></li>
                <li class="nav-item"><a href="<?= base_url('wisata_post'); ?>" class="nav-link">Tempat Wisata</a></li>
                <li class="nav-item"><a href="<?= base_url('Konfirmasi'); ?>" class="nav-link">Konfirmasi</a>
                </li>
                <li class="nav-item "><a href="<?= base_url('semua_album'); ?>" class="nav-link">Album dan Foto</a></li>




            </ul>
            <div class="btn-group ml-4 rights">
                <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list-alt"></i>
                </button>
                <div class="dropdown-menu">
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
            </div>
        </div>
    </div>
</nav>

<div class="block-37 block-37-sm item" style="background-image: url('http://localhost/bucektravel/assets/vendors/images/bg_0.jpg');" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <span class="subheading-sm">Pakets Travel</span>
                <h1 class="heading text-center">Booking</h1>
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
                                    <td class="border-0 align-middle"><a href="<?php echo base_url() . 'paket_tour/Detail_booking/' . $b['id_order']; ?>" class="text-dark"><?php
                                                                                                                                                                                if ($b['pembatalan'] ==                                                                                                     "CANCEL" or $b['pembatalan'] ==                                                                                                     "BATAL") {
                                                                                                                                                                                    echo "<i class='fa fa-window-close'>CANCELED</i>";
                                                                                                                                                                                } else {
                                                                                                                                                                                    echo "<i class='fa fa-trash'>Batalkan</i>";
                                                                                                                                                                                }; ?></a></td>
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