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
            <li><a href="../galeri/index.php">galeri</a></li>
            <li><a href="index.php">Kontak</a></li>
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
      ?>

      <div class="kontak" id="kontak">
        <div class="container">
          <h2 class="text-center">KRITIK & SARAN</h2>
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="data">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Kritik</th>
                          <th>Saran</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <?php
              $data = mysql_query ("SELECT * FROM kontak ORDER BY id ASC");
              while ($row=mysql_fetch_array($data)){
                ?>
                <tr>
              <td><?php echo $row["id"]; ?></td>
              <td><?php echo $row["nama"]; ?></td>
              <td><?php echo $row["email"]; ?></td>
              <td><?php echo $row["kritik"]; ?></td>
              <td><?php echo $row["saran"]; ?></td>
              <td>
                <a class="balas" href="balas.php?id=<?php echo $row["id"]; ?>"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
              </td>
              <?php } ?>
              </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="../asset/js/jquery-1.11.0.js"></script>
      <script src="../asset/js/bootstrap.min.js"></script>
      <script src="../asset/ckeditor/ckeditor.js"></script>
  </body>

  </html>
