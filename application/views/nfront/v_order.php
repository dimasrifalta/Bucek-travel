<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(''); ?>">Bucektravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item "><a href="<?= base_url(''); ?>" class="nav-link">Home</a></li>
                <li class="nav-item active"><a href="<?= base_url('paket_tour'); ?>" class="nav-link">Paket Tours</a>
                </li>
                <li class="nav-item"><a href="<?= base_url('wisata_post'); ?>" class="nav-link">Tempat Wisata</a></li>
                <li class="nav-item "><a href="<?= base_url('Konfirmasi'); ?>" class="nav-link">Konfirmasi</a></li>
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
<!-- END nav -->



<div class="block-37 block-37-sm item" style="background-image: url('http://localhost/bucektravel/assets/vendors/images/img_4.jpg');" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <span class="subheading-sm">Pakets Travel</span>
                <h1 class="heading text-center">PEMESANAN</h1>
            </div>
        </div>
    </div>
</div>

<?php
$b = $pkt->row_array();
?>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-3">
                <h2 class="text-danger">Cara Pemesanan</h2>
            </div>
            <div class="col-md-6">
                <p> 1. Isi Data-data Di Form pemesanan Dengan Lengkap dan Benar </p>
                <p> 2. Jika anda memimliki Permintaan Khusus, masukan di Form bagian *Permintaan Khusus.</p>
                <p> 3. Jika anda ingin melakukan pembayar DP Pemesanan ketik( Down payment ) di From bagian *Permintaan
                    Khusus.</p>
                <p> 4. Jika anda ingin membayaran penuh Pemesanan ketik(Full payment) di Form bagian *Permintaan khusus.
                </p>
                <p> 5. Setelah semua data-data di form pemesanan tersisi dengan lengkap maka akan keluar Invoice anda
                </p>
                <p> 6. Setelah itu silahkan Lakukan pembayaran tangihan anda sesuai dengan Invoice</p>
                <p> 7. setelah melakukan pembayaran maka anda diwajibkan Menkorfirmasi kami melalui Menu Komfirmasi.</p>
                <p> 8. setelah itu kami akan Menvalidasi bukti Pemesanan anda</p>

            </div>

            <div class="col-md-6">

                <form action="<?php echo base_url() . 'paket_tour/order' ?>" method="post">


                    <div class="mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" id="firstname" name="nama" value="" required />
                    </div>


                    <div class="mb-3">
                        <label for="payment">Jenis Kelamin</label>
                        <select class="form-control input-md select2-single " id="payment" name="jenkel" placeholder="Pilih">
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>

                    </div>

                    <div class="mb-3">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Example : 1234 Main St" required>
                    </div>

                    <div class="mb-3">
                        <label for="notelp">No Handphone</label>
                        <input type="text" class="form-control" name="notelp" id="notelp" placeholder="Example: 082345126678" value="">
                    </div>

                    <div class="mb-3">
                        <label for="jml_bayar">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Contoh: mahakaryapromosindo@gmail.com" required>
                    </div>
                    <div class="mb-4 mt-4">
                        <h1 class="text-danger">*Wisata Info</h1>
                    </div>

                    <div class="mb-3">
                        <label for="notelp">Paket Pulau</label>
                        <input type="hidden" name="paket" class="form-control" value="<?php echo $b['idpaket'] ?>">
                        <input type="text" name="nama_paket" class="form-control" value="<?php echo $b['nama_paket'] ?>" readonly="readonly" required />
                    </div>


                    <div class="mb-3">
                        <label for="checkin">Keberangkatan</label>
                        <div class="field-icon-wrap">
                            <div class="icon"><span class="icon-calendar"></span>
                            </div>
                            <input type="text" id="checkin_date" class="form-control datepicker" data-date-format="yyyy-mm-dd" autocomplete="off" name="berangkat" required />
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="checkout_date">Kepulangan</label>
                        <div class="field-icon-wrap">
                            <div class="icon"><span class="icon-calendar"></span>
                            </div>
                            <input type="text" id="checkout_date" class="form-control datepicker" data-date-format="yyyy-mm-dd" autocomplete="off" name="kembali" required />
                        </div>
                    </div>




                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="th_sewa">Dewasa</label>
                            <input type="number" class="form-control" id="adultamt" name="adultamt" value="1">
                        </div>


                        <div class="col-md-6 mb-3">
                            <label for="th_sewa">Anak-Anak</label>
                            <input type="number" class="form-control" id="childrenamt" name="childrenamt" value="0" class="spinner-min0" />
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="khusus">Permintaan Khusus</label>
                        <textarea class="form-control" id="deskripsi" name="notebox" rows="3"></textarea>
                    </div>



                    <hr class="mb-4">

                    <p><button type="submit" class="btn btn-primary py-3 px-5">Pesan Sekarang</button></p>

                </form>
            </div>
        </div>
    </div>
</div>