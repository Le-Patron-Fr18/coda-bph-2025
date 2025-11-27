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

$query = $db->prepare('UPDATE users SET job = 1
WHERE id = 7');
$query->execute();
$users = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($users);
?>
