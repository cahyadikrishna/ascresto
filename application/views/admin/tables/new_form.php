<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ASC Resto | Admin-Tables | Add</title>

    <?php $this->load->view('admin/_partials/head') ?>

 <body id="page-top">

 	<?php $this->load->view('admin/_partials/nav') ?>

	<div id="wrapper">

	 <!-- Sidebar -->
    <?php $this->load->view('admin/_partials/sidebar') ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

					<ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="#">Tables</a>
            </li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/kategori/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/kategori/add') ?>" method="post" enctype="multipart/form-data" >

							<div class="form-group">
								<label for="name">Nama Kategori</label>
								<input class="form-control <?php echo form_error('kategori_name') ? 'is-invalid':'' ?>"
								 type="text" name="kategori_name" placeholder="Nama Kategori" />
								<div class="invalid-feedback">
									<?php echo form_error('kategori_name') ?>
								</div>
							</div>


							<input class="btn btn-info" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->


			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


  <?php $this->load->view('admin/_partials/stickyfoot') ?>

           <?php $this->load->view('admin/_partials/footer') ?>