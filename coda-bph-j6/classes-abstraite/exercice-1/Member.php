<?php
require_once "AbstractUser.php";
class Member extends AbstractUser {

    private array $favorites = [];

    public function __construct(private string $biography)
    {
        parent::__construct($this->role->setRole = new role("MEMBER"));
    }

    public function getFavorites() : array                       //getter favorites
    {
        return $this->favorites;
    } 

    public function setFavorites(array $favorites) : void        //setters favorites
    {
        $this->favorites = $favorites;
    }

    public function getBiography() : string                       //getter biography
    {
        return $this->biography;
    } 

    public function setBiography(string $biography) : void        //setters biography
    {
        $this->biography = $biography;
    }


}
?>