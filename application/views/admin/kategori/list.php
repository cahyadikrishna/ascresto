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
            <a href="<?php echo site_url('admin/kategori/add') ?>" class="btn btn-info"><i class="fas fa-plus"></i> Add New</a>  
          </div>

          <!-- DataTales Example -->
          <div class="animated wow fadeInLeft card shadow mb-4" data-wow-duration="1000ms" data-wow-delay="100ms">
            <div class="card-header">
             <i class="fas fa-list-ul"></i>
              Data Table Kategori</div>
            <div class="card-body">
          
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    
                    <tr>
                      <th>Kategori ID</th>
                      <th>Kategori Name</th>
                       <th>Action Button</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>Kategori ID</th>
                      <th>Kategori Name</th>
                       <th>Action Button</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    
                    <?php foreach ($kategori as $kategori): ?>
                  <tr>
                    <td width="100">
                      <?php echo $kategori->kategori_id ?>
                    </td>
                    <td width="150">
                      <?php echo $kategori->kategori_name ?>
                    </td>

                    <td width="100" align="center">
                      <a href="<?php echo site_url('admin/kategori/edit/'.$kategori->kategori_id) ?>"><i class="fas fa-edit"></i></a>&nbsp

                  <a onclick="deleteConfirm('<?php echo site_url('admin/kategori/delete/'.$kategori->kategori_id) ?>')"
                       href="#!"><i class="fas fa-trash" style="color: red;"></i></a>
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