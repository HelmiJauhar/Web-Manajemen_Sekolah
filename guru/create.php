<?php
session_start();

if (!(isset($_SESSION['t_user'])))
{
  header("location: ../user/form-login.php");
}
?>
<?php

include '../connect.php';

$nama_guru = $_POST['nama_guru'];
$jumlah_jam = $_POST['jumlah_jam'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$email = $_POST['email'];

$query = "INSERT INTO t_guru (nama_guru, jumlah_jam, alamat, telp, email)
          VALUES ('$nama_guru', '$jumlah_jam', '$alamat', 
          '$telp', '$email')";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);
if ($num > 0) 
{
    header("location: read.php");
}
else 
{
    echo "<script>alert('Gagal Membuat Data');window.location='read.php'</script>";
}

?>

