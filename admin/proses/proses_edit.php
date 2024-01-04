<?php
// Memasukkan file koneksi_database.php untuk menghubungkan ke database
include "../../koneksi.php";

// Memeriksa apakah permintaan yang dikirimkan adalah metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $id = $_POST["id"];
    $status = $_POST["status"];

    // Menyiapkan query untuk menyimpan data ke database
    $query = $conn->prepare("UPDATE tbl_calonsiswa SET status=? WHERE id=?");
    $query->bind_param("si", $status, $id);


    // Mengeksekusi query
    if ($query->execute()) {
        // Registrasi berhasil, redirect ke halaman login atau halaman lain yang sesuai
        echo "<script>alert('Status Berhasil Diedit.');window.location='../index.php';</script>";
        exit();
    } else {
        // Registrasi gagal, tampilkan pesan error atau redirect ke halaman registrasi
        	echo "<script>alert('Status Gagal Diedit.');window.location='../index.php';</script>";
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    // Tutup koneksi database
    $conn->close();
}else {
    // Jika bukan metode POST, arahkan kembali ke halaman data
    header("Location: ../data.php");
    exit();
}
?>