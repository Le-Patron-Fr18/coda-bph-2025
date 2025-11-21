<?php

$students = [
    [
        "firstName" => "Hannah",
        "lastName" => "Fields",
        "grades" => [12, 11, 15],
        "average" => -1
    ],
    [
        "firstName" => "Richard",
        "lastName" => "Stein",
        "grades" => [18, 12, 13],
        "average" => -1
    ],
    [
        "firstName" => "Mark",
        "lastName" => "Hartoff",
        "grades" => [9, 11, 10],
        "average" => -1
    ],
    [
        "firstName" => "Charlie",
        "lastName" => "Nestle",
        "grades" => [9, 8, 5],
        "average" => -1
    ],
    [
        "firstName" => "Suzy",
        "lastName" => "Brent",
        "grades" => [18, 15, 16],
        "average" => -1
    ]
];

function computeAverage(array $grades): float {  // Fonction pour calculer la moyenne des notes
    if (empty($grades)) {
        return 0.0;
    }
    
    return array_sum($grades) / count($grades);
}

?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Bulletin de notes</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <h1>
            Bulletin de notes
        </h1>
        <h2>
            Liste des étudiants
        </h2>
        <ul id="students">
        <?php foreach($students as $student) {                      // Calculer la moyenne pour chaque étudiant 
            $average = computeAverage($student["grades"]);
        ?> 
        <li>
          <article class="">
               <header>
                    <h1><?= $student["firstName"] . " " . $student["lastName"] ?></h1>     // Afficher le nom de l'étudiant
                        </header>
                            <section>
                                <h2>Notes : </h2>
                                <ul>
                                    <?php foreach($student["grades"] as $note) { ?>   // Afficher les notes
                                    <li><?= $note ?></li>
                                    <?php } ?>
                                </ul>
                            </section>
                            <footer>
                                <h3>Moyenne : <?= number_format($average, 2) ?>/20</h3>    // Affichage de la moyenne
                            </footer>
            </article>
        </li>
            <?php } ?>
        </ul>
    </body>
</html>