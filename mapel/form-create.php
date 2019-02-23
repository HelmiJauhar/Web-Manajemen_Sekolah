<?php

session_start();

if (!(isset($_SESSION['t_user'])))
{
  header("location: ../user/form-login.php");
}

include '../connect.php';

$query = "SELECT kode_guru, nama_guru FROM t_guru";
$result = mysqli_query($connect, $query);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Manajemen Sekolah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/mapel/form.css">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <script src="../js/ValidasiFormMapel.js"></script>
</head>
<body>
      <div id="animate-bottom">
        <div class="header">
          <h2 id="h2">Database Sekolah</h2>
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
          <a href="form-create.php" id="a">Tambah Data Mata Pelajaran </a>
          <br>
          <br>
          <a href="../guru/read.php" id="a">Lihat Data Guru</a>
          <br>
          <br>
          <a href="read.php" id="a">Kembali</a>
          <br>
          <br>
          <a href="../user/logout.php" id="a">Logout</a>
        </div>
  <div class="form-box">
      <h2 class="h2">New Mapel!</h2>
    <form class="" action="create.php" method="post">
      <p>Kode Mapel</p>
      <input type="text" name="kode_mapel" id="kode_mapel" placeholder="Inputkan kode">
      <p>Mata Pelajaran</p>
      <input type="text" name="mapel" id="mapel" placeholder="Masukkan Jenis Mata Pelajaran">
      <p>Alokasi Waktu</p>
      <input type="number" name="alokasi_waktu" id="alokasi_waktu" placeholder="Inputkan Jam">
      <p>Semester</p>
      <input type="number" name="semester" id="semester" placeholder="Inputkan Semester">
      <p>Guru Pengajar</p>
      <br>
      <select name="kode_guru" id="nama_guru">
        <option value="NULL">Tidak Ada Pengajar</option>
        <?php
        while ($data = mysqli_fetch_assoc($result)) {
          ?>
        <option value="<?php echo $data['kode_guru']; ?>">
            <?php echo $data['nama_guru']; ?>
        </option>
        <?php
        }
        ?>
      </select>
      <br>
      <br>
      <input type="submit" name="btnSimpan" value="Simpan" onclick="return validasiForm()">
    </form>
  </div>
  </div>
</body>
</html>