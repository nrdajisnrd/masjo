<div class="container">
	<?php foreach ($detail as $dt) : ?>

	<!-- Page Heading/Breadcrumbs -->
	<h1 class="mt-4 mb-3">Detail Mobil
	</h1>

	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="<?php echo base_url('customer/dashboard') ?>">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="<?php echo base_url('customer/rental_mobil') ?>">Rental Mobil</a>
		</li>
		<li class="breadcrumb-item active"><?php echo $dt->nama_mobil ?></li>
	</ol>

	<div class="row">
		<div class="col-md-10">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-5">
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="<?php echo base_url().'assets/uploads/'.$dt->image1 ?>"
											class="d-block w-100" alt="...">
									</div>
									<div class="carousel-item">
										<img src="<?php echo base_url().'assets/uploads/'.$dt->image2 ?>"
											class="d-block w-100" alt="...">
									</div>
									<div class="carousel-item">
										<img src="<?php echo base_url().'assets/uploads/'.$dt->image3 ?>"
											class="d-block w-100" alt="...">
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleControls" role="button"
									data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleControls" role="button"
									data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
						<div class="col-sm-7">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th width="180px">Nama Mobil</th>
										<td><?php echo $dt->nama_mobil ?></td>
									</tr>
									<tr>
										<th>Merk</th>
										<td><?php echo $dt->nama_merk ?></td>
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
					<hr>
					<div class="row">
						<div class="col-sm-12">
							<h5><b>Aksesoris</b></h5>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Air Conditioner</th>
										<td><?php if($dt->airconditioner == "1"){ echo "<i class='fas fa-check'>", "</i>"; }else{ echo "<i class='fas fa-times'>", "</i>"; } ?>
										</td>
									</tr>
									<tr>
										<th>Power Door Locks</th>
										<td><?php if($dt->powerdoorlocks == "1"){ echo "<i class='fas fa-check'>", "</i>"; }else{ echo "<i class='fas fa-times'>", "</i>"; } ?>
										</td>
									</tr>
									<tr>
										<th>Anti Lock Braking System</th>
										<td><?php if($dt->antilockbrakingsystem == "1"){ echo "<i class='fas fa-check'>", "</i>"; }else{ echo "<i class='fas fa-times'>", "</i>"; } ?>
										</td>
									</tr>
									<tr>
										<th>Brake Assist</th>
										<td><?php if($dt->brakeassist == "1"){ echo "<i class='fas fa-check'>", "</i>"; }else{ echo "<i class='fas fa-times'>", "</i>"; } ?>
										</td>
									</tr>
								</thead>
							</table>
						</div>
						<div class="col-sm-4">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Power Steering</th>
										<td><?php if($dt->powersteering == "1"){ echo "<i class='fas fa-check'>", "</i>"; }else{ echo "<i class='fas fa-times'>", "</i>"; } ?>
										</td>
									</tr>
									<tr>
										<th>Driver Airbag</th>
										<td><?php if($dt->driverairbag == "1"){ echo "<i class='fas fa-check'>", "</i>"; }else{ echo "<i class='fas fa-times'>", "</i>"; } ?>
										</td>
									</tr>
									<tr>
										<th>Passenger Airbag</th>
										<td><?php if($dt->passengerairbag == "1"){ echo "<i class='fas fa-check'>", "</i>"; }else{ echo "<i class='fas fa-times'>", "</i>"; } ?>
										</td>
									</tr>
									<tr>
										<th>Power Windows</th>
										<td><?php if($dt->powerwindows == "1"){ echo "<i class='fas fa-check'>", "</i>"; }else{ echo "<i class='fas fa-close'>", "</i>"; } ?>
										</td>
									</tr>
								</thead>
							</table>
						</div>
						<div class="col-sm-4">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>CD Player</th>
										<td><?php if($dt->cdplayer == "1"){ echo "<i class='fas fa-check'>", "</i>"; }else{ echo "<i class='fas fa-times'>", "</i>"; } ?>
										</td>
									</tr>
									<tr>
										<th>Central Locking</th>
										<td><?php if($dt->centrallocking == "1"){ echo "<i class='fas fa-check'>", "</i>"; }else{ echo "<i class='fas fa-times'>", "</i>"; } ?>
										</td>
									</tr>
									<tr>
										<th>Crash Sensor</th>
										<td><?php if($dt->crashsensor == "1"){ echo "<i class='fas fa-check'>", "</i>"; }else{ echo "<i class='fas fa-times'>", "</i>"; } ?>
										</td>
									</tr>
									<tr>
										<th>Leather Seats</th>
										<td><?php if($dt->leatherseats == "1"){ echo "<i class='fas fa-check'>", "</i>"; }else{ echo "<i class='fas fa-times'>", "</i>"; } ?>
										</td>
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<div class="card">
				<div class="card-header"><strong>Sewa Sekarang</strong></div>
				<div class="card-body">
					<?php if($this->session->userdata('nama_user')) { ?>
					<?php foreach ($detail as $dt) : ?>
						<a href="<?php echo base_url().'customer/rental_mobil/sewa_mobil/'.$dt->id_mobil ?>" class="btn btn-primary">Sewa Sekarang</a>
					<?php endforeach; ?>
					<?php } else { ?>
					<a href="<?php echo base_url('auth/login') ?>" class="btn btn-danger">Login untuk Sewa</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach; ?>

</div>
