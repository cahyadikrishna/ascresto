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
            	<h1 class="mb-3 mt-5 bread">Order Online</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo site_url('home') ?>">Home</a></span> <span>Shop</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>


    <section class="ftco-menu mb-5 pb-5">
    	<div class="container">
    		<div class="row d-md-flex">
	    		<div class="col-lg-12 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		            	<a class="nav-link active" id="v-pills-0-tab" data-toggle="pill" href="#v-pills-0" role="tab" aria-controls="v-pills-0" aria-selected="true">Foods</a>

		              <a class="nav-link" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="false">Drinks</a>

		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-0" role="tabpanel" aria-labelledby="v-pills-0-tab">
		              	<div class="row">

		              		<?php foreach ($food as $food): ?>
		              		<div class="col-md-3">
						        		<div class="menu-entry"> 
						    					<a href="#" class="img" style="background-image: url(<?php echo base_url('upload/food/'.$food->food_img) ?>);"></a>
						    					<div class="text text-center pt-4">
						    						<h3><a href="product-single.html"><?php echo $food->food_name ?></a></h3>
						    						<p><?php echo substr($food->food_desc, 0, 50) ?>. . . </p>
						    						<p class="price"><span><?php echo number_format($food->food_price,0,",",".")?> IDR</span></p>
						    						<p><a href="<?php echo site_url('shop/add_food/'.$food->food_id) ?>" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
						    					</div>
						    				</div>
						        	</div>

						        	<?php endforeach; ?>
		

		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		                <div class="row">
		                		<?php foreach ($drinks as $drinks): ?>
		              	<div class="col-md-3">
						        		<div class="menu-entry">
						    					<a href="#" class="img" style="background-image: url(<?php echo base_url('upload/drinks/'.$drinks->drinks_img) ?>);"></a>
						    					<div class="text text-center pt-4">
						    						<h3><a href="product-single.html"><?php echo $drinks->drinks_name ?></a></h3>
						    						<p><?php echo substr($drinks->drinks_desc, 0, 50) ?>. . .</p>
						    						<p class="price"><span><?php echo number_format($drinks->drinks_price,0,",",".")?> IDR</span></p>
						    						<p><a href="<?php echo site_url('shop/add_drinks/'.$drinks->drinks_id) ?>" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
						    					</div>
						    				</div>
						        	</div>
		              			<?php endforeach; ?>

		              	
		              		</div>
		              	</div>
		              </div>

		             
		              	</div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>

    <?php $this->load->view('partials/footer') ?>


  <?php $this->load->view('partials/js') ?>
    
  </body>
</html>