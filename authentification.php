<?php
/**
 * File Name: authentification.php
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

<div class="container-fluid text-center">
    <div class="col-lg-12">
        <?php

        if (isset($_SESSION['messageincorrect'])) {
            $message =$_SESSION['messageincorrect'];
            echo "<div class=\"alert alert-danger\" role=\"alert\">
                     $message
                    </div>";

            $_SESSION['messageincorrect']=null;

        }
        ?>
    </div>
</div>
<div class="container padding" >
    <div class="col-lg-10 col-lg-offset-2 ">
    <form method="post" id=... action=verifier-authentification.php>
        <div class="form-group row">
            <label for="code" class="col-form-label col-sm-3">* Code : </label>
            <div class="col-sm-5">
                <input class="form-control" id="code1" name="code" type="text">
            </div>
        </div>
        <div class="form-group row">
            <label for="motdepasse" class="col-form-label col-sm-3">* Mot de passe : </label>
            <div class="col-sm-5">
                <input class="form-control" id="motdepasse" name="motdepasse" type="password">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-3"></div>
            <div class="col-sm-3">
                <input type="submit" class="btn darkbluecolor " name="soumettre" id="soumettre" value="Soumettre">
            </div>

         </div>
    </form>
    </div>
</div>



<?php
require 'include/pied-page.inc';
require 'include/nettoyage.inc';

?>
