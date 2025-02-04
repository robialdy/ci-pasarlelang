<?php $this->load->view('admin/template/header') ?>
<!-- <div class="section-header">
	<h1>User</h1>
</div> -->

<div class="section-body">

	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header justify-content-between">
					<h4>Table Users</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped" id="table-1">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Depan</th>
									<th>Nama Akhir</th>
									<th>Tempat Tgl Lahir</th>
									<th>Tipe Pekerjaan</th>
									<th>Document</th>
									<th>Email</th>
									<th>No. Hp</th>
									<th>Alamat</th>
									<th>Profinsi</th>
									<th>Kota</th>
									<th>Kecamatan</th>
									<th>role</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i = 1;
								foreach ($userNotValidateds as $user):
								?>
									<tr>
										<td><?= $i++; ?><i class="beep"></i></td>
										<td><?= $user->first_name ?></td>
										<td><?= $user->last_name ?></td>
										<td><?= $user->born_in ?> - <?= $user->birthday ?></td>
										<td><?= $user->type_work ?></td>
										<td>
											<button class="btn btn-link text-truncate" style="width: 100px;" title="<?= $user->document ?>">
												<?= $user->document ?>
											</button>
										</td>
										<td><?= $user->email ?></td>
										<td><?= $user->no_handphone ?></td>
										<td><?= $user->address ?></td>
										<td><?= $user->provincy ?></td>
										<td><?= $user->city ?></td>
										<td><?= $user->district ?></td>
										<td><?= $user->status ?></td>
										<td class="text-center">
											<form action="<?= base_url('admin/users/AccountUserValidated/' . $user->id_user) ?>">
												<button class="btn btn-link" onclick="return confirm('Konfirmasi perubahan data menjadi Validated?')">
													<i class="bi bi-check-square-fill text-primary" style="font-size: 20px;"></i>
												</button>
											</form>
										</td>
									</tr>
								<?php endforeach; ?>
								<?php foreach ($userValidateds as $user): ?>
									<tr>
										<td><?= $i++; ?></td>
										<td><?= $user->first_name ?></td>
										<td><?= $user->last_name ?></td>
										<td><?= $user->born_in ?> - <?= $user->birthday ?></td>
										<td><?= $user->type_work ?></td>
										<td>
											<button class="btn btn-link text-truncate" style="width: 100px;" title="<?= $user->document ?>">
												<?= $user->document ?>
											</button>
										</td>
										<td><?= $user->email ?></td>
										<td><?= $user->no_handphone ?></td>
										<td><?= $user->address ?></td>
										<td><?= $user->provincy ?></td>
										<td><?= $user->city ?></td>
										<td><?= $user->district ?></td>
										<td><?= $user->status ?></td>
										<td></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<?php $this->load->view('admin/template/footer') ?>
