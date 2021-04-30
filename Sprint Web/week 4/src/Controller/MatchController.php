<?php

namespace App\Controller;

use App\Entity\Matchs;
use App\Entity\Stade;
use App\Entity\Vote;
use App\Repository\MatchsRepository;
use App\Repository\VoteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Dompdf\Dompdf;

use Dompdf\Options;


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
    /**
     *
     * @param MatchsRepository $rep
     * @Route("/Match/SortedAsc", name="sorted_date_asc")
     */
    public function OrderByDateAsc(MatchsRepository $rep){

        $match = $rep->OrderByDateAsc();

        return $this->render('match/match.html.twig', [
            'c' => $match
        ]);
    }
    /**
     *
     * @param MatchsRepository $rep
     * @Route("/Match/SortedDsc", name="sorted_date_dsc")
     */
    public function OrderByDateDsc(MatchsRepository $rep){

        $match = $rep->OrderByDateDsc();

        return $this->render('match/match.html.twig', [
            'c' => $match
        ]);
    }
    /**
     *
     * @param MatchsRepository $rep
     * @Route("/Match/SortedHeureAsc", name="sorted_heure_asc")
     */
    public function OrderByHeureAsc(MatchsRepository $rep){

        $match = $rep->OrderByHeureAsc();

        return $this->render('match/match.html.twig', [
            'c' => $match
        ]);
    }
    /**
     *
     * @param MatchsRepository $rep
     * @Route("/Match/SortedHeureDsc", name="sorted_heure_dsc")
     */
    public function OrderByHeureDsc(MatchsRepository $rep){

        $match = $rep->OrderByHeureDsc();

        return $this->render('match/match.html.twig', [
            'c' => $match
        ]);
    }

    /**
     * @Route("/pdf", name="match_pdf")
     */
    public function pdfMatch()
    {



        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($pdfOptions);
        $matchs= $this->getDoctrine()->getManager()->getRepository(Matchs::class)->findAll();
        $html = $this->renderView('match/pdf.html.twig', [
            'c' => $matchs,
        ]);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $dompdf->stream("liste-matchs.pdf", [
            "Attachment" => true
        ]);
        return new Response ($dompdf->stream());



    }

    /**
     * @Route("/planification", name="planification")
     */
    public function indexplan(MatchsRepository  $calendar)
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

        return $this->render('match/plan.html.twig', compact('data'));
       //return $this->render('match/index.html.twig', compact('data'));

    }

    /**
     * @Route("/VoteMatch/{id}", name="match_vote")
     *
     */
    public function createVote(Request $request, $id)
    {
$idd =4;
        $b = $this->getDoctrine()->getManager()->getRepository('App:Matchs');
        $em = $this->getDoctrine()->getManager();
         $existe = false;
        $test= $em->getRepository(Matchs::class)->findVoteByUser($idd);
        $p = $em->getRepository(Matchs::class)->find($id);
        $s =$em->getRepository(Stade::class)->find($p->getIdStade());
        foreach ($test as $rev) {
            if ($rev->getIdUser() == $idd && $rev->getIdMAtch() == $p->getIdMatch()) {
                $existe = true;
            }
        }

if(!$existe){

    if ($request->isMethod('POST')) {

        $review = new Vote();
        $review->setVote(($request->get('stars')));
        $review->setIdMatch($p->getIdMatch());
        $review->setIdUser($idd);
        $em->persist($review);
        $em->flush();
        return $this->redirectToRoute("templatefrontmatchresult");


    }
}
        $Votes= $b->findVote($id);
        $a =0;
        $vote = 0;
        $nbrVote = count($Votes);
        foreach ($Votes as $rev){
            $vote = $vote + $rev->getVote();
        }
        if ($nbrVote == 0) {
            $vote = 0;
        } else {
            $vote = $vote / $nbrVote;
        }

        return $this->render('templatefront/matchresultdetails.html.twig', array(
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
            'date'=>$p->getDate(),
            'nbMatchT'=>$b->nbMatch("Termine"),
            'nbMatchO'=>$b->nbMatch("En Programme"),
            'nbMatchE'=>$b->nbMatch("En Cours"),
            'a'=>$vote,
            'nomStade'=>$s->getnomStade(),
            'ville'=> $s->getVille(),
            'adresse'=>$s->getAdresse(),
            'cap'=>$s->getCapacite()




        ));
    }

    /**
     *
     * @param MatchsRepository $rep
     * @Route("/templatefrontmatchresult", name="templatefrontmatchresult")

     */
    public function matchresult(MatchsRepository $rep): Response
    {

        $Matchs = $rep->findMatchTermine('Termine');


        return $this->render('templatefront/matchresult.html.twig', [
            'c' => $Matchs,
        ]);
    }


    /**
     * @Route("/templatefrontmatchresultD/{id}", name="matchd")
     */
    public function matchresultdetails($id): Response
    {
        $b = $this->getDoctrine()->getManager()->getRepository('App:Matchs');
        $em= $this->getDoctrine()->getManager();
        $p=$em->getRepository('App:Matchs')->find($id);

        $Votes= $b->findVote($id);
        $a =0;
        $vote = 0;
        $nbrVote = count($Votes);
        foreach ($Votes as $rev){
            $vote = $vote + $rev->getVote();
        }
        if ($nbrVote == 0) {
            $vote = 0;
        } else {
            $vote = $vote / $nbrVote;
        }


        return $this->render('templatefront/matchresultdetails.html.twig', array(
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
            'date'=>$p->getDate(),
            'nbMatchT'=>$b->nbMatch("Termine"),
            'nbMatchO'=>$b->nbMatch("En Programme"),
            'nbMatchE'=>$b->nbMatch("En Cours"),
            'a'=>$this->$a

        ));

    }


    /**
     * @Route("/nbMatchTermine", name="nbMatchTermine")
     */
    public function CountMatchTermine($status): Response
    {

        $b = $this->getDoctrine()->getRepository(MatchsRepository::class);
        $count = $b->nbMatch($status);

        return $this->render('templatefront/matchresultdetails.html.twig', array(
            'nbMatchT'=>$count
        ));

    }
    /**
     *
     * @param MatchsRepository $rep
     * @Route("/matchOrg", name="matchOrg")

     */
    public function matchOrg(MatchsRepository $rep): Response
    {
        $em = $this->getDoctrine()->getManager();
        $d = new \DateTime();
        $Matchs = $rep->findMatchTermine('En Programme');
        foreach ($Matchs as $rev) {
            if ($rev->getDate()<$d) {
                $rev->setStatus('Termine');
                $em->persist($rev);
                $em->flush();
            }
        }

        return $this->render('templatefront/matchOrganise.html.twig', [
            'c' => $Matchs,
        ]);
    }




    /**
     * @Route("/matchOrgD/{id}", name="matchOrgD")
     */
    public function matchOrgD($id): Response
    {
        $b = $this->getDoctrine()->getManager()->getRepository('App:Matchs');
        $em = $this->getDoctrine()->getManager();


        $p = $em->getRepository('App:Matchs')->find($id);
        return $this->render('templatefront/matchOrgD.html.twig', array(
            'idMatch' => $p->getIdMatch(),
            'idStade' => $p->getIdStade(),
            'status' => $p->getStatus(),
            'description' => $p->getDescription(),
            'score' => $p->getScore(),
            'idEquipe1' => $p->getIdEquipe1(),
            'idEquipe2' => $p->getIdEquipe2(),
            'nbSpectateur' => $p->getNbSpectateur(),
            'heureDeb' => $p->getHeureDeb(),
            'heureFin' => $p->getHeureFin(),
            'date' => $p->getDate(),
            'nbMatchT' => $b->nbMatch("Termine"),
            'nbMatchO' => $b->nbMatch("En Programme"),
            'nbMatchE' => $b->nbMatch("En Cours"),

        ));
    }



}
