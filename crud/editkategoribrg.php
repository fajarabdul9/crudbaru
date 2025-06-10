<?php
$id = $_GET['idkategori'];  
$query = mysqli_query($conn, "SELECT * FROM kategoribarang WHERE idkategori='$id'");
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
                <form action="crud/updatekategori.php" method="post" attribute enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Kode Barang</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="type" value="<?php echo $data['type']; ?>" >
                        <input type="text" class="form-control" placeholder="Enter ..." name="idkategori" value="<?php echo $data['idkategori']; ?>" hidden>
                      </div>
                      <label>Deskripsi Kategori</label>
                      <input type="text" class="form-control" placeholder="Enter ..." name="deskripsi" value="<?php echo $data['deskripsi']; ?>" >
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="namakategori" value="<?php echo $data['namakategori']; ?>" >
                        
                      </div>
                    </div>
                  </div>
                  
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