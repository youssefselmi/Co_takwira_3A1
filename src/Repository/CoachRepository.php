<?php


namespace coachBundle\Repository;
namespace App\Repository;

use App\Entity\Coach;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Driver\Exception;
use Doctrine\Persistence\ManagerRegistry;
use phpDocumentor\Reflection\Types\Null_;


/**
 * @method Coach|null find($id, $lockMode = null, $lockVersion = null)
 * @method Coach|null findOneBy(array $criteria, array $orderBy = null)
 * @method Coach[]    findAll()
 * @method Coach[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */



class CoachRepository extends ServiceEntityRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Coach::class);
    }




    public function mise_a_jour()
    {

        $conn = $this->getEntityManager()->getConnection();

        $sql = '
           DELETE FROM `coach` WHERE DATE_FIN_CONTRAT < CURRENT_DATE ';
        $stmt = $conn->prepare($sql);
        $stmt->execute();


    }












}