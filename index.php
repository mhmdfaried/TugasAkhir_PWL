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
        <?php include('bootstrap/header.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/x-icon" href="img/logo2.png" />
    <link rel="stylesheet" href="css/main.css" />
    <title>TugasAkhir_Kelompok2_PemorgramanWebLanjutan</title>
</head>

<body>
    <style>
        .modal {
            position: fixed;
        z-index: 5000;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        }
        #home{
            width: 100%;
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
       
        .button-container {
        display: flex;
        justify-content: center; /* membuat tombol berada di tengah secara horizontal */
        margin-top: 10px; /* jarak antara teks dan tombol */
    }

    .button-container button {
        margin: 0 5px; /* jarak antara tombol satu dengan yang lain */
    }
    </style>
    <header class="fixed ">
        <nav class="topnav ">
            <div class="logo"><img src="img/logo1.png" alt="logo" /></div>
            <div class="menu" id="myTopnav">
                <a href="#home">Beranda</a>
                <a href="#tentangkami">Tentang Kami</a>
                <a href="#major">Program Keahlian</a>
                <a href="#gallery">Galeri</a>
                <a href="#contact">Kontak Kami</a>
                <a href="pendaftaran.php">Pendaftaran</a>
                <a href="login.php">Login</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </nav>
    </header>

    <section id="home">
        <div class="container-new" id="home">
            <div class="header-home">
                <iframe class="video" src="https://www.youtube.com/embed/cNAsLEGtR2s" title="video school profile"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <div class="text-header">
                    <h1>SELAMAT DATANG DI SMK PESAT ITXPRO</h1>
                    <p class="deskripsi">
                        “Sekolah Umum Berbasis Keagamaan, Berkarakter Akhlak Mulia,
                        Pilihan Anak – Anak Terpilih”
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="tentangkami">
        <div class="header-kami">
            <br /><br />
            <h1>TENTANG KAMI</h1>
            <div class="deskripsi-kami">
                <h2>VISI</h2>
                <p>
                    Menjadi Sekolah Vokasi Informatika Terbaik Yang Menghasilkan Lulusan
                    Berakhlak Mulia, Expert dan Profesional.
                </p>
                <br /><br />
                <h2>PROFIL</h2>
                <p>
                    SMK Informatika Pesat IT XPro hadir untuk mendukung siswa/i memiliki
                    kompetensi masa depan. Diperkuat dengan karakter akhlak muliauntuk
                    menjadi seorang IT Expert dan Professional. SMK Informatika Pesat IT
                    XPro menghadirkan rancangan kurikulum yang terintegrasi dengan
                    kebutuhan industri dimana kreasi lebih banyak dibandingkan teori.
                    Sehingga siswa dapat memiliki portofolio karya, tersertifikasi,
                    diakui oleh dunia industri, memiliki semangat entrepreneur dan
                    melanjutkan studi yang linier.
                </p>
                <br /><br />
                <h2>KURIKULUM IT XPRO</h2>
                <p>
                    Kurikulum IT Xpro merupakan Curiculum Custom dengan melakukan
                    sinkronisasi muatan kurikulum dengan Dunia Industri. Proses
                    Pembelajaran menerapkan pendekatan kontekstual yang mengakomodir
                    kebutuhan keterampilan abad 21 (critical thinking, collaborative,
                    creative, communicative). Sehingga siswa dapat menguasai kompetensi
                    sesuai tuntutan zaman dan kebutuhan industri, serta didukung dengan
                    program keagamaan yang mengedepankan penerapan akhlak mulia demi
                    terciptanya visi sekolah.
                </p>
            </div>
        </div>
    </section>

    <section id="major">
    <div class="our-major">
        <br /><br /><br />
        <h1>PROGRAM KEAHLIAN</h1>
        <div class="deskripsi-major grid-container grid-column-major">
            <?php 
            include ('koneksi.php');
            $result = mysqli_query($conn, "SELECT * FROM tbl_jurusan");
            while ($d = mysqli_fetch_assoc($result)) {
                echo "   
                <div class='container-major'>
                    <div class='d-flex justify-content-end mb-5'>
                        <i data-bs-toggle='modal' data-bs-target='#staticBackdrop{$d['id']}' class='bi bi-question-circle-fill'></i>
                    </div>
                    <h2>{$d['nama_jurusan']}</h2>
                    <p>{$d['deskripsi']}</p>
                </div>";
            }
            ?> 
            <?php 
            $result = mysqli_query($conn, "SELECT * FROM tbl_jurusan");
            while ($d = mysqli_fetch_assoc($result)) {
                $biaya_spp_in_rupiah = number_format($d['biaya_spp'], 0, ',', '.');
                echo "
                <div class='modal fade' id='staticBackdrop{$d['id']}' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                    <div class='modal-dialog' style='max-width: 1000px;'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h1 class='modal-title fs-3' id='staticBackdropLabel'>{$d['nama_jurusan']}</h1>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>
                            <div class='modal-body'>
                            <div class=''>
                            <div class='row d-flex justify-content-center'>
                                <div class='col-3'>
                                    <div class='bg-warning rounded'>
                                    <p class='text-center pt-3'>Akreditasi</p>
                                        <p class='text-center pb-3'>{$d['akreditasi']}</p>
                                    </div>
                                </div>
                                <div class='col-3'>
                                    <div class='bg-danger rounded'>
                                    <p class='text-center pt-3'>Kapasitas</p>
                                    <p class='text-center pb-3'>{$d['kapasitas']}</p>
                                    </div>
                                </div>
                                <div class='col-3'>
                                <div class='bg-success rounded'>
                                <p class='text-center pt-3'>Kelas Tersedia</p>
                                    <p class='text-center pb-3'>{$d['kelas_tersedia']}</p>
                                </div>
                            </div>
                            </div>
                            </div>
                                <p class='text-dark mt-3'>{$d['deskripsi']}</P>
                                <p class='text-dark'>Ayo bergabung dengan program keahlian {$d['nama_jurusan']}! Kami mengundang calon pendaftar untuk mengejar impian bersama kami. Biaya SPP dapat dicicil dan memberikan akses ke pendidikan berkualitas. dengan biaya SPP <span class='fw-bold'>Rp.{$biaya_spp_in_rupiah}</span></p>
                            </div>
                            <div class='d-flex justify-content-center mb-3'>
                                <p class='text-dark h3'>Informasi Kontak</p>
                            </div>
                            <div class='row m-0 justify-content-center text-center'> 
                                <div class='col-3'>
                                <i class='bi bi-person display-5 text-dark'></i>
                                <p class='text-dark'>{$d['nama_koordinator']}</P>
                                </div>
                                <div class='col-3'>
                                <i class='bi bi-telephone display-5 text-dark'></i>
                                <p class='text-dark'>{$d['no_telepon_koordinator']}</P>
                                </div>
                                <div class='col-3 me-2'>
                                <i class='bi bi-envelope-at-fill display-5 text-dark'></i>
                                <p class='text-dark'>{$d['email_koordinator']}</P>
                                </div>
                            </div>
                            <div class='modal-footer'>
                                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                <a href='pendaftaran.php' type='button' class='btn btn-primary'>Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>";
            }
        ?> 
        </div>

        
    </div>
</section>

<!-- MODAL PENUTUP -->
    <section id="gallery">
        <div class="our-gallery">
            <br /><br /><br />
            <h1>GALERI</h1>
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="img/img3.jpg" style="width: 100%" />
                </div>

                <div class="mySlides fade">
                    <img src="img/img4.jpg" style="width: 100%" />
                </div>

                <div class="mySlides fade">
                    <img src="img/img5.jpg" style="width: 100%" />
                </div>
            </div>
            <br />
        </div>
    </section>

    <section id="contact">
        <div class="contact">
            <div class="contact-us grid-container grid-column-contact">
                <br />
                <div class="deskripsi-contact">
                    <h1>LOKASI</h1>
                    <h2>Jl Poras No. 7, Sindang Barang Loji</h2>
                    <ul>
                        <li>
                            <p>
                                Whatsapp :
                                <a
                                    href="https://api.whatsapp.com/send/?phone=6287711177442&text&type=phone_number&app_absent=0">0877-1117-7442
                                </a>
                            </p>
                        </li>
                        <li>
                            <p>
                                email :
                                <a href="https://smkit.pesat@gmail.com">smkit.pesat@gmail.com
                                </a>
                            </p>
                        </li>
                    </ul>
                </div>
                <iframe class="maps"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.5115676718647!2d106.76819540000001!3d-6.5831478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c4ff2d5ecf4b%3A0x9da488eab0064996!2sSMK%20informatika%20Pesat%20Kota%20Bogor!5e0!3m2!1sid!2sid!4v1686408889375!5m2!1sid!2sid"
                    width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <br />
</body>
<div class="footer">
    <footer>
        <p>Copyright &copy; Project 3 - Group 5 2023</p>
    </footer>
</div>
<script src="script.js" lang="javascript"></script>
<?php 
include('bootstrap/footer.php');
?> 
</html>