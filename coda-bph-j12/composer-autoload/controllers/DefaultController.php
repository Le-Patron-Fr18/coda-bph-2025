<?php

class DefaultController extends AbstractController
{
    public function index() : void
    {
        $manager = new DefaultManager();
        $this->render("index", []);
    }
}