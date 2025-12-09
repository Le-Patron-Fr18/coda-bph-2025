<?php

class UserController extends AbstractController
{
    public function profile() :void
    {
        $this->render('member/profile.html.twig', []);
    }

    public function create() :void
    {
        $this->render('admin/users/create.html.twig', []);
    }

    public function update() : void
    {
        $this->render('admin/users/update.html.twig', []);
    }

    public function delete() : void
    {
        $this->redirect("index.php?route=list");
    }

    public function list() : void
    {
        $this->render('admin/users/index.html.twig', []);
    }

    public function show() : void
    {
        $this->render('admin/users/show.html.twig', []);
    }
}
