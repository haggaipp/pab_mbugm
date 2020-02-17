<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="text-gray-700"><strong>Form Pendaftaran</strong></h1>
                    <p class="small mb-4">*deskripsi form pendaftaran*</p>
                  </div>
                  <hr>
                  <?= $this->session->flashdata('message');?>
                  <h4 class="text-center mb-4">Data Pribadi</h4>
                  <form class="user" name="form1" action="<?= base_url('registration/form');?>" method="POST">
                    <div class="section">
                      <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Nama Lengkap*</label>
                              <input type="text" class="form-control" name="namaLengkap" value="<?= $namalengkap;?>" readonly="readonly">
                              <?= form_error('namaLengkap','<p class="text-danger pl-3 small">','</p>');?>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Nama Panggilan*</label>
                              <input type="text" class="form-control" name="namaPanggilan" value="<?= $namapanggilan;?>" readonly="readonly">
                              <?= form_error('namaPanggilan','<p class="text-danger pl-3 small">','</p>');?>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-group">
                              <label>Tempat Lahir*</label>
                              <input type="text" class="form-control" name="tempatLahir" value="<?= set_value('tempatLahir');?>">
                              <?= form_error('tempatLahir','<p class="text-danger pl-3 small">','</p>');?>
                            </div>
                          </div> 
                          <div class="col-sm-7">
                            <span>Tanggal Lahir*</span>
                            <div class="row">
                              <div class="col-4">
                                <div class="form-group">
                                  <select name="tanggalLahir" class="form-control mt-2">
                                    <option value="0">-DD-</option>
                                    <?php
                                      for ($i=1;$i<=31;$i++)
                                      { 
                                        echo "<option value=".$i;
                                        echo set_select('tanggalLahir', $i);
                                        echo ">".$i."</option>";
                                      }
                                    ?>
                                  </select>
                                </div>
                              </div> 
                              <div class="col-4">
                                <div class="form-group">
                                  <select name="bulanLahir" class="form-control mt-2">
                                    <option value="0">-MM-</option>
                                    <?php foreach ($bulan as $row) : ?>
                                    <option value="<?= $row['id'];?>" <?= set_select('bulanLahir', $row['id']);?>><?= $row['nama_bulan'];?></option>
                                    <?php endforeach; ?>
                                  </select>
                                </div>
                              </div> 
                              <div class="col-4">
                                <div class="form-group">
                                  <select name="tahunLahir" class="form-control mt-2">
                                    <option value="0">-YYYY-</option>
                                    <?php
                                      for ($i=$tahun['palingmuda'];$i>=$tahun['palingtua'];$i--)
                                      {
                                        echo "<option value=".$i;
                                        echo set_select('tahunLahir', $i);
                                        echo ">".$i."</option>";
                                      }
                                    ?>
                                  </select>
                                  <?= form_error('tahunLahir','<p class="text-danger pl-3 small">','</p>');?>
                                </div>
                              </div> 
                            </div>
                          </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Jenis Kelamin*</label>
                            <select name="jenisKelamin" class="form-control">
                              <option value="0">-Pilih Jenis Kelamin-</option>
                                <?php foreach ($kelamin as $row) : ?>
                                  <option value="<?= $row['id'];?>" <?= set_select('jenisKelamin', $row['id']);?>><?= $row['nama_kelamin'];?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('jenisKelamin','<p class="text-danger pl-3 small">','</p>');?>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Agama*</label>
                            <select name="agama" class="form-control">
                              <option value="0">-Pilih Agama-</option>
                                <?php foreach ($agama as $row) : ?>
                                <option value="<?= $row['id'];?>" <?= set_select('agama', $row['id']);?>><?= $row['nama_agama'];?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('agama','<p class="text-danger pl-3 small">','</p>');?>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Golongan Darah*</label>
                            <select name="golonganDarah" class="form-control">
                                  <option value="0">-Pilih Golongan Darah-</option>
                                    <?php foreach ($golonganDarah as $row) : ?>
                                      <option value="<?= $row['id'];?>" <?= set_select('golonganDarah', $row['id']);?>><?= $row['nama_goldar'];?></option>
                                    <?php endforeach; ?>
                                </select>
                            <?= form_error('golonganDarah','<p class="text-danger pl-3 small">','</p>');?>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Tinggi Badan (cm)*</label>
                            <input type="text" class="form-control" name="tinggiBadan" value="<?= set_value('tinggiBadan');?>">
                            <?= form_error('tinggiBadan','<p class="text-danger pl-3 small">','</p>');?>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Berat Badan (cm)*</label>
                            <input type="text" class="form-control" name="beratBadan" value="<?= set_value('beratBadan');?>">
                            <?= form_error('beratBadan','<p class="text-danger pl-3 small">','</p>');?>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Hobi dan Kesukaan*</label>
                            <input type="text" class="form-control" name="hobi" value="<?= set_value('hobi');?>">
                            <?= form_error('hobi','<p class="text-danger pl-3 small">','</p>');?>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Riwayat Penyakit 1</label>
                            <select name="penyakit1" class="form-control">
                              <option value="">-Tidak Ada-</option>
                              <?php foreach ($penyakit as $row) : ?>
                              <option value="<?= $row['id'];?>"<?= set_select('penyakit1', $row['id']);?>><?= $row['nama_penyakit'];?></option>
                              <?php endforeach; ?>
                            </select>
                            <?= form_error('penyakit1','<p class="text-danger pl-3 small">','</p>');?>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Riwayat Penyakit 2</label>
                            <select name="penyakit2" class="form-control">
                              <option value="">-Tidak Ada-</option>
                              <?php foreach ($penyakit as $row) : ?>
                              <option value="<?= $row['id'];?>"<?= set_select('penyakit2', $row['id']);?>><?= $row['nama_penyakit'];?></option>
                              <?php endforeach; ?>
                            </select>
                            <?= form_error('penyakit2','<p class="text-danger pl-3 small">','</p>');?>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Riwayat Penyakit (lainnya)</label>
                            <input type="text" class="form-control" name="penyakit3" value="<?= set_value('penyakit3');?>">
                            <?= form_error('penyakit3','<p class="text-danger pl-3 small">','</p>');?>
                          </div>
                        </div>
                      </div>
                      <hr>
                      <h4 class="text-center mb-4">Data Akademik</h4>
                      <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="card p-3 shadow col-sm-10 mb-5">
                          <table width="90%" id="tabel" class="table table-striped">
                            <tr>
                              <td vertical-align="center" width="40%">Jenjang Studi*</td>
                              <td width="50%">
                                  <select id="jenjang" name="jenjang" class="form-control">
                                    <option value='kosong'>-- Pilih Nama Jenjang --</option>
                                    <?php foreach ($jenjang as $row) : ?>
                                    <option value="<?= $row['id'];?>"<?= set_select('jenjang', $row['id']);?>><?= $row['nama_jenjang'];?></option>
                                    <?php endforeach; ?>
                                  </select>
                              </td>
                            </tr>
                            <tr>
                              <td>Nomor Induk Mahasiswa*</td>
                              <td><input type="text" name="nim" class="form-control" value="<?= $nim;?>" readonly="readonly"></td>
                            </tr>
                            <tr>
                              <td>Fakultas*</td>
                              <td>
                                <div>
                                  <select id="fakultas" class="form-control" name="fakultas">
                                    <option value="kosong">-- Pilih Nama Fakultas --</option>
                                    <?php foreach ($fakultas as $row) : ?>
                                    <option value="<?= $row['id'];?>"<?= set_select('fakultas', $row['id']);?>><?= $row['nama_fakultas'];?></option>
                                    <?php endforeach; ?>
                                  </select>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>Program Studi*</td>
                              <td>
                                <div>
                                  <select id="prodi" class="form-control" name="prodi">
                                    <option value="kosong">-- Pilih Nama Prodi --</option>
                                    <?php foreach ($fakultas as $rowA) : ?>
                                      <optgroup label="Fakultas <?= $rowA['nama_fakultas'];?>">
                                        <?php foreach ($prodi as $rowB) : ?>
                                            <?php if ($rowA['id'] == $rowB['fakultas_id'])
                                              {
                                                echo "<option value=".$rowB['id']; 
                                                echo set_select('prodi', $rowB['id']); 
                                                echo ">".$rowB['nama_prodi']."</option>";
                                              }
                                            ?>
                                        <?php endforeach; ?>  
                                      </optgroup>
                                    <?php endforeach; ?>
                                  </select>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>Nama Asal Sekolah (SMA/SMK)*</td>
                              <td>
                                <input type="text" class="form-control" name="asal" value="<?= set_value('asal');?>">
                                <?= form_error('asal','<p class="text-danger pl-3 small">','</p>');?>
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>

                      <hr>
                      <h4 class="text-center mb-4">Data Orang Tua / Wali</h4>
                      <iiv class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Nama Orang Tua / Wali*</label>
                            <input type="text" class="form-control" name="namaOrtu" value="<?= set_value('namaOrtu');?>">
                            <?= form_error('namaOrtu','<p class="text-danger pl-3 small">','</p>');?>
                          </div>
                        </div> 
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Nomor Telepon Orang Tua / Wali*</label>
                            <input type="text" class="form-control" name="nomorOrtu" value="<?= set_value('nomorOrtu');?>">
                            <?= form_error('nomorOrtu','<p class="text-danger pl-3 small">','</p>');?>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Pekerjaan Orang Tua / Wali*</label>
                            <input type="text" class="form-control" name="pekerjaanOrtu" value="<?= set_value('pekerjaanOrtu');?>">
                            <?= form_error('pekerjaanOrtu','<p class="text-danger pl-3 small">','</p>');?>
                          </div>
                        </div>
                      </iiv>


                      <hr>
                      <h4 class="text-center mb-4">Kontak Informasi</h4>
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Nomor Telepon*</label>
                            <input type="text" class="form-control" name="nomorTelepon" value="<?= set_value('nomorTelepon');?>">
                            <?= form_error('nomorTelepon','<p class="text-danger pl-3 small">','</p>');?>
                          </div>
                        </div>
                        <div class="col-sm-8">
                          <div class="form-group">
                            <label>Alamat Email*</label>
                            <input type="text" class="form-control" name="email" value="<?= set_value('email');?>">
                            <?= form_error('email','<p class="text-danger pl-3 small">','</p>');?>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Alamat Kos/Asrama/Rumah di Jogja*</label>
                            <input type="text" class="form-control" name="alamatJogja" value="<?= set_value('alamatJogja');?>">
                            <?= form_error('alamatJogja','<p class="text-danger pl-3 small">','</p>');?>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Jenis Tempat Tinggal*</label>
                            <select name="jenisTempatTinggal" class="form-control">
                              <option value="0">-Pilih Satu-</option>
                                <?php foreach ($tempatTinggal as $row) : ?>
                                  <option value="<?= $row['id'];?>"<?= set_select('jenisTempatTinggal', $row['id']);?>><?= $row['jenis_tempat'];?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('jenisTempatTinggal','<p class="text-danger pl-3 small">','</p>');?>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="form-group">
                            <label>Jam Malam?*</label>
                            <select name="jamMalam" class="form-control">
                              <option value="0" <?= set_select('jamMalam', '0');?>>Tidak</option>
                              <option value="1" <?= set_select('jamMalam', '1');?>>Ya</option>
                            </select>
                            <?= form_error('jamMalam','<p class="text-danger pl-3 small">','</p>');?>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Alamat Asal*</label>
                            <input type="text" class="form-control" name="alamatAsal" value="<?= set_value('alamatAsal');?>">
                            <?= form_error('alamatAsal','<p class="text-danger pl-3 small">','</p>');?>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label>ID Line*</label>
                            <input type="text" class="form-control" name="line" value="<?= set_value('line');?>">
                            <?= form_error('line','<p class="text-danger pl-3 small">','</p>');?>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label>ID Instagram*</label>
                            <input type="text" class="form-control" name="ig" value="<?= set_value('ig');?>">
                            <?= form_error('ig','<p class="text-danger pl-3 small">','</p>');?>
                          </div>
                        </div>
                      </div>
                      <hr>
                      <h4 class="text-center m-0">Informasi Tambahan</h4>
                      <div class="small text-center mb-4"><i>(dapat dikosongkan jika tidak ada.)</i></div>
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="card shadow-lg">
                            <img class="card-img-top" src="<?=base_url("assets/img/wallpaper.jpg");?>">
                            <div class="card-body p-3 ">
                              <h5 class="card-title text-center">Prestasi Musik</h5>
                              <div class="form-group">
                                <textarea class="form-control" name="prestasiMusik" rows="5" style="font-size: 12px;" placeholder="Mohon mengikuti format berikut: 
