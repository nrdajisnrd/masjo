<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url('customer/dashboard') ?>">Masjo Tour & Travel</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('customer/dashboard') ?>">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Paket Wisata
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="#">Paket Wisata Sehari Jogja</a>
              <a class="dropdown-item" href="#">Paket Wisata 2H1M Jogja</a>
              <a class="dropdown-item" href="#">Paket Wisata 3H2M Jogja</a>
              <a class="dropdown-item" href="#">Paket Wisata 4H3M Jogja</a>
              <a class="dropdown-item" href="#">Single Portfolio Item</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('customer/rental_mobil') ?>">Rental Mobil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tentang Kami</a>
          </li>
          <?php if($this->session->userdata('nama_user')) : ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $this->session->userdata('nama_user') ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="<?php echo base_url('customer/profil') ?>">Pengaturan Profil</a>
              <a class="dropdown-item" href="<?php echo base_url('customer/ubahpass') ?>">Ubah Password</a>
              <a class="dropdown-item" href="<?php echo base_url().'auth/logout' ?>">Logout</a>
            </div>
          </li>
          <?php else : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url().'auth/login' ?>">Login</a>
          </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>