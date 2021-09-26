<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
<!DOCTYPE html>
<html lang="en">

   <?php $this->load->view('admin/_partials/head') ?>

<body class="bg-gray-900">

    <?php echo form_open('register');?>

  <div class="container">


        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block "style="background-image: url(<?php echo base_url('assets/template/front/images/image_6.jpg') ?>);"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account | Asciente Resto</h1>
              </div>
              <form action="<?php base_url('register') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="username" required="required" class="form-control form-control-user" id="exampleFirstName" placeholder="Username" value="<?php echo set_value('username'); ?>" />
                      <?php echo form_error('username'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Phone number" required="required" name="telp_users" value="<?php echo set_value('telp_users'); ?>" />
                    <?php echo form_error('telp_users'); ?>
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" required="required" name="email" value="<?php echo set_value('email'); ?>"/>
                  <?php echo form_error('email'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required="required" name="password" value="<?php echo set_value('password'); ?>"/>
                    <?php echo form_error('password'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Confirm password" required="required" name="password_conf" value="<?php echo set_value('password_conf'); ?>"/>
                     <?php echo form_error('password_conf'); ?>
                  </div>
                </div>
              
               <input class="btn btn-primary btn-block" type="submit" name="btnSubmit" value="Register" />
                <hr>
                  <a href="<?php echo site_url('home') ?>" class="btn btn-facebook btn-user btn-block">
                    <i class="fas fa-home"></i> Home
                    </a>
              </form>
              <hr>

              <div class="text-center">
                   <a class="d-block small mt-3"><?php echo anchor('login','Login Page'); ?></a>
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
