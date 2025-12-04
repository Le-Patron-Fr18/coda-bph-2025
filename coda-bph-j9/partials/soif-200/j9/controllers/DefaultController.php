<?php

class DefaultController extends AbstractController
{
    public function index() : void
    {
        require "data/homepage-data.php";
        $this->render("index", $data);
    }
}