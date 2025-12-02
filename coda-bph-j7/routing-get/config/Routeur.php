<?php
class Router
{
    public function handleRequest(array $get) : void
    {
        // si j'ai reçu une route
        if(isset($get["route"]))
        {
            if($get["route"] === "a-propos")
            {
                $ctrl = new PageController();
                // j'affiche la page à propos
                $ctrl->about();
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
?>