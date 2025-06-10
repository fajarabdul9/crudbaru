<?php
include('../config/config.php');
$id = $_GET['id_supplier'];

$query = mysqli_query($conn, "DELETE FROM supplier WHERE id_supplier='$id'");   
if ($query) {
    echo "<script>alert('Data Berhasil dihapus'); window.location.href='../index.php?page=supplier';</script>";
} else {
    echo mysqli_error($conn);
}
?>