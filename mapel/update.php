<?php
session_start();

if (!(isset($_SESSION['t_user'])))
{
  header("location: ../user/form-login.php");
}
?>
<?php
    include '../connect.php';

    $kode_mapel = $_POST['kode_mapel'];
    $kode_guru = $_POST['kode_guru'];
    $mapel = $_POST['mapel'];
    $alokasi_waktu = $_POST['alokasi_waktu'];
    $semester = $_POST['semester'];

    $query = "UPDATE t_mapel SET mapel = '$mapel',
                                    alokasi_waktu = $alokasi_waktu,
                                    semester = $semester,
                                    kode_guru = $kode_guru
              WHERE kode_mapel = '$kode_mapel'";

    $result = mysqli_query($connect, $query);

    $num = mysqli_affected_rows($connect);

    if ($num > 0)
    {
      header("location: read.php");
    }
    else
    {
      echo "<script>alert('Gagal Mengedit Data');window.location='read.php'</script>";
    }

    ?>