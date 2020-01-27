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
                 <li class="nav-item active"><a href="<?= base_url('Konfirmasi'); ?>" class="nav-link">Konfirmasi</a>
                 </li>
                 <li class="nav-item "><a href="<?= base_url('semua_album'); ?>" class="nav-link">Album dan Foto</a>
                 </li>
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




 <div class="block-30 block-30-sm item" style="background-image: url('<?php echo base_url() . 'assets/vendors/images/home-banner.png' ?>');" data-stellar-background-ratio="1">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-md-10">
                 <span class="subheading-sm">Travel</span>
                 <h2 class="heading">Konfirmasi Pembayaran</h2>
             </div>
         </div>
     </div>
 </div>


 <div class="site-section">
     <div class="container">
         <div class="row">
             <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
             <div class="col-md-12 mb-3">
                 <h2 class="text-danger">Ketentuan dan Kebijakan</h2>
             </div>
             <div class="col-md-6">
                 <p>1. Setalah melakukan pembayaran anda wajib mengkofirmasi kami melalui from ini.</p>
                 <p>2. Isi Data-Data Di form disamping sesuai dengan Bukti transfer anda.</p>
                 <p>3. Isi Data-data Di from dengan lengkap</p>
                 <p>4. Kami akan memvalidasi pembayaran anda.</p>
                 <p>5. Jika anda ingin melakukan Komplain silahkan datang langsung ke kantor kita atau hubungi kami
                     melalui live Chat.</p>
                 <div class="info box">
                     Silahkan Komfirmasi Pembayaran anda disamping
                 </div>
             </div>

             <div class="col-md-6">

                 <form action="<?php echo base_url() . 'konfirmasi/upload_bukti' ?>" method="post" enctype="multipart/form-data">
                     <?php
                        error_reporting(0);
                        echo $this->session->flashdata('msg');
                        ?>
                     <div class="mb-3">
                         <label>No Invoice</label>
                         <input type="text" class="form-control" id="firstname" name="invoice" placeholder="No Invoice" required />
                         <?php
                            $id_user = $this->session->userdata('id');

                            ?>
                         <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?= $id_user; ?>">
                     </div>


                     <div class="mb-3">
                         <label>Pengirim</label>
                         <input type="text" class="form-control" id="firstname" name="nama" placeholder="Nama pengirime" required />
                     </div>


                     <div class="mb-3">
                         <label for="payment">Pilih Bank</label>
                         <select class="form-control input-md select2-single " name="bank" required>
                             <?php foreach ($bnk->result_array() as $i) {
                                    $id = $i['id_metode'];
                                    $mtd = $i['bank'];
                                ?>
                                 <option value="<?php echo $id; ?>"><?php echo $mtd; ?></option>
                             <?php } ?>
                         </select>
                     </div>


                     <div class="mb-3">
                         <label for="checkin">Tanggal Transfer</label>
                         <div class="field-icon-wrap">
                             <div class="icon"><span class="icon-calendar"></span>
                             </div>
                             <input type="text" id="checkout_date" class="form-control datepicker" data-date-format="yyyy-mm-dd" autocomplete="off" name="tgl_bayar" required />
                         </div>
                     </div>


                     <div class="mb-3">
                         <label for="jumlah">Jumlah Transfer</label>
                         <input type="number" class="form-control" name="jumlah" id="jumlah" value="" min="0" required>
                     </div>

                     <div class="mb-3">
                         <label for="notelp">Bukti Transfer dalam Format : Jpg, Png, Bmp, Gif.</label>
                         <input type="file" name="filefoto" required>
                     </div>




                     <hr class="mb-4">

                     <p><button type="submit" class="btn btn-primary py-3 px-5">Konfirmasi Sekarang</button></p>

                 </form>
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
             swal('Succes!', 'Terima Kasih Telah Melakukkan Konfirmasi Pembayaran. Kami Akan Memproses Pembayaran Anda 1X24 jam. Kode Booking Akan Dikirimkan Ke Email Anda', 'success')
         }, 10);
         window.setTimeout(function() {

         }, 1200);
     </script>
 <?php endif; ?>