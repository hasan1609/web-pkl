<?php
 include "../konek/konek.php";
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Administrator | UPT PKB</title>

    <!-- Bootstrap -->
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="../asset/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
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
            <li><a href="index.php">Berita</a></li>
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
   $data = mysql_query ("SELECT * FROM berita WHERE id_berita='$_GET[id]'");
   $row=mysql_fetch_array($data);
   ?>
  <div class="post" id="post">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1">
          <div class="pack">
            <h1><?php echo $row["judul"]; ?></h1>
            <img class= "img-paraloid" src="gambar/<?php echo $row["gambar"]?>" style= "width:200px; float: left; margin-right: 10px;" alt="">
            <i>Posted on <?php echo date("d F Y", strtotime ($row["tanggal"])); ?></i>
            <div class="isi_berita">
            <p style="text-align: justify;"><?php echo $row["isi"];?></p>
            </div>
          </div>
          <a href="index.php" class="btn btn-danger" ><i class="fa fa-trash-alt">BACK</i></a>
        </div>
      </div>
    </div>
  </div>


</body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../asset/js/bootstrap.min.js"></script>
  </body>
</html>