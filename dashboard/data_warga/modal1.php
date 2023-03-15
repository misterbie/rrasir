<?php
print_r($_POST);
?>

<!-- modal tambah data warga -->
<div class="modal fade" id="ModalTambah" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Warga</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form -->
                <form method="POST" action="../../system/data_warga/create.php">
                    <h5 class="card-title">A. Data Pribadi</h5>
                    <div class="row mb-3">
                        <label for="kk" class="col-sm-2 col-form-label">No KK</label>
                        <div class="col-sm-10">
                            <input name="kk" type="number" class="form-control" placeholder="Masukan No KK" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="ktp" class="col-sm-2 col-form-label">No KTP </label>
                        <div class="col-sm-10">
                            <input name="ktp" type="number" class="form-control" placeholder="Masukan No KTP">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama </label>
                        <div class="col-sm-10">
                            <input name="nama" type="text" class="form-control" placeholder="Masukan Nama">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Alamat Rumah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="Renggali Residence Cluster Asir Asir" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="row mb-3">
                            <label for="blok" class="col-sm-2 col-form-label">Blok Rumah </label>
                            <div class="col-sm-4 px-3">
                                <select name="blok" class="form-select">
                                    <option value="">=== Pilih Blok ===</option>
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
                            <label for="nomer" class="col-sm-2 col-form-label ">No Rumah </label>
                            <div class="col-sm-4">
                                <input name="nomer" type="number" class="form-control" placeholder="No Rumah">
                            </div>
                        </div>
                    </div>

                    <h5 class="card-title">B. Data Lainnya</h5>
                    <div class="row mb-3">
                        <div class="row mb-3">
                            <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir </label>
                            <div class="col-sm-4">
                                <input name="tempat_lahir" type="text" class="form-control" placeholder="Tempat Lahir">
                            </div>
                            <label for="tgl_lahir" class="col-sm-2 col-form-label ">Date</label>
                            <div class="col-sm-4">
                                <input type="date" name="tgl_lahir" placeholder="Masukan Tanggal Lahir" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="row mb-3">
                            <label for="kelamin" class="col-sm-2 col-form-label">Jenis Kelamin </label>
                            <div class="col-sm-4">
                                <select name="kelamin" class="form-select" aria-label="Default select example">
                                    <option value="">=== Jenis Kelamin ===</option>
                                    <option value="Laki-laki">L</option>
                                    <option value="Perempuan">P</option>
                                </select>
                            </div>
                            <label for="menikah" class="col-sm-2 col-form-label">Status </label>
                            <div class="col-sm-4">
                                <select name="menikah" class="form-select" aria-label="Default select example">
                                    <option value="">=== Pilih Status ===</option>
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
                                <select name="pendidikan" class="form-select" aria-label="Default select example">
                                    <option value="">=== Pilih Pendidikan ===</option>
                                    <option value="SD">SD</option>
                                    <option value="SLTP">SLTP/SMP</option>
                                    <option value="SLTA">SLTA/SMA</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                </select>
                            </div>
                            <label for="keluarga" class="col-sm-2 col-form-label">Keluarga </label>
                            <div class="col-sm-4">
                                <input name="keluarga" type="number" class="form-control" placeholder="Jumlah Keluarga">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="row mb-3">
                            <label for="agama" class="col-sm-2 col-form-label">Agama </label>
                            <div class="col-sm-4">
                                <select name="agama" class="form-select" aria-label="Default select example">
                                    <option value="">=== Pilih Agama ===</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                </select>
                            </div>
                            <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan </label>
                            <div class="col-sm-4">
                                <input name="pekerjaan" type="text" class="form-control" placeholder="Pekerjaan">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="row mb-3">
                            <label for="status_rumah" class="col-sm-2 col-form-label">Status Rumah</label>
                            <div class="col-sm-4">
                                <select name="status_rumah" class="form-select" aria-label="Default select example">
                                    <option value="">=== Status Rumah ===</option>
                                    <option value="Milik Sendiri">Milik Sendiri</option>
                                    <option value="Sewa">Sewa</option>
                                </select>
                            </div>
                            <label for="telp" class="col-sm-2 col-form-label">No Telphone </label>
                            <div class="col-sm-4">
                                <input name="telp" type="number" class="form-control" placeholder="No Telphone">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat <br><span style="font-style: italic;">sesuai KTP</span></label>
                        <div class="col-sm-10">
                            <textarea name="alamat" class="form-control" style="height: 100px" placeholder="Masukan Alamat Sesuai KTP"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                        <div class="col-sm-10">
                            <input name="gambar" class="form-control" type="file" id="formFile" value="Comming Soon" disabled>
                        </div>
                    </div>
                    <?php print CSRF::tokenInput(); ?>
            </div>
            <div class="modal-footer">
                <input id="module" type="hidden" name="module" value="data_warga">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            </form><!-- End General Form Elements -->
        </div>
    </div>
</div><!-- End Modal tambah warga-->

