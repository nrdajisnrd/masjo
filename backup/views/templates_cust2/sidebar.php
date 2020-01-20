<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('customer/dashboard') ?>">
                    <h1>MASJO TOUR & TRAVEL</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url('customer/dashboard') ?>">Home</a></li>
                    <li><a href="#">Paket Wisata</a></li>
                    <li><a href="<?php echo base_url('customer/rental_mobil') ?>">Rental Mobil</a></li>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Kontak</a></li>
                    <?php if($this->session->userdata('nama_user')) { ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('nama_user') ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Pengaturan Profil</a></li>
                            <li><a href="#">Ubah Password</a></li>
                            <li><a href="#">Riwayat Sewa Mobil</a></li>
                            <li><a href="<?php echo base_url().'auth/logout' ?>">Logout</a></li>
                        </ul>
                    <?php } else { ?>
                    <li><a href="<?php echo base_url().'auth/login' ?>">Login</a></li>
                    <?php } ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

