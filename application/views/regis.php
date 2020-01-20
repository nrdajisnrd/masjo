
<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">

            <div class="card card-primary">
              <div class="card-header"><h4>Registrasi Akun</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('regis') ?>" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_user">
                    <?php echo form_error('nama_user', '<div class="text-danger small ml-2">','</div>') ?>
                  </div>

                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email">
                    <?php echo form_error('email', '<div class="text-danger small ml-2">','</div>') ?>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label>Password</label>
                      <input type="password" class="form-control" name="password1">
                      <?php echo form_error('password1', '<div class="text-danger small ml-2">','</div>') ?>
                    </div>

                    <div class="form-group col-6">
                      <label>Ulangi Password</label>
                      <input type="password" class="form-control" name="password2">
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Telepon (Whatsapp)</label>
                    <input type="text" class="form-control" name="telp">
                    <?php echo form_error('telp', '<div class="text-danger small ml-2">','</div>') ?>
                  </div>

                  <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control"></textarea>
                    <?php echo form_error('alamat', '<div class="text-danger small ml-2">','</div>') ?>
                  </div>

                  <div class="form-group">
                    <label>Foto KTP</label>
                    <input type="file" class="form-control" name="ktp">
                    <?php echo form_error('ktp', '<div class="text-danger small ml-2">','</div>') ?>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Daftar
                    </button>
                  </div>
                </form>
              </div>
            </div>

            <div class="mt-5 text-muted text-center">
              Sudah ada akun? <a href="<?php echo base_url('auth/login') ?>">Login</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
