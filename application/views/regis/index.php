<div class="register-box">
  <div class="register-logo">
    <a href="<?= base_url(); ?>regis"><b>SISFO</b> ALUMNI </a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Silahkan Lakukan Registrasi</p>

      <form action="<?= base_url('auth/register') ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nama" name="nama">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
            <a href="<?= base_url(); ?>" class="btn btn-warning btn-block">Kembali</a>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="mt-3">
        <a href="<?= base_url(); ?>login" class="text-center">Jika Sudah Daftar, Silahkan Login</a>
      </div>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->