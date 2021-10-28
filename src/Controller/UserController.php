<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/users")
     */
    public function index(): Response
    {
        return $this->render('user/index.html.twig');
    }

    /**
     * @Route("/users/create")
     */
    public function create(): Response
    {
        return $this->render('user/create.html.twig');
    }

    /**
     * @Route("/users/{id}")
     */
    public function show($id): Response
    {
        return $this->render('user/show.html.twig');
    }

    /**
     * @Route("/users/{id}/update")
     */
    public function update(): Response
    {
        return $this->render('user/update.html.twig');
    }

    /**
     * @Route("/users/{id}/delete")
     */
    public function delete(): Response
    {
        return $this->render('user/delete.html.twig');
    }
}
