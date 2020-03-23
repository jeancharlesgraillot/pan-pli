<?php

namespace App\Controller;

use App\Entity\User;
use App\Service\Pagination;
use App\Repository\UserRepository;
use App\Form\UserRoleAttributionType;
use Symfony\Component\Form\Form;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminUserController extends AbstractController
{
    /**
     * @Route("/admin/users/{page}", name="admin_users_index", requirements={"page": "\d+"})
     */
    public function index(UserRepository $repo, $page = 1, Pagination $pagination)
    {   
        $pagination ->setEntityClass(User::class)
                    ->setPage($page);

        return $this->render('admin/user/index.html.twig', [
            'pagination' => $pagination
        ]);
    }

    /**
     * Attribute one or many roles to user
     *
     * @Route("/admin/users/{id}/edit", name="admin_users_edit")
     * 
     * @param User $user
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function attribute(User $user, Request $request, EntityManagerInterface $manager)
    {   

        $form = $this->createForm(UserRoleAttributionType::class, $user);

        $form->handlerequest($request);

        if ($form->isSubmitted() and $form->isValid()) 
        {   

            $manager->persist($user);

            $manager->flush();

            $this->addFlash(
                'success',
                "Les rôles de l'utilisateur <strong>{$user->getFirstname()}</strong> ont bien été modifiés !"
            );

            return $this->redirectToRoute('admin_users_index');
        }

        return $this->render("/admin/user/edit.html.twig", [
            'form' => $form->createView(),
            'user' => $user
        ]);
    }

    /**
     * Delete user
     *
     * @Route("/admin/users/{id}/delete", name="admin_users_delete")
     * 
     * @param User $user
     * @param ObjectManager $manager
     * @return Response
     */
    public function delete(User $user, EntityManagerInterface $manager)
    {
        $manager->remove($user);
        $manager->flush();

        $this->addFlash(
            'success',
            "L'utilisateur <strong>{$user->getFirstName()}</strong> a bien été supprimé !"
        );

        return $this->redirectToRoute('admin_users_index');
    }
}
