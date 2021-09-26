<!DOCTYPE html>
<html lang="en">

   <?php $this->load->view('admin/_partials/head') ?>

<body class="bg-gradient-primary">

    <?php echo form_open('admin/login');?>

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block" style="background-image: url(<?php echo base_url('assets/template/front/images/dessert-2.jpg') ?>);"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login Admin | Asciente Resto</h1>
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" value="<?php echo set_value('username'); ?>" required="required" />
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" value="<?php echo set_value('password'); ?>" required="required"/>
                    </div>
                
                      <input class="btn btn-primary btn-block" type="submit" name="btnSubmit" value="Login" />
                        
                        <hr>
                    <a href="<?php echo site_url('home') ?>" class="btn btn-facebook btn-user btn-block">
                    <i class="fas fa-home"></i> Home
                    </a>
                  </form>

                  <hr>
                  <div class="text-center">
                      <?php
      if($this->session->flashdata('sukses')) {
           echo '<p class="warning" style="color: red;margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
      }
      ?>
                  </div>
                  <div class="text-center">
                      <a class="d-block small mt-3"><?php echo anchor('admin/register','Create an Account <b>!</b>'); ?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <?php echo form_close();?>

  <?php $this->load->view('admin/_partials/js') ?>

</body>

</html>
