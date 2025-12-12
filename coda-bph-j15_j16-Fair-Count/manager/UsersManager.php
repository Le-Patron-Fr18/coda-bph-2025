<?php
class UsersManager extends AbstractManager {
    public function __construct()
    {
        parent::__construct();
    }
    public function findAll() : array
    {
        $query = $this->db->prepare('SELECT * FROM users');
        $query->execute();
        $users = $query->fetchAll(PDO::FETCH_ASSOC);
        $users_return = [];
        foreach ($users as $i => $user)
        {
            $user_temp = new User; 
            $user_temp->setId($user["id"]);
            $user_temp->setNom($user["nom"]);
            $user_temp->setPrenom($user["prenom"]);
            $user_temp->setEmail($user["email"]);
            $user_temp->setPassword($user["password"]);
            $users_return[] = $user_temp;
        }
        return $users_return;
    }
    public function findOne(int $id) : ?User
    {
        $query = $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $parameters = [
            'id' => $id
        ];
        $query->execute($parameters);
        $user = $query->fetch(PDO::FETCH_ASSOC);
        $user_temp = new User;
        if($user === null)
        {
            return null;
        }
        else
        {
            $user_temp->setId($user["id"]);
            $user_temp->setNom($user["nom"]);
            $user_temp->setPrenom($user["prenom"]);
            $user_temp->setEmail($user["email"]);
            $user_temp->setPassword($user["password"]);
            return $user_temp;
        }
    }
     public function findAllFromGame(int $id) : array
    {
        $query = $this->db->prepare('SELECT * FROM users WHERE game = :id');
        $parameters = [
            'id' => $id
        ];
        $query->execute($parameters);
        $users = $query->fetchAll(PDO::FETCH_ASSOC);
        $users_return = [];
        foreach ($users as $i => $user)
        {
            $user_temp = new User; 
            $user_temp->setId($user["id"]);
            $user_temp->setNom($user["nom"]);
            $user_temp->setPrenom($user["prenom"]);
            $user_temp->setEmail($user["email"]);
            $user_temp->setPassword($user["password"]);
            $users_return[] = $user_temp;
        }
        return $users_return;
    }
}