<?php

class DefaultController extends AbstractController
{
    public function index() : void
    {
        $this->render("index", []);
    }
}