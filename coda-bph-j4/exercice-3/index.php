<?php 
$host = "localhost";
$port = "3306";
$dbname = "sqlintro";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "root";
$password = "";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

$query = $db->prepare('INSERT INTO users (username, email, job)
VALUES ("Batman", "bruce@wayne.com", 3);');
$query->execute();
$users = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($users);
?>

