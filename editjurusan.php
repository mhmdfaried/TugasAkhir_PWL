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
        $id = $_GET["id"];

        // Query untuk mendapatkan data sesuai id_pembeli
        $query = "SELECT * FROM tbl_jurusan WHERE id='$id'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            // Mengambil data dari hasil query
            $row = $result->fetch_assoc();
        ?>
                    <h1>Edit Data</h1>
                    <form action="proses/proses_editjurusan.php" method="post" role="form">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <br />
                            <label>Nama Jurusan : </label>
                            <br />
                            <input type="text" id="nama" name="nama_jurusan" value="<?php echo $row['nama_jurusan']; ?>"
                                required="" placeholder="" class="form-control" />
                            <br />
                            <label>Akreditasi : </label>
                            <br />
                            <input type="text" name="akreditasi" value="<?php echo $row['akreditasi']; ?>" required=""
                                placeholder="" class="form-control" />
                            <br />
                            <label>Kapasitas : </label>
                            <br />
                            <input type="text" name="kapasitas" value="<?php echo $row['kapasitas']; ?>" required=""
                                placeholder="" class="form-control" />
                            <br />
                            <label>BIAYA SPP : </label>
                            <br />
                            <input type="text" name="biaya_spp" value="<?php echo $row['biaya_spp']; ?>" required=""
                                placeholder="" class="form-control" />
                            <br />
                            <label>Persyaratan : </label>
                            <br />
                            <input type="text" name="persyaratan" value="<?php echo $row['persyaratan']; ?>" required=""
                                placeholder="" class="form-control" />
                            <br />
                            <label>Deskripsi : </label>
                            <br />
                            <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="4"
                                placeholder=""><?php echo $row['deskripsi']; ?></textarea>
                            <br />
                            <label>Nama Koordinator : </label>
                            <br />
                            <input type="text" name="nama_koordinator" value="<?php echo $row['nama_koordinator']; ?>"
                                required="" placeholder="" class="form-control" />
                            <br />
                            <label>Email Koordinator : </label>
                            <br />
                            <input type="text" name="email_koordinator" value="<?php echo $row['email_koordinator']; ?>"
                                required="" placeholder="" class="form-control" />
                            <br />
                            <label>Nomor Telepon Koordinator : </label>
                            <br />
                            <input type="text" name="no_telepon_koordinator"
                                value="<?php echo $row['no_telepon_koordinator']; ?>" required="" placeholder=""
                                class="form-control" />
                            <br />
                            <label>Kelas Tersedia : </label>
                            <br />
                            <input type="text" name="kelas_tersedia" value="<?php echo $row['kelas_tersedia']; ?>"
                                required="" placeholder="" class="form-control" />
                        </div>

                        <br />
                        <div class="btn-primary">
                            <a href="datajurusan.php">Batalkan</a>
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