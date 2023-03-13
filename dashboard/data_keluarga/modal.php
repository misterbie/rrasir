<!-- modal tambah data Keluarga -->
<div class="modal fade" id="ModalTambah" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Warga</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form -->
                <form method="POST" action="../../system/data_keluarga/create.php">
                    <h5 class="card-title">A. Data Pribadi</h5>
                    <div class="row mb-3">
                        <label for="kk_id" class="col-sm-2 col-form-label">No. KK </label>
                        <div class="col-sm-10">
                            <select name="kk_id" class="form-select">
                                <option value="">=== Pilih No KK ===</option>
                                <?php
                                include '../../system/_core/db.php';
                                $selek_data = mysqli_query($koneksi, "SELECT * FROM data_warga");
                                while ($data = mysqli_fetch_array($selek_data)) {
                                ?>
                                    <option value="<?= $data['tabel_id']; ?>"><?= $data['kk']; ?> == <?= $data['nama']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="namakk" class="col-sm-2 col-form-label">Nama </label>
                        <div class="col-sm-10">
                            <input name="namakk" type="text" class="form-control" placeholder="Masukan Nama">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir </label>
                        <div class="col-sm-10">
                            <input name="tempat_lahir" type="text" class="form-control" placeholder="Masukan Tempat Lahir">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tgl_lahir" class="col-sm-2 col-form-label ">Tanggal Lahir</label>
                        <div class="col-sm-4">
                            <input type="date" name="tgl_lahir" placeholder="Masukan Tanggal Lahir" class="form-control">
                        </div>
                        <label for="kelamin" class="col-sm-2 col-form-label">Jenis Kelamin </label>
                        <div class="col-sm-4">
                            <select name="kelamin" class="form-select" aria-label="Default select example">
                                <option value="">=== Jenis Kelamin ===</option>
                                <option value="Laki-laki">L</option>
                                <option value="Perempuan">P</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="telp" class="col-sm-2 col-form-label">No Telphone </label>
                        <div class="col-sm-10">
                            <input name="telp" type="number" class="form-control" placeholder="No Telphone">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="sdk" class="col-sm-2 col-form-label">Status KK </label>
                        <div class="col-sm-10">
                            <select name="sdk" class="form-select" aria-label="Default select example">
                                <option value="">=== Status Keluarga ===</option>
                                <option value="Istri">Istri</option>
                                <option value="Anak">Anak</option>
                            </select>
                        </div>
                    </div>
                    <?php print CSRF::tokenInput(); ?>
            </div>
            <div class="modal-footer">
                <input id="module" type="hidden" name="module" value="data_keluarga">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            </form><!-- End General Form Elements -->
        </div>
    </div>
</div><!-- End Modal tambah Keluarga-->

<!-- modal Edit data Keluarga -->
<div class="modal fade" id="ModalEdit" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Data Warga</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form -->
                <form method="POST" action="../../system/data_keluarga/edit.php">
                    <div class="row mb-3">
                        <label for="no_ktp" class="col-sm-2 col-form-label">No KTP</label>
                        <div class="col-sm-10">
                            <input name="no_ktp" type="number" class="form-control" placeholder="Masukan No KTP" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="no_kk" class="col-sm-2 col-form-label">No KK </label>
                        <div class="col-sm-10">
                            <input name="no_kk" type="number" class="form-control" placeholder="Masukan No KK">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama </label>
                        <div class="col-sm-10">
                            <input name="nama" type="number" class="form-control" placeholder="Masukan Nama">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Alamat </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="Renggali Residence Cluster Asir Asir" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="row mb-3">
                            <label for="blok" class="col-sm-2 col-form-label">Blok Rumah </label>
                            <div class="col-sm-4 px-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option disabled selected hidden>=== Pilih Blok ===</option>
                                    <option value="AA">AA</option>
                                    <option value="AB">AB</option>
                                    <option value="AC">AC</option>
                                    <option value="AD">AD</option>
                                    <option value="AE">AE</option>
                                    <option value="AF">AF</option>
                                    <option value="AG">AG</option>
                                    <option value="AH">AH</option>
                                    <option value="AI">AI</option>
                                    <option value="AJ">AJ</option>
                                </select>
                            </div>
                            <label for="no_rumah" class="col-sm-2 col-form-label ">No Rumah </label>
                            <div class="col-sm-4">
                                <input name="no_rumah" type="number" class="form-control" placeholder="No Rumah">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="row mb-3">
                            <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir </label>
                            <div class="col-sm-4">
                                <input name="tempat_lahir" type="text" class="form-control" placeholder="Tempat Lahir">
                            </div>
                            <label for="tanggal_lahir" class="col-sm-2 col-form-label ">Date</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="row mb-3">
                            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin </label>
                            <div class="col-sm-4">
                                <select class="form-select" aria-label="Default select example">
                                    <option disabled selected hidden>==Pilih Jenis Kelamin==</option>
                                    <option value="Menikah">Laki Laki</option>
                                    <option value="Belum Menikah">Perempuan</option>

                                </select>
                            </div>
                            <label for="status_menikah" class="col-sm-2 col-form-label">Status </label>
                            <div class="col-sm-4">
                                <select class="form-select" aria-label="Default select example">
                                    <option disabled selected hidden>=== Pilih Status ===</option>
                                    <option value="Menikah">Menikah</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                    <option value="Janda">Janda</option>
                                    <option value="Duda">Duda</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="row mb-3">
                            <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan </label>
                            <div class="col-sm-4">
                                <select class="form-select" aria-label="Default select example">
                                    <option disabled selected hidden>=== Pilih Pendidikan ===</option>
                                    <option value="SD">SD</option>
                                    <option value="SLTP">SLTP/SMP</option>
                                    <option value="SLTA">SLTA/SMA</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                </select>
                            </div>
                            <label for="jumlah_keluarga" class="col-sm-2 col-form-label">Keluarga </label>
                            <div class="col-sm-4">
                                <input name="jumlah_keluarga" type="number" class="form-control" placeholder="Jumlah Keluarga">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="row mb-3">
                            <label for="agama" class="col-sm-2 col-form-label">Agama </label>
                            <div class="col-sm-4">
                                <select class="form-select" aria-label="Default select example">
                                    <option disabled selected hidden>=== Pilih Agama ===</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                </select>
                            </div>
                            <label for="Pekerjaan" class="col-sm-2 col-form-label">Pekerjaan </label>
                            <div class="col-sm-4">
                                <input name="Pekerjaan" type="text" class="form-control" placeholder="Pekerjaan">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="row mb-3">
                            <label for="no_telp" class="col-sm-2 col-form-label">No Telphone </label>
                            <div class="col-sm-4">
                                <input name="no_telp" type="number" class="form-control" placeholder="No Telphone">
                            </div>
                            <label for="status_rumah" class="col-sm-2 col-form-label">Status Rumah </label>
                            <div class="col-sm-4">
                                <select class="form-select" aria-label="Default select example">
                                    <option disabled selected hidden>=== Status Rumah ===</option>
                                    <option value="Islam">Milik Sendiri</option>
                                    <option value="Kristen">Sewa</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat <br><span style="font-style: italic;">sesuai KTP</span></label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 100px" placeholder="Masukan Alamat Sesuai KTP"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" id="formFile" value="Comming Soon" disabled>
                        </div>
                    </div>
                </form><!-- End General Form Elements -->
            </div>
            <div class="modal-footer">
                <input id="module" type="hidden" name="module" value="data_warga">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </div>
    </div>
</div><!-- End Modal Edit Keluarga-->