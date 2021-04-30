<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TemplateController extends AbstractController
{
    /**
     * @Route("/template", name="template")
     */
    public function index(): Response
    {
        return $this->render('template/index.html.twig', [
            'controller_name' => 'TemplateController',
        ]);
    }
    /**
     * @Route("/template/Match", name="template_match")
     */
    public function match(): Response
    {
        return $this->render('template/match.html.twig', [
            'controller_name' => 'TemplateController',
        ]);
    }
    /**
     * @Route("/template/Stade", name="template_stade")
     */
    public function stade(): Response
    {
        return $this->render('template/stade.html.twig', [
            'controller_name' => 'TemplateController',
        ]);
    }
    /**
     * @Route("/template/AddMatch", name="addMatch")
     */
    public function AddMatch(): Response
    {
        return $this->render('template/addMatch.html.twig', [
            'controller_name' => 'TemplateController',
        ]);
    }
    /**
     * @Route("/template/AddStade", name="addStade")
     */
    public function AddStade(): Response
    {
        return $this->render('template/addStade.html.twig', [
            'controller_name' => 'TemplateController',
        ]);
    }
    /**
     * @Route("/template/updateStade", name="updateStade")
     */
    public function updateStade(): Response
    {
        return $this->render('template/updateStade.html.twig', [
            'controller_name' => 'TemplateController',
        ]);
    }
    /**
     * @Route("/template/updateMatch", name="updateMatch")
     */
    public function updateMatch(): Response
    {
        return $this->render('template/updateMatch.html.twig', [
            'controller_name' => 'TemplateController',
        ]);
    }


}
