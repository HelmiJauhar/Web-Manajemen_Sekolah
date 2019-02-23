<?php

session_start();

if (!(isset($_SESSION['t_user'])))
{
  header("location: ../user/form-login.php");
}

include '../connect.php';

$kode_mapel = $_GET['kode_mapel'];

$query = "SELECT kode_mapel, mapel, alokasi_waktu, semester, t_mapel.kode_guru, nama_guru
          FROM t_mapel LEFT JOIN t_guru USING (kode_guru)
          WHERE kode_mapel = '$kode_mapel'";

$result = mysqli_query($connect, $query);

$data_mapel = mysqli_fetch_assoc($result);

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
</head>
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
<body>
<div class="form-box">
      <h2 class="h2">Ubah Data Mata Pelajaran</h2>
      <form class="" action="update.php" method="post">
            <p>Kode</p>
            <input type="text" name="kode_mapel" placeholder="Inputkan Kode" id="kode_mapel" value="<?php echo $data_mapel['kode_mapel']; ?>">
            <p>Mata Pelajaran</p>
            <input type="text" name="mapel" placeholder="Masukkan Jenis Mata Pelajaran" id="mapel" value="<?php echo $data_mapel['mapel']; ?>">
            <p>Alokasi Waktu</p>
            <input type="number" name="alokasi_waktu" placeholder="Inputkan Jam" id="alokasi_waktu" value="<?php echo $data_mapel['alokasi_waktu']; ?>">
            <p>Semester</p>
            <input type="number" name="semester" placeholder="Masukkan Semester" id="semester" value="<?php echo $data_mapel['semester']; ?>">
            <p>Dosen Pengajar</p>
            <br>
              <select name="kode_guru" id="nama_guru">
              <option value="NULL">Tidak Ada Pengajar</option>
              <?php
              $query2 = "SELECT kode_guru, nama_guru FROM t_guru";
              $result2 = mysqli_query($connect, $query2);
              while ($data = mysqli_fetch_assoc($result2)) { ?>
              <option value="<?php echo $data['kode_guru']; ?>"
                <?php if ($data_mapel['kode_guru'] == $data['kode_guru']) {echo "selected";} ?>>
                <?php echo $data['nama_guru']; ?>
              </option>
              <?php }
              ?>
            </select>
            <br>
            <br>
            <input type="submit" name="btnSimpan" value="Simpan" onclick="return validasiMatkul()">
      </form>
    </div>
    </div>
</body>
</html>