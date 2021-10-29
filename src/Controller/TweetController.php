<?php

namespace App\Controller;

use App\Entity\Tweet;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tweets")
 */
class TweetController extends AbstractController
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

        $repo = $this->getDoctrine()->getRepository(Tweet::class);
        $data = $repo->findAll();

        return $this->render('tweet/index.html.twig', [
            'tweets' => $data,
        ]);
    }

    /**
     * @Route("/create")
     */
    public function create(): Response
    {
        return $this->render('tweet/create.html.twig');
    }
}
