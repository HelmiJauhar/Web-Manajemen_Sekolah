<?php
session_start();

if (!(isset($_SESSION['t_user'])))
{
  header("location: ../user/form-login.php");
}

include '../connect.php';

$kode_guru = $_GET['kode_guru'];

$query = "SELECT * FROM t_guru WHERE kode_guru = $kode_guru";

$result = mysqli_query($connect, $query);

$row = mysqli_fetch_assoc($result);

?>
<html>
  <title>Manajemen Sekolah</title>
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
  <link rel="stylesheet" href="../css/guru/form.css">
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
      <form action="update.php" method="post">
            <h2 class="h2">Ubah Data Guru</h2>
            <p>Nama Guru</p>
            <input value="<?php echo $row['nama_guru']; ?>" type="text" name="nama_guru" id="nama" placeholder="Masukkan Nama">
            <p>Jumlah Jam</p>
            <input value="<?php echo $row['jumlah_jam']; ?>" type="number" name="jumlah_jam" id="jumlah_jam" placeholder="Masukkan Jam">
            <p>Alamat</p>
            <input value="<?php echo $row['alamat']; ?>" type="text" name="alamat" id="alamat" placeholder="Masukkan alamat">
            <p>No. Telepon</p>
            <input value="<?php echo $row['telp']; ?>" type="number" name="telp" id="no_telp" placeholder="08**********">
            <p>Email</p>
            <input value="<?php echo $row['email']; ?>" type="email" name="email" id="email" placeholder="Masukkan Email">
            <input value="<?php echo $row['kode_guru']; ?>" type="hidden" name="kode_guru">
            <br>
            <input type="submit" name="btnSimpan" value="Simpan">
      </form>
    </div>
    </div>
    </div>
  </body>
</html>
