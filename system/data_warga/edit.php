<?php session_start(); /*error_reporting(0);*/ ?>
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
	if ($module == 'data_warga') {
		if (isset($_POST['kk']) && isset($_POST['ktp']) && isset($_POST['nama']) && isset($_POST['blok']) && isset($_POST['nomer']) && isset($_POST['tempat_lahir']) && isset($_POST['tgl_lahir']) && isset($_POST['kelamin']) && isset($_POST['menikah']) && isset($_POST['pendidikan']) && isset($_POST['keluarga']) && isset($_POST['agama']) && isset($_POST['pekerjaan']) && isset($_POST['telp']) && isset($_POST['status_rumah']) && isset($_POST['alamat']) && isset($_POST['tabel_id'])) {
			if (!CSRF::validatePost()) {
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
			} else {
				die("<script>
						Swal.fire({
							icon: 'warning',
							title: 'Akses Limit',
							text: 'Silahkan Login Kembali!'
						}).then(function() {
							window.location = '../data_warga/';
						});</script>");
				unset($_SESSION['limit']);
				session_destroy();
			}
			$tabel_id = $_REQUEST['tabel_id'];
			$kk = $_REQUEST['kk'];
			$ktp = $_REQUEST['ktp'];
			$nama = $_REQUEST['nama'];
			$blok = $_REQUEST['blok'];
			$nomer = $_REQUEST['nomer'];
			$tempat_lahir = $_REQUEST['tempat_lahir'];
			$tgl_lahir = $_REQUEST['tgl_lahir'];
			$kelamin = $_REQUEST['kelamin'];
			$menikah = $_REQUEST['menikah'];
			$pendidikan = $_REQUEST['pendidikan'];
			$keluarga = $_REQUEST['keluarga'];
			$agama = $_REQUEST['agama'];
			$pekerjaan = $_REQUEST['pekerjaan'];
			$telp = $_REQUEST['telp'];
			$status_rumah = $_REQUEST['status_rumah'];
			$alamat = $_REQUEST['alamat'];
			// if (!empty($nama) || !empty($tgl_lahir) || !empty($ortu) || !empty($alamat) || !empty($hp)) {
			// } else {
			// 	die("<script>
			// 			Swal.fire({
			// 				icon: 'error',
			// 				title: 'Data Tidak Boleh Kosong',
			// 				text: 'Mohon Isi Data Terlebih Dahulu!'
			// 			}).then(function() {
			// 				window.location = '../../dashboard/data_warga/';
			// 			});</script>");
			// }
			$tabel_id = mysqli_real_escape_string($koneksi, $tabel_id);
			$kk = mysqli_real_escape_string($koneksi, $kk);
			$ktp = mysqli_real_escape_string($koneksi, $ktp);
			$nama = mysqli_real_escape_string($koneksi, htmlspecialchars($nama));
			$blok = mysqli_real_escape_string($koneksi, $blok);
			$nomer = mysqli_real_escape_string($koneksi, $nomer);
			$tempat_lahir = mysqli_real_escape_string($koneksi, htmlspecialchars($tempat_lahir));
			$tgl_lahir = mysqli_real_escape_string($koneksi, $tgl_lahir);
			$kelamin = mysqli_real_escape_string($koneksi, $kelamin);
			$menikah = mysqli_real_escape_string($koneksi, $menikah);
			$pendidikan = mysqli_real_escape_string($koneksi, htmlspecialchars($pendidikan));
			$keluarga = mysqli_real_escape_string($koneksi, $keluarga);
			$agama = mysqli_real_escape_string($koneksi, $agama);
			$pekerjaan = mysqli_real_escape_string($koneksi, htmlspecialchars($pekerjaan));
			$telp = mysqli_real_escape_string($koneksi, $telp);
			$status_rumah = mysqli_real_escape_string($koneksi, $status_rumah);
			$alamat = mysqli_real_escape_string($koneksi, $alamat);
			$update_data = mysqli_query($koneksi, "UPDATE data_warga SET kk = '$kk', ktp = '$ktp', nama = '$nama', blok = '$blok', nomer = '$nomer', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', kelamin = '$kelamin', menikah = '$menikah', pendidikan = '$pendidikan', keluarga = '$keluarga', agama = '$agama', pekerjaan = '$pekerjaan', telp = '$telp', status_rumah = '$status_rumah', alamat = '$alamat' WHERE tabel_id = '$tabel_id' ");
			if ($update_data) {
				echo "<script>
							Swal.fire(
							'Berhasil',
							'Data Berhasil Diubah',
							'success'
						).then(function() {
							window.location = '../../dashboard/data_warga/';
						});</script>";
			} else {
				echo "<script>
							Swal.fire(
							'Gagal',
							'Data Gagal Diubah',
							'error'
						).then(function() {
							window.location = '../../dashboard/data_warga/';
						});</script>";
			}
		} else {
			die("<script>
						Swal.fire({
							icon: 'error',
							title: 'Akses Dilarang',
							text: 'Modul Tidak Ditemukan!'
						}).then(function() {
							window.location = '../../dashboard/data_warga/';
						});</script>");
		}
	}
}
?>