 <?php
 include "../konek/konek.php"; 
 ?>
  <!doctype html>
  <html>

  <head>
    <title>DISHUB-UPT PKB</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="../asset/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
  </head>

  <body>
    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="../visi/index.php">Visi</a></li>
            <li><a href="../tugas/index.php">Tugas</a></li>
            <li><a href="../uji/index.php">Uji Kendaraan</a></li>
            <li><a href="../rekomendasi/index.php">Rekomendasi</a></li>
            <li><a href="../berita/index.php">Berita</a></li>
            <li><a href="../galeri/index.php">Galeri</a></li>
            <li><a href="../kontak/index.php">Kontak</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../logout.php">
            <i class="fa fa-sign-out" aria-hidden="true">&ensp;</i>Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>


      <!-- session login -->
      <?php
      include "../konek/konek.php";
      session_start();
      if($_SESSION['status'] !="login"){
        header('location:../index.php');
      }
      echo  "";
      $query_mysql = mysql_query("SELECT * FROM tugas");
      while($data = mysql_fetch_array($query_mysql)){
      ?>

      <div class="tugas" id="tugas">
        <div class="container">
          <div class="row">
            <form class="" action="proses.php" method="post" enctype="multipart/form-data">
              <div class="col-md-10 col-lg-10 col-lg-offset-1">
                <div class="input-group input-group-lg">
                  <input type="hidden" name="id" value="<?php echo $data['id_tugas'] ?>">
                  <h3>&nbsp;Tugas & Fungsi</h3>
                  <textarea name="tugas" cols="130" rows="15"><?php echo $data['tugas'] ?></textarea>
                  <h3>&nbsp;Dasar Hukum</h3>
                  <textarea name="fungsi" cols="130" rows="5"><?php echo $data['fungsi'] ?></textarea><br>
                  <button class="btn btn-lg" type="Submit" name="upload">Simpan</button>
              </div>
              </from>
            <?php } ?>
          </div>
        </div>
      </div>
      <!-- javascrip -->
      <script src="../asset/js/jquery-1.11.0.js"></script>
      <script src="../asset/js/bootstrap.min.js"></script>
      <script src="../asset/ckeditor/ckeditor.js"></script>
  </body>

  </html>
