<?php

namespace App\Controller;

use App\Entity\Stade;
use App\Entity\Vote;
use App\Form\StadeType;
use App\Form\MatchType;
use App\Entity\Match;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
     /*$Matchs=$this->getDoctrine()->getRepository(Match::class)->findAll();

        return $this->render('match/match.html.twig', [
            'c' => $Matchs,
        ]);
*/

    return $this->render('template/match.html.twig', [
            'controller_name' => 'TemplateController',
        ]);
    }
    /**
     * @Route("/template/Stade", name="template_stade")
     */
    public function stade(): Response
    {
        $Stades=$this->getDoctrine()->getRepository(Stade::class)->findAll();

        /*return $this->render('stade/stade.html.twig', [
            'controller_name' => 'TemplateController',
        ]);*/
        return $this->render('stade/stade.html.twig', [
            'c' => $Stades,
        ]);
    }

    /**
     * @Route("/template/AddMatch", name="addMatch")
     */
    public function AddMatch(Request $request): Response
    {
        $c = new Match();
        $form = $this->createForm(MatchType::class,
            $c);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($c);
            $em->flush();
            return $this->redirectToRoute('template_match');
        }
        return $this->render('match/addMatch.html.twig', [
            'f' => $form->createView(),
        ]);

    }
    /**
     * @Route("/template/AddStade", name="addStade")
     */
    public function AddStade(Request $request): Response
    {

        $c = new Stade();
        $form = $this->createForm(StadeType::class,
            $c);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($c);
            $em->flush();
            return $this->redirectToRoute('template_stade');
        }
        return $this->render('template/addStade.html.twig', [
            'f' => $form->createView(),
        ]);


    }

    /**
     * @Route("/updateStade/{id}", name="updateStade")
     */
    public function updateStade(Request $request,$id): Response
    {
        $c = $this->getDoctrine()
            ->getRepository(Stade::class)
            ->find($id);
        $form = $this->createForm(StadeType::class,
            $c);

        $form->handleRequest($request);
        if ($form->isSubmitted()&& $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->flush();
            return $this->redirectToRoute('template_stade');
        }
        return $this->render('template/updateStade.html.twig', [
            'f' => $form->createView(),
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
    /**
     * @Route("/supprimerStade/{id}", name="supprimerStade")
     */
    public function supprimerStade($id): Response
    {

        $Stades=$this->getDoctrine()->getRepository(Stade::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($Stades);
        $em->flush();
        return $this->redirectToRoute("template_stade");
    }




}