1. (Peringkat Prestasi) / (Nama Kegiatan)"><?= set_value('prestasiMusik');?></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="card shadow-lg">
                            <img class="card-img-top" src="<?=base_url("assets/img/wallpaper.jpg");?>">
                            <div class="card-body p-3 ">
                              <h5 class="card-title text-center">Prestasi Tari</h5>
                              <div class="form-group">
                                <textarea class="form-control" name="prestasiTari" rows="5" style="font-size: 12px;" placeholder="Mohon mengikuti format berikut: 
1. (Peringkat Prestasi) / (Nama Kegiatan)"><?= set_value('prestasiTari');?></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="card shadow-lg">
                            <img class="card-img-top" src="<?=base_url("assets/img/wallpaper.jpg");?>">
                            <div class="card-body p-3 ">
                              <h5 class="card-title text-center">Riwayat Organisasi</h5>
                              <div class="form-group">
                                <textarea class="form-control" name="riwayatOrganisasi" rows="5" style="font-size: 12px;" placeholder="Mohon mengikuti format berikut: 
1. (Pangkat) / (Nama Organisasi)"><?= set_value('riwayatOrganisasi');?></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8 mt-5 text-center">
                          <div class="form-group">
                          <h4 class="text-center mb-4">Pengalaman Marching Band / Musik</h4>
                            <table width="100%" id="tabel" class="table table-striped">
                              <tr>
                                <td align="right" width="55%">Pernah Ikut Marching Band sebelumnya?*</td>
                                <td width="45%">
                                    <select name="pernahMarching" class="pengalaman form-control">
                                      <option value='0' <?= set_select('pernahMarching', '0');?>>Tidak</option>
                                      <option value='1' <?= set_select('pernahMarching', '1');?>>Ya</option>
                                    </select>
                                </td>
                              </tr>
                              <tr>
                                <td align="right">Unit Sebelumnya</td>
                                <td><input type="text" name="unitSebelum" class="dis form-control" disabled value="<?= set_value('unitSebelum');?>"></td>
                              </tr>
                              <tr>
                                <td align="right">Section</td>
                                <td>
                                  <select name="section" class="dis form-control" disabled>
                                      <option value='0'>...</option>
                                        <?php foreach ($section as $row) : ?>
                                          <option value="<?= $row['id'];?>"<?= set_select('section', $row['id']);?>><?= $row['nama_section'];?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                              </tr>
                              <tr>
                                <td align="right">Kemampuan Alat Musik</td>
                                <td>
                                  <select name="musik" class="form-control">
                                      <option value='0'>-Tidak Ada-</option>
                                        <?php foreach ($musik as $row) : ?>
                                          <option value="<?= $row['id'];?>"<?= set_select('musik', $row['id']);?>><?= $row['nama_alat'];?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                              </tr>
                            </table>
                        </div>
                        <input type="submit" class="btn btn-primary text-center mt-3" value="Daftar Sekarang!">
                      </div>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    <div class="small">Ada pertanyaan?
                      <a href="register.html">Hubungi Kami!</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>