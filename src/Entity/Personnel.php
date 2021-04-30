<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personnel
 *
 * @ORM\Table(name="personnel")
 * @ORM\Entity
 */
class Personnel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_personnel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPersonnel;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_personnel", type="string", length=50, nullable=false)
     */
    private $nomPersonnel;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_personnel", type="string", length=50, nullable=false)
     */
    private $prenomPersonnel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=false)
     */
    private $dateNaissance;

    /**
     * @var int
     *
     * @ORM\Column(name="role", type="integer", nullable=false)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_mail", type="string", length=50, nullable=false)
     */
    private $adresseMail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_contrat", type="date", nullable=false)
     */
    private $dateFinContrat;

    /**
     * @return int
     */
    public function getIdPersonnel(): int
    {
        return $this->idPersonnel;
    }

    /**
     * @param int $idPersonnel
     */
    public function setIdPersonnel(int $idPersonnel): void
    {
        $this->idPersonnel = $idPersonnel;
    }


}
