<?php
// Memasukkan file koneksi_database.php untuk menghubungkan ke database
include "../koneksi.php";

// Memeriksa apakah permintaan yang dikirimkan adalah metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $nohp = $_POST["nohp"];
    $tgl_transaksi = $_POST["tgl_transaksi"];
    $jenis_barang = $_POST["jenis_barang"];
    $nama_barang = $_POST["nama_barang"];
    $jumlah = $_POST["jumlah"];
    $harga = $_POST["harga"];

    // Menyiapkan query untuk menyimpan data ke database
    $query = "INSERT INTO tbl_faried (nama, alamat, nohp, tgl_transaksi, jenis_barang, nama_barang, jumlah, harga) 
            VALUES ('$nama', '$alamat', '$nohp', '$tgl_transaksi', '$jenis_barang', '$nama_barang', $jumlah, $harga)";

    // Mengeksekusi query
    if ($conn->query($query) === TRUE) {
        // Registrasi berhasil, redirect ke halaman login atau halaman lain yang sesuai
        echo "<script>alert('Data Berhasil Ditambahkan.');window.location='../data.php';</script>";
        exit();
    } else {
        // Registrasi gagal, tampilkan pesan error atau redirect ke halaman registrasi
        	echo "<script>alert('Data Gagal Ditambahkan.');window.location='../tambah.php';</script>";
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    // Tutup koneksi database
    $conn->close();
}
?>