<?php
// Mengimpor file koneksi database
include '../koneksi.php';

// Tampilkan isi dari $_GET untuk debugging
var_dump($_GET);

// Memeriksa apakah permintaan adalah metode GET dan apakah parameter 'id_pembeli' telah diset
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    // Mendapatkan nilai ID dari parameter GET
    $id = $_GET['id'];

    // Menyiapkan pernyataan SQL untuk menghapus data profil berdasarkan ID
    $sql = "DELETE FROM tbl_jurusan WHERE id = ?";
    
    // Menyiapkan pernyataan prepared statement
    $stmt = $conn->prepare($sql);

    // Bind parameter ke pernyataan prepared statement
    $stmt->bind_param("i", $id);

    // Menjalankan pernyataan prepared statement dan menangani kesalahan
    if ($stmt->execute()) {
        // Jika penghapusan berhasil, arahkan kembali ke halaman utama
         echo "<script>alert('Data Berhasil Dihapus.');window.location='../datajurusan.php';</script>";
        exit(); // Pastikan untuk keluar setelah menggunakan header
    } else {
        // Jika terjadi kesalahan, tampilkan pesan kesalahan
        echo "Error: " . $stmt->error;
    }

    // Menutup prepared statement
    $stmt->close();
} else {
    // Jika parameter 'id_pembeli' tidak valid, tampilkan pesan kesalahan
    echo "Parameter ID tidak valid.";
}

// Menutup koneksi ke database
$conn->close();
?>