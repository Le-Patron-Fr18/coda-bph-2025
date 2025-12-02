<?php
class PageController
{
    public function home(): void
    {
        $route = "home";
        require __DIR__ . '/../tamplates/layout.phtml';
    }

    public function about(): void
    {
        $route = "about";
        require __DIR__ . '/../tamplates/layout.phtml';
    }

    public function notFound(): void
    {
        $route = "notFound";
        require __DIR__ . '/../tamplates/layout.phtml';
    }
}

$get = $_GET ?? [];

if (isset($get['route'])) {
    if ($get['route'] === 'a-propos') {
        $ctrl = new PageController();
        $ctrl->about();
    } else {
        $ctrl = new PageController();
        $ctrl->notFound();
    }
} else {
    $ctrl = new PageController();
    $ctrl->home();
}

?>