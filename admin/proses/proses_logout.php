<?php
session_start();

// Hapus semua session


// Redirect ke halaman login atau halaman lain yang sesuai
echo "<script>window.location='../../login.php';</script>";
session_destroy();
exit();
?>