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
          <!-- Page Heading -->
    <?php $this->load->view('admin/_partials/breadcrumb') ?>


          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Foods</div>
                      <div class="animated wow bounce h5 mb-0 font-weight-bold text-gray-800" data-wow-duration="1000ms" data-wow-delay="500ms"><?php echo $jumFood; ?> Food</div>
                    </div>
                    <div class="col-auto">
                 <i class="fas fa-utensils fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Drinks</div>
                      <div class="animated wow bounce h5 mb-0 font-weight-bold text-gray-800" data-wow-duration="1000ms" data-wow-delay="500ms"><?php echo $jumDrinks; ?> Drinks</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-glass-cheers fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Users</div>
                      <div class="animated wow bounce h5 mb-0 font-weight-bold text-gray-800" data-wow-duration="1000ms" data-wow-delay="500ms"><?php echo $jumUsers; ?> Users</div>
                    </div>
                    <div class="col-auto">
                     <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Orders</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumOrders; ?> Menu Ordered</div>
                    </div>
                    <div class="col-auto">
                     <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row --><div >
           <ul class="nav nav-pills mb-3"  id="pills-tab" role="tablist" >
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-foods" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fas fa-utensils"></i> Foods</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-drinks" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fas fa-glass-cheers"></i> Drinks</a>
  </li>
</ul>
</div>


<div class="animated wow fadeInLeft tab-content" id="pills-tabContent" data-wow-duration="1000ms" data-wow-delay="100ms">
  <div class="tab-pane fade show active" id="pills-foods" role="tabpanel" aria-labelledby="pills-home-tab"> 

    <div class="row">
<?php foreach ($food as $food): ?>
            <div class="col-lg-4 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-history"></i> Last Update </h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 26rem; height: 150px;" src="<?php echo base_url('upload/food/'.$food->food_img) ?>" alt="">
                  </div>
                    <P><i class="far fa-clock"></i> <?php echo time_ago($food->food_date); ?></P>
                  <span style="font-weight: bold; color:royalblue;"><?php echo $food->food_name ?></span>
                     <P><i class="fas fa-thumbtack"></i> <?php echo $food->kategori_name; ?></P>
                <p><?php echo number_format($food->food_price,0,",",".") ?> IDR</p>
                  <p  ><?php echo substr($food->food_desc, 0, 130) ?>...</p>
                  <a href="<?php echo site_url('admin/food/edit/'.$food->food_id) ?>"><input class="btn btn-info" type="submit" name="btn" value="Edit" /></a>
                </div>
              </div>

            </div>

              <?php endforeach; ?>
          </div>

        </div>

  <div class="tab-pane fade" id="pills-drinks" role="tabpanel" aria-labelledby="pills-contact-tab">
    
      <div class="row">
          
<?php foreach ($drinks as $drinks): ?>
            <div class="col-lg-4 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-history"></i> Last Update</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem; height: 170px;" src="<?php echo base_url('upload/drinks/'.$drinks->drinks_img) ?>" alt="">
                  </div>
                  <P><i class="far fa-clock"></i> <?php echo time_ago($drinks->drinks_date); ?></P>
                  <span style="font-weight: bold; color: royalblue;"><?php echo $drinks->drinks_name ?></span>
                   <P><i class="fas fa-thumbtack"></i> <?php echo $drinks->kategori_name; ?></P>
                     <p> <?php echo number_format($drinks->drinks_price,0,",","." )?> IDR</p>
                  <p ><?php echo substr($drinks->drinks_desc, 0, 100) ?>...</p> 
                  <a href="<?php echo site_url('admin/drinks/edit/'.$drinks->drinks_id) ?>"><input class="btn btn-info" type="submit" name="btn" value="Edit" /></a>

                </div>
              </div>

            </div>

              <?php endforeach; ?>
          </div>

  </div>
</div>

  



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
    <?php $this->load->view('admin/_partials/footer') ?>
      <!-- End of Footer -->

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


