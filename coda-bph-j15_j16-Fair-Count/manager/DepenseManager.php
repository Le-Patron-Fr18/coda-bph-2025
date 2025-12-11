<?php

class DepenseManager extends AbstractManager
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create(Depense $Depense) : int
        {
            $query = $this->db->prepare('INSERT INTO Depense (id, prenom, montant, motif, id_life) VALUES (:id, :prenom, :montant, :motif, :id_life)');
            $parameters = [
                'id' => $Depense->getId(),
                'prenom' => $Depense->getPrenom(),
                'montant' => $Depense->getMontant(),
                'motif' => $Depense->getMotif(),
                'id_life' => $Depense->getIdLife()
            ];
            $query->execute($parameters);

            return (int)$this->db->lastInsertId();
        }

    public function findOne(int $id) : ?Depense
        {
            $query = $this->db->prepare('SELECT * FROM Depense WHERE id = :id');
            $parameters = [
                'id' => $id
            ];
            $query->execute($parameters);
            $result = $query->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return new Depense($result["prenom"], $result["montant"], $result["motif"], $result["id_life"], $result["id"]);
            }

            return null;
        }

    public function findAll() : array
        {
            $query = $this->db->prepare('SELECT * FROM Depense');
            $parameters = [

            ];
            $query->execute($parameters);
            $results = $query->fetchAll(PDO::FETCH_ASSOC);
            $users = [];

        foreach($results as $result)
            {
                $users[] = new Depense($result["prenom"], $result["montant"], $result["motif"], $result["id_life"], $result["id"]);
            }

            return $users;
    }
}