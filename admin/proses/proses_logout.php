<?php
session_start();

// Hapus semua session


// Redirect ke halaman login atau halaman lain yang sesuai
echo "<script>window.location='../../login.php';</script>";
$_SESSION['status'] = "logout";
$_SESSION['logged_in'] = false;
session_destroy();
exit();
?>