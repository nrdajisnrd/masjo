<div class="container">

	<!-- Page Heading/Breadcrumbs -->
	<h1 class="mt-4 mb-3">Ubah Password
	</h1>

	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="<?php echo base_url('customer/dashboard') ?>">Home</a>
		</li>
		<li class="breadcrumb-item active">Ubah Password
		</li>
	</ol>

	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <?php echo $this->session->flashdata('pesan') ?>
                    <form action="<?php echo base_url('customer/ubahpass') ?>" method="post">
                        <div class="form-group">
                            <label for="passlama" class="col-sm-4 col-form-label">Password Lama</label>
                            <input type="password" id="passlama" class="form-control" name="passlama">
                            <?php echo form_error('passlama', '<small class="text-danger pl-1">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="passbaru1" class="col-sm-4 col-form-label">Password Baru</label>
                            <input type="password" id="passbaru1" class="form-control" name="passbaru1">
                            <?php echo form_error('passbaru1', '<small class="text-danger pl-1">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="pasbaru2" class="col-sm-4 col-form-label">Ulangi Password</label>
                            <input type="password" id="passbaru2" class="form-control" name="passbaru2">
                            <?php echo form_error('passbaru2', '<small class="text-danger pl-1">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Ubah Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>