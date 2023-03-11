<?php session_start();
error_reporting(0);
require '../../system/_core/csrf.php';
CSRF::init();
if (isset($_SESSION['limit']) && isset($_SESSION['usernama'])) {
  $limit = $_SESSION['limit'];
  $usernama = $_SESSION['usernama'];
  $nama = $_SESSION['nama'];
  $tabel_id = $_SESSION['tabel_id'];
  $role = $_SESSION['role'];

  // if ($role == 23) {
  //   $erole = 'Warga';
  // } else if ($role == 69) {
  //   $erole = 'Pengurus';
  // } else {
  //   $erole = 'Admin';
  // }
  if (time() < $limit) {
  } else {
    unset($_SESSION['limit']);
    session_destroy();
    die("<script>window.location = '../../system/_core/konfirmasi-akses.php'</script>");
  }
} else {
  die("<script>window.location = '../../system/_core/konfirmasi-akses.php'</script>");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RRasir</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../resource/assets/img/RR.PNG" rel="icon">
  <link href="../../resource/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../resource/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../resource/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../resource/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../resource/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../resource/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../resource/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <!-- Template DataTables -->
  <link href="../../resource/assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="../../resource/assets/dataTables/DataTables/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <link href="../../resource/assets/dataTables/Buttons/css/buttons.bootstrap5.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="../../resource/assets/css/style.css" rel="stylesheet">
  <!-- Template Sweetalert2 -->
  <link href="../../resource/assets/css/sweetalert2.min.css" rel="stylesheet">
  <script src="../../resource/assets/js/sweetalert2.all.min.js"></script>
  <script src="../../resource/assets/dataTables/jquery-3.5.1.min.js"></script>
  <script src="../../resource/assets/js/custom.js"></script>


  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <!-- start logo -->
    <div class="d-flex align-items-center justify-content-between">
      <a href="../main/" class="logo d-flex align-items-center">
        <img src="../../resource/assets/img/Renggali.png" class="rounded-circle">
        <span class="d-none d-lg-block"> RRasir</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <!-- endLogo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../../resource/assets/img/profile-img.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= $nama; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?= $nama; ?></h6>
              <span><?= $usernama; ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Lihat Profil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <button name="logout" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#modalCP"><i class="bi bi-lock"></i>Ganti Password</button>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <form action="../../system/_core/logout.php" method="post">
                <button name="logout" class="dropdown-item d-flex align-items-center"><i class="bi bi-box-arrow-right"></i>Sign Out</button>
                <?php print CSRF::tokenInput(); ?>
              </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->

  <div id="sidebar" class="sidebar">
    <ul id="sidebar-nav" class="sidebar-nav">
      <ul class="nav-item" id="sides">
        <li><a class="nav-link collapsed" href="../main/"><i class="bi bi-grid"></i><span>Dashboard</span></a></li>
        <li><a class="nav-link collapsed" data-bs-target="#data-warga" data-bs-toggle="collapse" href="#"><i class="bi bi-folder-check"></i><span>Kelola Data</span><i class="bi bi-chevron-down ms-auto"></i></a>
          <ul id="data-warga" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li><a href="../data_warga/"><i class="bi bi-circle"></i><span>Data Warga</span></a></li>
            <li><a href="../data_keluarga/"><i class="bi bi-circle"></i><span>Data Keluarga</span></a></li>
            <li><a href="../data_pengurus/"><i class="bi bi-circle"></i><span>Data Pengurus</span></a></li>
          </ul>
        </li>
        <li><a class="nav-link collapsed" data-bs-target="#mutasi" data-bs-toggle="collapse" href="#"><i class="bi bi-repeat"></i><span>Mutasi Warga</span><i class="bi bi-chevron-down ms-auto"></i></a>
          <ul id="mutasi" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          </ul>
        </li>
        <li><a class="nav-link collapsed" data-bs-target="#surat" data-bs-toggle="collapse" href="#"><i class="bi bi-envelope-paper"></i><span>Data Surat</span><i class="bi bi-chevron-down ms-auto"></i></a>
          <ul id="surat" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          </ul>
        </li>
        <li><a class="nav-link collapsed" data-bs-target="#user_management" data-bs-toggle="collapse" href="#"><i class="bi bi-people-fill"></i><span>User Management</span><i class="bi bi-chevron-down ms-auto"></i></a>
          <ul id="user_management" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li><a href="../user_warga/"><i class="bi bi-circle"></i><span>User Warga</span></a></li>
            <li><a href="../user_pengurus/"><i class="bi bi-circle"></i><span>User Pengurus</span></a></li>
          </ul>
        </li>
        <li><a class="nav-link collapsed" data-bs-target="#master_data" data-bs-toggle="collapse" href="#"><i class="bi bi-gear"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i></a>
          <ul id="master_data" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          </ul>
        </li>
      </ul><!-- End Dashboard Nav -->
    </ul> <!-- End Nav-itme -->
  </div><!-- End Sidebar-->

  <!-- modal Change Pass -->
  <div class="modal fade" id="modalCP" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Ganti Password</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="../../system/_core/change-pass.php">
            <input type="hidden" name="tabel_id" value="<?= $tabel_id; ?>">
            <div class="row mb-3">
              <label for="password" class="col-sm-5 col-form-label">Password Lama</label>
              <div class="col-sm-6">
                <input name="password" type="password" class="form-control" id="password" placeholder="Masukan Password Lama">
              </div>
            </div>
            <div class="row mb-3">
              <label for="npassword" class="col-sm-5 col-form-label">Password Baru</label>
              <div class="col-sm-6">
                <input name="npassword" type="password" class="form-control" id="npassword" placeholder="Masukan Password Baru">
              </div>
            </div>
            <div class="row mb-3">
              <label for="kpassword" class="col-sm-5 col-form-label">Konfirmasi Password</label>
              <div class="col-sm-6">
                <input name="kpassword" type="password" class="form-control" id="kpassword" placeholder="Masukan Konfirmasi Password">
              </div>
            </div>
            <?php print CSRF::tokenInput(); ?>
        </div>
        <div class="modal-footer">
          <input id="module" type="hidden" name="module" value="user_admin">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>