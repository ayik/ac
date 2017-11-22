<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean And Cool Teknik</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Font     s -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="bootstrap.css" media="screen" title="no title" charset="utf-8">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">




</head>
<body id="page-top">

  <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand page-scroll" href="#page-top">Service AC</a>
          </div>


          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">

                  <li>
                      <a class="page-scroll" href="#services">Layanan</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="#portfolio">Portfolio</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="#contact">About & Contact</a>
                  </li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
  </nav>
<!--header pertama -->
    <header>
      <div class="header-content">
          <div class="header-content-inner">
              <h1>Clean and Cool</h1><h2>Teknik</h2>
              <h3>Menyediakan Pelayanan Instalasi, Perawatan, Service Besar/Ringan, Bongkar/PAsang untuk Segala Merk AC</h3>
            </div>
            </div>
    </header>
    <section class="bg-opsi" id="services">
        <?php require_once "view/layanan.php" ?>
    </section>
    <section class="no-padding" id="portfolio">
        <?php require_once "view/portofolio.php" ?>
    </section>

<!--buttoon bawah portofolio -->
    <aside class="bg-primary">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Portofolio Kami</h2>
            </div>
        </div>
    </aside>


  <!--kontak service -->
<?php require_once "view/kontak.php" ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
