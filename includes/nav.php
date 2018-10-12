<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img style="width:50px;margin-top:-8px;" src="assets/media/mipmap/xhdp.png" class="img-responsive"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Beranda</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list"></span> Menu <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="input-data.php">Input Data Buku</a></li>
                <li><a href="list-buku.php">List Buku</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Akun <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <?php
                if(!empty($_SESSION['admin']))
                {
                  ?>
                <li><a href="proses/out.php">Keluar</a></li>                
                <?php
                }
                else
                {
                  ?>
                <li><a href="login.php">Masuk</a></li>
                <?php
                }
                ?>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>