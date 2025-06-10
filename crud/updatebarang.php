<?php
include('../config/config.php');
$id = $_POST['idbarang'];
$kodebarang = $_POST['kode_barang'];
$namabarang = $_POST['nama_barang'];
$status = $_POST['status'];
$qty = $_POST['qty'];
$namafile = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];
$path = "../asset/" . $namafile;
move_uploaded_file($file_tmp, $path);

// echo $namafile;

$query = mysqli_query($conn, "UPDATE barang SET kode_barang='$kodebarang', nama_barang='$namabarang', qty='$qty', status='$status', img='$namafile' WHERE idbarang='$id'");
// header("location: ../index.php?page=barang");
if ($query) {
    echo "<script>alert('Data Berhasil Diupdate'); window.location.href='../index.php?page=barang';</script>";
} else {
    echo mysqli_error($conn);
}


// echo $_POST['kode_barang'];
// echo $_POST['nama_barang'];
// echo $_POST['qty'];
?>