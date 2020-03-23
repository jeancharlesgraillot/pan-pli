<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Service\Pagination;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminCategoryController extends AbstractController
{
    /**
     * @Route("/admin/categories/{page}", name="admin_categories_index", requirements={"page": "\d+"})
     */
    public function index(CategoryRepository $repo, $page = 1, Pagination $pagination)
    {
        // $categories = $repo->findAll();
        $pagination ->setEntityClass(Category::class)
                    ->setPage($page);

        return $this->render('admin/category/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }

    /**
     * Display and manage category form
     *
     * @Route("/admin/categories/new", name="admin_categories_create")
     * 
     * @return Response
     */
    public function create(EntityManagerInterface $manager, Request $request)
    {
        $category = new Category();

        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()) 
        {
            $manager->persist($category);
            $manager->flush();

            $this->addFlash(
                'success',
                "La catégorie <strong>{$category->getName()}</strong> a bien été ajoutée !"
            );

            return $this->redirectToRoute('admin_categories_index');
        }

        return $this->render('admin/category/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * Display and edit category form
     *
     * @Route("/admin/categories/{id}/edit", name="admin_categories_edit")
     * 
     * @return Response
     */
    public function edit(Category $category, EntityManagerInterface $manager, Request $request)
    {
        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()) 
        {
            $manager->persist($category);

            $manager->flush();

            $this->addFlash(
                'success',
                "Les modifications de la catégorie <strong>{$category->getName()}</strong> ont bien été enregistrées !"
            );

            return $this->redirectToRoute('admin_categories_index');
        }

        return $this->render('admin/category/edit.html.twig', [
            'form' => $form->createView(),
            'category' => $category
        ]);
    }

    /**
     * Delete a category
     * 
     * @Route("/admin/categories/{id}/delete", name="admin_categories_delete")
     *
     * @param Category $category
     * @param ObjectManager $manager
     * @return Response
     */
    public function delete(Category $category, EntityManagerInterface $manager)
    {
        $manager->remove($category);

        $manager->flush();

        $this->addFlash(
            'success',
            "La catégorie <strong>{$category->getName()}</strong> a bien été supprimée !"
        );

        return $this->redirectToRoute('admin_categories_index');
    }
}
