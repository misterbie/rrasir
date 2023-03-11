<?php include "../../system/_core/db.php" ?>
<?php include "../header.php" ?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Akun Warga</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Kelola Data</a></li>
        <li class="breadcrumb-item active">Akun Warga</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Tabel User Warga</h3>
            <button type="button" class="btn btn-success rounded-pill btn-md mb-2" data-bs-toggle="modal" data-bs-target="#ModalTambah"><i class="bi bi-person-plus"></i> Tambah Data</button>
            <!-- Table -->
            <table id="tabel" class="table " style="width:100%">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>User Nama</th>
                  <th>Status Akun</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1 ?>
                <?php
                $result = mysqli_query($koneksi, "SELECT * FROM user_warga");
                while ($data = mysqli_fetch_array($result)) {
                ?>
                  <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $data['nama']; ?></td>
                    <td><?= $data['usernama']; ?></td>
                    <td><?php if ($data['status'] == 1) {
                          echo 'Active';
                        } else {
                          echo 'Suspend';
                        }
                        ?>
                    </td>
                    <td>
                      <form id="form-repas<?php echo $data['tabel_id']; ?>" method="post" action="../../system/user_warga/repas.php" class="d-inline">
                        <input type="hidden" name="tabel_id" value="<?php echo $data['tabel_id']; ?>">
                        <input id="module" type="hidden" name="module" value="user_panel">
                        <?php print CSRF::tokenInput(); ?>
                        <button class="btn btn-warning btn-sm" onclick="get_nama_repas('form-repas<?php echo $data['tabel_id']; ?>')"><i class="bi bi-arrow-repeat"></i> Reset Password</button>
                      </form>
                      <?php if ($data['status'] == 1) {
                        include "suspend.php";
                      } else {
                        include "active.php";
                      }
                      ?>
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


<?php include "../footer.php" ?>