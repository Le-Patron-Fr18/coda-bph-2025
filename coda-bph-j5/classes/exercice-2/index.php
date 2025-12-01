<?php
require "character.php"; 

$character = new character(id: 1);
echo $character->getFirstName();
echo $character->getlastName();

$character2 = new character(id: 2);
$character2->setFirstName("Sarah");
$character2->setLastName("Connor");
echo $character2->getfirstName();
echo $character2->getlastName();

echo $character->getFullName();
echo $character2->getFullName();
?>
