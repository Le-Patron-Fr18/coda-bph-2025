<?php

class AuthController extends AbstractController
{
    public function home() : void
    {
        $this->render('home/home.html.twig', []);
    }

    public function login() : void
    {
        $this->render('auth/login.html.twig', []);
    }

    public function logout() : void
    {
        session_destroy();
        $this->redirect('index.php');
    }

    public function register() : void
    {
        if (isset($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['password'], $_POST['confirmPassword'])) 
        {
            if ($_POST['password'] !== $_POST['confirmPassword']) {
                echo 'écrie mieux'; // Le message que vous vouliez
            } else {
                $email = $_POST['email'];
                $userManager = new UserManager();
                $userExists = $userManager->findByEmail($email);
                if ($userExists) {
                    echo 'Cet email est déjà utilisé';
                    return;
                }
                $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $manager = new UserManager();
                $newUser = new User($_POST['firstName'], $_POST['lastName'], $_POST['email'], $hashedPassword, 'user');
                $manager->create($newUser);
                $this->redirect('index.php?page=login');
            }
        } 
        
        $this->render('auth/register.html.twig', []);
    }

    public function notFound() : void
    {
        $this->render('error/notFound.html.twig', []);
    }
}