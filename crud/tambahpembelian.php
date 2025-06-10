<?php
include('../config/config.php');
$idbarang = $_GET['idbarang'];
$idsupplier = $_GET['id_supplier'];
$qty = $_GET['qty'];
$date = $_GET['tanggal'];
$subtotal = $_GET['subtotal'];

// Insert into pembelian
$query = mysqli_query($conn, "INSERT INTO pembelian (id_pembelian, tanggal, qty, id_supplier) VALUES ('', '$date', '$qty', '$idsupplier')");    
if ($query) {
    // Get last inserted idpembelian
    $idpembelian = mysqli_insert_id($conn);
    // Insert into detailpembelian
    $query2 = mysqli_query($conn, "INSERT INTO detailpembelian (id_pembelian, idbarang, jumlah, subtotal) VALUES ('$idpembelian', '$idbarang', '$qty','$subtotal')");
    // Update stock in barang
    $query3 = mysqli_query($conn, "UPDATE barang SET qty = qty + '$qty' WHERE idbarang = '$idbarang'");
    if ($query2) {
        echo "<script>alert('Data Penjualan Berhasil Ditambahkan'); window.location.href='../index.php?page=pembelian';</script>";
    } else {
        echo "Gagal insert ke detailpembelian: " . mysqli_error($conn);
    }
} else {
    echo "Gagal insert ke pembelian: " . mysqli_error($conn);
}
?>