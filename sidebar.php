<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['nama'].' | '. $_SESSION['status'];?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php?page=main" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger">New</span>
              </p>
            </a> 
          </li>
          <?php
          // Get current page from URL
          $current_page = isset($_GET['page']) ? $_GET['page'] : 'main';

          // Check if any Master Data submenu is active
          $master_pages = ['barang', 'pelanggan', 'supplier', 'kategori'];
          $master_active = in_array($current_page, $master_pages);
          ?>
          <li class="nav-item<?php echo $master_active ? ' menu-open' : ''; ?>">
            <a href="#" class="nav-link<?php echo $master_active ? ' active' : ''; ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=barang" class="nav-link<?php echo $current_page == 'barang' ? ' active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barang</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="index.php?page=kategori" class="nav-link<?php echo $current_page == 'kategori' ? ' active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=pelanggan" class="nav-link<?php echo $current_page == 'pelanggan' ? ' active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pelanggan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=supplier" class="nav-link<?php echo $current_page == 'supplier' ? ' active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supplier</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                ORDER
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="index.php?page=pembelian" class="nav-link<?php echo $current_page == 'pembelian' ? ' active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembelian</p>
                </a>
              </li>
              
              </li>
              <li class="nav-item">
                <a href="index.php?page=penjualan" class="nav-link<?php echo $current_page == 'penjualan' ? ' active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penjualan</p>
                </a>
              </li>
                
            </ul>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link text-red">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              
              </p>
            </a> 
          </li>
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>