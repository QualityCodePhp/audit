<?php

namespace App\Repository;

use App\Entity\Etablssmt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Etablssmt|null find($id, $lockMode = null, $lockVersion = null)
 * @method Etablssmt|null findOneBy(array $criteria, array $orderBy = null)
 * @method Etablssmt[]    findAll()
 * @method Etablssmt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EtablssmtRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Etablssmt::class);
    }

    // /**
    //  * @return Etablssmt[] Returns an array of Etablssmt objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Etablssmt
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
