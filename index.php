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
    <link rel="icon" type="image/x-icon" href="img/logo2.png" />
    <link rel="stylesheet" href="css/main.css" />
    <title>TugasAkhir_Kelompok2_PemorgramanWebLanjutan</title>
</head>

<body>
    <header class="fixed">
        <nav class="topnav">
            <div class="logo"><img src="img/logo1.png" alt="logo" /></div>
            <div class="menu" id="myTopnav">
                <a href="#home">Beranda</a>
                <a href="#tentangkami">Tentang Kami</a>
                <a href="#major">Program Keahlian</a>
                <a href="#gallery">Galeri</a>
                <a href="#contact">Kontak Kami</a>
                <a href="regis.jsp">Pendaftaran</a>
                <a href="login.php">Login</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </nav>
    </header>

    <section id="home">
        <div class="container" id="home">
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
                <div class="container-major">
                    <h2>Desain Komunikasi Visual</h2>
                    <p>
                        Berfokus pada kompetensi di bidang Desain, Fotografi,
                        Sinematografi, 3D Modelling, dan Visual Effect, Lulusan dapat
                        bekerja sebagai Designer, Sinematografer, 3D Artist dan Visual
                        Efect.
                    </p>
                    <br /><br />
                </div>
                <div class="container-major">
                    <h2>Teknik Komputer Jaringan</h2>
                    <p>
                        Berfokus pada kompetensi di bidang Engineering, dan Network
                        Infrastructur. Lulusan dapat bekerja sebagai IT Support, Server
                        Administrator, Cyber Security dan Network Engineer.
                    </p>
                    <br /><br />
                </div>
                <div class="container-major">
                    <h2>Rekayasa Perangkat Lunak</h2>
                    <p>
                        Berfokus pada kompetensi siswa di bidang : Website, Aplikasi
                        berbasis Dekstop, dan Android. Lulusan dapat bekerja sebagai
                        Developer Application.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery">
        <div class="our-gallery">
            <br /><br /><br />
            <h1>GALERI</h1>
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="img/img2.jpg" style="width: 100%" />
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

    <section id="contact" style="position: relative">
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
    </section>
    <br />
</body>
<div class="footer">
    <footer>
        <p>Copyright &copy; Project 3 - Group 5 2023</p>
    </footer>
</div>
<script src="script.js" lang="javascript"></script>

</html>