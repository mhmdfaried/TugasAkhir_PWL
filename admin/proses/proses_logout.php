<?php
session_start();

// Hapus semua session
session_destroy();

// Redirect ke halaman login atau halaman lain yang sesuai
echo "<script>alert('Logout Berhasil.');window.location='../../login.php';</script>";
exit();
?>