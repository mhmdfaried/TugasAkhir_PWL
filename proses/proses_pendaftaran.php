<?php
// Pastikan skrip ini dihubungkan dengan koneksi ke database
include ('../koneksi.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir calon siswa
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $email = $_POST['email'];
    $no_telepon = $_POST['no_telepon'];
    $nilai_matematika = $_POST['nilai_matematika'];
    $nilai_ipa = $_POST['nilai_ipa'];
    $nilai_ips = $_POST['nilai_ips'];
    $nilai_b_indonesia = $_POST['nilai_b_indonesia'];
    $nilai_b_inggris = $_POST['nilai_b_inggris'];
    $nilai_agama = $_POST['nilai_agama'];

    // Hitung total nilai dan rata-rata
    $total_nilai = $nilai_ipa + $nilai_ips + $nilai_b_indonesia + $nilai_b_inggris + $nilai_agama;
    $rata_rata = $total_nilai / 5;

    // Simpan data calon siswa ke dalam tabel calon_siswa
    $sql_insert_calon_siswa = "INSERT INTO calon_siswa (nama, tempat_lahir, tanggal_lahir, alamat, jenis_kelamin, agama, email, no_telepon, total_nilai, rata_rata) 
    VALUES ('$nama', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$jenis_kelamin', '$agama', '$email', '$no_telepon', '$total_nilai', '$rata_rata')";
    // Eksekusi query
    mysqli_query($conn, $sql_insert_calon_siswa);

    // Ambil ID calon siswa yang baru saja dimasukkan
    $calon_siswa_id = mysqli_insert_id($conn);

     // Ambil data dari formulir orang tua
     $nama_ayah = $_POST['nama_ayah'];
     $nama_ibu = $_POST['nama_ibu'];
     $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
     $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
     $pendidikan_ayah = $_POST['pendidikan_ayah'];
     $pendidikan_ibu = $_POST['pendidikan_ibu'];
     $no_telepon_orangtua = $_POST['no_telepon_orangtua'];
     $alamat_orangtua = $_POST['alamat_orangtua'];
 
     // Simpan data orang tua ke dalam tabel orang_tua
     $sql_insert_orang_tua = "INSERT INTO orang_tua (calon_siswa_id, nama_ayah, nama_ibu, pekerjaan_ayah, pekerjaan_ibu, pendidikan_ayah, pendidikan_ibu, no_telepon_orangtua, alamat_orangtua) 
                              VALUES ('$calon_siswa_id', '$nama_ayah', '$nama_ibu', '$pekerjaan_ayah', '$pekerjaan_ibu', '$pendidikan_ayah', '$pendidikan_ibu', '$no_telepon_orangtua', '$alamat_orangtua')";
 
     // Eksekusi query
     mysqli_query($conn, $sql_insert_orang_tua);
 
     // Redirect ke halaman sukses atau formulir baru
     header("Location: ../index.php");
     exit();
}
?>