<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Login</title>
    <link rel="icon" type="image/x-icon" href="img/img1.png" />
    <?php
    session_start();

    // Check if the user is already logged in
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        // Redirect to another page (e.g., dashboard or home)
        header("Location: ./admin/");
        exit();
    }

    include ('bootstrap/header.php');
?>

    <!-- <link rel="stylesheet" href="css/style_login.css"> -->
</head>

<body>

<style>
    .bg-img{
        background-color: #0a4d68;
        background-image: linear-gradient(
                rgba(44, 62, 80, 0.6),
                rgba(248, 241, 234, 0.33)
            ),
            url("img/img3.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
    }
</style>


<div class="row m-0" style="height: 100vh;">
    <div class="col-6 d-flex justify-content-center mt-5">
        <div style="max-width: 600px; width: 100%;">
        <a href="index.php" class="btn btn-secondary position-absolute top-0 start-0 mt-3 ms-3 ">Back</a>
            <div class="image">
                <img src="img/logo1.png" height="150px" alt="image logo">
            </div>
            <div class="container mt-3">
                <p class="h1 justify-content-start">Log in</p>
                <p class="fs-4 justify-content-start fw-0">Selamat Datang! Silahkan masukan akun anda</p>
            </div>
            <div class="form m-0 container">
                <form action="proses/proses_login.php" method="post" role="form">
                    <div class="form-group">
                        <label class="mb-2">Username : </label>
                        <br />
                        <input type="text" id="username" name="username" autofocus required=""
                            placeholder="Silahkan masukan username anda" class="form-control" />
                        <br />
                        <label class="mb-2">Password : </label>
                        <br />
                        <input type="password" name="password" required=""
                            placeholder="Silahkan masukan password anda" class="form-control" />
                        <br />
                        <label>Masukkan Kode Captcha :</label>
                        <div class="captcha">
                            <img src="proses/proses_captcha.php" class="mb-3 mt-3 rounded" alt="gambar">
                            <input type="text" name="kodecaptcha" required="" placeholder="Isi Kode Captcha."
                                class="form-control" value="" maxlength="6" />
                        </div>
                    </div>
                    <br />
                    <button class="btn btn-primary" style="height: 40px; width: 100%;" type="submit">Sign in</button>
                    <p class="justify-content-end d-flex mt-2">Tidak punya akun?  <a href="register.php">daftar sekarang</a></p>
                </form>
            </div>
        </div>
    </div>
    <div class="col-6 bg-img">
    </div>
</div>
    <?php 
    include ('bootstrap/header.php');
    ?>
</body>

</html>