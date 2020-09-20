<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Af
 *
 * @ORM\Table(name="af", uniqueConstraints={@ORM\UniqueConstraint(name="af_pk", columns={"afo_id"})}, indexes={@ORM\Index(name="af_afo_prgcertif_ppif2", columns={"afo_prgcertif"}), @ORM\Index(name="af_afo_zoemploi_zlzif", columns={"afo_zoemploi"}), @ORM\Index(name="af_afo_rythme_rrif", columns={"afo_rythme"}), @ORM\Index(name="af_afo_nsfprinc___nsf_nsf_id_fk", columns={"afo_nsfprinc"}), @ORM\Index(name="af_afo_gfe___gfe_gfe_id_fk", columns={"afo_gfe"}), @ORM\Index(name="af_afo_nivsortie_nnif2", columns={"afo_nivsortie"}), @ORM\Index(name="af_afo_fsedispo_fdfif", columns={"afo_fsedispo"}), @ORM\Index(name="af_afo_valid_vvif", columns={"afo_valid"}), @ORM\Index(name="af_afo_es_eeif", columns={"afo_es"}), @ORM\Index(name="af_afo_recrut_aaif", columns={"afo_recrut"}), @ORM\Index(name="af_afo_mesurep_mpmif", columns={"afo_mesurep"}), @ORM\Index(name="af_afo_priorite_ppif", columns={"afo_priorite"}), @ORM\Index(name="af_afo_unitref_upuif", columns={"afo_unitref"}), @ORM\Index(name="af_afo_niventree_nnif", columns={"afo_niventree"}), @ORM\Index(name="af_afo_nomint_ninif", columns={"afo_nomint"})})
 * @ORM\Entity(repositoryClass="App\Repository\AfRepository")
 */
class Af
{
    /**
     * @var int
     *
     * @ORM\Column(name="afo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="af_afo_id_seq", allocationSize=1, initialValue=1)
     */
    private $afoId;

