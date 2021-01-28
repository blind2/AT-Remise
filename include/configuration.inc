<?php
/**
 * File Name: configuration.inc
 * auteur: alexandre trudelle
 */
@session_start();
@$mysqli = new mysqli("localhost", "root", "mysql", "remise_trudellealexandre");

if ($mysqli->connect_errno) {

    die("&Eacute;chec lors de la connexion &agrave; la base de donn&eacute;es");
}

define('DEVEL', true);
// la variable contiendra la chaîne index.php
$nomPage = basename($_SERVER['SCRIPT_NAME']);