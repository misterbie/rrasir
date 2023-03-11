<form id="form-suspend<?php echo $data['tabel_id']; ?>" method="post" action="../../system/user_warga/suspend.php" class="d-inline">
	<input type="hidden" name="tabel_id" value="<?php echo $data['tabel_id']; ?>">
	<input id="module" type="hidden" name="module" value="user_panel">
	<?php print CSRF::tokenInput(); ?>
	<button class="btn btn-danger btn-sm" onclick="get_nama_suspend('form-suspend<?php echo $data['tabel_id']; ?>')"><i class="bi bi-x-circle"></i> Nonaktif Akun</button>
</form>