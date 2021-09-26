<!DOCTYPE html>
<html lang="en">
  <?php $this->load->view('partials/head') ?>
  <body>
  	<?php $this->load->view('partials/nav') ?>
	
    <!-- END nav -->

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(<?php echo base_url('assets/template/front/images/bg2.jpg')?>);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Our Menu</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo site_url('home') ?>">Home</a></span> <span>Menu</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

     <section class="ftco-intro">
      <div class="container-wrap">
        <div class="wrap d-md-flex align-items-xl-end">
          <div class="info">
            <div class="row no-gutters">
              <div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><span class="icon-phone"></span></div>
                <div class="text">
                  <h3>+62 361 888 123 456 </h3>
                  <p>We are Asciente Resto, We Swear By The Pledge</p>
                </div>
              </div>
              <div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><span class="icon-my_location"></span></div>
                <div class="text">
                  <h3>55 West</h3>
                  <p> 55 Dewi Sri Street, Gianyar, Bali, Indonesia </p>
                </div>
              </div>
              <div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><span class="icon-clock-o"></span></div>
                <div class="text">
                  <h3>Open Monday-Friday</h3>
                  <p>8:00am - 10:00pm</p>
                </div>
              </div>
            </div>
          </div>
          <div class="book p-4">
            <h3>Book a Table</h3>
            <form action="#" class="appointment-form">
              <div class="d-md-flex">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group ml-md-4">
                  <input type="text" class="form-control" placeholder="Last Name">
                </div>
              </div>
              <div class="d-md-flex">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="ion-md-calendar"></span></div>
                    <input type="text" class="form-control appointment_date" placeholder="Date">
                  </div>
                </div>
                <div class="form-group ml-md-4">
                  <div class="input-wrap">
                    <div class="icon"><span class="ion-ios-clock"></span></div>
                    <input type="text" class="form-control appointment_time" placeholder="Time">
                  </div>
                </div>
                <div class="form-group ml-md-4">
                  <input type="text" class="form-control" placeholder="Phone">
                </div>
              </div>
              <div class="d-md-flex">
                <div class="form-group">
                  <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group ml-md-4">
                  <input type="submit" value="Appointment" class="btn btn-white py-3 px-4">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section">
    	<div class="container">
        <div class="row">
        
        	 <div class="sidebar-box">
             

              <form style="width: 55%;" class="search-form" <?php echo form_open('menu/search') ?> 
                <div class="form-group">
                  <div class="icon">
                    <span class="icon-search"></span>
                  </div>
                  <input type="text" name="keyword" class="form-control" placeholder="Search Menu name or kategori here...">
                </div>
              </form>
               <?php echo form_close() ?>
            </div>
          
        	<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Foods</h3>

        
						        <?php foreach ($food as $food): ?>	
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(<?php echo base_url('upload/food/'.$food->food_img) ?>);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span><?php echo $food->food_name ?></span></h3>
	        				<span class="price"><?php echo number_format($food->food_price,0,",",".")?> IDR</span>
	        			</div>
	        			<div class="d-block">
	        				<p><span class="icon-attachment"></span> <?php echo $food->kategori_name ?></p>
	        			</div>
        			</div>
        		</div>

        			<?php endforeach; ?>

        		        	</div>

        	<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Drinks</h3>

        		<?php foreach ($drinks as $drinks): ?>	
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(<?php echo base_url('upload/drinks/'.$drinks->drinks_img) ?>);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span><?php echo $drinks->drinks_name ?></span></h3>
	        				<span class="price"><?php echo number_format($drinks->drinks_price,0,",",".")?> IDR</span>
	        			</div>
	        			<div class="d-block">
	        				<p><span class="icon-attachment"></span> <?php echo $drinks->kategori_name ?></p>
	        			</div>
	        		</div>
        		</div>
        				<?php endforeach; ?>
        	</div>
        	</div>
        </div>
    </section>

    <section class="ftco-menu mb-5 pb-5">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">Our Products</h2>
            <p>try our best menu only the menu here is the most delicious and quality,The menu at Asciente Resto is made with love of the world's leading chefs. Let's enjoying the menu</p>
          </div>
        </div>
    		<div class="row d-md-flex">
	    	


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

		              		<?php foreach ($fod as $fod): ?>
		              		<div class="col-md-3">
						        		<div class="menu-entry"> 
						    					<a href="<?php echo site_url('blog/food/'.$fod->food_id) ?>" class="img" style="background-image: url(<?php echo base_url('upload/food/'.$fod->food_img) ?>);"></a>
						    					<div class="text text-center pt-4">
						    						<h3><a href="<?php echo site_url('blog/food/'.$fod->food_id) ?>"><?php echo $fod->food_name ?></a></h3>
						    						<p><?php echo substr($fod->food_desc, 0, 50) ?>...</p>
						    						<p class="price"><span><?php echo number_format($fod->food_price,0,",",".")?> IDR</span></p>
						    						<p><a href="<?php echo site_url('shop/add_food/'.$fod->food_id) ?>" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
						    					</div>
						    				</div>
						        	</div>

						        	<?php endforeach; ?>
		

		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		                <div class="row">
		                		<?php foreach ($drik as $drik): ?>
		              	<div class="col-md-3">
						        		<div class="menu-entry">
						    					<a href="<?php echo site_url('blog/drinks/'.$drik->drinks_id) ?>" class="img" style="background-image: url(<?php echo base_url('upload/drinks/'.$drik->drinks_img) ?>);"></a>
						    					<div class="text text-center pt-4">
						    						<h3><a href="<?php echo site_url('blog/drinks/'.$drik->drinks_id) ?>"><?php echo $drik->drinks_name ?></a></h3>
						    						<p><?php echo substr($drik->drinks_desc, 0, 50) ?>...</p>
						    						<p class="price"><span><?php echo number_format($drik->drinks_price,0,",",".")?> IDR</span></p>
						    						<p><a href="<?php echo site_url('shop/add_drinks/'.$drik->drinks_id) ?>" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
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

    	</div>
    </section>

   
  <?php $this->load->view('partials/footer') ?>
    
 

  <?php $this->load->view('partials/js') ?>
	
    
  </body>
</html>