<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Edit Mobil</h1>
    </div>
  </section>
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">

        <?php foreach ($mobil as $mb) : ?>
        <form method="post" action="<?php echo base_url().'admin/data_mobil/edit_mobil_aksi' ?>" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Nama Mobil</label>
                <input type="hidden" name="id_mobil" value="<?php echo $mb->id_mobil ?>">
                <input type="text" name="nama_mobil" class="form-control" value="<?php echo $mb->nama_mobil ?>">
                <?php echo form_error('nama_mobil', '<div class="text-small text-danger">', '</div>') ?>
              </div>
              <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control" name="deskripsi" rows="3"><?php echo $mb->deskripsi ?></textarea>
                <?php echo form_error('deskripsi', '<div class="text-small text-danger">', '</div>') ?>
              </div>
              <div class="form-group">
                <label>Harga /hari</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $mb->harga ?>">
                <?php echo form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
              </div>
              <div class="form-group">
                <label>Tahun Produksi</label>
                <input type="text" name="tahun" class="form-control" value="<?php echo $mb->tahun ?>">
                <?php echo form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Merk Mobil</label>
                <select class="form-control" name="nama_merk">
                  <option value="<?php echo $mb->nama_merk ?>"><?php echo $mb->nama_merk ?></option>
                  <?php foreach ($merk as $mrk) : ?>
                    <option value="<?php echo $mrk->nama_merk ?>"><?php echo $mrk->nama_merk ?></option>
                  <?php endforeach; ?>
                </select>
                <?php echo form_error('nama_merk', '<div class="text-small text-danger">', '</div>') ?>
              </div>
              <div class="form-group">
                <label>No. Polisi</label>
                <input type="text" name="nopol" class="form-control" value="<?php echo $mb->nopol ?>">
                <?php echo form_error('nopol', '<div class="text-small text-danger">', '</div>') ?>
              </div>
              <div class="form-group">
                <label>Jenis Bahan Bakar</label>
                <select class="form-control" name="bbm">
                  <option value="<?php echo $mb->bbm ?>"><?php echo $mb->bbm ?></option>
                  <option value="Premium">Premium</option>
                  <option value="Pertalite">Pertalite</option>
                  <option value="Pertamax">Pertamax</option>
                  <option value="Diesel">Diesel</option>
                </select>
                <?php echo form_error('bbm', '<div class="text-small text-danger">', '</div>') ?>
              </div>
              <div class="form-group">
                <label>Kapasitas</label>
                <input type="text" name="seating" class="form-control" value="<?php echo $mb->seating ?>">
                <?php echo form_error('seating', '<div class="text-small text-danger">', '</div>') ?>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <h5><b>Upload Gambar</b></h5>
            </div>
          </div>
          <div class="row">
            <div class="panel panel-default">
              <div class="panel-body d-flex justify-content-left">
                <div class="form-group">
                  <div class="col-md-4">
                    Gambar 1 <img src="<?php echo base_url().'assets/uploads/'.$mb->image1 ?>" class="w-100"><input type="file" name="image1">
                  </div>
                  <?php echo form_error('image1', '<div class="text-small text-danger">', '</div>') ?>
                </div>
                <div class="form-group">
                  <div class="col-md-4">
                    Gambar 2 <img src="<?php echo base_url().'assets/uploads/'.$mb->image2 ?>" class="w-100"><input type="file" name="image2">
                  </div>
                  <?php echo form_error('image2', '<div class="text-small text-danger">', '</div>') ?>
                </div>
                <div class="form-group">
                  <div class="col-md-4">
                    Gambar 3 <img src="<?php echo base_url().'assets/uploads/'.$mb->image3 ?>" class="w-100"><input type="file" name="image3">
                  </div>
                  <?php echo form_error('image3', '<div class="text-small text-danger">', '</div>') ?>
                </div>
              </div>
            </div>
          </div>

          <hr>
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
              <div class="panel-heading mb-2"><h5>Accessories</h5></div>
                <div class="panel-body d-flex justify-content-left">
                  <div class="form-group">
                    <?php if($mb->airconditioner == "1") { ?>
                      <div class="checkbox checkbox-inline">
                        <input type="checkbox" name="aksesoris[1]" checked value="1">
                        <label> Air Conditioner </label>
                      </div>
                    <?php } else { ?>
                      <div class="checkbox checkbox-inline">
                        <input type="checkbox" name="aksesoris[1]" value="1">
                        <label> Air Conditioner </label>
                      </div>
                    <?php } ?>

                    <?php if($mb->powerdoorlocks == "1") { ?>
                      <div class="checkbox checkbox-inline">
                        <input type="checkbox" name="aksesoris[2]" checked value="1">
                        <label> Power Door Locks </label>
                      </div>
                    <?php } else { ?>
                      <div class="checkbox checkbox-inline">
                        <input type="checkbox" name="aksesoris[2]" value="1">
                        <label> Power Door Locks </label>
                      </div>
                    <?php } ?>

                    <?php if($mb->antilockbrakingsystem == "1") { ?>
                      <div class="checkbox checkbox-inline">
                        <input type="checkbox" name="aksesoris[3]" checked value="1">
                        <label> Anti Lock Braking System </label>
                      </div>
                    <?php } else { ?>
                      <div class="checkbox checkbox-inline">
                        <input type="checkbox" name="aksesoris[3]"value="1">
                        <label> Anti Lock Braking System </label>
                      </div>
                    <?php } ?>

                    <?php if($mb->brakeassist == "1") { ?>
                      <div class="checkbox checkbox-inline">
                        <input type="checkbox" name="aksesoris[4]" checked value="1">
                        <label> Brake Assist </label>
                      </div>
                    <?php } else { ?>
                      <div class="checkbox checkbox-inline">
                        <input type="checkbox" name="aksesoris[4]" value="1">
                        <label> Brake Assist </label>
                      </div>
                    <?php } ?>
                  </div>

                  <div class="form-group ml-5">
                    <?php if($mb->powersteering == "1") { ?>
                      <div class="checkbox checkbox-inline">
                        <input type="checkbox" name="aksesoris[5]" checked value="1">
                        <label> Power Steering </label>
                      </div>
                    <?php } else { ?>
                      <div class="checkbox checkbox-inline">
                        <input type="checkbox" name="aksesoris[5]" value="1">
                        <label> Power Steering </label>
                      </div>
                    <?php } ?>

                    <?php if($mb->driverairbag == "1") { ?>
                      <div class="checkbox checkbox-inline">
                        <input type="checkbox" name="aksesoris[6]" checked value="1">
                        <label> Driver Airbag</label>
                      </div>
                    <?php } else { ?>
                      <div class="checkbox checkbox-inline">
                        <input type="checkbox" name="aksesoris[6]" value="1">
                        <label> Driver Airbag</label>
                      </div>
                    <?php } ?>

                    <?php if($mb->passengerairbag == "1") { ?>
                      <div class="checkbox checkbox-inline">
                        <input type="checkbox" name="aksesoris[7]" checked value="1">
                        <label> Passenger Airbag </label>
                      </div>
                    <?php } else { ?>
                      <div class="checkbox checkbox-inline">
                        <input type="checkbox" name="aksesoris[7]" value="1">
                        <label> Passenger Airbag </label>
                      </div>
                    <?php } ?>

                    <?php if($mb->powerwindows == "1") { ?>
                      <div class="checkbox checkbox-inline">
                        <input type="checkbox" name="aksesoris[8]" checked value="1">
                        <label> Power Windows </label>
                      </div>
                    <?php } else { ?>
                      <div class="checkbox checkbox-inline">
                        <input type="checkbox" name="aksesoris[8]" value="1">
                        <label> Power Windows </label>
                      </div>
                    <?php } ?>
                  </div>

                  <div class="form-group ml-5">
                    <?php if($mb->cdplayer == "1") { ?>
                      <div class="checkbox checkbox-inline">
                        <input type="checkbox" name="aksesoris[9]" checked value="1">
                        <label> CD Player </label>
                      </div>
                    <?php } else { ?>
                      <div class="checkbox checkbox-inline">
                        <input type="checkbox" name="aksesoris[9]" value="1">
                        <label> CD Player </label>
                      </div>
                    <?php } ?>

                    <?php if($mb->centrallocking == "1") { ?>
                      <div class="checkbox checkbox-inline">
                        <input type="checkbox" name="aksesoris[10]" checked value="1">
                        <label> Central Locking</label>
                      </div>
                    <?php } else { ?>
                      <div class="checkbox checkbox-inline">
                        <input type="checkbox" name="aksesoris[10]" value="1">
                        <label> Central Locking</label>
                      </div>
                    <?php } ?>

                    <?php if($mb->crashsensor == "1") { ?>
                      <div class="checkbox checkbox-inline">
                        <input type="checkbox" name="aksesoris[11]" checked value="1">
                        <label> Crash Sensor </label>
                      </div>
                    <?php } else { ?>
                      <div class="checkbox checkbox-inline">
                        <input type="checkbox" name="aksesoris[11]" value="1">
                        <label> Crash Sensor </label>
                      </div>
                    <?php } ?>

                    <?php if($mb->leatherseats == "1") { ?>
                      <div class="checkbox checkbox-inline">
                        <input type="checkbox"name="aksesoris[12]" checked value="1">
                        <label> Leather Seats </label>
                      </div>
                    <?php } else { ?>
                      <div class="checkbox checkbox-inline">
                        <input type="checkbox"name="aksesoris[12]" value="1">
                        <label> Leather Seats </label>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>