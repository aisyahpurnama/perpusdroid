<!DOCTYPE Html>
<html>
  <head>
    <title>Pendaftaran Admin</title>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css"/>
    <script src="assets/vendor/jquery/jquery.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  </head>
  
  <style>
    body
    {
      background-image: url("assets/media/images/12.jpg");
    }
    
    input
    {
      margin-bottom:10px;
      float:left;
      width:100%;
      border-radius: 1px;
      padding:13px;
      border:none;
      box-sizing:border-box;
    }
    
    button
    {
      float:left;
      width:100%;
      box-sizing: border-box;
      padding:13px;
      margin-top:10px;
      background-color:orange;
      color:#fff;
      border:none;
    }
    
    h3{
      color:#fff;
      font-size:40px;
    }
    
    h4
    {
      margin:0;
      padding:12px;
      color:#fff;
      background-color:rgb(0,150,255);
    }
  </style>
  <body>
    <div class="container">
      <div class="col-md-4 col-md-offset-1" style="margin-top:20px;">
        <h3>Daftar Admin</h3>
        <div class="login">
          <form action="proses/daftar_admin.php" method="post">
            <div class="form-group">
              <input type="text" required="required" name="namalengkap" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
              <input type="email" required="required" name="email" placeholder="E-Mail">
            </div>
            <div class="form-group">
              <input type="text" required="required" name="namapengguna" placeholder="Nama Pengguna">
            </div>
            <div class="form-group">
              <input type="password" required="required" name="sandi" placeholder="Kata Sandi">
            </div>
            <div class="form-group">
              <input type="number" required="required" name="notelp" placeholder="Nomor Telepon">
            </div>
            <div class="form-group">
              <button type="submit">Daftar</button>
            </div>
          </form>
        </div>
      </div>
      
      <div class="col-md-5" style="margin-top:100px;">
        <?php
        if(!empty($_GET['daftar']))
        {
          if($_GET['daftar'] == 1)
          {
            ?>
        <h4>Pendaftaran Berhasil</h4>
        <?php
          }
          else
          {
            ?>
        <h4 style="background-color:red">Pendaftaran Gagal!</h4>
        <?php
          }
        }
        ?>
        
        
      </div>
    </div>
  </body>