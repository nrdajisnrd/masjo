
<body>
  <div id="app"><br><br><br>
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

            <div class="card card-primary">
              <div class="card-header">
                <h4>Login</h4>
              </div>

              <div class="card-body">
                <?php echo $this->session->flashdata('pesan') ?>
                <form method="POST" action="<?php echo base_url('auth/login') ?>" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <div class="d-block">
                      <label>Email</label>
                    </div>
                    <input type="email" class="form-control" name="email" tabindex="1">
                    <?php echo form_error('email', '<div class="text-danger text-small ml-3">', '</div>') ?>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label>Password</label>
                    </div>
                    <input type="password" class="form-control" name="password" tabindex="2">
                    <?php echo form_error('password', '<div class="text-danger text-small ml-3">', '</div>') ?>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>

              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Belum punya akun? <a href="<?php echo base_url('regis') ?>">Buat Sekarang</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
