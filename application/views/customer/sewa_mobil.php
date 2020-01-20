<div class="container">
	<?php foreach ($detail as $dt) : ?>

	<!-- Page Heading/Breadcrumbs -->
	<h1 class="mt-4 mb-3">Cek Ketersediaan Mobil
	</h1>

	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="<?php echo base_url('customer/dashboard') ?>">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="<?php echo base_url('customer/rental_mobil') ?>">Rental Mobil</a>
		</li>
        <li class="breadcrumb-item">
			<a href="<?php echo base_url().'customer/rental_mobil/detail_mobil/'.$dt->id_mobil ?>">Detail Mobil</a>
		</li>
		<li class="breadcrumb-item active"><?php echo $dt->nama_mobil ?></li>
	</ol>
    <?php endforeach; ?>

	<div class="row">
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
                    <?php foreach ($detail as $dt) : ?>
					<div class="row">
						<div class="col-sm-12">
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
                    </div>

                    <div class="row">
						<div class="col-sm-12">
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
                    <?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-header"><strong>Cek Ketersediaan</strong></div>
				<div class="card-body">
                <?php echo $this->session->flashdata('pesan') ?>
					<form action="<?php echo base_url('customer/rental_mobil/cek_mobil') ?>" method="post">
                        <?php foreach ($detail as $dt) : ?>
                        <input type="hidden" class="form-control" name="id_mobil" value="<?php echo $dt->id_mobil ?>">
                        <div class="form-group">
                            <label>Tanggal Mulai</label>
                            <input type="date" class="form-control" name="fromdate">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Selesai</label>
                            <input type="date" class="form-control" name="todate">
                        </div>
                        <div class="form-group">
                            <label>Metode Pickup</label>
                            <select name="pickup" class="form-control">
                            <option value="Ambil Sendiri">Ambil Sendiri</option>
                            <option value="Antar Sesuai Alamat">Antar Sesuai Alamat</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Opsi Driver</label>
                            <select name="driver" class="form-control">
                            <option value="Dengan Driver">Dengan Driver</option>
                            <option value="Lepas Kunci">Lepas Kunci</option>
                            </select>
                        </div>
                        <?php endforeach; ?>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block" name="cek_mobil" value="Cek Ketersediaan">
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>
