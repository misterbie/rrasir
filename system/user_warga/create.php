<?php session_start(); error_reporting(0);?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../../Resource/css/sweetalert.css" rel="stylesheet">
	<link href="../../Resource/css/theme/twitter.css" rel="stylesheet">
</head>

<body>
   <script src="../../resource/js/main/jquery.min.js"></script>
   <script src="../../resource/js/main/sweetalert.min.js"></script>
</body>
</html>

<?php
require '../_core/db.php';
require '../_core/csrf.php';
CSRF::init();
if(isset($_REQUEST['module'])){
	$module = $_REQUEST['module'];
	if($module != ''){
		if(isset($_REQUEST['nama']) && isset($_REQUEST['user_nama']) && isset($_REQUEST['role'])){
			if(!CSRF::validatePost()) {
				unset($_SESSION['limit']);
				session_destroy();
				die('<script>
					swal({title: "Warning",text: "Akses Dilarang!",type: "warning"}, 
					function() {window.location = "../";
					});
				</script>');
			}
			$limit = $_SESSION['limit'];
			if (time() < $limit){		
				}else{
				unset($_SESSION['limit']);
				session_destroy();
				die('<script>
					swal({title: "Warning",text: "Silahkan Login Ulang!",type: "warning"}, 
					function() {window.location = "../";
					});
				</script>');
			}
			$nama = $_REQUEST['nama'];
			$user_nama = $_REQUEST['user_nama'];
			$role = $_REQUEST['role'];
			if(!empty($nama) || !empty($user_nama) || !empty($role)){	
			}else{
				die('<script>
				swal({title: "Warning",text: "Anda Harus Mengisi Nama dan Username!",type: "warning"}, 
				function() {window.location = "../../dashboard/'.$module.'";
				});
				</script>');
			}
			$nama = mysqli_real_escape_string($koneksi, $nama);
			$user_nama = mysqli_real_escape_string($koneksi, $user_nama);
			$role = mysqli_real_escape_string($koneksi, $role);
			$pass = md5('123456');
			//$status = 1;			
			if($role == 'admin'){
				$role = 66;
			}else if($role == 'owner'){
				$role = 99;
			}else{$role = 23;}	

			$insert_data = mysqli_query($koneksi, "INSERT INTO data_user (nama,user_nama,pass,role) VALUES ('".$nama."', '".$user_nama."', '".$pass."', '".$role."')");
			if($insert_data){
				echo '<script>
						swal({title: "Success",text: "Account Berhasil Ditambah!",type: "success"}, 
						function() {window.location = "../../dashboard/'.$module.'/";
						});
					</script>';				
			}else{
				echo '<script>
						swal({title: "Error",text: "Account Gagal Ditambah!",type: "error"}, 
						function() {window.location = "../../dashboard/'.$module.'/";
						});
					</script>';	
			}
		}else{
			die('<script>
				swal({title: "Warning",text: "Data Tidak Ditemukan!",type: "warning"}, 
				function() {window.location = "../../dashboard/'.$module.'/";
				});
			/script>');
		}			
	}else{
		die('<script>
			swal({title: "Warning",text: "Modul Tidak Tepat!",type: "warning"}, 
			function() {window.location = "../../dashboard/'.$module.'/";
			});
		</script>');	
	}
}else{
	die('<script>
			swal({title: "Warning",text: "Modul Tidak Ditemukan!",type: "warning"}, 
			function() {window.location = "../../dashboard/'.$module.'/";
			});
		</script>');	
}
?>
