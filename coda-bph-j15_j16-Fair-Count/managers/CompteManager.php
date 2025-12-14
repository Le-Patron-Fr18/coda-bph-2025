<?php

require_once 'managers/AbstractManager.php';
require_once 'models/users.php';

class CompteManager extends AbstractManager
{
    public function findByEmail(string $email) : ?users
    {
        $query = $this->db->prepare('SELECT * FROM users WHERE email = :email');
        $parameters = [
            "email" => $email
        ];
        $query->execute($parameters);
        $item = $query->fetch(PDO::FETCH_ASSOC);

        if($item)
        {
            // Crée un objet users à partir des données de la BDD
            $user = new users($item["nom"], $item["prenom"], $item["email"], $item["password"]);
            $user->setId($item['id']);
            return $user;
        }

        return null;
    }

    public function create(users $user) : void
    {
        // On hash le mot de passe avant de l'insérer en base de données
        $hashedPassword = password_hash($user->getPassword(), PASSWORD_DEFAULT);

        $query = $this->db->prepare('INSERT INTO users (nom, prenom, email, password) VALUES (:nom, :prenom, :email, :password)');
        $parameters = [
            'nom' => $user->getNom(),
            'prenom' => $user->getPrenom(),
            'email' => $user->getEmail(),
            'password' => $hashedPassword
        ];
        $query->execute($parameters);
    }
}