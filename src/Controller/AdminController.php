<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AdminController extends AbstractController
{
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
        return $this->render('admin/roles.html.twig');
    }    


    /**
     * @Route("/admin/users", name="app_admin_users")
     */
    public function users()
    {
        return $this->render('admin/users.html.twig');
    }
}
