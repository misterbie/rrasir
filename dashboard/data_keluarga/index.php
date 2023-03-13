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

            <h5 class="card-title">Tabel Data Keluarga</h5>
            <button type="button" class="btn btn-success rounded-pill btn-md mb-2" data-bs-toggle="modal" data-bs-target="#ModalTambah"><i class="bi bi-person-plus"></i> Tambah Data</button>
            <input id="btn-data-keluarga" type="hidden" value="Tabel Data Keluarga">
            <!-- Table -->
            <table id="tabel" class="table " style="width:100%">
              <thead>
                <tr>
                  <th>No-KK</th>
                  <th>Kepala Keluarga</th>
                  <th>Nama</th>
                  <th>Status</th>
                  <th>TTL</th>
                  <th>Kelamin</th>
                  <th>No Telp</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1 ?>
                <?php
                $result = mysqli_query($koneksi, "SELECT * FROM data_warga
								JOIN data_keluarga ON data_warga.tabel_id = data_keluarga.kk_id");
                while ($data = mysqli_fetch_array($result)) {
                ?>
                  <tr>
                    <td><?= $data['kk']; ?></td>
                    <td><?= $data['nama']; ?></td>
                    <td><?= $data['namakk']; ?></td>
                    <td><?= $data['sdk']; ?></td>
                    <td><?= $data['tempat_lahir']; ?>, <?= $data['tgl_lahir']; ?></td>
                    <td><?= $data['kelamin']; ?></td>
                    <td><?= $data['telp']; ?></td>

                    <td class="text-center">
                      <!-- edit -->
                      <button type="button" class="btn btn-success rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#ModalEdit"><i class="bi bi-pencil-square"></i> Ubah</button>
                      <!-- Delete -->
                      <form id="form-delete<?php echo $data['tabel_id']; ?>" method="post" action="../../system/_core/delete.php" class="d-inline">
                        <input type="hidden" name="delete_id" value="<?php echo $data['tabel_id']; ?>">
                        <input id="module" type="hidden" name="module" value="data_keluarga">
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