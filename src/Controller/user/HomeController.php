<?php


namespace App\Controller\user;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route(name="home.index",path="/")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('user/home.html.twig');
    }
}