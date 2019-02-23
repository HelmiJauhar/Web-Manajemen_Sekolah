<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Manajemen Sekolah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/user/form-login.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <script src="../js/ValidasiRegister.js"></script>
    <script src="../js/ShowBox.js"></script>
</head>
<body>
  <div id="animate-bottom">
  <div class="registerbox">
      <form class="" action="register.php" method="post">
        <h1>Register</h1>
        <p>Username</p>
        <input type="text" name="username" id="username" value="" class="input" placeholder="Masukkan Username">
        <br>
        <br>
        <p>Password</p>
        <input type="password" name="password" id="password" value="" class="input" placeholder="Masukkan Password">
        <br>
        <div class="password-box">
        <label for="show password">Show Password <input type="checkbox" onclick="showpassword()"></label>
        </div>
        <br>
        <input type="submit" value="Simpan" onclick="return validasiRegister()">
        <br>
        <br>
        <a href="form-login.php" id="a">Kembali Ke Form Login</a>
      </form>
    </div>
    </div>
</body>
</html>