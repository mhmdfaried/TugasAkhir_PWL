<?php
// Pastikan skrip ini dihubungkan dengan koneksi ke database
include ('../koneksi.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir calon siswa
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $nilai_matematika = $_POST['nilai_matematika'];
    $nilai_ipa = $_POST['nilai_ipa'];
    $nilai_ips = $_POST['nilai_ips'];
    $nilai_b_indonesia = $_POST['nilai_b_indonesia'];
    $nilai_b_inggris = $_POST['nilai_b_inggris'];
    $nilai_agama = $_POST['nilai_agama'];
    $status = 'Sedang diproses';
    // Hitung total nilai dan rata-rata
    $total_nilai = $nilai_matematika + $nilai_ipa + $nilai_ips + $nilai_b_indonesia + $nilai_b_inggris + $nilai_agama;
    $nilai_rata_rata = $total_nilai / 6;

    // Simpan data calon siswa ke dalam tabel calon_siswa
    $sql_insert_calon_siswa = "INSERT INTO tbl_calonsiswa (nama, alamat, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, no_telepon, email, nilai_rata_rata, status,jurusan_id) 
    VALUES ('$nama', '$alamat', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$no_telepon', '$email', '$nilai_rata_rata','$status', '$jurusan')";
    // Eksekusi query
    mysqli_query($conn, $sql_insert_calon_siswa);

    // Ambil ID calon siswa yang baru saja dimasukkan
    $calon_siswa_id = mysqli_insert_id($conn);

     // Ambil data dari formulir orang tua
     $nama_ayah = $_POST['nama_ayah'];
     $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
     $pendidikan_ayah = $_POST['pendidikan_ayah'];
     $nama_ibu = $_POST['nama_ibu'];
     $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
     $pendidikan_ibu = $_POST['pendidikan_ibu'];
     $penghasilan = $_POST['penghasilan'];
     $no_teleponortu = $_POST['no_teleponortu'];
     $alamat_ortu = $_POST['alamat_ortu'];
 
     // Simpan data orang tua ke dalam tabel orang_tua
     $sql_insert_orang_tua = "INSERT INTO tbl_orangtua (calonsiswa_id, nama_ayah, pekerjaan_ayah, pendidikan_ayah, nama_ibu, pekerjaan_ibu, pendidikan_ibu, penghasilan, no_teleponortu, alamat_ortu) 
                              VALUES ('$calon_siswa_id', '$nama_ayah', '$pekerjaan_ayah', '$pendidikan_ayah', '$nama_ibu', '$pekerjaan_ibu','$pendidikan_ibu', $penghasilan, '$no_teleponortu', '$alamat_ortu')";
 
     // Eksekusi query
     mysqli_query($conn, $sql_insert_orang_tua);
 
     // Redirect ke halaman sukses atau formulir baru
        echo "<script>alert('Data Berhasil Terkirim.');window.location='../data.php';</script>";
        exit();
}
?>