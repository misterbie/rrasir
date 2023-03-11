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
require 'db.php';
require 'csrf.php';
CSRF::init();
if (isset($_POST['delete_id']) && isset($_POST['module'])) {
	if (!CSRF::validatePost()) {
		unset($_SESSION['limit']);
		session_destroy();
		die("<script>
			Swal.fire({
				icon: 'warning',
				title: 'Akses Dilarang',
				text: 'Silahkan Login Kembali!'
			}).then(function() {
				window.location = '../../';
			});</script>");
	}
	$limit = $_SESSION['limit'];
	if (time() < $limit) {
	} else {
		unset($_SESSION['limit']);
		session_destroy();
		die("<script>
			Swal.fire({
				icon: 'warning',
				title: 'Akses Dilarang',
				text: 'Time Out, Silahkan Login Kembali!'
			}).then(function() {
				window.location = '../../';
			});</script>");
	}
	$tabel_id = $_POST['delete_id'];
	$module = $_POST['module'];

	$delete_data = mysqli_query($koneksi, "DELETE FROM $module WHERE tabel_id='$tabel_id'");
	if ($delete_data) {
		echo "<script>
				Swal.fire(
				'Berhasil!',
				'Data Berhasil dihapus',
				'success'
			).then(function() {
				window.location = '../../dashboard/data_warga/';
			});</script>";
	} else {
		echo "<script>
				Swal.fire(
				'Gagal!',
				'Data Gagal Dihapus',
				'error'
			).then(function() {
				window.location = '../../dashboard/data_warga/';
			});</script>";
	}
} else {
	die("<script>
			Swal.fire({
				icon: 'question',
				title: 'Kesalahan',
				text: 'Data Tidak Ditemukan!'
			}).then(function() {
				window.location = '../../';
			});</script>");
}
?>