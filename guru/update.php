<?php
session_start();

if (!(isset($_SESSION['t_user'])))
{
  header("location: ../user/form-login.php");
}
?>
<?php

include '../connect.php';

$kode_guru = $_POST['kode_guru'];
$nama_guru = $_POST['nama_guru'];
$jumlah_jam = $_POST['jumlah_jam'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$email = $_POST['email'];

$query = "UPDATE t_guru SET nama_guru = '$nama_guru',
          jumlah_jam = '$jumlah_jam',
          alamat = '$alamat',
          telp = '$telp',
          email = '$email'
          WHERE kode_guru = '$kode_guru'";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);
if ($num > 0) 
{
    header("location: read.php");
}
else 
{
    echo "<script>alert('Gagal Update Data');window.location='read.php'</script>";
}

?>
