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
           
          </div>
          <!-- DataTales Example -->
          <div class="animated wow fadeInLeft card shadow mb-4" data-wow-duration="1000ms" data-wow-delay="100ms">
            <div class="card-header">
              <i class="fas fa-user"></i>
              Data Table Mail</div>
            <div class="card-body">
            <div class="card-body">
              <div class="table-responsive">
                <table class=" table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                    <thead>
                    
                    <tr>
                       
                      <th>Mail ID</th>
                      <th>Username</th>
                        <th>Mail Title</th>
                      <th>Message</th>
                      <th>Mail Date</th>
                     
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>Mail ID</th>
                  <th>Username</th>
                        <th>Mail Title</th>
                      <th>Message</th>
                      <th>Mail Date</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    
                    <?php foreach ($mailList as $mlist): ?>
                  <tr>
                    <td width="180">
                      <?php echo $mlist->mail_id ?>
                    </td>
                    <td width="180">
                      <?php echo $mlist->username ?>
                    </td>
                    <td width="100">
                      <?php echo $mlist->mail_title ?>
                    </td>
                    <td width="220">
                      <?php echo $mlist->mail_desc ?>
                    </td>
                    <td width="150" style="text-align: center;">
                    <?php echo date('d F Y', strtotime($mlist->mail_date)) ?>
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

