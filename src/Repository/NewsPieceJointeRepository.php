<?php

namespace App\Repository;

use App\Entity\NewsPieceJointe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NewsPieceJointe|null find($id, $lockMode = null, $lockVersion = null)
 * @method NewsPieceJointe|null findOneBy(array $criteria, array $orderBy = null)
 * @method NewsPieceJointe[]    findAll()
 * @method NewsPieceJointe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NewsPieceJointeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NewsPieceJointe::class);
    }

    // /**
    //  * @return NewsPieceJointe[] Returns an array of NewsPieceJointe objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NewsPieceJointe
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
