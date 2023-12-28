<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sertakan file koneksi_database.php
    include('../koneksi.php');

    // Simpan input dari form ke dalam variabel
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Query untuk menyimpan data registrasi ke dalam database
    $query = "INSERT INTO tbl_admin (nama, username, email, password) VALUES ('$nama', '$username', '$email', '$password')";

    if ($conn->query($query) === TRUE) {
        // Registrasi berhasil, redirect ke halaman login atau halaman lain yang sesuai
        echo "<script>alert('Register Berhasil.');window.location='../login.php';</script>";
        exit();
    } else {
        // Registrasi gagal, tampilkan pesan error atau redirect ke halaman registrasi
        	echo "<script>alert('Register Gagal.');window.location='../register.php';</script>";
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    // Tutup koneksi database
    $conn->close();
}
?>