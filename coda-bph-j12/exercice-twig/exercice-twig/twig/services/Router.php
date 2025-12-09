<?php

class Router
{
    public function handleRequest(array $get) : void
    {
        $ctrl = new BlogController();
        $ctrl->index();
    }
}