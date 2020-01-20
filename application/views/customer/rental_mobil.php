
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Daftar Mobil
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo base_url('customer/dashboard') ?>">Home</a>
      </li>
      <li class="breadcrumb-item active">Rental Mobil</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
    <?php foreach ($mobil as $mb) : ?>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h3 class="card-header">
            <?php echo $mb->nama_mobil ?>,
            <?php echo $mb->nama_merk ?>
          </h3>
          <img class="card-img-top" src="<?php echo base_url().'/assets/uploads/'.$mb->image1 ?>" alt="">
          <div class="card-body">
            <div class="display-4">Rp. <?php echo number_format($mb->harga, 0, ',', '.') ?></div>
            <div class="font-italic">per hari</div>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="fas fa-user"></i> <?php echo $mb->seating ?></li>
            <li class="list-group-item"><i class="fas fa-calendar-alt"></i> <?php echo $mb->tahun ?></li>
            <li class="list-group-item"><i class="fas fa-car-side"></i> <?php echo $mb->bbm ?></li>
            <li class="list-group-item">
              <a href="<?php echo base_url().'customer/rental_mobil/detail_mobil/'.$mb->id_mobil ?>" class="btn btn-primary">Detail</a>
            </li>
          </ul>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
