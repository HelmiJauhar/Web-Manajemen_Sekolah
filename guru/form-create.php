<?php
session_start();

if (!(isset($_SESSION['t_user'])))
{
  header("location: ../user/form-login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Manajemen Sekolah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/guru/form.css">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <script src="../js/ValidasiFormGuru.js"></script>
</head>
<body>
    <div id="animate-bottom">
    <div class="header">
          <h2 id="h2">Database Sekolah</h2>
          <br>
          <br>
          <h2>Data Guru</h2>
          <br>
          <br>
          <img src="../img/user1.png" class="user"></img>
          <br>
          <br>
          <div class="user-box">
          <h3><?php echo $_SESSION['t_user']; ?></h3>
          <br>
          </div>
          <a href="form-create.php" id="a">Tambah Data Guru</a>
          <br>
          <br>
          <a href="../mapel/read.php" id="a">Lihat Data Mata Pelajaran</a>
          <br>
          <br>
          <a href="read.php" id="a">Kembali</a>
          <br>
          <br>
          <a href="../user/logout.php" id="a">Logout</a>
        </div>
    <div class="form-box">
    <form action="create.php" method="post">
    <h2 class="h2">New Teacher!</h2>
    <p>Nama Guru</p>
    <input type="text" name="nama_guru" id="nama_guru" placeholder="Masukkan Nama Guru">
    <p>Alokasi Waktu</p>
    <input type="number" name="jumlah_jam" id="jumlah_jam" placeholder="Masukkan Alokasi Waktu">
    <p>Alamat</p>
    <input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat">
    <p>No. Telepon</p>
    <input type="number" name="telp" id="telp" placeholder="Masukkan Nomor Telepon">
    <p>Email</p>
    <input type="email" name="email" id="email" placeholder="Masukkan Email">
    <br>
    <input type="submit" name="btnSimpan" value="Simpan" onclick="return validasiForm()">
    </form>
    </div>
    </div>
</body>
</html>