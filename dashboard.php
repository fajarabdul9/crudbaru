<html lang="en">
    <?php
     
     if(!isset($_SESSION['nama'])){
      header("location:login.php");
      exit();
     }
      include('header.php');
      include('config/config.php');
    ?>
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php
                $query = mysqli_query($conn, "SELECT COUNT(*) as total FROM pembelian");
                $data = mysqli_fetch_assoc($query);
                ?>
                <h3><?php echo $data['total']; ?></h3>  

                <p>TOTAL PEMBELIAN</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="index.php?page=penjualan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                $query = mysqli_query($conn, "SELECT COUNT(*) as total FROM penjualan");
                $data = mysqli_fetch_assoc($query);
                ?>
                <h3><?php echo $data['total']; ?></h3>  

                <p>TOTAL PENJUALAN</p>
              </div>
              <div class="icon">
                <i class="logo-alipay"></i>
              </div>
              <a href="index.php?page=penjualan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
           
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
           
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7">
            <!-- Custom tabs (Charts with tabs)-->
             <?php
            $query = mysqli_query($conn, "SELECT SUM(qty) as total FROM penjualan") or die(mysqli_error($conn));   
            $query2 = mysqli_query($conn, "SELECT SUM(qty) as total FROM pembelian") or die(mysqli_error($conn));  
            $data = mysqli_fetch_assoc($query);
            ?>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Sales
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                    <span class="nav-link" style="cursor:default;">
                        Total: <?php echo number_format($data['total']); ?>
                    </span>
                </li>
        
                    <li class="nav-item">
                      <a class="nav-link" href="#revenue-chart" data-toggle="tab">Penjualan</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Pembelian</a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <?php
                // Get total pembelian and penjualan
                $pembelian = mysqli_fetch_assoc($query2);
                $query = mysqli_query($conn, "SELECT SUM(qty) as total FROM penjualan") or die(mysqli_error($conn));
                $penjualan = mysqli_fetch_assoc($query);

                // Prepare data for chart
                $chartData = [
                    'labels' => ['Pembelian', 'Penjualan'],
                    'datasets' => [[
                        'data' => [intval($pembelian['total']), intval($penjualan['total'])],
                        'backgroundColor' => ['#00c0ef', '#00a65a'],
                    ]]
                ];
               
                ?>
                <canvas id="circle-chart" width="400" height="200"></canvas>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                const ctx = document.getElementById('circle-chart').getContext('2d');
                new Chart(ctx, {
                    type: 'doughnut',
                    data: <?php echo json_encode($chartData); ?>,
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }
                });
                </script>
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card -->

            <!-- DIRECT CHAT -->
          

           
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5">

            <!-- Map card -->
            
            <!-- /.card -->

            <!-- solid sales graph -->
            <div class="card bg-gradient-info">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-th mr-1"></i>
                  Sales Graph
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">Mail-Orders</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">In-Store</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->

            <!-- Calendar -->
           
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>