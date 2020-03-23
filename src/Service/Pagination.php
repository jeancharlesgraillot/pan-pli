<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;


class Pagination
{
    private $entityClass;
    private $limit = 5;
    private $page = 1;
    private $manager;

    public function __construct(EntityManagerInterface $manager){
        $this->manager = $manager;
    }
    
    public function getPages()
    {
        // Find out the total of records
        $repo = $this->manager->getRepository($this->entityClass);
        $total = count($repo->findAll());

        // Divide by limit to know the number of pages
        $pages = ceil($total / $this->limit);
        return $pages;
    }

    public function getData()
    {
        // Calculate the offset
        $offset = $this->page * $this->limit - $this->limit;

        // Ask the repository to find the items
        $repo = $this->manager->getRepository($this->entityClass);
        $data = $repo->findBy([], array('id' => 'DESC'), $this->limit, $offset);

        // Return the items
        return $data;
    }
    
    /**
     * Get the value of entityClass
     */ 
    public function getEntityClass()
    {
        return $this->entityClass;
    }

    /**
     * Set the value of entityClass
     *
     * @return  self
     */ 
    public function setEntityClass($entityClass)
    {
        $this->entityClass = $entityClass;

        return $this;
    }

    /**
     * Get the value of limit
     */ 
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Set the value of limit
     *
     * @return  self
     */ 
    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * Get the value of page
     */ 
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Set the value of page
     *
     * @return  self
     */ 
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }
}