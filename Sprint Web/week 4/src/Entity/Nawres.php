<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nawres
 *
 * @ORM\Table(name="nawres", indexes={@ORM\Index(name="id_equipe1", columns={"id_equipe1"}), @ORM\Index(name="id_stade", columns={"id_stade"}), @ORM\Index(name="id_org", columns={"id_org"}), @ORM\Index(name="id_equipe2", columns={"id_equipe2"})})
 * @ORM\Entity
 */
class Nawres
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_deb", type="string", length=255, nullable=false)
     */
    private $heureDeb;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_fin", type="string", length=255, nullable=false)
     */
    private $heureFin;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false)
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="score", type="string", length=255, nullable=true)
     */
    private $score;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_spectateur", type="integer", nullable=true)
     */
    private $nbSpectateur;

    /**
     * @var \Equipe
     *
     * @ORM\ManyToOne(targetEntity="Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_equipe1", referencedColumnName="id_e")
     * })
     */
    private $idEquipe1;

    /**
     * @var \Equipe
     *
     * @ORM\ManyToOne(targetEntity="Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_equipe2", referencedColumnName="id_e")
     * })
     */
    private $idEquipe2;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_org", referencedColumnName="id")
     * })
     */
    private $idOrg;

    /**
     * @var \Stade
     *
     * @ORM\ManyToOne(targetEntity="Stade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_stade", referencedColumnName="id_stade")
     * })
     */
    private $idStade;


    /**
     * Get Date
     *
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get heureDeb
     *
     * @return string
     */
    public function getHeureDeb()
    {
        return $this->heureDeb;
    }


    public function getHeureFin(): ?string
    {
        return $this->heureFin;
    }

    public function getNbSpectateur(): ?int
    {
        return $this->nbSpectateur;
    }
    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getIdMatch(): ?int
    {
        return $this->idMatch;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }
    public function getScore(): ?string
    {
        return $this->score;
    }

    public function getIdEquipe1(): ?int
    {
        return $this->idEquipe1;
    }

    public function getIdEquipe2(): ?int
    {
        return $this->idEquipe2;
    }
    public function getIdOrg(): ?int
    {
        return $this->idOrg;
    }
    public function getIdStade(): ?int
    {
        return $this->idStade;
    }


    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    /*   public function setIdMatch(int $idMatch)
       {
           $this->idMatch = $idMatch;
           return $this;
       }*/


    public function setHeureDeb(string $heureDeb)
    {
        $this->heureDeb = $heureDeb;
        return $this;
    }


    public function setHeureFin(string $heureFin)
    {
        $this->heureFin = $heureFin;
        return $this;
    }

    public function setNbSpectateur(int $nbSpectateur)
    {
        $this->nbSpectateur = $nbSpectateur;
        return $this;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
        return $this;
    }

    public function setStatus(string $st)
    {
        $this->status = $st;
        return $this;
    }

    public function setScore(string $score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * Set idEquipe1
     *
     * @param integer $idE
     *
     */
    public function setIdEquipe1($idE)
    {
        $this->idEquipe1 = $idE;
        return $this;
    }


    /**
     * Set idEquipe2
     *
     * @param integer $idE2
     *
     */
    public function setIdEquipe2($idE2)
    {
        $this->idEquipe2 = $idE2;
        return $this;
    }
    /**
     * Set idOrg
     *
     * @param integer $idOrg
     *
     */
    public function setIdOrg($idOrg)
    {
        $this->idOrg = $idOrg;
        return $this;
    }

    /**
     * Set idStade
     *
     * @param integer $idStade
     *
     */
    public function setIdStade($idStade)
    {
        $this->idStade = $idStade;
        return $this;
    }


}
