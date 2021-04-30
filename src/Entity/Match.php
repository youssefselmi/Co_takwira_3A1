<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Match
 *
 * @ORM\Table(name="match", indexes={@ORM\Index(name="id_stade", columns={"id_stade"}), @ORM\Index(name="id_equipe2", columns={"id_equipe2"}), @ORM\Index(name="id_equipe1", columns={"id_equipe1"}), @ORM\Index(name="id_org", columns={"id_org"})})
 * @ORM\Entity
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
     * @var int|null
     *
     * @ORM\Column(name="nb_spectateur", type="integer", nullable=true)
     */
    private $nbSpectateur;

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


}
