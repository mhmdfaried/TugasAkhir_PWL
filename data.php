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
    <div class="container mt-5">
        <form action="" method="post" class="mb-3">
            <div class="input-group">
                <a href="pendaftaranadmin.php" class="btn btn-success">+ Tambahkan Data</a>
                <input type="text" class="form-control" placeholder="Cari menggunakan Nama atau Jenis Kelamin"
                    name="searchTerm">
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </form>

        <!-- Tabel untuk menampilkan data -->
        <table class="table table-bordered rounded" style="box-shadow: 0px 0px 0.8px 0px #000000;">
            <thead>
                <!-- Header kolom-kolom pada tabel -->
                <tr>
                    <th class='text-center'>No</th>
                    <th class='text-center'>Nama Calon Siswa</th>
                    <th class='text-center'>Alamat</th>
                    <th class='text-center'>Jenis Kelamin</th>
                    <th class='text-center'>Nomor Telepon</th>
                    <th class='text-center'>Email</th>
                    <th class='text-center'>Jurusan Pilihan</th>
                    <th class='text-center'>Status</th>
                    <th class='text-center'>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Menampilkan data dari database -->
                <?php
                // Include file koneksi database
                include "koneksi.php";

                // Konfigurasi Pagination
                $limit = 4;
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $start = ($page - 1) * $limit;

                // Query untuk mengambil data dengan pagination dan kata kunci pencarian
                $searchTerm = isset($_POST['searchTerm']) ? $_POST['searchTerm'] : '';
                $whereClause = '';

                if (!empty($searchTerm)) {
                    $whereClause = "WHERE nama LIKE '%$searchTerm%' OR jenis_kelamin LIKE '%$searchTerm%'";
                }

                $query = "SELECT cs.id, cs.nama, cs.alamat, cs.jenis_kelamin, cs.no_telepon, cs.email, cs.jurusan_id, j.nama_jurusan, cs.status
                FROM tbl_calonsiswa cs
                LEFT JOIN tbl_jurusan j ON cs.jurusan_id = j.id
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
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["nama"] . "</td>";
                        echo "<td>" . $row["alamat"] . "</td>";
                        echo "<td>" . $row["jenis_kelamin"] . "</td>";
                        echo "<td>" . $row["no_telepon"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["nama_jurusan"] . "</td>";
                        ?>
                <td>
                    <form action="proses/proses_edit.php" method="post" role="form" id="status">
                        <!-- Add a hidden input field for the 'id' parameter -->
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                        <select class="form-select" name="status">
                            <option selected>Status</option>
                            <option value="Sedang diproses"
                                <?php if ($row['status'] == 'Sedang diproses') echo ' selected="selected"'; ?>>Sedang
                                diproses</option>
                            <option value="Lolos" <?php if ($row['status'] == 'Lolos') echo ' selected="selected"'; ?>>
                                Lolos</option>
                            <option value="Tidak Lolos"
                                <?php if ($row['status'] == 'Tidak Lolos') echo ' selected="selected"'; ?>>Tidak Lolos
                            </option>
                        </select>

                </td>
                <?php
                        echo '<td>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#detailModal' . $row["id"] . '" class="btn btn-info">Selengkapnya</a>'
                        ?>
                <button type="submit" class="btn btn-warning">Edit Status</button>
                </form>
                <?php echo '
                                <a href="proses/proses_hapus.php?id=' . $row["id"] . '" class="btn btn-danger">Hapus</a>
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
        $queryTotal = "SELECT COUNT(id) as total FROM tbl_calonsiswa";
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
    include "koneksi.php";

    // Mengambil data untuk modal
    $queryModal = "SELECT cs.*, j.nama_jurusan
    FROM tbl_calonsiswa cs
    LEFT JOIN tbl_jurusan j ON cs.jurusan_id = j.id";
    $resultModal = $conn->query($queryModal);

    if ($resultModal->num_rows > 0) {
    while ($rowModal = $resultModal->fetch_assoc()) {
    ?>
    <!-- Modal untuk menampilkan detail data -->
    <div class="modal fade" id="detailModal<?php echo $rowModal['id']; ?>" tabindex="-1" role="dialog"
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
                    <p>ID : <?php echo $rowModal['id']; ?></p>
                    <p>Nama : <?php echo $rowModal['nama']; ?></p>
                    <p>Alamat : <?php echo $rowModal['alamat']; ?></p>
                    <p>Tempat Lahir : <?php echo $rowModal['tempat_lahir']; ?></p>
                    <p>Tanggal Lahir : <?php echo $rowModal['tanggal_lahir']; ?></p>
                    <p>Agama : <?php echo $rowModal['agama']; ?></p>
                    <p>Nomor Telepon : <?php echo $rowModal['no_telepon']; ?></p>
                    <p>Email : <?php echo $rowModal['email']; ?></p>
                    <p>Nilai Rata Rata : <?php echo $rowModal['nilai_rata_rata']; ?></p>
                    <p>Status : <?php echo $rowModal['status']; ?></p>
                    <p>Jurusan : <?php echo $rowModal['nama_jurusan']; ?></p>

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