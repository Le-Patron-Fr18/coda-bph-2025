<?php

class UsersManager extends AbstractManager
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create(user $user) : int
        {
            $query = $this->db->prepare('INSERT INTO users (id, nom, prenom, email, password) VALUES (:id, :nom, :prenom, :email, :password)');
            $parameters = [
                'id' => $user->getId(),
                'nom' => $user->getNom(),
                'prenom' => $user->getPrenom(),
                'email' => $user->getEmail(),
                'password' => $user->getPassword()
            ];
            $query->execute($parameters);

            return (int)$this->db->lastInsertId();
        }

    public function findOne(int $id) : ?user
        {
            $query = $this->db->prepare('SELECT * FROM users WHERE id = :id');
            $parameters = [
                'id' => $id
            ];
            $query->execute($parameters);
            $result = $query->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return new user($result["nom"], $result["prenom"], $result["email"], $result["password"], $result["id"]);
            }

            return null;
        }

    public function findAll() : array
        {
            $query = $this->db->prepare('SELECT * FROM users');
            $parameters = [

            ];
            $query->execute($parameters);
            $results = $query->fetchAll(PDO::FETCH_ASSOC);
            $users = [];

        foreach($results as $result)
            {
                $users[] = new user($result["nom"], $result["prenom"], $result["email"], $result["id"]);
            }

            return $users;
    }
}