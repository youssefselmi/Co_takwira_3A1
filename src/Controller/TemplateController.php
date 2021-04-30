<?php

namespace App\Controller;

use App\Entity\Article;
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
     * @Route("/template/Article", name="template_article")
     */
    public function article(): Response
    {
        return $this->render('template/article.html.twig', [
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
     * @Route("/template/AddArticle", name="addArticle")
     */
    public function AddMatch(): Response
    {
        return $this->render('template/addArticle.html.twig', [
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
     * @Route("/template/updateArticle", name="updateArticle")
     */
    public function updateArticle(): Response
    {
        return $this->render('template/updateArticle.html.twig', [
            'controller_name' => 'TemplateController',
        ]);
    }


}
