<div style="background-color: #3873ae; height:100px; width:100%">&nbsp;</div>

<section class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Daftar Mobil</h2>
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
            <?php foreach ($mobil as $mb) : ?>
            <div class="col-xs-6 col-sm-3 col-md-3 mb-2">
				<div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey" style="height: 355px;">
                    <div class="inner">
                        <div class="avatar"><img class="img-responsive" src="<?php echo base_url().'/assets/uploads/'.$mb->image1 ?>" alt="" /></div>
						<h5><?php echo $mb->nama_mobil ?></h5>
                        <p class="subtitle">Rp. <?php echo number_format($mb->harga, 0, ',', '.') ?>/hari</p>
						<ul style="list-style-type: none; overflow: hidden;">
							<li style="float: left; margin-right: 10px;"><i class="fas fa-calendar-check fa-sm" aria-hidden="true"></i>&nbsp; <?php echo $mb->tahun ?></li>
							<li style="float: left; margin-right: 10px;"><i class="fas fa-car-side fa-sm" aria-hidden="true"></i>&nbsp; <?php echo $mb->bbm ?></li>
						</ul>
                        <a class="btn btn-primary" href="<?php echo base_url('customer/rental_mobil/detail_mobil/'. $mb->id_mobil) ?>">Detail</a>
                    </div>
                </div>
				</div>
            </div>
            <?php endforeach; ?>
        </div>
		<!--
		<div class="container-fluid">
			<div class="row text-center">
			<?php foreach($mobil as $mb) : ?>

				<div class="card ml-3 mb-3" style="width: 15rem;">
				<img src="<?php echo base_url().'/assets/uploads/'.$mb->image1 ?>" class="card-img-top" >
				<div class="card-body">
					<h5 class="card-title"><?php echo $mb->nama_mobil ?></h5>
					<span class="badge badge-pill badge-success mt-2 mb-2">Rp. <?php echo number_format($mb->harga, 0, ',', '.') ?></span><br>
					<ul>
						<li><i class="fas fa-user fa-sm" aria-hidden="true"></i><?php echo $mb->seating ?></li>
						<li><i class="fas fa-calendar fa-sm" aria-hidden="true"></i><?php echo $mb->tahun ?></li>
						<li><i class="fas fa-car-side fa-sm" aria-hidden="true"></i><?php echo $mb->bbm ?></li>
					</ul>
					<a href="#" class="btn btn-sm btn-success">Detail</a>
				</div>
				</div>

				<?php endforeach; ?>
			</div>
		</div>-->
		</div>
	</section>
	<!-- /Section: about -->	