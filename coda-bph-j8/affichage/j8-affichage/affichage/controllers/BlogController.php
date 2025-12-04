<?php
class BlogController extends AbstractController
{
    public function index() : void
    {
        $this->render('blog', []);
        require "data/data-articles.php";
    }

    public function article(int $id) : void
    {
        $this->render("article", []);
        require "data/data-articles.php";
    }

    public function notFound() : void
    {
        $this->render('notFound', []);
    }
}
?>