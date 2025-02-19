<?php
?>
<head>
<!DOCTYPE html>
<html lang="fr">
<title><?=$title ?></title>
<link type="text/css" rel="stylesheet" href="css/style.css">
</head>
<header>
<?php
include "inc/banniere.php"
?>

<?php
include "inc/menu.php"
?>
</header>
<body>

<div class="container">


    <h2>Contacts</h2>


    <img class="imagecontenu" src="images/contacts.jpg" alt="contact">

    <p class="formulaire"> Pour nous laisser un commentaire ou pour obtenir un renseignement complémentaire, remplissez le formulaire ci-dessous  :</p>
    
    <div class="formulaire">
 
    

    <div class>
        <label for="prenom">Nom :</label><form action="" method="POST"><input name="login" type="text">
        </form>
        <label for="prenom">Prénom :</label><form action="" method="POST"><input name="login" type="text">
        </form>
        <label for="ville">Ville :</label><form action="" method="POST"><input name="login" type="text">
        </form>
        <label for="email">Email :</label><form action="" method="POST"><input name="login" type="text">
        </form>
        <label for="commentaires">Commentaires :</label><form action="" method="POST"> <input name="login" type="textearea">
    </div>

    <input type="submit" value="Envoyer votre message">
    
</div>


</div>

</body>

</html>