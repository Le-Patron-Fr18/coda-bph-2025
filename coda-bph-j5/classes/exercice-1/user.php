<?php
class User { 
    public function __construct(private int $id, private string $username, private string $password)
    {

    }
    
    public function getUsername() : string                       //gatter username 
    {
        return $this->username;
    }

    public function setUsername(string $username) : void        //setters username
    {
        $this->username = $username;
    }

    public function getPassword() : string                      //gatter password
    {
        return $this->password;
    }

    public function setPassword(string $password) : void        //setters password
    {
        $this->password = $password;
    }
}
?>