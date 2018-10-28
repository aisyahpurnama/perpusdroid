<?php
session_start();
include 'config.php';
?>
<!DOCTYPE Html>
<html lang="id">
  <head>
    <title>Aisyah</title>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/vendor/fontawesome/css/fontawesome.min.css"/>
    <link rel="stylesheet" href="assets/native/css/style.css"/>

    <script src="assets/vendor/jquery/jquery.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/fontawesome/js/fontawesome.min.js"></script>
  </head>
  
  <body style="padding-top:8em">
    <?php include 'includes/nav.php' ?> 
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1></h1>
          
          <div class="col-md-6">
            <table class="table-list table table-responsive table-hover">
              <tr>
                <th>Kode Buku</th>
                <th>Pengarang</th>
                <th>Judul</th>
                <th>Ringkasan</th>
                 <th>Nilai Perolehan</th>
                <th>Jumlah Barang</th>
                <th>Ruangan</th>
                <th>Posisi Barang</th>
                <th>Kondisi</th>
              </tr>
              
              <?php 
              $query = "SELECT * FROM dbbuku";
              $result = mysqli_query($con, $query);
              while($row = mysqli_fetch_array($result)): ?>
              
              <tr>
                <td><?= $row['kode'] ?></td>
                  
                <td><?= $row['pengarang'] ?></td>
                <td><?= $row['judul'] ?></td>
                <td><?= $row['ringkasan'] ?></td>
                <td><?= $row['nilai_perolehan'] ?></td>
                <td><?= $row['jumlah_barang'] ?></td>
                <td><?= $row['ruangan'] ?></td>
                <td><?= $row['posisi_barang'] ?></td>
                <td><?= $row['kondisi'] ?></td>
              </tr>
                
              <?php endwhile; ?>  
              ?>
              
            </table>
           
          </div>
        </div>
      </div>
    </div>
  </body>
</html>