<?php

class BlogController extends AbstractController
{
    public function index() : void
    {
        require "data/data-articles.php";
        $this->render("blog.html.twig", $articles);
    }
}