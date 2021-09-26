<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
<!DOCTYPE html>
<html lang="en">

   <?php $this->load->view('partials/head') ?>

  <body>
     <?php $this->load->view('partials/nav') ?>
    <!-- END nav -->
    <!-- END nav -->

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(<?php echo base_url('assets/template/front/images/bg_3.jpg')?>);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Contact Us</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo site_url('home') ?>">Home</a></span> <span>Contact</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

      <?php echo form_open('contact/sent_mail');?>

    <section class="ftco-section contact-section">
      <div class="container mt-5">
        <div class="row block-9">
					<div class="col-md-4 contact-info ftco-animate">
						<div class="row">
							<div class="col-md-12 mb-4">
	              <h2 class="h4">Contact Information</h2>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Address :</span> 55 West, Dewi Sri Street, Gianyar, Bali, Indonesia</p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Phone :</span> <a href="tel://+62 361 888 123 456"> +62 361 888 123 456 </a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Email :</span> <a href="mailto:ascresto@gmail.com">ascresto@gmail.com</a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Website :</span> <a href="#">www.ascresto.com</a></p>
	            </div>
						</div>
					</div>
					<div class="col-md-1"></div>
          <div class="col-md-6 ftco-animate">
            <form action="<?php base_url('contact/sent_mail'); ?>" method="post" enctype="multipart/form-data" class="contact-form">
            	<div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Name" name="username">
                     <?php echo form_error('username') ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Email" name="email">
                     <?php echo form_error('email') ?>
                  </div>
                  </div>
                  </div>
              <div class="form-group">
                <input type="text" name="mail_title" class="form-control <?php echo form_error('mail_title') ? 'is-invalid':'' ?>" placeholder="Subject">
                <?php echo form_error('mail_title') ?>
              </div>
              <div class="form-group">
                <textarea name="mail_desc" id="" cols="30" rows="7" class="form-control <?php echo form_error('mail_desc') ? 'is-invalid':'' ?>" placeholder="Message"></textarea>
                <?php echo form_error('mail_desc') ?>
              </div>
              <div class="form-group">
                <input type="submit" name="btn" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
            <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
     <?php echo form_close();?>


    <div id="map"></div>

    <?php $this->load->view('partials/footer') ?>
  

    <?php $this->load->view('partials/js') ?>
    
  </body>
</html>