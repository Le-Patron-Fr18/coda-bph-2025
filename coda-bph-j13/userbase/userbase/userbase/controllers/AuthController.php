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
        $email = $_POST['email'];
        $userManager = new UserManager();
        $userExists = $userManager->findByEmail($email);
        if ($userExists) {
            echo 'Cet email est déjà utilisé';
        }
        }
        else {
            echo 'FAUT REMPLIR CORRECTEMENT MON CHEF';
        }


        $this->render('auth/register.html.twig', []);
    }

    public function notFound() : void
    {
        $this->render('error/notFound.html.twig', []);
    }
}