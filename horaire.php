<?php
/**
 * File Name: horaire.php
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

<div class="container padding ">
        <?php
    $requete = "SELECT nom, heuredebut,heurefin,titre,code,local FROM horaires 
                INNER  JOIN periodes ON horaires.periode_id =periodes.id 
                INNER  JOIN cours ON horaires.cours_id=cours.id 
                INNER JOIN jours ON horaires.jour_id=jours.id ORDER BY jours.ordre, periodes.ordre";
    $resultat = $mysqli->query($requete);     // exécute la requête
    if ($resultat) {    // si la requête a fonctionné
        if ($mysqli->affected_rows > 0) {    // si la requête a retourné au moins un enregistrement

           echo"<table>
              <tr>                                             
                 <td colspan=\"5\" class=\"text-center\">HORAIRE HIVER 2020</td>                                                                
              </tr>";

            while ($enreg = $resultat->fetch_row()) {     // extrait chaque ligne une à une

                echo"<tr>";
                echo " <td> $enreg[0]</td><td> $enreg[1] - $enreg[2]</td><td> $enreg[3]<br>$enreg[4]</td><td>$enreg[5]</td>";

                echo"</tr>";
            }

            echo "</table>";

        }
        else {

            echo "<p class='messageavertissement'> il n'a pas de cours dans votre horaire.</p>";
        }

        $resultat->free();   // libère immédiatement la mémoire qui était allouée
    }
    else {

        echo "<p class='messageerreur'>Nous sommes désolés, votre horaire ne peut etre affichée.</p>";

        echo_debug($mysqli->error);   // cette instruction sera expliquée dans une fiche plus loin

    }
    ?>

</div>

  <?php
  require 'include/pied-page.inc';
  require 'include/nettoyage.inc';
  ?>

