<?php

$students = [   // variable tableau / liste étudiants
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

?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Bulletin de notes</title>
    </head>
    <body>
        <h1>
            Bulletin de notes
        </h1>
        <h2>
            Liste des étudiants
        </h2>
        <ul id="students">
        <?php foreach($students as $student) { ?> 
            <li>
                <article class="">
                    <header>
                        <h1><?= $student["firstName"] . " " . $student["lastName"] ?></h1>
                    </header>
                    <section>
                        <h2>Notes : </h2>
                        <ul>
                            <li>Note 1</li>
                             <li>Note 2</li>
                            <li>Note 3</li>
                        </ul>
                    </section>
                    <footer>
                        <h3>Moyenne des notes de l'étudiant </h3>
                    </footer>
                </article>
            </li>
        <?php } ?>
        </ul>
    </body>
</html>