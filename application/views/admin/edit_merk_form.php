<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Edit Data Merk</h1>
    </div>
  </section>
  <div class="container-fluid">
    <?php foreach ($merk as $mrk) : ?>
  	<form method="post" action="<?php echo base_url().'admin/data_merk/edit_merk_aksi' ?>">
  		<div class="form-group">
  			<label>Nama Merk</label>
        <input type="hidden" name="id_merk" class="form-control" value="<?php echo $mrk->id_merk ?>">
  			<input type="text" name="nama_merk" class="form-control" value="<?php echo $mrk->nama_merk ?>">
        <?php echo form_error('nama_merk', '<div class="text-small text-danger">', '</div>') ?>
  		</div>
  		<button type="submit" class="btn btn-primary">Simpan</button>
  	</form>
    <?php endforeach; ?>
  </div>
</div>