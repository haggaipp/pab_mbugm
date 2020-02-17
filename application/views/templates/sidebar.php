<!-- Page Wrapper -->
  <div id="wrapper">

  	  <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user');?>">
        <div class="sidebar-brand-text mx-1">PAB MBUGM</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">
     
      <!-- Heading -->
      <div class="sidebar-heading">
        Admin
      </div>
     
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('menu/dashboard');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Pendaftaran
      </div>
      
      <!-- Nav Item - My Profile -->
      <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('menu/daftar');?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Data Pendaftar</span></a>
      </li>

       <!-- Nav Item - Pinjam Barang -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('menu/scan');?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Scan QR Code</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->