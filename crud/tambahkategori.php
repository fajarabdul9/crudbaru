<?php
include('../config/config.php');
$namakategori = $_GET ['namakategori'];
$type = $_GET['type'];
$deskripsi = $_GET['deskripsi'];

// $query = mysqli_query($conn, "INSERT INTO barang (idbarang, kode_barang, nama_barang, qty, status) values ('','$kodebarang', '$namabarang', '$qty','1')");
// header("location: ../index.php?page=barang");
$query = mysqli_query($conn, "INSERT INTO kategoribarang (idkategori, namakategori, type, deskripsi) values ('','$namakategori', '$type', '$deskripsi')");
if ($query) {
    echo "<script>alert('Data Berhasil Ditambahkan'); window.location.href='../index.php?page=kategori';</script>";
} else {
    echo mysqli_error($conn);
}

// echo $_GET['kode_barang'];
// echo $_GET['nama_barang'];
// echo $_GET['qty'];
?>