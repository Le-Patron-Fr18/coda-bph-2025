<?php
class Router
{
    public function handleRequest(array $get) : void
    {
        // si j'ai reçu un chemin
        if(isset($get["path"]))
        {
            $ctrl = new BlogController();

            // si le chemin est exactement 'index' -> index()
            if (isset($get['path']) && trim((string)$get['path']) === 'index') {
                $ctrl->index();
            }
            // si le chemin contient la sous-chaîne 'articles' -> article()
            else if (strpos((string)$get['path'], 'articles') !== false) {
                // Extraire l'ID de l'article à partir du path (format: /article/3)
                $url = explode("/", $get['path']);
                $article = isset($url[2]) ? $url[2] : null;
                
                $ctrl->article($article);
            }
            else {
                // tout autre chemin -> notFound()
                $ctrl->notFound();
            }
        }
        else // si pas de chemin
        {
            $ctrl = new DefaultController();
            // j'affiche la page d'accueil
            $ctrl->home();
        }
    }
}
?>
