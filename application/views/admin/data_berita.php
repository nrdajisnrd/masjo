<div class="main-content">
<section class="section">
	<div class="section-header">
	<h1>Data Berita</h1>
	</div>
</section>
<div class="container-fluid">
	<?php echo $this->session->flashdata('pesan') ?>
	<a href="<?php echo base_url('admin/data_berita/tambah_berita') ?>" class="btn btn-primary mb-3"><i class="fas fa-sm fa-plus"></i> Tambah Data</a>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th width="60px">No</th>
				<th>Judul Berita</th>
				<th>Gambar</th>
				<th>Isi Berita</th>
				<th>Tanggal Posting</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<?php 
		$no=1;
		foreach ($berita as $brt) : ?>
			<tbody>
				<tr>
					<th><?php echo $no++ ?></th>
					<td><?php echo $brt->judul_berita ?></td>
					<td><img width="100px" src="<?php echo base_url().'assets/assets_cust/img/uploads/'.$brt->foto ?>"></td>
					<td><?php echo word_limiter($brt->isi_berita, 20) ?></td>
					<td><?php echo $brt->tgl_posting ?></td>
					<td width="150px">
						<a href="<?php echo base_url('admin/data_berita/detail/'. $brt->id_berita) ?>" class="btn btn-sm btn-info"><i class="fas fa-eye fa-sm"></i></a>
						<a href="<?php echo base_url('admin/data_berita/edit/'. $brt->id_berita) ?>" class="btn btn-sm btn-success"><i class="fas fa-edit fa-sm"></i></a>
						<a href="<?php echo base_url('admin/data_berita/delete/'. $brt->id_berita) ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash fa-sm"></i></a>
					</td>
				</tr>
			</tbody>
		<?php endforeach; ?>
	</table>
</div>
</div>