<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Login</title>
    <link rel="icon" type="image/x-icon" href="img/img1.png" />
    <link rel="stylesheet" href="css/style_login.css">
</head>

<body>
    <section id="home">
        <div class="container">
            <div class="header-home">
                <div class="regis-form">
                    <h1>Login</h1>
                    <form action="proses/proses_login.php" method="post" role="form">
                        <div class="form-group">
                            <br />
                            <label>Username : </label>
                            <br />
                            <input type="text" id="username" name="username" autofocus required=""
                                placeholder="Isi Username Anda." class="form-control" />
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
                        <div class="form-group my-2">

                        </div>
                        <br />
                        <h1>Belum Punya Akun? </h1>
                        <div class="btn-primary">
                            <a href="index.php">Batalkan</a>
                            <a href="register.php">Register</a>
                            <button type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>