<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Form\CommentType;
use App\Service\Pagination;
use App\Repository\CommentRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminCommentController extends AbstractController
{
    /**
     * @Route("/admin/comments/{page}", name="admin_comments_index", requirements={"page": "\d+"})
     */
    public function index(CommentRepository $repo, $page = 1, Pagination $pagination)
    {   
        $pagination ->setEntityClass(Comment::class)
                    ->setPage($page);

        return $this->render('admin/comment/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }

    /**
     * Display and edit comment form
     *
     * @Route("/admin/comments/{id}/edit", name="admin_comments_edit")
     * 
     * @return Response
     */
    public function edit(Request $request, EntityManagerInterface $manager, Comment $comment)
    {
        $form = $this->createForm(CommentType::class, $comment);

        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()) 
        {
            $manager->persist($comment);

            $manager->flush();

            $this->addFlash(
                'success',
                "Les modifications du commentaire <strong>{$comment->getId()}</strong> ont bien été enregistrées !"
            );

            return $this->redirectToRoute('admin_comments_index');
        }

        return $this->render('admin/comment/edit.html.twig', [
            'form' => $form->createView(),
            'comment' => $comment
        ]);
    }

    /**
     * Delete a comment
     * 
     * @Route("/admin/comments/{id}/delete", name="admin_comments_delete")
     *
     * @param Comment $comment
     * @param ObjectManager $manager
     * @return Response
     */
    public function delete(Comment $comment, EntityManagerInterface $manager)
    {
        $manager->remove($comment);
        $manager->flush();

        $this->addFlash(
            'success',
            "Le commentaire a bien été supprimé !"
        );

        return $this->redirectToRoute('admin_comments_index');
    }
}
