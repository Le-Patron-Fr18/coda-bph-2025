<?php                                                       // paramètre 'nom' dans l'URL                 //
    if (isset($_GET['nom']) && !empty($_GET['nom'])) {          // Utilisation du nom                     //  J'ai utiliser l'auto complite de copilote
        $nom = htmlspecialchars($_GET['nom']);                                                            //
    } else {                                                                                              //
        $nom = 'Anonyme';                                                                                 //
    }                                                                                                     //
    echo "Bienvenue " . $nom . " !";                            // Afficher le message de bienvenue       //
    ?>                                                                                                    
