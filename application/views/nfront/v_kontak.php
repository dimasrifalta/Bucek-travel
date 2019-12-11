<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url(''); ?>">Bucektravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item"><a href="<?= base_url(''); ?>" class="nav-link">Home</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?= base_url('kontak'); ?>" class="nav-link">Hubungi Kami</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item "><a href="<?= base_url('paket_tour'); ?>" class="nav-link">Paket Tours</a></li>
        <li class="nav-item"><a href="<?= base_url('wisata_post'); ?>" class="nav-link">Tempat Wisata</a></li>
        <li class="nav-item "><a href="<?= base_url('Konfirmasi'); ?>" class="nav-link">Konfirmasi</a></li>
        <li class="nav-item"><a href="<?= base_url('semua_album'); ?>" class="nav-link">Album dan Foto</a></li>




      </ul>
      <div class="btn-group  rights">
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
<div class="site-section">
  <div class="container">
    <div class="row block-9">
      <div class="col-md-6 pr-md-5">
        <form action="<?php echo base_url() . 'kontak/kirim_pesan' ?>" method="post">
          <div class="form-group">
            <input type="text" name="xnama" class="form-control px-3 py-3" placeholder="Your Name" required />
          </div>
          <div class="form-group">
            <input type="email" name="xemail" class="form-control px-3 py-3" placeholder="Your Email" required />
          </div>
          <div class="form-group">
            <input type="text" name="xkontak" class="form-control px-3 py-3" placeholder="No Hp">
          </div>
          <div class="form-group">
            <textarea name="xpesan" id="" cols="30" rows="7" class="form-control px-3 py-3" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
          </div>
        </form>
        <?php echo $this->session->flashdata('msg'); ?>
      </div>

      <div class="col-md-6" id="map">

      </div>
    </div>
  </div>
</div>



<div class="site-section bg-light">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-7 section-heading">
        <span class="subheading-sm">Reviews</span>
        <h2 class="heading">Customer Reviews</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4">

        <div class="block-33">
          <div class="vcard d-flex mb-3">
            <div class="image align-self-center"><img src="images/person_3.jpg" alt="Person here"></div>
            <div class="name-text align-self-center">
              <h2 class="heading">Martin Newmansfield</h2>
              <span class="meta">Satisfied Customer</span>
            </div>
          </div>
          <div class="text">
            <blockquote>
              <p>&rdquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aliquid. Atque dolore esse veritatis iusto eaque perferendis non dolorem fugiat voluptatibus vitae error ad itaque inventore accusantium tempore dolores sunt. &ldquo;</p>
            </blockquote>
          </div>
        </div>

      </div>
      <div class="col-md-6 col-lg-4">

        <div class="block-33">
          <div class="vcard d-flex mb-3">
            <div class="image align-self-center"><img src="images/person_2.jpg" alt="Person here"></div>
            <div class="name-text align-self-center">
              <h2 class="heading">Nancy Green</h2>
              <span class="meta">Satisfied Customer</span>
            </div>
          </div>
          <div class="text">
            <blockquote>
              <p>&rdquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aliquid. Atque dolore esse veritatis iusto eaque perferendis non dolorem fugiat voluptatibus vitae error ad itaque inventore accusantium tempore dolores sunt. &ldquo;</p>
            </blockquote>
          </div>
        </div>

      </div>
      <div class="col-md-6 col-lg-4">

        <div class="block-33">
          <div class="vcard d-flex mb-3">
            <div class="image align-self-center"><img src="images/person_1.jpg" alt="Person here"></div>
            <div class="name-text align-self-center">
              <h2 class="heading">Elizabeth Charles</h2>
              <span class="meta">Satisfied Customer</span>
            </div>
          </div>
          <div class="text">
            <blockquote>
              <p>&rdquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aliquid. Atque dolore esse veritatis iusto eaque perferendis non dolorem fugiat voluptatibus vitae error ad itaque inventore accusantium tempore dolores sunt. &ldquo;</p>
            </blockquote>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>