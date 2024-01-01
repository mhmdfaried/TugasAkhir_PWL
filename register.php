<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Register</title>
    <link rel="icon" type="image/x-icon" href="img/img1.png" />
    <link rel="stylesheet" href="css/style_login.css">
</head>

<body>
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
    </section>
</body>

</html>