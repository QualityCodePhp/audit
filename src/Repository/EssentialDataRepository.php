<?php
namespace App\Repository;

use App\Model\EssentialData\EssentialData;
use App\Model\EssentialData\Establishment;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query\ResultSetMapping;

class EssentialDataRepository
{
  private EntityManagerInterface $entityManager;

  public function __construct(EntityManagerInterface $entityManager) {
      $this->entityManager = $entityManager;
  }

  public function getEssentialData(\DateTime $date) {
      $connection = $this->entityManager->getConnection();
      $sql = "SELECT  off.OFF_ID,
              off.OFF_NUM_MARCHE,
              off.OFF_OBJET_AVENANT,
              off.OFF_DTFINEXE,
              off.OFF_DTDEBEXE,
              off.OFF_DATEVDMD,
              ofp.OFP_TYPEPRESTA,
              bde.BDP_MONTANT_TTC,
              ets.ETS_SIRET,
              ets.ETS_LIBELLE
              FROM DE_HISTO_AVENANTS  dha
              JOIN OFFRE  off ON dha.OFF_ID=off.OFF_ID
              JOIN OFFRE_PRESTA  ofp ON (off.OFF_ID=ofp.OFP_OFFRE and ofp.OFP_TYPEPRESTA='T')
              JOIN ETABLSSMT  ets ON ofp.OFP_ETS=ets.ETS_ID
              JOIN REPONSE rep ON ofp.OFP_ID=rep.OFP_ID
              JOIN BORDEREAU  bde ON (rep.REP_ID=bde.BDP_REPONSE and bde.BDP_INITIAL='1')
              WHERE dha.DHA_DATEV >= TO_DATE (:datev, 'dd/mm/yyyy')";

      $stmt = $connection->prepare($sql);
      $stmt->execute(['datev' => $date->format("d/m/Y")]);
      $data = $stmt->fetchAll();
      $essentialData = array();
      foreach ($data as $item) {
          $establishment = new Establishment($item["ETS_LIBELLE"], $item["ETS_SIRET"], floatval($item["BDP_MONTANT_TTC"]));
          if (!isset($essentialData[$item["OFF_ID"]])) {
            $essentialData[$item["OFF_ID"]] = new EssentialData($item["OFF_NUM_MARCHE"],
                isset($item["OFF_DTDEBEXE"])?\DateTime::createFromFormat('d-M-y', $item["OFF_DTDEBEXE"]):null,
                isset($item["OFF_DTFINEXE"])?\DateTime::createFromFormat('d-M-y',$item["OFF_DTFINEXE"]):null,
                isset($item["OFF_DATEVDMD"])?\DateTime::createFromFormat('d-M-y',$item["OFF_DATEVDMD"]):null,
                $item["OFF_OBJET_AVENANT"]
              );
      }
      $essentialData[$item["OFF_ID"]]->addEstablishment($establishment);
      unset($establishment);
    }
    return array_values($essentialData);
  }
}
