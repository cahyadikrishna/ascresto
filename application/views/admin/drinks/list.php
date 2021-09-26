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

         
       <?php $this->load->view('admin/_partials/breadcrumb') ?>

       <div class="mb-2"> 
            <a href="<?php echo site_url('admin/drinks/add') ?>" class="btn btn-info"><i class="fas fa-plus"></i> Add New</a>  
          </div>

          <!-- DataTales Example -->
          <div class="animated wow fadeInLeft card shadow mb-4" data-wow-duration="1000ms" data-wow-delay="100ms">
            <div class="card-header">
              <i class="fas fa-glass-cheers"></i>
              Data Table Drinks</div>
            <div class="card-body">
             
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    	<th>Drink Image</th>
                      <th>Drink Name</th>
                       <th>Drink Category</th>
                      <th>Drink Description</th>
                      <th>Drink Price</th>
                       <th>Upload Time</th>
                      <th>Action Button</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    	<th>Drink Image</th>
                      <th>Drink Name</th>
                        <th>Drink Category</th>
                      <th>Drink Description</th>
                      <th>Drink Price</th>
                        <th>Upload Time</th>
                      <th>Action Button</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    
                    <?php foreach ($drinks as $drinks): ?>
									<tr>
										<td width="120">
                      <img src="<?php echo base_url('upload/drinks/'.$drinks->drinks_img) ?>" width="120" />
                    </td>
										<td width="180">
											<?php echo $drinks->drinks_name ?>
										</td>
                    <td width="100">
                      <?php echo $drinks->kategori_name ?>
                    </td>
                    <td width="220">
                      <?php echo substr($drinks->drinks_desc, 0, 50) ?>...
                    </td>
                    <td width="150" style="text-align: center;">
                    <?php echo number_format($drinks->drinks_price,0,",",".") ?> IDR
                    </td>
                    <td width="100">
                     <?php echo date('d F Y', strtotime($drinks->drinks_date)) ?>
                    </td>

										<td align="center" width="210">
											<a href="<?php echo site_url('admin/drinks/edit/'.$drinks->drinks_id) ?>"><i class="fas fa-edit"></i></a>&nbsp

									<a onclick="deleteConfirm('<?php echo site_url('admin/drinks/delete/'.$drinks->drinks_id) ?>')"
											 href="#!" ><i class="fas fa-trash" style="color: red;"></i></a>
										</td>
									</tr>
									<?php endforeach; ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

  </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  <?php $this->load->view('admin/_partials/footer') ?>


    </div>
    <!-- End of Content Wrapper -->

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