<?php  
include 'koneksi.php';
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
echo "<script>window.location='" . baseurl("login.php") . "';</script>";
exit();
?>