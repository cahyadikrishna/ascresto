<!DOCTYPE html>
<html lang="en">

  <?php $this->load->view('partials/head') ?>
  <body>
    <?php $this->load->view('partials/nav') ?>

    <!-- END nav -->

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(<?php echo base_url('img/strawberry.jpg')?>);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Checkout</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo site_url('home') ?>">Home</a></span> <span>Payment Confirmation</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 ftco-animate">

	        <?php echo form_open('customer/payment_confirmation/'); ?>  	
	          <div class="row mt-5 pt-3 d-flex">
	          	<div class="col-md-6 d-flex">
	          		<div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
	          				<form action="#" class="billing-form ftco-bg-dark p-3 p-md-5">
	          			<h3 class="billing-heading mb-4">Cart Info</h3>
	          			<p class="d-flex">

	          				 <div class="form-group">
	                	<label for="firstname">Invoice ID</label>
	                  <input type="text" name="invoice_id" class="form-control" value="<?=($invoice_id != 0?$invoice_id:'')?>" placeholder="">
	                </div>
		    					</p>
		    					<br>
		    					<div class="form-group">
	                	<label style="font-size: 20px; color: #fff;">Amount Transfered</label>
	                  <input type="text" class="form-control" name="amount" placeholder="Input the total amount" >
	                </div>

	                                 <div class="text-center" style="color: red;">     
 							 <?=validation_errors() ?>
                 				 </div>

                 					 <div class="text-center" style="color: red;">
                     			 <?=$this->session->flashdata('error'); ?>

                 					 </div>

		    					<p><input type="submit" class="btn btn-primary py-3 px-4" value="Confirm My Payment"></p>
		    				</form>
								</div>
	          	</div>
	          
	          </div>
	            <?php echo form_close();?>
          </div> <!-- .col-md-8 -->




          <div class="col-xl-4 sidebar ftco-animate">

             <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>

              <?php foreach ($foodrecentblog as $foodrecent): ?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?php echo base_url('upload/food/'.$foodrecent->food_img) ?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="<?php echo site_url('blog/food/'.$foodrecent->food_id) ?>">How To Make <?php echo $foodrecent->food_name ?></a></h3>
                  <div class="meta">
                    <div><a><span class="icon-calendar"></span> <?php echo tanggal($foodrecent->food_date)?></a></div>
                    <div><a href="" title="author"><span class="icon-person"></span> AscResto</a></div>
                  </div>
                </div>
              </div>
                 <?php endforeach; ?>

                  <?php foreach ($drinksrecentblog as $drinksrecent): ?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?php echo base_url('upload/drinks/'.$drinksrecent->drinks_img) ?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="<?php echo site_url('blog/drinks/'.$drinksrecent->drinks_id) ?>">How To Make <?php echo $drinksrecent->drinks_name ?></a></h3>
                  <div class="meta">
                    <div><a><span class="icon-calendar"></span> <?php echo tanggal($drinksrecent->drinks_date)?></a></div>
                    <div><a href="" title="author"><span class="icon-person"></span> AscResto</a></div>
                  </div>
                </div>
              </div>
                 <?php endforeach; ?>
             
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->

     <?php $this->load->view('partials/footer') ?>


    <?php $this->load->view('partials/js') ?>

    
  </body>
</html>