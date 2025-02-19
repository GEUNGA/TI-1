<?php

if(isset($_GET["p"])){
    switch($_GET["p"]){
        case "accueil":
            $title = "page d'accueil";
            include "../template/index.php";
            break;
        case "geo":
            $title ="geo";
            include "../template/geographie.php";
            break;
        case "hist":
            $title ="hist";
            include "../template/histoire.php";
            break;
        case "cult":
            $title ="cult";
            include "../template/culture.php";
            break;
        case "gal":
            $title ="gal";
            include "../template/galerie.php";
            break;
        case "form":
            $title ="form";
            include "../template/contact.php";
            break;
        case "link":
            $title ="link";
            include "../template/liens.php";
            break;
        default:
        $title ="autreValeur";
        include "../template/erreur404.php";
    }   
   }   else{
            include "../template/index.php";

    }

    



?>

