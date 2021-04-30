<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stade
 *
 * @ORM\Table(name="stade", indexes={@ORM\Index(name="idUser", columns={"id_User"})})
 * @ORM\Entity
 */
class Stade
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_stade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStade;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_stade", type="string", length=100, nullable=false)
     */
    private $nomStade;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=100, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=100, nullable=false)
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="capacite", type="integer", nullable=false)
     */
    private $capacite;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_User", referencedColumnName="id")
     * })
     */
    private $idUser;


}
