<?php
    $users = [  //variable tableau associatif
        [
            "firstName" => "Bugs",
            "lastName" => "Bunny",
            "age" => 29
        ],
        [
            "firstName" => "Roger",
            "lastName" => "Rabbit",
            "age" => 17
        ]
    ];
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4</title>
    </head>
    <body>
        <h1>
            Liste des utilisateurs
        </h1>
        <ul>
        <?php foreach($users as $user) { ?> <!-- boucle mineur/majeur -->
            <li>
                <?= $user["firstName"] . " " . $user["lastName"] ?>
                <?php if($user["age"] < 18) { ?> <!-- si mineur -->
                    - Mineur
                <?php } else { ?> <!-- si majeur -->
                    - Majeur
                <?php } ?>
            </li>
        <?php } ?>
        </ul>
    </body>
</html>