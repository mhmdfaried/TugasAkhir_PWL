<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="img/logo2.png" />
    <title>HALAMAN LOGIN ADMIN</title>
    <link rel="stylesheet" href="css/style_form.css" />
    <?php 
    include ('bootstrap/header.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <link rel="stylesheet" href="css/style_login.css"> -->
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
    header("Location: admin/");
    exit;
}

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($data);

    $userCaptcha = $_POST['kodecaptcha'];
    $captchaSession = $_SESSION['captcha'];

    if (empty($userCaptcha) || strtolower($userCaptcha) !== strtolower($captchaSession)) {
        echo "
        <script>
            Swal.fire({
                title: 'Error!',
                text: 'Capcha Salah kamu buta huruf',
                icon: 'error',
                timer: 3000,
                confirmButtonColor: '#dc3545',
                timerProgressBar: true,
                willClose: () => {
                    window.location = 'login.php';
                }
            });
        </script>";
    } else {
        if ($cek > 0) {


            $file = 'json/log.json';
            $ppdb = file_get_contents($file);
            $logData = json_decode($ppdb, true);
            $logData[] = array(  
                'username' => $username,
                'password' => $password, 
                'tanggal' => date('Y-m-d H:i:s'),
            );
            $jsonfile = json_encode($logData, JSON_PRETTY_PRINT);
            file_put_contents($file, $jsonfile);
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            $_SESSION['logged_in'] = true;
            echo "
            <script>
                Swal.fire({
                    title: 'Selamat datang!',
                    text: 'Kamu Berhasil Masuk!',
                    icon: 'success',
                    timer: 3000,
                    confirmButtonColor: '#0d6efd',
                    timerProgressBar: true,
                    willClose: () => {
                        window.location = 'admin/';
                    }
                });
            </script>";
        } else {
            echo "
            <script>
                Swal.fire({
                    title: 'Error!',
                    text: 'Username and Password are incorrect.',
                    icon: 'error',
                    timer: 3000,
                    confirmButtonColor: '#dc3545',
                    timerProgressBar: true,
                    willClose: () => {
                        window.location = 'login.php';
                    }
                });
            </script>";
        }
    }
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
                    <p class="h1 justify-content-start">Masuk ke Akun Admin</p>
                    <!-- <p class="fs-4 justify-content-start fw-0">Selamat Datang! Silahkan masukan akun anda</p> -->
                </div>
                <div class="form m-0 container">
                    <form action="" method="post" role="form">
                        <div class="form-group">
                            <label class="mb-2">Username : </label>
                            <br />
                            <input type="text" id="username" name="username" autofocus required=""
                                placeholder="Silahkan Masukkan Username Anda" class="form-control" />
                            <br />
                            <label class="mb-2">Password : </label>
                            <br />
                            <input type="password" name="password" required=""
                                placeholder="Silahkan Masukkan Password Anda" class="form-control" />
                            <br />
                            <label>Masukkan Kode Captcha :</label>
                            <div class="captcha">
                                <img src="proses/proses_captcha.php" class="mb-3 mt-3 rounded" alt="gambar">
                                <input type="text" name="kodecaptcha" required="" placeholder="Isi Kode Captcha."
                                    class="form-control" value="" maxlength="6" />
                            </div>
                        </div>
                        <br />
                        <button class="btn btn-primary" style="height: 40px; width: 100%;" type="submit">Masuk</button>
                        <p class="justify-content-end d-flex mt-3">Tidak Punya Akun? <a href="register.php"> Daftar
                                Sekarang</a></p>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-7    bg-img">
        </div>
    </div>
    <?php 
    include ('bootstrap/header.php');
    ?>

</body>

</html>