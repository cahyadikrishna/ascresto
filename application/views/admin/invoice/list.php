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

          <!-- DataTables Example -->
          <div class="animated wow fadeInLeft card mb-3" data-wow-duration="1000ms" data-wow-delay="100ms">
            <div class="card-header">
             <i class="fas fa-file-invoice"></i>
              Data Table Invoice</div>
            <div class="card-body">
            
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    
                    <tr>
                      <th>Invoice ID</th>
                      <th>Username</th>
                      <th>Date</th>
                      <th>Due Date</th>
                       <th>Order Time</th>
                      <th>Status</th>
                      <th>Action Button</th>
                     
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Invoice ID</th>
                       <th>Username</th>
                      <th>Date</th>
                      <th>Due Date</th>
                      <th>Order Time</th>
                      <th>Status</th>
                      <th>Action Button</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    
                    <?php foreach ($invoice as $row): ?>
                  <tr>
                    <td width="100" align="center">
                      <?php echo $row->id ?>
                    </td>
                     <td width="100" align="center">
                      <?php echo $row->username ?>
                    </td>
                    <td width="160">
                      <?php echo date('d F Y', strtotime($row->date)) ?>
                    </td>
                    <td width="150">
                        <?php echo date('d F Y', strtotime($row->due_date)) ?>
                    </td>
                    <td width="150">
                        <?php echo time_ago($row->date) ?>
                    </td>
                   <td width="150" align="center">
                        <?php echo $row->status ?>
                    </td>
                    <td width="150" align="center">
                      <a href="<?php echo site_url('admin/invoice/detail/'.$row->id) ?>"
                       class="btn btn-small" style="color:royalblue;"><i class="fas fa-file-invoice-dollar"></i> Detail</a>

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