<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <!--
          <ul class="nav navbar-nav navbar-right mx-2">
                          <span class="badge badge-danger">
                <li>Selamat Datang admin</li>
              
                <li><a href="<?php echo base_url('auth/logout') ?>">Logout</a></li></span>
          </ul>
        -->
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url('admin/dashboard') ?>"><i class="fas fa-map-marker-alt"></i> MASJO TOUR & TRAVEL</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url('admin/dashboard') ?>"><i class="fas fa-map-marker-alt"></i></a>
          </div>
          <ul class="sidebar-menu">
            <li><a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-exchange-alt"></i> <span>Sewa</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo base_url('admin/menunggu_pembayaran') ?>">Menunggu Pembayaran</a></li>
                <li><a class="nav-link" href="<?php echo base_url('admin/menunggu_konfirmasi') ?>">Menunggu Konfirmasi</a></li>
                <li><a class="nav-link" href="<?php echo base_url('admin/pengembalian') ?>">Pengembalian</a></li>
                <li><a class="nav-link" href="<?php echo base_url('admin/data_sewa') ?>">Data Sewa</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-car-alt"></i> <span>Mobil</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo base_url('admin/data_merk') ?>">Data Merk</a></li>
                <li><a class="nav-link" href="<?php echo base_url('admin/data_mobil') ?>">Data Mobil</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="<?php echo base_url('admin/driver') ?>"><i class="fas fa-money-bill-alt"></i> <span>Biaya Driver</span></a></li>
            <li><a class="nav-link" href="<?php echo base_url('admin/data_cust') ?>"><i class="fas fa-users"></i> <span>Data User</span></a></li>
            <li><a class="nav-link" href="<?php echo base_url('admin/menghubungi') ?>"><i class="fas fa-phone"></i> <span>Menghubungi</span></a></li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cog"></i> <span>Kelola Halaman</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo base_url('admin/data_berita') ?>">Berita</a></li>
                <li><a class="nav-link" href="<?php echo base_url('admin/ketentuan') ?>">Ketentuan</a></li>
                <li><a class="nav-link" href="<?php echo base_url('admin/faq') ?>">FAQ</a></li>
                <li><a class="nav-link" href="<?php echo base_url('admin/tentang_kami') ?>">Tentang Kami</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="<?php echo base_url('admin/kontak_info') ?>"><i class="fas fa-info-circle"></i> <span>Kontak Info</span></a></li>
            <li><a class="nav-link" href="<?php echo base_url('admin/laporan') ?>"><i class="fas fa-file-alt"></i> <span>Laporan</span></a></li>
          </ul>
          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="<?php echo base_url('auth/logout') ?>" class="btn btn-danger btn-lg btn-block btn-icon-split">
              <i class="fas fa-door-open"></i> Logout
            </a>
          </div>
        </aside>
      </div>
