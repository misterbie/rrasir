<?php session_start();
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
if (isset($_POST['module'])) {
	$module = $_POST['module'];
	if ($module == 'user_admin') {
		if (isset($_POST['password']) && isset($_POST['npassword']) && isset($_POST['kpassword']) && isset($_POST['tabel_id'])) {
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
						text: 'Silahkan Login Kembali!'
					}).then(function() {
						window.location = '../../';
					});</script>");
			}

			$password = $_POST['password'];
			$npassword = $_POST['npassword'];
			$kpassword = $_POST['kpassword'];
			$tabel_id = $_POST['tabel_id'];
			//cek jika sesuai dengan DB
			$query = "SELECT * FROM user_admin WHERE tabel_id = '$tabel_id'";
			$result = mysqli_query($koneksi, $query);
			$data = mysqli_fetch_array($result);
			$dbpassword = password_verify($password, $data['password']);
			if (password_verify($password, $data['password'])) {
				//jika data password sama dengan db jalan kan fungsi berikut
				if (!empty($password) || !empty($npassword) || !empty($kpassword)) {
					//jika kolom tidak kosong jalan kan fungsi berikut
					if ($npassword == $kpassword) {
						// jika password baru sama dengan konfirmasi jalan kan fungsi berikut
						$tabel_id = mysqli_real_escape_string($koneksi, $tabel_id);
						$password = mysqli_real_escape_string($koneksi, $password);
						$npassword = password_hash($npassword, PASSWORD_DEFAULT);
						$update_data = mysqli_query($koneksi, "UPDATE " . $module . " SET password='" . $npassword . "' WHERE tabel_id='" . $tabel_id . "'");
						if ($update_data) {
							//jika password berhasil di ubah
							echo "<script>
								 Swal.fire(
									'Berhasil',
									'Password Telah Diubah',
									'success'
								).then(function() {
									window.location = '../../dashboard/main/';
								});</script>";
						} else {
							die("<script>
								Swal.fire(
									'Gagal!',
									'Password Gagal Diubah',
									'error'
								).then(function() {
									window.location = '../../';
								});</script>");
						}
					} else {
						//jika tidak sama
						die("<script>
							Swal.fire(
								'Gagal!',
								'Password Konfirmasi Tidak Sama',
								'question'
							).then(function() {
								window.location = '../../dashboard/main';
							});</script>");
					}
				} else {
					//jika kosong
					die("<script>
					Swal.fire(
						'Gagal!',
						'Mohon isi kolom yang tersedia!',
						'question'
					).then(function() {
						window.location = '../../dashboard/main';
					});</script>");
				}
			} else {
				die("<script>
					Swal.fire(
						'Gagal!',
						'Password yang anda masukan Salah!',
						'info'
					).then(function() {
						window.location = '../../dashboard/main';
					});</script>");
			}
		} else {
			die("<script>
					Swal.fire(
						'Akses Ditolak!',
						'Data Tidak Ditemukan',
						'warning'
					).then(function() {
						window.location = '../../';
					});</script>");
		}
	} else {
		die("<script>
				Swal.fire({
					icon: 'error',
					title: 'Akses Dilarang',
					text: 'Database Error!'
				}).then(function() {
					window.location = '../../';
				});</script>");
	}
} else {
	die("<script>
			Swal.fire({
				icon: 'error',
				title: 'Akses Dilarang',
				text: 'Modul Tidak Ditemukan!'
			}).then(function() {
				window.location = '../../';
			});</script>");
}
?>