<?php
include('../config/config.php');
$id = $_GET['idkategori'];

$query = mysqli_query($conn, "DELETE FROM kategoribarang WHERE idkategori='$id'") or die(mysqli_error($conn));
// header("location: ../index.php?page=barang");
if ($query) {
    echo "<script>alert('Data Berhasil dihapus'); window.location.href='../index.php?page=kategori';</script>";
} else {
    echo mysqli_error($conn);
}

// echo $_GET['kode_barang'];
// echo $_GET['nama_barang'];
// echo $_GET['qty'];
?>