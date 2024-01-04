
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />

    <title>Material Dashboard 2 by Creative Tim</title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

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

  <body class="g-sidenav-show bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
          <img src="../img/logo1.png" class="navbar-brand-img h-100" alt="main_logo" />
          
        </a>
      </div>

      <hr class="horizontal light mt-0 mb-2" />

      <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link text-white active" href="./index.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
              </div>

              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="./tables.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">table_view</i>
              </div>

              <span class="nav-link-text ms-1">Tables</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="./billing.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">receipt_long</i>
              </div>

              <span class="nav-link-text ms-1">Billing</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="./virtual-reality.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">view_in_ar</i>
              </div>

              <span class="nav-link-text ms-1">Virtual Reality</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="./rtl.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
              </div>

              <span class="nav-link-text ms-1">RTL</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="./notifications.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">notifications</i>
              </div>

              <span class="nav-link-text ms-1">Notifications</span>
            </a>
          </li>

         
      </div>
    </aside>

    <main class="main-content border-radius-lg">
      <!-- Navbar -->

      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">dasboard</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">dashboard</h6>
          </nav>
          <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              <div class="input-group input-group-outline">
                <form id="searchForm" method="post">
                <input type="text" name="searchTerm" class="form-control" id="searchInput"  placeholder="Type here..."/>
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
             
              <li class="nav-item d-flex align-items-center">
                <a href="./pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
                  <i class="fa fa-user me-sm-1"></i>

                  <span class="d-sm-inline d-none">Logout</span>
                </a>
              </li>
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
                      <h2 class="font-weight-bolder mb-0">Data Calon Siswa</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-4">
              <div class="col-12">
                <div class="card mb-4">
                  <div class="d-flex">
                    <div class="icon icon-shape icon-lg bg-gradient-success shadow text-center border-radius-xl mt-n3 ms-4">
                      <i class="material-icons opacity-10" aria-hidden="true">language</i>
                    </div>
                    <h6 class="mt-3 mb-2 ms-3">Data Siswa</h6>
                  </div>
                  <div class="card-body p-3">
                    <div class="row">
                      <div class="col-lg-12 col-md-7">
                        <div class="table-responsive">
                          <table class="table align-items-center">
                            <thead>
                              <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Nama Siswa</th>
                                <th class="text-center">Nomor telepon</th>
                                <th class="text-center">Jurusan dipilih</th>
                                <th class="text-center">Nilai Rata-rata</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                            include "../koneksi.php";
                            $limit = 4;
                            $page = isset($_GET['page']) ? $_GET['page'] : 1;
                            $start = ($page - 1) * $limit;

                            // Query untuk mengambil data dengan pagination dan kata kunci pencarian
                            $searchTerm = isset($_POST['searchTerm']) ? $_POST['searchTerm'] : '';
                            $whereClause = '';

                            if (!empty($searchTerm)) {
                                $whereClause = "WHERE nama LIKE '%$searchTerm%' OR status LIKE '%$searchTerm%'";
                            }

                            $query = "SELECT cs.id, cs.nama, cs.alamat, cs.jenis_kelamin, cs.no_telepon,cs.nilai_rata_rata, cs.email,cs.status, cs.jurusan_id, j.nama_jurusan
                            FROM tbl_calonsiswa cs
                            LEFT JOIN tbl_jurusan j ON cs.jurusan_id = j.id
                            $whereClause
                            LIMIT $start, $limit";

                            $result = $conn->query($query);
                            if ($result === false) {
                              die('Error: ' . $conn->error);
                          }
                          if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                              echo ("
                              <tr>
                                <td>
                                  <div class='text-center'>
                                    <h6 class='text-sm font-weight-normal mb-0'>{$row['id']}</h6>
                                  </div>
                                </td>
                                <td>
                                  <div class='text-center'>
                                    <h6 class='text-sm font-weight-normal mb-0'>{$row['nama']}</h6>
                                  </div>
                                </td>
                                <td>
                                  <div class='text-center'>
                                    <h6 class='text-sm font-weight-normal mb-0'>{$row['no_telepon']}</h6>
                                  </div>
                                </td>
                                <td class='align-middle text-sm'>
                                  <div class='col text-center'>
                                    <h6 class='text-sm font-weight-normal mb-0'>{$row['nama_jurusan']}</h6>
                                  </div>
                                </td>
                                <td class='align-middle text-sm'>
                                  <div class='col text-center'>
                                    <h6 class='text-sm font-weight-normal mb-0'>{$row['nilai_rata_rata']}</h6>
                                  </div>
                                </td>
                                <td class='align-middle text-sm'>
                                <div class='col text-center'>
                                  <h6 class='text-sm font-weight-normal mb-0'>{$row['status']}</h6>
                                </div>
                                </td>
                                <td class='align-middle text-sm'>
                                <div class='col text-center'>
                                  <a href='proses/proses_hapus.php?id={$row['id']}' class='btn btn-danger'><i class='bi bi-trash3'></i></a>
                                  <a data-bs-toggle='modal' data-bs-target='#staticBackdrop{$row['id']}' class='btn btn-success'><i class='bi bi-info-circle'></i></a>
                                </div>
                              </td>
                              </tr>
                              ");
                            }
                          } else {
                              // Menampilkan pesan jika data tidak ditemukan
                              echo "<tr><td class='text-center' colspan='7'>Data not found.</td></tr>";
                          }
                         
                          
                          $conn->close();
                            ?>
                            </tbody>
                          </table>
                     
                          <!-- Pagination -->
                      <?php
                      // Include file koneksi database
                      include "../koneksi.php";

                      // Query untuk mendapatkan total data
                      $queryTotal = "SELECT COUNT(id) as total FROM tbl_calonsiswa";
                      $resultTotal = $conn->query($queryTotal);
                      $dataTotal = $resultTotal->fetch_assoc();
                      $totalPages = ceil($dataTotal['total'] / $limit);

                      // Menentukan halaman saat ini
                      $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

                      // Menampilkan tombol "Previous" jika halaman saat ini lebih dari 1
                      echo '<ul class="pagination justify-content-center">';
                      if ($current_page > 1) {
                          echo '<li class="page-item"><a class="page-link" href="?page=' . ($current_page - 1) . '"><</a></li>';
                      }

                      // Menampilkan nomor-nomor halaman
                      for ($i = 1; $i <= $totalPages; $i++) {
                        echo '<li class="page-item ' . ($current_page == $i ? 'active' : '') . '"><a class="page-link text-white" href="?page=' . $i . '">' . $i . '</a></li>';
                      }
                      // Menampilkan tombol "Next" jika halaman saat ini kurang dari total halaman
                      if ($current_page < $totalPages) {
                          echo '<li class="page-item"><a class="page-link" href="?page=' . ($current_page + 1) . '">></a></li>';
                      }

                      echo '</ul>';

                      $conn->close();
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

        <?php 
        include "../koneksi.php";
            $result = mysqli_query($conn, "SELECT * FROM tbl_calonsiswa");
            while ($d = mysqli_fetch_assoc($result)) {
                echo "
                <div class='modal fade' id='staticBackdrop{$d['id']}' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                    <div class='modal-dialog' style='max-width: 1000px;'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h1 class='modal-title fs-3' id='staticBackdropLabel'>{$d['nama']}</h1>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>
                            <div class='modal-body'>
                            <div class=''>
                            <div class='row d-flex justify-content-center'>
                                <div class='col-3'>
                                    <div class='bg-warning rounded'>
                                    <p class='text-center pt-3'>Akreditasi</p>
                                        <p class='text-center pb-3'>{$d['alamat']}</p>
                                    </div>
                                </div>
                                <div class='col-3'>
                                    <div class='bg-danger rounded'>
                                    <p class='text-center pt-3'>Kapasitas</p>
                                    <p class='text-center pb-3'>{$d['tempat_lahir']}</p>
                                    </div>
                                </div>
                                <div class='col-3'>
                                <div class='bg-success rounded'>
                                <p class='text-center pt-3'>Kelas Tersedia</p>
                                    <p class='text-center pb-3'>{$d['jenis_kelamin']}</p>
                                </div>
                            </div>
                            </div>
                            </div>
                                <p class='text-dark mt-3'>{$d['agama']}</P>
                            </div>
                            <div class='d-flex justify-content-center mb-3'>
                                <p class='text-dark h3'>Informasi Kontak</p>
                            </div>
                            <div class='row m-0 justify-content-center text-center'> 
                                <div class='col-3'>
                                <i class='bi bi-person display-5 text-dark'></i>
                                <p class='text-dark'>{$d['no_telepon']}</P>
                                </div>
                                <div class='col-3'>
                                <i class='bi bi-telephone display-5 text-dark'></i>
                                <p class='text-dark'>{$d['email']}</P>
                                </div>
                                <div class='col-3 me-2'>
                                <i class='bi bi-envelope-at-fill display-5 text-dark'></i>
                                <p class='text-dark'>{$d['nilai_rata_rata']}</P>
                                </div>
                                <div class='col-3 me-2'>
                                <i class='bi bi-envelope-at-fill display-5 text-dark'></i>
                                <p class='text-dark'>{$d['status']}</P>
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
            $conn->close();
        ?> 

       
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
              <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
            </div>
          </a>

          <!-- Sidenav Type -->

          <div class="mt-3">
            <h6 class="mb-0">Sidenav Type</h6>
            <p class="text-sm">Choose between 2 different sidenav types.</p>
          </div>

          <div class="d-flex">
            <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
            <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
            <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          </div>

          <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>

          <!-- Navbar Fixed -->

          <div class="mt-3 d-flex">
            <h6 class="mb-0">Navbar Fixed</h6>
            <div class="form-check form-switch ps-0 ms-auto my-auto">
              <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)" />
            </div>
          </div>

          <hr class="horizontal dark my-3" />
          <div class="mt-2 d-flex">
            <h6 class="mb-0">Light / Dark</h6>
            <div class="form-check form-switch ps-0 ms-auto my-auto">
              <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)" />
            </div>
          </div>
          <hr class="horizontal dark my-sm-4" />

         
        </div>
      </div>
    </div>
      
    <!--   Core JS Files   -->
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>

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
