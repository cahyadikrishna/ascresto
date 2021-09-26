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
            	<h1 class="mb-3 mt-5 bread">Shopping History</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo site_url('home') ?>">Home</a></span> <span>Shopping History</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">

              <?php if($history != false): ?>
              <h4 style="color: #fff;"><?=$this->session->flashdata('message') ?></h4>
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>Invoice ID #</th>
						        <th>Invoice Date</th>
						        <th>Due Date</th>
						        <th>Total Amount</th>
                    <th>Status</th>
                    <th>Payment</th>
						      </tr>
						    </thead>
						    <tbody>
                    <?php foreach ($history as $row): ?>
						      <tr class="text-center">

						      <td class="price">#<?php echo $row->id ?></td>

                  <td class="price"><?php echo date('d F Y', strtotime($row->date)) ?></td>

                    <td class="price"><?php echo date('d F Y', strtotime($row->due_date)) ?></td>

                        <td class="price"><?php echo number_format($row->total,0,",",".") ?> IDR</td>

                          <td class="price"><?php echo $row->status ?></td>

                           <td class="payment">
                            <a href="
                            <?php
                              if($row->status == 'unpaid'){
                             echo site_url('customer/payment_confirmation/'.$row->id); } ?>" class="btn btn-primary p-2 px-xl-2 py-xl-2">Confirmation Payment</a></td>

						      </tr><!-- END TR-->
                      <?php endforeach; ?>
                  
						    </tbody>
						  </table>
              <?php else : ?>
                <p align="center">There are no shopping history for you...</p>
                 <?php endif; ?>
					  </div>
    			</div>
    		</div>
        <div class="mt-3 mb-3">
        <tr>
        <td>
         <a href="<?php echo site_url('shop')  ?>" class="btn btn-white btn-outline-white p-2 px-xl-3 py-xl-3 ftco-animate">Continue Shopping</a> 
      </td>
        </tr>
      </div>
			</div>
		</section>

      <?php $this->load->view('partials/footer') ?>


    <?php $this->load->view('partials/js') ?>
    
  </body>
</html>