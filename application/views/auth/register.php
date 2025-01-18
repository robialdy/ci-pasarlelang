<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Register &mdash; Stisla</title>

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
			<div class="container mt-3">
				<div class="row">
					<div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
						<div class="login-brand">
							<h4 class="text-dark">PASARLELANG.COM</h4>
						</div>

						<div class="card shadow card-primary">
							<div class="card-header">
								<h4>Register</h4>
							</div>

							<div class="card-body">
								<form method="POST" action="<?= base_url('auth/register') ?>" enctype="multipart/form-data">
									<div class="row">
										<div class="form-group col-6">
											<label for="frist_name">Nama Depan</label>
											<input id="frist_name" type="text" class="form-control" name="first_name" autofocus>
										</div>
										<div class="form-group col-6">
											<label for="last_name">Nama Belakang</label>
											<input id="last_name" type="text" class="form-control" name="last_name">
										</div>

									</div>
									<div class="row">
										<div class="form-group col-6">
											<label for="born_in">Tempat Lahir</label>
											<input id="born_in" type="text" class="form-control" name="born_in" autofocus>
										</div>
										<div class="form-group col-6">
											<label for="birthday">Tanggal Lahir</label>
											<input id="birthday" type="date" class="form-control" name="birthday">
										</div>
									</div>

									<div class="form-group">
										<label for="email">Email</label>
										<input id="email" type="email" class="form-control" name="email">
										<div class="invalid-feedback">
										</div>
									</div>

									<div class="row">
										<div class="form-group col-6">
											<label for="type_work">Jenis Pekerjaan</label>
											<select class="form-control" name="type_work" id="type_work">
												<option value="" disabled selected>Pilih Jenis Pekerjaan</option>
												<option value="Pegawai Swasta">Pegawai Swasta</option>
												<option value="BUMN">BUMN</option>
												<option value="PNS">PNS</option>
											</select>
										</div>
										<div class="form-group col-6">
											<label for="no">No Handphone</label>
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														+62
													</div>
												</div>
												<input type="number" class="form-control phone-number" name="no_handphone" id="no">
											</div>
										</div>
									</div>

									<div class="form-group">
										<label for="nik">NIK</label>
										<input id="nik" type="number" class="form-control" name="nik">
										<div class="invalid-feedback">
										</div>
									</div>

									<div class="form-group">
										<label for="document">Document</label>
										<input id="document" type="file" class="form-control" name="document">
										<div class="invalid-feedback">
										</div>
									</div>

									<div class="form-group">
										<label for="address">Alamat</label>
										<textarea class="form-control" name="address" id="address"></textarea>
									</div>

									<div class="row">
										<div class="form-group col-6">
											<label for="provinsi">Provinsi</label>
											<select class="form-control" name="provincy" id="provincy" required>
												<option value="" disabled selected>Pilih Provinsi</option>
												<?php foreach ($provincy as $prov): ?>
													<option value="<?= $prov['name'] ?>" data-id="<?= $prov['id'] ?>"><?= $prov['name'] ?></option>
												<?php endforeach; ?>
											</select>
										</div>
										<div class="form-group col-6">
											<label for="kota">Kota/Kabupaten</label>
											<select class="form-control" name="city" id="kota" required disabled>
												<option value="" disabled selected>Pilih Kota/Kabupaten</option>
											</select>
										</div>
									</div>

									<div class="row">
										<div class="form-group col-6">
											<label for="district">Kecamatan</label>
											<select class="form-control" name="district" id="district" required disabled>
												<option value="" disabled selected>Pilih Kecamatan</option>
											</select>
										</div>
										<div class="form-group col-6">
											<label for="villages">Kelurahan/Desa</label>
											<select class="form-control" name="villages" id="villages" required disabled>
												<option value="" disabled selected>Pilih Kelurahan/Desa</option>
											</select>
										</div>
									</div>

									<div class="row">
										<div class="form-group col-6">
											<label for="password">Password</label>
											<input id="password" type="password" class="form-control" name="password" autofocus>
										</div>
										<div class="form-group col-6">
											<label for="confirm_password">Konfirmasi Password</label>
											<input id="confirm_password" type="password" class="form-control" name="confirm_password">
										</div>
									</div>

									<!-- <div class="form-group">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" name="agree" class="custom-control-input" id="agree">
											<label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
										</div>
									</div> -->

									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-lg btn-block">
											Register
										</button>
									</div>
								</form>
							</div>
						</div>
						<div class="simple-footer">
							Copyright &copy; Stisla 2018
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function() {

		$('#provincy').on('change', function() {
			const provinceId = $('#provincy option:selected').data('id')

			$('#kota').html('<option value="" disabled selected>Loading...</option>').prop('disabled', true);

			if (provinceId) {
				$.ajax({
					url: '<?= base_url('auth/getCities/') ?>' + provinceId,
					method: 'GET',
					success: function(response) {
						let options = '<option value="" disabled selected>Pilih Kota/Kabupaten</option>';
						response.forEach(function(city) {
							options += `<option value="${city.name}" data-id="${city.id}">${city.name}</option>`;
						});
						$('#kota').html(options).prop('disabled', false);
					}
				});
			}
		});

		$('#kota').on('change', function() {
			const cityId = $('#kota option:selected').data('id')

			$('#district').html('<option value="" disabled selected>Loading...</option>').prop('disabled', true);

			if (cityId) {
				$.ajax({
					url: '<?= base_url('auth/getDistrict/') ?>' + cityId,
					method: 'GET',
					success: function(response) {
						let options = '<option value="" disabled selected>Pilih Kecamatan</option>';
						response.forEach(function(district) {
							options += `<option value="${district.name}" data-id="${district.id}">${district.name}</option>`;
						});
						$('#district').html(options).prop('disabled', false);
					}
				});
			}
		});

		$('#district').on('change', function() {
			const districtId = $('#district option:selected').data('id')

			$('#villages').html('<option value="" disabled selected>Loading...</option>').prop('disabled', true);

			if (districtId) {
				$.ajax({
					url: '<?= base_url('auth/getVillages/') ?>' + districtId,
					method: 'GET',
					success: function(response) {
						let options = '<option value="" disabled selected>Pilih Kecamatan</option>';
						response.forEach(function(villages) {
							options += `<option value="${villages.name}" data-id="${villages.id}">${villages.name}</option>`;
						});
						$('#villages').html(options).prop('disabled', false);
					}
				});
			}
		});
	});
</script>

</html>
