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
<div class="formulaire">
    <h3> Pour nous laisser un commentaire ou pour obtenir un renseignement complémentaire, remplissez le formulaire ci-dessous  :</h3>
    <div>
        <label for="nom">Nom :</label><form action="" method="POST"><input name="login" type="text">
        </form>
    </div>
    <div>
        <label for="prenom">Prénom :</label><form action="" method="POST"><input name="login" type="text">
        </form>
    </div>
    <div>
        <label for="ville">Ville :</label><form action="" method="POST"><input name="login" type="text">
        </form>
    </div>
    <div>
        <label for="email">Email :</label><form action="" method="POST"><input name="login" type="text">
        </form>
    </div>
    <div>    
        <label for="commentaires">Commentaires :</label><form action="" method="POST"> <input name="login" type="text">
        
    </div>
    <input type="submit" value="Envoyer votre message">
</form>
    
    
</div>


</div>

</body>

</html>