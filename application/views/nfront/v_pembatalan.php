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
                <h1 class="heading text-center">Pembatalan</h1>
            </div>
        </div>
    </div>
</div>
<!-- END nav -->



<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-3">
                <h2 class="text-danger">Syarat dan Ketentuan Pembatalan</h2>
            </div>
            <div class="col-md-12 mb-3">

                <p align="justify"> 1. Pengembalian dana dilakukan dengan jumlah dan waktu sesuai dengan kebijakan dan ketentuan pembatalan yang diberlakukan oleh Mitra. </p>
                <p align="justify"> 2. Jumlah dana yang dikembalikan kepada Anda tidak lebih besar dari jumlah nominal yang Anda bayarkan kepada Kami, disesuaikan dengan kebijakan yang diberlakukan oleh masing-masing Mitra.</p>
                <p align="justify"> 3. Untuk transaksi yang pembayarannya menggunakan cara transfer, maka pengembalian dana dilakukan melalui rekening masing masing .</p>
                <p align="justify"> 4. Untuk transaksi yang pembayarannya bukan menggunakan kartu kredit dan Klikpay BCA dengan BCA Card, maka pengembalian dana dilakukan melalui transfer ke rekening pemesan atau salah satu penumpang atau tamu hotel atau penyewa mobil yang telah terdaftar pada pemesanan Anda.
                </p>
                <p align="justify"> 5. Kami akan meneruskan setiap pembatalan pesanan yang Anda lakukan kepada Mitra. Sehingga, Kami memerlukan waktu untuk mendapatkan kembali pembayaran yang Anda lakukan sebelumnya yang telah Kami teruskan kepada Mitra. Untuk itu, Anda memaklumi setiap waktu yang Kami butuhkan untuk mengembalikan dana tersebut kepada Anda.
                </p>

            </div>

            <div class="col-md-9 mb-3">
                <div class="col-md-12 mb-3">
                    <h2 class="text-danger">Form Pembatalan</h2>
                </div>
                <form action="<?php echo base_url() . 'pembatalan' ?>" method="post">

                    <div class="mb-3">
                        <label for="payment">Paket Yang Ingin Dibatalkan</label>
                        <select class="form-control" name="order_id" id="order_id" value="<?= set_value('data'); ?>">
                            <option>Pilih</option>
                            <?php foreach ($data as $j) : ?>

                                <option value="<?= $j['order_id']; ?>"><?= $j['nama_paket']; ?></option>

                            <?php endforeach; ?>
                        </select>

                    </div>
                    <div class="mb-3">
                        <label>Nama Pemilik Rekening</label>
                        <input type="text" class="form-control" id="firstname" name="nama_rekening" value="" required />
                    </div>

                    <div class="mb-3">
                        <label>No Rekening</label>
                        <input type="number" class="form-control" id="firstname" name="no_rek" value="" required />
                    </div>




                    <div class="mb-3">
                        <label for="alamat">Alasan Pembatalan</label>
                        <input type="text" class="form-control" name="alasan_pembatalan" id="alasan_pembatalan" placeholder="Example : 1234 Main St" required>
                    </div>





                    <hr class="mb-4">

                    <p><button type="submit" class="btn btn-primary py-3 px-5">Batalkan Tiket</button></p>

                </form>
            </div>

        </div>
    </div>


</div>