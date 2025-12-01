<?php
class weapon { 
    public function __construct(private string $name, private int $damages)
    {

    }
    
    public function getName() : string                       //gatter username 
    {
        return $this->name;
    }

    public function setName(string $name) : void        //setters username
    {
        $this->name = $name;
    }

    public function getDamages() : string                      //gatter password
    {
        return $this->damages;
    }

    public function setDamages(string $damages) : void        //setters password
    {
        $this->damages = $damages;
    }

    public function strike() : string                       //gatter username 
    {
        return "Mais aïeuh! <br>";
    }
}
?>