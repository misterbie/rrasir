<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
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
if (isset($_POST['module'])) {
	$module = $_POST['module'];
	if ($module == 'data_keluarga') {

		if (isset($_POST['namakk']) && isset($_POST['tempat_lahir']) && isset($_POST['tgl_lahir']) && isset($_POST['kelamin']) && isset($_POST['telp']) && isset($_POST['sdk'])) {
			if (!CSRF::validatePost()) {
				unset($_SESSION['limit']);
				session_destroy();
				die("<script>
						Swal.fire({
							icon: 'warning',
							title: 'Akses Dilarang',
							text: 'Silahkan Login Kembali!'
						}).then(function() {
							window.location = '../data_warga/';
						});</script>");
			}
			$limit = $_SESSION['limit'];
			if (time() < $limit) {

				$kk_id = $_POST['kk_id'];
				$namakk = $_POST['namakk'];
				$tempat_lahir = $_POST['tempat_lahir'];
				$tgl_lahir = $_POST['tgl_lahir'];
				$kelamin = $_POST['kelamin'];
				$telp = $_POST['telp'];
				$sdk = $_POST['sdk'];

				if (!empty($kk_id) && !empty($namakk) && !empty($tempat_lahir) && !empty($tgl_lahir) && !empty($kelamin) && !empty($sdk)) {

					$kk_id = mysqli_real_escape_string($koneksi, $kk_id);
					$namakk = mysqli_real_escape_string($koneksi, htmlspecialchars($namakk));
					$tempat_lahir = mysqli_real_escape_string($koneksi, htmlspecialchars($tempat_lahir));
					$tgl_lahir = mysqli_real_escape_string($koneksi, $tgl_lahir);
					$kelamin = mysqli_real_escape_string($koneksi, $kelamin);
					$telp = mysqli_real_escape_string($koneksi, $telp);
					$sdk = mysqli_real_escape_string($koneksi, $sdk);

					// var_dump($kk_id, $namakk, $tempat_lahir, $tgl_lahir, $kelamin, $telp, $sdk);
					// die;

					$insert_data = mysqli_query($koneksi, "INSERT INTO  data_keluarga (kk_id,namakk,tempat_lahir,tgl_lahir,kelamin,telp,sdk) VALUES ('$kk_id','$namakk','$tempat_lahir','$tgl_lahir','$kelamin','$telp','$sdk')");
					if ($insert_data) {
						echo "<script>
								Swal.fire(
								'Berhasil',
								'Data Berhasil Ditambah!',
								'success'
							).then(function() {
								window.location = '../../dashboard/data_keluarga/';
							});</script>";
					}
				} else {
					die("<script>
						Swal.fire({
							icon: 'error',
							title: 'Data Tidak Boleh Kosong',
							text: 'Mohon Isi Data Terlebih Dahulu!'
						}).then(function() {
							window.location = '../../dashboard/data_keluarga/';
						});</script>");
				}
			} else {
				unset($_SESSION['limit']);
				session_destroy();
				die("<script>
					Swal.fire({
						icon: 'warning',
						title: 'Time Out',
						text: 'Silahkan Login Kembali!'
					}).then(function() {
						window.location = '../../dashboard/data_keluarga/';
					});</script>");
			}
		} else {
			die("<script>
				Swal.fire({
					icon: 'warning',
					title: 'Akses Dilarang',
					text: 'Data Tidak Ditemukan!'
				}).then(function() {
					window.location = '../../dashboard/data_keluarga/';
				});</script>");
		}
	} else {
		die("<script>
				Swal.fire({
					icon: 'warning',
					title: 'Akses Dilarang',
					text: 'Modul Tidak Tepat!'
				}).then(function() {
					window.location = '../../dashboard/data_keluarga/';
				});</script>");
	}
} else {
	die("<script>
		Swal.fire({
			icon: 'warning',
			title: 'Akses Dilarang',
			text: 'Modul Salah!'
		}).then(function() {
			window.location = '../../dashboard/data_keluarga/';
		});</script>");
}
?>