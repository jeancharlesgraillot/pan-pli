<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Article;
use App\Form\ArticleType;
use App\Service\Pagination;
use Symfony\Component\Form\Form;
use App\Repository\UserRepository;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminBlogController extends AbstractController
{
    /**
     * @Route("/admin/articles/{page}", name="admin_articles_index", requirements={"page": "\d+"})
     */
    public function index(ArticleRepository $repo, $page = 1, Pagination $pagination)
    {   
        $pagination ->setEntityClass(Article::class)
                    ->setPage($page);

        return $this->render('admin/blog/index.html.twig', [
            'pagination' => $pagination
        ]);
    }

    /**
     * Display and manage the article form
     * 
     * @Route("/admin/articles/new", name="admin_articles_create")
     * @IsGranted("ROLE_ADMIN")
     *
     * @return Response
     */
    public function create(Request $request, EntityManagerInterface $manager)
    {
        $article = new Article();

        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()) 
        {   
            if ($article->getCoverImage() !== null) 
            {
                $file = $form->get('coverImage')->getData();
                $fileName = '/uploads/' . uniqid() . '.' . $file->guessExtension();

                try
                {
                    $file->move(
                        $this->getParameter('images_directory'),
                        $fileName
                    );
                }

                catch (FileException $exception)
                {
                    return new Response($exception->getMessage());
                }

                $article->setCoverImage($fileName);
            }

            $manager->persist($article);

            $manager->flush();

            $this->addFlash(
                'success',
                "L'article <strong>{$article->getTitle()} a bien été enregistré !</strong>"
            );

            return $this->redirectToRoute('admin_articles_index');
        }

        return $this->render('admin/blog/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * Display and edit article form
     *
     * @Route("/admin/articles/{slug}/edit", name="admin_articles_edit")
     * 
     * @return Response
     */
    public function edit(Article $article, Request $request, EntityManagerInterface $manager)
    {
        $oldCoverImage = $article->getCoverImage();

        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()) 
        {
            if ($article->getCoverImage() !== null && $article->getCoverImage() !== $oldCoverImage) 
            {
                $file = $form->get('coverImage')->getData();
                $fileName = '/uploads/' . uniqid() . '.' . $file->guessExtension();

                try{
                    $file->move(
                        $this->getParameter('images_directory'),
                        $fileName
                    );
                }

                catch (FileException $exception)
                {
                    return new Response($exception->getMessage());
                }

                $article->setCoverImage($fileName);

            }else
            {
                $article->setCoverImage($oldCoverImage);
            }

            $manager->persist($article);

            $manager->flush();

            $this->addFlash(
                'success',
                "Les modifications de l'article <strong>{$article->getTitle()}</strong> ont bien été enregistrées !"
            );

            return $this->redirectToRoute('admin_articles_index');
        }

        return $this->render('admin/blog/edit.html.twig', [
            'form' => $form->createView(),
            'article' => $article
        ]);
    }

    /**
     * Delete an article
     * 
     * @Route("/admin/articles/{id}/delete", name="admin_articles_delete")
     *
     * @param Article $article
     * @param ObjectManager $manager
     * @return Response
     */
    public function delete(Article $article, EntityManagerInterface $manager)
    {
        $manager->remove($article);
        $manager->flush();

        $this->addFlash(
            'success',
            "L'article <strong>{$article->getTitle()}</strong> a bien été supprimé !"
        );

        return $this->redirectToRoute('admin_articles_index');
    }
}
