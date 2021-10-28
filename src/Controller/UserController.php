<?php

namespace App\Controller;

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
        return $this->render('user/index.html.twig');
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
        return $this->render('user/show.html.twig');
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
