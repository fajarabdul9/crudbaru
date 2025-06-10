<?php
include('../config/config.php');
$namaplg = $_GET['namaplg'];
$alamatplg = $_GET['alamatplg'];   
$notelepon = $_GET['notelepon'];   


$query = mysqli_query($conn, "INSERT INTO pelanggan (idpelanggan, namaplg, alamatplg, notelepon) values ('','$namaplg', '$alamatplg', '$notelepon')");
// header("location: ../index.php?page=barang");
if ($query) {
    echo "<script>alert('Data Berhasil Ditambahkan'); window.location.href='../index.php?page=pelanggan';</script>";
} else {
    echo mysqli_error($conn);
}

// echo $_GET['kode_barang'];
// echo $_GET['nama_barang'];
// echo $_GET['qty'];
?>