<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penjualan</title>
    <link rel="stylesheet" href="css/style_data.css">
    <link rel="Icon" href="img/img1.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color:#2c3e50" ;>
    <!-- navigasi -->
    <nav class="navbar">
        <div class="container">
            <img src="img/img1.png" width="50" height="50" alt="">
            <div class="menu">
                <ul>
                    <li><a href="proses/proses_logout.php"
                            onclick="return confirm('Anda yakin ingin keluar?');">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Container untuk form pencarian -->
    <div class=" container mt-5">
        <form action="" method="post" class="mb-3">
            <div class="input-group">
                <a href="tambah.php" class="btn btn-success">+ Tambahkan Data</a>
                <input type="text" class="form-control" placeholder="Search menggunakan ID atau Nama" name="searchTerm">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>

        <!-- Tabel untuk menampilkan data -->
        <table class="table table-bordered rounded" style="box-shadow: 0px 0px 0.8px 0px #000000;">
            <thead>
                <!-- Header kolom-kolom pada tabel -->
                <tr>
                    <th class='text-center'>ID Pembeli</th>
                    <th class='text-center'>Nama</th>
                    <th class='text-center'>No. Telephone</th>
                    <th class='text-center'>Nama Barang</th>
                    <th class='text-center'>Harga Barang</th>
                    <th class='text-center'>Total Bayar</th>
                    <th class='text-center'>Aksi</th>
                </tr>   
            </thead>
            <tbody>
                <!-- Menampilkan data dari database -->
                <?php
                // Include file koneksi database
                include "koneksi.php";

                // Konfigurasi Pagination
                $limit = 7;
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $start = ($page - 1) * $limit;

                // Query untuk mengambil data dengan pagination dan kata kunci pencarian
                $searchTerm = isset($_POST['searchTerm']) ? $_POST['searchTerm'] : '';
                $whereClause = '';

                if (!empty($searchTerm)) {
                    $whereClause = "WHERE id_pembeli LIKE '%$searchTerm%' OR nama LIKE '%$searchTerm%'";
                }

                $query = "SELECT id_pembeli, nama, nohp, nama_barang, harga, jumlah * harga AS Total_Bayar
                        FROM tbl_faried
                        $whereClause
                        LIMIT $start, $limit";
                $result = $conn->query($query);

                if ($result === false) {
                die('Error: ' . $conn->error);
                }


                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Menampilkan baris data dalam tabel
                        echo "<tr class='text-center'>";
                        echo "<td>" . $row["id_pembeli"] . "</td>";
                        echo "<td>" . $row["nama"] . "</td>";
                        echo "<td>" . $row["nohp"] . "</td>";
                        echo "<td>" . $row["nama_barang"] . "</td>";
                        echo "<td>" . $row["harga"] . "</td>";
                        echo "<td>" . $row["Total_Bayar"] . "</td>";
                        echo '<td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#detailModal' . $row["id_pembeli"] . '" class="btn btn-info">Selengkapnya</a>
                                <a href="edit.php?id_pembeli=' . $row["id_pembeli"] . '" class="btn btn-warning">Edit</a>
                                <a href="proses/proses_hapus.php?id_pembeli=' . $row["id_pembeli"] . '" class="btn btn-danger">Hapus</a>
                            </td>';
                        echo "</tr>";
                    }
                } else {
                    // Menampilkan pesan jika data tidak ditemukan
                    echo "<tr><td colspan='7'>Data not found.</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>

        <!-- Pagination -->
        <?php
        // Include file koneksi database
        include "koneksi.php";

        // Query untuk mendapatkan total data
        $queryTotal = "SELECT COUNT(id_pembeli) as total FROM tbl_faried";
        $resultTotal = $conn->query($queryTotal);
        $dataTotal = $resultTotal->fetch_assoc();
        $totalPages = ceil($dataTotal['total'] / $limit);

        // Menentukan halaman saat ini
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

        // Menampilkan tombol "Previous" jika halaman saat ini lebih dari 1
        echo '<ul class="pagination justify-content-center">';
        if ($current_page > 1) {
            echo '<li class="page-item"><a class="page-link" href="?page=' . ($current_page - 1) . '">Previous</a></li>';
        }

        // Menampilkan nomor-nomor halaman
        for ($i = 1; $i <= $totalPages; $i++) {
            echo '<li class="page-item ' . ($current_page == $i ? 'active' : '') . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
        }

        // Menampilkan tombol "Next" jika halaman saat ini kurang dari total halaman
        if ($current_page < $totalPages) {
            echo '<li class="page-item"><a class="page-link" href="?page=' . ($current_page + 1) . '">Next</a></li>';
        }

        echo '</ul>';

        $conn->close();
        ?>
    </div>


    <?php
    // Include file koneksi database
    include "koneksi.php";

    // Mengambil data untuk modal
    $queryModal = "SELECT id_pembeli, nama, alamat, nohp, tgl_transaksi, jenis_barang, nama_barang, jumlah, harga
                    FROM tbl_faried";
    $resultModal = $conn->query($queryModal);

    if ($resultModal->num_rows > 0) {
        while ($rowModal = $resultModal->fetch_assoc()) {
    ?>
    <!-- Modal untuk menampilkan detail data -->
    <div class="modal fade" id="detailModal<?php echo $rowModal['id_pembeli']; ?>" tabindex="-1" role="dialog"
        aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel">Detail Data</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Tutup">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Menampilkan detail data di sini -->
                    <p>ID Pembeli: <?php echo $rowModal['id_pembeli']; ?></p>
                    <p>Nama: <?php echo $rowModal['nama']; ?></p>
                    <p>Alamat: <?php echo $rowModal['alamat']; ?></p>
                    <p>No. Telephone: <?php echo $rowModal['nohp']; ?></p>
                    <p>Tanggal Transaksi: <?php echo $rowModal['tgl_transaksi']; ?></p>
                    <p>Jenis Barang: <?php echo $rowModal['jenis_barang']; ?></p>
                    <p>Nama Barang: <?php echo $rowModal['nama_barang']; ?></p>
                    <p>Jumlah Barang: <?php echo $rowModal['jumlah']; ?></p>
                    <p>Harga Barang: <?php echo $rowModal['harga']; ?></p>

                    <!-- Tambahkan detail lainnya sesuai kebutuhan -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    }

    $conn->close();
    ?>

    <!-- Script Bootstrap dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    </div>
    </div>
</body>
<footer>
    <div class="footer">
        <p>Copyright &copy; Muhamad Faried 2207412041
        </p>
    </div>
</footer>

</html>