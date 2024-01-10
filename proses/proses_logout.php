<?php
session_start(); // Start the session to access session variables

// Handle the logout action

// Set the status to "Sudah Logout"
$_SESSION['status'] = "Sudah Logout";

// Unset and destroy the session
session_unset();
session_destroy();

// Redirect ke halaman login atau halaman lain yang sesuai
echo "<script>alert('Logout Berhasil.');window.location='../login.php';</script>";
exit();
?>