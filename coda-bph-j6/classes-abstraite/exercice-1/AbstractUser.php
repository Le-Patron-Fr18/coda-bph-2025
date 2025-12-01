<?php
abstract class AbstractUser {
    protected ? int $id = null;

    protected function __construct(protected string $username, protected string $password, protected string $role) {}

    public function getUsername() : string                       //gatter username 
    {
        return $this->username;
    }

    public function setUsername(string $username) : void        //setters username
    {
        $this->username = $username;
    }

    public function getPassword() : string                       //gatter username 
    {
        return $this->password;
    }

    public function setPassword(string $password) : void        //setters username
    {
        $this->password = $password;
    }

    public function getRole() : string                       //gatter username 
    {
        return $this->role;
    }

    public function setRole(string $role) : void        //setters username
    {
        $this->role = $role;
    }
}
?>