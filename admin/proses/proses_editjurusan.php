<?php
include "../../koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nama_jurusan = $_POST["nama_jurusan"];
    $akreditasi = $_POST["akreditasi"];
    $kapasitas = $_POST["kapasitas"];
    $biaya_spp = $_POST["biaya_spp"];
    $persyaratan = $_POST["persyaratan"];
    $deskripsi = $_POST["deskripsi"];
    $nama_koordinator = $_POST["nama_koordinator"];
    $email_koordinator = $_POST["email_koordinator"];
    $no_telepon_koordinator = $_POST["no_telepon_koordinator"];
    $kelas_tersedia = $_POST["kelas_tersedia"];

    // Use prepared statements to prevent SQL injection
    $query = $conn->prepare("UPDATE tbl_jurusan SET nama_jurusan=?, akreditasi=?, kapasitas=?, biaya_spp=?,
    persyaratan=?, deskripsi=?, nama_koordinator=?, email_koordinator=?, no_telepon_koordinator=?, kelas_tersedia=? WHERE id=?");
    
    $query->bind_param("ssssssssssi", $nama_jurusan, $akreditasi, $kapasitas, $biaya_spp, $persyaratan, $deskripsi, $nama_koordinator, $email_koordinator, $no_telepon_koordinator, $kelas_tersedia, $id);

    if ($query->execute()) {
        // Data edited successfully, redirect to the appropriate page
        echo "<script>alert('Data Berhasil Diedit.');window.location='../jurusan.php';</script>";
        exit();
    } else {
        // Error in editing data, display error message
        echo "<script>alert('Data Gagal Diedit.');window.location='../jurusan.php';</script>";
        echo "Error: " . $query->error;
    }

    $query->close();
    $conn->close();
} else {
    // If not a POST request, redirect to the data page
    header("Location: ../datajurusan.php");
    exit();
}
?>