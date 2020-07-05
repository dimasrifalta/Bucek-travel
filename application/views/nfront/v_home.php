 <?php
    function limit_words($string, $word_limit)
    {
        $words = explode(" ", $string);
        return implode(" ", array_splice($words, 0, $word_limit));
    }

    ?>

 <style type="text/css">
     .bs-example {
         margin: auto;
         width: 25%;
     }

     .dropdown:hover .dropdown-menu {
         display: block;
     }
 </style>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
     <div class="container">
         <a class="navbar-brand" href="<?= base_url(''); ?>">SumbawaTour</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="oi oi-menu"></span> Menu
         </button>

         <div class="collapse navbar-collapse" id="ftco-nav">
             <ul class="navbar-nav ml-auto">

                 <li class="nav-item active"><a href="<?= base_url(''); ?>" class="nav-link">Home</a></li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Profil &nbsp;
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
                 <li class="nav-item "><a href="<?= base_url('Konfirmasi'); ?>" class="nav-link">Konfirmasi</a></li>
                 <li class="nav-item"><a href="<?= base_url('semua_album'); ?>" class="nav-link">Album dan Foto</a></li>

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

 <div class="block-31" style="position: relative;">
     <div class="owl-carousel loop-block-31 ">
         <div class="block-30 item" style="background-image: url('<?php echo base_url() . 'assets/vendors/images/home-banner.png' ?>');">
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-md-10">
                         <span class="subheading-sm">Welcome</span>
                         <h2 class="heading">Enjoy a Luxury Experience</h2>
                         <p><a href="<?= base_url('paket_tour'); ?>" class="btn py-4 px-5 btn-primary">Learn More</a></p>
                     </div>
                 </div>
             </div>
         </div>
         <div class="block-30 item img-fluid " style="background-image: url('<?php echo base_url() . 'assets/vendors/images/self-driving-tour1.jpg' ?>');" data-stellar-background-ratio="1">
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-md-10">
                         <span class="subheading-sm">Welcome</span>
                         <h2 class="heading">Simple &amp; Elegant</h2>
                         <p><a href="<?= base_url('paket_tour'); ?>" class="btn py-4 px-5 btn-primary">Learn More</a></p>
                     </div>
                 </div>
             </div>
         </div>
         <div class="block-30 item" style="background-image: url('<?php echo base_url() . 'assets/vendors/images/the_journey_sm.jpg' ?>');" data-stellar-background-ratio="1">
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-md-10">
                         <span class="subheading-sm">Welcome</span>
                         <h2 class="heading">Simple &amp; Elegant</h2>
                         <p><a href="<?= base_url('paket_tour'); ?>" class="btn py-4 px-5 btn-primary">Learn More</a></p>
                     </div>
                 </div>
             </div>
         </div>

     </div>
 </div>

 <div class="container">
     <div class="row mb-5">
         <div class="col-md-12">

             <div class="block-32">
                 <form action="<?php echo site_url('welcome/search_keyword'); ?>" method="post">
                     <div class="row">
                         <div class="col-md-6 mb-3 mb-lg-0 col-lg-5">
                             <label for="checkin">Check In</label>
                             <div class="field-icon-wrap">
                                 <div class="icon"><span class="icon-calendar"></span></div>
                                 <?php
                                    $date = date("yyyy-mm-dd");
                                    ?>
                                 <input type="text" id="cari" name="cari" class="form-control" autocomplete="off" required>
                             </div>
                         </div>
                         <div class="col-md-6 mb-3 mb-md-0 col-lg-4">
                             <div class="row">
                                 <div class="col-md-6 mb-3 mb-md-0">
                                     <label for="checkin">Adults</label>
                                     <div class="field-icon-wrap">
                                         <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                         <select name="" id="" class="form-control">
                                             <option value="">1</option>
                                             <option value="">2</option>
                                             <option value="">3</option>
                                             <option value="">4+</option>
                                         </select>
                                     </div>
                                 </div>
                                 <div class="col-md-6 mb-3 mb-md-0">
                                     <label for="checkin">Children</label>
                                     <div class="field-icon-wrap">
                                         <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                         <select name="" id="" class="form-control">
                                             <option value="">1</option>
                                             <option value="">2</option>
                                             <option value="">3</option>
                                             <option value="">4+</option>
                                         </select>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-6 col-lg-3 align-self-end">
                             <button type="sumbit" class="btn btn-primary btn-block">Check Availabilty</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>




     <div class="container">
         <div class="row mb-5">
             <div class="col-md-12 col-sm-4">
                 <div class="row site-section">
                     <div class="col-md-12 col-sm-4">
                         <div class="row mb-5">
                             <div class="col-md-7 section-heading">
                                 <span class="subheading-sm">Layanan</span>
                                 <h2 class="heading">Fasilitas &amp; Layanan</h2>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-6 col-sm-4">
                         <div class="media block-6">
                             <div class="icon"><span class="flaticon-double-bed"></span></div>
                             <div class="media-body">
                                 <h3 class="heading">Luxury Rooms</h3>
                                 <p>Nikmati pengalaman traveling mu dengan menginap di hotal yang mewah.</p>
                             </div>
                         </div>
                     </div>

                     <div class="col-md-6 col-sm-4">
                         <div class="media block-6">
                             <div class="icon"><span class="flaticon-customer-service"></span></div>
                             <div class="media-body">
                                 <h3 class="heading">Call Us 24/7</h3>
                                 <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                     unorthographic.</p>
                             </div>
                         </div>
                     </div>

                     <div class="col-md-6 col-sm-4">
                         <div class="media block-6">
                             <div class="icon"><span class="flaticon-taxi"></span></div>
                             <div class="media-body">
                                 <h3 class="heading">Travel Accomodation</h3>
                                 <p>Semua accomodation kami semua yang tanggung,kamu tidak perlu pusing lagi untuk mengurus akomodasi waktu traveling.</p>
                             </div>
                         </div>
                     </div>

                     <div class="col-md-6 col-sm-4">
                         <div class="media block-6">
                             <div class="icon"><span class="flaticon-dinner"></span></div>
                             <div class="media-body">
                                 <h3 class="heading">Restaurant</h3>
                                 <p>Semua restorant yang kami tawarkan adalah resturant yang kualitas makanannya jos ngandos.</p>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>

         </div>

     </div>
 </div>
 <div class="site-section block-13 bg-light ">
     <div class="container">
         <div class="row mb-5">
             <div class="col-md-7 section-heading">
                 <span class="subheading-sm">Paling Banyak Dikunjungi</span></span>
                 <h2 class="heading">Paket &amp; Tour Wisata</h2>

             </div>
         </div>

         <div class="row">
             <div class="col-md-12 col-sm-4">
                 <div class="nonloop-block-13 owl-carousel">
                     <?php
                        foreach ($paket_populer->result_array() as $b) {
                            $idberita = $b['idpaket'];
                            $judul = $b['nama_paket'];
                            $isi = limit_words($b['deskripsi'], 20);
                            $hargadewasa = $b['hrg_dewasa'];
                            $gbr = $b['gambar'];
                            $hrg_anak = $b['hrg_anak'];
                            $views = $b['views'];
                        ?>
                         <div class="item">
                             <div class="block-34">
                                 <div class="image ">
                                     <a href="<?php echo base_url() . 'paket_tour/detail_paket/' . $idberita; ?>">
                                         <!-- <img src="<?php echo base_url() . 'assets/gambars/' . $gbr; ?>" class="img-fluid" style="height: 250px;" alt="Image placeholder"></a> -->
                                         <img src="https://drive.google.com/uc?export=view&amp;id=1YJOrmoAJ-EOaq94J3SNP8avPoqFSx2Ve" class="img-fluid" style="height: 250px;" alt="Image placeholder"></a>
                                 </div>
                                 <div class="text">
                                     <h2 class="heading"><a href="<?php echo base_url() . 'paket_tour/detail_paket/' . $idberita; ?>"><?= $judul; ?>g</a></h2>
                                     <div class="price"><sup>$</sup><span class="number"><?= $hargadewasa; ?></span><sub>/per orang</sub></div>
                                     <ul class="specs">
                                         <li><strong>Dipesan: <?= $views; ?></strong> Kali </li>
                                         <li><strong>Child: <?= $hrg_anak; ?></strong> 12th</li>
                                         <!-- <li><strong>Deskripsi: </strong> <?= $isi; ?></li> -->

                                     </ul>
                                 </div>
                             </div>
                         </div>
                     <?php
                        }
                        ?>


                 </div>

             </div>

         </div> <!-- .col-md-12 -->
     </div>
 </div>
 </div>


 <div class="site-section bg-light">
     <div class="container">
         <div class="row mb-5">
             <div class="col-md-7 section-heading">
                 <span class="subheading-sm">Reviews</span>
                 <h2 class="heading">Pelanggan Reviews</h2>
             </div>
         </div>
         <div class="row">
             <?php
                foreach ($test->result_array() as $j) :
                    $name = $j['nama'];
                    $tgl_post = $j['tgl_post'];
                    $pesan = $j['pesan'];
                ?>
                 <div class="col-md-6 col-lg-4">
                     <div class="block-33">
                         <div class="vcard d-flex mb-3">
                             <div class="image align-self-center"><img src="<?= base_url(); ?>assets\images\user_blank.png" alt="Person here"></div>
                             <div class="name-text align-self-center">
                                 <h2 class="heading"><?= $name; ?></h2>
                                 <span class="meta"><?= tanggal($tgl_post); ?></span>
                             </div>
                         </div>
                         <div class="text">
                             <blockquote>
                                 <p>&rdquo; <?= $pesan; ?>. &ldquo;</p>
                             </blockquote>
                         </div>
                     </div>

                 </div>
             <?php endforeach; ?>

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
             swal('Succes!', 'Terimah kasih Telah Melakukan Subscribe. Kami akan menawarkan promo produk-produk menarik kami langsung ke alamat Email anda. Happy Traveling', 'success')
         }, 10);
         window.setTimeout(function() {

         }, 1200);
     </script>

 <?php elseif ($this->session->flashdata('flash-gagal')) : ?>
     <script>
         setTimeout(function() {
             swal('Error!', 'Maafkan kami, Email telah terdaftar. Tapi jangan khawatir anda pasti mendapatkan promo produk-produk menarik dari kami. Happy Traveling', 'error')
         }, 10);
         window.setTimeout(function() {

         }, 1200);
     </script>
 <?php else : ?>
 <?php endif; ?>