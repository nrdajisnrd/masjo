<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Input Merk</h1>
    </div>
  </section>
  <div class="container-fluid">
  	<form method="post" action="<?php echo base_url('admin/data_merk/tambah_merk_aksi') ?>">
  		<div class="form-group">
  			<label>Nama Merk</label>
  			<input type="text" name="nama_merk" class="form-control">
        <?php echo form_error('nama_merk', '<div class="text-small text-danger">', '</div>') ?>
  		</div>
  		<button class="btn btn-primary">Simpan</button>
  	</form>
  </div>
</div>