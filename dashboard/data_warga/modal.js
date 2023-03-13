// modal Edit
$(document).on("click", "#edit_link", function () {
    var tabel_id = $(this).data('tabel_id');
    $(".modal-body #tabel_id").val(tabel_id);


    var kk = $(this).data('kk');
    $(".modal-body #kk").val(kk);

    var ktp = $(this).data('ktp');
    $(".modal-body #ktp").val(ktp);

    var nama = $(this).data('nama');
    $(".modal-body #nama").val(nama);

    var blok = $(this).data('blok');
    $(".modal-body #blok").val(blok);

    var nomer = $(this).data('nomer');
    $(".modal-body #nomer").val(nomer);

    var tempat_lahir = $(this).data('tempat_lahir');
    $(".modal-body #tempat_lahir").val(tempat_lahir);

    var tgl_lahir = $(this).data('tgl_lahir');
    $(".modal-body #tgl_lahir").val(tgl_lahir);

    var kelamin = $(this).data('kelamin');
    $(".modal-body #kelamin").val(kelamin);


    var menikah = $(this).data('menikah');
    $(".modal-body #menikah").val(menikah);

    var pendidikan = $(this).data('pendidikan');
    $(".modal-body #pendidikan").val(pendidikan);

    var keluarga = $(this).data('keluarga');
    $(".modal-body #keluarga").val(keluarga);

    var agama = $(this).data('agama');
    $(".modal-body #agama").val(agama);

    var pekerjaan = $(this).data('pekerjaan');
    $(".modal-body #pekerjaan").val(pekerjaan);

    var telp = $(this).data('telp');
    $(".modal-body #telp").val(telp);

    var status_rumah = $(this).data('status_rumah');
    $(".modal-body #status_rumah").val(status_rumah);
    // if (status_rumah == 'Milik Sendiri') {
    //     $(".modal-body #status_rumah1").val(status_rumah).prop('checked', true);
    // } else {
    //     $(".modal-body #status_rumah2").val(status_rumah).prop('checked', true);
    // };

    var alamat = $(this).data('alamat');
    $(".modal-body #alamat").val(alamat);
});


