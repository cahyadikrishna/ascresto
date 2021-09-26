<!DOCTYPE html>
<html lang="en">

  <?php $this->load->view('admin/_partials/head') ?>


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

     <?php $this->load->view('admin/_partials/sidebar') ?>

			<div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php $this->load->view('admin/_partials/nav') ?>


			<div class="container-fluid">

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

			<?php $this->load->view('admin/_partials/breadcrumb') ?>

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
  <?php $this->load->view('admin/_partials/footer') ?>

  </div>
  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

    <?php $this->load->view('admin/_partials/modal.php') ?>

   <?php $this->load->view('admin/_partials/js') ?>

 </body>

</html>