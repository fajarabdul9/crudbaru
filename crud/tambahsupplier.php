<?php
include('../config/config.php');
$namasupplier = $_GET['nama_supplier'];
$alamatsupplier = $_GET['alamatsupplier'];
$notelepon = $_GET['noteleponsupplier'];



$query = mysqli_query($conn, "INSERT INTO supplier (id_supplier, nama_supplier, alamatsupplier, noteleponsupplier) values ('', '$namasupplier', '$alamatsupplier', '$notelepon')");
// header("location: ../index.php?page=barang");
if ($query) {
    echo "<script>alert('Data Berhasil Diupdate'); window.location.href='../index.php?page=supplier';</script>";
} else {
    echo mysqli_error($conn);
}


// echo $_POST['kode_barang'];
// echo $_POST['nama_barang'];
// echo $_POST['qty'];
?>