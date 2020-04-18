<?php


namespace App\Controller\security;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{

    /**
     * @Route("/login", name="login")
     */
    public function login(): Response
    {
        return $this->render('security/login.html.twig');
    }

    /**
     * @Route("/register", name="register")
     */
    public function register()
    {
        return $this->render('security/register.html.twig');
    }
}