<?php
/**
 * File Name: cours.php
 * author: alexandre trudelle
 */

require 'include/configuration.inc';
require 'include/entete.inc';
?>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/messtyles.css" rel="stylesheet">

<?php

    echo"<div class=\"container text-center padding\">
    <div class=\"row\">
        <div class=\"col-lg-12\">";

            $message=$_SESSION['messageajoutcategorie'];
            if (isset($_SESSION['messageajoutcategorie'])) {
                if ($_SESSION['reussiteajoutcategorie'] == true) {
                    echo "<div class=\"alert alert-success\" role=\"alert\"> $message</div>";
                }
                else {
                    echo "<div class=\"alert alert-success\" role=\"alert\">$message </div>";
                }
                $_SESSION['messageajoutcategorie'] = null;
                $_SESSION['reussiteajoutcategorie'] = null;
            }
            ?>
    <?php
       echo "</div>";
       echo "</div>";
    ?>
    <?php
    $requete = "SELECT code, titre, professeur, nom, annee FROM cours 
                INNER  JOIN saisons ON cours.saison_id = saisons.id
                ORDER BY saisons.ordre";
    $resultat = $mysqli->query($requete);     // exécute la requête
    if ($resultat) {    // si la requête a fonctionné
        if ($mysqli->affected_rows > 0) {    // si la requête a retourné au moins un enregistrement

            echo"<table>
              <tr>                                             
                 <td><b>Code</b></td><td><b>Cours</b></td><td><b>Professeur</b></td><td><b>Saison</b></td><td><b>Année</b></td>                                                                
              </tr>";

            while ($enreg = $resultat->fetch_row()) {     // extrait chaque ligne une à une

                echo"<tr>";
                echo " <td> $enreg[0]</td><td> $enreg[1]</td><td> $enreg[2]</td><td> $enreg[3]</td><td>$enreg[4]</td>";
                echo"</tr>";
            }
            echo "</table>";
        }
        else {

            echo "<p class='messageavertissement'> Aucun cours de disponnible.</p>";
        }
        $resultat->free();   // libère immédiatement la mémoire qui était allouée
    }
    else {
        echo "<p class='messageerreur'>Nous sommes désolés, vos cours ne peuvent etre affichées.</p>";
    }
    ?>

    <?php
    if ( isset( $_SESSION['code_usager'] ) ) {
        echo " <div class=\"row text-left padding\">
        <div class=\"col-sm-12 \">
        <a href=\"ajouter-cours.php\" class=\"btn darkbluecolor \" role=\"button\">Ajouter</a>
        </div>
      </div>
    </div>";
    }

?>
  <?php
  require 'include/pied-page.inc';
  require 'include/nettoyage.inc';
  ?>

