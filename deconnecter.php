<?php
/**
 * File Name: deconnecter.php
 * author: alexandre trudelle
 */
require 'include/configuration.inc';

if (isset($_COOKIE[session_name()])) {
    session_unset();   // détruit les variables de session car session_destroy() ne le fait pas
}
session_destroy();
header("Location: index.php");   // renvoie vers une autre page
