<?php
/**
 * File Name: verifier-authentification.php
 * auteur: alexandre trudelle
 */
require 'include/configuration.inc';


if (isset($_POST['code']))
{
    $code= $_POST['code'];
}
if (isset($_POST['motdepasse']))
{
    $motDePasseEnClair = $_POST['motdepasse'];
}

    $requete = "SELECT  prenom, nomfamille, code, motdepasse FROM usagers WHERE code=?";
    $stmt = $mysqli->prepare($requete);

    if ($stmt) {
        $stmt->bind_param('s', $code);
        $stmt->execute();
        $stmt->store_result();
        if (0 == $stmt->errno) {
            if ($stmt->num_rows > 0) {
                $stmt->bind_result($prenom, $nomfamille, $code, $motDePasseDansBD);
                $stmt->fetch();
                if (password_verify($motDePasseEnClair, $motDePasseDansBD)) {
                    $_SESSION['messagecorrect']= "Bienvenue, $prenom $nomfamille !";
                    //créer une variable pour le nom et prénom de l'utilisateur
                    $_SESSION['prenom']=$prenom;
                    $_SESSION['nomfamille']=$nomfamille;
                    $_SESSION['code_usager']=$code;
                    header("Location: index.php");
                } else {
                    $_SESSION['messageincorrect']="Les informations sont incorrect";
                    header("Location: authentification.php");
                }
            } else {
                $_SESSION['messageincorrect']="les informations sont incorrect";
                header("Location: authentification.php");
            }
        }
        $stmt->close();
    }
    else {
        $_SESSION['messageincorrect']="mots de passe ou code manquant";
        header("Location: authentification.php");
        }
?>