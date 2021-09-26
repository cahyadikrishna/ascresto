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
						<a href="<?php echo site_url('admin/drinks/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/drinks/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Drinks Name</label>
								<input class="form-control <?php echo form_error('drinks_name') ? 'is-invalid':'' ?>"
								 type="text" name="drinks_name" placeholder="Add drinks name..." />
								<div class="invalid-feedback">
									<?php echo form_error('drinks_name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Drinks Image</label>
								<div class="fileUpload btn btn-info">
   								 <span>Add Image</span>
   								 <input class="upload form-control-file" type="file" name="drinks_img" onchange="readURL(this);"/>
								</div>
							 <div><img src="<?php echo base_url('upload/drinks/default.jpg') ?>" id="image_preview"  alt="No Image" style="width: 210px; height: 120px; "/></div>
								<div class="invalid-feedback">
									<?php echo form_error('drinks_img') ?>
								</div>
							</div>


							<div class="form-group">

							<select class="form-control" name="id_kategori" style="overflow-x:hidden; overflow-y: scroll;"> 
								<option value=""><-- Choose Kategori Food --></option>
								<?php foreach ($kategori as $kat): ?>
 						 <option value="<?php echo $kat->kategori_id ?>"> <?php echo $kat->kategori_name ?></option>
 						   <?php endforeach; ?>
							</select>
							</div>

							<div class="form-group">
								<label for="name">Drinks Description</label>
								<textarea class="form-control <?php echo form_error('drinks_desc') ? 'is-invalid':'' ?>"
								 name="drinks_desc" placeholder="Write drinks description..." rows="5"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('drinks_desc') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Drinks Price</label>
								<input class="form-control <?php echo form_error('drinks_price') ? 'is-invalid':'' ?>"
								 type="text" name="drinks_price" placeholder="Add drinks price Rp." />
								<div class="invalid-feedback">
									<?php echo form_error('drinks_price') ?>
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