<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello", methods={"GET"})
     */
    public function hello()
    {
        // Nom de la classe avec son préfixe (namespace) : FQN ou FQCN
        // $res = new \Symfony\Component\HttpFoundation\Response();

        // Pour utiliser le nom court, il nous faut un use
        $res = new Response();

        $res->headers->set('Content-type', 'text/plain');
        $res->setStatusCode(200);
        $res->setContent('Hello !!!');

        return $res;
    }

    /**
     * @Route("/hello/{name}")
     */
    public function helloWithParam(string $name)
    {
//        $res = new Response();
//        $res->headers->set('Content-type', 'application/json');
//        $res->setStatusCode(200);
//        $res->setContent(json_encode(['msg'=> "Hello $name"]));
//        return $res;
        // return new JsonResponse(['msg'=> "Hello $name"]);
        return $this->json(['msg'=> "Hello $name"]);
    }

    /**
     * @Route("/redirect-to-home")
     */
    public function redirectToHome()
    {
        // return new RedirectResponse('/', 301);
        // return $this->redirect('/', 301);
        return $this->redirectToRoute('app_hello_hello');
    }

    /**
     * @Route("/exemple-avec-erreur")
     */
    public function exempleAvecErreur()
    {
        throw new \Exception('Une erreur');
    }

    /**
     * @Route("/exemple-avec-404")
     */
    public function exempleAvec404()
    {
        throw $this->createNotFoundException('User does not exist');
    }
}