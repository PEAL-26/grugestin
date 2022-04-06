<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>
<div class="login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="<?= base_url('/') ?>" class="h1"><b>GRUGESTIN</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Você esqueceu sua senha? Aqui você pode facilmente adquirir uma nova senha.</p>
                <?= view('Auth\_message_block') ?>

                <form action="<?= base_url('forgot') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control <?php if (session('errors.email')) echo 'is-invalid'; ?>" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            <?= session('errors.email') ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Solicitar nova senha</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                
                <p class="mt-3 mb-1">
                    <a href="<?= base_url('login') ?>">Login</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
</div>
<?= $this->endSection() ?>