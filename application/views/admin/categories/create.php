<?php $this->load->view('admin/template/header') ?>

<div class="section-header">
	<h1>Create Categories</h1>
	<div class="section-header-breadcrumb">
		<div class="breadcrumb-item active"><a href="<?= base_url('admin/categories') ?>">Categories</a></div>
		<div class="breadcrumb-item">Create</div>
	</div>
</div>

<div class="section-body">

	<div class="row">
		<div class="col">
			<div class="card card-primary">
				<div class="card-header">
					<h4>Form</h4>
				</div>

				<div class="card-body">
					<form method="POST" action="<?= base_url('admin/categories/create') ?>">
						<div class="row">
							<div class="form-group col-6">
								<label for="title">Judul</label>
								<input id="title" type="text" class="form-control" name="title" autofocus>
								<?= form_error('title', '<small class="text-danger">', '</small>') ?>
							</div>

							<div class="form-group col-6">
								<label for="description">Deskripsi</label>
								<textarea class="form-control" name="description" id="description"></textarea>
								<?= form_error('description', '<small class="text-danger">', '</small>') ?>
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
