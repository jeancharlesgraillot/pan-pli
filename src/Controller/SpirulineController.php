<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SpirulineController extends AbstractController
{
    /**
     * Display spiruline page
     * 
     * @Route("/spiruline", name="spiruline_index")
     */
    public function index()
    {
        return $this->render('spiruline/index.html.twig');
    }
}
