<?php
?>
<head>
<!DOCTYPE html>
<html lang="fr">
<title><?=$title ?></title>
<link type="text/css" rel="stylesheet" href="css/style.css">
</head>

<?php
include "inc/banniere.php"
?>

<nav>
<?php
include "inc/menu.php"
?>
</nav>
<body>

<div class="container">


    <h2>Galerie</h2>

    <div class="box">
        <div class="premiereligne">
        <img class="img_galerie" src="images/480px_Akershus_slott.jpg" alt="">
        <p>Akershus slott</p>
        </div>
        <div class="premiereligne">
        <img  class="img_galerie"src="images/480px_Holmenkollbakken.jpg" alt="">
        <p>Holmenkollbakken</p>
        </div>
    </div>
    <div class="box">
        <div class="premiereligne">
        <img  class="img_galerie"src="images/480px_MaisonRoyale_ParcChateau.jpg" alt="">
        <p>Maison Royale Parc Chateau</p>
        </div>
        <div class="premiereligne">
        <img  class="img_galerie"src="images/480px_Nasjonalgalleriet_oslo.jpg" alt="">
        <p>Nasjonalgalleriet oslo</p>
        </div>
    </div>
    <div class="box">
        <div class="premiereligne">
        <img  class="img_galerie"src="images/480px_Oslo_harbour.jpg" alt="">
        <p>Oslo harbour</p>
        </div>
        <div class="premiereligne">
        <img  class="img_galerie"src="images/480px_Port.jpg" alt="">
        <p>Port</p>
        </div>
    </div>


</div>

</body>

</html>