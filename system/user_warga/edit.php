<?php session_start(); error_reporting(0);?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../../resource/css/sweetalert.css" rel="stylesheet">
	<link href="../../resource/css/theme/twitter.css" rel="stylesheet">
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
		if(isset($_REQUEST['nama']) && isset($_REQUEST['role'])&& isset($_REQUEST['tabel_id'])){
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
			$tabel_id = $_REQUEST['tabel_id'];
			$nama = $_REQUEST['nama'];
			$role = $_REQUEST['role'];
			if(!empty($nama) || !empty($role)){	
			}else{
				die('<script>
				swal({title: "Warning",text: "Anda Harus Mengisi Semua Data!",type: "warning"}, 
				function() {window.location = "../../dashboard/'.$module.'";
				});
				</script>');
			}
			$tabel_id = mysqli_real_escape_string($koneksi, $tabel_id);
			$nama = mysqli_real_escape_string($koneksi, $nama);
			$role = mysqli_real_escape_string($koneksi, $role);
			
			$update_data = mysqli_query($koneksi, "UPDATE data_user SET  nama='".$nama."', role='".$role."' WHERE tabel_id='".$tabel_id."'");
			if($update_data){
				echo '<script>
						swal({title: "Success",text: "Data Berhasil Di Edit!",type: "success"}, 
						function() {window.location = "../../dashboard/'.$module.'/";
						});
					</script>';				
			}else{
				echo '<script>
						swal({title: "Error",text: "Data Gagal Di Edit!",type: "error"}, 
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
