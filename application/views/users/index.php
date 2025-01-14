<?php $this->load->view('template/header') ?>
<div class="section-header">
	<h1>User</h1>
</div>

<div class="section-body">

	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h4>Table</h4>
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
									<th>No. Hp</th>
									<th>Alamat</th>
									<th>Profinsi</th>
									<th>Kota</th>
									<th>Kecamatan</th>
									<th>role</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i = 1;
								foreach ($users as $user):
								?>
									<tr>
										<td><?= $i++; ?></td>
										<td><?= $user->first_name ?></td>
										<td><?= $user->last_name ?></td>
										<td><?= $user->born_in ?> - <?= $user->birthday ?></td>
										<td><?= $user->type_work ?></td>
										<td><?= $user->no_handphone ?></td>
										<td><?= $user->address ?></td>
										<td><?= $user->provincy ?></td>
										<td><?= $user->city ?></td>
										<td><?= $user->district ?></td>
										<td><?= $user->role ?></td>
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

<?php $this->load->view('template/footer') ?>