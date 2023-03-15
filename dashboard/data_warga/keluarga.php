<div id="view-tabel" class="card-body" style="padding-left: 0;">
    <h5 class="card-title">C. Data Keluarga</h5>
    <table class="table table-bordered modal-tabel" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelamin</th>
                <th>TTL</th>
                <th>Agama</th>
                <th>Hubungan</th>
                <th>No Telp</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../../system/_core/db.php";
            $id = $_POST['id'];
            $i = 1;
            $result = mysqli_query($koneksi, "SELECT * FROM data_keluarga
                JOIN data_warga ON data_warga.tabel_id = data_keluarga.kk_id
                WHERE data_warga.tabel_id = $id");
            while ($data = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $data['namakk']; ?></td>
                    <td><?= $data['kelamin']; ?></td>
                    <td><?= $data['tempat_lahir']; ?>, <?= $data['tgl_lahir']; ?></td>
                    <td><?= $data['agama']; ?></td>
                    <td><?= $data['sdk']; ?></td>
                    <td><?= $data['telp']; ?></td>
                </tr>
            <?php
            }

            ?>
        </tbody>
    </table>
</div>