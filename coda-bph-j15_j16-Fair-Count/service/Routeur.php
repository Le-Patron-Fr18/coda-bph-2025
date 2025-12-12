<?php
class Router
{
    public function handleRequest()
    {
        // si j'ai reçu une route
        if(isset($_GET["route"]))
        {
            if($_GET["route"] === "users")
            {
                $ctrl = new UserController();
                // j'affiche la liste des utilisateurs
                $ctrl->users();
            }
            else if($_GET["route"] === "depense")
            {
                $ctrl = new DepenseController();
                // j'affiche la liste des dépenses
                $ctrl->depense();
            }
            else if($_GET["route"] === "life")
            {
                $ctrl = new LifeController();
                // j'affiche la page à propos
                $ctrl->life();
            }
            else if($_GET["route"] === "remboursement")
            {
                $ctrl = new RemboursementController();
                // j'affiche la liste des remboursements
                $ctrl->remboursement();
            }
            else
            {
                // si on m'envoie une route qui n'existe pas
                $ctrl = new DefaultController();
                // j'affiche la page d'erreur 404
                $ctrl->notFound();
            }
        }
        else // si pas de route
        {
            $ctrl = new DefaultController();
            // j'affiche la page d'accueil
            $ctrl->home();
        }
    }
}