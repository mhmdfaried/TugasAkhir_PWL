<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <?php include ('bootstrap/header.php')
     ?>
    <link rel="icon" type="image/x-icon" href="img/img3.png" />
    <link rel="stylesheet" href="css/main2.css" />
    <title>Project 3 - Group 5</title>
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
            <form class="" action="register" method="post" role="form" >
              <div class="row g-3">
                <div class="col-6">
                  <div class="row g-3">
                  <div class="col-md-12 ">
                      <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                  <input type="text" class="form-control" placeholder="Nama Lengkap" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                    </div>
                    <div class="col-md-6 ">
                      <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-crosshair"></i></span>
                  <input type="text" class="form-control" placeholder="Tempat lahir" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar"></i></span>
                        <input type="date" class="form-control" placeholder="Tanggal Lahir" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                    </div>
                    <div class="col-12">
                      <div class="input-group">
                      <span class="input-group-text" id="basic-addon1"><i class="bi bi-pin-map"></i></span>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat"></textarea>
                    </div>
                    </div>
                    <div class="col-6">
                    <select class="form-select">
                      <option selected>Jenis Kelamin</option>
                      <option value="laki-laki">Laki-Laki</option>
                      <option value="perempuan">Perempuan</option>
                    </select>
                    </div>
                    <div class="col-6">
                    <select class="form-select " >
                      <option selected>Agama</option>
                      <option value="islam">Islam</option>
                      <option value="protestan">Protestan</option>
                      <option value="katolik">Katolik</option>
                      <option value="budha">Budha</option>
                      <option value="hindhu">Hindhu</option>
                      <option value="konghucu">Konghucu</option>
                    </select>
                    </div>
                    <div class="col-6">
                        <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope-at"></i></span>
                        <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone"></i></span>
                  <input type="text" class="form-control" placeholder="Nomor Telepon" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                    </div>
                    <label for="" class="text-light">Nilai Rata- Rata</label>
                    <div class="col-md-2">
                    <input type="text" class="form-control" id="inputZip" placeholder="Matematika" maxlength="2">
                    </div>
                    <div class="col-md-2">
                    <input type="text" class="form-control" id="inputZip" placeholder="IPA" maxlength="2">
                    </div>
                    <div class="col-md-2">
                    <input type="text" class="form-control" id="inputZip" placeholder="IPS" maxlength="2">
                    </div>
                    <div class="col-md-2">
                    <input type="text" class="form-control" id="inputZip" placeholder="B.Indonesia" maxlength="2">
                    </div>
                    <div class="col-md-2">
                      <input type="text" class="form-control" id="inputZip" placeholder="B.Inggris" maxlength="2">
                    </div>
                    <div class="col-md-2">
                      <input type="text" class="form-control" id="inputZip" placeholder="Pen.Agama" maxlength="2">
                    </div>

              </div>
              </div>
                <div class="col-6">
                  <div class="row g-3">
                  <div class="col-md-6 ">
                      <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-standing"></i></span>
                  <input type="text" class="form-control" placeholder="Nama Ayah" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                    </div>
                    <div class="col-md-6 ">
                      <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-standing-dress"></i></span>
                  <input type="text" class="form-control" placeholder="Nama Ibu" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group">
                          <span class="input-group-text" id="basic-addon1"><i class="bi bi-building-fill"></i></span>
                          <input type="text" class="form-control" placeholder="Pekerjaan Ayah" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-6">
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-building-fill"></i></span>
                        <input class="form-control"  placeholder="Pekerjaan Ibu"></input>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-mortarboard"></i></span>
                        <input class="form-control"  placeholder="Pendidikan Ayah"></input>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-mortarboard"></i></span>
                        <input class="form-control"  placeholder="Pendidikan Ibu"></input>
                      </div>
                    </div>
                   
                    <div class="col-12">
                        <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone"></i></span>
                        <input type="text" class="form-control" placeholder="Nomor Telepon Orangtua" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    </div>
                    <div class="col-12">
                      <div class="input-group">
                      <span class="input-group-text" id="basic-addon1"><i class="bi bi-pin-map"></i></span>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat Orangtua"></textarea>
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
                <button type="submit" class="col-6">Simpan</button>
                </div>
              </div>
            </form>
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
