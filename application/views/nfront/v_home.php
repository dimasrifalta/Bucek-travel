<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(''); ?>">Bucektravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item active"><a href="<?= base_url(''); ?>" class="nav-link">Home</a></li>
                <li class="nav-item "><a href="<?= base_url('paket_tour'); ?>" class="nav-link">Paket Tours</a></li>
                <li class="nav-item"><a href="<?= base_url('wisata_post'); ?>" class="nav-link">Tempat Wisata</a></li>
                <li class="nav-item "><a href="<?= base_url('Konfirmasi'); ?>" class="nav-link">Konfirmasi</a></li>
                <li class="nav-item"><a href="<?= base_url('semua_album'); ?>" class="nav-link">Album dan Foto</a></li>

            </ul>
            <div class="btn-group ml-4 rights">
                <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><i class="fa fa-list-alt"></i>
                </button>
                <div class="dropdown-menu">
                    <?php
                    $id = $this->session->userdata('email');

                    if ($this->session->userdata('email')) { ?>

                    <a class="dropdown-item text-secondary"
                        href="<?= base_url('paket_tour/booking'); ?>">Booking(<?= $id; ?>)</a>

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

<div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
        <div class="block-30 item" style="background-image: url('././././assets/vendors/images/bg_2.jpg');"
            data-stellar-background-ratio="0.5">
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
        <div class="block-30 item" style="background-image: url('././././assets/vendors/images/bg_1.jpg');"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <span class="subheading-sm">Welcome</span>
                        <h2 class="heading">Fun &amp; Beautiful</h2>
                        <p><a href="<?= base_url('paket_tour'); ?>" class="btn py-4 px-5 btn-primary">Learn More</a></p>
                    </div>
                </div>
            </div>

            <div class="block-30 item" style="background-image: url('././././assets/vendors/images/bg_3.jpg');"
                data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-10">
                            <span class="subheading-sm">Welcome</span>
                            <h2 class="heading">Travel &amp; New world</h2>
                            <p><a href="<?= base_url('paket_tour'); ?>" class="btn py-4 px-5 btn-primary">Learn More</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="row site-section">
                    <div class="col-md-12">
                        <div class="row mb-5">
                            <div class="col-md-7 section-heading">
                                <span class="subheading-sm">Services</span>
                                <h2 class="heading">Facilities &amp; Services</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="media block-6">
                            <div class="icon"><span class="flaticon-double-bed"></span></div>
                            <div class="media-body">
                                <h3 class="heading">Luxury Rooms</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="media block-6">
                            <div class="icon"><span class="flaticon-wifi"></span></div>
                            <div class="media-body">
                                <h3 class="heading">Fast &amp; Free Wifi</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="media block-6">
                            <div class="icon"><span class="flaticon-customer-service"></span></div>
                            <div class="media-body">
                                <h3 class="heading">Call Us 24/7</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="media block-6">
                            <div class="icon"><span class="flaticon-taxi"></span></div>
                            <div class="media-body">
                                <h3 class="heading">Travel Accomodation</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="media block-6">
                            <div class="icon"><span class="flaticon-credit-card"></span></div>
                            <div class="media-body">
                                <h3 class="heading">Accepts Credit Card</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="media block-6">
                            <div class="icon"><span class="flaticon-dinner"></span></div>
                            <div class="media-body">
                                <h3 class="heading">Restaurant</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>