    /**
     * @var string
     *
     * @ORM\Column(name="afo_libelle", type="string", length=250, nullable=false)
     */
    private $afoLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="afo_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $afoEtat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="afo_datedeb", type="datetime", nullable=true)
     */
    private $afoDatedeb;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="afo_datefin", type="datetime", nullable=true)
     */
    private $afoDatefin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afo_hebdocent", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $afoHebdocent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afo_hebdoent", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $afoHebdoent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afo_heurecent", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $afoHeurecent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afo_heureent", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $afoHeureent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afo_dureemini", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $afoDureemini;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afo_dureemaxi", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $afoDureemaxi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afo_hstagremu", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $afoHstagremu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afo_maxistagremu", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $afoMaxistagremu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afo_mntestremu", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $afoMntestremu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afo_coutheure", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $afoCoutheure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afo_origdmde", type="string", length=50, nullable=true)
     */
    private $afoOrigdmde;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afo_nbvisestag", type="decimal", precision=5, scale=0, nullable=true)
     */
    private $afoNbvisestag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afo_modulaire", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $afoModulaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afo_alternance", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $afoAlternance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afo_auteurc", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $afoAuteurc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="afo_datec", type="datetime", nullable=true)
     */
    private $afoDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afo_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $afoAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="afo_datem", type="datetime", nullable=true)
     */
    private $afoDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afo_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $afoAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="afo_datea", type="datetime", nullable=true)
     */
    private $afoDatea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afo_eligible", type="decimal", precision=1, scale=0, nullable=true, options={"comment"="-1 = Non codÃ©e, 0 = Non Eligible, 1 = Eligible par Triplet, 2 = Eligible Organisme et Programme"})
     */
    private $afoEligible;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afo_mntprogfse", type="decimal", precision=13, scale=2, nullable=true)
     */
    private $afoMntprogfse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afo_mntrealfse", type="decimal", precision=13, scale=2, nullable=true)
     */
    private $afoMntrealfse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afo_orgcertif", type="string", length=50, nullable=true)
     */
    private $afoOrgcertif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afo_remuprogfse", type="decimal", precision=13, scale=2, nullable=true)
     */
    private $afoRemuprogfse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afo_agreremu", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $afoAgreremu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afo_nbunitot", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $afoNbunitot;

    /**
     * @var \Entreesortie
     *
     * @ORM\ManyToOne(targetEntity="Entreesortie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="afo_es", referencedColumnName="ens_id")
     * })
     */
    private $afoEs;

    /**
     * @var \FseDispo
     *
     * @ORM\ManyToOne(targetEntity="FseDispo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="afo_fsedispo", referencedColumnName="fsi_id")
     * })
     */
    private $afoFsedispo;

    /**
     * @var \Gfe
     *
     * @ORM\ManyToOne(targetEntity="Gfe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="afo_gfe", referencedColumnName="gfe_id")
     * })
     */
    private $afoGfe;

    /**
     * @var \MesProg
     *
     * @ORM\ManyToOne(targetEntity="MesProg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="afo_mesurep", referencedColumnName="mpg_id")
     * })
     */
    private $afoMesurep;

    /**
     * @var \Niveau
     *
     * @ORM\ManyToOne(targetEntity="Niveau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="afo_niventree", referencedColumnName="niv_id")
     * })
     */
    private $afoNiventree;

    /**
     * @var \Niveau
     *
     * @ORM\ManyToOne(targetEntity="Niveau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="afo_nivsortie", referencedColumnName="niv_id")
     * })
     */
    private $afoNivsortie;

    /**
     * @var \NomenInt
     *
     * @ORM\ManyToOne(targetEntity="NomenInt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="afo_nomint", referencedColumnName="nin_id")
     * })
     */
    private $afoNomint;

    /**
     * @var \Nsf
     *
     * @ORM\ManyToOne(targetEntity="Nsf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="afo_nsfprinc", referencedColumnName="nsf_id")
     * })
     */
    private $afoNsfprinc;

    /**
     * @var \Prgcertif
     *
     * @ORM\ManyToOne(targetEntity="Prgcertif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="afo_prgcertif", referencedColumnName="prc_id")
     * })
     */
    private $afoPrgcertif;

    /**
     * @var \Priorite
     *
     * @ORM\ManyToOne(targetEntity="Priorite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="afo_priorite", referencedColumnName="pri_id")
     * })
     */
    private $afoPriorite;

    /**
     * @var \Airerecrut
     *
     * @ORM\ManyToOne(targetEntity="Airerecrut")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="afo_recrut", referencedColumnName="air_id")
     * })
     */
    private $afoRecrut;

    /**
     * @var \Rythme
     *
     * @ORM\ManyToOne(targetEntity="Rythme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="afo_rythme", referencedColumnName="ryt_id")
     * })
     */
    private $afoRythme;

    /**
     * @var \UnitePrest
     *
     * @ORM\ManyToOne(targetEntity="UnitePrest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="afo_unitref", referencedColumnName="unp_id")
     * })
     */
    private $afoUnitref;

    /**
     * @var \Validation
     *
     * @ORM\ManyToOne(targetEntity="Validation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="afo_valid", referencedColumnName="val_id")
     * })
     */
    private $afoValid;

    /**
     * @var \ZoneLib
     *
     * @ORM\ManyToOne(targetEntity="ZoneLib")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="afo_zoemploi", referencedColumnName="zol_id")
     * })
     */
    private $afoZoemploi;

    public function getAfoId(): ?int
    {
        return $this->afoId;
    }

    public function getAfoLibelle(): ?string
    {
        return $this->afoLibelle;
    }

    public function setAfoLibelle(string $afoLibelle): self
    {
        $this->afoLibelle = $afoLibelle;

        return $this;
    }

    public function getAfoEtat(): ?string
    {
        return $this->afoEtat;
    }

    public function setAfoEtat(string $afoEtat): self
    {
        $this->afoEtat = $afoEtat;

        return $this;
    }

    public function getAfoDatedeb(): ?\DateTimeInterface
    {
        return $this->afoDatedeb;
    }

    public function setAfoDatedeb(?\DateTimeInterface $afoDatedeb): self
    {
        $this->afoDatedeb = $afoDatedeb;

        return $this;
    }

    public function getAfoDatefin(): ?\DateTimeInterface
    {
        return $this->afoDatefin;
    }

    public function setAfoDatefin(?\DateTimeInterface $afoDatefin): self
    {
        $this->afoDatefin = $afoDatefin;

        return $this;
    }

    public function getAfoHebdocent(): ?string
    {
        return $this->afoHebdocent;
    }

    public function setAfoHebdocent(?string $afoHebdocent): self
    {
        $this->afoHebdocent = $afoHebdocent;

        return $this;
    }

    public function getAfoHebdoent(): ?string
    {
        return $this->afoHebdoent;
    }

    public function setAfoHebdoent(?string $afoHebdoent): self
    {
        $this->afoHebdoent = $afoHebdoent;

        return $this;
    }

    public function getAfoHeurecent(): ?string
    {
        return $this->afoHeurecent;
    }

    public function setAfoHeurecent(?string $afoHeurecent): self
    {
        $this->afoHeurecent = $afoHeurecent;

        return $this;
    }

    public function getAfoHeureent(): ?string
    {
        return $this->afoHeureent;
    }

    public function setAfoHeureent(?string $afoHeureent): self
    {
        $this->afoHeureent = $afoHeureent;

        return $this;
    }

    public function getAfoDureemini(): ?string
    {
        return $this->afoDureemini;
    }

    public function setAfoDureemini(?string $afoDureemini): self
    {
        $this->afoDureemini = $afoDureemini;

        return $this;
    }

    public function getAfoDureemaxi(): ?string
    {
        return $this->afoDureemaxi;
    }

    public function setAfoDureemaxi(?string $afoDureemaxi): self
    {
        $this->afoDureemaxi = $afoDureemaxi;

        return $this;
    }

    public function getAfoHstagremu(): ?string
    {
        return $this->afoHstagremu;
    }

    public function setAfoHstagremu(?string $afoHstagremu): self
    {
        $this->afoHstagremu = $afoHstagremu;

        return $this;
    }

    public function getAfoMaxistagremu(): ?string
    {
        return $this->afoMaxistagremu;
    }

    public function setAfoMaxistagremu(?string $afoMaxistagremu): self
    {
        $this->afoMaxistagremu = $afoMaxistagremu;

        return $this;
    }

    public function getAfoMntestremu(): ?string
    {
        return $this->afoMntestremu;
    }

    public function setAfoMntestremu(?string $afoMntestremu): self
    {
        $this->afoMntestremu = $afoMntestremu;

        return $this;
    }

    public function getAfoCoutheure(): ?string
    {
        return $this->afoCoutheure;
    }

    public function setAfoCoutheure(?string $afoCoutheure): self
    {
        $this->afoCoutheure = $afoCoutheure;

        return $this;
    }

    public function getAfoOrigdmde(): ?string
    {
        return $this->afoOrigdmde;
    }

    public function setAfoOrigdmde(?string $afoOrigdmde): self
    {
        $this->afoOrigdmde = $afoOrigdmde;

        return $this;
    }

    public function getAfoNbvisestag(): ?string
    {
        return $this->afoNbvisestag;
    }

    public function setAfoNbvisestag(?string $afoNbvisestag): self
    {
        $this->afoNbvisestag = $afoNbvisestag;

        return $this;
    }

    public function getAfoModulaire(): ?string
    {
        return $this->afoModulaire;
    }

    public function setAfoModulaire(?string $afoModulaire): self
    {
        $this->afoModulaire = $afoModulaire;

        return $this;
    }

    public function getAfoAlternance(): ?string
    {
        return $this->afoAlternance;
    }

    public function setAfoAlternance(?string $afoAlternance): self
    {
        $this->afoAlternance = $afoAlternance;

        return $this;
    }

    public function getAfoAuteurc(): ?string
    {
        return $this->afoAuteurc;
    }

    public function setAfoAuteurc(?string $afoAuteurc): self
    {
        $this->afoAuteurc = $afoAuteurc;

        return $this;
    }

    public function getAfoDatec(): ?\DateTimeInterface
    {
        return $this->afoDatec;
    }

    public function setAfoDatec(?\DateTimeInterface $afoDatec): self
    {
        $this->afoDatec = $afoDatec;

        return $this;
    }

    public function getAfoAuteurm(): ?string
    {
        return $this->afoAuteurm;
    }

    public function setAfoAuteurm(?string $afoAuteurm): self
    {
        $this->afoAuteurm = $afoAuteurm;

        return $this;
    }

    public function getAfoDatem(): ?\DateTimeInterface
    {
        return $this->afoDatem;
    }

    public function setAfoDatem(?\DateTimeInterface $afoDatem): self
    {
        $this->afoDatem = $afoDatem;

        return $this;
    }

    public function getAfoAuteura(): ?string
    {
        return $this->afoAuteura;
    }

    public function setAfoAuteura(?string $afoAuteura): self
    {
        $this->afoAuteura = $afoAuteura;

        return $this;
    }

    public function getAfoDatea(): ?\DateTimeInterface
    {
        return $this->afoDatea;
    }

    public function setAfoDatea(?\DateTimeInterface $afoDatea): self
    {
        $this->afoDatea = $afoDatea;

        return $this;
    }

    public function getAfoEligible(): ?string
    {
        return $this->afoEligible;
    }

    public function setAfoEligible(?string $afoEligible): self
    {
        $this->afoEligible = $afoEligible;

        return $this;
    }

    public function getAfoMntprogfse(): ?string
    {
        return $this->afoMntprogfse;
    }

    public function setAfoMntprogfse(?string $afoMntprogfse): self
    {
        $this->afoMntprogfse = $afoMntprogfse;

        return $this;
    }

    public function getAfoMntrealfse(): ?string
    {
        return $this->afoMntrealfse;
    }

    public function setAfoMntrealfse(?string $afoMntrealfse): self
    {
        $this->afoMntrealfse = $afoMntrealfse;

        return $this;
    }

    public function getAfoOrgcertif(): ?string
    {
        return $this->afoOrgcertif;
    }

    public function setAfoOrgcertif(?string $afoOrgcertif): self
    {
        $this->afoOrgcertif = $afoOrgcertif;

        return $this;
    }

    public function getAfoRemuprogfse(): ?string
    {
        return $this->afoRemuprogfse;
    }

    public function setAfoRemuprogfse(?string $afoRemuprogfse): self
    {
        $this->afoRemuprogfse = $afoRemuprogfse;

        return $this;
    }

    public function getAfoAgreremu(): ?string
    {
        return $this->afoAgreremu;
    }

    public function setAfoAgreremu(?string $afoAgreremu): self
    {
        $this->afoAgreremu = $afoAgreremu;

        return $this;
    }

    public function getAfoNbunitot(): ?string
    {
        return $this->afoNbunitot;
    }

    public function setAfoNbunitot(?string $afoNbunitot): self
    {
        $this->afoNbunitot = $afoNbunitot;

        return $this;
    }

    public function getAfoEs(): ?Entreesortie
    {
        return $this->afoEs;
    }

    public function setAfoEs(?Entreesortie $afoEs): self
    {
        $this->afoEs = $afoEs;

        return $this;
    }

    public function getAfoFsedispo(): ?FseDispo
    {
        return $this->afoFsedispo;
    }

    public function setAfoFsedispo(?FseDispo $afoFsedispo): self
    {
        $this->afoFsedispo = $afoFsedispo;

        return $this;
    }

    public function getAfoGfe(): ?Gfe
    {
        return $this->afoGfe;
    }

    public function setAfoGfe(?Gfe $afoGfe): self
    {
        $this->afoGfe = $afoGfe;

        return $this;
    }

    public function getAfoMesurep(): ?MesProg
    {
        return $this->afoMesurep;
    }

    public function setAfoMesurep(?MesProg $afoMesurep): self
    {
        $this->afoMesurep = $afoMesurep;

        return $this;
    }

    public function getAfoNiventree(): ?Niveau
    {
        return $this->afoNiventree;
    }

    public function setAfoNiventree(?Niveau $afoNiventree): self
    {
        $this->afoNiventree = $afoNiventree;

        return $this;
    }

    public function getAfoNivsortie(): ?Niveau
    {
        return $this->afoNivsortie;
    }

    public function setAfoNivsortie(?Niveau $afoNivsortie): self
    {
        $this->afoNivsortie = $afoNivsortie;

        return $this;
    }

    public function getAfoNomint(): ?NomenInt
    {
        return $this->afoNomint;
    }

    public function setAfoNomint(?NomenInt $afoNomint): self
    {
        $this->afoNomint = $afoNomint;

        return $this;
    }

    public function getAfoNsfprinc(): ?Nsf
    {
        return $this->afoNsfprinc;
    }

    public function setAfoNsfprinc(?Nsf $afoNsfprinc): self
    {
        $this->afoNsfprinc = $afoNsfprinc;

        return $this;
    }

    public function getAfoPrgcertif(): ?Prgcertif
    {
        return $this->afoPrgcertif;
    }

    public function setAfoPrgcertif(?Prgcertif $afoPrgcertif): self
    {
        $this->afoPrgcertif = $afoPrgcertif;

        return $this;
    }

    public function getAfoPriorite(): ?Priorite
    {
        return $this->afoPriorite;
    }

    public function setAfoPriorite(?Priorite $afoPriorite): self
    {
        $this->afoPriorite = $afoPriorite;

        return $this;
    }

    public function getAfoRecrut(): ?Airerecrut
    {
        return $this->afoRecrut;
    }

    public function setAfoRecrut(?Airerecrut $afoRecrut): self
    {
        $this->afoRecrut = $afoRecrut;

        return $this;
    }

    public function getAfoRythme(): ?Rythme
    {
        return $this->afoRythme;
    }

    public function setAfoRythme(?Rythme $afoRythme): self
    {
        $this->afoRythme = $afoRythme;

        return $this;
    }

    public function getAfoUnitref(): ?UnitePrest
    {
        return $this->afoUnitref;
    }

    public function setAfoUnitref(?UnitePrest $afoUnitref): self
    {
        $this->afoUnitref = $afoUnitref;

        return $this;
    }

    public function getAfoValid(): ?Validation
    {
        return $this->afoValid;
    }

    public function setAfoValid(?Validation $afoValid): self
    {
        $this->afoValid = $afoValid;

        return $this;
    }

    public function getAfoZoemploi(): ?ZoneLib
    {
        return $this->afoZoemploi;
    }

    public function setAfoZoemploi(?ZoneLib $afoZoemploi): self
    {
        $this->afoZoemploi = $afoZoemploi;

        return $this;
    }


}
