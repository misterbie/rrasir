<form id="form-active<?php echo $data['tabel_id']; ?>" method="post" action="../../system/user_warga/actived.php" class="d-inline">
	<input type="hidden" name="tabel_id" value="<?php echo $data['tabel_id']; ?>">
	<input id="module" type="hidden" name="module" value="user_panel_staff">
	<?php print CSRF::tokenInput(); ?>
	<button class="btn btn-success btn-sm" onclick="get_nama_actived('form-active<?php echo $data['tabel_id']; ?>')"><i class="bi bi-check2-circle"></i> Aktif Akun</button>
</form>