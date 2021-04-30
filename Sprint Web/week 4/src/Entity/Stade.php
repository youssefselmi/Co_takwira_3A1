<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Component\Validator\Constraints\MaxLength;
use Symfony\Component\Validator\Constraints\MinLength;



/**
 * Stade
 *
 * @ORM\Table(name="stade", indexes={@ORM\Index(name="idUser", columns={"id_User"})})
 * @ORM\Entity(repositoryClass="App\Repository\StadeRepository")
 */
class Stade
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_stade", type="integer", nullable=false)
     * @ORM\OneToMany(targetEntity="App\Entity\Match",mappedBy="Stade")

     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStade;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_stade", type="string", length=100, nullable=false)
     * @Assert\Length(
     *      min = 3,
     *      max = 10,
     *      minMessage = "taille minimale du champs nom stade est  {{ limit }} caractère",
     *      maxMessage = "taille maximale du champs nom stade est {{ limit }} caractère",
     *      allowEmptyString = false
     * )
     * @Assert\NotBlank(message="indiquer le nom du stade")
     *
     * @Assert\NotNull
     */
    private $nomStade;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="indiquer la ville")
     * @Assert\Length(
     *      min = 3,
     *      max = 10,
     *      minMessage = "taille minimale du champs ville est  {{ limit }} caractère",
     *      maxMessage = "taille maximale du champs ville est {{ limit }} caractère",
     *      allowEmptyString = false
     * )
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="indiquer l'adresse")
     * @Assert\Country
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="capacite", type="integer", nullable=false)
     * @Assert\NotBlank(message="indiquer la capacite")
     * @Assert\PositiveOrZero
     */
    private $capacite;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\User",inversedBy="Stade")
     *
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_User", referencedColumnName="id")
     * })
     */


    private $idUser;

    public function getIdStade(): ?int
    {
        return $this->idStade;
    }

    /**
     * Get idUser
     *
     * @return int
     */

    public function getIdUser()
    {
        return $this->idUser;
    }
    public function getCapacite(): ?int
    {
        return $this->capacite;
    }
    /**
     * Get nomStade
     *
     * @return string
     */
    public function getnomStade()
    {
        return $this->nomStade;
    }
    public function getVille(): ?string
    {
        return $this->ville;
    }
    public function getAdresse(): ?string
    {
        return $this->adresse;
    }
    public function setNomStade(string $name)
    {
        $this->nomStade = $name;

        return $this;
    }
    public function setVille(string $name)
    {
        $this->ville = $name;

        return $this;
    }
    public function setAdresse(string $name)
    {
        $this->adresse= $name;

        return $this;
    }
    public function setCapacite(int $c)
    {
        $this->capacite = $c;

        return $this;
    }

    /**
     * Set IdUser
     *
     * @param integer $a
     *
     * @return Stade
     */
    public function setIdUser($a): Stade
    {
        $this->idUser= $a;

        return $this;
    }

}
