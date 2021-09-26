      <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('admin') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
         <img src="<?php echo base_url('img/fav.png') ?>" style="width: 50px; height: 50px;">
        </div>
         <div class="sidebar-brand-text mx-3">Asciente Resto</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php echo $this->uri->segment(2) == 'dashboard' ? 'active': '' ?> <?php echo $this->uri->segment(2) == '' ? 'active': '' ?> ">
        <a class="nav-link" href="<?php echo site_url('admin/dashboard') ?>">
          <i class="fas fa-home"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item <?php echo $this->uri->segment(2) == 'kategori' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/kategori') ?>">
         <i class="fas fa-list-ul"></i>
          <span>Kategori</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item <?php echo $this->uri->segment(2) == 'food' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/food') ?>">
      <i class="fas fa-utensils"></i>
          <span>Food</span></a>
      </li>

    <!-- Nav Item - Tables -->
      <li class="nav-item <?php echo $this->uri->segment(2) == 'drinks' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/drinks') ?>">
          <i class="fas fa-glass-cheers"></i>
          <span>Drinks</span></a>
      </li>

       <!-- Nav Item - Tables -->
      <li class="nav-item <?php echo $this->uri->segment(2) == 'invoice' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/invoice') ?>">
         <i class="fas fa-file-invoice"></i>
          <span>Invoices</span></a>
      </li>

        <!-- Nav Item - Tables -->
      <li class="nav-item <?php echo $this->uri->segment(2) == 'users' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/users') ?>">
          <i class="fas fa-user"></i>
          <span>Users</span></a>
      </li>

       <li class="nav-item <?php echo $this->uri->segment(2) == 'mail' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/mail') ?>">
          <i class="fas fa-envelope"></i>
          <span>Mail</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->