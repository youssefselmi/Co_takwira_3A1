<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MatchController extends AbstractController
{
    /**
     * @Route("/match", name="match")
     */
    public function index(): Response
    {
        return $this->render('match/index.html.twig', [
            'controller_name' => 'MatchController',
        ]);
    }
    /**
     * @Route("/template/Match", name="template_match")
     */
    public function match(): Response
    {
       /* $Matchs=$this->getDoctrine()->getRepository(Match::class)->findAll();

        return $this->render('match/match.html.twig', [
            'c' => $Matchs,
        ]);*/
    }
}
