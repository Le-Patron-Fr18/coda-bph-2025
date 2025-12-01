<?php

// Inclure le fichier de la classe Reader.
// Comme reader.php inclut déjà user.php, nous n'avons pas besoin de l'inclure ici.
require_once 'reader.php';

// 1. Créez une instance de la classe Reader (un nouveau lecteur)
$lecteur = new Reader('john.doe@email.com', 'motdepasse123');

// 2. Ajoutez deux livres à sa liste de favoris
echo "Ajout des livres...\n";
$lecteur->addBookToFavorites("L'Étranger");
$favorites = $lecteur->addBookToFavorites("Dune");

// Affichez la liste des livres favoris pour vérifier
echo "Livres favoris du lecteur :\n";
print_r($favorites);

?>