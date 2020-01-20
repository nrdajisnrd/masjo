		<nav class="breadcrumbs">
		</nav>
			<main class="content">
				<div class="fullwidth-block">
					<div class="container mt-5">
						<div class="row">
							<div class="col-md-12 wow fadeInLeft">
								<h2 class="section-title"> Detail Mobil</h2>
								<?php foreach ($detail as $dt) : ?>
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col-md-2"></div>
												<div class="col-md-8">
													<table class="table table-bordered">
														<thead>
															<tr>
																<th rowspan="2"><img src="<?php echo base_url().'assets/uploads/'.$dt->image1 ?>" width="300px"></th>
																<td><?php echo $dt->nama_mobil ?></td>
															</tr>
															<tr>
																<td><?php echo $dt->harga ?></td>
															</tr>
														</thead>
													</table>
												</div>
												<div class="col-md-2"></div>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							</div>

						</div>
						<form method="post" action="<?php echo base_url('user/rental_mobil/check_status') ?>" enctype="multipart/form-data">
							<div class="form-group">
								<label>Kode</label>
								<input type="text" name="kode_pemesanan" class="form-control">
								<?php foreach ($detail as $dt) : ?>
									<input type="hidden" name="id_mobil" value="<?php echo $dt->id_mobil ?>">
								<?php endforeach; ?>
							</div>
							<div class="form-group">
								<label>Dari</label>
								<input type="date" name="start_date" class="form-control">
							</div>
							<div class="form-group">
								<label>Sampai</label>
								<input type="date" name="end_date" class="form-control">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="text" name="email" class="form-control">
							</div>
							<div class="form-group">
								<label>Driver</label>
								<input type="text" name="driver" class="form-control">
							</div>
							<div class="form-group">
								<label>Pickup</label>
								<select class="form-control" name="pickup">
									<option value="Ambil Sendiri">Ambil Sendiri</option>
									<option value="Pickup Sesuai Alamat">Pickup Sesuai Alamat</option>
								</select>
							</div>
							<button class="btn btn-primary" type="submit">Cek Ketersediaan</button>
						</form>

					</div>

				</div>

			</main> <!-- .content -->