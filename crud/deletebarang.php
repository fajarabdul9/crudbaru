<?php
include('../config/config.php');
$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM barang WHERE idbarang='$id'");
// header("location: ../index.php?page=barang");
if ($query) {
    echo "<script>alert('Data Berhasil dihapus'); window.location.href='../index.php?page=barang';</script>";
} else {
    echo mysqli_error($conn);
}

// echo $_GET['kode_barang'];
// echo $_GET['nama_barang'];
// echo $_GET['qty'];
?>