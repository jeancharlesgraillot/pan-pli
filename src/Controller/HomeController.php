<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    /**
     * Display homepage
     * 
     * @Route("/", name="homepage")
     *
     * 
     */
    public function home()
    {   
        return $this->render
        (
            'home.html.twig'
        );
    }

    /**
     * Display legal notice
     *
     * @Route("/legal", name="legal_notice")
     * 
     * @return void
     */
    public function legalNotice()
    {
        return $this->render('legal.html.twig');
    }
}

?>
