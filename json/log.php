<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>

</style>

<?php

include '../koneksi.php';

// Lakukan query ke tabel tbl_admin
$query = "SELECT * FROM tbl_admin";
$result = mysqli_query($conn, $query);

// Periksa apakah query berhasil
if (!$result) {
    die("Query error: " . mysqli_error($conn));
}

// Ambil data dari hasil query
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Tutup koneksi ke database
mysqli_close($conn);

$file = "log.json";

$login = file_get_contents($file);

$data = json_decode($login, true);
?>

<div class="container">
    <table class="table table-bordered rounded" style="box-shadow: 0px 0px 0.8px 0px #000000;">
        <thead class="table-primary">
            <tr>
                <th class='text-center'>No</th>
                <th class='text-center'>Tanggal</th>
                <th class='text-center'>Nama</th>
                <th class='text-center'>Email</th>
                <th class='text-center'>Username</th>
                <th class='text-center'>Status</th>
                <th class='text-center'>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
$no = 1;
foreach ($data as $log) {
    echo "<tr>";
    echo "<td>".$no."</td>";
    echo "<td>".$log['tanggal']."</td>";

    // Pemeriksaan isset() untuk menghindari peringatan "Undefined array key"
    echo "<td>".(isset($log['nama']) ? $log['nama'] : '')."</td>";
    echo "<td>".(isset($log['email']) ? $log['email'] : '')."</td>";

    echo "<td>".$log['username']."</td>";

    // Check if 'status' key is set before trying to access it
    echo "<td>".(isset($log['status']) ? $log['status'] : '')."</td>";

    echo '<td class="text-center">
        <a href="delete_satudata.php?tanggal=' . $log["tanggal"] . '" class="btn btn-danger">Hapus</a>
    </td>';
    echo "</tr>";
    $no++;
}
?>
        </tbody>
    </table>
</div>