<!DOCTYPE HTML>
<html>
	<?php $this->load->view('partials/head') ?>
	<body>

	<?php $this->load->view('partials/nav') ?>
	
	<div id="colorlib-page">

			<?php $this->load->view('partials/header') ?>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(<?php echo base_url('assets/template/front/images/img_bg_4.jpg') ?>);" data-stellar-background-ratio="0.5">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
				   						<span class="icon"><i class="icon-spoon-knife"></i></span>
					   					<h1>Delicious Specialties</h1>
					   					<p><span><a href="index.html">Home</a></span> <span>Specialties</span></p>
					   					<div class="desc2"></div>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<?php $this->load->view('partials/bar') ?>

		<div class="colorlib-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
						<span class="icon"><i class="icon-spoon-knife"></i></span>
						<h2>Our Delicious Specialties</h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
					</div>
				</div>
				<div class="row">

						<?php foreach ($food as $food): ?>
					<div class="col-md-4 animate-box">
						<div class="dish-wrap">
							<p class="price"><span>RP. <?php echo number_format($food->food_price,0,",",".")?></span></p>
							<div class="addtocart">
								<div class="dis-tc">
									<span><a href="<?php echo site_url('specialties/add_to_cart/'.$food->food_id) ?>"><i class="icon-shopping-cart"></i></a></span>
									<span><a href="#"><i class="icon-search3"></i></a></span>
								</div>
							</div>
							<div class="wrap">
								<div class="dish-img" style="background-image: url(<?php echo base_url('upload/food/'.$food->food_img) ?>);"></div>
								<div class="desc">
									<h2><a href="#"><?php echo $food->food_name ?></a></h2>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>

					<?php foreach ($drinks as $drinks): ?>
					<div class="col-md-4 animate-box">
						<div class="dish-wrap">
							<p class="price"><span>Rp. <?php echo number_format($drinks->drinks_price,0,",",".")?></span></p>
							<div class="addtocart">
								<div class="dis-tc">
									<span><a href="#"><i class="icon-shopping-cart"></i></a></span>
									<span><a href="#"><i class="icon-search3"></i></a></span>
								</div>
							</div>
							<div class="wrap">
								<div class="dish-img" style="background-image: url(<?php echo base_url('upload/drinks/'.$drinks->drinks_img) ?>);"></div>
								<div class="desc">
									<h2><a href="#"><?php echo $drinks->drinks_name ?></a></h2>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
			

					
				</div>
			</div>
		</div>

			
	<?php $this->load->view('partials/footer') ?>

	</div>

	
		<?php $this->load->view('partials/js') ?>

	</body>
</html>

