<?php
// Mengimpor file koneksi database
include '../koneksi.php';

// Tampilkan isi dari $_GET untuk debugging
var_dump($_GET);

// Mendapatkan nilai ID dari parameter GET
$id = $_GET['id'];

// Menyiapkan pernyataan SQL untuk menghapus data dari tbl_orangtua
$sql_orangtua = "DELETE FROM tbl_orangtua WHERE calonsiswa_id = ?";

// Menyiapkan pernyataan prepared statement untuk tbl_orangtua
$stmt_orangtua = $conn->prepare($sql_orangtua);

// Bind parameter ke pernyataan prepared statement untuk tbl_orangtua
$stmt_orangtua->bind_param("i", $id);

// Menjalankan pernyataan prepared statement untuk tbl_orangtua dan menangani kesalahan
if ($stmt_orangtua->execute()) {
    // Setelah berhasil menghapus data dari tbl_orangtua, lanjutkan untuk menghapus data dari tbl_calonsiswa

    // Menyiapkan pernyataan SQL untuk menghapus data dari tbl_calonsiswa
    $sql_calonsiswa = "DELETE FROM tbl_calonsiswa WHERE id = ?";
    
    // Menyiapkan pernyataan prepared statement untuk tbl_calonsiswa
    $stmt_calonsiswa = $conn->prepare($sql_calonsiswa);

    // Bind parameter ke pernyataan prepared statement untuk tbl_calonsiswa
    $stmt_calonsiswa->bind_param("i", $id);

    // Menjalankan pernyataan prepared statement untuk tbl_calonsiswa dan menangani kesalahan
    if ($stmt_calonsiswa->execute()) {
        // Jika penghapusan berhasil, arahkan kembali ke halaman utama
        echo "<script>alert('Data Berhasil Dihapus.');window.location='../data.php';</script>";
        exit(); // Pastikan untuk keluar setelah menggunakan header
    } else {
        // Jika terjadi kesalahan pada penghapusan tbl_calonsiswa, tampilkan pesan kesalahan
        echo "Error: " . $stmt_calonsiswa->error;
    }

    // Menutup prepared statement untuk tbl_calonsiswa
    $stmt_calonsiswa->close();
} else {
    // Jika terjadi kesalahan pada penghapusan tbl_orangtua, tampilkan pesan kesalahan
    echo "Error: " . $stmt_orangtua->error;
}

// Menutup prepared statement untuk tbl_orangtua
$stmt_orangtua->close();