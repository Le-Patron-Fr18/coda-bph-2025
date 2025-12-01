<?php
require_once "user.php";
class Reader extends User
{
    private array $favoriteBooks = [];

    public function __construct(string $email, string $password){
    	$this->email = $email;
    	$this->password = $password;
    }

    public function addBookToFavorites(string $book): array {
    	$this->favoriteBooks[] = $book;

    	return $this->favoriteBooks;
    }

    public function removeBookFromFavorites(string $book): array {
    	foreach($this->favoriteBooks as $key => $favoriteBook)
    	{
    		if($favoriteBook === $book)
    		{
    			unset($this->favoriteBooks[$key]);
    		}
    	}

    	return $this->favoriteBooks;
    }
}
?>