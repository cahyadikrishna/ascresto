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
            <a href="<?php echo site_url('admin/food/add') ?>" class="btn btn-info"><i class="fas fa-plus"></i> Add New</a>  
          </div>
          <!-- DataTales Example -->
          <div class="animated wow fadeInLeft card shadow mb-4" data-wow-duration="1000ms" data-wow-delay="100ms">
            <div class="card-header">
              <i class="fas fa-utensils"></i>
              Data Table Foods</div>
            <div class="card-body">
            <div class="card-body">
              <div class="table-responsive">
                <table class=" table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                    <thead>
                    
                    <tr>
                      <th>Food Image</th>
                      <th>Food Name</th>
                        <th>Food Category</th>
                      <th>Food Description</th>
                      <th>Food Price</th>
                         <th>Food Time</th>
                      <th>Action Button</th>
                     
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Food Image</th>
                      <th>Food Name</th>
                       <th>Food Category</th>
                      <th>Food Description</th>
                      <th>Food Time</th>
                      <th>Upload Price</th>
                      <th>Action Button</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    
                    <?php foreach ($food as $food): ?>
                  <tr>
                    <td width="120">
                      <img src="<?php echo base_url('upload/food/'.$food->food_img) ?>" width="120" />
                    </td>
                    <td width="180">
                      <?php echo $food->food_name ?>
                    </td>
                    <td width="100">
                      <?php echo $food->kategori_name ?>
                    </td>
                    <td width="220">
                      <?php echo substr($food->food_desc, 0, 50) ?>...
                    </td>
                    <td width="150" style="text-align: center;">
                    <?php echo number_format($food->food_price,0,",","." )?> IDR
                    </td>

                    <td width="100">
                     <?php echo date('d F Y', strtotime($food->food_date)) ?>
                    </td>

                    <td align="center" width="210">
                      <a href="<?php echo site_url('admin/food/edit/'.$food->food_id) ?>"><i class="fas fa-edit"></i></a>&nbsp

                  <a onclick="deleteConfirm('<?php echo site_url('admin/food/delete/'.$food->food_id) ?>')" href="#!" ><i class="fas fa-trash" style="color: red;"> </i></a>
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
