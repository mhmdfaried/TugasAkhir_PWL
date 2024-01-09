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
                    <h1>PENDAFTARAN</h1>
                    <!-- FORM PEMBUKA -->
                    <form class="" action="proses/proses_pendaftaran.php" method="post" role="form" id='daftarForm'>
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="row g-3">
                                    <!-- Personal Information -->
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-person"></i></span>
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                placeholder="Nama Lengkap" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-crosshair"></i></span>
                                            <input type="text" class="form-control" id="tempat_lahir"
                                                name="tempat_lahir" placeholder="Tempat lahir" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-calendar"></i></span>
                                            <input type="date" class="form-control" id="tanggal_lahir"
                                                name="tanggal_lahir" placeholder="Tanggal Lahir" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-pin-map"></i></span>
                                            <textarea class="form-control" id="alamat" name="alamat" rows="3"
                                                placeholder="Alamat"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                                            <option selected>Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <select class="form-select" id="agama" name="agama">
                                            <option selected>Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Protestan">Protestan</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Hindhu">Hindhu</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <select class="form-select" id="jurusan" name="jurusan">
                                            <option selected>Jurusan Pilihan</option>
                                            <option value="1">Desain Komunikasi Visual</option>
                                            <option value="2">Rekayasa Perangkat Lunak</option>
                                            <option value="3">Teknik Komputer dan Jaringan</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-envelope-at"></i></span>
                                            <input type="text" class="form-control" id="email" name="email"
                                                placeholder="Email" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-telephone"></i></span>
                                            <input type="text" class="form-control" id="no_telepon" name="no_telepon"
                                                placeholder="Nomor Telepon" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                    <!-- Average Score -->
                                    <label for class="text-light">Nilai Rata- Rata</label>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" id="nilai_matematika"
                                            name="nilai_matematika" placeholder="Matematika" maxlength="2">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" id="nilai_ipa" name="nilai_ipa"
                                            placeholder="IPA" maxlength="2">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" id="nilai_ips" name="nilai_ips"
                                            placeholder="IPS" maxlength="2">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" id="nilai_b_indonesia"
                                            name="nilai_b_indonesia" placeholder="B.Indonesia" maxlength="2">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" id="nilai_b_inggris"
                                            name="nilai_b_inggris" placeholder="B.Inggris" maxlength="2">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" id="nilai_agama" name="nilai_agama"
                                            placeholder="Pen.Agama" maxlength="2">
                                    </div>
                                </div>
                            </div>

                            <!-- Parent Information -->
                            <div class="col-6">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-person-standing"></i></span>
                                            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah"
                                                placeholder="Nama Ayah" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-person-standing-dress"></i></span>
                                            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu"
                                                placeholder="Nama Ibu" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-building-fill"></i></span>
                                            <input type="text" class="form-control" id="pekerjaan_ayah"
                                                name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-building-fill"></i></span>
                                            <input type="text" class="form-control" id="pekerjaan_ibu"
                                                name="pekerjaan_ibu" placeholder="Pekerjaan Ibu">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-mortarboard"></i></span>
                                            <input type="text" class="form-control" id="pendidikan_ayah"
                                                name="pendidikan_ayah" placeholder="Pendidikan Ayah">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-mortarboard"></i></span>
                                            <input type="text" class="form-control" id="pendidikan_ibu"
                                                name="pendidikan_ibu" placeholder="Pendidikan Ibu">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-telephone"></i></span>
                                            <input type="text" class="form-control" id="no_teleponortu"
                                                name="no_teleponortu" placeholder="Nomor Telepon Orangtua"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                            <input type="text" class="form-control" id="penghasilan" name="penghasilan"
                                                placeholder="Jumlah Penghasilan Orangtua" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-pin-map"></i></span>
                                            <textarea class="form-control" id="alamat_ortu" name="alamat_ortu" rows="3"
                                                placeholder="Alamat Orangtua"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        <br />
                        <div class="row">
                            <div class="btn-primary">
                                <a href="index.php" class="col-6">Batalkan</a>
                                <a onclick="DaftarConfirm()" class="col-6">Simpan</a>
                            </div>
                        </div>
                    </form>
                    <!-- FORM PENUTUP -->
                </div>
            </div>
        </div>
    </section>
</body>
<?php include ('bootstrap/footer.php')
     ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function DaftarConfirm() {
    Swal.fire({
        title: 'Konfirmasi Pendaftaran',
        text: 'Anda yakin ingin Mendaftar?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Daftar'
    }).then((result) => {
        if (result.isConfirmed) {
            // Lakukan submit formulir jika konfirmasi diterima
            document.getElementById('daftarForm').submit();
        }
    });
}
</script>
<div class="footer">
    <footer>
        <p>Copyright &copy; Project 3 - Group 5 2023</p>
    </footer>
</div>

</html>