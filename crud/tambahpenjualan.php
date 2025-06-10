<?php
include('../config/config.php');
$idbarang = $_GET['idbarang'];
$idpelanggan = $_GET['idpelanggan'];
$qty = $_GET['qty'];
$date = $_GET['tanggal'];
$subtotal = $_GET['subtotal'];

// Insert into penjualan
$query = mysqli_query($conn, "INSERT INTO penjualan (id_penjualan, tanggal, qty, idpelanggan) VALUES ('', '$date', '$qty', '$idpelanggan')");
if ($query) {
    // Get last inserted idpenjualan
    $idpenjualan = mysqli_insert_id($conn);
    // Insert into detailpenjualan
    $query2 = mysqli_query($conn, "INSERT INTO detailpenjualan (id_penjualan, idbarang, jumlah, subtotal) VALUES ('$idpenjualan', '$idbarang', '$qty','$subtotal')");
    // Update stock in barang
    $query3 = mysqli_query($conn, "UPDATE barang SET qty = qty - '$qty' WHERE idbarang = '$idbarang'");
    if ($query2) {
        echo "<script>alert('Data Penjualan Berhasil Ditambahkan'); window.location.href='../index.php?page=penjualan';</script>";
    } else {
        echo "Gagal insert ke detailpenjualan: " . mysqli_error($conn);
    }
} else {
    echo "Gagal insert ke penjualan: " . mysqli_error($conn);
}
?>