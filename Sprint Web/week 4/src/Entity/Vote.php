<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vote
 *
 * @ORM\Table(name="vote", indexes={@ORM\Index(name="id_match", columns={"id_match"})})
 * @ORM\Entity()
 */
class Vote
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_vote", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVote;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Matchs")
     *
     * @ORM\Column(name="id_match", type="integer", nullable=false)
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_match", referencedColumnName="id_match")
     * })
     */
    private $idMatch;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var int
     *
     * @ORM\Column(name="vote", type="integer", nullable=false)

     */
    private $vote;

    /**
     * @return int
     */
    public function getIdVote(): int
    {
        return $this->idVote;
    }

    /**
     * @param int $idVote
     */
    public function setIdVote(int $idVote): void
    {
        $this->idVote = $idVote;
    }

    /**
     * @return int
     */
    public function getIdMatch(): int
    {
        return $this->idMatch;
    }

    /**
     * @param int $idMatch
     */
    public function setIdMatch(int $idMatch): void
    {
        $this->idMatch = $idMatch;
    }

    /**
     * @return int
     */
    public function getIdUser(): int
    {
        return $this->idUser;
    }

    /**
     * @param int $idUser
     */
    public function setIdUser(int $idUser): void
    {
        $this->idUser = $idUser;
    }



    /**
     * @return mixed
     */
    public function getVote()
    {
        return $this->vote;
    }

    /**
     * @param mixed $vote
     */
    public function setVote($vote): void
    {
        $this->vote = $vote;
    }


}
