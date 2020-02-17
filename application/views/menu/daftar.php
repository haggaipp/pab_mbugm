<div class="container-fluid">
	<h2><strong>Daftar Calon Anggota</strong></h2>
  <div class="col-sm-10">
    <table name="identitas" class="table table-hover">
      <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Nama Panggilan</th>
        <th>NIM</th>
        <th align="">Action</th>
      </tr>
      <?php $i=1;?> 
      <?php foreach ($calang as $row) : ?>
        <tr>
          <td align="center"><?= $i; ?></td>
          <td><?= $row['nama_lengkap']; ?></td>
          <td><?= $row['nama_panggilan']; ?></td>
          <td><?= $row['nim']; ?></td>
          <td align="center"><a href="view?key=<?= $row['key_id'];?>">View</a></td>
        </tr>
        <?php $i++;?>
      <?php endforeach;?>
    </table>
  </div>
</div>