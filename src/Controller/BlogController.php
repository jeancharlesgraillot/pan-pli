<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Article;
use App\Entity\Comment;
use App\Form\CommentType;
use App\Service\Pagination;
use App\Repository\UserRepository;
use App\Repository\ArticleRepository;
use App\Repository\CommentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
    /**
     * Display articles
     * 
     * @Route("/blog/{page}", name="blog_index", requirements={"page": "\d+"})
     */
    public function index(ArticleRepository $repo, $page = 1, Pagination $pagination)
    {   
        $pagination ->setEntityClass(Article::class)
                    ->setPage($page);
        
        return $this->render('blog/index.html.twig', [
            'pagination' => $pagination
        ]);
    }


    /**
     * Display an article and the comment form and manage the comment form
     *
     * 
     * @Route("/blog/{slug}", name="articles_show")
     *
     * @return Response
     */
    public function show(UserRepository $repo, Article $article, Request $request, EntityManagerInterface $manager)
    {
    
        $emails = $manager->createQuery('SELECT (u.email) as email FROM App\Entity\User u')->getResult();
        $emails = array_column($emails, 'email');

        $comment = new Comment();

        $form = $this->createFormBuilder($comment)
                ->add('content', TextareaType::class, [
                    'label' => "commentContentLabel",
                    'attr' => [
                        'placeholder' => "commentContentPlaceholder"
                    ]
                ])
                ->add('email', EmailType::class, [
                    'label' => "commentEmailLabel",
                    'attr' => [
                        'placeholder' => "commentEmailPlaceholder"
                    ]
                ])
                ->add('nickname', TextType::class, [
                    'label' => "commentNicknameLabel",
                    'attr' => [
                        'placeholder' => "commentNicknamePlaceholder"
                    ]
                ])
                ->add('rgpd', CheckboxType::class, [
                    'label' => "commentRgpdLabel"
                ])
                ->getForm();
        

        $form->handleRequest($request);
        
        if ($form->isSubmitted() and $form->isValid())
        {
            $email = $comment->getEmail();

            if (in_array($email, $emails)) 
            {
                $comment->setArticle($article);
    
                $manager->persist($comment);
    
                $manager->flush();
    
                $this->addFlash(
                    'success',
                    "Votre commentaire a été posté avec succès !"
                );
    
                return $this->redirectToRoute('articles_show', [
                    'slug' => $article->getSlug()
                ]);
            }else
            {
                $this->addFlash(
                    'warning',
                    "Votre email n'est pas correct !"
                );
            }
        }
        
        return $this->render('blog/show.html.twig', [
            'article' => $article,
            'form' => $form->createView()
        ]);

    }
}

