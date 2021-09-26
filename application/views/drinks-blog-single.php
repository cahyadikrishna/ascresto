<!DOCTYPE html>
<html lang="en">

  <?php $this->load->view('partials/head') ?>

  <body>
     <?php $this->load->view('partials/nav') ?>
    <!-- END nav -->

    <!-- END nav -->

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(<?php echo base_url('assets/template/front/images/bg1.jpg')?>);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Blog Details</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo site_url('home') ?>">Home</a></span> <span class="mr-2"><a href="<?php echo site_url('blog') ?>">Blog</a></span> <span>Blog Details</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            <h3>How To Make :</h3>
            <h2 class="mb-3"><?php echo $detail->drinks_name ?></h2>
            <p>
              <img src="<?php echo base_url('upload/drinks/'.$detail->drinks_img) ?>" alt="" class="img-fluid">
            </p>
            
            <p><?php echo nl2br(htmlspecialchars($detail->drinks_desc )); ?></p>
          

  <div class="pt-5 mt-5">
              <h3 class="mb-5" style="border-bottom: 3px solid #c4c4c4;">Comment <span class="icon-chat"></span></h3>
              <ul class="comment-list">
                  <div class="comment-body">
                   <?php echo $disqus ?>
                  </div>       
                  </ul>
            </div>

          </div> <!-- .col-md-8 -->
          <div class="col-md-4 sidebar ftco-animate">

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

            <div class="sidebar-box ftco-animate">
              <h3>About Us</h3>
              <p>We are Asciente Resto, we prioritize delicious and quality food and the convenience of our customers to maintain the title of our resto.</p>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->
  
      <?php $this->load->view('partials/footer') ?>
  

    <?php $this->load->view('partials/js') ?>
    
  </body>
</html>