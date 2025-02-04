<?php $this->load->view('admin/template/header') ?>
<!-- <div class="section-header">
	<h1>User</h1>
</div> -->

<div class="section-body">

	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header justify-content-between">
					<h4>Table Admin Account</h4>
					<a href="<?= base_url('admin/admin-account/create') ?>" class="btn btn-primary">Create</a>
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
									<th>Email</th>
									<th>No. Hp</th>
									<th>Alamat Lengkap</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i = 1;
								foreach ($admins as $admin):
								?>
									<tr>
										<td><?= $i++; ?></td>
										<td><?= $admin->first_name ?></td>
										<td><?= $admin->last_name ?></td>
										<td><?= $admin->born_in ?> - <?= $admin->birthday ?></td>
										<td><?= $admin->email ?></td>
										<td><?= $admin->no_handphone ?></td>
										<td><?= $admin->address ?></td>
										<td>
											<a href="<?= base_url('admin/admin-account/edit/'. $admin->slug) ?>"><i class="bi bi-pencil-square text-primary" style="font-size:20px;"></i></a>
										</td>
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
