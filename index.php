<?php session_start(); ?>
<?php
if (isset($_SESSION['usernama'])) {
  header("location: dashboard/main/");
  exit;
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="resource/assets/img/buildings.ico" rel="icon">
  <link href="resource/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="resource/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="resource/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="resource/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="resource/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="resource/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="resource/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="resource/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="resource/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">



              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <a href="../bootsmenu/" class="logo d-flex align-items-center w-auto">
                      <span class="rounded mx-auto d-block"></i> L O G I N </span>
                    </a>
                    <img src="resource/assets/img/Renggali.png" class="rounded-circle rounded mx-auto d-block">
                    <h6 class="card-title text-center pb-0 fs-4">Silahkan</h6>
                    <h6 class="card-title text-center fs-6">Masukan Akun Anda</h6>
                    <p class="text-center small">Masukan user/email & Password anda</p>
                  </div>

                  <form method="post" action="system/_core/cek.php" class="row g-3 needs-validation" novalidate>
                    <div class="col-md-12">
                      <div class="form-floating">
                        <input name="usernama" type="text" class="form-control" id="usernama" autofocus>
                        <label for="usernama">Masukan User/Email</label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-floating">
                        <input name="password" type="password" class="form-control" id="password">
                        <label for="password">Password</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <?php require 'system/_core/csrf.php';
                      CSRF::init();
                      print CSRF::tokenInput(); ?>
                      <button name="login" class="btn btn-primary w-100" type="login">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Daftar akun anda <a href="#">disini!</a></p>
                    </div>
                  </form>
                </div>
              </div>

              <div class="copyright">
                &copy; Copyright <strong><span>RobiAryanto</span></strong>. All Rights Reserved
              </div>
              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="#">RA Team</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="resource/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="resource/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="resource/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="resource/assets/vendor/echarts/echarts.min.js"></script>
  <script src="resource/assets/vendor/quill/quill.min.js"></script>
  <script src="resource/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="resource/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="resource/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="resource/assets/js/main.js"></script>

</body>

</html>