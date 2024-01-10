<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../img/logo2.png" />
    <title>DATA JURUSAN SMKS INFORMATIKA PASSWORD_DEFAULT</title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />

    <!-- CSS Files -->

    <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />

    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>
<style>
.form-control {
    border: 2px solid #343a40;
    /* Dark color for the border */
    border-radius: 8px;
    padding: 5px;
    /* Rounded corners */
}
</style>

<body class="g-sidenav-show bg-gray-100">
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="../" target="_blank">
                <img src="../img/logo1.png" class="navbar-brand-img h-100" alt="main_logo" />

            </a>
        </div>

        <hr class="horizontal light mt-0 mb-2" />

        <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="./index.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">group</i>
                        </div>

                        <span class="nav-link-text ms-1">Data Calon Siswa</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white " href="./jurusan.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">badge</i>
                        </div>

                        <span class="nav-link-text ms-1">Jurusan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active" href="./log.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dns</i>
                        </div>

                        <span class="nav-link-text ms-1">Log Admin</span>
                    </a>
                </li>
        </div>
    </aside>

    <main class="main-content border-radius-lg">
        <!-- Navbar -->

        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Log Admin</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Log Admin</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline">
                            <form id="searchForm" method="post">
                                <input type="text" name="searchTerm" class="form-control" id="searchInput"
                                    placeholder="Type here..." />
                            </form>
                        </div>
                    </div>
                     <ul class="navbar-nav justify-content-end">

                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>

                    <form action="./proses/proses_logout.php" method="post" id="logoutForm">
                        <a href="#" class="nav-link text-body font-weight-bold px-0" onclick="logout()">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">Logout</span>
                        </a>
                    </form>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- End Navbar -->


        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-12 position-relative z-index-2">
                    <div class="card card-plain mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column h-100">
                                        <h2 class="font-weight-bolder mb-0">Data Log Admin</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="d-flex">
                                    <div
                                        class="icon icon-shape icon-lg bg-gradient-warning shadow text-center border-radius-xl mt-n3 ms-4">
                                        <i class="material-icons opacity-10">dns</i>
                                    </div>
                                    <h6 class="mt-3 mb-2 ms-3">Data Log Admin</h6>
                                </div>
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-7">
                                            <div class="table-responsive">
                                                <table class="table align-items-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">No</th>
                                                            <th class="text-center">Tanggal</th>
                                                            <th class="text-center">Email</th>
                                                            <th class="text-center">Admin</th>
                                                            <th class="text-center">Username</th>
                                                            <th class="text-center">Status</th>
                                                            <th class="text-center">Tanggal Logout</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                            <?php 
                            $file = "../json/log.json";

                            $login = file_get_contents($file);

                            $data = json_decode($login, true);
                            $limit = 10;
                            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                            $start = ($current_page - 1) * $limit;
                            
                            // Get the data for the current page
                            $currentPageData = array_slice($data, $start, $limit);
                            
                         
                         
                            $no = 1;
                            foreach ($currentPageData  as $log) {
                                echo ("  <tr>
                                <td>
                                <div class='text-center'>
                                    <h6 class='text-sm font-weight-normal mb-0'>$no</h6>
                                </div>
                                </td>
                                <td>
                                <div class='text-center'>
                                    <h6 class='text-sm font-weight-normal mb-0'>{$log['tanggal']}</h6>
                                </div>
                                </td>
                                <td>
                                <div class='text-center'>
                                    <h6 class='text-sm font-weight-normal mb-0' style='max-width: 200px; overflow: hidden; text-overflow: ellipsis;'>{$log['email']}</h6>
                                </div>
                                </td>
                                <td class='align-middle text-sm'>
                                <div class='col text-center'>
                                    <h6 class='text-sm font-weight-normal mb-0'>{$log['nama']}</h6>
                                </div>
                                </td>
                                <td class='align-middle text-sm'>
                                <div class='col text-center'>
                                    <h6 class='text-sm font-weight-normal mb-0'>{$log['username']}</h6>
                                </div>
                                </td>
                                <td class='align-middle text-sm'>
                                <div class='col text-center'>
                                    <h6 class='text-sm font-weight-normal mb-0'>{$log['status']}</h6>
                                </div>
                                </td>
                                <td>
                                <div class='col text-center'>
                                    <h6 class='text-sm font-weight-normal mb-0'>
                                        " . ($log['status'] == 'Logout' ? $log['tanggal_logout'] : 'Belum Logout') . "
                                    </h6>
                                </div>
                            </td>g
                                <td class='align-middle text-sm'>
                                <div class='col text-center justify-content-center d-flex'>
                                <a href='proses/delete_satudata.php?tanggal={$log["tanggal"]}'  class='btn btn-danger me-2'><i class='bi bi-trash3'></i></a>
                                </div>
                            </td>
                            </tr>");
                            $no++;
                            }
                          
                            ?>
                                                    </tbody>
                                                </table>

                                                <!-- Pagination -->
                                                <?php
     
                      echo '<ul class="pagination justify-content-center">';
                      if ($current_page > 1) {
                          echo '<li class="page-item"><a class="page-link" href="?page=' . ($current_page - 1) . '"><</a></li>';
                      }
                      
                      for ($i = 1; $i <= ceil(count($data) / $limit); $i++) {
                          echo '<li class="page-item ' . ($current_page == $i ? 'active' : '') . '"><a class="page-link text-white" href="?page=' . $i . '">' . $i . '</a></li>';
                      }
                      
                      if ($current_page < ceil(count($data) / $limit)) {
                          echo '<li class="page-item"><a class="page-link" href="?page=' . ($current_page + 1) . '">></a></li>';
                      }
                      
                      echo '</ul>';
                      ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



    </main>

    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="material-icons py-2">settings</i>
        </a>
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Material UI Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1" />
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
                    </div>
                </a>

                <!-- Sidenav Type -->

                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>

                <div class="d-flex">
                    <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark"
                        onclick="sidebarType(this)">Dark</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent"
                        onclick="sidebarType(this)">Transparent</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white"
                        onclick="sidebarType(this)">White</button>
                </div>

                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>

                <!-- Navbar Fixed -->

                <div class="mt-3 d-flex">
                    <h6 class="mb-0">Navbar Fixed</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                            onclick="navbarFixed(this)" />
                    </div>
                </div>

                <hr class="horizontal dark my-3" />
                <div class="mt-2 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                            onclick="darkMode(this)" />
                    </div>
                </div>
                <hr class="horizontal dark my-sm-4" />


            </div>
        </div>
    </div>
    <?php 
     include "../koneksi.php";
            $result = mysqli_query($conn, "SELECT * FROM tbl_jurusan");
            while ($d = mysqli_fetch_assoc($result)) {
                $biaya_spp_in_rupiah = number_format($d['biaya_spp'], 0, ',', '.');
                echo "
                <div class='modal fade' id='staticBackdrop{$d['id']}' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                    <div class='modal-dialog' style='max-width: 1000px;'>
                        <div class='modal-content'>
                            <div class='modal-header bg-dark justify-content-center d-flex'>
                                <h1 class='modal-title fs-3 text-white' id='staticBackdropLabel'>{$d['nama_jurusan']}</h1>
                            </div>
                            <div class='modal-body'>
                            <div class=''>
                            <div class='row d-flex justify-content-center text-white'>
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
                                <div class='col-3'>
                                <div class='bg-primary rounded'>
                                <p class='text-center pt-3'>Biaya SPP</p>
                                    <p class='text-center pb-3'>Rp.{$biaya_spp_in_rupiah}</p>
                                </div>
                            </div>
                            </div>
                            </div>
                                <p class='text-dark mt-3'>{$d['deskripsi']}</P>
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
                                <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Close</button>
                            </div>
                        </div>
                    </div>
                </div>";
            }
            $conn->close();
        ?>
    <!-- EDIT JURUSAN -->
    <?php 
     include "../koneksi.php";
            $result = mysqli_query($conn, "SELECT * FROM tbl_jurusan");
            while ($d = mysqli_fetch_assoc($result)) {
                $biaya_spp_in_rupiah = number_format($d['biaya_spp'], 0, ',', '.');
                echo "
                <div class='modal fade' id='staticBackdrop1{$d['id']}' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                <div class='modal-dialog' style='max-width: 1000px;'>
                <div class='modal-content'>
                <div class='modal-header bg-dark justify-content-center d-flex'>
                <h1 class='modal-title fs-3 text-white' id='staticBackdropLabel'>Edit Jurusan</h1>
                </div>
                    <form action='proses/proses_editjurusan.php' method='post' role='form' id='editForm_{$d['id']}'>
                        <div class='modal-body'>
                          <div class='form-group'>
                            <div class='row'>
                             <input type='hidden' name='id' value='{$d['id']}'>
                                <div class='col-7'>
                                  <label>Nama Jurusan :</label>
                                  <input type='text' id='nama' name='nama_jurusan' class='form-control' value='{$d['nama_jurusan']}' required='' placeholder='' />
                                </div>
                                <div class='col-md-2'>
                                  <label>Akreditasi:</label>
                                  <input type='text' id='nama' name='akreditasi' class='form-control text-center' value='{$d['akreditasi']}' required='' placeholder='' />
                                </div>
                                <div class='col-md-2'>
                                  <label>Kapasitas</label>
                                  <input type='text' id='nama' name='kapasitas' class='form-control text-center' value='{$d['kapasitas']}' />
                                </div>
                                <div class='col-md-6 mt-2'>
                                <label class=''>Biaya SPP :</label>
                                <input type='text' id='nama' name='biaya_spp' class='form-control' value='{$d['biaya_spp']}' />
                                </div>
                                <div class='col-md-6 mt-2'>
                                <label>Persyaratan :</label>
                                <input type='text' id='nama' name='persyaratan' class='form-control' value='{$d['persyaratan']}' required='' placeholder='' />
                                </div>
                                <div class='col-md-12 mt-2'>
                                <label>Deskripsi :</label>
                                <textarea type='text' id='nama' name='deskripsi' class='form-control'  required='' placeholder='' >{$d['deskripsi']}</textarea>
                                </div>
                                <div class='col-md-4 mt-4'>
                                    <label>Nama Koordinator :</label>
                                    <input type='text' id='nama' name='nama_koordinator' class='form-control' value='{$d['nama_koordinator']}' required='' placeholder='' />
                                </div>
                                <div class='col-md-4 mt-4'>
                                  <label>Nomor Telepon Koordinator:</label>
                                  <input type='text' id='nama' name='no_telepon_koordinator' class='form-control' value='{$d['no_telepon_koordinator']}' required='' placeholder='' />
                                </div>
                                <div class='col-md-4 mt-4'>
                                    <label>Email Koordinator :</label>
                                    <input type='text' id='nama' name='email_koordinator' class='form-control' value='{$d['email_koordinator']}' required='' placeholder='' />
                                </div>
                              </div>
                            
                              <br />
                              <label>Kelas Tersedia :</label>
                              <input type='text' id='nama' name='kelas_tersedia' class='form-control' value='{$d['kelas_tersedia']}' required='' placeholder='' />
                            </div>
                          </div>

                            <div class='modal-footer'>
                                <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Close</button>
                                <a onClick='editConfirmation({$d['id']})' class='btn btn-success' data-bs-dismiss='modal'>Submit</a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>";
            }
        ?>

    <!--   Core JS Files   -->
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    function logout() {
        Swal.fire({
            title: 'Konfirmasi Logout',
            text: 'Anda yakin ingin logout?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Logout'
        }).then((result) => {
            if (result.isConfirmed) {
                // Lakukan submit formulir jika konfirmasi diterima
                document.getElementById('logoutForm').submit();
            }
        });
    }
    </script>
     <script>
        function editConfirmation(id) {
            Swal.fire({
                title: 'Konfirmasi Mengubah',
                text: 'Anda yakin ingin Mengubah ini?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Mengubah'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Lakukan submit formulir jika konfirmasi diterima
                    document.getElementById('editForm_'+ id).submit();
                }
            });
        }
       
    </script>
    <script>
    var win = navigator.platform.indexOf("Win") > -1;
    if (win && document.querySelector("#sidenav-scrollbar")) {
        var options = {
            damping: "0.5",
        };
        Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
    }
    </script>
    <script>
    document.getElementById("searchInput").addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode === 13) {
            document.getElementById("searchForm").submit();
        }
    });
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>