<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Data</title>
    <link rel="icon" type="image/x-icon" href="img/img1.png" />
    <link rel="stylesheet" href="css/style_form.css">
</head>

<body>
    <section id="home">
        <div class="container">
            <div class="header-home">
                <div class="regis-form">
                    <h1>Tambah Data</h1>
                    <form action="proses/proses_tambah.php" method="post" role="form">
                        <div class="form-group">
                            <br />
                            <label>Nama : </label>
                            <br />
                            <input type="text" id="nama" name="nama" autofocus required="" placeholder="Isi Nama"
                                class="form-control" />
                            <br />
                            <label>Alamat : </label>
                            <br />
                            <input type="text" name="alamat" required="" placeholder="Isi Alamat"
                                class="form-control" />
                            <br />
                            <label>Nomor Telephone : </label>
                            <br />
                            <input type="text" name="nohp" required="" placeholder="Isi No. Telephone"
                                class="form-control" />
                            <br />
                            <label>Tanggal Transaksi : </label>
                            <br />
                            <input type="date" name="tgl_transaksi" required="" placeholder="Isi Tanggal Transaksi."
                                class="form-control" />
                            <br />
                            <label>Jenis Barang : </label>
                            <br />
                            <input type="text" name="jenis_barang" required="" placeholder="Isi Jenis Barang"
                                class="form-control" />
                            <br />
                            <label>Nama Barang : </label>
                            <br />
                            <input type="text" name="nama_barang" required="" placeholder="Isi Nama Barang"
                                class="form-control" />
                            <br />
                            <label>Jumlah Barang : </label>
                            <br />
                            <input type="text" name="jumlah" required="" placeholder="Isi Jumlah Barang"
                                class="form-control" />
                            <br />
                            <label>Harga Barang : </label>
                            <br />
                            <input type="text" name="harga" required="" placeholder="Isi Harga Barang"
                                class="form-control" />
                        </div>

                        <br />
                        <div class="btn-primary">
                            <a href="data.php">Batalkan</a>
                            <button type="submit">Tambahkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>