<?php
class Router
{
    public function handleRequest()
    {
        // si j'ai reçu une route
        if(isset($_GET["route"]))
        {
            if($_GET["route"] === "show_user")
            {
                //$ctrl = new UserController();
                //$ctrl->show();
            }
            else if($_GET["route"] === "create_user")
            {
                //$ctrl = new UserController();
                //$ctrl->create();
            }
            else if($_GET["route"] === "check_create_user")
            {
                //$ctrl = new UserController();
                //$ctrl->checkCreate();
            }
            else if($_GET["route"] === "update_user")
            {
                //$ctrl = new UserController();
                //$ctrl->update();
            }
            else if($_GET["route"] === "check_update_user")
            {
                //$ctrl = new UserController();
                //$ctrl->checkUpdate();
            }
            else if($_GET["route"] === "delete_user")
            {
                //$ctrl = new UserController();
                //$ctrl->delete();
            }
            else if($_GET["route"] === "list_user")
            {
                //$ctrl = new UserController();
                //$ctrl->list();
            }
            else
            {
                //$ctrl = new UserController();
                //$ctrl->list();
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