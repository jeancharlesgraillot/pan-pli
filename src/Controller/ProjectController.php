<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    /**
     * Display project page
     * 
     * @Route("/project", name="project_index")
     */
    public function index()
    {
        return $this->render('project/index.html.twig');
    }
}
