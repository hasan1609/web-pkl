<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dishub | UPT PKB </title>

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
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pelayanan <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="alur.php">Alur</a></li>
                                <li><a href="uji.php">Uji Kendaraan</a></li>
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
                        <li class="actiive"><a href="kontak.php">Kontak</a></li>
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->
    </header>
    <!--/header-->
    
    <div class="page-title">
        <h1>Kontak</h1>
    </div>

    <section id="contact-page">
        <div class="container">
            <div class="large-title text-center">        
                <h1>Hubungi Kami</h1>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form class="contact-form" name="contact-form" method="post" action="cek-kontak.php">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="form-group">
                            <label>Nama *</label>
                            <input type="text" name="nama" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>           
                        <div class="form-group">
                            <label>Kritik</label>
                            <textarea name="kritik" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Saran</label>
                            <textarea name="saran" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Kirim</button>
                        </div>                    
                    </div>
                </form>
            </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

    <section id="lokasi" class="lokasi">
            <div class="container fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                <h1 class="text-center">Lokasi</h1>
                <br>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d253173.85425745958!2d112.712675!3d-7.482751!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x802193e802b6fab5!2sDinas%20Perhubungan%20Kabupaten%20Sidoarjo!5e0!3m2!1sid!2sid!4v1574230516787!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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

