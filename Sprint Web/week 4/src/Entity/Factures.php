<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factures
 *
 * @ORM\Table(name="factures")
 * @ORM\Entity
 */
class Factures
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Facture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFacture;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Facture", type="string", length=50, nullable=false)
     */
    private $nomFacture;

    /**
     * @var float
     *
     * @ORM\Column(name="Prix_Facture", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixFacture;

    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=25, nullable=false)
     */
    private $status;


}
