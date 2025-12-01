<?php
require_once "AbstractUser.php";
class Admin extends AbstractUser {
    
    public function __construct()
    {
    parent::__construct($role = new role("ADMIN"));
    }

    public function changeMemberRole(Member $member) : void
    {
        if ($member->setRole(new Role("PREMIUM_MEMBER"))) {

        } else { ($member->setRole(new Role("MEMBER")));  
        }
    }


}
?>