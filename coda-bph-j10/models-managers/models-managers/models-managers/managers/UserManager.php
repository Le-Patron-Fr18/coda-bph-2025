<?php

class UserManager extends AbstractManager
{
    public function create(User $user) : User
    {
        $query = $this->db->prepare('INSERT INTO users (firstName, lastName, email, password) VALUES (:firstName, :lastName, :email, :password)');
        $parameters = [
            'firstName' => $user->getFirstName(),
            'lastName' => $user->getLastName(),
            'email' => $user->getEmail(),
            'password' => password_hash($user->getPassword(), PASSWORD_BCRYPT)
        ];
        $query->execute($parameters);
        $user->setId((int)$this->db->lastInsertId());

        return $user;
    }

    public function update(User $user) : User
    {
        $query = $this->db->prepare('UPDATE users SET firstName = :firstName, lastName = :lastName, email = :email, password = :password WHERE id = :id');
        $parameters = [
            'firstName' => $user->getFirstName(),
            'lastName' => $user->getLastName(),
            'email' => $user->getEmail(),
            'password' => password_hash($user->getPassword(), PASSWORD_BCRYPT),
            'id' => $user->getId()
        ];
        $query->execute($parameters);

        return $user;
    }

    public function delete(int $id) : void
    {
        $query = $this->db->prepare('DELETE FROM users WHERE id = :id');
        $parameters = [
            'id' => $id
        ];
        $query->execute($parameters);
    }

    public function findOne(int $id) : ?User
    {
        $query = $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $query->execute(['id' => $id]);
        $result = $query->fetch();

        if (!$result) {
            return null;
        }

        $user = new User(
            $result["firstName"],
            $result["lastName"],
            $result["email"],
            $result["password"],
            (int)$result["id"]
        );

        return $user;
    }

    public function findAll() : array
    {
        $query = $this->db->prepare('SELECT * FROM users');
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        $users = [];

        foreach($results as $result)
        {
            $user = new User($result["firstName"], $result["lastName"], $result["email"], $result["password"], (int)$result["id"]);
            $users[] = $user;
        }

        return $users;
    }
}