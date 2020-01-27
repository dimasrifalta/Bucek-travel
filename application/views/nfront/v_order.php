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



<div class="block-30 block-30-sm item" style="background-image: url('<?php echo base_url() . 'assets/vendors/images/the_journey_sm.jpg' ?>');" data-stellar-background-ratio="1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <span class="subheading-sm">Travel</span>
                <h2 class="heading">Pemesanan</h2>
            </div>
        </div>
    </div>
</div>

<?php
$b = $ketersediaan->row_array();
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

                <p> 3. Setelah semua data-data di form pemesanan tersisi dengan lengkap maka akan kami akan mengirim Invoice anda alamat email yang sudah terdaftar untu memesan.
                </p>
                <p> 4. Setelah itu silahkan Lakukan pembayaran tangihan anda sesuai dengan Invoice</p>
                <p> 5. setelah melakukan pembayaran maka anda diwajibkan Menkorfirmasi kami melalui Menu Komfirmasi.</p>
                <p> 6. setelah itu kami akan Menvalidasi bukti Pemesanan anda dan mengirim Tiket ke alamat E-mail anda</p>

            </div>

            <div class="col-md-6">
                <?php echo $this->session->flashdata('message'); ?>

                <form action="<?php echo base_url() . 'paket_tour/order' ?>" method="post">


                    <div class="mb-3">
                        <label>Nama Lengkap (Traveler Utama)</label>
                        <input type="text" class="form-control" id="firstname" name="nama" value="" required />
                    </div>

                    <div class="mb-3">
                        <label>NO KTP/SIM (Traveler Utama)</label>
                        <input type="text" class="form-control" maxlength="16" id="no_ktp" name="no_ktp" value="" required />
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
                        <label for="notelp">No Handphone (Traveler Utama)</label>
                        <input type="number" class="form-control" name="notelp" id="notelp" placeholder="Example: 082345126678" value="">
                    </div>

                    <div class="mb-3">
                        <label for="jml_bayar">Email (Traveler Utama)</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Contoh: mahakaryapromosindo@gmail.com" required>
                    </div>
                    <div class="mb-4 mt-4">
                        <h1 class="text-danger">*Wisata Info</h1>
                    </div>

                    <div class="mb-3">
                        <label for="notelp">Paket Pulau</label>
                        <input type="hidden" name="paket" class="form-control" value="<?php echo $b['idpaket'] ?>">
                        <input type="text" name="nama_paket" class="form-control" value="<?php echo $b['nama_paket'] ?>" readonly="readonly" required />
                    </div>


                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="th_sewa">Dewasa</label>
                            <input type="number" min="1" max="<?= $b['jumlah_ketersedian']; ?>" class="form-control" id="adultamt" name="adultamt" value="1">
                        </div>


                        <div class="col-md-6 mb-3">
                            <label for="th_sewa">Anak-Anak 12th</label>
                            <input type="number" class="form-control" id="childrenamt" name="childrenamt" value="0" class="spinner-min0" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="field-icon-wrap">
                            <label for="payment">Tanggal Tersedia</label>
                            <?php if ($ketersediaan->num_rows() >= 1) { ?>
                                <select name="id" id="paket" data-width="100%" class="form-control select2" required>

                                    <option>Pilih</option>
                                    <?php
                                    foreach ($ketersediaan->result_array() as $i) {
                                        $kode = $i['id'];
                                        $tgl_awal = $i['tgl_awal'];
                                        $tgl_akhir = $i['tgl_akhir'];
                                    ?>
                                        <option value='<?php echo $kode ?>'><?php echo tanggal($tgl_awal) ?> - <?php echo tanggal($tgl_akhir) ?></option>
                                    <?php } ?>
                                <?php } else { ?>

                                    <div class="alert alert-success" role="alert">
                                        <h4 class="alert-heading">Jadwal Belum Tersedia!</h4>
                                        <p>Mohon maaf, atas ketidaknyamanan. Untuk saat ini jadwal paket tour belum tersedia.</p>
                                        <hr>
                                        <p class="mb-0">Kami akan secepatnya mengupdate jadwal paket tour. Terima kasih atas perhatiannya. -Sumbawa Tour Travel.</p>
                                    </div>
                                <?php } ?>

                                </select>
                        </div>

                    </div>
                    <div class="mb-3">
                        <label for="khusus">Permintaan Khusus</label>
                        <textarea class="form-control" id="deskripsi" name="notebox" rows="3"></textarea>
                    </div>





                    <hr class="mb-4">

                    <p>
                        <?php if ($ketersediaan->num_rows() < 1) { ?>
                            <button type="submit" class="btn btn-primary py-3 px-5 " disabled>Pesan Sekarang</button>
                        <?php } else { ?>
                            <button type="submit" class="btn btn-primary py-3 px-5 ">Pesan Sekarang</button>

                        <?php } ?>
                    </p>

                </form>
            </div>
        </div>
    </div>
</div>