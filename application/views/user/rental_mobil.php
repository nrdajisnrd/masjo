		<nav class="breadcrumbs">
		</nav>
			<main class="content">
				<div class="fullwidth-block">
					<div class="container mt-5">
						<div class="row">
							<div class="col-md-12 wow fadeInLeft">
								<h2 class="section-title">Mobil</h2>
								<?php foreach ($mobil as $mb) : ?>
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col-md-2"></div>
												<div class="col-md-8">
													<table class="table table-bordered">
														<thead>
															<tr>
																<th rowspan="2"><img src="<?php echo base_url().'assets/uploads/'.$mb->image1 ?>" width="300px"></th>
																<td><?php echo $mb->nama_mobil ?></td>
															</tr>
															<tr>
																<td><?php echo $mb->harga ?></td>
															</tr>
														</thead>
													</table>
													<a href="<?php echo base_url('user/rental_mobil/detail_mobil_rental/'.$mb->id_mobil) ?>" class="btn btn-primary">Pesan</a>
												</div>
												<div class="col-md-2"></div>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							</div>

						</div>

					</div>

				</div>

			</main> <!-- .content -->