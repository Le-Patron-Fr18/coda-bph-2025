<?php

require_once 'controllers/AbstractController.php';
require_once 'managers/CompteManager.php';

class CompteController extends AbstractController
{
    public function connexion() : void
    {
        $errors = [];

        // Vérifie si le formulaire a été soumis
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $manager = new CompteManager();
            $user = $manager->findByEmail($_POST['email']);

            // Si l'utilisateur existe et que le mot de passe est correct
            if ($user && password_verify($_POST['password'], $user->getPassword())) {
                
                // On stocke les informations de l'utilisateur en session
                $_SESSION['user'] = [
                    'id' => $user->getId(),
                    'nom' => $user->getNom(),
                    'prenom' => $user->getPrenom(),
                    'email' => $user->getEmail()
                ];

                // On redirige vers la page d'accueil (ou une autre page)
                $this->redirect("index.php");

            } else {
                // Sinon, on ajoute un message d'erreur
                $errors[] = "Email ou mot de passe incorrect.";
            }
        }

        // Affiche le formulaire de connexion, en passant les erreurs éventuelles
        $this->render('compte/connection.html.twig', [
            'errors' => $errors
        ]);
    }

    public function creation() : void
    {
        $errors = [];

        // Vérifie si le formulaire a été soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Vérification simple des champs
            if (isset($_POST['prenom'], $_POST['nom'], $_POST['email'], $_POST['password'], $_POST['confirmPassword'])) {
                
                $manager = new CompteManager();

                // 1. Vérifier si les mots de passe correspondent
                if ($_POST['password'] !== $_POST['confirmPassword']) {
                    $errors[] = "Les mots de passe ne correspondent pas.";
                }

                // 2. Vérifier si l'email est déjà utilisé
                if ($manager->findByEmail($_POST['email'])) {
                    $errors[] = "Cet email est déjà utilisé.";
                }

                // S'il n'y a pas d'erreurs, on crée l'utilisateur
                if (count($errors) === 0) {
                    $newUser = new users($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['password']);
                    $manager->create($newUser);

                    // Rediriger vers la page de connexion
                    $this->redirect("index.php?page=connexion");
                }
            }
        }

        $this->render('compte/creation.html.twig', ['errors' => $errors]);
    }
}