<?php
class LifeManager extends AbstractManager {
    public function __construct()
    {
        parent::__construct();
    }
    public function findAll() : array
    {
        $query = $this->db->prepare('SELECT * FROM life');
        $query->execute();
        $Life = $query->fetchAll(PDO::FETCH_ASSOC);
        $Life_return = [];
        foreach ($Life as $i => $life)
        {
            $life_temp = new Life; 
            $life_temp->setId($life["id"]);
            $life_temp->setNom($life["daly"]);
            $Life_return[] = $life_temp;
        }
        return $Life_return;
    }
    public function findOne(int $id) : ?Life
    {
        $query = $this->db->prepare('SELECT * FROM life WHERE id = :id');
        $parameters = [
            'id' => $id
        ];
        $query->execute($parameters);
        $life = $query->fetch(PDO::FETCH_ASSOC);
        $life_temp = new Life;
        if($life === null)
        {
            return null;
        }
        else
        {
            $lifeHints = new Life; 
            $life_temp->setId($life["id"]);
            $life_temp->setNom($life["daly"]);
            return $life_temp;
        }
    }
     public function findAllFromGame(int $id) : array
    {
        $query = $this->db->prepare('SELECT * FROM life WHERE game = :id');
        $parameters = [
            'id' => $id
        ];
        $query->execute($parameters);
        $life = $query->fetchAll(PDO::FETCH_ASSOC);
        $life_return = [];
        foreach ($life as $i => $life_item)
        {
            $user_temp = new User; 
            $life_temp->setId($life_item["id"]);
            $life_temp->setNom($life_item["daly"]);
            $life_return[] = $life_temp;
        }
        return $life_return;
    }
}