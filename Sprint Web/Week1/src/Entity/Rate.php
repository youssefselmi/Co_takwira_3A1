<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rate
 *
 * @ORM\Table(name="rate", indexes={@ORM\Index(name="idCoach", columns={"idCoach"})})
 * @ORM\Entity
 */
class Rate
{
    /**
     * @var int
     *
     * @ORM\Column(name="idRate", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idCoach", type="integer", nullable=true)
     */
    private $idcoach;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NomPrenomCoach", type="string", length=50, nullable=true)
     */
    private $nomprenomcoach;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NomEquipe", type="string", length=50, nullable=true)
     */
    private $nomequipe;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateRate", type="date", nullable=true)
     */
    private $daterate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Rate", type="integer", nullable=true)
     */
    private $rate;


}
