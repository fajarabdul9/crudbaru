<?php
include('../config/config.php');
$id = $_POST['idpelanggan'];
$namaplg = $_POST['namaplg'];
$alamatplg = $_POST['alamatplg'];
$notelepon = $_POST['notelepon'];
// $namafile = $_FILES['foto']['name'];
// $file_tmp = $_FILES['foto']['tmp_name'];
// $path = "../asset/" . $namafile;
// move_uploaded_file($file_tmp, $path);

// echo $namafile;

$query = mysqli_query($conn, "UPDATE pelanggan SET namaplg='$namaplg', alamatplg='$alamatplg', notelepon='$notelepon' WHERE idpelanggan='$id'");
// header("location: ../index.php?page=barang");
if ($query) {
    echo "<script>alert('Data Berhasil Diupdate'); window.location.href='../index.php?page=pelanggan';</script>";
} else {
    echo mysqli_error($conn);
}


// echo $_POST['kode_barang'];
// echo $_POST['nama_barang'];
// echo $_POST['qty'];
?>