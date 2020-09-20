<?php

namespace App\Repository;

use App\Entity\JetonCoform;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method JetonCoform|null find($id, $lockMode = null, $lockVersion = null)
 * @method JetonCoform|null findOneBy(array $criteria, array $orderBy = null)
 * @method JetonCoform[]    findAll()
 * @method JetonCoform[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JetonCoformRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JetonCoform::class);
    }

}
