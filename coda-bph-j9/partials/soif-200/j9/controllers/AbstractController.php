<?php
abstract class AbstractController
{
    protected function render(string $template, array $data) : void
    {
        // Inclure le layout principal depuis le dossier templates/partials
        require __DIR__ . '/../templates/partials/layout.phtml';
    }

    protected function redirect(string $route) : void
    {
        header("Location: $route");
    }
}