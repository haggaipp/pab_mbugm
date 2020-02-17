<div class="container-fluid">
	<h2><strong><?=$nama_lengkap;?></strong></h2>
  <div class="col-sm-5 mt-4">
    <table name="identitas" class="table table-hover table-striped table-sm table-info">
      <tr>
        <td class="text-right">Nama Lengkap</td>
        <td><?=$nama_lengkap;?></td>
      </tr>
      <tr>
        <td class="text-right">Nama Panggilan</td>
        <td><?=$nama_panggilan;?></td>
      </tr>
      <tr>
        <td class="text-right">Tempat Lahir</td>
        <td><?=$tempatlahir;?></td>
      </tr>
      <tr>
        <td class="text-right">Tanggal Lahir</td>
        <td><?=$tanggallahir."-".$bulanlahir."-".$tahunlahir;?></td>
      </tr>
      <tr>
        <td class="text-right">Jenis Kelamin</td>
        <td><?=$jeniskelamin;?></td>
      </tr>
      <tr>
        <td class="text-right">Agama</td>
        <td><?=$agama;?></td>
      </tr>
      <tr>
        <td class="text-right">Golongan Darah</td>
        <td><?=$golongandarah;?></td>
      </tr>
      <tr>
        <td class="text-right">Tinggi Badan (cm)</td>
        <td><?=$tinggibadan;?></td>
      </tr>
      <tr>
        <td class="text-right">Berat Badan</td>
        <td><?=$beratbadan;?></td>
      </tr>
      <tr>
        <td class="text-right">Hobi</td>
        <td><?=$hobi;?></td>
      </tr>
      <tr>
        <td class="text-right">Riwayat Penyakit</td>
        <td><?=$penyakit1."; ".$penyakit2."; ".$penyakit3;?></td>
      </tr>
      <tr>
        <td class="text-right">Jenjang Studi</td>
        <td><?=$jenjang_id;?></td>
      </tr>
      <tr>
        <td class="text-right">NIM</td>
        <td><?=$nim;?></td>
      </tr>
      <tr>
        <td class="text-right">Fakultas</td>
        <td><?=$fakultas_id;?></td>
      </tr>
      <tr>
        <td class="text-right">Program Studi</td>
        <td><?=$prodi_id;?></td>
      </tr>
      <tr>
        <td class="text-right">Asal Sekolah</td>
        <td><?=$asalsekolah;?></td>
      </tr>
      <tr>
        <td class="text-right">Nama Orangtua</td>
        <td><?=$namaorangtua;?></td>
      </tr>
      <tr>
        <td class="text-right">Pekerjaan Orang Tua</td>
        <td><?=$pekerjaanorangtua;?></td>
      </tr>
      <tr>
        <td class="text-right">Nomor Telepon</td>
        <td><?=$nomortelepon;?></td>
      </tr>
      <tr>
        <td class="text-right">Email</td>
        <td><?=$email;?></td>
      </tr>
      <tr>
        <td class="text-right">Alamat Jogja</td>
        <td><?=$alamatjogja;?></td>
      </tr>
      <tr>
        <td class="text-right">Alamat Asal</td>
        <td><?=$alamatasal;?></td>
      </tr>
      <tr>
        <td class="text-right">Jenis Tempat Tinggal</td>
        <td><?=$jenistempattinggal;?></td>
      </tr>
      <tr>
        <td class="text-right">Ada Jam Malam</td>
        <td><?php if($jammalam == 1){echo"Ada";}else{echo"Tidak Ada";}?></td>
      </tr>
      <tr>
        <td class="text-right">Line</td>
        <td><?=$line;?></td>
      </tr>
      <tr>
        <td class="text-right">Instagram</td>
        <td><?=$ig;?></td>
      </tr>
      <tr>
        <td class="text-right">Prestasi Musik</td>
        <td wordwrap><?=$prestasimusik;?></td>
      </tr>
      <tr>
        <td class="text-right">Prestasi Tari</td>
        <td><?=$prestasitari;?></td>
      </tr>
      <tr>
        <td class="text-right">Riwayat Organisasi</td>
        <td><?=$riwayatorganisasi;?></td>
      </tr>
      <tr>
        <td class="text-right">Pernah Marching</td>
        <td><?php if($jammalam == 1){echo"Ya";}else{echo"Tidak";}?></td>
      </tr>
      <tr>
        <td class="text-right">Unit Sebelum</td>
        <td><?=$unitsebelum;?></td>
      </tr>
      <tr>
        <td class="text-right">Section</td>
        <td><?=$section;?></td>
      </tr>
      <tr>
        <td class="text-right">Kemampuan Alat Musik</td>
        <td><?=$alatmusik;?></td>
      </tr>
    </table>
  </div>
</div>