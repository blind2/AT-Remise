<?php
/**
 * File Name: index.php
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

<div class="container-fluid text-center paralax1">
        <div class="col-lg ">
            <?php
            if (isset($_SESSION['messagecorrect'])) {
                $message =$_SESSION['messagecorrect'];
                echo"<div class=\"alert alert-success\" role=\"alert\">
            $message
            </div>";
                $_SESSION['messagecorrect']=null;
            }
            ?>
        </div>
</div>

<div class="container text-center">
    <div class="row">
<h2></h2>
</div>
</div>


<?php
require 'include/pied-page.inc';
require 'include/nettoyage.inc';
?>
