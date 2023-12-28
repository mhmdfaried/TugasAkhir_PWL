<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Data</title>
    <link rel="icon" type="image/x-icon" href="img/img1.png" />
    <link rel="stylesheet" href="css/style_form.css">
</head>

<body>
    <section id="home">
        <div class="container">
            <div class="header-home">
                <div class="regis-form">
                    <?php
        // Menghubungkan dengan database
        include "koneksi.php";

        // Ambil id_pembeli dari parameter URL
        $id_pembeli = $_GET["id_pembeli"];

        // Query untuk mendapatkan data sesuai id_pembeli
        $query = "SELECT * FROM tbl_faried WHERE id_pembeli='$id_pembeli'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            // Mengambil data dari hasil query
            $row = $result->fetch_assoc();
        ?>
                    <h1>Edit Data</h1>
                    <form action="proses/proses_edit.php" method="post" role="form">
                        <div class="form-group">
                            <input type="hidden" name="id_pembeli" value="<?php echo $row['id_pembeli']; ?>">
                            <br />
                            <label>Nama : </label>
                            <br />
                            <input type="text" id="nama" name="nama" autofocus value="<?php echo $row['nama']; ?>"
                                required="" placeholder="Isi Nama" class="form-control" />
                            <br />
                            <label>Alamat : </label>
                            <br />
                            <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" required=""
                                placeholder="Isi Alamat" class="form-control" />
                            <br />
                            <label>Nomor Telephone : </label>
                            <br />
                            <input type="text" name="nohp" value="<?php echo $row['nohp']; ?>" required=""
                                placeholder="Isi No. Telephone" class="form-control" />
                            <br />
                            <label>Tanggal Transaksi : </label>
                            <br />
                            <input type="date" name="tgl_transaksi" value="<?php echo $row['tgl_transaksi']; ?>"
                                required="" placeholder="Isi Tanggal Transaksi." class="form-control" />
                            <br />
                            <label>Jenis Barang : </label>
                            <br />
                            <input type="text" name="jenis_barang" value="<?php echo $row['jenis_barang']; ?>"
                                required="" placeholder="Isi Jenis Barang" class="form-control" />
                            <br />
                            <label>Nama Barang : </label>
                            <br />
                            <input type="text" name="nama_barang" value="<?php echo $row['nama_barang']; ?>" required=""
                                placeholder="Isi Nama Barang" class="form-control" />
                            <br />
                            <label>Jumlah Barang : </label>
                            <br />
                            <input type="text" name="jumlah" value="<?php echo $row['jumlah']; ?>" required=""
                                placeholder="Isi Jumlah Barang" class="form-control" />
                            <br />
                            <label>Harga Barang : </label>
                            <br />
                            <input type="text" name="harga" value="<?php echo $row['harga']; ?>" required=""
                                placeholder="Isi Harga Barang" class="form-control" />
                        </div>

                        <br />
                        <div class="btn-primary">
                            <a href="data.php">Batalkan</a>
                            <button type="submit">Edit</button>
                        </div>
                    </form>
                    <?php
        } else {
            echo "Data not found.";
        }

        // Menutup koneksi ke database
        $conn->close();
        ?>
                </div>
            </div>
        </div>
    </section>
</body>

</html>