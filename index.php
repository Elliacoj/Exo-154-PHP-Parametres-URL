<?php

/**
 * Exo 1
 * ------
 * 1. Créez une nouvelle page 'exo1.php'
 * 2. Créez un lien dans index.php ( ici ) qui passe le paramètre 'iteration' avec pour valeur 10 à cette page.
 * 3. Traitez tous les paramètres pour vous prémunir des petits malins.
 * 4. Faites une boucle pour afficher autant de fois Hello World 10 fois en utilisant 'iteration' dans la boucle.
 */

// TODO Votre code ici.
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
<a href="exo1.php?iteration=10">Exo 1</a>
<?php
echo "<br>";
    for($x = 1; $x <= 10; $x++) {
        echo "<a href='exo2.php?iteration=$x'>Exo 2 - $x</a><br>";
    }
?>

</body>
</html>

<?php
/**
 * Exo 2
 * ------
 * Faites exactement la même chose que pour l'exercice 1, mais le nouveau fichier sera nommé exo2.php
 * Créez au moins 10 liens à l'aide d'une boucle !!!
 * Pour chaque lien, le paramètre iteration prendra la valeur actuelle de votre variable de boucle ( $i par exemple ).
 */





