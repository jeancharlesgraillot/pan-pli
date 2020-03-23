<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

class Stats
{

    private $manager;

    public function __construct(EntityManagerInterface $manager){
        $this->manager = $manager;
    }

    public function getStats(){
        $users = $this->getUsersCount();
        $articles = $this->getArticlesCount();
        $comments = $this->getCommentsCount();
        $categories = $this->getCategoriesCount();
        // $products = $this->getProductsCount();

        return compact('users', 'articles', 'comments', 'categories');
    }

    public function getUsersCount(){
        return $this->manager->createQuery('SELECT COUNT(u) FROM App\Entity\User u')->getSingleScalarResult();
    }

    public function getArticlesCount(){
        return $this->manager->createQuery('SELECT COUNT(a) FROM App\Entity\Article a')->getSingleScalarResult();
    }

    public function getCommentsCount(){
        return $this->manager->createQuery('SELECT COUNT(c) FROM App\Entity\Comment c')->getSingleScalarResult();
    }

    public function getCategoriesCount(){
        return $this->manager->createQuery('SELECT COUNT(ca) FROM App\Entity\Category ca')->getSingleScalarResult();
    }

    // public function getProductsCount(){
    //     return $this->manager->createQuery('SELECT COUNT(p) FROM App\Entity\Product p')->getSingleScalarResult();
    // }

}