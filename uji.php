<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dishub | UPT PKB</title>

    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<!--/head-->

<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="top-number">
                            <p><i class="fa fa-phone-square"></i> +0123 456 70 90</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Beranda</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="visi.php">Visi & Misi</a></li>
                                <li><a href="struktur.php">Struktur Organisasi</a></li>
                                <li><a href="tugas.php">Tugas & Fungsi</a></li>
                            </ul>
                        </li>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pelayanan <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="alur.php">Alur</a></li>
                                <li class="active"><a href="uji.php">Uji Kendaraan</a></li>
                                <li><a href="rekom.php">Rekomendasi</a></li>
                                <li><a href="biaya.php">Biaya</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Publikasi <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="berita.php">Berita</a></li>
                                <li><a href="galeri.php">Galeri</a></li>
                            </ul>
                        </li>
                        <li><a href="kontak.php">Kontak</a></li>
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->

    </header>
    <!--/header-->


    <div class="page-title">
        <h1>Uji Kendaraan</h1>
    </div>
    
    <section class="uji" id="uji">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="col-lg-6 col-md-6">
                    <?php
                    include "administrator/konek/konek.php";
                    $sql = mysql_query("SELECT * FROM uji WHERE id='1'");
                    while ($row = mysql_fetch_assoc($sql)) {
                        ?>
                        <h3 class="text-center" style="font-size: 30px;"><?php echo $row["jenis"]; ?></h3>
                        <hr>
                        <p><?php echo $row["syarat"]; ?></p>
                    <?php } ?>
                    </div>
                    <div class="col-lg-6 col-md-6">
                    <?php
                        include "administrator/konek/konek.php";
                        $sql = mysql_query("SELECT * FROM uji WHERE id='2'");
                        while ($row = mysql_fetch_assoc($sql)) {
                        ?>
                        <h3 class="text-center" style="font-size: 30px;"><?php echo $row["jenis"]; ?></h3>
                        <hr>
                        <p><?php echo $row["syarat"]; ?></p>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    



    <footer id="footer" class="midnight-blue">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    &copy; 2017 <a target="_blank">UPTD PKB Dishub Sidoarjo</a>. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
