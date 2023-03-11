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

            <h5 class="card-title">Tabel Data</h5>
            <button type="button" class="btn btn-success rounded-pill btn-md mb-2" data-bs-toggle="modal" data-bs-target="#ModalTambah"><i class="bi bi-person-plus"></i> Tambah Data</button>
            <input id="btn-data-warga" type="hidden" value="Tabel Data Warga">
            <!-- Table -->
            <table id="tabel" class="table " style="width:100%">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>

                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1 ?>
                <?php
                $result = mysqli_query($koneksi, "SELECT * FROM data_warga");
                while ($data = mysqli_fetch_array($result)) {
                  // $lahir = new DateTime($data['tgl_lahir']);
                  // $today = new DateTime();
                  // $umur = $today->diff($lahir)->y;
                ?>
                  <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $data['nama']; ?></td>


                    <td class="text-center">
                      <!-- Detail -->
                      <button class="btn btn-warning rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#ModalDetail"><i class="bi bi-eye-fill"></i> Detail</button>
                      <!-- edit -->
                      <button type="button" class="btn btn-success rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#ModalEdit"><i class="bi bi-pencil-square"></i> Edit</button>
                      <!-- Delete -->
                      <form id="form-delete<?php echo $data['tabel_id']; ?>" method="post" action="../../system/_core/delete.php" class="d-inline">
                        <input type="hidden" name="delete_id" value="<?php echo $data['tabel_id']; ?>">
                        <input id="module" type="hidden" name="module" value="data_warga">
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