<?php
include('../config/config.php');
$id = $_GET['idpelanggan'];

$query = mysqli_query($conn, "DELETE FROM pelanggan WHERE idpelanggan='$id'");
if ($query) {
    echo "<script>alert('Data Berhasil dihapus'); window.location.href='../index.php?page=pelanggan';</script>";
} else {
    echo mysqli_error($conn);
}
?>