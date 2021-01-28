<!DOCTYPE html>
<html lang="fr-CA">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mes dates de remise</title>


  <!-- Bootstrap -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link href="../css/animate.min.css" rel="stylesheet">
  <link href="../css/prettyPhoto.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/responsive.css" rel="stylesheet">
  <link href="../css/messtyles.css" rel="stylesheet">

    <!-- CSS pour le tableau de mon horaire-->

  <!-- =======================================================
    Theme Name: Gp
    Theme URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-templat/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->

</head>
<body class="homepage">
  <header id="header">
    <nav class="navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
          <a class="navbar-brand" href="../index.php">Mes dates de remise</a>
        </div>

        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="../index.php">Accueil</a></li>
            <li class="active"><a href="../horaire.php">Horaire</a></li>
            <li><a href="#">Dates importantes</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->

  </header>
  <!--/header-->
  <section id="bienvenue">
<div class="container">

          <?php
            $titre='Bienvenue dans cette page web'; //création de variable et du tritre.
             echo "<h2>$titre</h2>";
            $image="medias/commun/poissonpoulet.jpg";
          echo "<img src='$image'>";
          $table="donnée";
         // mettre plus d'information dans le echo (php).
          echo"<table>$table</table>
                <tr>donnée</tr>
                <td>bob</td>"



          ?>
  </section>   <!--/.container-->

  <!--/#middle-->

  <section id="bottom">
    <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="widget">
            <h3>Company</h3>
            <ul>
              <li><a href="#">About us</a></li>
              <li><a href="#">We are hiring</a></li>
              <li><a href="#">Meet the team</a></li>
              <li><a href="#">Copyright</a></li>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->

        <div class="col-md-3 col-sm-6">
          <div class="widget">
            <h3>Support</h3>
            <ul>
              <li><a href="#">Faq</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Forum</a></li>
              <li><a href="#">Documentation</a></li>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->

        <div class="col-md-3 col-sm-6">
          <div class="widget">
            <h3>Developers</h3>
            <ul>
              <li><a href="#">Web Development</a></li>
              <li><a href="#">SEO Marketing</a></li>
              <li><a href="#">Theme</a></li>
              <li><a href="#">Development</a></li>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->

        <div class="col-md-3 col-sm-6">
          <div class="widget">
            <h3>Our Partners</h3>
            <ul>
              <li><a href="#">Adipisicing Elit</a></li>
              <li><a href="#">Eiusmod</a></li>
              <li><a href="#">Tempor</a></li>
              <li><a href="#">Veniam</a></li>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->
      </div>
    </div>
  </section>
  <!--/#bottom-->

  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="social">
            <ul class="social-share">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--/.container-->
  </div>
  <!--/.top-bar-->

  <footer id="footer" class="midnight-blue">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          &copy; Gp Theme. All Rights Reserved.<br>
            Site Web par Alexandre Trudelle <?php
            echo date("Y")
            ?>


          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Gp
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="col-sm-6">
          <ul class="pull-right">
            <li><a href="../index.php">Accueil</a></li>
            <li><a href="../horaire.php">Horaire</a></li>
            <li><a href="#">Dates importantes</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!--/#footer-->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.prettyPhoto.js"></script>
  <script src="../js/jquery.isotope.min.js"></script>
  <script src="../js/wow.min.js"></script>
  <script src="../js/main.js"></script>

</body>

</html>
