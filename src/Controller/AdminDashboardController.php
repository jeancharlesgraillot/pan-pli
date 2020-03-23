<?php

namespace App\Controller;

use App\Service\Stats;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminDashboardController extends AbstractController
{
    /**
     * 
     * Display database stats
     * 
     * @Route("/admin", name="admin_dashboard")
     */
    public function index(EntityManagerInterface $manager, Stats $stats)
    {
        $stats = $stats->getStats();

        $popularArticles = $manager->createQuery(
            'SELECT COUNT(c)as comments, a.title, a.id, u.firstName, u.lastName, u.picture
            FROM App\Entity\Comment c
            JOIN c.article a
            JOIN a.author u
            GROUP BY a
            ORDER BY comments DESC'
        )
        ->setMaxResults(5)
        ->getResult();

        $unpopularArticles = $manager->createQuery(
            'SELECT COUNT(c)as comments, a.title, a.id, u.firstName, u.lastName, u.picture
            FROM App\Entity\Comment c
            JOIN c.article a
            JOIN a.author u
            GROUP BY a
            ORDER BY comments ASC'
        )
        ->setMaxResults(5)
        ->getResult();


        return $this->render('admin/dashboard/index.html.twig', [
            'stats' => $stats,
            'popularArticles' => $popularArticles,
            'unpopularArticles' => $unpopularArticles
        ]);
    }
}
