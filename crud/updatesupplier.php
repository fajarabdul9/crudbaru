<?php
include('../config/config.php');
$id = $_POST['idsupplier'];
$namasupplier = $_POST['namasupplier'];
$alamatsupplier = $_POST['alamatsupplier'];
$notelepon = $_POST['notelepon'];

// $file_tmp = $_FILES['foto']['tmp_name'];
// $path = "../asset/" . $namafile;
// move_uploaded_file($file_tmp, $path);

// echo $namafile;

$query = mysqli_query($conn, "UPDATE supplier SET nama_supplier='$namasupplier', alamatsupplier='$alamatsupplier', noteleponsupplier='$notelepon' WHERE id_supplier='$id'") or die(mysqli_error($conn));    
// header("location: ../index.php?page=barang");
if ($query) {
    echo "<script>alert('Data Berhasil Diupdate'); window.location.href='../index.php?page=supplier';</script>";
} else {
    echo mysqli_error($conn);
}


// echo $_POST['kode_barang'];
// echo $_POST['nama_barang'];
// echo $_POST['qty'];
?>