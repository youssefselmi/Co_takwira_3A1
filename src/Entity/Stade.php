<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stade
 *
 * @ORM\Table(name="stade")
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
     * @var int
     *
     * @ORM\Column(name="id_org", type="integer", nullable=false)
     */
    private $idOrg;

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
     * @return int
     */
    public function getIdStade(): int
    {
        return $this->idStade;
    }

    /**
     * @param int $idStade
     */
    public function setIdStade(int $idStade): void
    {
        $this->idStade = $idStade;
    }

    /**
     * @return int
     */
    public function getIdOrg(): int
    {
        return $this->idOrg;
    }

    /**
     * @param int $idOrg
     */
    public function setIdOrg(int $idOrg): void
    {
        $this->idOrg = $idOrg;
    }

    /**
     * @return string
     */
    public function getNomStade(): string
    {
        return $this->nomStade;
    }

    /**
     * @param string $nomStade
     */
    public function setNomStade(string $nomStade): void
    {
        $this->nomStade = $nomStade;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return string
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse(string $adresse): void
    {
        $this->adresse = $adresse;
    }

    /**
     * @return int
     */
    public function getCapacite(): int
    {
        return $this->capacite;
    }

    /**
     * @param int $capacite
     */
    public function setCapacite(int $capacite): void
    {
        $this->capacite = $capacite;
    }


}
