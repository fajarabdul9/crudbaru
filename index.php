<!DOCTYPE html>
<html lang="en">
    <?php
     session_start();
     if(!isset($_SESSION['nama'])){
      header("location:login.php");
      exit();
     }
      include('header.php');
      include('config/config.php');
    ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <?php 
  include('navbar.php');  
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <?php
    include('sidebar.php');
    ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php
    if (isset($_GET['page'])){
      if($_GET['page'] == 'barang'){
      include('databarang.php');

    }
      else if($_GET['page'] == 'main'){
      include('dashboard.php');
      
    }
    else if($_GET['page'] == 'edit-data'){
      include('crud/editdatabarang.php');
      
    }
    else if($_GET['page'] == 'pelanggan'){
      include('datapelanggan.php');
      
    }
    else if($_GET['page'] == 'edit-pelanggan'){
      include('crud/editpelanggan.php');
      
    }
    else if($_GET['page'] == 'penjualan'){
      include('penjualan.php');
      
    }
    else if($_GET['page'] == 'detail-penjualan'){
      include('crud/detailpenjualan.php');
      
    }
    else if($_GET['page'] == 'supplier'){
      include('datasupplier.php');
      
    }
    else if($_GET['page'] == 'edit-supplier'){
      include('crud/editsupplier.php'); 
    }
    else if($_GET['page'] == 'pembelian'){
      include('pembelian.php');
      
    }
    else if($_GET['page'] == 'kategori'){
      include('kategoribarang.php');
      
    }
     else if($_GET['page'] == 'edit-kategori'){
      include('crud/editkategoribrg.php'); 
    }
    else if($_GET['page'] == 'detail-barang'){
      include('crud/detailbarang.php');
      
    }
    else if($_GET['page'] == 'detail-pembelian'){
      include('crud/detailpembelian.php');
      
    }
    
    
      else{
      include('notfound.php');
    }
    }    
    else{
      include('main.php');
    }
    
    ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  include('footer.php');  
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
