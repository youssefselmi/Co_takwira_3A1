<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coach
 *
 * @ORM\Table(name="coach")
 * @ORM\Entity
 */
class Coach
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_coach", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCoach;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_coach", type="string", length=50, nullable=false)
     */
    private $nomCoach;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_coach", type="string", length=50, nullable=false)
     */
    private $prenomCoach;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=false)
     */
    private $dateNaissance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="grade", type="string", length=50, nullable=true)
     */
    private $grade;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_contrat", type="date", nullable=false)
     */
    private $dateFinContrat;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_mail", type="string", length=50, nullable=false)
     */
    private $adresseMail;

    /**
     * @var float
     *
     * @ORM\Column(name="salaire", type="float", precision=10, scale=0, nullable=false)
     */
    private $salaire;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_trophe_locaux", type="integer", nullable=false)
     */
    private $nbTropheLocaux;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_trophe_internationaux", type="integer", nullable=false)
     */
    private $nbTropheInternationaux;

    /**
     * @var string
     *
     * @ORM\Column(name="formation_prefere", type="string", length=50, nullable=false)
     */
    private $formationPrefere;

    /**
     * @var string
     *
     * @ORM\Column(name="image_formation", type="string", length=255, nullable=false)
     */
    private $imageFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="image_coach", type="string", length=255, nullable=false)
     */
    private $imageCoach;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer", nullable=false)
     */
    private $age;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mdp_coach", type="string", length=50, nullable=true)
     */
    private $mdpCoach;


}
