<?php

class PageController extends AbstractController
{
    public function depense() : void 
    {
        $usersMan = new UserManager;
        $lifeMan = new LifeManager;
        $depenseMan = new DepenseManager;
        $data = [
            "prenom" => $usersMan->findAll(),
            "daly" => $lifeMan->findAll(),
            "prenom" => $depenseMan->findAll(),
            "montant" => $depenseMan->findAll(),
            "motif" => $depenseMan->findAll(),
            "id_life" => $depenseMan->findAll(),
        ];
        $this->render("depense", $data);
    }
    public function remboursement() : void 
    {
        $usersMan = new UserManager;
        $remboursementMan = new RemboursementManager;
        $data = [
            "prenom" => $usersMan->findAll(),
            "donner_prenom" => $remboursementMan->findAll(),
            "coût" => $remboursementMan->findAll(),
            "recevoir_prenom" => $remboursementMan->findAll(),
        ];
        $this->render("remboursement", $data);
    }
}