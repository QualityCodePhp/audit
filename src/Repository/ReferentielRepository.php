<?php


namespace App\Repository;

use App\Entity\Referentiel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
/**
 * @method Referentiel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Referentiel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Referentiel[]    findAll()
 * @method Referentiel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReferentielRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Referentiel::class);
    }
    public function findByReferentielQB($typeRef)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.trfCode = :ref')
            ->setParameter('ref', $typeRef)
            ->orderBy('r.refRang', 'ASC')
            ;
    }

    public function findByReferentiel($typeRef)
    {
        return $this->findByReferentielQB($typeRef)
            ->getQuery()
            ->getResult();
    }
}