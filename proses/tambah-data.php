<?php
include '../config.php';
$kode = $_POST['kode_buku'];
$pengarang = $_POST['pengarang'];
$judul_buku = $_POST['judul_buku'];
$ringkasan = $_POST['ringkasan'];
$nilai_perolehan = $_POST['nilai_perolehan'];
$jumlah_barang = $_POST['jumlah_barang'];
$ruangan = $_POST['ruangan'];
$posisi_barang = $_POST['posisi_barang'];
$kondisi = $_POST['kondisi'];

$query = "INSERT INTO `dbbuku`(`kode`, `pengarang`, `judul`, `ringkasan`, `nilai_perolehan`, `jumlah_barang`, `ruangan`, `posisi_barang`, `kondisi`) VALUES ('$kode','$pengarang', '$judul_buku','$ringkasan',$nilai_perolehan,$jumlah_barang,'$ruangan','$posisi_barang','$kondisi')";

$q=mysqli_query($con,$query);

echo $query;

if($q)
{
  header("Location: ../input-data.php?success=1");
} else {
  header("Location: ../input-data.php?success=2");
}