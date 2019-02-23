<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Manajemen Sekolah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/user/form-login.css">
</head>
<body>
<div class="loginbox1">
<h2 class="h2"><?php

include '../connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO t_user (username, password)
          VALUES ('$username','$password')";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if ($num > 0) {
    echo "Berhasil Tambah User <br>";
}
else {
    echo "Gagal Tambah User <br>";
}
echo "<a class='la' href='form-login.php'>Kembali ke form login</a> "
?></h2>
</div>
</body>
</html>
