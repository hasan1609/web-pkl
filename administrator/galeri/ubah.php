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
            <li><a href="index.php">Galeri</a></li>
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
  $edit=mysql_query("SELECT * from galeri where id='$_GET[id]'");
  $e=mysql_fetch_array($edit);
  ?>
      <div class="add-berita" id="add-berita">
        <div class="container">
          <h2 class="text-center"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Tambah Gambar</h2>
          <div class="row">
            <form class="" action="edit.php" method="post" enctype="multipart/form-data">
              <div class="col-md-10 col-lg-10 col-lg-offset-1">
                <input type="hidden" name="id" value="<?php echo $e['id'] ?>">
                <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"><p>Keterangan</p></span>
                <input class="form-control" aria-describedby="sizing-addon1" type="text" name="keterangan" value="<?php echo $e['keterangan'] ?>" required="">
                </div><br>
                <img src="gambar/<?php echo $e['gambar'] ?>" style="width: 150px; margin: 10px;" >
                <span id="sizing-addon1"><p>Pilih Gambar</p></span>
                  <input type="file" name="image" id="image"><br>
                  <img id="preview" src="#"/ style= "width: 150px; margin: 10px;" alt="Gambar Anda"><br>
                <button class="btn btn-lg" type="Submit" name="upload">Simpan</button>

              </div>
              </from>
          </div>
        </div>
      </div>


      <!-- javascrip -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="../asset/js/jquery-1.11.0.js"></script>
      <script src="../asset/js/bootstrap.min.js"></script>
      <script src="../asset/ckeditor/ckeditor.js"></script>
      <script>
        function readURL(input) {
          if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e) {
            $('#preview').attr('src', e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
          }
        }
        $("#image").change(function() {
          readURL(this);
        });
      </script>
  </body>

  </html>
