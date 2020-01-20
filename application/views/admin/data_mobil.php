<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Mobil</h1>
    </div>
  </section>
  <div class="container-fluid">
  	<?php echo $this->session->flashdata('pesan') ?>
	  <div class="row">
		  <div class="col-md-8">
  			<a href="<?php echo base_url('admin/data_mobil/tambah_mobil') ?>" class="btn btn-primary btn-sm mb-3"><i class="fas fa-sm fa-plus"></i> Tambah Data</a>
		  </div>
		  <div class="col-md-4 text-right">
			<form action="" method="post">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Cari Data.." name="keyword" autocomplete="off" autofocus>
					<div class="input-group-append">
						<input type="submit" class="btn btn-primary btn-sm" name="cari">
					</div>
				</div>
			</form>
		  </div>
		</div>
		<div class="row">
			<div class="col-md">
				<h5>Hasil: <?= $total_rows ?></h5>
			</div>
		</div>
  	<table class="table table-bordered table-hover table-sm">
  		<thead>
  			<tr>
  				<th width="50px">#</th>
  				<th>Nama Mobil</th>
				<th>Harga per hari</th>
				<th>Bahan Bakar</th>
				<th>Tahun</th>
				<th>Tanggal Masuk</th>
				<th>Tanggal Update</th>
  				<th width="120px">Aksi</th>
  			</tr>
  		</thead>
  		<tbody>
		  	<?php if (empty($mobil)) : ?>
				<tr>
					<td colspan="8" height="50px">
						<div class="alert alert-danger text-center" role="alert">data not found!</div>
					</td>
				</tr>
			<?php endif; ?>
  			<?php foreach ($mobil as $mb) : ?>
  				<tr>
  					<th><?php echo ++$start ?></th>
  					<td><?php echo $mb->nama_mobil ?></td>
					<td>Rp. <?php echo number_format($mb->harga, 0, ',', '.') ?></td>
					<td><?php echo $mb->bbm ?></td>
					<td><?php echo $mb->tahun ?></td>
					<td><?php echo $mb->tgl_masuk ?></td>
					<td><?php echo $mb->updationdate ?></td>
  					<td>
              			<a href="<?php echo base_url('admin/data_mobil/detail_mobil/'. $mb->id_mobil) ?>" class="btn btn-sm btn-info"><i class="fas fa-eye fa-sm"></i></a>
  						<a href="<?php echo base_url('admin/data_mobil/edit_mobil/'. $mb->id_mobil) ?>" class="btn btn-sm btn-success"><i class="fas fa-edit fa-sm"></i></a>
  						<a href="<?php echo base_url('admin/data_mobil/delete/'. $mb->id_mobil) ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash fa-sm"></i></a>
  					</td>
  				</tr>
  			<?php endforeach; ?>
  		</tbody>
  	</table>
	<div class="row">
		<div class="col-md-6 text-center">
				<?php echo $pagination; ?>
		</div>
		<div class="col-md-6">
				
		</div>
	</div>
  </div>
</div>