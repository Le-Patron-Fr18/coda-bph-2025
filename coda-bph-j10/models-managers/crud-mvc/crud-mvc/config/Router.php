<?php
require "controllers/UserController.php";
class Router
{
    public function handleRequest()
    {
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
                //$ctrl -> checkCreate();
            }

            else if($_GET["route"] === "update_user")
            {
                //$ctrl = new UserController();
                //$ctrl -> update();
            }

            else if($_GET["route"] === "check_update_user")
            {
                //$ctrl = new UserController();
                //$ctrl -> checkUpdate();
            }

            else if($_GET["route"] === "delete_user")
            {
                //$ctrl = new UserController();
                //$ctrl -> delete();
            }
            else
            {
                //$ctrl = new UserController();
                //$ctrl->list();
            }
        }

        else // si pas de route
        {
            //$ctrl = new UserController();
            //$ctrl->list();
        }
    }
}