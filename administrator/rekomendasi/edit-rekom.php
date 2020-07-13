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
            <li><a href="index.php">Rekomendasi</a></li>
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
  $id = $_GET['id'];
  $query_mysql = mysql_query("SELECT * FROM rekom WHERE id='$id'");
  while($data = mysql_fetch_array($query_mysql)){
  ?>
      <div class="add-uji" id="add-uji">
        <div class="container">
          <h2 class="text-center"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Edit Berita</h2>
          <div class="row">
            <form class="" action="update-rekom.php" method="POST">
              <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <div class="input-group input-group-lg">
                  <span class="input-group-addon" id="sizing-addon1"><p>Jenis</p></span>
                  <input class="form-control" aria-describedby="sizing-addon1" type="text" name="jenis" value="<?php echo $data['jenis'] ?>" required="">
                </div><br>
                <div class="input-group input-group-lg">
                  <span class="input-group-addon" id="sizing-addon1"><p>Syarat</p></span>
                  <textarea class="ckeditor" name="syarat"><?php echo $data['syarat'] ?></textarea>
                </div><br>
                <button class="btn btn-lg" type="submit" name="kirim">Simpan</button>
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
