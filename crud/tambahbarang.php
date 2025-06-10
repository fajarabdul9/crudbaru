<?php
include('../config/config.php');
$kodebarang = $_GET['kode_barang'];
$namabarang = $_GET['nama_barang'];
$qty = $_GET['qty'];

$query = mysqli_query($conn, "INSERT INTO barang (idbarang, kode_barang, nama_barang, qty, status) values ('','$kodebarang', '$namabarang', '$qty','1')");
// header("location: ../index.php?page=barang");
if ($query) {
    echo "<script>alert('Data Berhasil Ditambahkan'); window.location.href='../index.php?page=barang';</script>";
} else {
    echo mysqli_error($conn);
}

// echo $_GET['kode_barang'];
// echo $_GET['nama_barang'];
// echo $_GET['qty'];
?>