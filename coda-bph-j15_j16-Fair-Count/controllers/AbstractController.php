<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

abstract class AbstractController
{
    private Environment $twig;

    public function __construct()
    {
        // Le loader Twig va chercher les templates dans le dossier /templates
        $loader = new FilesystemLoader('templates');

        // Initialise l'environnement Twig
        $this->twig = new Environment($loader, [
            // 'cache' => 'var/cache', // Optionnel: active le cache pour de meilleures performances en production
        ]);
    }

    protected function render(string $template, array $data = []) : void
    {
        // Affiche le template en lui passant les données
        echo $this->twig->render($template, $data);
    }

    protected function redirect(string $route) : void
    {
        header("Location: $route");
        exit(); // Il est important d'arrêter l'exécution du script après une redirection
    }
}