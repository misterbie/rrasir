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
if (isset($_POST['usernama']) && isset($_POST['password'])) {
    if (!CSRF::validatePost()) {
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
    $usernama = $_POST['usernama'];
    $password = $_POST['password'];
    if (!empty($usernama) || !empty($password)) {
    } else {
        die("<script>
			Swal.fire(
				'Login Gagal!',
				'<b>Username & Password Belum diisi</b>',
				'question'
			).then(function() {
				window.location = '../../';
			});</script>");
    }
    $usernama = mysqli_real_escape_string($koneksi, $usernama);
    $password = mysqli_real_escape_string($koneksi, $password);
    $ada_data = 0;
    $status = 0;
    $nama_akun =  substr($usernama, 0, 3);
    if ($nama_akun == '100') {
        $tabel = 'data_user_guru';
    } else if ($nama_akun == '200') {
        $tabel = 'data_user_murid';
    } else {
        $tabel = 'user_admin';
    }

    $result = mysqli_query($koneksi, "SELECT * FROM $tabel WHERE usernama='$usernama'");
    while ($data = mysqli_fetch_array($result)) {
        $nama = $data['nama'];
        $usernama = $data['usernama'];
        $dbpassword = password_verify($password, $data['password']);
        $tabel_id = $data['tabel_id'];
        $role = $data['role'];
        $status = $data['status'];
        $ada_data++;
    }
    if ($ada_data == 1) {
        // if ($dbpassword == true) {
        if ($status == 1) {
            $_SESSION['limit'] = time() + 3600;
            $_SESSION['nama'] = $nama;
            $_SESSION['usernama'] = $usernama;
            $_SESSION['tabel_id'] = $tabel_id;
            $_SESSION['role'] = $role;
            // $menu = '';
            // if ($role == 696) {
            // 	$menu = 'main';
            // } else if ($role == 69) {
            // 	$menu = 'login_guru';
            // } else if ($role == 23) {
            // 	$menu = 'login_murid';
            // } else {
            // 	$menu = 'main';
            // }
            echo "<script>
                         Swal.fire(
                            'Login Berhasil!',
                            'Selamat Datang',
                            'success'
                        ).then(function() {
                            window.location = '../../dashboard/main/';
                        });</script>";
        } else {
            echo "<script>
                            Swal.fire({
                                icon: 'error',
                                title: 'Akun Tidak Aktif',
                                text: 'Silahkan Hubungi Admin!'
                            }).then(function() {
                                window.location = '../../';
                        });</script>";
        }
        // } else {
        //     echo "<script>
        //                     Swal.fire({
        //                         icon: 'error',
        //                         title: 'Asdfsd',
        //                         text: 'Silahkan Hubungi Admin!'
        //                     }).then(function() {
        //                         window.location = '../../';
        //                 });</script>";
        // }
    } else {
        echo "<script>
				Swal.fire({
					icon: 'error',
					title: 'Username / Password Salah',
					text: 'Silahkan Login Kembali!'
				}).then(function() {
					window.location = '../../';
			});</script>";
    }
} else {
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