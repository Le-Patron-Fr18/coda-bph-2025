<?php
class DepenseManager extends AbstractManager {
    public function __construct()
    {
        parent::__construct();
    }
    public function findAll() : array
    {
        $query = $this->db->prepare('SELECT * FROM depense');
        $query->execute();
        $Depense = $query->fetchAll(PDO::FETCH_ASSOC);
        $Depense_return = [];
        foreach ($Depense as $i => $depense)
        {
            $depense_temp = new Depense; 
            $depense_temp->setId($depense["id"]);
            $depense_temp->setNom($depense["prenom"]);
            $depense_temp->setPrenom($depense["motif"]);
            $depense_temp->setEmail($depense["id_life"]);
            $Depense_return[] = $depense_temp;
        }
        return $Depense_return;
    }
    public function findOne(int $id) : ?Depense
    {
        $query = $this->db->prepare('SELECT * FROM depense WHERE id = :id');
        $parameters = [
            'id' => $id
        ];
        $query->execute($parameters);
        $depense = $query->fetch(PDO::FETCH_ASSOC);
        $depense_temp = new Depense;
        if($depense === null)
        {
            return null;
        }
        else
        {
            $depHints = new Depense; 
            $depense_temp->setId($depense["id"]);
            $depense_temp->setNom($depense["prenom"]);
            $depense_temp->setPrenom($depense["motif"]);
            $depense_temp->setEmail($depense["id_life"]);
            return $depense_temp;
        }
    }
     public function findAllFromGame(int $id) : array
    {
        $query = $this->db->prepare('SELECT * FROM depense WHERE game = :id');
        $parameters = [
            'id' => $id
        ];
        $query->execute($parameters);
        $depenses = $query->fetchAll(PDO::FETCH_ASSOC);
        $depense_return = [];
        foreach ($depenses as $i => $depense)
        {
            $user_temp = new User; 
            $depense_temp->setId($depense["id"]);
            $depense_temp->setNom($depense["prenom"]);
            $depense_temp->setPrenom($depense["motif"]);
            $depense_temp->setEmail($depense["id_life"]);
            $depense_return[] = $depense_temp;
        }
        return $depense_return;
    }
}