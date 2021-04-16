<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Match
 *
 * @ORM\Table(name="match", indexes={@ORM\Index(name="id_equipe2", columns={"id_equipe2"}), @ORM\Index(name="id_stade", columns={"id_stade"}), @ORM\Index(name="id_equipe1", columns={"id_equipe1"}), @ORM\Index(name="id_org", columns={"id_org"})})
 *@ORM\Entity
 */
class Match
{

    /**
     * @var int
     *
     * @ORM\Column(name="id_match", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMatch;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_deb", type="string", length=255, nullable=false)
     * @Assert\Length(
     *      min = 8,
     *      max = 8,
     *      minMessage = "heure deb non valide ",
     *      maxMessage = "heure deb non valide ",
     *      allowEmptyString = false
     * )
     * @Assert\NotBlank(message="indiquer heure deb")
     *
     * @Assert\NotNull
     */
    private $heureDeb;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_fin", type="string", length=255, nullable=false)
     * @Assert\Length(
     *      min = 8,
     *      max = 8,
     *      minMessage = "heure fin non valide ",
     *      maxMessage = "heure fin non valide ",
     *      allowEmptyString = false
     * )
     * @Assert\NotBlank(message="indiquer heure fin")
     *
     * @Assert\NotNull
     */
    private $heureFin;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_spectateur", type="integer", nullable=true)
     * @Assert\NotBlank(message="indiquer le nombre de spectateur")
     * @Assert\PositiveOrZero
     */
    private $nbSpectateur;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)

     * * @Assert\NotBlank(message="indiquer une description")
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "taille minimale du champs description est  {{ limit }} caractère",
     *      maxMessage = "taille maximale du champs description est {{ limit }} caractère",
     *      allowEmptyString = false
     * )

     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="indiquer un status")
     * @Assert\Length(
     *      min = 1,
     *      max = 10,
     *      minMessage = "taille minimale du champs status est  {{ limit }} caractère",
     *      maxMessage = "taille maximale du champs status est {{ limit }} caractère",
     *      allowEmptyString = false
     * )

     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="score", type="string", length=255, nullable=true)
     */
    private $score;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Equipe",inversedBy="Match")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_equipe1", referencedColumnName="id_e")
     * })
     */
    private $idEquipe1;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Equipe",inversedBy="Match")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_equipe2", referencedColumnName="id_e")
     * })
     */
    private $idEquipe2;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\User",inversedBy="Match")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_org", referencedColumnName="id")
     * })
     */
    private $idOrg;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Stade",inversedBy="Match")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_stade", referencedColumnName="id_stade")
     * })
     */
    private $idStade;




    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getHeureDeb()
    {
        return $this->heureDeb;
    }

    /**
     * @return string
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * @return int
     */
    public function getNbSpectateur()
    {
        return $this->nbSpectateur;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getIdMatch()
    {
        return $this->idMatch;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @return int
     */
    public function getIdEquipe1()
    {
        return $this->idEquipe1;
    }

    /**
     * @return int
     */
    public function getIdEquipe2()
    {
        return $this->idEquipe2;
    }

    /**
     * @return int
     */
    public function getIdOrg()
    {
        return $this->idOrg;
    }

    /**
     * @return int
     */
    public function getIdStade()
    {
        return $this->idStade;
    }

    /**
     * @param DateTime $date
     */
    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }

    /**
     * @param int $idMatch
     */
    public function setIdMatch(int $idMatch): void
    {
        $this->idMatch = $idMatch;
    }

    /**
     * @param string $heureDeb
     */
    public function setHeureDeb(string $heureDeb): void
    {
        $this->heureDeb = $heureDeb;
    }

    /**
     * @param string $heureFin
     */
    public function setHeureFin(string $heureFin): void
    {
        $this->heureFin = $heureFin;
    }

    /**
     * @param int $nbSpectateur
     */
    public function setNbSpectateur(int $nbSpectateur): void
    {
        $this->nbSpectateur = $nbSpectateur;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @param string $score
     */
    public function setScore(string $score): void
    {
        $this->score = $score;
    }

    /**
     * Set idEquipe1
     *
     * @param integer $idEquipe1
     *
     * @return Match
     */
    public function setIdEquipe1($idEquipe1): Match
    {
        $this->idEquipe1 = $idEquipe1;
        return $this;
    }


    /**
     * Set idEquipe2
     *
     * @param integer $idEquipe2
     *
     * @return Match
     */
    public function setIdEquipe2($idEquipe2): Match
    {
        $this->idEquipe2 = $idEquipe2;
        return $this;
    }
    /**
     * Set idOrg
     *
     * @param integer $idOrg
     *
     * @return Match
     */
    public function setIdOrg($idOrg) :Match
    {
        $this->idOrg = $idOrg;
        return $this;
    }

    /**
     * Set idStade
     *
     * @param integer $idStade
     *
     * @return Match
     */
    public function setIdStade($idStade): Match
    {
        $this->idStade = $idStade;
        return $this;
    }



}
