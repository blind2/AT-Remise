<?php
/**
 * File Name: dates-importantes.php
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

    <div class="container text-center padding  ">
        <?php
        if (isset($_GET['cours_id'])) {
            $cours_id = $_GET['cours_id'];

            //On execute la premiere requete.
            $requete = "SELECT code, titre FROM cours WHERE id='$cours_id'";
            $stmt = $mysqli->prepare($requete);
            if ($stmt) {
                $stmt->execute();
                $stmt->store_result();

                if (0 == $stmt->errno) {
                    if ($stmt->num_rows > 0) {
                        $stmt->bind_result($code, $titre);
                        while ($stmt->fetch()) {
                            echo "<h2>Travaux pour le cours $code : $titre</h2> ";
                        }

                        //On execute la deuxieme requete si la premiere a fonctionée.
                        $requete = "SELECT titre, dateremise FROM travaux WHERE cours_id='$cours_id'";
                        $stmt = $mysqli->prepare($requete);
                        if ($stmt) {
                            $stmt->execute();
                            $stmt->store_result();

                            if (0 == $stmt->errno) {
                                if ($stmt->num_rows > 0) {
                                    $stmt->bind_result($titre, $dateremise);

                                    echo '<table>';

                                    while ($stmt->fetch()) {
                                        $date1= date(" Y-m-d à H\hi", strtotime($dateremise));
                                        echo"<br>";
                                        echo "<tr><td><h2> $titre </h2></td><td><h2>$date1</h2></td></tr>";

                                    }
                                    echo '</table>';

                                } else {
                                    echo "<p>Aucun travaux n'est a remettre pour ce cours</p>";
                                    $stmt->close();
                                }
                            }
                        }
                    }
                    else{
                        echo "<p>Désolé ce cours n'est pas disponible</p>";
                        $stmt->close();
                    }
                }
            }
        }
        else {
            echo "<p>Aucun cours n'a été trouvé, veuillez recomencer</p>";
        }
        ?>
    </div>


<?php
  require 'include/pied-page.inc';
  require 'include/nettoyage.inc';
  ?>