<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use App\Repository\POSTRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;






class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home_home")
     * 
     */
    public function home(PostRepository $POSTRepository): Response
    {
        $allPostFromBdd = $POSTRepository->findAll();
        return $this->render(
            "home\home.html.twig",

        );
    }
}
