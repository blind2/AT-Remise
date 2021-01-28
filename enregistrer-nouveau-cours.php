<?php
/**
 * File Name: enregistrer-nouveau-cours.php
 * User: alexa
 */
require 'include/configuration.inc';
$_SESSION['reussiteajoutcategorie'] = true;


if (isset($_POST['code'])) {

    $code= $_POST['code'];
}
if (isset($_POST['cours'])) {

    $cours= $_POST['cours'];
}
if (isset($_POST['professeur'])) {

    $professeur= $_POST['professeur'];
}
if (isset($_POST['annee'])) {

    $annee= $_POST['annee'];
}
else {

   header("Location: index.php");
}
//Valide les données
$message = '';

// format attendu : le code est plus petit ou egal à 10 caractere
if ('' == $code && $code >10) {

    $message = 'Le code est requis. Il doit comporter 10 caractères ou moins.<br />';
}

// format attendu : le nom du cours est <= à 50 carateres
if (''==$cours && $cours>50){

    $message ='Le titre est requis. Il doit comporter 50 caractères ou moins.';
}

// format attendu : le nom du professeur est <= à 255 caratère
if (''==$professeur && $professeur>255){
    $message ='Le titre est requis. Il doit comporter 50 caractères ou moins.';
}

// format attendu : un nombre
if (''==$annee && !preg_match("/^[0-9]", $annee)){

    $message ='L\'année est requise. Il doit s\'agir d\'un nombre.';
}

if (''==$message) {
// Requete pour l'enregistrement des données.
    $requete = "INSERT INTO cours(code, titre, saison_id, annee, professeur) VALUES(?,?,?,?,?)";
    $stmt = $mysqli->prepare($requete);

    if ($stmt) {
        $saison = 2;
        $stmt->bind_param('ssiss', $code, $cours, $saison, $annee, $professeur);
        $stmt->execute();

        if (0 == $stmt->errno) {
            header("Location: cours.php");
            $_SESSION['messageajoutcategorie'] = "La catégorie a été ajoutée avec succès !";
        } else {
            header("Location: cours.php");
            $_SESSION['messageajoutcategorie'] = "Il a eu une erreur lors de l'ajout du cours !";
        }
        $stmt->close();
    }
}



