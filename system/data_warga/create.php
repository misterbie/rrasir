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
	if ($module == 'data_warga') {
		if (isset($_POST['kk']) && isset($_POST['ktp']) && isset($_POST['nama']) && isset($_POST['blok']) && isset($_POST['nomer']) && isset($_POST['tempat_lahir']) && isset($_POST['tgl_lahir']) && isset($_POST['kelamin']) && isset($_POST['menikah']) && isset($_POST['pendidikan']) && isset($_POST['keluarga']) && isset($_POST['agama']) && isset($_POST['pekerjaan'])  && isset($_POST['telp']) && isset($_POST['status_rumah']) && isset($_POST['alamat'])) {
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

				$kk = $_POST['kk'];
				$ktp = $_POST['ktp'];
				$nama = $_POST['nama'];
				$blok = $_POST['blok'];
				$nomer = $_POST['nomer'];
				$tempat_lahir = $_POST['tempat_lahir'];
				$tgl_lahir = $_POST['tgl_lahir'];
				$kelamin = $_POST['kelamin'];
				$menikah = $_POST['menikah'];
				$pendidikan = $_POST['pendidikan'];
				$keluarga = $_POST['keluarga'];
				$agama = $_POST['agama'];
				$pekerjaan = $_POST['pekerjaan'];
				$telp = $_POST['telp'];
				$status_rumah = $_POST['status_rumah'];
				$alamat = $_POST['alamat'];

				if (!empty($kk) && !empty($ktp) && !empty($nama) && !empty($blok) && !empty($nomer) && !empty($tempat_lahir) && !empty($tgl_lahir) && !empty($kelamin)  && !empty($menikah) && !empty($pendidikan) && !empty($keluarga) && !empty($agama) && !empty($pekerjaan) && !empty($telp) && !empty($status_rumah) &&  !empty($alamat)) {

					$kk = mysqli_real_escape_string($koneksi, $kk);
					$ktp = mysqli_real_escape_string($koneksi, $ktp);
					$nama = mysqli_real_escape_string($koneksi, htmlspecialchars($nama));
					$blok = mysqli_real_escape_string($koneksi, $blok);
					$nomer = mysqli_real_escape_string($koneksi, $nomer);
					$tempat_lahir = mysqli_real_escape_string($koneksi, htmlspecialchars($tempat_lahir));
					$tgl_lahir = mysqli_real_escape_string($koneksi, $tgl_lahir);
					$kelamin = mysqli_real_escape_string($koneksi, $kelamin);
					$menikah = mysqli_real_escape_string($koneksi, $menikah);
					$pendidikan = mysqli_real_escape_string($koneksi, $pendidikan);
					$keluarga = mysqli_real_escape_string($koneksi, $keluarga);
					$agama = mysqli_real_escape_string($koneksi, $agama);
					$pekerjaan = mysqli_real_escape_string($koneksi, htmlspecialchars($pekerjaan));
					$telp = mysqli_real_escape_string($koneksi, $telp);
					$status_rumah = mysqli_real_escape_string($koneksi, $status_rumah);
					$alamat = mysqli_real_escape_string($koneksi, htmlentities($alamat));

					// Buat Akun User Warga
					$nama_warga = $nama;
					$user_nama = $blok . $nomer;
					$password = '123456';
					$hpassword = password_hash($password, PASSWORD_DEFAULT);
					$buat_account = mysqli_query($koneksi, "INSERT INTO user_warga (nama,usernama,password) VALUES ('" . $nama_warga . "','" . $user_nama . "','" . $hpassword . "')");
					if ($buat_account) {
						$select_data = mysqli_query($koneksi, "SELECT * FROM user_warga ORDER BY tabel_id DESC LIMIT 1");
						while ($data = mysqli_fetch_array($select_data)) {
							$user_id = $data['tabel_id'];
						}
						$insert_data = mysqli_query($koneksi, "INSERT INTO  data_warga (user_id, kk, ktp, nama, blok, nomer, tempat_lahir, tgl_lahir, kelamin, menikah, pendidikan, keluarga, agama, pekerjaan, telp, status_rumah, alamat) VALUES ('$user_id','$kk','$ktp','$nama','$blok','$nomer','$tempat_lahir','$tgl_lahir','$kelamin','$menikah','$pendidikan','$keluarga','$agama','$pekerjaan','$telp','$status_rumah','$alamat')");
						if ($insert_data) {
							echo "<script>
								Swal.fire(
								'Berhasil',
								'Data Berhasil Ditambah!<br> \\nDengan Login <br> \\nUSERNAME: " . $user_nama . " <br>\\nPASSWORD: 123456',
								'success'
							).then(function() {
								window.location = '../../dashboard/data_warga/';
							});</script>";
						}
					} else {
						die("<script>
								Swal.fire({
									icon: 'warning',
									title: 'Akun Gagal Dibuat',
									text: 'Mohon Isi Data Kembali!'
								}).then(function() {
									window.location = '../../dashboard/data_warga/';
								});</script>");
					}
				} else {
					die("<script>
						Swal.fire({
							icon: 'error',
							title: 'Data Tidak Boleh Kosong',
							text: 'Mohon Isi Data Terlebih Dahulu!'
						}).then(function() {
							window.location = '../../dashboard/data_warga/';
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
						window.location = '../data_warga/';
					});</script>");
			}
		} else {
			die("<script>
				Swal.fire({
					icon: 'warning',
					title: 'Akses Dilarang',
					text: 'Data Tidak Ditemukan!'
				}).then(function() {
					window.location = '../data_warga/';
				});</script>");
		}
	} else {
		die("<script>
				Swal.fire({
					icon: 'warning',
					title: 'Akses Dilarang',
					text: 'Modul Tidak Tepat!'
				}).then(function() {
					window.location = '../data_warga/';
				});</script>");
	}
} else {
	die("<script>
		Swal.fire({
			icon: 'warning',
			title: 'Akses Dilarang',
			text: 'Modul Salah!'
		}).then(function() {
			window.location = '../data_warga/';
		});</script>");
}
?>