<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Manajemen Sekolah</title>
    <link rel="stylesheet" href="../css/user/form-login.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <script src="../js/validasiLogin.js"></script>
    <script src="../js/ShowBox.js"></script>
  </head>
  <body>
    <div id="animate-bottom">
    <div class="loginbox">
      <form class="" action="login.php" method="post">
        <h1>Database Sekolah</h1>
        <p>Username :</p>
        <input type="text" name="username" id="username" class="input" placeholder="Masukkan Username">
        <br>
        <br>
        <p>Password :</p>
        <input type="password" name="password" id="password" class="input" placeholder="Masukkan Password">
        <br>
        <div class="password-box">
        <label for="show password">Show Password <input type="checkbox" onclick="showpassword()"></label>
        </div>
        <br>
        <input type="submit" name="" value="Login" onclick="return validasiLogin()">
        <br>
        <br>
        <p>Belum Punya Akun Admin?<a class="a" href="form-register.php"><br>Daftar Disini</a></p>
      </form>
    </div>
    </div>
  </body>
</html>
