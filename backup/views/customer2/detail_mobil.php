<div style="background-color: #3873ae; height:100px; width:100%">&nbsp;</div>

<section class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Detail Mobil </h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
        </div>
        <div class="row">
            <?php foreach ($detail as $dt) : ?>
            <div class="col-xs-12 col-sm-12 col-md-8 marginbot-20">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url().'assets/uploads/'.$dt->image1 ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url().'assets/uploads/'.$dt->image2 ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url().'assets/uploads/'.$dt->image3 ?>" class="d-block w-100" alt="...">
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="row">
            <?php foreach ($detail as $dt) : ?>
            <div class="col-xs-12 col-sm-12 col-md-8 marginbot-20">
				<div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                    <div class="inner">
                        <!--
                        <div class="avatar"><img class="img-responsive" src="<?php echo base_url().'/assets/uploads/'.$dt->image1 ?>" alt="" /></div>-->
						<table class="table table-bordered">
                            <thead>
  								<tr>
  									<th width="180px">Nama Mobil</th>
  									<td><?php echo $dt->nama_mobil ?></td>
  								</tr>
  								<tr>
  									<th>Nama Merk</th>
  									<td><?php echo $dt->nama_merk ?></td>
  								</tr>
  								<tr>
  									<th>No. Polisi</th>
  									<td><?php echo $dt->nopol ?></td>
  								</tr>
  								<tr>
  									<th>Deskripsi</th>
  									<td><?php echo $dt->deskripsi ?></td>
  								</tr>
  								<tr>
  									<th>Harga /hari</th>
  									<td>Rp. <?php echo number_format($dt->harga, 0, ',', '.') ?></td>
  								</tr>
  								<tr>
  									<th>Bahan Bakar</th>
  									<td><?php echo $dt->bbm ?></td>
  								</tr>
  								<tr>
  									<th>Tahun Produksi</th>
  									<td><?php echo $dt->tahun ?></td>
  								</tr>
  								<tr>
  									<th>Kapasitas</th>
  									<td><?php echo $dt->seating ?></td>
  								</tr>
  							</thead>
                        </table>
                    </div>
                </div>
				</div>
            </div>
            <?php endforeach; ?>
        </div>
		</div>
	</section>
	<!-- /Section: about -->	