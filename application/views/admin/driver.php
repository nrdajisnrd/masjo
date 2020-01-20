<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Harga Driver</h1>
    </div>
  </section>
  <div class="container-fluid">
  	<?php echo $this->session->flashdata('pesan') ?>
  	<?php foreach ($driver as $dv) : ?>
  		<form method="post" action="<?php echo base_url().'admin/driver/harga_aksi' ?>">
  			<div class="form-group">
  				<div class="mb-3">
  					<strong> Last Update: <?php echo $dv->updationdate ?></strong><br>
  				</div>
	  			<label>Harga Driver</label>
	  			<input type="hidden" name="id_driver" value="<?php echo $dv->id_driver ?>">
	  			<input type="text" name="harga_driver" value="<?php echo number_format($dv->harga_driver, 0, ',', '.') ?>" class="form-control">
	  			<?php echo form_error('harga_driver', '<div class="text-small text-danger">', '</div>') ?>
	  		</div>
	  		<button type="submit" class="btn btn-primary">Update</button>
  		</form>
  	<?php endforeach; ?>
  </div>
</div>