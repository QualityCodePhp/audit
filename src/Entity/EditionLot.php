<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EditionLot
 *
 * @ORM\Table(name="edition_lot", uniqueConstraints={@ORM\UniqueConstraint(name="edition_lot_pk", columns={"actid"})})
 * @ORM\Entity
 */
class EditionLot
{
    /**
     * @var string
     *
     * @ORM\Column(name="actid", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="edition_lot_actid_seq", allocationSize=1, initialValue=1)
     */
    private $actid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="typeachat", type="string", length=200, nullable=true)
     */
    private $typeachat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelletypemesure", type="string", length=200, nullable=true)
     */
    private $libelletypemesure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libellegfe", type="string", length=200, nullable=true)
     */
    private $libellegfe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libnummodele", type="string", length=200, nullable=true)
     */
    private $libnummodele;

    /**
     * @var string|null
     *
     * @ORM\Column(name="composantes", type="string", length=1000, nullable=true)
     */
    private $composantes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contributionattendue", type="string", length=1000, nullable=true)
     */
    private $contributionattendue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="publicprioritaire", type="string", length=1000, nullable=true)
     */
    private $publicprioritaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="autresspecificites", type="string", length=3000, nullable=true)
     */
    private $autresspecificites;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prioritesregionales", type="string", length=1000, nullable=true)
     */
    private $prioritesregionales;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombreexecution", type="string", length=200, nullable=true)
     */
    private $nombreexecution;

    /**
     * @var string|null
     *
     * @ORM\Column(name="flagreconduction", type="string", length=200, nullable=true)
     */
    private $flagreconduction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="datedebparcours", type="string", length=200, nullable=true)
     */
    private $datedebparcours;

    /**
     * @var string|null
     *
     * @ORM\Column(name="datefinentrees", type="string", length=200, nullable=true)
     */
    private $datefinentrees;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parcoursminimoyenmaxi", type="string", length=1000, nullable=true)
     */
    private $parcoursminimoyenmaxi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zoneformation", type="string", length=1000, nullable=true)
     */
    private $zoneformation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="airerecrutement", type="string", length=1000, nullable=true)
     */
    private $airerecrutement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sitesobligatoire", type="string", length=1000, nullable=true)
     */
    private $sitesobligatoire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sitesoptionnels", type="string", length=1000, nullable=true)
     */
    private $sitesoptionnels;

    /**
     * @var string|null
     *
     * @ORM\Column(name="totalstagiairemarche", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $totalstagiairemarche;

    /**
     * @var string|null
     *
     * @ORM\Column(name="heurescentremini", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $heurescentremini;

    /**
     * @var string|null
     *
     * @ORM\Column(name="heurescentremaxi", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $heurescentremaxi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="heuresentreprisemini", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $heuresentreprisemini;

    /**
     * @var string|null
     *
     * @ORM\Column(name="heuresentreprisemaxi", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $heuresentreprisemaxi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accompagnementmini", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $accompagnementmini;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accompagnementmaxi", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $accompagnementmaxi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=500, nullable=true)
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="actspecifgeo", type="string", length=2000, nullable=true)
     */
    private $actspecifgeo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="actfid", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $actfid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domainepro", type="string", length=200, nullable=true)
     */
    private $domainepro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numlot", type="string", length=200, nullable=true)
     */
    private $numlot;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dureeinitialelot", type="string", length=200, nullable=true)
     */
    private $dureeinitialelot;

    /**
     * @var string|null
     *
     * @ORM\Column(name="specifairemiseenoeuvre", type="string", length=2000, nullable=true)
     */
    private $specifairemiseenoeuvre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nbhcent", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $nbhcent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nbhent", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $nbhent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nbvent", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $nbvent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nbhfcent", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $nbhfcent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nbprest", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $nbprest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nblic", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $nblic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nbcert", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $nbcert;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nbequip", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $nbequip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eligiblefse", type="string", length=200, nullable=true)
     */
    private $eligiblefse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="droitremu", type="string", length=200, nullable=true)
     */
    private $droitremu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="datedebreal", type="string", length=200, nullable=true)
     */
    private $datedebreal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="datefinreal", type="string", length=200, nullable=true)
     */
    private $datefinreal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sousgfe", type="string", length=2000, nullable=true)
     */
    private $sousgfe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montforf", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $montforf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nbsession", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $nbsession;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dureemoycent", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $dureemoycent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dureemoyent", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $dureemoyent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelleco", type="string", length=2000, nullable=true)
     */
    private $libelleco;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libellerefsectoriel", type="string", length=500, nullable=true)
     */
    private $libellerefsectoriel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libellecampagne", type="string", length=500, nullable=true)
     */
    private $libellecampagne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numeropresage", type="string", length=200, nullable=true)
     */
    private $numeropresage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentairesession", type="string", length=2000, nullable=true)
     */
    private $commentairesession;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nbsite", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $nbsite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fsemesure", type="string", length=500, nullable=true)
     */
    private $fsemesure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fseaxe", type="string", length=500, nullable=true)
     */
    private $fseaxe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fseobjectif", type="string", length=500, nullable=true)
     */
    private $fseobjectif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libellestatut", type="string", length=500, nullable=true)
     */
    private $libellestatut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelletypeachat", type="string", length=500, nullable=true)
     */
    private $libelletypeachat;

    public function getActid(): ?string
    {
        return $this->actid;
    }

    public function getTypeachat(): ?string
    {
        return $this->typeachat;
    }

    public function setTypeachat(?string $typeachat): self
    {
        $this->typeachat = $typeachat;

        return $this;
    }

    public function getLibelletypemesure(): ?string
    {
        return $this->libelletypemesure;
    }

    public function setLibelletypemesure(?string $libelletypemesure): self
    {
        $this->libelletypemesure = $libelletypemesure;

        return $this;
    }

    public function getLibellegfe(): ?string
    {
        return $this->libellegfe;
    }

    public function setLibellegfe(?string $libellegfe): self
    {
        $this->libellegfe = $libellegfe;

        return $this;
    }

    public function getLibnummodele(): ?string
    {
        return $this->libnummodele;
    }

    public function setLibnummodele(?string $libnummodele): self
    {
        $this->libnummodele = $libnummodele;

        return $this;
    }

    public function getComposantes(): ?string
    {
        return $this->composantes;
    }

    public function setComposantes(?string $composantes): self
    {
        $this->composantes = $composantes;

        return $this;
    }

    public function getContributionattendue(): ?string
    {
        return $this->contributionattendue;
    }

    public function setContributionattendue(?string $contributionattendue): self
    {
        $this->contributionattendue = $contributionattendue;

        return $this;
    }

    public function getPublicprioritaire(): ?string
    {
        return $this->publicprioritaire;
    }

    public function setPublicprioritaire(?string $publicprioritaire): self
    {
        $this->publicprioritaire = $publicprioritaire;

        return $this;
    }

    public function getAutresspecificites(): ?string
    {
        return $this->autresspecificites;
    }

    public function setAutresspecificites(?string $autresspecificites): self
    {
        $this->autresspecificites = $autresspecificites;

        return $this;
    }

    public function getPrioritesregionales(): ?string
    {
        return $this->prioritesregionales;
    }

    public function setPrioritesregionales(?string $prioritesregionales): self
    {
        $this->prioritesregionales = $prioritesregionales;

        return $this;
    }

    public function getNombreexecution(): ?string
    {
        return $this->nombreexecution;
    }

    public function setNombreexecution(?string $nombreexecution): self
    {
        $this->nombreexecution = $nombreexecution;

        return $this;
    }

    public function getFlagreconduction(): ?string
    {
        return $this->flagreconduction;
    }

    public function setFlagreconduction(?string $flagreconduction): self
    {
        $this->flagreconduction = $flagreconduction;

        return $this;
    }

    public function getDatedebparcours(): ?string
    {
        return $this->datedebparcours;
    }

    public function setDatedebparcours(?string $datedebparcours): self
    {
        $this->datedebparcours = $datedebparcours;

        return $this;
    }

    public function getDatefinentrees(): ?string
    {
        return $this->datefinentrees;
    }

    public function setDatefinentrees(?string $datefinentrees): self
    {
        $this->datefinentrees = $datefinentrees;

        return $this;
    }

    public function getParcoursminimoyenmaxi(): ?string
    {
        return $this->parcoursminimoyenmaxi;
    }

    public function setParcoursminimoyenmaxi(?string $parcoursminimoyenmaxi): self
    {
        $this->parcoursminimoyenmaxi = $parcoursminimoyenmaxi;

        return $this;
    }

    public function getZoneformation(): ?string
    {
        return $this->zoneformation;
    }

    public function setZoneformation(?string $zoneformation): self
    {
        $this->zoneformation = $zoneformation;

        return $this;
    }

    public function getAirerecrutement(): ?string
    {
        return $this->airerecrutement;
    }

    public function setAirerecrutement(?string $airerecrutement): self
    {
        $this->airerecrutement = $airerecrutement;

        return $this;
    }

    public function getSitesobligatoire(): ?string
    {
        return $this->sitesobligatoire;
    }

    public function setSitesobligatoire(?string $sitesobligatoire): self
    {
        $this->sitesobligatoire = $sitesobligatoire;

        return $this;
    }

    public function getSitesoptionnels(): ?string
    {
        return $this->sitesoptionnels;
    }

    public function setSitesoptionnels(?string $sitesoptionnels): self
    {
        $this->sitesoptionnels = $sitesoptionnels;

        return $this;
    }

    public function getTotalstagiairemarche(): ?string
    {
        return $this->totalstagiairemarche;
    }

    public function setTotalstagiairemarche(?string $totalstagiairemarche): self
    {
        $this->totalstagiairemarche = $totalstagiairemarche;

        return $this;
    }

    public function getHeurescentremini(): ?string
    {
        return $this->heurescentremini;
    }

    public function setHeurescentremini(?string $heurescentremini): self
    {
        $this->heurescentremini = $heurescentremini;

        return $this;
    }

    public function getHeurescentremaxi(): ?string
    {
        return $this->heurescentremaxi;
    }

    public function setHeurescentremaxi(?string $heurescentremaxi): self
    {
        $this->heurescentremaxi = $heurescentremaxi;

        return $this;
    }

    public function getHeuresentreprisemini(): ?string
    {
        return $this->heuresentreprisemini;
    }

    public function setHeuresentreprisemini(?string $heuresentreprisemini): self
    {
        $this->heuresentreprisemini = $heuresentreprisemini;

        return $this;
    }

    public function getHeuresentreprisemaxi(): ?string
    {
        return $this->heuresentreprisemaxi;
    }

    public function setHeuresentreprisemaxi(?string $heuresentreprisemaxi): self
    {
        $this->heuresentreprisemaxi = $heuresentreprisemaxi;

        return $this;
    }

    public function getAccompagnementmini(): ?string
    {
        return $this->accompagnementmini;
    }

    public function setAccompagnementmini(?string $accompagnementmini): self
    {
        $this->accompagnementmini = $accompagnementmini;

        return $this;
    }

    public function getAccompagnementmaxi(): ?string
    {
        return $this->accompagnementmaxi;
    }

    public function setAccompagnementmaxi(?string $accompagnementmaxi): self
    {
        $this->accompagnementmaxi = $accompagnementmaxi;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getActspecifgeo(): ?string
    {
        return $this->actspecifgeo;
    }

    public function setActspecifgeo(?string $actspecifgeo): self
    {
        $this->actspecifgeo = $actspecifgeo;

        return $this;
    }

    public function getActfid(): ?string
    {
        return $this->actfid;
    }

    public function setActfid(?string $actfid): self
    {
        $this->actfid = $actfid;

        return $this;
    }

    public function getDomainepro(): ?string
    {
        return $this->domainepro;
    }

    public function setDomainepro(?string $domainepro): self
    {
        $this->domainepro = $domainepro;

        return $this;
    }

    public function getNumlot(): ?string
    {
        return $this->numlot;
    }

    public function setNumlot(?string $numlot): self
    {
        $this->numlot = $numlot;

        return $this;
    }

    public function getDureeinitialelot(): ?string
    {
        return $this->dureeinitialelot;
    }

    public function setDureeinitialelot(?string $dureeinitialelot): self
    {
        $this->dureeinitialelot = $dureeinitialelot;

        return $this;
    }

    public function getSpecifairemiseenoeuvre(): ?string
    {
        return $this->specifairemiseenoeuvre;
    }

    public function setSpecifairemiseenoeuvre(?string $specifairemiseenoeuvre): self
    {
        $this->specifairemiseenoeuvre = $specifairemiseenoeuvre;

        return $this;
    }

    public function getNbhcent(): ?string
    {
        return $this->nbhcent;
    }

    public function setNbhcent(?string $nbhcent): self
    {
        $this->nbhcent = $nbhcent;

        return $this;
    }

    public function getNbhent(): ?string
    {
        return $this->nbhent;
    }

    public function setNbhent(?string $nbhent): self
    {
        $this->nbhent = $nbhent;

        return $this;
    }

    public function getNbvent(): ?string
    {
        return $this->nbvent;
    }

    public function setNbvent(?string $nbvent): self
    {
        $this->nbvent = $nbvent;

        return $this;
    }

    public function getNbhfcent(): ?string
    {
        return $this->nbhfcent;
    }

    public function setNbhfcent(?string $nbhfcent): self
    {
        $this->nbhfcent = $nbhfcent;

        return $this;
    }

    public function getNbprest(): ?string
    {
        return $this->nbprest;
    }

    public function setNbprest(?string $nbprest): self
    {
        $this->nbprest = $nbprest;

        return $this;
    }

    public function getNblic(): ?string
    {
        return $this->nblic;
    }

    public function setNblic(?string $nblic): self
    {
        $this->nblic = $nblic;

        return $this;
    }

    public function getNbcert(): ?string
    {
        return $this->nbcert;
    }

    public function setNbcert(?string $nbcert): self
    {
        $this->nbcert = $nbcert;

        return $this;
    }

    public function getNbequip(): ?string
    {
        return $this->nbequip;
    }

    public function setNbequip(?string $nbequip): self
    {
        $this->nbequip = $nbequip;

        return $this;
    }

    public function getEligiblefse(): ?string
    {
        return $this->eligiblefse;
    }

    public function setEligiblefse(?string $eligiblefse): self
    {
        $this->eligiblefse = $eligiblefse;

        return $this;
    }

    public function getDroitremu(): ?string
    {
        return $this->droitremu;
    }

    public function setDroitremu(?string $droitremu): self
    {
        $this->droitremu = $droitremu;

        return $this;
    }

    public function getDatedebreal(): ?string
    {
        return $this->datedebreal;
    }

    public function setDatedebreal(?string $datedebreal): self
    {
        $this->datedebreal = $datedebreal;

        return $this;
    }

    public function getDatefinreal(): ?string
    {
        return $this->datefinreal;
    }

    public function setDatefinreal(?string $datefinreal): self
    {
        $this->datefinreal = $datefinreal;

        return $this;
    }

    public function getSousgfe(): ?string
    {
        return $this->sousgfe;
    }

    public function setSousgfe(?string $sousgfe): self
    {
        $this->sousgfe = $sousgfe;

        return $this;
    }

    public function getMontforf(): ?string
    {
        return $this->montforf;
    }

    public function setMontforf(?string $montforf): self
    {
        $this->montforf = $montforf;

        return $this;
    }

    public function getNbsession(): ?string
    {
        return $this->nbsession;
    }

    public function setNbsession(?string $nbsession): self
    {
        $this->nbsession = $nbsession;

        return $this;
    }

    public function getDureemoycent(): ?string
    {
        return $this->dureemoycent;
    }

    public function setDureemoycent(?string $dureemoycent): self
    {
        $this->dureemoycent = $dureemoycent;

        return $this;
    }

    public function getDureemoyent(): ?string
    {
        return $this->dureemoyent;
    }

    public function setDureemoyent(?string $dureemoyent): self
    {
        $this->dureemoyent = $dureemoyent;

        return $this;
    }

    public function getLibelleco(): ?string
    {
        return $this->libelleco;
    }

    public function setLibelleco(?string $libelleco): self
    {
        $this->libelleco = $libelleco;

        return $this;
    }

    public function getLibellerefsectoriel(): ?string
    {
        return $this->libellerefsectoriel;
    }

    public function setLibellerefsectoriel(?string $libellerefsectoriel): self
    {
        $this->libellerefsectoriel = $libellerefsectoriel;

        return $this;
    }

    public function getLibellecampagne(): ?string
    {
        return $this->libellecampagne;
    }

    public function setLibellecampagne(?string $libellecampagne): self
    {
        $this->libellecampagne = $libellecampagne;

        return $this;
    }

    public function getNumeropresage(): ?string
    {
        return $this->numeropresage;
    }

    public function setNumeropresage(?string $numeropresage): self
    {
        $this->numeropresage = $numeropresage;

        return $this;
    }

    public function getCommentairesession(): ?string
    {
        return $this->commentairesession;
    }

    public function setCommentairesession(?string $commentairesession): self
    {
        $this->commentairesession = $commentairesession;

        return $this;
    }

    public function getNbsite(): ?string
    {
        return $this->nbsite;
    }

    public function setNbsite(?string $nbsite): self
    {
        $this->nbsite = $nbsite;

        return $this;
    }

    public function getFsemesure(): ?string
    {
        return $this->fsemesure;
    }

    public function setFsemesure(?string $fsemesure): self
    {
        $this->fsemesure = $fsemesure;

        return $this;
    }

    public function getFseaxe(): ?string
    {
        return $this->fseaxe;
    }

    public function setFseaxe(?string $fseaxe): self
    {
        $this->fseaxe = $fseaxe;

        return $this;
    }

    public function getFseobjectif(): ?string
    {
        return $this->fseobjectif;
    }

    public function setFseobjectif(?string $fseobjectif): self
    {
        $this->fseobjectif = $fseobjectif;

        return $this;
    }

    public function getLibellestatut(): ?string
    {
        return $this->libellestatut;
    }

    public function setLibellestatut(?string $libellestatut): self
    {
        $this->libellestatut = $libellestatut;

        return $this;
    }

    public function getLibelletypeachat(): ?string
    {
        return $this->libelletypeachat;
    }

    public function setLibelletypeachat(?string $libelletypeachat): self
    {
        $this->libelletypeachat = $libelletypeachat;

        return $this;
    }


}
