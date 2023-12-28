<?php
// Memasukkan file koneksi_database.php untuk menghubungkan ke database
include "../koneksi.php";

// Memeriksa apakah permintaan yang dikirimkan adalah metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $id_pembeli = $_POST["id_pembeli"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $nohp = $_POST["nohp"];
    $tgl_transaksi = $_POST["tgl_transaksi"];
    $jenis_barang = $_POST["jenis_barang"];
    $nama_barang = $_POST["nama_barang"];
    $jumlah = $_POST["jumlah"];
    $harga = $_POST["harga"];

    // Menyiapkan query untuk menyimpan data ke database
    $query = "UPDATE tbl_faried SET nama='$nama', alamat='$alamat', tgl_transaksi='$tgl_transaksi', jenis_barang='$jenis_barang', nama_barang='$nama_barang', jumlah='$jumlah', harga='$harga' WHERE id_pembeli='$id_pembeli'";

    // Mengeksekusi query
    if ($conn->query($query) === TRUE) {
        // Registrasi berhasil, redirect ke halaman login atau halaman lain yang sesuai
        echo "<script>alert('Data Berhasil Diedit.');window.location='../data.php';</script>";
        exit();
    } else {
        // Registrasi gagal, tampilkan pesan error atau redirect ke halaman registrasi
        	echo "<script>alert('Data Gagal Diedit.');window.location='../tambah.php';</script>";
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