<?php
class AbstractManager
{
    protected PDO $db;

    public function __construct()
    {
        $host = $_ENV['DB_HOST'] ?? 'localhost';
        $port = $_ENV['DB_PORT'] ?? '3306';
        $dbname = $_ENV['DB_NAME'] ?? 'faircount';
        $user = $_ENV['DB_USER'] ?? 'root';
        $pass = $_ENV['DB_PASS'] ?? '123';

        $dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8";

        try {
            $this->db = new PDO($dsn, $user, $pass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // En développement, vous pouvez afficher l'erreur. En production, loguez-la.
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }
}