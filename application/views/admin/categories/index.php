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
				<h6 class="font-weight-bold">Table Categories</h6>
				<a href="<?= base_url('admin/categories/create') ?>" class="btn bg-gray-600 btn-md text-white shadow">Create</a>
			</div>
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Judul</th>
							<th>Deskripsi</th>
							<th>Tanggal ditambahkan</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						foreach ($categories as $categori):
						?>
							<tr>
								<td><?= $i++; ?></td>
								<td><?= $categori->title ?></td>
								<td><?= $categori->description ?></td>
								<td><?= $categori->created_at ?></td>
								<td>
									<a href="<?= base_url('admin/categories/edit/' . $categori->title) ?>">edit</i></a>
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
