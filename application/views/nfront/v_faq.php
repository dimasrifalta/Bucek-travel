<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(''); ?>">SumbawaTour</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item"><a href="<?= base_url(''); ?>" class="nav-link">Home</a></li>
                <li class="nav-item active dropdown">
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

<div class="block-37" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
        <div class="block-30 item" style="background-image: url('<?php echo base_url() . 'assets/vendors/images/kontak.jpg' ?>');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <span class="subheading-sm">Freaquensi Ask question</span>
                        <h2 class="heading">FAQ</h2>
                        <p><a href="<?= base_url('paket_tour'); ?>" class="btn py-4 px-5 btn-primary">How can we help you?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END nav -->

<style>
    .panel1-group .panel1 {
        border-radius: 0;
        box-shadow: none;
        border-color: #EEEEEE;
    }

    .panel1-default>.panel1-heading {
        padding: 0;
        border-radius: 0;
        color: #212121;
        background-color: #FAFAFA;
        border-color: #EEEEEE;
    }

    .panel1-title {
        font-size: 14px;
    }

    .panel1-title>a {
        display: block;
        padding: 15px;
        text-decoration: none;
        background-color: #fff;
    }

    .more-less {
        float: right;
        color: #ffc704;
    }

    .panel1-default>.panel1-heading+.panel1-collapse>.panel1-body {
        border-top-color: #ededed;
    }
