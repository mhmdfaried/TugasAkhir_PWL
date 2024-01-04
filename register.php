<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Register</title>
    <link rel="icon" type="image/x-icon" href="img/img1.png" />
    <?php 
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
            <div class="container mt-2">
                <p class="h1 justify-content-start">Register</p>
                <p class="fs-4 justify-content-start fw-0">Selamat Datang! Silahkan daftarkan akun anda</p>
            </div>
            <div class="form m-0 container">
                <form action="proses/proses_regis.php" method="post" role="form">
                    <div class="form-group">
                        <div class="row m-0">
                            <div class="col-6">
                                <label class="mb-2 m-0">Nama Lengkap : </label>
                                <br />
                                <input type="text" id="nama" name="nama" autofocus required=""
                                    placeholder=" masukan nama lengkap anda" class="form-control" />
                            </div>
                            <div class="col-6">
                                <label class="mb-2 m-0">username: </label>
                                <br />
                                <input type="text" id="username" name="username" autofocus required=""
                                    placeholder=" masukan username anda" class="form-control" />
                            </div>
                        </div>
                        <div class="container mt-2">
                            <label class="mb-2">Email : </label>
                            <br />
                            <input type="email" name="email" required=""
                                placeholder="masukan email anda" class="form-control" />
                        </div>
                        <div class="container mt-2">
                            <label class="mb-2">password : </label>
                            <br />
                            <input type="password" name="password" required=""
                                placeholder="masukan password anda" class="form-control" />
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
                    <button class="btn btn-primary" style="height: 40px; width: 100%;" type="submit">Sign in</button>
                    <p class="justify-content-end d-flex mt-2">sudah punya akun?  <a href="login.php"> masuk sekarang</a></p>
                    </div>
                  
                </form>
            </div>
        </div>
    </div>
    <div class="col-6 bg-img">
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