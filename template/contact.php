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


    <h2>Contacts</h2>


    <img class="imagecontenu" src="images/contacts.jpg" alt="contact">

    <p class="formulaire"> Pour nous laisser un commentaire ou pour obtenir un renseignement complémentaire, remplissez le formulaire ci-dessous  :</p>
    
    <div class="formulaire">
    
        <div class="tab1">
            <label for="Nom">Nom :</label> 
            <form action="" method="POST"><input name="login" type="text"></form>
        </div>

        <div class="tab1">
            <label for="prenom">Prénom :</label> 
            <form action="" method="POST"><input name="login" type="text">
            </form>
        </div>
        <div class="tab1">
            <label for="prenom">Email :</label> 
            <form action="" method="POST"><input name="login" type="text">
            </form>
        </div>
        <div class="tab1">
            <label for="prenom">Ville:</label> 
            <form action="" method="POST"><input name="login" type="text">
            </form>
        </div>
        <div class="commentaire">
        <label for="msg">Commentaire :</label>
        <textarea name="msg" id="msg"></textarea>
        </div> 
            <input type="submit" value="Envoyer votre message">

            
        </div>
        
    
    
</div>


</div>

</body>

</html>