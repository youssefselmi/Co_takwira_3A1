<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TemplatefrontController extends AbstractController
{
    /**
     * @Route("/templatefront", name="templatefront")
     */
    public function index(): Response
    {
        return $this->render('templatefront/index.html.twig', [
            'controller_name' => 'TemplatefrontController',
        ]);
    }



    /**
     * @Route("/templatefront1", name="templatefront1")
     */
    public function home1(): Response
    {
        return $this->render('templatefront/home1.html.twig', [
            'controller_name' => 'TemplatefrontController',
        ]);
    }

    /**
     * @Route("/templatefront2", name="templatefront2")
     */
    public function home2(): Response
    {
        return $this->render('templatefront/home2.html.twig', [
            'controller_name' => 'TemplatefrontController',
        ]);
    }





















    /**
     * @Route("/templatefrontcontactus", name="templatefrontcontactus")
     */
    public function contactus(): Response
    {
        return $this->render('templatefront/contactus.html.twig', [
            'controller_name' => 'TemplatefrontController',
        ]);
    }


    /**
     * @Route("/templatefrontprosoccermedia1", name="templatefrontprosoccermedia1")
     */
    public function prosoccer1(): Response
    {
        return $this->render('templatefront/prosoccer1.html.twig', [
            'controller_name' => 'TemplatefrontController',
        ]);
    }



    /**
     * @Route("/templatefrontprosoccermedia2", name="templatefrontprosoccermedia2")
     */
    public function prosoccer2(): Response
    {
        return $this->render('templatefront/prosoccer2.html.twig', [
            'controller_name' => 'TemplatefrontController',
        ]);
    }



    /**
     * @Route("/templatefrontjoueurjunior", name="templatefrontjoueurjunior")
     */
    public function joueurjunior(): Response
    {
        return $this->render('templatefront/joueurjunior.html.twig', [
            'controller_name' => 'TemplatefrontController',
        ]);
    }


    /**
     * @Route("/templatefrontjoueursunior", name="templatefrontjoueursunior")
     */
    public function joueursunior(): Response
    {
        return $this->render('templatefront/joueursunior.html.twig', [
            'controller_name' => 'TemplatefrontController',
        ]);
    }



    /**
     * @Route("/templatefrontcoachs", name="templatefrontcoachs")
     */
    public function coachs(): Response
    {
        return $this->render('templatefront/coachs.html.twig', [
            'controller_name' => 'TemplatefrontController',
        ]);
    }


    /**
     * @Route("/templatefrontmatchresult", name="templatefrontmatchresult")
     */
    public function matchresult(): Response
    {
        return $this->render('templatefront/matchresult.html.twig', [
            'controller_name' => 'TemplatefrontController',
        ]);
    }

    /**
     * @Route("/templatefrontmatchresultdetails", name="templatefrontmatchresultdetails")
     */
    public function matchresultdetails(): Response
    {
        return $this->render('templatefront/matchresultdetails.html.twig', [
            'controller_name' => 'TemplatefrontController',
        ]);
    }

    /**
     * @Route("/templatefrontarticles", name="templatefrontarticles")
     */
    public function articles(): Response
    {
        return $this->render('templatefront/artiles.html.twig', [
            'controller_name' => 'TemplatefrontController',
        ]);
    }





}
