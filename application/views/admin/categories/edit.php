
<?php $this->load->view('admin/template/header') ?>

<div class="container-fluid">

	<h1 class="h3 mb-3 text-gray-800">Edit Categories</h1>

	<div class="row">
		<div class="col">
			<div class="card card-primary">
				<div class="card-body">
					<form method="POST" action="<?= base_url('admin/categories/edit/' . $categories->title) ?>">
						<div class="row">
							<div class="form-group col-6">
								<label for="title">Judul</label>
								<input id="title" type="text" class="form-control" name="title" value="<?= $categories->title ?>">
								<?= form_error('title', '<small class="text-danger">', '</small>') ?>
							</div>

							<div class="form-group col-6">
								<label for="description">Deskripsi</label>
								<textarea class="form-control" name="description" id="description"><?= $categories->description ?></textarea>
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
