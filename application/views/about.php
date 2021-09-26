<!DOCTYPE html>
<html lang="en">
  <?php $this->load->view('partials/head') ?>

  <body>
     <?php $this->load->view('partials/nav') ?>
    <!-- END nav -->
  
    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(<?php echo base_url('img/teapots.jpg')?>);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">About Us</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo site_url('home') ?>">Home</a></span> <span>About</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(<?php echo base_url('img/coffw.jpg')?>);"></div>
    	<div class="one-half ftco-animate">
    		<div class="overlap">
	        <div class="heading-section ftco-animate ">
	        	<span class="subheading">Discover</span>
	          <h2 class="mb-4">Our Story</h2>
	        </div>
	        <div>
	  				<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
	  			</div>
  			</div>
    	</div>
    </section>

    <section class="ftco-section img" id="ftco-testimony" style="background-image: url(<?php echo base_url('assets/template/front/images/bg4.jpg')?>);"  data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
	    <div class="container">
	      <div class="row justify-content-center mb-5">
	        <div class="col-md-7 heading-section text-center ftco-animate">
	        	<span class="subheading">Testimony</span>
	          <h2 class="mb-4">Customers Says</h2>
	          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	        </div>
	      </div>
	    </div>
	    <div class="container-wrap">
	       <div class="row d-flex no-gutters">

            <?php foreach ($mail as $ma): ?>
          <div class="col-lg align-self-sm-end ftco-animate">
            <div class="testimony">
               <blockquote>
                  <p>&ldquo; <?php echo $ma->mail_desc?> &rdquo;</p>
                </blockquote>
                <div class="author d-flex mt-4">
                  <div class="image mr-3 align-self-center">
                    <img src="images/person_1.jpg" alt="">
                  </div>
                  <div class="name align-self-center"><?php echo $ma->mail_title?> <span class="position"><?php echo $ma->username?></span></div>
                </div>
            </div>
          </div>
            <?php endforeach; ?>

         
        </div>
	    </div>
	  </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 pr-md-5">
            <div class="heading-section text-md-right ftco-animate">
              <span class="subheading">Discover</span>
              <h2 class="mb-4">Our Menu</h2>
              <p class="mb-4">Try our best menu only the menu here is the most delicious and quality,The menu at Asciente Resto is made with love of the world's leading chefs. Let's enjoying the menu</p>
              <p><a href="<?php echo site_url('menu') ?>" class="btn btn-primary btn-outline-primary px-4 py-3">View Full Menu</a></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">

                        <?php foreach ($fod as $row): ?>
              <div class="col-md-6">
                <div class="menu-entry">
                  <a href="<?php echo site_url('menu') ?>" class="img" style="background-image: url(<?php echo base_url('upload/food/'.$row->food_img) ?>);"></a>
                </div>
              </div>
                 <?php endforeach; ?>

                  <?php foreach ($drik as $row): ?>
              <div class="col-md-6">
                <div class="menu-entry mt-lg-4">
                  <a href="<?php echo site_url('menu') ?>" class="img" style="background-image: url(<?php echo base_url('upload/drinks/'.$row->drinks_img) ?>);"></a>
                </div>
              </div>
              <?php endforeach; ?>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(<?php echo base_url('img/coffe.jpg')?> );" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row">
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <div class="icon"><span class="icon-restaurant_menu"></span></div>
                    <strong class="number" data-number="<?php echo $jumFood; ?>">0</strong>
                    <span>Foods</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <div class="icon"><span class="icon-glass"></span></div>
                    <strong class="number" data-number="<?php echo $jumDrinks; ?>">0</strong>
                    <span>Drinks</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <div class="icon"><span class="icon-shopping_cart"></span></div>
                    <strong class="number" data-number="<?php echo $jumOrders; ?>">0</strong>
                    <span>Online Orders</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <div class="icon"><span class="icon-users"></span></div>
                    <strong class="number" data-number="<?php echo $jumUsers; ?>">0</strong>
                    <span>Happy Customers</span>
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