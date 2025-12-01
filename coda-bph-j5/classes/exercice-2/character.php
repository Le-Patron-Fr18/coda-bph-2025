<?php
class character { 

    private string $firstName = "joe";
    private string $lastName = "doe";

    public function __construct(private int $id)
    {

    }

    public function getFullName() : string
    {
    
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getFirstName() : string                       //gatter username 
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName) : void        //setters username
    {
        $this->firstName = $firstName;
    }

    public function getLastName() : string                      //gatter password
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName) : void        //setters password
    {
        $this->lastName = $lastName;
    }
}
?>