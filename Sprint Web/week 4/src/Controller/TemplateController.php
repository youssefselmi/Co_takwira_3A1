<?php

namespace App\Controller;

use App\Entity\Matchs;
use App\Entity\Nawres;
use App\Entity\Stade;
use App\Entity\Vote;
use App\Form\MatchsType;
use App\Form\NawresType;
use App\Form\StadeType;
use App\Form\MatchType;
use App\Repository\MatchsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use MercurySeries\FlashyBundle\FlashyNotifier;

class TemplateController extends AbstractController
{
    /**
     * @Route("/template", name="template")
     */
    public function index(MatchsRepository  $calendar): Response
    {
        $events = $calendar->findAll();


        Source: https://prograide.com/pregunta/59280/afficher-plus-de-texte-en-plein-calendrier
        $rdvs = [];

        foreach($events as $event){
            $rdvs[] = [
                'idMatch' => $event->getIdMatch(),
                'date' => $event->getDate()->format('Y-m-d'),
                'description' => $event->getDescription(),


            ];
        }


        $data = json_encode($rdvs);
       /* return $this->render('match/index.html.twig', [
            'controller_name' => 'TemplateController',
        ]);*/
        return $this->render('base.html.twig', compact('data'));

    }
    /**
     * @Route("/template/Match", name="template_match")
     */
    public function match(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $d = new \DateTime();
     $Matchs=$this->getDoctrine()->getRepository(Matchs::class)->findAll();
        foreach ($Matchs as $rev) {
            if ($rev->getDate()<$d) {
                $rev->setStatus('Termine');
                $em->persist($rev);
                $em->flush();
            }
        }

        return $this->render('match/match.html.twig', [
            'c' => $Matchs,
        ]);

    }

    /**
     * @Route("/template/Stade", name="template_stade")
     */
    public function stade(): Response
    {
        $Stades=$this->getDoctrine()->getRepository(Stade::class)->findAll();

        return $this->render('stade/stade.html.twig', [
            'c' => $Stades,
        ]);
    }

    /**
     * @Route("/template/AddMatch", name="addMatch")
     */
    public function AddMatch(Request $request,\Swift_Mailer $mailer,FlashyNotifier $flashy): Response
    {
        $c = new Matchs();
        $form = $this->createForm(MatchsType::class,
            $c);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $ms = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($c);
            $em->flush();
            $message = (new \Swift_Message('Nouvelle demande de rejoindre un match !'))
                ->setFrom('nawres.boubakri.pidev@gmail.com')
                ->setTo('nawresboubakri@gmail.com')

                ->setBody($this->renderView('match/email.html.twig', ['c' => $ms]), 'text/html');
            $mailer->send($message);

            $this->addFlash('message','Order saved successfully!!');
            $flashy->success('Event created!', 'http://your-awesome-link.com');
         /* return  $this->render('match/addMatch.html.twig', [
                'f' => $form->createView(),
            ]);*/
            return $this->redirectToRoute('template_match');
        }
        return $this->render('match/addMatch.html.twig', [
            'f' => $form->createView(),
        ]);

    }
    /**
     * @Route("/template/AddStade", name="addStade")
     */
    public function AddStade(Request $request,FlashyNotifier $flashy): Response
    {
        $c = new Stade();
        $form = $this->createForm(StadeType::class,
            $c);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($c);
            $em->flush();
            $flashy->success('Stade Ajouté avec succée', 'http://your-awesome-link.com');
            /*return $this->render('template/addStade.html.twig', [
                'f' => $form->createView(),
            ]);*/
            return $this->redirectToRoute("template_stade");

        }
        return $this->render('stade/addStade.html.twig', [
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
        return $this->render('stade/updateStade.html.twig', [
            'f' => $form->createView(),
        ]);
    }

    /**
     * @Route("/updateMatch/{id}", name="updateMatch")
     */
    public function updateMatch(Request $request,$id): Response
    {
        $c = $this->getDoctrine()
            ->getRepository(Matchs::class)
            ->find($id);
        $form = $this->createForm(MatchsType::class,
            $c);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->flush();
            return $this->redirectToRoute('template_match');
        }
        return $this->render('match/updateMatch.html.twig', [
            'f' => $form->createView(),
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
    /**
     * @Route("/supprimerMatch/{id}", name="supprimerMatch")
     */
    public function supprimerMatch($id): Response
    {

        $M=$this->getDoctrine()->getRepository(Matchs::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($M);
        $em->flush();
        return $this->redirectToRoute("template_match");
    }
    /**
     * @Route("/search", name="ajax_search")
     */
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $matchs =  $em->getRepository('App:Matchs')->findEntitiesByString($requestString);
        if(!$matchs) {
            $result['matchs']['error'] = "Match Not found :( ";
        } else {
            $result['matchs'] = $this->getRealEntities($matchs);
        }
        return new Response(json_encode($result));
    }
    public function getRealEntities($matchs){
        foreach ($matchs as $matchs){
            $realEntities[$matchs->getIdMatch()]=[$matchs->getDescription(),$matchs->getScore(),$matchs->getStatus()];

        }
        return $realEntities;
    }

    /**
     * @Route("/MatchDetailed/{id}", name="matchDetailed")
     */
    public function MatchDetailed($id): Response
    {
        $em= $this->getDoctrine()->getManager();
        $p=$em->getRepository('App:Matchs')->find($id);
        return $this->render('match/MatchDetailed.html.twig', array(
            'idMatch'=>$p->getIdMatch(),
            'idStade'=>$p->getIdStade(),
            'status'=>$p->getStatus(),
            'description'=>$p->getDescription(),
            'score'=>$p-> getScore(),
            'idEquipe1'=>$p->getIdEquipe1(),
            'idEquipe2'=>$p->getIdEquipe2(),
            'nbSpectateur'=>$p->getNbSpectateur(),
            'heureDeb'=>$p->getHeureDeb(),
            'heureFin'=>$p->getHeureFin(),
            'date'=>$p->getDate()


        ));

    }
}
