<?php

namespace App\Controller;

use App\Entity\Role;
use App\Form\RoleType;
use App\Service\Pagination;
use App\Repository\RoleRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminRoleController extends AbstractController
{
    /**
     * @Route("/admin/roles/{page}", name="admin_roles_index", requirements={"page": "\d+"})
     */
    public function index(RoleRepository $repo, $page = 1, Pagination $pagination)
    {
        $pagination ->setEntityClass(Role::class)
                    ->setPage($page);
        return $this->render('admin/role/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }

    /**
     * Display and manage role form
     * 
     * @Route("/admin/roles/new", name="admin_roles_create")
     *
     * @return response
     */
    public function create(EntityManagerInterface $manager, Request $request)
    {
        $role = new Role;

        $form = $this->createForm(RoleType::class, $role);

        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid())
        {
            $manager->persist($role);
            $manager->flush();

            $this->addFlash(
                'success',
                "Le rôle <strong>{$role->getTitle()}</strong> a bien été ajouté !"
            );

            return $this->redirectToRoute('admin_roles_index');
        }

        return $this->render("/admin/role/new.html.twig", [
            'form' => $form->createView()
        ]);
    }

        /**
     * Display and edit role form
     *
     * @Route("/admin/roles/{id}/edit", name="admin_roles_edit")
     * 
     * @return Response
     */
    public function edit(Role $role, EntityManagerInterface $manager, Request $request)
    {
        $form = $this->createForm(RoleType::class, $role);

        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()) 
        {
            $manager->persist($role);

            $manager->flush();

            $this->addFlash(
                'success',
                "Les modifications du rôle <strong>{$role->getTitle()}</strong> ont bien été enregistrées !"
            );

            return $this->redirectToRoute('admin_roles_index');
        }

        return $this->render('admin/role/edit.html.twig', [
            'form' => $form->createView(),
            'role' => $role
        ]);
    }

    /**
     * Delete a role
     * 
     * @Route("/admin/roles/{id}/delete", name="admin_roles_delete")
     *
     * @param Role $role
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function delete(Role $role, EntityManagerInterface $manager)
    {
        $manager->remove($role);

        $manager->flush();

        $this->addFlash(
            'success',
            "Le rôle <strong>{$role->getTitle()}</strong> a bien été supprimé !"
        );

        return $this->redirectToRoute('admin_roles_index');
    }
}
