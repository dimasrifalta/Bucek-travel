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
                <li class="nav-item "><a href="<?= base_url('paket_tour'); ?>" class="nav-link">Paket Tours</a></li>
                <li class="nav-item active"><a href="<?= base_url('wisata_post'); ?>" class="nav-link">Tempat Wisata</a>
                </li>
                <li class="nav-item "><a href="<?= base_url('Konfirmasi'); ?>" class="nav-link">Konfirmasi</a></li>
                <li class="nav-item "><a href="<?= base_url('semua_album'); ?>" class="nav-link">Album dan Foto</a></li>




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
</nav>
<!-- END nav -->


<div class="block-37 block-37-sm item"
    style="background-image: url('http://localhost/bucektravel/assets/vendors/images/img_4.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <span class="subheading-sm">Travel</span>
                <h2 class="heading ">Detail &amp; Wisata</h2>
            </div>
        </div>
    </div>
</div>
<?php 
    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }
        
?>

<?php
    $n=$news->row_array();
?>


<div id="blog" class="site-section">
    <div class="container">

        <div class="row">

            <div class="col-md-8 col-sm-4">
                <h1 class="mb-3 heading"><?php echo $n['nama_wisata'];?></h1>

                <p><img src="<?php echo base_url().'assets/gambars/'.$n['gambar'];?>" alt="" class="img-fluid"></p>

                <p><?php echo $n['deskripsi'];?></p>


                <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">Relax</a>
                        <a href="#" class="tag-cloud-link">Hotel</a>
                        <a href="#" class="tag-cloud-link">Luxury</a>
                        <a href="#" class="tag-cloud-link">Unwind</a>
                    </div>
                </div>


                <div class="pt-5 mt-5">
                    <h3 class="mb-5"><?= $jum ;?> Comments</h3>
                    <?php
                                        foreach ($test->result_array() as $j):
                                        $name=$j['nama'];
                                        $tgl_post=$j['tgl_post'];
                                        $pesan=$j['pesan'];
                                    ?>
                    <ul class="comment-list">
                        <li class="comment">
                            <div class="vcard bio">
                                <img src="<?= base_url() ;?>assets\images\user_blank.png" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3><?php echo $name;?></h3>
                                <div class="meta"><?php echo $tgl_post;?></div>
                                <p> "<?php echo $pesan;?>"</p>
                                <p></p>
                            </div>
                        </li>


                    </ul>

                     <?php endforeach ;?>



                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>
                        <form action="<?php echo base_url().'wisata_post/simpan_komentar'?>" method="post" class="p-5 bg-light">
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" name= "nama" id="name" required>
                                <input type="hidden" class="form-control" name= "kode" value="<?= $kode ;?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                        

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" id="comment" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                            </div>

                        </form>
                    </div>
                </div>

            </div> <!-- .col-md-8 -->
            <div class="col-md-4 sidebar">
                <div class="sidebar-box">
                    <form action="#" class="search-form" method="get">
                        <div class="form-group">
                            <span class="icon fa fa-search"></span>
                            <input id="searchbox" type="text" class="form-control"
                                placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>
                <div class="sidebar-box">
                    <div class="categories">
                        <h3>Wisata lainnya</h3>
                        <?php
                          foreach ($brt->result_array() as $b) {
                              $idberita=$b['idwisata'];
                              $judul=$b['nama_wisata'];
                              $isi=$b['deskripsi'];
                              $gbr=$b['gambar'];
                      ?>
                        <li><a href="<?php echo base_url().'wisata_post/detail_wisata/'.$idberita;?>"><img width="50"
                                    height="50" src="<?php echo base_url().'assets/gambars/'.$gbr;?>" alt="" /> <span
                                    class="text-primary"><?php echo $judul;?></span></a></li>
                        <?php
                          }
                      ?>
                    </div>
                </div>


                <div class="sidebar-box">
                    <h3>Tag Cloud</h3>
                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">Life</a>
                        <a href="#" class="tag-cloud-link">Sport</a>
                        <a href="#" class="tag-cloud-link">Tech</a>
                        <a href="#" class="tag-cloud-link">Travel</a>
                        <a href="#" class="tag-cloud-link">Life</a>
                        <a href="#" class="tag-cloud-link">Sport</a>
                        <a href="#" class="tag-cloud-link">Tech</a>
                        <a href="#" class="tag-cloud-link">Travel</a>
                    </div>
                </div>

                <div class="sidebar-box">
                    <h3>Paragraph</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus
                        voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur
                        similique, inventore eos fugit cupiditate numquam!</p>
                </div>
            </div>

        </div>


    </div>
</div>