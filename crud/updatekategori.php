<?php
include('../config/config.php');
$id = $_POST['idkategori'];
$namakategori = $_POST['namakategori'];
$deskripsi = $_POST['deskripsi'];
$type = $_POST['type'];

// $file_tmp = $_FILES['foto']['tmp_name'];
// $path = "../asset/" . $namafile;
// move_uploaded_file($file_tmp, $path);

// echo $namafile;

$query = mysqli_query($conn, "UPDATE kategoribarang SET namakategori='$namakategori', deskripsi='$deskripsi', type='$type' WHERE idkategori='$id'");
// header("location: ../index.php?page=barang");
if ($query) {
    echo "<script>alert('Data Berhasil Diupdate'); window.location.href='../index.php?page=kategori';</script>";
} else {
    echo mysqli_error($conn);
}


// echo $_POST['kode_barang'];
// echo $_POST['nama_barang'];
// echo $_POST['qty'];
?>