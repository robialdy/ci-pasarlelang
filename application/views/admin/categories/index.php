<?php $this->load->view('admin/template/header') ?>
<!-- <div class="section-header">
	<h1>User</h1>
</div> -->
<?php if ($this->session->flashdata('success')): ?>
<script>
	Swal.fire({
	title: '<?= $this->session->flashdata('success') ?>',
	icon: "success",
	draggable: true
	});
</script>
<?php endif  ?>

<div class="section-body">

	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header justify-content-between">
					<h4>Table Categories</h4>
					<a href="<?= base_url('admin/categories/create') ?>" class="btn btn-primary">Create</a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped" id="table-1">
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
											<a href="<?= base_url('admin/categories/edit/' . $categori->title) ?>"><i class="bi bi-pencil-square text-primary" style="font-size:20px;"></i></a>
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
