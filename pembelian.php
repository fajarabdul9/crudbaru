 
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
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Order Barang
                </button>
                <br></br>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Tanggal</th>
                    <th>Nama Supplier</th>
                    <th>Nama Barang</th>
                    <th>Quantity</th>
                    <th>Action</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = mysqli_query($conn, "SELECT pembelian.id_pembelian, pembelian.tanggal, supplier.nama_supplier, barang.nama_barang, detailpembelian.jumlah, detailpembelian.idbarang
                    FROM pembelian  
                    INNER JOIN detailpembelian ON pembelian.id_pembelian = detailpembelian.id_pembelian
                    INNER JOIN barang ON detailpembelian.idbarang = barang.idbarang
                    INNER JOIN supplier ON pembelian.id_supplier = supplier.id_supplier") or die(mysqli_error($conn));
        
                       while ($data = mysqli_fetch_array($query)) {          
                       ?>
                      <tr>
                        <td><?php echo $data['id_pembelian']; ?></td>
                        <td><?php echo $data['tanggal']; ?></td>
                        <td><?php echo $data['nama_supplier']; ?></td>
                        <td><?php echo $data['nama_barang']; ?></td>
                        <td><?php echo $data['jumlah']; ?></td>
                        <td>
                       
                          <a href="index.php?page=edit-data&&idbarang=<?php echo $data['idbarang']; ?>" class="btn btn-warning">Edit</a>
                          <a onclick="hapusdatabarang(<?php echo $data['idbarang']; ?>)" class="btn btn-danger">Delete</a>
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
              <h4 class="modal-title">Tambah Pembelian</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="crud/tambahpembelian.php">
            <div class="modal-body">
              
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Supplier</label>
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Kode Barang" name="kode_barang" required> -->
                     <select class="form-control" name="id_supplier" required>
                      <option value="">Pilih Supplier</option>
                      <?php
                      $query = mysqli_query($conn, "SELECT * FROM supplier") or die(mysqli_error($conn));
                      while ($data = mysqli_fetch_array($query)) {
                        echo "<option value='".$data['id_supplier']."'>".$data['nama_supplier']."</option>";
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Barang</label>
                    <select class="form-control" name="idbarang" required>
                      <option value="">Pilih Barang</option>
                      <?php
                      $query = mysqli_query($conn, "SELECT * FROM barang") or die(mysqli_error($conn));
                      while ($data = mysqli_fetch_array($query)) {
                        echo "<option value='".$data['idbarang']."'>".$data['nama_barang']."</option>";
                      }
                      ?>
                    </select>
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Barang" name="nama_barang" required> -->
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Quantity Barang</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Quantity" name="qty" required>
                  </div>
                  <div class="form-group">
                    <!-- <label for="exampleInputFile">File input</label> -->
                    <div class="input-group">
                      <!-- <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div> -->
                    </div>

                    <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Tanggal" name="tanggal" value="<?php echo date('Y-m-d'); ?>" required>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Harga Barang</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Quantity" name="subtotal" required>
                  </div>
                  </div>
                  <div class="form-check">
                    
                  </div>
                </div>
                
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="Submit" class="btn btn-primary">Simpan</button>
            </div>
           
          </div>
          </form>
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