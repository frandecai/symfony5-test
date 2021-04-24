<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Role;

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
        $entityManager = $this->getDoctrine()->getManager();
        $roleRepository = $entityManager->getRepository(Role::class);
        $roles = $roleRepository->findAll();

        return $this->render('admin/roles.html.twig', array('roles' => $roles));
    }


    /**
     * @Route("/admin/role/save", name="app_admin_role_save")
     */
    public function roleSave(Request $request)
    {
        $id = $request->get('id');
        $name = $request->get('name');
        $description = $request->get('description');

        $entityManager = $this->getDoctrine()->getManager();
        $role = $entityManager->getRepository(Role::class)->find($id);

        if (!$role) {
            return new JsonResponse(
                [
                    'error'   => true,
                    'message' => 'ERROR ON UPDATE: no role found with id=' . $id
                ]
            );
        }

        $role->setName($name);
        $role->setDescription($description);
        $entityManager->flush();

        return new JsonResponse(
            [
                'error'       => false,
                'message'     => 'Update successful',
                'name'        => $name,
                'description' => $description,
            ]
        );
    }


    /**
     * @Route("/admin/role/remove", name="app_admin_role_remove")
     */
    public function roleRemove(Request $request)
    {

    }


    /**
     * @Route("/admin/users", name="app_admin_users")
     */
    public function users()
    {
        return $this->render('admin/users.html.twig');
    }
}
