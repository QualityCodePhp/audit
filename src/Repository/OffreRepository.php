<?php

namespace App\Repository;

use App\Entity\Offre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Query\ResultSetMapping;

/**
 * @method Offre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Offre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Offre[]    findAll()
 * @method Offre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OffreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Offre::class);
    }

    public function findByOffNumMarcheAndComposanteForLheo($numeroMarche, $codesComposante)
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT o
                  FROM  App\Entity\Offre o
                  JOIN  App\Entity\Commande c WITH o.offCommande = c.cmdId 
                  JOIN  App\Entity\Programme p WITH c.cmdProgramme = p.prgId
                  LEFT JOIN  App\Entity\Etablssmt eo WITH o.offEtstitulaire = eo.etsId
                  LEFT JOIN  App\Entity\Utilisateur eou WITH eo.etsId=eou.utiEtablssmt AND coalesce(eou.utiReferent, 0) = 1 AND eou.utiEtat <> -1
                  LEFT JOIN  App\Entity\OffreModule om WITH om.off= o.offId AND om.ofmouNumero IN (:codesComposante)
                  LEFT JOIN  App\Entity\SessionFormation sf WITH sf.ofmou= om.ofmouId
                  LEFT JOIN  App\Entity\SessionFormationEnvoi sfe WITH sfe.sessionFormation= sf.sessId AND sfe.etaCode=17
                  WHERE ((c.cmdType=0 AND o.offEtat in (50, 90)) OR (c.cmdType=1 AND o.offEtat in (45, 90)))
                  AND coalesce(p.prgFlgPasPrescription, 0) = 0
                  AND o.offNumMarche like :numMar
                  ORDER BY o.offId ASC'
        )->setParameter('numMar', $numeroMarche .'%')
        ->setParameter('codesComposante', $codesComposante)
        ->setFetchMode("App\Entity\Offre", "offEtstitulaire" , ClassMetadata::FETCH_EAGER)
        ->setFetchMode("App\Entity\Offre", "offCommande" , ClassMetadata::FETCH_EAGER)
        ->setFetchMode("App\Entity\Offre", "cvt" , ClassMetadata::FETCH_EAGER)
        ->setFetchMode("App\Entity\Offre", "offCommission" , ClassMetadata::FETCH_EAGER)
        ->setFetchMode("App\Entity\Offre", "ofmou" , ClassMetadata::FETCH_EAGER)
        ->setFetchMode("App\Entity\OffreModule", "sessionsFormation" , ClassMetadata::FETCH_EAGER)
        ->setFetchMode("App\Entity\SessionFormation", "sessionFormationEnvoi" , ClassMetadata::FETCH_EAGER)
        ->setFetchMode("App\Entity\SessionFormationEnvoi", "adr" , ClassMetadata::FETCH_EAGER)
        ->setFetchMode("App\Entity\SessionFormationEnvoi", "sessionFinanceurEnvoi" , ClassMetadata::FETCH_EAGER)
        ->setFetchMode("App\Entity\Commande", "cmdProgramme" , ClassMetadata::FETCH_EAGER)
        ->setFetchMode("App\Entity\Etablssmt", "utiEtablssmt" , ClassMetadata::FETCH_EAGER)
        ->setFetchMode("App\Entity\Etablssmt", "adr" , ClassMetadata::FETCH_EAGER)
        ->setFetchMode("App\Entity\Programme", "refIdTypeAchat" , ClassMetadata::FETCH_EAGER)
        ;
        return $query->getResult();
    }

}
