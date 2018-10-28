<?php
include '../config.php';
$nama_lengkap = mysqli_real_escape_string($con,$_POST['namalengkap']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$namapengguna = mysqli_real_escape_string($con,$_POST['namapengguna']);
$sandi = mysqli_real_escape_string($con,$_POST['sandi']);
$notelp = mysqli_real_escape_string($con,$_POST['notelp']);

$query = "INSERT INTO tbl_login VALUES ('','$namapengguna','$sandi','$nama_lengkap','$notelp','$email')";
$ins = mysqli_query($con,$query);
if($ins)
{
  header("location:../daftar.php?daftar=1");
}
else
{
  var_dump($ins);
}