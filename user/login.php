<?php

session_start();
include '../connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "" || $password == "")
{
  header("location: form-login.php");
}
else
{
  $query = "SELECT * FROM t_user WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($connect, $query);

  $num = mysqli_num_rows($result);

if ($num == 1)
{
  $_SESSION['t_user'] = $username;
  header("location: ../guru/read.php");

}
else
{

  header("location: form-login.php");
}
}
?>