<!-- modal Edit data warga -->
<div class="modal fade" id="ModalEdit" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Data Warga</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form -->
                <form method="POST" action="../../system/data_warga/edit.php">
                    <input type="hidden" name="tabel_id" id="tabel_id" class="form-control">
                    <h5 class="card-title">A. Data Pribadi</h5>
                    <div class="row mb-3">
                        <label for="kk" class="col-sm-2 col-form-label">No KK</label>
                        <div class="col-sm-10">
                            <input id="kk" name="kk" type="number" class="form-control" placeholder="Masukan No KK" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="ktp" class="col-sm-2 col-form-label">No KTP </label>
                        <div class="col-sm-10">
                            <input id="ktp" name="ktp" type="number" class="form-control" placeholder="Masukan No KTP">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama </label>
                        <div class="col-sm-10">
                            <input id="nama" name="nama" type="text" class="form-control" placeholder="Masukan Nama">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Alamat Rumah </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="Renggali Residence Cluster Asir Asir" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="row mb-3">
                            <label for="blok" class="col-sm-2 col-form-label">Blok Rumah </label>
                            <div class="col-sm-4 px-3">
                                <select id="blok" name="blok" class="form-select">
                                    <option value="">=== Pilih Blok ===</option>
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
                            <label for="nomer" class="col-sm-2 col-form-label ">No Rumah </label>
                            <div class="col-sm-4">
                                <input id="nomer" name="nomer" type="number" class="form-control" placeholder="No Rumah">
                            </div>
                        </div>
                    </div>

                    <h5 class="card-title">B. Data Lainnya</h5>
                    <div class="row mb-3">
                        <div class="row mb-3">
                            <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir </label>
                            <div class="col-sm-4">
                                <input id="tempat_lahir" name="tempat_lahir" type="text" class="form-control" placeholder="Tempat Lahir">
                            </div>
                            <label for="tgl_lahir" class="col-sm-2 col-form-label ">Tanggal Lahir</label>
                            <div class="col-sm-4">
                                <input id="tgl_lahir" type="date" name="tgl_lahir" placeholder="Masukan Tanggal Lahir" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="row mb-3">
                            <label for="kelamin" class="col-sm-2 col-form-label">Jenis Kelamin </label>
                            <div class="col-sm-4">
                                <select id="kelamin" name="kelamin" class="form-select" aria-label="Default select example">
                                    <option value="">=== Jenis Kelamin ===</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Pepempuan</option>
                                </select>
                            </div>
                            <label for="status_menikah" class="col-sm-2 col-form-label">Status </label>
                            <div class="col-sm-4">
                                <select id="menikah" name="menikah" class="form-select" aria-label="Default select example">
                                    <option value="">=== Pilih Status ===</option>
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
                                <select id="pendidikan" name="pendidikan" class="form-select" aria-label="Default select example">
                                    <option value="">=== Pilih Pendidikan ===</option>
                                    <option value="SD">SD</option>
                                    <option value="SLTP">SLTP/SMP</option>
                                    <option value="SLTA">SLTA/SMA</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                </select>
                            </div>
                            <label for="keluarga" class="col-sm-2 col-form-label">Keluarga </label>
                            <div class="col-sm-4">
                                <input id="keluarga" name="keluarga" type="number" class="form-control" placeholder="Jumlah Keluarga">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="row mb-3">
                            <label for="agama" class="col-sm-2 col-form-label">Agama </label>
                            <div class="col-sm-4">
                                <select id="agama" name="agama" class="form-select" aria-label="Default select example">
                                    <option value="">=== Pilih Agama ===</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                </select>
                            </div>
                            <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan </label>
                            <div class="col-sm-4">
                                <input id="pekerjaan" name="pekerjaan" type="text" class="form-control" placeholder="Pekerjaan">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="row mb-3">
                            <label for="status_rumah" class="col-sm-2 col-form-label">Status Rumah</label>
                            <div class="col-sm-4">
                                <select id="status_rumah" name="status_rumah" class="form-select" aria-label="Default select example">
                                    <option value="">=== Status Rumah ===</option>
                                    <option value="Milik Sendiri">Milik Sendiri</option>
                                    <option value="Sewa">Sewa</option>
                                </select>
                            </div>
                            <label for="telp" class="col-sm-2 col-form-label">No Telphone </label>
                            <div class="col-sm-4">
                                <input id="telp" name="telp" type="number" class="form-control" placeholder="No Telphone">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat <br><span style="font-style: italic;">sesuai KTP</span></label>
                        <div class="col-sm-10">
                            <textarea id="alamat" name="alamat" class="form-control" style="height: 100px" placeholder="Masukan Alamat Sesuai KTP"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                        <div class="col-sm-10">
                            <input name="gambar" class="form-control" type="file" id="formFile" value="Comming Soon" disabled>
                        </div>
                    </div>
                    <?php print CSRF::tokenInput(); ?>
            </div>
            <div class="modal-footer">
                <input id="module" type="hidden" name="module" value="data_warga">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            </form><!-- End General Form Elements -->
        </div>
    </div>
</div><!-- End Modal Edit warga-->



<!-- modal Detail data warga -->
<div class="modal fade" id="ModalDetail" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Data Warga</h5>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
            <div class="modal-body main">
                <?php
                print_r($_POST);
                ?>
            </div>
        </div>
        <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
            <button type="button" class="btn btn-primary">Close</button>
        </div>
    </div>
</div>

<!-- End Modal Detail warga-->

<script src="modal.js"></script>