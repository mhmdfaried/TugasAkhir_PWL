<?php 

if (isset($_GET['tanggal'])) {
    $nimToDelete = $_GET['tanggal'];

    // Baca data dari file JSON
    $file = '../../json/log.json';
    $login = file_get_contents($file);
    $data = json_decode($login, true);

    // Cari indeks data yang akan dihapus
    $indexToDelete = -1;
    foreach ($data as $index => $log) {
        if ($log['tanggal'] == $nimToDelete) {
            $indexToDelete = $index;
            break;
        }
    }

    // Jika indeks ditemukan, hapus data dan simpan kembali ke file JSON
    if ($indexToDelete !== -1) {
        array_splice($data, $indexToDelete, 1);
        $jsonData = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents($file, $jsonData);

        echo "<script>alert('Data Berhasil Dihapus.');window.location='../log.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Dihapus.');window.location='log.php';</script>";
    }
}  else {
    echo "<script>alert('Parameter ID tidak valid.');window.location='../log.php';</script>";
}
?>