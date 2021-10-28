<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/users")
 */
class UserController extends AbstractController
{
    /**
     * @Route()
     */
    public function index(): Response
    {
//        $data = [
//            ['id' => 1, "firstName" => "<script>alert('XSS')</script>"],
//            ['id' => 2, "firstName" => "Cédric"]
//        ];

        $repo = $this->getDoctrine()->getRepository(User::class);
        $data = $repo->findAll();

        return $this->render('user/index.html.twig', [
            'users' => $data,
        ]);
    }

    /**
     * @Route("/create")
     */
    public function create(): Response
    {
        return $this->render('user/create.html.twig');
    }

    /**
     * @Route("/{id}", requirements={"id": "[1-9][0-9]*"})
     */
    public function show($id): Response
    {
        $repo = $this->getDoctrine()->getRepository(User::class);
        $data = $repo->find($id);

        return $this->render('user/show.html.twig', [
            'user' => $data,
        ]);
    }

    /**
     * @Route("/{id}/update", requirements={"id": "[1-9][0-9]*"})
     */
    public function update($id): Response
    {
        return $this->render('user/update.html.twig');
    }

    /**
     * @Route("/{id}/delete", requirements={"id": "[1-9][0-9]*"})
     */
    public function delete($id): Response
    {
        return $this->render('user/delete.html.twig');
    }
}
