<!DOCTYPE html>
<html lang="fr-CA" >
<?php
/**
 * File Name: entete.inc
 * author: alexandre trudelle
 */

$requete = "SELECT * FROM pages WHERE url='$nomPage'";
$resultat = $mysqli->query($requete);     // exécute la requête
$enreg = $resultat->fetch_row();
$pageactuel=$enreg[1];
$titre=$enreg[2];
$description= $enreg[3];
$h1=$enreg[4];
$texte=$enreg[6];

if (isset($_SESSION['prenom'])) {
    $prenom =$_SESSION['prenom'];
}
if (isset($_SESSION['nomfamille'])) {
    $nomfamille =$_SESSION['nomfamille'];
}
?>

<head>

    <meta charset="utf-8">
    <link href="" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    echo" <meta name=\"description\" content=\"$description\">";
    echo" <title>$titre</title>";
    ?>
</head>

<body class="homepage  ">
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
                <?php
                echo" <h1 class=\"navbar-brand\" >$h1</h1>";
                ?>
            </div>
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <?php
                    if ($nomPage == "index.php") {
                        echo"<li class=\"active\"><a href=\"../index.php\">Acceuil</a></li>";
                        echo"<li><a class=\"\" href=\"../horaire.php\">Horaire</a></li>";
                        echo"<li><a class=\"\" href=\"../dates-importantes.php\">Dates Importantes</a></li>";
                        echo"<li><a class=\"\" href=\"../cours.php\">Cours</a></li>";

                        if ($prenom!=null && $nomfamille!=null){
                            //Dropdown menue  avec le nom de l'utilisateur et le boutton déconection
                            echo" <li class=\"nav-item dropdown\">
                          <a class=\"nav-link dropdown-toggle\" >
                          $prenom
                         </a>
                         <div class=\"dropdown-menu\">
                         <a class=\"dropdown-item\" href=\"../deconnecter.php\">Déconnexion</a>
                         </div>
                         </li>";
                            
                        }
                        else{
                            echo"<li class=\"\"><a href=\"../authentification.php\">Authentification</a></li>";
                        }

                    }
                    else if ($nomPage == "horaire.php") {
                        echo"<li><a class=\"\" href=\"../index.php\">Acceuil</a></li>";
                        echo"<li class=\"active\"><a href=\"../horaire.php\">Horaire</a></li>";
                        echo"<li><a class=\"\" href=\"../dates-importantes.php\">Dates Importantes</a></li>";
                        echo"<li><a class=\"\" href=\"../cours.php\">Cours</a></li>";

                        if ($prenom!=null && $nomfamille!=null){
                            //Dropdown menu  avec le nom de l'utilisateur et le boutton déconection
                            echo" <li class=\"nav-item dropdown\">
                          <a class=\"nav-link dropdown-toggle\" >
                          $prenom
                         </a>
                         <div class=\"dropdown-menu\">
                         <a class=\"dropdown-item\" href=\"../deconnecter.php\">Déconnexion</a>
                         </div>
                         </li>";
                        }
                        else{
                            echo"<li class=\"\"><a href=\"../authentification.php\">Authentification</a></li>";
                        }
                    }

                    else if ($nomPage == "dates-importantes.php") {
                        echo"<li><a class=\"\" href=\"../index.php\">Acceuil</a></li>";
                        echo"<li><a class=\"\" href=\"../horaire.php\">Horaire</a></li>";
                        echo"<li class=\"active\"><a href=\"../dates-importantes.php\">Dates Importantes</a></li>";
                        echo"<li><a class=\"\" href=\"../cours.php\">Cours</a></li>";

                        if ($prenom!=null && $nomfamille!=null){
                            //Dropdown menue  avec le nom de l'utilisateur et le boutton déconection
                            echo" <li class=\"nav-item dropdown\">
                          <a class=\"nav-link dropdown-toggle\" >
                          $prenom
                         </a>
                         <div class=\"dropdown-menu\">
                         <a class=\"dropdown-item\" href=\"../deconnecter.php\">Déconnexion</a>
                         </div>
                         </li>";
                        }

                        else{
                            echo"<li class=\"\"><a href=\"../authentification.php\">Authentification</a></li>";
                        }

                    }
                    else if ($nomPage == "cours.php") {
                        echo"<li><a class=\"\" href=\"../index.php\">Acceuil</a></li>";
                        echo"<li><a class=\"\" href=\"../horaire.php\">Horaire</a></li>";
                        echo"<li><a class=\"\" href=\"../dates-importantes.php\">Dates importantes</a></li>";
                        echo"<li class=\"active\"><a href=\"../cours.php\">Cours</a></li>";

                        if ($prenom!=null && $nomfamille!=null){
                            //Dropdown menu  avec le nom de l'utilisateur et le boutton déconection
                            echo" <li class=\"nav-item dropdown\">
                          <a class=\"nav-link dropdown-toggle\" >
                          $prenom
                         </a>
                         <div class=\"dropdown-menu\">
                         <a class=\"dropdown-item\" href=\"../deconnecter.php\">Déconnexion</a>
                         </div>
                         </li>";

                        }
                        else{
                            echo"<li class=\"\"><a href=\"../authentification.php\">Authentification</a></li>";

                        }
                    }

                    else if ($nomPage == "authentification.php") {
                        echo"<li><a class=\"\" href=\"../index.php\">Acceuil</a></li>";
                        echo"<li><a class=\"\" href=\"../horaire.php\">Horaire</a></li>";
                        echo"<li><a class=\"\" href=\"../dates-importantes.php\">Dates importantes</a></li>";
                        echo"<li><a class=\"\" href=\"../cours.php\">Cours</a></li>";

                        if ($prenom!=null && $nomfamille!=null){
                            //Dropdown menu avec le nom de l'utilisateur et le boutton déconection
                            echo" <li class=\"nav-item dropdown\">
                          <a class=\"nav-link dropdown-toggle\" >
                          $prenom
                         </a>
                         <div class=\"dropdown-menu\">
                         <a class=\"dropdown-item\" href=\"../deconnecter.php\">Déconnexion</a>
                         </div>
                         </li>";

                        }
                        else{
                            echo"<li class=\"active\"><a href=\"../authentification.php\">Authentification</a></li>";
                        }
                    }
                    ?>
                </ul>

            </div>
        </div>
    </nav>
</header>

<section  id="bienvenue" class="text-right">


</section >

<section id="middle"







