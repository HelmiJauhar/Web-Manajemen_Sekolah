<?php
session_start();

if (!(isset($_SESSION['t_user'])))
{
  header("location: ../user/form-login.php");
}
?>
<?php 

include '../connect.php';

$kode_guru = $_GET['kode_guru'];

$query = "DELETE FROM t_guru WHERE kode_guru = $kode_guru";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);
if ($num > 0) 
{
    header("location: read.php");
}
else 
{
    echo "<script>alert('Gagal Menghapus Data');window.location='read.php'</script>";
}


?>