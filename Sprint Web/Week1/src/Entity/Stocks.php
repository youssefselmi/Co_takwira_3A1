<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stocks
 *
 * @ORM\Table(name="stocks")
 * @ORM\Entity
 */
class Stocks
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Produit", type="string", length=50, nullable=false)
     */
    private $nomProduit;

    /**
     * @var int
     *
     * @ORM\Column(name="Quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var float
     *
     * @ORM\Column(name="Prix_Unite", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixUnite;


}
