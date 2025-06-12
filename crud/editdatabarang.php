<?php
$id = $_GET['idbarang'];  
$query = mysqli_query($conn, "SELECT * FROM barang WHERE idbarang='$id'");
$data = mysqli_fetch_array($query);
?>
<section class="content">
  <div class="container-fluid">
<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Rubah Data Barang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="crud/updatebarang.php" method="post" attribute enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Kode Barang</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="kode_barang" value="<?php echo $data['kode_barang']; ?>" >
                        <input type="text" class="form-control" placeholder="Enter ..." name="idbarang" value="<?php echo $data['idbarang']; ?>" hidden>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="nama_barang" value="<?php echo $data['nama_barang']; ?>" >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="idkategori" required>
                          <option value="">Pilih Kategori Barang</option>
                          <?php
                          $query = mysqli_query($conn, "SELECT * FROM kategoribarang");
                          while ($kategori = mysqli_fetch_array($query)) {
                            ?>
                            <option value="<?php echo $kategori['idkategori']; ?>" <?php if ($data['idkategori'] == $kategori['idkategori']) echo 'selected'; ?>><?php echo $kategori['namakategori']; ?></option>
                            <?php
                          
                          }
                          ?>  
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="qty" value="<?php echo $data['qty']; ?>" >
                        <input type="text" class="form-control" placeholder="Enter ..." name="status" value="<?php echo $data['status']; ?>" hidden>
                      </div>
                      <td>
                          <img src="asset/<?php echo $data['img']; ?>" alt="User Image" height="100px" width="100px"></i>
                        </td>
                    </div>
                    <div class="col-sm-6">
                     <label class="form-label" for="customFile">Upload foto Barang</label>
                      <input type="file" class="form-control" id="customFile" name="foto"/>
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