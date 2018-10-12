<?php
include '../config.php';
$kode = $_POST['kode_buku'];
$pengarang = $_POST['pengarang'];
$judul_buku = $_POST['judul_buku'];
$ringkasan = $_POST['ringkasan'];
$nilai_satuan = $_POST['nilai_satuan'];
$nilai_barang = $_POST['nilai_barang'];
$ruangan = $_POST['ruangan'];
$posisi_barang = $_POST['posisi_barang'];
$kondisi = $_POST['kondisi'];

$q=mysqli_query($con,"INSERT INTO dbbuku VALUES('','$kode', '$pengarang', '$judul_buku', '$ringkasan', '$nilai_satua', '$nilai_barang', '$ruangan', '$posisi_barang', '$kondisi' )");
if($q)
{
  echo "1";
}
 else {
  echo "0";
}
