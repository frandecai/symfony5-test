<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Role;

class AdminController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/admin", name="app_admin_index")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig');
    }


    /**
     * @Route("/admin/roles", name="app_admin_roles")
     */
    public function roles()
    {
        $em = $this->entityManager;
        $roleRepository = $em->getRepository('Role');
        $roles = $roleRepository->findAll();

        return $this->render('admin/roles.html.twig', array('roles' => $roles));
    }


    /**
     * @Route("/admin/users", name="app_admin_users")
     */
    public function users()
    {
        return $this->render('admin/users.html.twig');
    }
}
