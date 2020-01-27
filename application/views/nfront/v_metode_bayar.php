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
<!-- END nav -->



<div class="block-30 block-30-sm item" style="background-image: url('<?php echo base_url() . 'assets/vendors/images/payments.jpg' ?>');" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <span class="subheading-sm">Travel</span>
                <h2 class="heading">Metode Bayar</h2>
            </div>
        </div>
    </div>
</div>


<div class="site-section">
    <div class="container">
        <center>
            <?php echo $this->session->flashdata('message'); ?>
            <h1 class="heading mb-4">Pilih Metode Pembayaran</h1>
        </center>
        <div class="container section">
            <div class="table-responsive-sm">
                <table class="table table-hover" id="myTable">
                    <thead>
                        <tr>
                            <th>Metode Pembayaran</th>
                            <th>Bank</th>
                            <th>No. Rekening</th>
                            <th>Atas Nama</th>
                            <th>Pilihan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data->result_array() as $i) :
                            $idmetode = $i['id_metode'];
                            $metode = $i['metode'];
                            $bank = $i['bank'];
                            $norek = $i['norek'];
                            $atasnama = $i['atasnama'];
                        ?>
                            <tr>
                                <td><?php echo $metode; ?></td>
                                <td><?php echo $bank; ?></td>
                                <td><?php echo $norek; ?></td>
                                <td><?php echo $atasnama; ?></td>
                                <td><a href="<?php echo base_url() . 'paket_tour/set_pembayaran/' . $idmetode; ?>" class="badge badge-success">Pilih</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>