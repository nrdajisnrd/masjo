<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Detail Berita</h1>
    </div>
  </section>
  <div class="container-fluid">
  	<?php foreach ($detail as $dt) : ?>
		<a class="btn btn-sm btn-danger mb-3" href="<?php echo base_url('admin/data_berita') ?>">Kembali</a>
	  	<a class="btn btn-sm btn-primary ml-2 mb-3" href="<?php echo base_url('admin/data_berita/edit/'.$dt->id_berita) ?>">Edit</a>
	  	<table class="table">
	  		<tr>
	  			<td width="750px"><h4><?php echo $dt->judul_berita ?></h4></td>
	  		</tr>
	  		<tr>
	  			<td class="p-2 text-center"><img src="<?php echo base_url(). 'assets/assets_cust/img/uploads/'. $dt->foto ?>" width="750px" /></td>
	  		</tr>
	  		<tr>
	  			<td class="p-2" width="750px"><h6><?php echo $dt->isi_berita ?></h6></td>
	  		</tr>
			<tr>
				<td class="p-2 text-center"><img src="<?php echo base_url(). 'assets/assets_cust/img/uploads/'. $dt->foto2 ?>" width="550px" /></td>
			</tr>
			<tr>
	  			<td class="p-2" width="750px"><h6><?php echo $dt->isi_berita2 ?></h6></td>
	  		</tr>
	  	</table>
	  <?php endforeach; ?>
  </div>
</div>