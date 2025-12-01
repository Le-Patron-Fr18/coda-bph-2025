<?php
require "user.php"; 

$user = new User(id: 1, username: "admin", password: "admin");
$user2 = new User(id: 2, username: "user", password: "user");
echo $user->getUsername();
echo $user2->getUsername();
?>