<?php

namespace App\Controller;

use App\Entity\Tweet;
use App\Form\TweetType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function create(Request $request): Response
    {
        $form = $this->createForm(TweetType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Insérer via Doctrine
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($form->getData()); // appel de pre-persist
            $manager->flush(); // execute la requete
        }

        return $this->render('tweet/create.html.twig', [
            'tweetForm' => $form->createView(),
        ]);
    }
}
