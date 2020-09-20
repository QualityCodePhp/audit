<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse", uniqueConstraints={@ORM\UniqueConstraint(name="reponse_pk", columns={"rep_id"})}, indexes={@ORM\Index(name="reponse_nnif", columns={"rep_nivsortie"}), @ORM\Index(name="rep_ofp_fk", columns={"ofp_id"}), @ORM\Index(name="reponse_upuif", columns={"rep_unitref"}), @ORM\Index(name="reponse_zezif23", columns={"rep_zoemploi"}), @ORM\Index(name="reponse_mpmif", columns={"rep_mesurep"}), @ORM\Index(name="reponse_eeif", columns={"rep_ets"}), @ORM\Index(name="reponse_nnif3", columns={"rep_nsfprinc"}), @ORM\Index(name="reponse_eeif2", columns={"rep_es"}), @ORM\Index(name="reponse_nnif2", columns={"rep_niventree"}), @ORM\Index(name="reponse_vvif", columns={"rep_validation"}), @ORM\Index(name="reponse_zezif2", columns={"rep_recrut"}), @ORM\Index(name="reponse_ooif", columns={"rep_offre"}), @ORM\Index(name="reponse_pppif", columns={"rep_periode"}), @ORM\Index(name="reponse_minif", columns={"rep_nomint"}), @ORM\Index(name="reponse_rep_gfe___gfe_gfe_id_fk", columns={"rep_gfe"}), @ORM\Index(name="reponse_uuif", columns={"rep_auteurclosai"}), @ORM\Index(name="reponse_ffif", columns={"rep_frequence"}), @ORM\Index(name="reponse_aaif", columns={"rep_antenne"}), @ORM\Index(name="reponse_zezif", columns={"rep_localisation"}), @ORM\Index(name="reponse_rep_rib___rib_rib_id_fk", columns={"rep_rib"})})
 * @ORM\Entity
 */
class Reponse
{
    /**
     * @var int
     *
     * @ORM\Column(name="rep_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="reponse_rep_id_seq", allocationSize=1, initialValue=1)
     */
    private $repId;

