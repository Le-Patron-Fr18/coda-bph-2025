<?php
    $connectedUser = false;  //veriable
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2</title>
    </head>
    <body>
        <header>
            <nav>
                <?php if($connectedUser == false) { ?> <!-- condition si c'est faut -->
                    <a href="#">Connexion</a>
                <?php } else if($grade == true) { ?> <!-- condition si c'est vrai -->
                    <a href="#">Déconnexion</a>
                <?php } ?>
            </nav>
        </header>
    </body>
</html>