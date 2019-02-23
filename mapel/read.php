<?php

session_start();

if (!(isset($_SESSION['t_user'])))
{
  header("location: ../user/form-login.php");
}
include '../connect.php';

$query = "SELECT kode_mapel, mapel, alokasi_waktu, semester, nama_guru, kode_guru
          FROM t_mapel LEFT JOIN t_guru
          USING (kode_guru)
          ORDER BY kode_mapel";

$result = mysqli_query($connect, $query);

$num = mysqli_num_rows($result);

?>
<html>
  <link rel="stylesheet" href="../css/mapel/read.css">
  <title>Manajemen Sekolah</title>
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
<body>
  <div id="animate-bottom">
  <div class="header">
          <h2 class="h2">Database Sekolah</h2>
          <br>
          <br>
          <h2>Data Mata Pelajaran</h2>
          <br>
          <img src="../img/user1.png" class="user"></img>
          <br>
          <br>
          <div class="user-box">
          <h3><?php echo $_SESSION['t_user']; ?></h3>
          <br>
          </div>
          <a href="form-create.php" id="a">Tambah Mata Pelajaran</a>
          <br>
          <br>
          <a href="../guru/read.php" id="a">Lihat Data Guru</a>
          <br>
          <br>
          <a href="../user/logout.php" id="a">Logout</a>
        </div>
        <div class="search">
    <form action="search.php" method="get">
      <input type="text" name="cari" placeholder="Masukkan pencarian...">
      <select name="kategori" id="">
        <option value="nama_mapel">Mata Pelajaran</option>
        <option value="nama_guru">Nama Guru</option>
        <option value="alokasi_waktu">Alokasi Waktu</option>
        <option value="semester">Semester</option>
      </select>
      <input type="submit" name="" value="cari">
    </form>
    </div>
<table align="center">
      <tr>
        <th>No.</th>
        <th>Kode</th>
        <th>Mata Pelajaran</th>
        <th>Alokasi Waktu</th>
        <th>Semester</th>
        <th>Kode Guru</th>
        <th>Nama Guru</th>
        <th>Aksi</th>
        <th>Aksi</th>
      </tr>

<?php
if ($num > 0)
{
  $no = 1;
  while ($data = mysqli_fetch_assoc($result)) { ?>
    <tr>
      <td> <?php echo $no; ?> </td>
      <td> <?php echo $data['kode_mapel']; ?> </td>
      <td> <?php echo $data['mapel']; ?> </td>
      <td> <?php echo $data['alokasi_waktu']; ?> </td>
      <td> <?php echo $data['semester']; ?> </td>
      <td> <?php echo $data['kode_guru']; ?> </td>
      
      <td>
        <?php
        if ($data['nama_guru'] != NULL )
        { echo $data['nama_guru'];}
        else { echo "-"; }
        ?>
      </td>
      <td>
        <a class="a" href="form-update.php?kode_mapel=<?php echo $data['kode_mapel']; ?>">Edit</a>
      </td>
      <td>
        <a class="a" href="delete.php?kode_mapel=<?php echo $data['kode_mapel']; ?>" onclick="return confirm('Anda yakin ingin menghapus data?')"> Hapus </a>
      </td>
    </tr>

  <?php
  $no++;
  }
}
else
{
  echo "<tr> <td colspan='7'> Tidak ada data </td></tr>";
}

?>
</table>
</div>
</body>
</html>
