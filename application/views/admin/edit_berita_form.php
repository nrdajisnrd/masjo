<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Edit Berita</h1>
    </div>
  </section>
  <div class="container-fluid">
    <?php foreach ($berita as $brt) : ?>
  	<form method="post" action="<?php echo base_url('admin/data_berita/edit_berita_aksi') ?>" enctype="multipart/form-data">
  		<div class="form-group">
  			<label>Judul Berita</label>
        <input type="hidden" name="id_berita" value="<?php echo $brt->id_berita ?>">
  			<input type="text" name="judul_berita" class="form-control" value="<?php echo $brt->judul_berita ?>">
        <?php echo form_error('judul_berita', '<div class="text-small text-danger">', '</div>') ?>
  		</div>
      <div class="form-group">
        <label>Gambar Berita</label><br>
        <img src="<?php echo base_url().'assets/assets_cust/img/uploads/'. $brt->foto ?>" width="100%">
        <input type="file" name="foto" class="form-control">
      </div>
      <div class="form-group">
        <label>Isi Berita</label>
        <textarea class="form-control" type="text" name="isi_berita"><?php echo $brt->isi_berita ?></textarea>
        <?php echo form_error('isi_berita', '<div class="text-small text-danger">', '</div>') ?>
      </div>
      <div class="form-group">
        <label>Gambar Berita Tengah</label><br>
        <img src="<?php echo base_url().'assets/assets_cust/img/uploads/'. $brt->foto2 ?>" width="100%">
        <input type="file" name="foto2" class="form-control">
      </div>
      <div class="form-group">
        <label>Isi Berita Tambahan</label>
        <textarea class="form-control" type="text" name="isi_berita2"><?php echo $brt->isi_berita2 ?></textarea>
        <?php echo form_error('isi_berita2', '<div class="text-small text-danger">', '</div>') ?>
      </div>
  		<button type="submit" class="btn btn-primary">Simpan</button>
  	</form>
    <?php endforeach; ?>
  </div>
</div>