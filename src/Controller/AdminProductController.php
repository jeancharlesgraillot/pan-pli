<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Service\Pagination;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminProductController extends AbstractController
{
    /**
     * @Route("/admin/products/{page}", name="admin_products_index", requirements={"page": "\d+"})
     */
    public function index(ProductRepository $repo, $page = 1, Pagination $pagination)
    {
        $pagination ->setEntityClass(Product::class)
                    ->setPage($page);

        return $this->render('admin/product/index.html.twig', [
            'pagination' => $pagination
        ]);
    }

    /**
     * Display and manage product form
     *
     * @Route("/admin/products/new", name="admin_products_create")
     * 
     * @param Product $product
     * 
     * @return Response
     */
    public function create(Request $request, EntityManagerInterface $manager)
    {
        $product = new Product;

        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {   
            $manager->persist($product);

            $manager->flush();

            $this->addFlash(
                'success',
                "Le produit <strong>{$product->getProductName()}</strong> a bien été enregistré !"
            );

            return $this->redirectToRoute('products_show', [
                'slug' => $product->getSlug()
            ]);
        }
                    
        return $this->render('admin/product/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * Display and edit the product form
     * 
     * @Route("/admin/products/{slug}/edit", name="admin_products_edit")
     *
     * @return Response
     */
    public function edit(Product $product, Request $request, EntityManagerInterface $manager)
    {

        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {   
            $manager->persist($product);

            $manager->flush();

            $this->addFlash(
                'success',
                "Les modifications du produit <strong>{$product->getProductName()}</strong> ont bien été enregistrées !"
            );

            return $this->redirectToRoute('admin_products_index');
        }

        return $this->render('admin/product/edit.html.twig', [
            'form' => $form->createView(),
            'product' => $product
        ]);
    }

    /**
     * Delete a product
     * 
     * @Route("/admin/products/{id}/delete", name="admin_products_delete")
     *
     * @param Product $product
     * @param ObjectManager $manager
     * @return Response
     */
    public function delete(Product $product, EntityManagerInterface $manager)
    {
        $manager->remove($product);
        $manager->flush();

        $this->addFlash(
            'success',
            "Le produit <strong>{$product->getProductName()}</strong> a bien été supprimé !"
        );

        return $this->redirectToRoute('admin_products_index');
    }
}
