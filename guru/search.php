<?php

session_start();

if (!(isset($_SESSION['t_user'])))
{
  header("location: ../user/form-login.php");
}

include '../connect.php';
$cari = $_GET['cari'];
$kategori = $_GET['kategori'];
$query = "SELECT * FROM t_guru WHERE $kategori LIKE '%$cari%'";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Manajemen Sekolah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/guru/read.css">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
</head>
<body>
    <div id="animate-bottom">
    <div class="header">
          <h2 class="h2">Database Sekolah</h2>
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
        <div class="search">
          <form action="search.php" method="get" >
            <input type="text" name="cari" placeholder="Masukkan pencarian...">
            <select name="kategori" id="">
            <option value="nama_guru">Nama Guru</option>
            <option value="kode_guru">Kode Guru</option>
            </select>
            <input type="submit" name="" value="cari">
          </form>
          </div>
        <table align="center">
        <tr>
        <th>No.</th>
        <th>Kode Guru</th>
        <th>Nama Guru</th>
        <th>Jumlah Jam</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>Email</th>
        <th>Aksi</th>
        <th>Aksi</th>
    </tr>
    <?php
    if ($num > 0) {
        $no = 1;
        while ($data = mysqli_fetch_assoc($result)) 
        {
            echo "<tr>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . $data['kode_guru'] . "</td>";
            echo "<td>" . $data['nama_guru'] . "</td>";
            echo "<td>" . $data['jumlah_jam'] . "</td>";
            echo "<td>" . $data['alamat'] . "</td>";
            echo "<td>" . $data['telp'] . "</td>";
            echo "<td>" . $data['email'] . "</td>";
            echo "<td><a class='la' href='form-update.php?kode_guru=" . $data['kode_guru'] . "'>Edit</a>";
            echo "<td><a class='la' href='delete.php?kode_guru=" . $data['kode_guru'] . "' onclick='return confirm(\"Apakah Anda Yakin Ingin Menghapus Data?\")'>Hapus</a></td>";
            echo "</tr>";
            $no++;
        }
   
    }
    else 
    {
        echo "<td colspan='3'>Tidak Ada Data</td>";    
    }
    ?>
    </table>
    </div>
</body>
</html>