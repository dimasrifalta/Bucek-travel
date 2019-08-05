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
                <li class="nav-item"><a href="<?= base_url('wisata_post'); ?>" class="nav-link">Tempat Wisata</a></li>
                <li class="nav-item active"><a href="<?= base_url('Konfirmasi'); ?>" class="nav-link">Konfirmasi</a>
                </li>
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
    style="background-image: url('http://localhost/bucektravel/assets/vendors/images/bg_0.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <span class="subheading-sm">Pakets Travel</span>
                <h1 class="heading text-center">Booking</h1>
            </div>
        </div>
    </div>
</div>


<?php
        error_reporting(0);
        $b=$data->row_array();
        //$c=$samp->row_array();
?>
<div class="site-section">
    <div class="container">
        <center>
            <h1 class="heading mb-4">Booking Card</h1>
        </center>
        <div class="container section">
            <div class="table-responsive-sm">
                <table align="center"
                    style="width:800px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">
                    <tr>
                        <td><img src="<?php echo base_url().'assets/vendors/photon/images/img_1.jpg'?>" alt="Image" height="42" width="42"> </td>
                    </tr>
                </table>

                <table border="0" align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
                    <tr>
                        <td colspan="4" style="width:700px;paddin-left:20px;">
                            <center>INVOICE</center><br />
                        </td>
                    </tr>
                    <tr>
                        <td style="width:140px;padding-left:5px;">No Invoice <?= $id; ?></td>
                        <td>: <?php echo $b['id_order']?></td>
                        <td style="width:100px;padding-left:5px;">Nama</td>
                        <td>: <?php echo $b['nama']?></td>
                    </tr>
                    <tr>
                        <td style="padding-left:5px;">Tgl Invoice </td>
                        <td>: <?php echo $b['tanggal']?></td>
                        <td style="padding-left:5px;">Jenis Kelamin</td>
                        <td>: <?php echo $b['jenkel']?></td>
                    </tr>
                    <tr>
                        <td style="padding-left:5px;">Paket</td>
                        <td>: <?php echo $b['nama_paket'];?></td>
                        <td style="padding-left:5px;">Alamat</td>
                        <td>: <?php echo $b['alamat'];?></td>
                    </tr>
                    <tr>
                        <td style="padding-left:5px;">Harga Dewasa</td>
                        <td>: <?php echo 'Rp. '.number_format( $b['hrg_dewasa']); ?></td>
                        <td style="padding-left:5px;">No Telp/HP</td>
                        <td>: <?php echo $b['notelp'];?></td>
                    </tr>

                    <tr>
                        <td style="padding-left:5px;">Harga Anak-Anak</td>
                        <td>: <?php echo 'Rp. '.number_format( $b['hrg_anak']); ?></td>
                        <td style="padding-left:5px;">Email</td>
                        <td>: <?php echo $b['email'];?></td>
                    </tr>
                    <tr>
                        <td style="padding-left:5px;">Metode Pembayaran</td>
                        <td>: <?php echo $b['metode']?></td>
                    </tr>

                    <tr>
                        <td style="padding-left:5px;">Total Berangkat</td>
                        <td>: <?php echo $b['jml_berangkat']. 'Orang';?></td>
                    </tr>
                </table>
                <table border="0" align="center" style="width:800px;border:none;">
                    <tr>
                        <th style="text-align:center">Rincian</th>
                    </tr>
                </table>
                <table border="1" align="center" style="width:800px;margin-bottom:20px;">
                    <tr>
                        <th style="text-align:center">Keberangkatan</th>
                        <th style="text-align:center">Kepulangan</th>
                        <th style="text-align:center">Dewasa</th>
                        <th style="text-align:center">Anak-Anak</th>
                        <th style="text-align:center">Total</th>
                    </tr>
                    <tbody>

                        <tr>
                            <td style="text-align:center;"><?php echo $b['berangkat']; ?></td>
                            <td style="text-align:center;"><?php echo $b['kembali']; ?></td>
                            <td style="text-align:center;"><?php echo $b['adult'].' Orang'; ?></td>
                            <td style="text-align:center;"><?php echo $b['kids'].' Orang'; ?></td>
                            <td style="text-align:right;"><?php echo 'Rp. '.number_format( $b['total']); ?></td>

                        </tr>

                </table>
                <table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
                    <tr>
                        <td><?php echo $b['catatan'];?></td>
                </table>
                <table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
                    <tr>
                        <td align="center">Padang, <?php echo date('d-M-Y')?></td>
                    </tr>

                    <tr>
                        <td><br /><br /><br /><br /></td>
                    </tr>
                    <tr>
                        <td align="center"><b>( <?php echo $b['nama'];?> )</b></td>
                    </tr>

                </table>
            </div>

        </div>
    </div>
</div>