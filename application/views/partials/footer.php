<footer class="ftco-footer ftco-section img">
      <div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>We are Asciente Resto, we prioritize delicious and quality food and the convenience of our customers to maintain the title of our resto.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
                <?php foreach ($footblog as $foot): ?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?php echo base_url('upload/food/'.$foot->food_img) ?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="<?php echo site_url('blog/food/'.$foot->food_id) ?>">How To Cook <?php echo $foot->food_name ?></a></h3>
                  <div class="meta">
                    <div><a href=""><span class="icon-calendar"></span> <?php echo date('d F Y', strtotime($foot->food_date))?></a></div>
                    <div><a title="author" href=""><span class="icon-person"></span> AscResto</a></div>
                  </div>
                </div>
              </div>
                 <?php endforeach; ?>
      
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="<?php echo site_url('menu') ?>" class="py-2 d-block">Menu</a></li>
                <li><a href="<?php echo site_url('shop') ?>" class="py-2 d-block">Shop</a></li>
                <li><a href="<?php echo site_url('shop/cart') ?>" class="py-2 d-block">Cart list</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">55 Dewi Sri Street, Gianyar, Bali, Indonesia</span></li>
                  <li><a href="tel://+62 361 888 123 456"><span class="icon icon-phone"></span><span class="text">+62 361 888 123 456 </span></a></li>
                  <li><a href="mailto:ascresto@gmail.com"><span class="icon icon-envelope"></span><span class="text">ascresto@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy; <script>document.write(new Date().getFullYear());</script> Asciente Resto || All rights reserved, coffe Theme by <a style="border-bottom: 1px solid #fff;" href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>


   
