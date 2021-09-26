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
            	<h1 class="mb-3 mt-5 bread">Cart</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo site_url('home') ?>">Home</a></span> <span>Cart</span></p>
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
                         <?php if ($this->cart->contents()): ?>
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Menu</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
                    <?php foreach ($this->cart->contents() as $items): ?>
						      <tr class="text-center">
						        <td class="product-remove"><a href="<?php echo site_url('shop/remove_food/'.$items['rowid']) ?>"><span class="icon-close"></span></a></td>
						        
						        <td class="image-prod">

                      <div class="img" style="background-image:url(<?php echo base_url() . 'upload/food/'.$items['gambar']; ?>); "><div class="img" style="background-image:url(<?php echo base_url() . 'upload/drinks/'.$items['gambar']; ?>);"></div></div>


                    </td>
						        
						        <td class="product-name">
						        	<h3><?php echo $items['name'] ?></h3>
						        	<p><?php echo substr($items['description'], 0, 50) ?></p>
						        </td>
						        
						        <td class="price"><?php echo number_format($items['price'],0,",","." )?> IDR</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="<?php echo $items['qty'] ?>" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total"><?php echo number_format($items['subtotal'],0,",",".") ?> IDR</td>
						      </tr><!-- END TR-->
                      <?php endforeach; ?>
						    </tbody>
						  </table>
                <?php else : ?>
                     <p align="center">Your Cart Is Empty...</p>
                      <?php endif ; ?>
                
					  </div>
    			</div>
    		</div>
        <div class="mt-3 mb-3">
        <tr>
        <td>
        <a href="<?php echo site_url('shop')  ?>" class="btn btn-white btn-outline-white p-2 px-xl-2 py-xl-2">Continue Shopping</a> 
        <a href="<?php echo site_url('customer/shopping_history')  ?>" class="btn btn-primary p-2 px-xl-2 py-xl-2">Shopping History</a>
      </td>
        </tr>
      </div>
    		<div class="row justify-content-end">
    			<div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>- IDR</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span>- IDR</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span><?php echo number_format($this->cart->total(),0,",","."); ?> IDR</span>
    					</p>
    				</div>
    				<p class="text-center"><a href="<?php echo site_url('order')  ?>" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
    		</div>
			</div>
		</section>

      <?php $this->load->view('partials/footer') ?>


    <?php $this->load->view('partials/js') ?>
    
  </body>
</html>