<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    #[Route('/')]
    public function home(): Response
    {
        return $this->render('home/home.html.twig');
    }

    #[Route('/connexion')]
    public function connexion(): Response
    {
        return $this->render('connexion/connexion.html.twig');
    }

    #[Route('/creation')]
    public function creation(): Response
    {
        return $this->render('creation/creation.html.twig');
    }
    #[Route('/compte')]
    public function compte(): Response
    {
        return $this->render('compte/compte.html.twig');
    }
}