    /**
     * @var string
     *
     * @ORM\Column(name="rep_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $repEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="rep_typepresta", type="string", length=1, nullable=false, options={"comment"="T = titulaire, C = co-traitant, S = sous-traitant"})
     */
    private $repTypepresta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_nomsign", type="string", length=50, nullable=true)
     */
    private $repNomsign;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_prenomsign", type="string", length=50, nullable=true)
     */
    private $repPrenomsign;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_qualsign", type="string", length=50, nullable=true)
     */
    private $repQualsign;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rep_dateclosai", type="datetime", nullable=true)
     */
    private $repDateclosai;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_mntavdde", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $repMntavdde;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_mntavprp", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $repMntavprp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_mntavval", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $repMntavval;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_typeav", type="decimal", precision=1, scale=0, nullable=true, options={"comment"="1 = Avance Forfaitaire, 2= Avance Facultative, 0 = Avance RenoncÃ©e"})
     */
    private $repTypeav;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rep_datedeb", type="datetime", nullable=true)
     */
    private $repDatedeb;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rep_datefin", type="datetime", nullable=true)
     */
    private $repDatefin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_orgmodul", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $repOrgmodul;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_mingroupe", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $repMingroupe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_maxgroupe", type="decimal", precision=5, scale=0, nullable=true)
     */
    private $repMaxgroupe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_qualif", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $repQualif;

    /**
     * @var string
     *
     * @ORM\Column(name="rep_acces", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $repAcces;

    /**
     * @var string
     *
     * @ORM\Column(name="rep_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $repAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rep_datec", type="datetime", nullable=false)
     */
    private $repDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $repAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rep_datem", type="datetime", nullable=true)
     */
    private $repDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $repAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rep_datea", type="datetime", nullable=true)
     */
    private $repDatea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_pdirect", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $repPdirect;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_nbunitot", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $repNbunitot;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_refarianne", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $repRefarianne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_comarianne", type="string", length=210, nullable=true)
     */
    private $repComarianne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_affarianne", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $repAffarianne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_refoperat", type="string", length=8, nullable=true)
     */
    private $repRefoperat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_locgoperat", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $repLocgoperat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_locfoperat", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $repLocfoperat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_loccoperat", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $repLoccoperat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_decoperat", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $repDecoperat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_valoperat", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $repValoperat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_refphase", type="string", length=8, nullable=true)
     */
    private $repRefphase;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_refaffap", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $repRefaffap;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_refaengap", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $repRefaengap;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_refaenghap", type="string", length=7, nullable=true)
     */
    private $repRefaenghap;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_engtiers", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $repEngtiers;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_affoperat", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $repAffoperat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_mntengage", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $repMntengage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_numero", type="string", length=18, nullable=true)
     */
    private $repNumero;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_ftiers", type="decimal", precision=7, scale=0, nullable=true)
     */
    private $repFtiers;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_epegann", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $repEpegann;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_epegcod", type="string", length=5, nullable=true)
     */
    private $repEpegcod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_epegnum", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $repEpegnum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_epdglig", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $repEpdglig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_neoadd", type="decimal", precision=1, scale=0, nullable=true, options={"comment"="(0 = Non - 1 = Oui)"})
     */
    private $repNeoadd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_mntengage_ttc", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $repMntengageTtc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_mntavrefuse", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $repMntavrefuse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_mntavprec", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $repMntavprec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rep_origine", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $repOrigine;

    /**
     * @var \Niveau
     *
     * @ORM\ManyToOne(targetEntity="Niveau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_nivsortie", referencedColumnName="niv_id")
     * })
     */
    private $repNivsortie;

    /**
     * @var \Niveau
     *
     * @ORM\ManyToOne(targetEntity="Niveau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_niventree", referencedColumnName="niv_id")
     * })
     */
    private $repNiventree;

    /**
     * @var \Antenne
     *
     * @ORM\ManyToOne(targetEntity="Antenne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_antenne", referencedColumnName="ant_id")
     * })
     */
    private $repAntenne;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_auteurclosai", referencedColumnName="uti_id")
     * })
     */
    private $repAuteurclosai;

    /**
     * @var \Entreesortie
     *
     * @ORM\ManyToOne(targetEntity="Entreesortie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_es", referencedColumnName="ens_id")
     * })
     */
    private $repEs;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_ets", referencedColumnName="ets_id")
     * })
     */
    private $repEts;

    /**
     * @var \Frequence
     *
     * @ORM\ManyToOne(targetEntity="Frequence")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_frequence", referencedColumnName="frq_id")
     * })
     */
    private $repFrequence;

    /**
     * @var \Gfe
     *
     * @ORM\ManyToOne(targetEntity="Gfe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_gfe", referencedColumnName="gfe_id")
     * })
     */
    private $repGfe;

    /**
     * @var \MesProg
     *
     * @ORM\ManyToOne(targetEntity="MesProg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_mesurep", referencedColumnName="mpg_id")
     * })
     */
    private $repMesurep;

    /**
     * @var \NomenInt
     *
     * @ORM\ManyToOne(targetEntity="NomenInt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_nomint", referencedColumnName="nin_id")
     * })
     */
    private $repNomint;

    /**
     * @var \Nsf
     *
     * @ORM\ManyToOne(targetEntity="Nsf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_nsfprinc", referencedColumnName="nsf_id")
     * })
     */
    private $repNsfprinc;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_offre", referencedColumnName="off_id")
     * })
     */
    private $repOffre;

    /**
     * @var \PerProg
     *
     * @ORM\ManyToOne(targetEntity="PerProg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_periode", referencedColumnName="ppr_id")
     * })
     */
    private $repPeriode;

    /**
     * @var \Rib
     *
     * @ORM\ManyToOne(targetEntity="Rib")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_rib", referencedColumnName="rib_id")
     * })
     */
    private $repRib;

    /**
     * @var \UnitePrest
     *
     * @ORM\ManyToOne(targetEntity="UnitePrest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_unitref", referencedColumnName="unp_id")
     * })
     */
    private $repUnitref;

    /**
     * @var \Validation
     *
     * @ORM\ManyToOne(targetEntity="Validation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_validation", referencedColumnName="val_id")
     * })
     */
    private $repValidation;

    /**
     * @var \ZoneEmploi
     *
     * @ORM\ManyToOne(targetEntity="ZoneEmploi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_localisation", referencedColumnName="zoe_id")
     * })
     */
    private $repLocalisation;

    /**
     * @var \ZoneEmploi
     *
     * @ORM\ManyToOne(targetEntity="ZoneEmploi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_recrut", referencedColumnName="zoe_id")
     * })
     */
    private $repRecrut;

    /**
     * @var \ZoneEmploi
     *
     * @ORM\ManyToOne(targetEntity="ZoneEmploi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_zoemploi", referencedColumnName="zoe_id")
     * })
     */
    private $repZoemploi;

    /**
     * @var \OffrePresta
     *
     * @ORM\ManyToOne(targetEntity="OffrePresta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ofp_id", referencedColumnName="ofp_id")
     * })
     */
    private $ofp;

    public function getRepId(): ?int
    {
        return $this->repId;
    }

    public function getRepEtat(): ?string
    {
        return $this->repEtat;
    }

    public function setRepEtat(string $repEtat): self
    {
        $this->repEtat = $repEtat;

        return $this;
    }

    public function getRepTypepresta(): ?string
    {
        return $this->repTypepresta;
    }

    public function setRepTypepresta(string $repTypepresta): self
    {
        $this->repTypepresta = $repTypepresta;

        return $this;
    }

    public function getRepNomsign(): ?string
    {
        return $this->repNomsign;
    }

    public function setRepNomsign(?string $repNomsign): self
    {
        $this->repNomsign = $repNomsign;

        return $this;
    }

    public function getRepPrenomsign(): ?string
    {
        return $this->repPrenomsign;
    }

    public function setRepPrenomsign(?string $repPrenomsign): self
    {
        $this->repPrenomsign = $repPrenomsign;

        return $this;
    }

    public function getRepQualsign(): ?string
    {
        return $this->repQualsign;
    }

    public function setRepQualsign(?string $repQualsign): self
    {
        $this->repQualsign = $repQualsign;

        return $this;
    }

    public function getRepDateclosai(): ?\DateTimeInterface
    {
        return $this->repDateclosai;
    }

    public function setRepDateclosai(?\DateTimeInterface $repDateclosai): self
    {
        $this->repDateclosai = $repDateclosai;

        return $this;
    }

    public function getRepMntavdde(): ?string
    {
        return $this->repMntavdde;
    }

    public function setRepMntavdde(?string $repMntavdde): self
    {
        $this->repMntavdde = $repMntavdde;

        return $this;
    }

    public function getRepMntavprp(): ?string
    {
        return $this->repMntavprp;
    }

    public function setRepMntavprp(?string $repMntavprp): self
    {
        $this->repMntavprp = $repMntavprp;

        return $this;
    }

    public function getRepMntavval(): ?string
    {
        return $this->repMntavval;
    }

    public function setRepMntavval(?string $repMntavval): self
    {
        $this->repMntavval = $repMntavval;

        return $this;
    }

    public function getRepTypeav(): ?string
    {
        return $this->repTypeav;
    }

    public function setRepTypeav(?string $repTypeav): self
    {
        $this->repTypeav = $repTypeav;

        return $this;
    }

    public function getRepDatedeb(): ?\DateTimeInterface
    {
        return $this->repDatedeb;
    }

    public function setRepDatedeb(?\DateTimeInterface $repDatedeb): self
    {
        $this->repDatedeb = $repDatedeb;

        return $this;
    }

    public function getRepDatefin(): ?\DateTimeInterface
    {
        return $this->repDatefin;
    }

    public function setRepDatefin(?\DateTimeInterface $repDatefin): self
    {
        $this->repDatefin = $repDatefin;

        return $this;
    }

    public function getRepOrgmodul(): ?string
    {
        return $this->repOrgmodul;
    }

    public function setRepOrgmodul(?string $repOrgmodul): self
    {
        $this->repOrgmodul = $repOrgmodul;

        return $this;
    }

    public function getRepMingroupe(): ?string
    {
        return $this->repMingroupe;
    }

    public function setRepMingroupe(?string $repMingroupe): self
    {
        $this->repMingroupe = $repMingroupe;

        return $this;
    }

    public function getRepMaxgroupe(): ?string
    {
        return $this->repMaxgroupe;
    }

    public function setRepMaxgroupe(?string $repMaxgroupe): self
    {
        $this->repMaxgroupe = $repMaxgroupe;

        return $this;
    }

    public function getRepQualif(): ?string
    {
        return $this->repQualif;
    }

    public function setRepQualif(?string $repQualif): self
    {
        $this->repQualif = $repQualif;

        return $this;
    }

    public function getRepAcces(): ?string
    {
        return $this->repAcces;
    }

    public function setRepAcces(string $repAcces): self
    {
        $this->repAcces = $repAcces;

        return $this;
    }

    public function getRepAuteurc(): ?string
    {
        return $this->repAuteurc;
    }

    public function setRepAuteurc(string $repAuteurc): self
    {
        $this->repAuteurc = $repAuteurc;

        return $this;
    }

    public function getRepDatec(): ?\DateTimeInterface
    {
        return $this->repDatec;
    }

    public function setRepDatec(\DateTimeInterface $repDatec): self
    {
        $this->repDatec = $repDatec;

        return $this;
    }

    public function getRepAuteurm(): ?string
    {
        return $this->repAuteurm;
    }

    public function setRepAuteurm(?string $repAuteurm): self
    {
        $this->repAuteurm = $repAuteurm;

        return $this;
    }

    public function getRepDatem(): ?\DateTimeInterface
    {
        return $this->repDatem;
    }

    public function setRepDatem(?\DateTimeInterface $repDatem): self
    {
        $this->repDatem = $repDatem;

        return $this;
    }

    public function getRepAuteura(): ?string
    {
        return $this->repAuteura;
    }

    public function setRepAuteura(?string $repAuteura): self
    {
        $this->repAuteura = $repAuteura;

        return $this;
    }

    public function getRepDatea(): ?\DateTimeInterface
    {
        return $this->repDatea;
    }

    public function setRepDatea(?\DateTimeInterface $repDatea): self
    {
        $this->repDatea = $repDatea;

        return $this;
    }

    public function getRepPdirect(): ?string
    {
        return $this->repPdirect;
    }

    public function setRepPdirect(?string $repPdirect): self
    {
        $this->repPdirect = $repPdirect;

        return $this;
    }

    public function getRepNbunitot(): ?string
    {
        return $this->repNbunitot;
    }

    public function setRepNbunitot(?string $repNbunitot): self
    {
        $this->repNbunitot = $repNbunitot;

        return $this;
    }

    public function getRepRefarianne(): ?string
    {
        return $this->repRefarianne;
    }

    public function setRepRefarianne(?string $repRefarianne): self
    {
        $this->repRefarianne = $repRefarianne;

        return $this;
    }

    public function getRepComarianne(): ?string
    {
        return $this->repComarianne;
    }

    public function setRepComarianne(?string $repComarianne): self
    {
        $this->repComarianne = $repComarianne;

        return $this;
    }

    public function getRepAffarianne(): ?string
    {
        return $this->repAffarianne;
    }

    public function setRepAffarianne(?string $repAffarianne): self
    {
        $this->repAffarianne = $repAffarianne;

        return $this;
    }

    public function getRepRefoperat(): ?string
    {
        return $this->repRefoperat;
    }

    public function setRepRefoperat(?string $repRefoperat): self
    {
        $this->repRefoperat = $repRefoperat;

        return $this;
    }

    public function getRepLocgoperat(): ?string
    {
        return $this->repLocgoperat;
    }

    public function setRepLocgoperat(?string $repLocgoperat): self
    {
        $this->repLocgoperat = $repLocgoperat;

        return $this;
    }

    public function getRepLocfoperat(): ?string
    {
        return $this->repLocfoperat;
    }

    public function setRepLocfoperat(?string $repLocfoperat): self
    {
        $this->repLocfoperat = $repLocfoperat;

        return $this;
    }

    public function getRepLoccoperat(): ?string
    {
        return $this->repLoccoperat;
    }

    public function setRepLoccoperat(?string $repLoccoperat): self
    {
        $this->repLoccoperat = $repLoccoperat;

        return $this;
    }

    public function getRepDecoperat(): ?string
    {
        return $this->repDecoperat;
    }

    public function setRepDecoperat(?string $repDecoperat): self
    {
        $this->repDecoperat = $repDecoperat;

        return $this;
    }

    public function getRepValoperat(): ?string
    {
        return $this->repValoperat;
    }

    public function setRepValoperat(?string $repValoperat): self
    {
        $this->repValoperat = $repValoperat;

        return $this;
    }

    public function getRepRefphase(): ?string
    {
        return $this->repRefphase;
    }

    public function setRepRefphase(?string $repRefphase): self
    {
        $this->repRefphase = $repRefphase;

        return $this;
    }

    public function getRepRefaffap(): ?string
    {
        return $this->repRefaffap;
    }

    public function setRepRefaffap(?string $repRefaffap): self
    {
        $this->repRefaffap = $repRefaffap;

        return $this;
    }

    public function getRepRefaengap(): ?string
    {
        return $this->repRefaengap;
    }

    public function setRepRefaengap(?string $repRefaengap): self
    {
        $this->repRefaengap = $repRefaengap;

        return $this;
    }

    public function getRepRefaenghap(): ?string
    {
        return $this->repRefaenghap;
    }

    public function setRepRefaenghap(?string $repRefaenghap): self
    {
        $this->repRefaenghap = $repRefaenghap;

        return $this;
    }

    public function getRepEngtiers(): ?string
    {
        return $this->repEngtiers;
    }

    public function setRepEngtiers(?string $repEngtiers): self
    {
        $this->repEngtiers = $repEngtiers;

        return $this;
    }

    public function getRepAffoperat(): ?string
    {
        return $this->repAffoperat;
    }

    public function setRepAffoperat(?string $repAffoperat): self
    {
        $this->repAffoperat = $repAffoperat;

        return $this;
    }

    public function getRepMntengage(): ?string
    {
        return $this->repMntengage;
    }

    public function setRepMntengage(?string $repMntengage): self
    {
        $this->repMntengage = $repMntengage;

        return $this;
    }

    public function getRepNumero(): ?string
    {
        return $this->repNumero;
    }

    public function setRepNumero(?string $repNumero): self
    {
        $this->repNumero = $repNumero;

        return $this;
    }

    public function getRepFtiers(): ?string
    {
        return $this->repFtiers;
    }

    public function setRepFtiers(?string $repFtiers): self
    {
        $this->repFtiers = $repFtiers;

        return $this;
    }

    public function getRepEpegann(): ?string
    {
        return $this->repEpegann;
    }

    public function setRepEpegann(?string $repEpegann): self
    {
        $this->repEpegann = $repEpegann;

        return $this;
    }

    public function getRepEpegcod(): ?string
    {
        return $this->repEpegcod;
    }

    public function setRepEpegcod(?string $repEpegcod): self
    {
        $this->repEpegcod = $repEpegcod;

        return $this;
    }

    public function getRepEpegnum(): ?string
    {
        return $this->repEpegnum;
    }

    public function setRepEpegnum(?string $repEpegnum): self
    {
        $this->repEpegnum = $repEpegnum;

        return $this;
    }

    public function getRepEpdglig(): ?string
    {
        return $this->repEpdglig;
    }

    public function setRepEpdglig(?string $repEpdglig): self
    {
        $this->repEpdglig = $repEpdglig;

        return $this;
    }

    public function getRepNeoadd(): ?string
    {
        return $this->repNeoadd;
    }

    public function setRepNeoadd(?string $repNeoadd): self
    {
        $this->repNeoadd = $repNeoadd;

        return $this;
    }

    public function getRepMntengageTtc(): ?string
    {
        return $this->repMntengageTtc;
    }

    public function setRepMntengageTtc(?string $repMntengageTtc): self
    {
        $this->repMntengageTtc = $repMntengageTtc;

        return $this;
    }

    public function getRepMntavrefuse(): ?string
    {
        return $this->repMntavrefuse;
    }

    public function setRepMntavrefuse(?string $repMntavrefuse): self
    {
        $this->repMntavrefuse = $repMntavrefuse;

        return $this;
    }

    public function getRepMntavprec(): ?string
    {
        return $this->repMntavprec;
    }

    public function setRepMntavprec(?string $repMntavprec): self
    {
        $this->repMntavprec = $repMntavprec;

        return $this;
    }

    public function getRepOrigine(): ?string
    {
        return $this->repOrigine;
    }

    public function setRepOrigine(?string $repOrigine): self
    {
        $this->repOrigine = $repOrigine;

        return $this;
    }

    public function getRepNivsortie(): ?Niveau
    {
        return $this->repNivsortie;
    }

    public function setRepNivsortie(?Niveau $repNivsortie): self
    {
        $this->repNivsortie = $repNivsortie;

        return $this;
    }

    public function getRepNiventree(): ?Niveau
    {
        return $this->repNiventree;
    }

    public function setRepNiventree(?Niveau $repNiventree): self
    {
        $this->repNiventree = $repNiventree;

        return $this;
    }

    public function getRepAntenne(): ?Antenne
    {
        return $this->repAntenne;
    }

    public function setRepAntenne(?Antenne $repAntenne): self
    {
        $this->repAntenne = $repAntenne;

        return $this;
    }

    public function getRepAuteurclosai(): ?Utilisateur
    {
        return $this->repAuteurclosai;
    }

    public function setRepAuteurclosai(?Utilisateur $repAuteurclosai): self
    {
        $this->repAuteurclosai = $repAuteurclosai;

        return $this;
    }

    public function getRepEs(): ?Entreesortie
    {
        return $this->repEs;
    }

    public function setRepEs(?Entreesortie $repEs): self
    {
        $this->repEs = $repEs;

        return $this;
    }

    public function getRepEts(): ?Etablssmt
    {
        return $this->repEts;
    }

    public function setRepEts(?Etablssmt $repEts): self
    {
        $this->repEts = $repEts;

        return $this;
    }

    public function getRepFrequence(): ?Frequence
    {
        return $this->repFrequence;
    }

    public function setRepFrequence(?Frequence $repFrequence): self
    {
        $this->repFrequence = $repFrequence;

        return $this;
    }

    public function getRepGfe(): ?Gfe
    {
        return $this->repGfe;
    }

    public function setRepGfe(?Gfe $repGfe): self
    {
        $this->repGfe = $repGfe;

        return $this;
    }

    public function getRepMesurep(): ?MesProg
    {
        return $this->repMesurep;
    }

    public function setRepMesurep(?MesProg $repMesurep): self
    {
        $this->repMesurep = $repMesurep;

        return $this;
    }

    public function getRepNomint(): ?NomenInt
    {
        return $this->repNomint;
    }

    public function setRepNomint(?NomenInt $repNomint): self
    {
        $this->repNomint = $repNomint;

        return $this;
    }

    public function getRepNsfprinc(): ?Nsf
    {
        return $this->repNsfprinc;
    }

    public function setRepNsfprinc(?Nsf $repNsfprinc): self
    {
        $this->repNsfprinc = $repNsfprinc;

        return $this;
    }

    public function getRepOffre(): ?Offre
    {
        return $this->repOffre;
    }

    public function setRepOffre(?Offre $repOffre): self
    {
        $this->repOffre = $repOffre;

        return $this;
    }

    public function getRepPeriode(): ?PerProg
    {
        return $this->repPeriode;
    }

    public function setRepPeriode(?PerProg $repPeriode): self
    {
        $this->repPeriode = $repPeriode;

        return $this;
    }

    public function getRepRib(): ?Rib
    {
        return $this->repRib;
    }

    public function setRepRib(?Rib $repRib): self
    {
        $this->repRib = $repRib;

        return $this;
    }

    public function getRepUnitref(): ?UnitePrest
    {
        return $this->repUnitref;
    }

    public function setRepUnitref(?UnitePrest $repUnitref): self
    {
        $this->repUnitref = $repUnitref;

        return $this;
    }

    public function getRepValidation(): ?Validation
    {
        return $this->repValidation;
    }

    public function setRepValidation(?Validation $repValidation): self
    {
        $this->repValidation = $repValidation;

        return $this;
    }

    public function getRepLocalisation(): ?ZoneEmploi
    {
        return $this->repLocalisation;
    }

    public function setRepLocalisation(?ZoneEmploi $repLocalisation): self
    {
        $this->repLocalisation = $repLocalisation;

        return $this;
    }

    public function getRepRecrut(): ?ZoneEmploi
    {
        return $this->repRecrut;
    }

    public function setRepRecrut(?ZoneEmploi $repRecrut): self
    {
        $this->repRecrut = $repRecrut;

        return $this;
    }

    public function getRepZoemploi(): ?ZoneEmploi
    {
        return $this->repZoemploi;
    }

    public function setRepZoemploi(?ZoneEmploi $repZoemploi): self
    {
        $this->repZoemploi = $repZoemploi;

        return $this;
    }

    public function getOfp(): ?OffrePresta
    {
        return $this->ofp;
    }

    public function setOfp(?OffrePresta $ofp): self
    {
        $this->ofp = $ofp;

        return $this;
    }


}
