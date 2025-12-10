<?php

class UserManager extends AbstractManager
{
    public function __construct()
    {
        parent::__construct();
    }

    public function findAll() : array
    {
        $query = $this->db->prepare('SELECT * FROM users');
        $parameters = [

        ];
        $query->execute($parameters);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $users = [];

        foreach($result as $item)
        {
            $user = new User($item["firstname"], $item["lastname"], $item["email"], $item["password"], $item["role"], $item["id"]);
            $users[] = $user;
            }
        }

        return $users;
    }

    public function findById(int $id) : ? User
    {
        $query = $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $parameters = [
            "id" => $id
        ];
        $query->execute($parameters);
        $item = $query->fetch(PDO::FETCH_ASSOC);

        if($item)
        {
            return new User($item["firstname"], $item["lastname"], $item["email"], $item["password"], $item["role"], $item["id"]);
        }

        return null;
    }

    public function findByEmail(string $email) : ? User
    {
        $query = $this->db->prepare('SELECT * FROM users WHERE email = :email');
        $parameters = [
            "email" => $email
        ];
        $query->execute($parameters);
        $item = $query->fetch(PDO::FETCH_ASSOC);

        if($item)
        {
            return new User($item["firstname"], $item["lastname"], $item["email"], $item["password"], $item["role"], $item["id"]);
        }

        return null;
    }

    public function create(User $user) : void
    {
        $query = $this->db->prepare('INSERT INTO users (firstname, lastname, email, password, role) VALUES (:firstname, :lastname, :email, :password, :role)');;
        $parameters = [
            "firstName" => $user->getFirstName(),
            "lastName" => $user->getLastName(),
            "email" => $user->getEmail(),
            "password" => $user->getPassword(),
            "role" => $user->getRole()
        ];
        $query->execute($parameters);
    }

    public function update(User $user) : void
    {
        $query = $this->db->prepare('UPDATE users SET firstname = :firstname, lastname = :lastname, email = :email, password = :password, role = :role WHERE id = :id');;
        $parameters = [
            "id" => $user->getId(),
            "firstName" => $user->getFirstName(),
            "lastName" => $user->getLastName(),
            "email" => $user->getEmail(),
            "password" => $user->getPassword(),
            "role" => $user->getRole()
        ];
        $query->execute($parameters);
    }

    public function delete(User $user) : void
    {
        $query = $this->db->prepare('DELETE FROM users WHERE id = :id');;
        $parameters = [
            "id" => $user->getId()
        ];
        $query->execute($parameters);
    }
}
