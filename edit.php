<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <?php include ('bootstrap/header.php')
     ?>
    <link rel="icon" type="image/x-icon" href="img/logo2.png" />
    <link rel="stylesheet" href="css/main2.css" />
    <title>Form Pendaftaran Siswa Baru</title>
</head>

<body>
    <header class="fixed">
        <nav class="topnav">
            <div class="logo"><img src="img/logo1.png" alt="logo" /></div>
            <div class="menu d-flex justify-content-end" id="myTopnav">
                <a href="index.php">Beranda</a>
                <a href="index.php#tentangkami">Tentang Kami</a>
                <a href="index.php#major">Program Keahlian</a>
                <a href="index.php#gallery">Galeri</a>
                <a href="index.php#contact">Kontak Kami</a>
                <a href="pendaftaran.php">Pendaftaran</a>
                <a href="login.php">Login</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </nav>
    </header>

    <section id="home">
        <div class="">
            <div class="header-home">
                <div class="regis-form">
                    <?php
        // Menghubungkan dengan database
        include "koneksi.php";

        // Ambil id_pembeli dari parameter URL

        $id = $_GET["id"];

        // Query untuk mendapatkan data sesuai id_pembeli
        $query = "SELECT * FROM tbl_calonsiswa WHERE id='$id'";

        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            // Mengambil data dari hasil query
            $row = $result->fetch_assoc();
        ?>
                    <h1>EDIT DATA CALON SISWA</h1>
                    <!-- FORM PEMBUKA -->
                    <form action="proses/proses_edit.php" method="post" role="form">
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="row g-3">
                                    <!-- Personal Information -->
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-person"></i></span>
                                            <input class="form-control" name="nama" value="<?php echo $row['nama']; ?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                            <?php echo "<td>" . $row["nama"] . "</td>"; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-crosshair"></i></span>
                                            <input type="text" class="form-control" name="tempat_lahir"
                                                value="<?php echo $row['tempat_lahir']; ?>" placeholder="Tempat lahir"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-calendar"></i></span>
                                            <input type="date" class="form-control" name="tanggal_lahir"
                                                value="<?php echo $row['tanggal_lahir']; ?>" placeholder="Tanggal Lahir"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-pin-map"></i></span>
                                            <textarea class="form-control" name="alamat"
                                                id="exampleFormControlTextarea1" rows="3"
                                                placeholder="Alamat"><?php echo $row['alamat']; ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <select class="form-select" name="jenis_kelamin">
                                            <option selected>Jenis Kelamin</option>
                                            <option value="Laki-Laki"
                                                <?php echo ($row['jenis_kelamin'] == 'Laki-Laki') ? 'selected' : ''; ?>>
                                                Laki-Laki</option>
                                            <option value="Perempuan"
                                                <?php echo ($row['jenis_kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>
                                                Perempuan</option>
                                        </select>
                                    </div>

                                    <div class="col-4">
                                        <select class="form-select" name="agama">
                                            <option <?php echo ($row['agama'] == 'agama') ? 'selected' : ''; ?>>Agama
                                            </option>
                                            <option value="islam"
                                                <?php echo ($row['agama'] == 'islam') ? 'selected' : ''; ?>>Islam
                                            </option>
                                            <option value="protestan"
                                                <?php echo ($row['agama'] == 'protestan') ? 'selected' : ''; ?>>
                                                Protestan</option>
                                            <option value="katolik"
                                                <?php echo ($row['agama'] == 'katolik') ? 'selected' : ''; ?>>Katolik
                                            </option>
                                            <option value="budha"
                                                <?php echo ($row['agama'] == 'budha') ? 'selected' : ''; ?>>Budha
                                            </option>
                                            <option value="hindhu"
                                                <?php echo ($row['agama'] == 'hindhu') ? 'selected' : ''; ?>>Hindhu
                                            </option>
                                            <option value="konghucu"
                                                <?php echo ($row['agama'] == 'konghucu') ? 'selected' : ''; ?>>Konghucu
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <select class="form-select" name="jurusan">
                                            <option selected>Jurusan Pilihan</option>
                                            <option value="Desain Komunikasi Visual"
                                                <?php echo ($row['jurusan'] == '1') ? 'selected' : ''; ?>>
                                                Desain Komunikasi Visual</option>
                                            <option value="Rekayasa Perangkat Lunak"
                                                <?php echo ($row['jurusan'] == '2') ? 'selected' : ''; ?>>
                                                Rekayasa Perangkat Lunak</option>
                                            <option value="Teknik Komputer dan Jaringan"
                                                <?php echo ($row['jurusan'] == '3') ? 'selected' : ''; ?>>
                                                Teknik Komputer dan Jaringan</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-envelope-at"></i></span>
                                            <input type="text" class="form-control" name="email"
                                                value="<?php echo $row['email']; ?>" placeholder="Email"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-telephone"></i></span>
                                            <input type="text" class="form-control" name="no_telepon"
                                                value="<?php echo $row['no_telepon']; ?>" placeholder="Nomor Telepon"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                    <!-- Average Score -->
                                    <label for="" class="text-light">Nilai Rata- Rata</label>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" name="nilai_matematika"
                                            placeholder="Matematika" maxlength="2">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" name="nilai_ipa" placeholder="IPA"
                                            maxlength="2">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" name="nilai_ips" placeholder="IPS"
                                            maxlength="2">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" name="nilai_b_indonesia"
                                            placeholder="B.Indonesia" maxlength="2">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" name="nilai_b_inggris"
                                            placeholder="B.Inggris" maxlength="2">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" name="nilai_agama"
                                            placeholder="Pen.Agama" maxlength="2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        <br />
                        <div class="row">
                            <div class="btn-primary">
                                <a href="data.php" class="col-6">Batalkan</a>
                                <button type="submit" class="col-6">Simpan</button>
                            </div>
                        </div>
                    </form>
                    <?php
        } else {
            echo "Data not found.";
        }

        // Menutup koneksi ke database
        $conn->close();
        ?>
                    <!-- FORM PENUTUP -->
                </div>
            </div>
        </div>
    </section>
</body>
<?php include ('bootstrap/footer.php')
     ?>
<div class="footer">
    <footer>
        <p>Copyright &copy; Project 3 - Group 5 2023</p>
    </footer>
</div>

</html>