<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="login-page">
	<div class="login-box">
		<!-- /.login-logo -->
		<div class="card card-outline card-primary">
			<div class="card-header text-center">
				<a href="<?= base_url('/') ?>" class="h1"><b>GRUGESTIN</b></a>
			</div>
			<div class="card-body">
				<p class="login-box-msg">Faça login para iniciar sua sessão</p>

				<?= view('Auth\_message_block') ?>

				<form action="<?= base_url('login') ?>" method="post">
					<div class="input-group mb-3">
						<input type="login" name="login" class="form-control <?php if (session('errors.login')) echo 'is-invalid'; ?>" placeholder="Email ou Telefone" value="<?= set_value('login'); ?>" >
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
						<div class="invalid-feedback">
							<?= session('errors.login') ?>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" name="password" class="form-control <?php if (session('errors.password')) echo 'is-invalid'; ?>" placeholder="Senha" value="<?= set_value('password'); ?>">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
						<div class="invalid-feedback">
							<?= session('errors.password') ?>
						</div>
					</div>
					<div class="row">
						<div class="col-8">
							<div class="icheck-primary">
								<input type="checkbox" name="remember" <?php if (old('remember')) : ?> checked <?php endif ?>>
								<label for="remember">
									Lembrar-me
								</label>
							</div>
						</div>
						<!-- /.col -->
						<div class="col-4">
							<button type="submit" class="btn btn-primary btn-block">Entrar</button>
						</div>
						<!-- /.col -->
					</div>
				</form>
				<!-- /.social-auth-links -->

				<p class="mb-1">
					<a href="<?= base_url('forgot') ?>">Esqueci a minha senha</a>
				</p>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
	<!-- /.login-box -->
</div>
<?= $this->endSection() ?>