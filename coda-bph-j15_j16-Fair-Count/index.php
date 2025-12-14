<?php

// Démarrage de la session pour pouvoir utiliser $_SESSION
session_start();

// Chargement des dépendances et des variables d'environnement
require_once 'vendor/autoload.php';

// Chargement des variables d'environnement à partir du fichier .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Chargement des contrôleurs
require_once 'controllers/AbstractController.php';
require_once 'controllers/CompteController.php';

// On récupère la page demandée dans l'URL, avec 'home' comme valeur par défaut
$page = $_GET['page'] ?? 'home';

// Initialisation du contrôleur
$compteController = new CompteController();

// Routage : en fonction de la page demandée, on appelle la bonne méthode
switch ($page) {
    case 'connexion':
        // Affiche la page de connexion
        $compteController->connexion();
        break;

    case 'creation':
        // Affiche la page de création de compte
        // Note : la méthode creation() n'existe pas encore dans CompteController
        // Nous la créerons à la prochaine étape.
        // Pour l'instant, on peut rediriger ou afficher une erreur.
        // Temporairement, on peut appeler une méthode à créer :
        $compteController->creation();
        break;

    default:
        // Page par défaut ou page non trouvée
        // Pour l'instant, on peut afficher la page de connexion par défaut
        $compteController->connexion();
        break;
}