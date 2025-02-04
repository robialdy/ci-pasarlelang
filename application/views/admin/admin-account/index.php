<?php $this->load->view('admin/template/header') ?>
<?php if ($this->session->flashdata('success')): ?>
	<script>
		Swal.fire({
			icon: 'success',
			text: '<?= $this->session->flashdata('success') ?>',
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3500,
			timerProgressBar: true,
			width: 450,
			padding: '1em',
			iconColor: '#4CAF50',
			didOpen: (toast) => {
				toast.style.borderRadius = '8px'; // Membuat sudut lebih halus
				toast.style.boxShadow = '0px 4px 15px rgba(0, 0, 0, 0.2)'; // Efek shadow untuk floating
				document.querySelector('.swal2-container').style.pointerEvents = 'none'; // Menghindari block area di luar toast
			}
		});
	</script>
<?php endif  ?>

<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-body">
			<div class="d-flex justify-content-between mb-4">
				<h6 class="font-weight-bold">Table Admin Account</h6>
				<a href="<?= base_url('admin/account/create') ?>" class="btn bg-primary btn-md text-white shadow">Create</a>
			</div>
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
									<a href="<?= base_url('admin/account/edit/' . $admin->slug) ?>">edit</a>
									<a href="<?= base_url('admin/account/delete/' . $admin->slug) ?>" onclick="return confirm('Yakin data akun dihapus?')">trash</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('admin/template/footer') ?>
