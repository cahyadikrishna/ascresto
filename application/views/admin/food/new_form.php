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
						<a href="<?php echo site_url('admin/food/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/food/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Food Name</label>
								<input class="form-control <?php echo form_error('food_name') ? 'is-invalid':'' ?>"
								 type="text" name="food_name" placeholder="Add food name..." />
								<div class="invalid-feedback">
									<?php echo form_error('food_name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Food Image</label>
								<div class="fileUpload btn btn-info">
   								 <span>Add Image</span>
   								 <input class="upload form-control-file" type="file" name="food_img" onchange="readURL(this);"/>
								</div>
							 <div><img src="<?php echo base_url('upload/food/default.jpg') ?>" id="image_preview"  alt="No Image" style="width: 210px; height: 120px; "/></div>
								<div class="invalid-feedback">
									<?php echo form_error('food_img') ?>
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
								<label for="name">Food Description</label>
								<textarea class="form-control <?php echo form_error('food_desc') ? 'is-invalid':'' ?>"
								 name="food_desc" placeholder="Write food description..." rows="5" ></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('food_desc') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Food Price</label>
								<input class="form-control <?php echo form_error('food_price') ? 'is-invalid':'' ?>"
								 type="text" name="food_price" placeholder="Add food price Rp." />
								<div class="invalid-feedback">
									<?php echo form_error('food_price') ?>
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