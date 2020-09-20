<?php


namespace App\Repository;


use App\Entity\Offre;
use App\Entity\SessionFormationEnvoi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Mapping\ClassMetadata;

class SessionFormationEnvoiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry,  SessionFormationEnvoi::class);
    }
}