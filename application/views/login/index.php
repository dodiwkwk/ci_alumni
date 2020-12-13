<div class="login-box">
  <div class="login-logo">
    <a href="<?= base_url(); ?>login"><b>SISFO</b> ALUMNI </a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silahkan Lakukan Login</p>

      <form action="<?= base_url('auth/login') ?>" method="post">
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
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
            <a href="<?= base_url(); ?>" class="btn btn-warning btn-block">Kembali</a>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <div class="mt-3">
        <!-- <p class="mb-1">
          <a href="<?= base_url(); ?>forgot">I forgot my password</a>
        </p> -->
        <p class="mb-0">
          <a href="<?= base_url('auth/register'); ?>" class="text-center">Buat Akun</a>
        </p>
      </div>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->