<?php

class LifeManager extends AbstractManager
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create(Life $Life) : int
        {
            $query = $this->db->prepare('INSERT INTO Life (id, daly) VALUES (:id, :daly)');
            $parameters = [
                'id' => $Life->getId(),
                'daly' => $Life->getDaly(),
            ];
            $query->execute($parameters);

            return (int)$this->db->lastInsertId();
        }

    public function findOne(int $id) : ?Life
        {
            $query = $this->db->prepare('SELECT * FROM Life WHERE id = :id');
            $parameters = [
                'id' => $id
            ];
            $query->execute($parameters);
            $result = $query->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return new Life($result["daly"], $result["id"]);
            }

            return null;
        }

    public function findAll() : array
        {
            $query = $this->db->prepare('SELECT * FROM Life');
            $parameters = [

            ];
            $query->execute($parameters);
            $results = $query->fetchAll(PDO::FETCH_ASSOC);
            $lifes = [];

        foreach($results as $result)
            {
                $lifes[] = new Life($result["daly"], $result["id"]);
            }

            return $lifes;
    }
}