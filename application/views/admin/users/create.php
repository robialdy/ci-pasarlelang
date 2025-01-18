<?php $this->load->view('template/header') ?>

<div class="section-header">
	<h1>Form</h1>
	<div class="section-header-breadcrumb">
		<div class="breadcrumb-item active"><a href="<?= base_url('admin/user-account') ?>">User Account</a></div>
		<div class="breadcrumb-item">Create</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="section-body">

	<div class="row">
		<div class="col-12 col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="row">

						<div class="col-12 col-md-6">
							<div class="form-group">
								<label for="first_name">Nama Depan</label>
								<input type="text" class="form-control" name="" id="first_name" placeholder="Enter First Name">
							</div>

							<div class="form-group">
								<label for="tempat_lahir">Tempat Lahir</label>
								<input type="text" class="form-control" name="" id="tempat_lahir" placeholder="Enter First Name">
							</div>

							<div class="form-group">
								<label for="jenis_pekerjaan">Jenis Pekerjaan</label>
								<select class="form-control" name="" id="jenis_pekerjaan">
									<option value="" disabled selected>Pilih Jenis Pekerjaan</option>
									<option value="Pegawai Swasta">Pegawai Swasta</option>
									<option value="BUMN">BUMN</option>
									<option value="PNS">PNS</option>
								</select>
							</div>

							<div class="form-group">
								<label for="provinsi">Provinsi</label>
								<select class="form-control" name="provinsi_id" id="provinsi" required>
									<option value="" disabled selected>Pilih Provinsi</option>
									<?php foreach ($provincy as $prov): ?>
										<option value="<?= $prov['name'] ?>" data-id="<?= $prov['id'] ?>"><?= $prov['name'] ?></option>
									<?php endforeach; ?>
								</select>
							</div>

							<div class="form-group">
								<label for="district">Kecamatan</label>
								<select class="form-control" name="kecamatan_id" id="district" required disabled>
									<option value="" disabled selected>Pilih Kecamatan</option>
								</select>
							</div>

							<div class="form-group">
								<label for="address">Alamat</label>
								<textarea class="form-control" name="" id="address"></textarea>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="form-group">
								<label for="last_name">Last Name</label>
								<input type="text" class="form-control" name="" id="last_name" placeholder="Enter Last Name">
							</div>

							<div class="form-group">
								<label for="tgl_lahir">Tanggal Lahir</label>
								<input type="date" class="form-control" name="" id="tgl_lahir">
							</div>

							<div class="form-group">
								<label for="no">No Handphone</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											+62
										</div>
									</div>
									<input type="number" class="form-control phone-number" name="" id="no">
								</div>
							</div>

							<div class="form-group">
								<label for="kota">Kota/Kabupaten</label>
								<select class="form-control" name="kota_id" id="kota" required disabled>
									<option value="" disabled selected>Pilih Kota/Kabupaten</option>
								</select>
							</div>

							<div class="form-group">
								<label for="villages">Kelurahan/Desa</label>
								<select class="form-control" name="kelurahan_id" id="villages" required disabled>
									<option value="" disabled selected>Pilih Kelurahan/Desa</option>
								</select>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>


</div>


<?php $this->load->view('template/footer') ?>
