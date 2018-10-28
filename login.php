<!DOCTYPE Html>
<html>
  <head>
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
      padding:15px;
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
  </style>
  <body>
    <div class="container">
      <div class="col-md-4 col-md-offset-4" style="margin-top:100px;">
        <h3>Masuk</h3>
        <div class="login">
          <form action="proses/login.php" method="post">
            <input type="text" placeholder="username" name="user"><br>
            <input type="password" placeholder="password" name="password"><br>
            <button type="submit">Masuk</button>
          </form>
        </div>
      </div>
    </div>
  </body>