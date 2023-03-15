<?php include "../../system/_core/db.php" ?>
<?php include "../header.php" ?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Warga</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Kelola Data</a></li>
        <li class="breadcrumb-item active">Data Warga</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Tabel Data Warga</h3>
            <button type="button" class="btn btn-success rounded-pill btn-md mb-2" data-bs-toggle="modal" data-bs-target="#ModalTambah"><i class="bi bi-person-plus"></i> Tambah Data</button>
            <!-- Table -->
            <table id="tabel" class="table " style="width:100%">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No Telp</th>
                  <th>St-Menikah</th>
                  <th>Umur</th>
                  <th>Status</th>
                  <th>Selengkapnya</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1 ?>
                <?php
                $result = mysqli_query($koneksi, "SELECT * FROM data_warga WHERE status = 1");
                while ($data = mysqli_fetch_array($result)) {
                  $lahir = new DateTime($data['tgl_lahir']);
                  $today = new DateTime();
                  $umur = $today->diff($lahir)->y;
                ?>
                  <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $data['nama']; ?></td>
                    <td>Renggali Residence Blok <?= $data['blok']; ?> Nomor <?= $data['nomer']; ?></td>
                    <td><?= $data['telp']; ?></td>
                    <td><?= $data['menikah']; ?></td>
                    <td><?= $umur; ?> Tahun</td>
                    <td>
                      <?php if ($data['status'] == 1) {
                        echo 'Aktif - ';
                      } else if ($data['status' == 2]) {
                        echo 'Pindah -';
                      } else {
                        echo 'Tidak Aktif';
                      }
                      ?>
                      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group" role="group">
                          <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Pilih</button>
                          <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <li><a class="dropdown-item" href="#">Pindah</a></li>
                            <li><a class="dropdown-item" href="#">Lainnya</a></li>
                          </ul>
                        </div>
                      </div>
                    </td>
                    <td>
                      <!-- Detail -->
                      <!-- <button class="btn btn-warning rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#ModalDetail"><i class="bi bi-eye-fill"></i> Detail</button> -->
                      <a id="detail_link" href="#" type="" class="detail_link" data-bs-toggle="modal" data-bs-target="#ModalDetail" data-tabel_id="<?= $data['tabel_id']; ?>" data-kk="<?= $data['kk']; ?>" data-ktp="<?= $data['ktp']; ?>" data-nama="<?= $data['nama']; ?>" data-blok="<?= $data['blok']; ?>" data-nomer="<?= $data['nomer']; ?>" data-tempat_lahir="<?= $data['tempat_lahir']; ?>" data-tgl_lahir="<?= $data['tgl_lahir']; ?>" data-kelamin="<?= $data['kelamin']; ?>" data-menikah="<?= $data['menikah']; ?>" data-pendidikan="<?= $data['pendidikan']; ?>" data-keluarga="<?= $data['keluarga']; ?>" data-agama="<?= $data['agama']; ?>" data-pekerjaan="<?= $data['pekerjaan']; ?>" data-telp="<?= $data['telp']; ?>" data-status_rumah="<?= $data['status_rumah']; ?>" data-alamat="<?= $data['alamat']; ?>"><i class="bi bi-eye-fill"></i> Lihat Selengkapnya...</a>
                    </td>
                    <td class="text-center">
                      <!-- edit -->
                      <a id="edit_link" href="#" type="button" class="btn btn-success rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#ModalEdit" data-tabel_id="<?= $data['tabel_id']; ?>" data-kk="<?= $data['kk']; ?>" data-ktp="<?= $data['ktp']; ?>" data-nama="<?= $data['nama']; ?>" data-blok="<?= $data['blok']; ?>" data-nomer="<?= $data['nomer']; ?>" data-tempat_lahir="<?= $data['tempat_lahir']; ?>" data-tgl_lahir="<?= $data['tgl_lahir']; ?>" data-kelamin="<?= $data['kelamin']; ?>" data-menikah="<?= $data['menikah']; ?>" data-pendidikan="<?= $data['pendidikan']; ?>" data-keluarga="<?= $data['keluarga']; ?>" data-agama="<?= $data['agama']; ?>" data-pekerjaan="<?= $data['pekerjaan']; ?>" data-telp="<?= $data['telp']; ?>" data-status_rumah="<?= $data['status_rumah']; ?>" data-alamat="<?= $data['alamat']; ?>"><i class="bi bi-pencil-square"></i> Ubah</a>
                      <!-- Delete -->
                      <form id="form-delete<?php echo $data['tabel_id']; ?>" method="post" action="../../system/_core/delete.php" class="d-inline">
                        <input type="hidden" name="delete_id" value="<?php echo $data['tabel_id']; ?>">
                        <input id="module" type="hidden" name="module" value="user_warga">
                        <?php print CSRF::tokenInput(); ?>
                        <button class="btn btn-danger rounded-pill btn-sm" onclick="get_nama_delete('form-delete<?php echo $data['tabel_id']; ?>')"><i class="bi bi-trash-fill"></i> Hapus</button>
                      </form>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
            <!-- End Table  -->
          </div>
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->

<?php include "modal.php"; ?>
<?php include "../footer.php" ?>

<script type="text/javascript">
  //   $(document).ready(function () {
  //     $('.detail.link').click(function () {
  //         var tabel_id = $(this).data('tabel_id');
  //         console.log(tabel_id)
  //     });
  // });
  $(document).on("click", "#detail_link", function() {
    var id = $(this).data('tabel_id');
    var keluarga = $(this).data('keluarga')
    $.ajax({
      url: 'keluarga.php',
      type: 'POST',
      data: {
        id: id,
        keluarga: keluarga
      },
      success: function(response) {
        // console.log(response)
        $('#view-tabel').html(response);
        $('#ModalDetail').modal('show')
      }
    })
  });
</script>