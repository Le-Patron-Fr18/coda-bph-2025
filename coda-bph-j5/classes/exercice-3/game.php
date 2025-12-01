<?php
require "character.php"; 
require "weapon.php";

$character = new character(id: 1);
echo $character->getFirstName();
echo $character->getlastName();


?>