</style>
<div class="site-section bg-light">
    <div class="container demo">


        <div class="panel1-group" id="accordion" role="tablist" aria-multiselectable="true">

            <div class="panel1 panel1-default">
                <div class="panel1-heading" role="tab" id="headingOne">
                    <h4 class="panel1-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="more-less fa fa-chevron-down"></i>
                            1. Bagaimana cara bergabung dengan Sumbawa Tour ?
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel1-collapse collapse" role="tabpanel1" aria-labelledby="headingOne">
                    <div class="panel1-body">
                        Untuk bergabung dengan Traval cukup melakukan hal mudah sebagai berikut :<br>

                        1. Klik register/daftar<br>

                        2. Masukan first name & last name anda<br>

                        3. Masukan email anda<br>

                        4. Masukan kata sandi yang anda inginkan<br>

                        5. Ulangi kata sandi yang anda masukan<br>

                        6. kemudian lanjutkan register/daftar<br>
                        7. Setelah itu email aktivasi akun anda akan dikirim kealamat email anda pilih konfirmasi.
                    </div>
                </div>
            </div>

            <div class="panel1 panel1-default">
                <div class="panel1-heading" role="tab" id="headingTwo">
                    <h4 class="panel1-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="more-less fa fa-chevron-down"></i>

                            2. Apakah seluruh trip Traval dapat dimodifikasi?

                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel1-collapse collapse" role="tabpanel1" aria-labelledby="headingTwo">
                    <div class="panel1-body">
                        Untuk saat ini seluruh paket trip Traval.co belum dapat dimodifikasi. Nantikan fitur modifikasi trip kami sesuai dengan yang anda inginkan dalam waktu dekat.
                    </div>
                </div>
            </div>

            <div class="panel1 panel1-default">
                <div class="panel1-heading" role="tab" id="headingThree">
                    <h4 class="panel1-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="more-less fa fa-chevron-down"></i>
                            3. Apakah pengalaman akan persis seperti dalam gambar atau deskripsi di situs web Traval?

                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel1-collapse collapse" role="tabpanel1" aria-labelledby="headingThree">
                    <div class="panel1-body">
                        Para Host kami mencoba yang terbaik untuk memastikan pengalaman anda sama dengan apa yang digambarkan gambar dan deskripsi karena banyak pengalaman yang berkaitan dengan manusia dan alam, beberapa variasi mungkin perlu dibuat untuk memastikan anda mendapatkan yang terbaik dari pembelian anda. Namun tujuan mereka adalah memastikan anda memiliki pengalaman unik dan waktu terbaik.

                    </div>
                </div>
            </div>


            <div class="panel1 panel1-default">
                <div class="panel1-heading" role="tab" id="headingThree">
                    <h4 class="panel1-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#4" aria-expanded="false" aria-controls="4">
                            <i class="more-less fa fa-chevron-down"></i>
                            4. Apakah pengalaman berlaku untuk orang-orang di Indonesia sendiri atau dapat dipesan oleh orang-orang di seluruh dunia?

                        </a>
                    </h4>
                </div>
                <div id="4" class="panel1-collapse collapse" role="tabpanel1" aria-labelledby="headingThree">
                    <div class="panel1-body">
                        Pengalaman dapat dinikmati oleh kebangsaan Indonesia atau kebangsaan lainnya, ingatlah bahwa SEMUA pengalaman (kecuali dinyatakan lain) berlokasi di seluruh Indonesia.


                    </div>
                </div>
            </div>



            <div class="panel1 panel1-default">
                <div class="panel1-heading" role="tab" id="headingThree">
                    <h4 class="panel1-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#5" aria-expanded="false" aria-controls="5">
                            <i class="more-less fa fa-chevron-down"></i>
                            5. Bagaimana saya mempersiapkan untuk trip saya?


                        </a>
                    </h4>
                </div>
                <div id="5" class="panel1-collapse collapse" role="tabpanel1" aria-labelledby="headingThree">
                    <div class="panel1-body">
                        Dalam rincian produk Traval, anda akan menemukan informasi tentang apa yang harus dibawa atau apa yang akan dikenakan pada hari trip anda berlangsung. Anda juga dapat menanyakan langsung kepada host kami ketika anda melakukan pemesanan.



                    </div>
                </div>
            </div>


            <div class="panel1 panel1-default">
                <div class="panel1-heading" role="tab" id="headingThree">
                    <h4 class="panel1-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#6" aria-expanded="false" aria-controls="6">
                            <i class="more-less fa fa-chevron-down"></i>
                            6. Bagaimana saya dapat melakukan pemesanan Trip Unik dari Traval?



                        </a>
                    </h4>
                </div>
                <div id="6" class="panel1-collapse collapse" role="tabpanel1" aria-labelledby="headingThree">
                    <div class="panel1-body">
                        1. Setelah menemukan trip yang anda inginkan, pilih "Available Date" dan masukan “Number Of Travellers” yang anda inginkan lalu pilih “Pesan Sekarang”. <br>

                        2. Lalu Pilih Nomor rekening dan Nama Bank yang anda ingikan saat melakukan pembayaran<br>

                        3. Anda akan mendapat Email otomatis mengenai order paket tour anda<br>

                        4. Lalu setelah mendapat No. Invoicenya lakukan konfirmasi pesanan anda dengan menekan menu konfirmasi. isikan data dengan benar den sesuai dengan yang ada di invoice email anda. Tidak boleh >24 Jam setelah melakukan pemesanan<br>

                        5. Kami akan mengecek data konfirmasi pembayaran anda<br>

                        6. Setelah selesai kode bookking tiket paket tour wisata anda akan dikirmkan ke alamat email anda<br>


                    </div>
                </div>
            </div>


            <div class="panel1 panel1-default">
                <div class="panel1-heading" role="tab" id="headingThree">
                    <h4 class="panel1-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#7" aria-expanded="false" aria-controls="7">
                            <i class="more-less fa fa-chevron-down"></i>
                            7. Bagaimana saya tahu bahwa pesanan saya telah dikonfirmasi?

                        </a>
                    </h4>
                </div>
                <div id="7" class="panel1-collapse collapse" role="tabpanel1" aria-labelledby="headingThree">
                    <div class="panel1-body">
                        Segera setelah pembayaran anda dikonfirmasi, Anda akan mendapatkan surat elektronik konfirmasi mengenai pemesanan anda melalui email pribadi anda yang di daftarkan pada Traval.



                    </div>
                </div>
            </div>

            <div class="panel1 panel1-default">
                <div class="panel1-heading" role="tab" id="headingThree">
                    <h4 class="panel1-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#8" aria-expanded="false" aria-controls="8">
                            <i class="more-less fa fa-chevron-down"></i>
                            8. Apakah saya bisa melakukan pemesanan untuk orang lain ?


                        </a>
                    </h4>
                </div>
                <div id="8" class="panel1-collapse collapse" role="tabpanel1" aria-labelledby="headingThree">
                    <div class="panel1-body">
                        Boleh saja. Nama-nama orang yang ingin anda daftarkan bisa langsung dimasukkan saat anda mendaftar sebuah trip.




                    </div>
                </div>
            </div>

            <div class="panel1 panel1-default">
                <div class="panel1-heading" role="tab" id="headingThree">
                    <h4 class="panel1-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#9" aria-expanded="false" aria-controls="9">
                            <i class="more-less fa fa-chevron-down"></i>
                            9. Setelah melakukan pemesanan paket tour wisata, berapa lama jangka waktu untuk pembayaran?



                        </a>
                    </h4>
                </div>
                <div id="9" class="panel1-collapse collapse" role="tabpanel1" aria-labelledby="headingThree">
                    <div class="panel1-body">
                        Setelah anda melakukan pemesanan paket tour wisata, anda akan mendapatkan konfirmasi mengenai pembayaran dengan limit waktu < 24Jam dari waktu pemesanan. </div> </div> </div> <div class="panel1 panel1-default">
                            <div class="panel1-heading" role="tab" id="headingThree">
                                <h4 class="panel1-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#10" aria-expanded="false" aria-controls="10">
                                        <i class="more-less fa fa-chevron-down"></i>
                                        10. Apakah saya bisa melakukan pemesanan untuk orang lain ?


                                    </a>
                                </h4>
                            </div>
                            <div id="10" class="panel1-collapse collapse" role="tabpanel1" aria-labelledby="headingThree">
                                <div class="panel1-body">
                                    Boleh saja. Nama-nama orang yang ingin anda daftarkan bisa langsung dimasukkan saat anda mendaftar sebuah trip.




                                </div>
                            </div>
                    </div>
                </div> <!-- panel1-group -->


            </div><!-- container -->

        </div>
        <i class="more-less fas fa-chevron-down"></i>

        <script>
            function toggleIcon(e) {
                $(e.target)
                    .prev('.panel1-heading')
                    .find(".more-less")
                    .toggleClass('fas fa-chevron-up fas fa-chevron-down');
            }
            $('.panel1-group').on('hidden.bs.collapse', toggleIcon);
            $('.panel1-group').on('shown.bs.collapse', toggleIcon);
        </script>