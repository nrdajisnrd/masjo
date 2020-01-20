<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Input Berita</h1>
    </div>
  </section>
  <div class="container-fluid">
  	<form method="post" action="<?php echo base_url('admin/data_berita/tambah_berita_aksi') ?>" enctype="multipart/form-data">
  		<div class="form-group">
  			<label>Judul Berita</label>
  			<input type="text" name="judul_berita" class="form-control">
        <?php echo form_error('judul_berita', '<div class="text-small text-danger">', '</div>') ?>
  		</div>
      <div class="form-group">
        <label>Gambar Berita</label><br>
        <input type="file" name="foto" class="form-control">
      </div>
      <div class="form-group">
        <label>Isi Berita</label>
        <textarea type="text" name="isi_berita" class="form-control" rows="5"></textarea>
        <?php echo form_error('isi_berita', '<div class="text-small text-danger">', '</div>') ?>
      </div>
      <div class="form-group">
        <label>Gambar Berita Tengah</label><br>
        <input type="file" name="foto2" class="form-control">
      </div>
      <div class="form-group">
        <label>Isi Berita Tambahan</label>
        <textarea type="text" name="isi_berita2" class="form-control" rows="5"></textarea>
        <?php echo form_error('isi_berita2', '<div class="text-small text-danger">', '</div>') ?>
      </div>
  		<button type="submit" class="btn btn-primary">Simpan</button>
  	</form>
  </div>
</div>