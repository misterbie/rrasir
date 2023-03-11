$(document).on("click", "#edit_link", function () {
	
					var tabel_id = $(this).data('tabel_id');
					$(".modal-body #tabel_id").val( tabel_id );
					
					var nama = $(this).data('nama');
					$(".modal-body #nama").val( nama );
					
					var role = $(this).data('role');
					$(".modal-body #role").val( role );
				});
function removeSpaces(string) {
	return string.split(' ').join('');
}