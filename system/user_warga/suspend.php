<?php session_start();
// error_reporting(0); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../resource/assets/css/sweetalert2.min.css" rel="stylesheet">

<body>
    <script src="../../resource/assets/dataTables/jquery-3.5.1.min.js"></script>
    <script src="../../resource/assets/js/sweetalert2.all.min.js"></script>
</body>

</html>

<?php
require '../_core/db.php';
require '../_core/csrf.php';
CSRF::init();
if (isset($_REQUEST['module'])) {
    $module = $_REQUEST['module'];
    if ($module != '') {
        if (isset($_REQUEST['tabel_id'])) {
            if (!CSRF::validatePost()) {
                unset($_SESSION['limit']);
                session_destroy();
                die("<script>
						Swal.fire({
							icon: 'error',
							title: 'Akses Dilarang',
							text: 'Modul Tidak Ditemukan!'
						}).then(function() {
							window.location = '../';
						});</script>");
            }
            $limit = $_SESSION['limit'];
            if (time() < $limit) {
            } else {
                unset($_SESSION['limit']);
                session_destroy();
                die("<script>
						Swal.fire({
							icon: 'error',
							title: 'Akses Limit',
							text: 'Silahkan Login Kembali!'
						}).then(function() {
							window.location = '../';
						});</script>");
            }
            $tabel_id = $_REQUEST['tabel_id'];
            if (!empty($tabel_id)) {
            } else {
                die("<script>
						Swal.fire({
							icon: 'error',
							title: 'Akses Dilarang',
							text: 'Data Tidak Boleh Kosong!'
						}).then(function() {
							window.location = '../';
						});</script>");
            }
            $tabel_id = mysqli_real_escape_string($koneksi, $tabel_id);
            $status = 0;

            $update_data = mysqli_query($koneksi, "UPDATE user_warga SET status='" . $status . "' WHERE tabel_id='" . $tabel_id . "'");
            if ($update_data) {
                echo "<script>
							Swal.fire(
							'Berhasil',
							'Akun Berhasil Di Nonaktifkan',
							'success'
						).then(function() {
							window.location = '../../dashboard/user_warga/';
						});</script>";
            } else {
                echo "<script>
							Swal.fire(
							'Gagal',
							'Akun Gagal Di NonAktifkan',
							'error'
						).then(function() {
							window.location = '../../dashboard/user_warga/';
						});</script>";
            }
        } else {
            die("<script>
						Swal.fire({
							icon: 'error',
							title: 'Akses Dilarang',
							text: 'Data Tidak Ditemukan!'
						}).then(function() {
							window.location = '../';
						});</script>");
        }
    } else {
        die("<script>
			Swal.fire({
				icon: 'error',
				title: 'Akses Dilarang',
				text: 'Modul Tidak Ditemukan!'
			}).then(function() {
				window.location = '../../dashboard/user_warga/';
			});</script>");
    }
} else {
    die("<script>
			Swal.fire({
				icon: 'error',
				title: 'Akses Dilarang',
				text: 'Modul Tidak Ditemukan!'
			}).then(function() {
				window.location = '../../dashboard/user_warga/';
			});</script>");
}
?>