<?php
$exercice4 = $_GET["exercice4"];
echo $exercice4; // affichera le tableau
$users = [       //variable tableau associatif
    [
        "name" => "Mari",
        "favoriteColor" => "blue"
    ],
    [
        "name" => "Santa",
        "favoriteColor" => "red"
    ],
    [
        "name" => "Shrek",
        "favoriteColor" => "green"
    ],
    [
        "name" => "Iron Man",
        "favoriteColor" => "red"
    ],
    [
        "name" => "Hulk",
        "favoriteColor" => "green"
    ],
    [
        "name" => "Hugues",
        "favoriteColor" => "blue"
    ]
];
    $selectedColor = $_GET["color"] ?? null;                                                                         //
    if ($selectedColor) {                                                                                            //
        $filteredUsers = array_filter($users, fn($user) => $user["favoriteColor"] === $selectedColor);               // j'ai utiliser claude pour faire cette partie
        $names = array_column($filteredUsers, "name");                                                               //
        echo "<p>Couleur recherchée : <strong>" . htmlspecialchars($selectedColor) . "</strong></p>";                // voicie la demande : 
        echo "<h2>Utilisateurs trouvés :</h2><ul>";                                                                  // 
        echo empty($names)                                                                                           // "pourrait tu me modifier une ligne dans mon fichier php 
            ? "<li>Aucun utilisateur trouvé pour cette couleur.</li>"                                                //  que quand je selectionne une couleur ça m'affiche les prénom
            : "<li>" . implode("</li><li>", array_map('htmlspecialchars', $names)) . "</li>";                        //  qui on la couleur en favorite"
        echo "</ul>";                                                                                                // 
    } else {                                                                                                         // je lui ai demander de raccourcir le code aussi
        echo "<p>Aucune couleur sélectionnée.</p>";                                                                  //
    }                                                                                                                //
    ?>