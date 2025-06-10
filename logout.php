<?php
session_start();
unset($_SESSION['nama']);
unset($_SESSION['status']);
header("location:login.php");
exit();
?>