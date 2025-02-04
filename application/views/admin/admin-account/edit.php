<?php $this->load->view('admin/template/header') ?>

<div class="container-fluid">

	<h1 class="h3 mb-3 text-gray-800">Edit Admin Account</h1>

	<div class="row">
		<div class="col">
			<div class="card card-primary">
				<div class="card-header">
					<h4>Form</h4>
				</div>

				<div class="card-body">
					<form method="POST" action="<?= base_url('admin/account/edit/' . $account->slug) ?>">
						<div class="row">
							<div class="form-group col-6">
								<label for="frist_name">Nama Depan</label>
								<input id="frist_name" type="text" class="form-control" name="first_name" value="<?= $account->first_name ?>" autofocus>
							</div>
							<div class="form-group col-6">
								<label for="last_name">Nama Belakang</label>
								<input id="last_name" type="text" class="form-control" name="last_name" value="<?= $account->last_name ?>">
							</div>

						</div>
						<div class="row">
							<div class="form-group col-6">
								<label for="born_in">Tempat Lahir</label>
								<input id="born_in" type="text" class="form-control" name="born_in" value="<?= $account->born_in ?>">
							</div>
							<div class="form-group col-6">
								<label for="birthday">Tanggal Lahir</label>
								<input id="birthday" type="date" class="form-control" name="birthday" value="<?= $account->birthday ?>">
							</div>
						</div>

						<div class="row">
							<div class="form-group col-6">
								<label for="email">Email</label>
								<input id="email" type="email" class="form-control" name="email" value="<?= $account->email ?>">
							</div>
							<div class="form-group col-6">
								<label for="no">No Handphone</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											+62
										</div>
									</div>
									<input type="number" class="form-control phone-number" name="no_handphone" id="no" value="<?= $account->no_handphone ?>">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="address">Alamat Lengkap</label>
							<textarea class="form-control" name="address" id="address"><?= $account->address ?></textarea>
						</div>

						<div class="row">
							<div class="form-group col-6">
								<label for="password">Password</label>
								<input id="password" type="password" class="form-control" name="password">
							</div>
							<div class="form-group col-6">
								<label for="confirm_password">Konfirmasi Password</label>
								<input id="confirm_password" type="password" class="form-control" name="confirm_password">
							</div>
						</div>

						<div class="form-group text-right">
							<button type="submit" class="btn btn-primary btn-lg">
								Submit
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('admin/template/footer') ?>
