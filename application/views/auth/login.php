<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title><?= $title ?></title>

	<!-- General CSS Files -->
	<link rel="stylesheet" href="<?= base_url() ?>public/assets/modules/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>public/assets/modules/fontawesome/css/all.min.css">

	<!-- CSS Libraries -->
	<link rel="stylesheet" href="assets/modules/jquery-selectric/selectric.css">

	<!-- Template CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>public/assets/css/style.css">
	<link rel="stylesheet" href="<?= base_url() ?>public/assets/css/components.css">
	<!-- Start GA -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-94034622-3');
	</script>
	<!-- /END GA -->
</head>

<body>


	<div id="app">
		<section class="section">
			<div class="container mt-5">
				<div class="row">
					<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
						<div class="login-brand">
							<h4 class="text-dark">PASARLELANG.COM</h4>
						</div>

						<div class="card card-primary shadow">
							<div class="card-header">
								<h4>Login</h4>
							</div>

							<div class="card-body">
								<form method="POST" action="<?= base_url('auth') ?>">
									<div class="form-group">
										<label for="email">Email</label>
										<input id="email" type="email" class="form-control <?= form_error('email') || $this->session->flashdata('error_email') ? 'is-invalid' : '' ?>" name="email" value="<?= set_value('email') ?>" autofocus>
										<?= form_error('email', '<small class="text-danger">', '</small>') ?>
										<?php if ($this->session->flashdata('error_email')): ?>
											<small class="text-danger">
												<?= $this->session->flashdata('error_email') ?>
											</small>
										<?php endif ?>
									</div>

									<div class="form-group">
										<div class="d-block">
											<label for="password" class="control-label">Password</label>
											<!-- <div class="float-right">
												<a href="auth-forgot-password.html" class="text-small">
													Forgot Password?
												</a>
											</div> -->
										</div>
										<input id="password" type="password" class="form-control <?= form_error('password') || $this->session->flashdata('error_password') ? 'is-invalid' : '' ?>" name="password">
										<?= form_error('password', '<small class="text-danger">', '</small>') ?>
										<?php if ($this->session->flashdata('error_password')): ?>
											<small class="text-danger">
												<?= $this->session->flashdata('error_password') ?>
											</small>
										<?php endif ?>
									</div>

									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
											Login
										</button>
									</div>
								</form>

								<div class=" text-muted text-center">
									Tidak memiliki akun? <a href="<?= base_url('auth/register') ?>">Daftar Sekarang</a>
								</div>

								<div class="text-center text-muted mt-2">
									Copyright &copy; Stisla 2018
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- General JS Scripts -->
	<script src="<?= base_url() ?>public/assets/modules/jquery.min.js"></script>
	<script src="<?= base_url() ?>public/assets/modules/popper.js"></script>
	<script src="<?= base_url() ?>public/assets/modules/tooltip.js"></script>
	<script src="<?= base_url() ?>public/assets/modules/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>public/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
	<script src="<?= base_url() ?>public/assets/modules/moment.min.js"></script>
	<script src="<?= base_url() ?>public/assets/js/stisla.js"></script>

	<!-- Template JS File -->
	<script src="<?= base_url() ?>public/assets/js/scripts.js"></script>
	<script src="<?= base_url() ?>public/assets/js/custom.js"></script>
</body>

</html>
