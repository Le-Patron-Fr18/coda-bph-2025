<?php
require "weapon.php";
class character { 
    private weapon $weapon;

    public function __construct(public string $fight)
    {
        $this->weapon = new weapon("name", 0);
    }
    
    public function getFight() : string                       //gatter username 
    {
        return $this->fight;
    }

    public function setFight(string $fight) : void        //setters username
    {
        $this->fight = $fight;
    }

    public function strike() : string
    {
        return $this->fight->strike = $weapon;
    }
}
?>