// modal detail
$(document).on("click", "#detail_link", function () {
    var tabel_id = $(this).data('tabel_id');
    $(".modal-body #tabel_id").val(tabel_id);

    var kk = $(this).data('kk');
    $(".modal-body #kk").val(kk).text(kk);

    var ktp = $(this).data('ktp');
    $(".modal-body #ktp").val(ktp).text(ktp);

    var nama = $(this).data('nama');
    $(".modal-body #nama").val(nama).text(nama);

    var blok = $(this).data('blok');
    $(".modal-body #blok").val(blok);

    var nomer = $(this).data('nomer');
    $(".modal-body #nomer").val(nomer).text(nomer);

    var tempat_lahir = $(this).data('tempat_lahir');
    $(".modal-body #tempat_lahir").val(tempat_lahir).text(tempat_lahir);

    var tgl_lahir = $(this).data('tgl_lahir');
    $(".modal-body #tgl_lahir").val(tgl_lahir).text(tgl_lahir);

    var kelamin = $(this).data('kelamin');
    $(".modal-body #kelamin").text(kelamin);
    $(".modal-body #kelamin1").val(kelamin);

    var menikah = $(this).data('menikah');
    $(".modal-body #menikah").text(menikah);
    $(".modal-body #menikah1").val(menikah);

    var pendidikan = $(this).data('pendidikan');
    $(".modal-body #pendidikan").text(pendidikan);
    $(".modal-body #pendidikan1").val(pendidikan);

    var keluarga = $(this).data('keluarga');
    $(".modal-body #keluarga").val(keluarga).text(keluarga);

    var agama = $(this).data('agama');
    $(".modal-body #agama").text(agama);
    $(".modal-body #agama1").val(agama);

    var pekerjaan = $(this).data('pekerjaan');
    $(".modal-body #pekerjaan").val(pekerjaan).text(pekerjaan);

    var telp = $(this).data('telp');
    $(".modal-body #telp").val(telp).text(telp);

    var status_rumah = $(this).data('status_rumah');
    $(".modal-body #status_rumah").text(status_rumah);
    $(".modal-body #status_rumah1").val(status_rumah);

    var alamat = $(this).data('alamat');
    $(".modal-body #alamat").val(alamat).text(alamat);

    var ttl = tempat_lahir + ',' + " " + tgl_lahir
    $(".modal-body #ttl").text(ttl)

    var alamatL = 'Blok' + ' ' + blok + ' ' + 'No' + ' ' + nomer + ' ' + 'Tembesi - Batam'
    $(".modal-body #alamatL").text(alamatL)

    // var kk = $(this).data('kk');
    // var ktp = $(this).data('ktp');
    // var nama = $(this).data('nama');
    // var blok = $(this).data('blok');
    // var nomer = $(this).data('nomer');
    // var tempat_lahir = $(this).data('tempat_lahir');
    // var tgl_lahir = $(this).data('tgl_lahir');
    // var kelamin = $(this).data('kelamin');
    // var menikah = $(this).data('menikah');
    // var pendidikan = $(this).data('pendidikan');
    // var keluarga = $(this).data('keluarga');
    // var agama = $(this).data('agama');
    // var pekerjaan = $(this).data('pekerjaan');
    // var telp = $(this).data('telp');
    // var status_rumah = $(this).data('status_rumah');
    // var alamat = $(this).data('alamat');

    // $(".modal-body #kk").val(kk).text(kk);
    // $(".modal-body #ktp").val(ktp).text(ktp);
    // $(".modal-body #nama").val(nama).text(nama);
    // $(".modal-body #blok").val(blok);
    // $(".modal-body #nomer").val(nomer).text(nomer);
    // $(".modal-body #tempat_lahir").val(tempat_lahir).text(tempat_lahir);
    // $(".modal-body #tgl_lahir").val(tgl_lahir).text(tgl_lahir);
    // $(".modal-body #kelamin").val(kelamin).text(kelamin);
    // $(".modal-body #menikah").val(menikah).text(menikah);
    // $(".modal-body #pendidikan").val(pendidikan).text(pendidikan);
    // $(".modal-body #keluarga").val(keluarga).text(keluarga);
    // $(".modal-body #agama").val(agama).text(agama);
    // $(".modal-body #pekerjaan").val(pekerjaan).text(pekerjaan);
    // $(".modal-body #telp").val(telp).text(telp);
    // $(".modal-body #status_rumah").val(status_rumah).text(status_rumah);
    // $(".modal-body #alamat").val(alamat).text(alamat);

});

// $(document).on("click", "#profile-edit", function () {
//     var tabel_id = $(this).data('tabel_id');
//     $(".modal-body #tabel_id").val(tabel_id);
//     console.log(tabel_id)

//     var kk = $(this).data('kk');
//     $(".modal-body #kk").val(kk);

//     var ktp = $(this).data('ktp');
//     $(".modal-body #ktp").val(ktp);

//     var nama = $(this).data('nama');
//     $(".modal-body #nama").val(nama);

//     var blok = $(this).data('blok');
//     $(".modal-body #blok").val(blok);

//     var nomer = $(this).data('nomer');
//     $(".modal-body #nomer").val(nomer);

//     var tempat_lahir = $(this).data('tempat_lahir');
//     $(".modal-body #tempat_lahir").val(tempat_lahir);

//     var tgl_lahir = $(this).data('tgl_lahir');
//     $(".modal-body #tgl_lahir").val(tgl_lahir);

//     var kelamin = $(this).data('kelamin');
//     $(".modal-body #kelamin").val(kelamin);

//     var menikah = $(this).data('menikah');
//     $(".modal-body #menikah").val(menikah);

//     var pendidikan = $(this).data('pendidikan');
//     $(".modal-body #pendidikan").val(pendidikan);

//     var keluarga = $(this).data('keluarga');
//     $(".modal-body #keluarga").val(keluarga);

//     var agama = $(this).data('agama');
//     $(".modal-body #agama").val(agama);

//     var pekerjaan = $(this).data('pekerjaan');
//     $(".modal-body #pekerjaan").val(pekerjaan);

//     var telp = $(this).data('telp');
//     $(".modal-body #telp").val(telp).text(telp);

//     var status_rumah = $(this).data('status_rumah');
//     $(".modal-body #status_rumah").val(status_rumah);

//     var alamat = $(this).data('alamat');
//     $(".modal-body #alamat").val(alamat).text(alamat);

// });
