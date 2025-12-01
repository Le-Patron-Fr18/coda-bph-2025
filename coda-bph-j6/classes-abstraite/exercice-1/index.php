<?php
require_once "Member.php";
require_once "Admin.php";
require_once "AbstractUser.php";

$Member = new Member("toto");
echo $Member->setRole();

$Admin = new Admin("enzo");
echo $Admin->setRole();

?>