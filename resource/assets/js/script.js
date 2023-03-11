// $(document).ready(function() {
//     var table = $('#example').DataTable( {
//         lengthChange: false,
//         buttons: [
//             {
//                 extend: 'csv',
//                 split: [ 'pdf', 'excel'],
//             }
//         ]
//     } );

//     table.buttons().container()
//         .appendTo( '#example_wrapper .col-md-6:eq(0)' );
// } );

// $(document).ready(function () {
//     $('#tabel').DataTable();
// });

$(document).ready(function () {
    var table = $('#tabel').DataTable({
        lengthChange: true,
        buttons: ['print', 'excel', 'pdf', 'colvis']
    });

    table.buttons().container()
        .appendTo('#tabel_wrapper .col-md-6:eq(0)');
});

$(function () {
    var url = window.location;
    $('#sidebar-nav a[href="' + url + '"]').parent('li').addClass('current-page');
    $('#sidebar-nav a').filter(function () {
        return this.href == url;
    }).removeClass('collapsed').addClass('active').parent().parent('ul').addClass('show').parent('li').children('a').removeClass('collapsed');
});


// Aktif Akun Konfirmasi
function get_nama_actived(nama_id) {
    document.querySelector('#' + nama_id).addEventListener('submit', function (e) {
        var form = this;
        e.preventDefault();
        Swal.fire({
            title: 'Konfirmasi!',
            text: "Anda Yakin Akan Aktifkan Akun Ini?",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Aktifkan'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        })
    },);
};


// Nonaktif Akun Konfirmasi
function get_nama_suspend(nama_id) {
    document.querySelector('#' + nama_id).addEventListener('submit', function (e) {
        var form = this;
        e.preventDefault();
        Swal.fire({
            title: 'Konfirmasi!',
            text: "Anda Yakin Akan NonAktifkan Akun Ini?",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Nonaktifkan'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        })
    },);
};


// Reset Password Konfirmasi
function get_nama_repas(nama_id) {
    document.querySelector('#' + nama_id).addEventListener('submit', function (e) {
        var form = this;
        e.preventDefault();
        Swal.fire({
            title: 'Konfirmasi!',
            text: "Anda Yakin Akan Mereset Password ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Saya Yakin'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        })
    },);
};
