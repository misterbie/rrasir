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
                <form method="post" action="">
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
                <button type="button" class="btn btn-success">Simpan</button>
            </div>
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
                <form method="post" action="">
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
                <button type="button" class="btn btn-success">Simpan</button>
            </div>
        </div>
    </div>
</div><!-- End Modal Edit warga-->


<!-- modal Detail data warga -->
<div class="modal fade" id="ModalDetail" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Data Warga</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body main">
                <main id="main" class="main">
                    <section class="section profile">
                        <div class="row">
                            <div class="col-xl-4">
                                <!-- Gambar / Foto warga -->
                                <div class="card">
                                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                        <img src="../../resource/assets/img/profile-img.png" alt="Profile" class="rounded-circle">
                                        <h2>Kevin Anderson</h2>
                                        <h3>Web Designer</h3>
                                        <div class="social-links mt-2">
                                        </div>
                                    </div>
                                </div>
                                <!-- end Foto -->
                            </div>
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Bordered Tabs -->
                                        <ul class="nav nav-tabs nav-tabs-bordered">
                                            <li class="nav-item">
                                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#detail_warga">Tentang</button>
                                            </li>
                                            <li class="nav-item">
                                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                                            </li>
                                            <li class="nav-item">
                                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change
                                                    Password</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content pt-2">
                                            <?php
                                            $result = mysqli_query($koneksi, "SELECT * FROM data_warga");
                                            $data = mysqli_fetch_array($result);
                                            ?>
                                            <div class="tab-pane fade show active profile-overview" id="detail_warga">
                                                <h5 class="card-title">A. Data Pribadi</h5>

                                                <div class="row text">
                                                    <div class="col-lg-3 col-md-4 label ">NIK</div>
                                                    <div class="col-lg-9 col-md-8"><?= $data['no_ktp']; ?></div>
                                                </div>
                                                <div class="row text">
                                                    <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                                                    <div class="col-lg-9 col-md-8"><?= $data['nama']; ?></div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Tempat Tanggal Lahir</div>
                                                    <div class="col-lg-9 col-md-8"><?= $data['tempat_lahir']; ?>, <?= date("d-M-Y", strtotime($data["tgl_lahir"])); ?></div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                                                    <div class="col-lg-9 col-md-8"><?= $data['jenis_kelamin']; ?></div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Alamat Domisili</div>
                                                    <div class="col-lg-9 col-md-8">Perumahan Renggali Residance - Cluster Asir Asir
                                                        <br>Blok <?= $data['blok_rumah']; ?> No <?= $data['no_rumah']; ?> Tembesi - Batam
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Alamat KTP</div>
                                                    <div class="col-lg-9 col-md-8"><?= $data['alamat']; ?></div>
                                                </div>

                                                <br>
                                                <h5 class="card-title">B. Data Lainnya</h5>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Pendidikan</div>
                                                    <div class="col-lg-9 col-md-8"><?= $data['pendidikan']; ?></div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Pekerjaan</div>
                                                    <div class="col-lg-9 col-md-8"><?= $data['pekerjaan']; ?></div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Agama</div>
                                                    <div class="col-lg-9 col-md-8"><?= $data['agama']; ?></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Status Kawin</div>
                                                    <div class="col-lg-9 col-md-8"><?= $data['status_menikah']; ?></div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">No Telp / WA</div>
                                                    <div class="col-lg-9 col-md-8"><?= $data['hp']; ?></div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Jumlah Anggota Keluarga</div>
                                                    <div class="col-lg-9 col-md-8"><?= $data['anggota_keluarga']; ?></div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Status Tempat Tinggal</div>
                                                    <div class="col-lg-9 col-md-8"><?= $data['status_rumah']; ?></div>
                                                </div>

                                            </div>

                                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                                <!-- Profile Edit Form -->
                                                <form>
                                                    <div class="row mb-3">
                                                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <img src="../../resource/assets/img/profile-img.png" alt="Profile">
                                                            <div class="pt-2">
                                                                <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                                                <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="fullName" type="text" class="form-control" id="fullName" value="Kevin Anderson">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="company" type="text" class="form-control" id="company" value="Lueilwitz, Wisoky and Leuschke">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="job" type="text" class="form-control" id="Job" value="Web Designer">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="country" type="text" class="form-control" id="Country" value="USA">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="address" type="text" class="form-control" id="Address" value="A108 Adam Street, New York, NY 535022">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="phone" type="text" class="form-control" id="Phone" value="(436) 486-3538 x29071">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="email" type="email" class="form-control" id="Email" value="k.anderson@example.com">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                    </div>
                                                </form><!-- End Profile Edit Form -->
                                            </div>
                                            <div class="tab-pane fade pt-3" id="profile-settings">
                                            </div>

                                            <div class="tab-pane fade pt-3" id="profile-change-password">
                                                <!-- Change Password Form -->
                                                <form>

                                                    <div class="row mb-3">
                                                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="password" type="password" class="form-control" id="currentPassword">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="newpassword" type="password" class="form-control" id="newPassword">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                                                        </div>
                                                    </div>

                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                                    </div>
                                                </form><!-- End Change Password Form -->

                                            </div>

                                        </div><!-- End Bordered Tabs -->

                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">C. Data Keluarga</h5>
                                        <h6 class="text-center" style="font-weight: bold;">NO KK : <?= $data['no_kk']; ?></h6>
                                        <table class="table table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama</th>
                                                    <th>Kelamin</th>
                                                    <th>TTL</th>
                                                    <th>Pendidikan</th>
                                                    <th>Agama</th>
                                                    <th>Hubungan</th>
                                                    <th>No Telp</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Minda Afriani</td>
                                                    <td>Perempuan</td>
                                                    <td>Payakumbuh 01/01/1995</td>
                                                    <td>SLTA</td>
                                                    <td>Islam</td>
                                                    <td>Istri</td>
                                                    <td>08789456123</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Ameera Ghania</td>
                                                    <td>Perempuan</td>
                                                    <td>Payakumbuh 03/01/2023</td>
                                                    <td>-</td>
                                                    <td>Islam</td>
                                                    <td>Anak</td>
                                                    <td>-</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </section>

                </main><!-- End #main -->
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
</div>
</div>
<!-- End Modal Detail warga-->