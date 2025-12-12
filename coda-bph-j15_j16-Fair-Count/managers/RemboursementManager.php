<?php
class RemboursementManager extends AbstractManager {
    public function __construct()
    {
        parent::__construct();
    }
    public function findAll() : array
    {
        $query = $this->db->prepare('SELECT * FROM remboursement');
        $query->execute();
        $Remboursement = $query->fetchAll(PDO::FETCH_ASSOC);
        $Remboursement_return = [];
        foreach ($Remboursement as $i => $remboursement)
        {
            $remboursement_temp = new Remboursement; 
            $remboursement_temp->setId($remboursement["id"]);
            $remboursement_temp->setDonner_prenom($remboursement["donner_prenom"]);
            $remboursement_temp->setCoût($remboursement["coût"]);
            $remboursement_temp->setRecevoir_prenom($remboursement["recevoir_prenom"]);
        }
        return $Remboursement_return;
    }
    public function findOne(int $id) : ?Remboursement
    {
        $query = $this->db->prepare('SELECT * FROM remboursement WHERE id = :id');
        $parameters = [
            'id' => $id
        ];
        $query->execute($parameters);
        $remboursement = $query->fetch(PDO::FETCH_ASSOC);
        $remboursement_temp = new Remboursement;
        if($remboursement === null)
        {
            return null;
        }
        else
        {
            $depHints = new Depense; 
            $remboursement_temp->setId($remboursement["id"]);
            $remboursement_temp->setDonner_prenom($remboursement["donner_prenom"]);
            $remboursement_temp->setCoût($remboursement["coût"]);
            $remboursement_temp->setRecevoir_prenom($remboursement["recevoir_prenom"]);
            return $remboursement_temp;
        }
    }
     public function findAllFromGame(int $id) : array
    {
        $query = $this->db->prepare('SELECT * FROM remboursement WHERE game = :id');
        $parameters = [
            'id' => $id
        ];
        $query->execute($parameters);
        $remboursements = $query->fetchAll(PDO::FETCH_ASSOC);
        $depense_return = [];
        foreach ($remboursements as $i => $remboursement)
        {
            $user_temp = new User; 
            $remboursement_temp->setId($remboursement["id"]);
            $remboursement_temp->setDonner_prenom($remboursement["donner_prenom"]);
            $remboursement_temp->setCoût($remboursement["coût"]);
            $remboursement_temp->setRecevoir_prenom($remboursement["recevoir_prenom"]);
            $remboursement_return[] = $remboursement_temp;
        }
        return $remboursement_return;
    }
}