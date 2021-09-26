<!DOCTYPE html>
<html lang="en">

   <?php $this->load->view('admin/_partials/head') ?>


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

     <?php $this->load->view('admin/_partials/sidebar') ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php $this->load->view('admin/_partials/nav') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

        	<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

         
       <?php $this->load->view('admin/_partials/breadcrumb') ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/drinks/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/drinks/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $drinks->drinks_id?>" />

							<div class="form-group">
								<label for="name">Drinks Name</label>
								<input class="form-control <?php echo form_error('drinks_name') ? 'is-invalid':'' ?>"
								 type="text" name="drinks_name" placeholder="Add drinks name..." value="<?php echo $drinks->drinks_name ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('drinks_name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Drinks Image</label>
								<div class="fileUpload btn btn-info">
   								 <span>Change Image</span>
								<input class="upload form-control-file"
								 type="file" name="drinks_img" onchange="readURL(this);" />
								<input type="hidden" name="old_image" value="<?php echo $drinks->drinks_img ?>" />
								</div>

								<div><img src="<?php echo base_url('upload/drinks/'.$drinks->drinks_img) ?>" id="image_preview"  alt="No Image" style="max-width: 210px; height:120px;"/></div>
								<div class="invalid-feedback">
									<?php echo form_error('drinks_img') ?>
								</div>
							</div>

								<div class="form-group">

							<select class="form-control" name="id_kategori">
								<option value="<?php echo $drinks->id_kategori ?>"><~ <?php echo $drinks->kategori_name ?> ~></option>
								<?php foreach ($kategori as $kat): ?>
 						 <option value="<?php echo $kat->kategori_id ?>"> <?php echo $kat->kategori_name ?></option>
 						   <?php endforeach; ?>
							</select>
							</div>


							<div class="form-group">
								<label for="name">Drinks Description</label>
								<textarea class="form-control <?php echo form_error('drinks_desc') ? 'is-invalid':'' ?>"
								 name="drinks_desc" placeholder="Drinks description..." rows="5"><?php echo $drinks->drinks_desc ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('drinks_desc') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Drinks Price</label>
								<input class="form-control <?php echo form_error('drinks_price') ? 'is-invalid':'' ?>"
								 type="text" name="drinks_price" placeholder="Add drinks price..." value="<?php echo $drinks->drinks_price ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('drinks_price') ?>
								</div>
							</div>

							<input type="hidden" name="drinks_date" value="<?php echo time_ago($drinks->drinks_date); ?>" />

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

 <?php $this->load->view('admin/_partials/footer') ?>


   </div>

 </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

    <?php $this->load->view('admin/_partials/modal.php') ?>

   <?php $this->load->view('admin/_partials/js') ?>

</body>

</html>