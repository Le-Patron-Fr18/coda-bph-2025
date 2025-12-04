<?php

class Router
{
    public function handleRequest() : void
    {
        $ctrl = new DefaultController();
        $ctrl->index();
    }
}