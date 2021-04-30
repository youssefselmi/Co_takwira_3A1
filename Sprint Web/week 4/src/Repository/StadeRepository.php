<?php


namespace App\Repository;


use App\Entity\Stade;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


class StadeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Stade::class);
    }
    public function findNomStade($id)
    {
        $query = $this->getEntityManager()->createQuery(" SELECT r FROM App:stade r WHERE r.idStade
        
        ='$id'");
        return $query->getResult();
    }
    public function findStade($id)
    {
        $query = $this->getEntityManager()->createQuery(" SELECT r FROM App:stade r WHERE r.idStade
        
        ='$id'");
        return $query->getResult();
    }
}