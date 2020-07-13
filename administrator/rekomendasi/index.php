<?php
 include "../konek/konek.php";
 ?>
  <!doctype html>
  <html>

  <head>
    <title>DISHUB-UPT PKB</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../asset/css/dataTables.bootstrap.css" />
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
  ?>

      <!-- Data Berita -->
      <div class="uji" id="uji">
        <div class="container">
          <h2 class="text-center">DATA REKOMENDASI</h2>
          <a href="add-rekom.php"><button class="btn btn-lg " type="submit" name="kirim"><i class="fa fa-plus" aria-hidden="true"></i>&ensp; Data Rekomendasi</button></a>
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="data">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Jenis</th>
                          <th>Syarat</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <?php
              $data = mysql_query ("SELECT * FROM rekom ORDER BY id ASC");
              while ($row=mysql_fetch_array($data)){
                ?>
                <tr>
              <td><?php echo $row["id"]; ?></td>
              <td><?php echo $row["jenis"]; ?></td>
              <td><?php echo $row["syarat"]; ?></td>
              <td>
                <a class="edit" href="edit-rekom.php?id=<?php echo $row["id"]; ?>"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                <a class="hapus" href="hapus-rekom.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Yakin ingin menghapus ?')"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a>
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



      <!-- javascrip -->
      <script src="../asset/js/jquery-1.11.0.js"></script>
      <script src="../asset/js/bootstrap.min.js"></script>
      <script src="../asset/datatables/jquery.dataTables.js"></script>
      <script src="../asset/datatables/dataTables.bootstrap.js"></script>
      <script>
        $(document).ready(function() {
          var t = $('#data').DataTable();
        });
      </script>
      
  </body>

  </html>
