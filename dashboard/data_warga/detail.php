<?php include "../../system/_core/db.php" ?>
<?php include "../header.php" ?>
<main id="main" class="main">


    <section class="section profile">
        <!-- <input type="text" name="tabel_id" id="tabel_id" class="form-control"> -->
        <div class="row">
            <div class="col-xl-4">
                <!-- Gambar / Foto warga -->
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="../../resource/assets/img/profile-img.png" alt="Profile" class="rounded-circle">
                        <h2 id="nama"></h2>
                        <br>
                        <h1 id="pekerjaan"></h1>
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
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</a>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change
                                    Password</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="detail_warga">
                                <h5 class="card-title">A. Data Pribadi</h5>

                                <div class="row text">
                                    <div class="col-lg-3 col-md-4 label ">NIK</div>
                                    <div class="col-lg-9 col-md-8" id="ktp"></div>
                                </div>
                                <div class="row text">
                                    <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                                    <div class="col-lg-9 col-md-8" id="nama"></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Tempat Tanggal Lahir</div>
                                    <div class="col-lg-4 col-md-8" id="ttl"></div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                                    <div class="col-lg-9 col-md-8" id="kelamin"></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Alamat Domisili</div>
                                    <div class="col-lg-9 col-md-8">Perumahan Renggali Residance - Cluster Asir Asir
                                        <br>
                                        <p id="alamatL"></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Alamat KTP</div>
                                    <div class="col-lg-9 col-md-8" id="alamat"></div>
                                </div>

                                <br>
                                <h5 class="card-title">B. Data Lainnya</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Pendidikan</div>
                                    <div class="col-lg-9 col-md-8" id="pendidikan"></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Pekerjaan</div>
                                    <div class="col-lg-9 col-md-8" id="pekerjaan"></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Agama</div>
                                    <div class="col-lg-9 col-md-8" id="agama"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Status Kawin</div>
                                    <div class="col-lg-9 col-md-8" id="menikah"></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">No Telp / WA</div>
                                    <div class="col-lg-9 col-md-8" id="telp"></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Jumlah Anggota Keluarga</div>
                                    <div class="col-lg-9 col-md-8" id="keluarga"></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Status Tempat Tinggal</div>
                                    <div class="col-lg-9 col-md-8" id="status_rumah"></div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">C. Data Keluarga</h5>
                                    <h6 class="text-center" style="font-weight: bold;"> KK :
                                        <span class="text-center" style="font-weight: bold;" id="kk">
                                    </h6>
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


                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                <!-- Profile Edit Form -->
                                <form method="POST" action="">
                                    <!-- <input type="text" name="tabel_id" id="tabel_id" class="form-control"> -->
                                    <div class="row mb-3">
                                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                        <div class="col-md-8 col-lg-9">
                                            <img src="../../resource/assets/img/profile-img.png" alt="Profile">
                                            <!-- <div class="pt-2">
                                                                <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                                                <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="kk" class="col-md-4 col-lg-3 col-form-label">KK</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="kk" type="text" class="form-control" id="kk">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="ktp" class="col-md-4 col-lg-3 col-form-label">KTP</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="ktp" type="text" class="form-control" id="ktp">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nama" class="col-md-4 col-lg-3 col-form-label">Nama</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="nama" type="text" class="form-control" id="nama">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input class="form-control" value="Renggali Residance Cluster Asir Asir" disabled>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="blok" class="col-md-4 col-lg-3 col-form-label">Blok</label>
                                        <div class="col-sm-4">
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
                                        <div class="col-md-8 col-lg-3">
                                            <input id="nomer" name="nomer" type="number" class="form-control" placeholder="No Rumah">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="tempat_lahir" class="col-md-4 col-lg-3 col-form-label">Tempat Lahir</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="tgl_lahir" class="col-md-4 col-lg-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="tgl_lahir" type="date" class="form-control" id="tgl_lahir">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="kelamin1" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-4">
                                            <select id="kelamin1" name="kelamin1" class="form-select" aria-label="Default select example">
                                                <option value="">=== Jenis Kelamin ===</option>
                                                <option value="Laki-laki">L</option>
                                                <option value="Perempuan">P</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="menikah1" class="col-md-4 col-lg-3 col-form-label">Status</label>
                                        <div class="col-sm-4">
                                            <select id="menikah1" name="menikah1" class="form-select" aria-label="Default select example">
                                                <option value="">=== Pilih Status ===</option>
                                                <option value="Menikah">Menikah</option>
                                                <option value="Belum Menikah">Belum Menikah</option>
                                                <option value="Janda">Janda</option>
                                                <option value="Duda">Duda</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="pendidikan" class="col-md-4 col-lg-3 col-form-label">Pendidikan</label>
                                        <div class="col-sm-4">
                                            <select id="pendidikan1" name="pendidikan1" class="form-select" aria-label="Default select example">
                                                <option value="">=== Pilih Pendidikan ===</option>
                                                <option value="SD">SD</option>
                                                <option value="SLTP">SLTP/SMP</option>
                                                <option value="SLTA">SLTA/SMA</option>
                                                <option value="D3">D3</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="keluarga" class="col-md-4 col-lg-3 col-form-label">Jumlah Keluarga</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="keluarga" type="text" class="form-control" id="keluarga">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="agama1" class="col-md-4 col-lg-3 col-form-label">Agama</label>
                                        <div class="col-sm-4">
                                            <select id="agama1" name="agama1" class="form-select" aria-label="Default select example">
                                                <option value="">=== Pilih Agama ===</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="pekerjaan" class="col-md-4 col-lg-3 col-form-label">Pekerjaan</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="pekerjaan" type="text" class="form-control" id="pekerjaan">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="status_rumah1" class="col-md-4 col-lg-3 col-form-label">Status Tempat Tinggal</label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="col-sm-4">
                                                <select id="status_rumah1" name="status_rumah1" class="form-select" aria-label="Default select example">
                                                    <option value="">=== Status Rumah ===</option>
                                                    <option value="Milik Sendiri">Milik Sendiri</option>
                                                    <option value="Sewa">Sewa</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="telp" class="col-md-4 col-lg-3 col-form-label">No Telp / Wa</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="telp" type="number" class="form-control" id="telp">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="alamat" class="col-md-4 col-lg-3 col-form-label">Alamat KTP</label>
                                        <div class="col-md-8 col-lg-9">
                                            <textarea name="alamat" class="form-control" id="alamat" style="height: 100px"></textarea>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form><!-- End Profile Edit Form -->
                            </div>

                            <!-- Change Password Form -->
                            <div class="tab-pane fade pt-3" id="profile-change-password">
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

                </div>

            </div>
        </div>

    </section>

</main><!-- End #main -->

<?php include "modal.php"; ?>
<?php include "../footer.php" ?>