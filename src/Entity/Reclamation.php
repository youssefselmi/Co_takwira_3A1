<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="id_joueur", columns={"idJoueur"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idRec", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrec;

    /**
     * @var int
     *
     * @ORM\Column(name="idJoueur", type="integer", nullable=false)
     */
    private $idjoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="SujetRec", type="string", length=75, nullable=false)
     */
    private $sujetrec;

    /**
     * @var string
     *
     * @ORM\Column(name="DescriptionRec", type="string", length=50, nullable=false)
     */
    private $descriptionrec;

    /**
     * @var string
     *
     * @ORM\Column(name="PrioriteRec", type="string", length=6, nullable=false)
     */
    private $prioriterec;

    /**
     * @var string
     *
     * @ORM\Column(name="StatusRec", type="string", length=55, nullable=false)
     */
    private $statusrec;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateRec", type="date", nullable=false)
     */
    private $daterec;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateTraitement", type="date", nullable=true)
     */
    private $datetraitement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NomPrenomCoach", type="string", length=50, nullable=true)
     */
    private $nomprenomcoach;

    /**
     * @var string
     *
     * @ORM\Column(name="NomJoueur", type="string", length=255, nullable=false)
     */
    private $nomjoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="PrenomJoueur", type="string", length=255, nullable=false)
     */
    private $prenomjoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="EmailJoueur", type="string", length=255, nullable=false)
     */
    private $emailjoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="TlJoueur", type="string", length=12, nullable=false)
     */
    private $tljoueur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imgRec", type="string", length=255, nullable=true)
     */
    private $imgrec;

    /**
     * @var int
     *
     * @ORM\Column(name="Opened", type="integer", nullable=false)
     */
    private $opened = '0';


}
