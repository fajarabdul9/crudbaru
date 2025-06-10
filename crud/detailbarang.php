 <?php
$id = $_GET['idbarang'];  
// // $query = mysqli_query($conn, "SELECT * FROM barang WHERE idbarang='$id'");
// $data = mysqli_fetch_array($query);
?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                 <a href="index.php?page=penjualan">Tambah Penjualan</a>
                </button>
                <br></br> -->
                <button type="button" class="btn btn-success mb-3" onclick="window.print();">
                  <i class="fa fa-print"></i> Print
                </button>
                <table id="example2" class="table table-bordered table-hover">
                    <tr>
                        <!-- <td colspan="7" style="text-align:center; font-weight:bold; font-size:18px;">
                            DETAIL PEMBELIAN :  
                            <?php
                            $kueri = mysqli_query($conn, "SELECT * FROM barang WHERE idbarang='$id'") or die(mysqli_error($conn));
                            $data = mysqli_fetch_array($kueri);
                            echo $data['nama_barang'];
                            ?>
                        </td> -->
                    </tr> 
                <br>
                        
                  <thead>
                  <tr>
                    <td colspan="7" style="text-align:center; font-weight:bold; font-size:18px;">
                            DETAIL PEMBELIAN :  
                            <?php
                            $kueri = mysqli_query($conn, "SELECT * FROM barang WHERE idbarang='$id'") or die(mysqli_error($conn));
                            $data = mysqli_fetch_array($kueri);
                            echo $data['nama_barang'];
                            ?>
                        </td>
                 
                  <tr>
                    <th>Id</th>
                    <th>Tanggal</th>
                    <th>Nama Supplier</th>
                    <th>Nama Barang</th>
                    <th>Kode Barang</th>
                    <th>Quantity</th>
                    <th>Stok Akhir</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = mysqli_query($conn, "SELECT pembelian.id_pembelian, pembelian.tanggal, supplier.nama_supplier, barang.nama_barang, barang.kode_barang, detailpembelian.jumlah, barang.qty
                    FROM pembelian
                    INNER JOIN detailpembelian ON pembelian.id_pembelian = detailpembelian.id_pembelian 
                    INNER JOIN barang ON detailpembelian.idbarang = barang.idbarang 
                    INNER JOIN supplier ON pembelian.id_supplier = supplier.id_supplier WHERE barang.idbarang = '$id'") or die(mysqli_error($conn));
                    
                       while ($data = mysqli_fetch_array($query)) {          
                       ?>
                      <tr>
                        <td><?php echo $data['id_pembelian']; ?></td>
                        <td><?php echo $data['tanggal']; ?></td>
                        <td><?php echo $data['nama_supplier']; ?></td>
                        <td><?php echo $data['nama_barang']; ?></td>
                        <td><?php echo $data['kode_barang']; ?></td>
                        <td><?php echo $data['qty']; ?></td>
                        <td><?php echo $data['jumlah']; ?></td>
                        <!-- <a href ="index.php?page=detail-penjualan&&idbarang=<?php echo $data['idbarang']; ?>" class="btn btn-primary">Detail</a><br></br>
                          <a href="index.php?page=edit-data&&idbarang=<?php echo $data['idbarang']; ?>" class="btn btn-warning">Edit</a>
                          <a onclick="hapusdatabarang(<?php echo $data['idbarang']; ?>)" class="btn btn-danger">Delete</a> -->
                        <!-- <td>
                          <img src="asset/<?php echo $data['img']; ?>" alt="User Image" height="100px" width="100px"></i>
                        </td> -->
                      </tr>
                      <tr>
                        <!-- <img src="asset/<?php echo $data['img']; ?>" alt="User Image" class="img-circle img-size-32 mr-2"></i> -->
                      </tr>
                      <?php
                    
                       }
                    ?>
                  
                
                  </tbody>
                  <tfoot>
          
                  </tfoot>
                </table>
                
                 <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <td colspan="7" style="text-align:center; font-weight:bold; font-size:18px;">
                            DETAIL PENJUALAN :  
                            <?php
                            $kueri = mysqli_query($conn, "SELECT * FROM barang WHERE idbarang='$id'") or die(mysqli_error($conn));
                            $data = mysqli_fetch_array($kueri);
                            echo $data['nama_barang'];
                            ?>
                        </td>
                  <tr> <br></br>
                    <th>Id</th>
                    <th>Tanggal</th>
                    <th>Nama Pelanggan</th>
                    <th>Nama Barang</th>
                    <th>Kode Barang</th>
                    <th>Quantity</th>
                    <th>Stok Akhir</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    // $query = mysqli_query($conn, "SELECT * FROM barang");
                    // while ($data = mysqli_fetch_array($query)) {
                    $query = mysqli_query($conn, "SELECT penjualan.id_penjualan, detailpenjualan.idbarang, detailpenjualan.jumlah,  penjualan.idpelanggan ,pelanggan.namaplg, barang.kode_barang , barang.nama_barang, penjualan.tanggal, penjualan.qty 
                    FROM penjualan INNER JOIN detailpenjualan ON penjualan.id_penjualan = detailpenjualan.id_penjualan 
                    INNER JOIN pelanggan ON penjualan.idpelanggan = pelanggan.idpelanggan INNER JOIN barang ON detailpenjualan.idbarang = barang.idbarang  WHERE barang.idbarang = '$id'" ) or die(mysqli_error($conn));
                       while ($data = mysqli_fetch_array($query)) {          
                       ?>
                      <tr>
                        <td><?php echo $data['id_penjualan']; ?></td>
                        <td><?php echo $data['tanggal']; ?></td>
                        <td><?php echo $data['namaplg']; ?></td>
                        <td><?php echo $data['nama_barang']; ?></td>
                        <td><?php echo $data['kode_barang']; ?></td>
                        <td><?php echo $data['qty']; ?></td>
                        <td><?php echo $data['jumlah']; ?></td>
                        <!-- <a href ="index.php?page=detail-penjualan&&idbarang=<?php echo $data['idbarang']; ?>" class="btn btn-primary">Detail</a><br></br>
                          <a href="index.php?page=edit-data&&idbarang=<?php echo $data['idbarang']; ?>" class="btn btn-warning">Edit</a>
                          <a onclick="hapusdatabarang(<?php echo $data['idbarang']; ?>)" class="btn btn-danger">Delete</a> -->
                        <!-- <td>
                          <img src="asset/<?php echo $data['img']; ?>" alt="User Image" height="100px" width="100px"></i>
                        </td> -->
                      </tr>
                      <tr>
                        <!-- <img src="asset/<?php echo $data['img']; ?>" alt="User Image" class="img-circle img-size-32 mr-2"></i> -->
                      </tr>
                      <?php
                    
                       }
                    ?>
                  
                
                  </tbody>
                  <tfoot>
          
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

           
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
     <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Penjualan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
           
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
  <script>
    function hapusdatabarang(data_id){
      // alert('Data Berhasil dihapus');
      // window.location=('crud/deletebarang.php?id='+data_id); 
// Swal.fire({
//   title: "Good job!",
//   text: "You clicked the button!",
//   icon: "success"
// });
      Swal.fire({
      title: "Apakah anda yakin akan menghapus data ini?",
      // showDenyButton: true,
      showCancelButton: true,
      confirmButtonText: "Hapus",
      confirmButtonColor: "red",
      // denyButtonText: `Don't save`
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
       window.location=('crud/deletebarang.php?id='+data_id); 
      }
    })
    }
    </script>