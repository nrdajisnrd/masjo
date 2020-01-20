<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Merk</h1>
		</div>
	</section>
	<div class="container-fluid">
		<?php echo $this->session->flashdata('pesan') ?>
		<div class="row">
			<div class="col-md-8">
				<a href="<?php echo base_url('admin/data_merk/tambah_merk') ?>" class="btn btn-primary btn-sm mb-3"><i
						class="fas fa-sm fa-plus"></i> Tambah Data</a>
			</div>
			<div class="col-md-4 text-right">
				<form action="" method="post">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Cari Data.." name="keyword"
							autocomplete="off" autofocus>
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
					<th>Nama Merk</th>
					<th>Tanggal Posting</th>
					<th>Tanggal Update</th>
					<th width="100px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php if (empty($merk)) : ?>
				<tr>
					<td colspan="5" height="50px">
						<div class="alert alert-danger text-center" role="alert">data not found!</div>
					</td>
				</tr>
				<?php endif; ?>
				<?php foreach ($merk as $mrk) : ?>
				<tr>
					<th><?php echo ++$start ?></th>
					<td><?php echo $mrk->nama_merk ?></td>
					<td><?php echo $mrk->tgl_posting ?></td>
					<td><?php echo $mrk->updationdate ?></td>
					<td>
						<a href="<?php echo base_url('admin/data_merk/edit/'. $mrk->id_merk) ?>"
							class="btn btn-sm btn-success"><i class="fas fa-edit fa-sm"></i></a>
						<a href="<?php echo base_url('admin/data_merk/delete/'. $mrk->id_merk) ?>"
							class="btn btn-sm btn-danger"><i class="fas fa-trash fa-sm"></i></a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<div class="row">
			<div class="col-md-6 text-left">
				<?php echo $pagination; ?>
			</div>
			<div class="col-md-6 text-right">

			</div>
		</div>
	</div>
</div>
