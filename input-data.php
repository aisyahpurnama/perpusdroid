<?php
session_start();
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
    
    <style>
      h4
    {
      margin:0;
      padding:12px;
      color:#fff;
      background-color:rgb(0,150,255);
    }
    </style>
  </head>
  
  <body style="padding-top:8em">
    <?php include 'includes/nav.php' ?> 
    <div class="container">
      
      <?php
      if(!empty($_GET['success'])) {
        if($_GET['success'] == 1) {
          echo '<h4>Buku berhasil ditambahkan</h4>';
        }else if($_GET['success'] == 2){
          echo '<h4 style="background: red">Buku gagal ditambahkan</h4>';
        }
      }
      ?>
      
      <div class="row">
        <div class="col-md-12">
          <h1>Input Data Buku</h1>
          
          <div class="col-md-4">
            <form class="form" method="post" action="proses/tambah-data.php">
            <div class="form-group">
              <label>Kode Buku</label>
              <input type="text" required="required" name="kode_buku">
            </div>

            <div class="form-group">
              <label>Pengarang</label>
              <input type="text" required="required" name="pengarang">
            </div>
            <div class="form-group">
              <label>Judul Buku</label>
              <input type="text" required="required" name="judul_buku">
            </div>
             <div class="form-group">
              <label>Ringkasan</label>
              <input type="text" required="required" name="ringkasan">
            </div>
               <div class="form-group">
              <label>nilai perolehan</label>
              <input type="number" required="required" name="nilai_perolehan">
            </div>

            <div class="form-group">
              <label>jumlah barang</label>
              <input type="number" required="required" name="jumlah_barang">
            </div>
            <div class="form-group">
              <label>ruangan</label>
              <input type="text" required="required" name="ruangan">
            </div>
             <div class="form-group">
              <label>posisi barang</label>
              <input type="text" required="required" name="posisi_barang">
            </div>
              <div class="form-group">
              <label>kondisi</label>
              <input type="text" required="required" name="kondisi">
            </div>
            <div class="form-group">
             
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script>
//      $(document).ready(function(){
//        $(".form").submit(function(ev){
//           ev.preventDefault();
//    
//           $.ajax({
//            url:"proses/tambah-data.php",
//            type:"post",
//            data:$(this).serialize(),
//            success:function(res)
//            {
//              if(res == 0)
//              {
//                alert("Data gagal dikirim");
//              }else{
//                alert("Berhasil dikirim.");
//              }
//            }
//          });
//        });
//      });
    </script>
        
  </body>
</html>