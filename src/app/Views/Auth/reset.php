<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="login-page">
  <div class="login-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="<?= base_url('/') ?>" class="h1"><b>GRUGESTIN</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Você está a apenas um passo de sua nova senha, recupere sua senha agora.</p>

        <?= view('Auth\_message_block') ?>

        <form action="<?= base_url('reset-password') ?>" method="post">
          <?= csrf_field() ?>

          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control <?php if (session('errors.pass_confirm')) echo 'is-invalid'; ?>" placeholder="Senha">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            <div class="invalid-feedback">
              <?= session('errors.password') ?>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.password')) echo 'is-invalid'; ?>" placeholder="Confirmar a senha">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            <div class="invalid-feedback">
              <?= session('errors.pass_confirm') ?>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Redefinir a senha</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <p class="mt-3 mb-1">
          <a href="login.html">Login</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
</div>
<?= $this->endSection() ?>