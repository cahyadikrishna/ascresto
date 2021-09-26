<!DOCTYPE html>
<html lang="en">
  <?php $this->load->view('partials/head') ?>
  <body>
    <?php $this->load->view('partials/nav') ?>
    <!-- END nav -->

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(<?php echo base_url('img/raspberries.jpg')?>);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Blog</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo site_url('home') ?>">Home</a></span> <span>Blog</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">

            <?php foreach ($food as $row): ?>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="<?php echo site_url('blog/food/'.$row->food_id) ?>" class="block-20" style="background-image: url(<?php echo base_url('upload/food/'.$row->food_img) ?>);">
              </a>
              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a href="<?php echo site_url('blog/food/'.$row->food_id) ?>"><?php echo date('d F Y', strtotime($row->food_date))?></a></div>|
                  <div><a title="author">AscResto</a></div>
                </div>
                <h3 class="heading mt-2"><a href="<?php echo site_url('blog/food/'.$row->food_id) ?>"><?php echo $row->food_name ?></a></h3>
                <p><?php echo substr($row->food_desc,0 , 150) ?>. . .</p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

        <?php foreach ($drinks as $drik): ?>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="<?php echo site_url('blog/drinks/'.$drik->drinks_id) ?>" class="block-20" style="background-image: url(<?php echo base_url('upload/drinks/'.$drik->drinks_img) ?>);">
              </a>
              <div class="text py-4 d-block">
                <div class="meta">
                  <div><a href="<?php echo site_url('blog/drinks/'.$drik->drinks_id) ?>"><?php echo date('d F Y', strtotime($drik->drinks_date)) ?></a></div>|
                  <div><a title="author">AscResto</a></div>
                </div>
                <h3 class="heading mt-2"><a href="<?php echo site_url('blog/drinks/'.$drik->drinks_id) ?>"><?php echo $drik->drinks_name ?></a></h3>
                <p><?php echo substr($drik->drinks_desc,0 , 150) ?>. . .</p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>


        </div>
        </div>
      </div>
    </section>

     <?php $this->load->view('partials/footer') ?>


    <?php $this->load->view('partials/js') ?>
    
  </body>
</html>