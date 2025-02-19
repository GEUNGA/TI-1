<?php

if(isset($_GET["p"])){
    switch($_GET["p"]){
        case "page d'accueil":
            $title = "page d'accueil";
            include "../templates/index.php";
            break;
        case "hist":
            $title ="hist";
            include "../templates/histoire.php";
            break;
        case "cult":
            $title ="cult";
            include "../templates/culture.php";
            break;
        case "gal":
            $title ="gal";
            include "../templates/galerie.php";
            break;
        case "form":
            $title ="form";
            include "../templates/contact.php";
            break;
        case "link":
            $title ="link";
            include "../templates/liens.php";
            break;
        default:
        $title ="autreValeur";
        include "../templates/erreur404.php";
    }   
   }   else{
            include "../templates/accueilView.php";

    }

    



?>

