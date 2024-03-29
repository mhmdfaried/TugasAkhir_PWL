<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="img/logo2.png" />
    <title>HALAMAN REGISTER ADMIN</title>
    <link rel="stylesheet" href="css/style_form.css" />
    <?php 
    include ('bootstrap/header.php');
    ?>
    <!-- <link rel="stylesheet" href="css/style_login.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>


    <style>
    .bg-img {
        background-color: #0a4d68;
        background-image: linear-gradient(rgba(44, 62, 80, 0.6),
                rgba(248, 241, 234, 0.33)),
            url("img/img3.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>
    <?php
        session_start();


        // Check if the user is already logged in
        if(isset($_SESSION['status']) && $_SESSION['status'] === "login") {
            header("Location: login.php");
            exit;
}
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Sertakan file koneksi_database.php
            include('koneksi.php');

            // Simpan input dari form ke dalam variabel
            $nama = $_POST["nama"];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            // Query untuk menyimpan data registrasi ke dalam database
            $query = "INSERT INTO tbl_admin (nama, username, email, password) VALUES ('$nama', '$username', '$email', '$password')";

            if ($conn->query($query) === TRUE) {
                // Registrasi berhasil, redirect ke halaman login atau halaman lain yang sesuai
                echo "<script>
                Swal.fire({
                    title: 'Berhasil Daftar!',
                    text: 'Pendafftaran Berhasil',
                    icon: 'success',
                    timer: 3000,
                    confirmButtonColor: '#0d6efd',
                    timerProgressBar: true,
                    willClose: () => {
                        window.location = 'login.php';
                    }
                });
            </script>";
                exit();
            } else {
                // Registrasi gagal, tampilkan pesan error atau redirect ke halaman registrasi
                    echo "
                    Swal.fire({
                        title: 'Error!',
                        text: 'Kamu Berhasil Masuk!',
                        icon: 'error',
                        timer: 3000,
                        confirmButtonColor: '#dc3545',
                        timerProgressBar: true,
                        willClose: () => {
                            window.location = 'login.php';
                        }
                    });
                    ";
                echo "Error: " . $query . "<br>" . $conn->error;
            }

            // Tutup koneksi database
            $conn->close();
        }
    ?>
    <div class="row m-0" style="height: 100vh;">
        <div class="col-5 d-flex justify-content-center mt-5">
            <div style="max-width: 600px; width: 100%;">
                <a href="index.php" class="btn btn-primary position-absolute top-0 start-0 mt-3 ms-3 "
                    style="font-family: 'Poppins';">Kembali</a><br><br>
                <div class="image">
                    <img src="img/logo1.png" height="150px" alt="image logo">
                </div>
                <div class="container mt-2">
                    <p class="h1 justify-content-start">Daftar Akun Admin</p>
                    <!-- <p class="fs-4 justify-content-start fw-0">Selamat Datang! Silahkan daftarkan akun anda</p> -->
                </div>
                <div class="form m-0 container">
                    <form action="" method="post" role="form">
                        <div class="form-group">
                            <div class="row m-0">
                                <div class="col-6">
                                    <label class="mb-2 m-0">Nama Lengkap : </label>
                                    <br />
                                    <input type="text" id="nama" name="nama" autofocus required=""
                                        placeholder="Masukan Nama Lengkap Anda" class="form-control" />
                                </div>
                                <div class="col-6">
                                    <label class="mb-2 m-0">Username: </label>
                                    <br />
                                    <input type="text" id="username" name="username" required=""
                                        placeholder="Masukan Username Anda" class="form-control" />
                                </div>
                            </div>
                            <div class="container mt-2">
                                <label class="mb-2">Email : </label>
                                <br />
                                <input type="email" name="email" required="" placeholder="Masukan Email Anda"
                                    class="form-control" />
                            </div>
                            <div class="container mt-2">
                                <label class="mb-2">Password : </label>
                                <br />
                                <input type="password" name="password" required="" placeholder="Masukan Password Anda"
                                    class="form-control" />
                            </div>
                            <div class="container mt-2">
                                <label>Masukkan Kode Captcha :</label>
                                <div class="captcha">
                                    <img src="proses/proses_captcha.php" class="mb-2 rounded" alt="gambar">
                                    <input type="text" name="kodecaptcha" required="" placeholder="Isi Kode Captcha."
                                        class="form-control" value="" maxlength="6" />
                                </div>
                            </div>
                        </div>

                        <div class="container mt-3">
                            <button class="btn btn-primary" style="height: 40px; width: 100%; font-family:'Poppins'; "
                                type=" submit">Daftar</button>
                            <p class="justify-content-end d-flex mt-3">Sudah Punya Akun? <a href="login.php"> Masuk
                                    Sekarang</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-7 bg-img">
        </div>
    </div>

    <!-- 
    <section id="home">
        <div class="container">
            <div class="header-home">
                <div class="regis-form">
                    <h1>Register</h1>
                    <form action="proses/proses_regis.php" method="post" role="form">
                        <div class="form-group">
                            <br />
                            <label>Nama Lengkap : </label>
                            <br />
                            <input type="text" id="nama" name="nama" autofocus required=""
                                placeholder="Isi Nama Lengkap Anda." class="form-control" />
                            <br />
                            <label>Username : </label>
                            <br />
                            <input type="text" id="username" name="username" required=""
                                placeholder="Isi Username Anda." class="form-control" />
                            <br />
                            <label>Email : </label>
                            <br />
                            <input type="email" id="email" name="email" required="" placeholder="Isi Email Anda."
                                class="form-control" />
                            <br />
                            <label>Password : </label>
                            <br />
                            <input type="password" name="password" required="" placeholder="Isi Password Anda."
                                class="form-control" />
                            <br />
                            <label>Masukkan Kode Captcha :</label>
                            <div class="captcha">
                                <img src="proses/proses_captcha.php" alt="gambar">
                                <input type="text" name="kodecaptcha" required="" placeholder="Isi Kode Captcha."
                                    class="form-control" value="" maxlength="6" />
                            </div>
                        </div>

                        <br />
                        <div class="btn-primary">
                            <a href="login.php">Kembali</a>
                            <button type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->
    <?php 
    include ('bootstrap/header.php');
    ?>
</body>

</html>