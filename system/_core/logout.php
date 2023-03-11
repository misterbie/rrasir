<?php session_start();
error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../../resource/assets/css/sweetalert2.min.css" rel="stylesheet">
</head>

<body>
	<script src="../../resource/assets/dataTables/jquery-3.5.1.min.js"></script>
	<script src="../../resource/assets/js/sweetalert2.all.min.js"></script>
</body>

</html>

<?php
include 'db.php';
require 'csrf.php';
CSRF::init();

if (isset($_REQUEST['logout'])) {
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
	unset($_SESSION['limit']);
	unset($_SESSION['usernama']);
	session_destroy();
	echo "<script>
			Swal.fire(
			'Logout Berhasil!',
			'Sampai Ketemu Lagi',
			'success'
		).then(function() {
			window.location = '../../';
		});</script>";
} else {
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
?>