<?php
$id = $_GET['idpelanggan'];  
$query = mysqli_query($conn, "SELECT * FROM pelanggan WHERE idpelanggan='$id'");
$data = mysqli_fetch_array($query);
?>
<section class="content">
  <div class="container-fluid">
<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Update Data Pelanggan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="crud/updatepelanggan.php" method="post" attribute enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>ID</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="idpelanggan" value="<?php echo $data['idpelanggan']; ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Pelanggan</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="namaplg" value="<?php echo $data['namaplg']; ?>" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="alamatplg"><?php echo $data['alamatplg']; ?></textarea>
                      </div>
                      <!-- <td>
                          <img src="asset/<?php echo $data['img']; ?>" alt="User Image" height="100px" width="100px"></i>
                        </td> -->
                    </div>
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        
                        <label>No Telepon</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="notelepon" value="<?php echo $data['notelepon']; ?>" >
                      </div>
                      <!-- <td>
                          <img src="asset/<?php echo $data['img']; ?>" alt="User Image" height="100px" width="100px"></i>
                        </td>
                    </div> -->
                    <!-- <div class="col-sm-6">
                     <label class="form-label" for="customFile">Upload foto Barang</label>
                      <input type="file" class="form-control" id="customFile" name="foto"/> -->
                      <!-- <div class="form-group">
                        <label>Textarea Disabled</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                      </div>
                    </div>
                  </div> -->

                  <!-- input states -->
                
              </div>
              <!-- /.card-body --> 
                
            </div>
            <br></br>
            <button class="btn btn-primary" type="submit" name="submit">Simpan</button> 
</section>