<?php
include 'config.php';

$id = $_GET['id'];

$query = "SELECT * FROM dbbuku WHERE kode = '$id'";
$result = mysqli_query($con, $query);

$encode = array();

while($row = mysqli_fetch_assoc($result)) {
   $encode['kode'] = $row['kode'];
   $encode['pengarang'] = $row['pengarang'];
   $encode['judul'] = $row['judul'];
   $encode['ringkasan'] = $row['ringkasan'];
   $encode['nilai_satuan'] = $row['nilai_satuan'];
   $encode['nilai_barang'] = $row['nilai_barang'];
   $encode['ruangan'] = $row['ruangan'];
   $encode['posisi_barang'] = $row['posisi_barang'];
   $encode['kondisi'] = $row['kondisi'];

}

echo json_encode($encode);

?>