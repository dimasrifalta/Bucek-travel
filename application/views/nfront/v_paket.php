 <?php 
 function limit_words($string, $word_limit){
  $words = explode(" ",$string);
  return implode(" ",array_splice($words,0,$word_limit));
}

?>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
     <div class="container">
         <a class="navbar-brand" href="index.html">Bucektravel</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
             aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="oi oi-menu"></span> Menu
         </button>

         <div class="collapse navbar-collapse" id="ftco-nav">
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item "><a href="<?= base_url(''); ?>" class="nav-link">Home</a></li>
                 <li class="nav-item active"><a href="<?= base_url('paket_tour'); ?>" class="nav-link">Paket Tours</a>
                 </li>
                 <li class="nav-item"><a href="<?= base_url('wisata_post'); ?>" class="nav-link">Tempat Wisata</a></li>
                 <li class="nav-item "><a href="<?= base_url('Konfirmasi'); ?>" class="nav-link">Konfirmasi</a></li>
                 <li class="nav-item "><a href="<?= base_url('semua_album'); ?>" class="nav-link">Album dan Foto</a>
                 </li>




             </ul>
             <div class="btn-group ml-4 rights">
                 <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                     aria-expanded="false"><i class="fa fa-list-alt"></i>
                 </button>
                 <div class="dropdown-menu">
                     <?php

                      if ($this->session->userdata('email')) {?>

                     <a class="dropdown-item text-secondary" href="<?=base_url('booking');?>">Booking</a>

                     <a class="dropdown-item text-secondary" href="<?=base_url('auth/logout');?>">Logout</a>

                     <?php
                      } else {?>
                     <a class="dropdown-item text-secondary" href="<?=base_url('auth');?>">Login</a>

                     <?php
                    }?>
                 </div>
             </div>
         </div>
     </div>
     </div>
 </nav>
 <!-- END nav -->



 <div class="block-30 block-30-sm item"
     style="background-image: url('http://localhost/bucektravel/assets/vendors/images/bg_2.jpg');"
     data-stellar-background-ratio="0.5">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-md-10">
                 <span class="subheading-sm">Travel</span>
                 <h2 class="heading">Paket &amp; Tours</h2>
             </div>
         </div>
     </div>
 </div>






 <div class="site-section bg-light">
     <div class="container">
         <div class="row mb-5">
             <?php
      foreach ($news->result_array() as $b) {
        $idberita=$b['idpaket'];
        $judul=$b['nama_paket'];
        $isi=limit_words($b['deskripsi'],20);
        $hargadewasa=$b['hrg_dewasa'];
        $gbr=$b['gambar'];
        $hrg_anak=$b['hrg_anak'];
        ?>
             <div class="col-md-12 mb-5">
                 <div class="block-3 d-md-flex">
                     <div class="image"
                         style="background-image: url('http://localhost/bucektravel/assets/gambars/<?= $gbr ;?>')">
                     </div>
                     <div class="text">



                         <h2 class="heading"><?=$judul ;?></h2>
                         <ul class="specs mb-5">
                             <li><strong>Dewasa: 1 <div class="price"><sup>$</sup><span
                                             class="number"><?= $hargadewasa;?></span><sub>/per tours</sub></div>
                                 </strong></li>

                             <li><strong>Anak-anak: 1 <div class="price"><sup>$</sup><span
                                             class="number"><?= $hrg_anak;?></span><sub>/per tours</sub></div>
                                 </strong></li>
                             <li><strong>Categories:</strong> Single</li>

                         </ul>
                         <p><?php echo $isi;?>... </p>
                             <p><a href="<?php echo base_url().'paket_tour/detail_paket/'.$idberita;?>"
                                     class="btn btn-primary py-3 px-5">Read More</a></p>
                     </div>
                 </div>
             </div>

             <?php
      }
      ?>

         </div>

         <div class="row mt-5">
             <div class="col-md-12 pt-5">
                 <?=$page ;?>


             </div>
         </div>


     </div>
 </div>