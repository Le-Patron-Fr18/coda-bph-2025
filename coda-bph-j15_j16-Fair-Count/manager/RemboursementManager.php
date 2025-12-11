<?php

class RemboursementManager extends AbstractManager
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create(Remboursement $Remboursement) : int
        {
            $query = $this->db->prepare('INSERT INTO Remboursement (id, donner_prenom, coût, recevoir_prenom) VALUES (:id, :donner_prenom, :coût, :recevoir_prenom)');
            $parameters = [
                'id' => $Remboursement->getId(),
                'donner_prenom' => $Remboursement->getDonnerPrenom(),
                'coût' => $Remboursement->getCoût(),
                'recevoir_prenom' => $Remboursement->getRecevoirPrenom(),
            ];
            $query->execute($parameters);

            return (int)$this->db->lastInsertId();
        }

    public function findOne(int $id) : ?Remboursement
        {
            $query = $this->db->prepare('SELECT * FROM Remboursement WHERE id = :id');
            $parameters = [
                'id' => $id
            ];
            $query->execute($parameters);
            $result = $query->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return new Remboursement($result["donner_prenom"], $result["coût"], $result["recevoir_prenom"], $result["id"]);
            }

            return null;
        }

    public function findAll() : array
        {
            $query = $this->db->prepare('SELECT * FROM Remboursement');
            $parameters = [

            ];
            $query->execute($parameters);
            $results = $query->fetchAll(PDO::FETCH_ASSOC);
            $remboursements = [];

        foreach($results as $result)
            {
                $remboursements[] = new Remboursement($result["donner_prenom"], $result["coût"], $result["recevoir_prenom"], $result["id"]);
            }

            return $remboursements;
    }
}