<?php
session_start();
include('config.php');
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");
if(mysqli_num_rows($query) == 1){
    $user = mysqli_fetch_array($query);
    session_start();
    $_SESSION['username'] = $username;
    header("location:../index.php");
    $_SESSION['nama'] = "$user[nama]";    
    $_SESSION['status'] = "$user[status]";
}
else{
        echo "<script>alert('Username atau Password Salah'); window.location.href='../index.php';</script>";
    }

?>