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

  <div class="block-30 block-30-sm item" style="background-image: url('<?php echo base_url() . 'assets/vendors/images/bg_2.jpg' ?>');" data-stellar-background-ratio="0.5">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-md-10">
                  <span class="subheading-sm">Travel</span>
                  <h2 class="heading">Paket &amp; Tours</h2>
              </div>
          </div>
      </div>
  </div>




  <div class="site-section">
      <div class="container">

          <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
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
                  <form action="<?php echo base_url() . 'pembatalan/add_pembatalan' ?>" method="post">

                      <div class="mb-3">
                          <label for="payment">Paket Yang Ingin Dibatalkan</label>
                          <select class="form-control" name="id_order" id="id_order" value="<?= set_value('id_order'); ?>">
                              <option>Pilih</option>
                              <?php foreach ($id_order as $j) : ?>

                                  <option value="<?= $j['id_order']; ?>"><?= $j['nama_paket']; ?></option>

                              <?php endforeach; ?>
                          </select>

                      </div>
                      <div class="mb-3">
                          <label>Nama Pemilik Rekening</label>
                          <input type="text" class="form-control" id="nama_rekening" name="nama_rekening" value="<?= set_value('nama_rekening'); ?>">
                          <?= form_error('nama_rekening', ' <small class="text-danger pl-3">', '</small>'); ?>
                      </div>

                      <div class="mb-3">
                          <label>No Rekening</label>
                          <input type="number" class="form-control" id="no_rek" name="no_rek" value="<?= set_value('no_rek'); ?>">
                          <?= form_error('no_rek', ' <small class="text-danger pl-3">', '</small>'); ?>
                      </div>




                      <div class="mb-3">
                          <label for="alamat">Alasan Pembatalan</label>
                          <input type="text" class="form-control" name="alasan_pembatalan" id="alasan_pembatalan" placeholder="Example : 1234 Main St" required>
                          <?= form_error('alasan_pembatalan', ' <small class="text-danger pl-3">', '</small>'); ?>
                      </div>





                      <hr class="mb-4">

                      <p><button type="submit" class="btn btn-primary py-3 px-5">Batalkan Tiket</button></p>

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
              swal('Succes!', 'Kami telah mengirimkan link pembatalan tiket ke Email anda, jika tidak ada periksan di SPAM email', 'success')
          }, 10);
          window.setTimeout(function() {

          }, 1200);
      </script>
  <?php endif; ?>