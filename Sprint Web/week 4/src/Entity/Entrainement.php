<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entrainement
 *
 * @ORM\Table(name="entrainement")
 * @ORM\Entity
 */
class Entrainement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_entrainement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEntrainement;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer", nullable=false)
     */
    private $duree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_entrainement", type="date", nullable=false)
     */
    private $dateEntrainement;

    /**
     * @var string
     *
     * @ORM\Column(name="heure", type="string", length=50, nullable=false)
     */
    private $heure;

    /**
     * @var int
     *
     * @ORM\Column(name="id_coach", type="integer", nullable=false)
     */
    private $idCoach;

    /**
     * @var int
     *
     * @ORM\Column(name="id_stade", type="integer", nullable=false)
     */
    private $idStade;

    /**
     * @var int
     *
     * @ORM\Column(name="id_equipe", type="integer", nullable=false)
     */
    private $idEquipe;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_equipee", type="string", length=255, nullable=false)
     */
    private $nomEquipee;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_coache", type="string", length=255, nullable=false)
     */
    private $nomCoache;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_stadee", type="string", length=255, nullable=false)
     */
    private $nomStadee;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=255, nullable=false)
     */
    private $type;


}
