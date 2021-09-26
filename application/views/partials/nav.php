	  
     <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="<?php echo site_url('home') ?>">Asciente<small>Resto</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php echo $this->uri->segment(1) == 'home' ? 'active': '' ?> <?php echo $this->uri->segment(1) == '' ? 'active': '' ?>"> <a href="<?php echo site_url('home') ?>" class="nav-link">Home</a></li>
            <li class="nav-item <?php echo $this->uri->segment(1) == 'menu' ? 'active': '' ?>"><a href="<?php echo site_url('menu') ?>" class="nav-link">Menu</a></li>
            <li class="nav-item <?php echo $this->uri->segment(1) == 'blog' ? 'active': '' ?>"><a href="<?php echo site_url('blog') ?>" class="nav-link">Blog</a></li>

            <li class="nav-item <?php echo $this->uri->segment(1) == 'about' ? 'active': '' ?>"><a href="<?php echo site_url('about') ?>" class="nav-link">About</a></li>

             <li class="nav-item <?php echo $this->uri->segment(1) == 'shop' ? 'active': '' ?>"><a href="<?php echo site_url('shop') ?>" class="nav-link">Shop</a></li>

            <li class="nav-item <?php echo $this->uri->segment(1) == 'contact' ? 'active': '' ?>"><a href="<?php echo site_url('contact') ?>" class="nav-link">Contact</a></li>
             
            <li class="nav-item cart"><a href="<?php echo site_url('shop/cart') ?>" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small><?php echo $this->cart->total_items(); ?></small></span></a></li>

                 <?php if($this->session->userdata('username')) { ?>
          <li class="nav-item" style=" padding: 14px 7px;"><a style="font-weight: bold; text-transform: uppercase;" title="user" href="<?php echo site_url('customer/shopping_history')  ?>" class="btn btn-white btn-outline-white p-2 px-xl-4 py-xl-2"><span class="icon-user"></span> <?=$this->session->userdata('username') ?></a></li>

            <li class="nav-item" style=" padding: 14px 7px;"><a style="font-weight: bold;" href="<?php echo site_url('logout') ?>" class="btn btn-primary p-2 px-xl-4 py-xl-2">LOGOUT</a></li>
                <?php } else { ?>
               <li class="nav-item" style=" padding: 14px 7px;"><a style="font-weight: bold;" href="<?php echo site_url('login') ?>" class="btn btn-primary p-2 px-xl-4 py-xl-2">LOGIN</a></li>
              <?php } ?>



          </ul>
        </div>
      </div>
    </nav>