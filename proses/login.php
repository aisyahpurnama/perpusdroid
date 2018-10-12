<?php
session_start();

include '../config.php';
$user = $_POST['user'];
$pass = $_POST['password'];

$q = "SELECT * FROM tbl_login WHERE username = '$user' AND password = '$pass'";
$select = mysqli_query($con,$q);
$row = mysqli_num_rows($select);

if($row)
{
  $_SESSION['admin'] = $user;
  header("location:../index.php?psn=login_berhasil");
}
else
{
  header("location:../login.php?psn=Login_gagal!");
}
