<?php
/**
 * File Name: ajouter-cours.php
 * User: alexa
 */
require 'include/configuration.inc';

?>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/messtyles.css" rel="stylesheet">

<div class="container-fluid padding">
    <?php
    //Vérifie si l'usager est authentifier avant d'afficher l'information de la page
    if ( isset( $_SESSION['code_usager'] ) ) {
        echo "
    <form method=\"post\" action=\"enregistrer-nouveau-cours.php\">
        <div class=\"form-group row\">
            <label for=\"code\" class=\"col-form-label col-sm-2\">* Code : </label>
            <div class=\"col-sm-3\">
                <input class=\"form-control\" id=\"code\" name=\"code\" type=\"text\" maxlength=\"10\" required title='Le code est requis. Il doit comporter 10 caractères ou moins.'>
            </div>
        </div>
        <div class=\"form-group row\">
            <label for=\"cours\" class=\"col-form-label col-sm-2\">* Titre : </label>
            <div class=\"col-sm-3\">
                <input class=\"form-control\" id=\"cours\" name=\"cours\" type=\"text\" maxlength=\"50\" required title='Le titre est requis. Il doit comporter 50 caractères ou moins.'>
            </div>
        </div>
        <div class=\"form-group row\">
            <label for=\"professeur\" class=\"col-form-label col-sm-2\">* Professeur : </label>
            <div class=\"col-sm-3\">
                <input class=\"form-control\" id=\"professeur\" name=\"professeur\" type=\"text\" maxlength=\"255\" required title='Le professeur est requis. Il doit comporter 255 caratères ou moins.'>
            </div>
        </div>
        <div class=\"form-group row\">
            <label for=\"annee\" class=\"col-form-label col-sm-2\">* Année : </label>
            <div class=\"col-sm-3\">
                <input class=\"form-control\" id=\"annee\" name=\"annee\" type=\"number\" pattern='[0-9]' required title='L année est requise. Il doit s agir d un nombre.'>
                <div class=\"col-sm-5 padding\">
                    <input type=\"submit\" class=\"btn btn-default form-control\" name=\"soumettre\" id=\"soumettre\" value=\"Soumettre\">
                </div>
            </div>
        </div>
    </form>";
    }
    else{
        echo "Vous ne disposez pas des droits requis pour accéder à cette page.";
        echo '<p><a class="btn darkbluecolor" href="index.php">Retour à l\'accueil</a></p>';
    }
    ?>

</div>


