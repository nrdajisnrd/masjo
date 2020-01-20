<div class="container">

	<!-- Page Heading/Breadcrumbs -->
	<h1 class="mt-4 mb-3">Pengaturan Profil
	</h1>

	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="<?php echo base_url('customer/dashboard') ?>">Home</a>
		</li>
		<li class="breadcrumb-item active">Pengaturan Profil
		</li>
	</ol>

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 mb-4">
            <?php echo $this->session->flashdata('pesan') ?>
			<div class="card">
				<div class="card-body">
					<form action="<?php echo base_url('customer/profil') ?>" method="post"
						enctype="multipart/form-data">
						<div class="form-group row">
							<label for="tgl-daftar" class="col-sm-12 col-form-label">Tanggal Daftar -
								<?php echo $profil['tgl_daftar'] ?></label>
						</div>
						<div class="form-group row">
							<label for="tgl-daftar" class="col-sm-12 col-form-label">Tanggal Update -
								<?php echo $profil['updationdate'] ?></label>
						</div>
						<div class="form-group row">
							<label for="nama_user" class="col-sm-3 col-form-label">Nama Lengkap</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="nama_user" name="nama_user" value="<?php echo $profil['nama_user'] ?>">
                                <?php echo form_error('nama_user', '<small class="text-danger pl-1">', '</small>') ?>
							</div>
						</div>
						<div class="form-group row">
							<label for="email" class="col-sm-3 col-form-label">Email</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="email" name="email" value="<?php echo $profil['email'] ?>" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label for="telp" class="col-sm-3 col-form-label">Telepon/WA</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="telp" name="telp" value="<?php echo $profil['telp'] ?>">
                                <?php echo form_error('telp', '<small class="text-danger pl-1">', '</small>') ?>
							</div>
						</div>
						<div class="form-group row">
							<label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
							<div class="col-sm-9">
								<textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control"><?php echo $profil['alamat'] ?></textarea>
                                <?php echo form_error('alamat', '<small class="text-danger pl-1">', '</small>') ?>
							</div>
						</div>
                        <div class="form-group row">
                            <label for="ktp" class="col-sm-3 col-form-label">Foto KTP</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <img src="<?php echo base_url().'assets/assets_cust/img/ktp_cust/'. $profil['ktp'] ?>" class="card-img-top">
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="file" class="form-control" id="ktp" name="ktp">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                            <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                            </div>
                        </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
