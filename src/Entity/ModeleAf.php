<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModeleAf
 *
 * @ORM\Table(name="modele_af", uniqueConstraints={@ORM\UniqueConstraint(name="modele_af_pk", columns={"maf_id"})}, indexes={@ORM\Index(name="modele_af_nnif", columns={"maf_nsfprinc"}), @ORM\Index(name="modele_af_nnif2", columns={"maf_nivsortie"}), @ORM\Index(name="modele_ggif", columns={"maf_gfeprinc"}), @ORM\Index(name="modele_af_uuif", columns={"maf_auteurv"}), @ORM\Index(name="modele_af_zzeif", columns={"maf_zone"}), @ORM\Index(name="modele_vvif", columns={"maf_valid"}), @ORM\Index(name="modele_af_ninif", columns={"maf_nomint"}), @ORM\Index(name="modele_af_ccif", columns={"maf_origine"}), @ORM\Index(name="modele_af_mamif", columns={"maf_mode"}), @ORM\Index(name="modele_af_upuif", columns={"maf_unitref"}), @ORM\Index(name="modele_af_mmif", columns={"maf_mesurep"})})
 * @ORM\Entity
 */
class ModeleAf
{
    /**
     * @var int
     *
     * @ORM\Column(name="maf_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="modele_af_maf_id_seq", allocationSize=1, initialValue=1)
     */
    private $mafId;

    /**
     * @var string
     *
     * @ORM\Column(name="maf_code", type="string", length=20, nullable=false)
     */
    private $mafCode;

    /**
     * @var string
     *
     * @ORM\Column(name="maf_libelle", type="string", length=50, nullable=false)
     */
    private $mafLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="maf_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $mafEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="maf_libform", type="string", length=50, nullable=false)
     */
    private $mafLibform;

    /**
     * @var string
     *
     * @ORM\Column(name="maf_pourcent", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $mafPourcent;

    /**
     * @var string
     *
     * @ORM\Column(name="maf_pourent", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $mafPourent;

    /**
     * @var string
     *
     * @ORM\Column(name="maf_dureemini", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $mafDureemini;

    /**
     * @var string
     *
     * @ORM\Column(name="maf_dureemaxi", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $mafDureemaxi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="maf_contrib", type="string", length=500, nullable=true)
     */
    private $mafContrib;

    /**
     * @var string|null
     *
     * @ORM\Column(name="maf_publicp", type="string", length=500, nullable=true)
     */
    private $mafPublicp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="maf_condac", type="string", length=500, nullable=true)
     */
    private $mafCondac;

    /**
     * @var string|null
     *
     * @ORM\Column(name="maf_objectif", type="string", length=500, nullable=true)
     */
    private $mafObjectif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="maf_resultat", type="string", length=500, nullable=true)
     */
    private $mafResultat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="maf_orgapeda", type="string", length=500, nullable=true)
     */
    private $mafOrgapeda;

    /**
     * @var string
     *
     * @ORM\Column(name="maf_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $mafAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="maf_datec", type="datetime", nullable=false)
     */
    private $mafDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="maf_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $mafAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="maf_datem", type="datetime", nullable=true)
     */
    private $mafDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="maf_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $mafAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="maf_datea", type="datetime", nullable=true)
     */
    private $mafDatea;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="maf_datev", type="datetime", nullable=true)
     */
    private $mafDatev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="maf_specifo", type="string", length=500, nullable=true)
     */
    private $mafSpecifo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="maf_prerequis", type="string", length=500, nullable=true)
     */
    private $mafPrerequis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="maf_agreremu", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $mafAgreremu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="maf_typemar", type="string", length=1, nullable=true, options={"comment"="Type de marche F-Forfaitaire B-Bon de commande"})
     */
    private $mafTypemar;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="maf_auteurv", referencedColumnName="uti_id")
     * })
     */
    private $mafAuteurv;

    /**
     * @var \Gfe
     *
     * @ORM\ManyToOne(targetEntity="Gfe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="maf_gfeprinc", referencedColumnName="gfe_id")
     * })
     */
    private $mafGfeprinc;

    /**
     * @var \Mesure
     *
     * @ORM\ManyToOne(targetEntity="Mesure")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="maf_mesurep", referencedColumnName="mes_id")
     * })
     */
    private $mafMesurep;

    /**
     * @var \ModAch
     *
     * @ORM\ManyToOne(targetEntity="ModAch")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="maf_mode", referencedColumnName="mod_id")
     * })
     */
    private $mafMode;

    /**
     * @var \Niveau
     *
     * @ORM\ManyToOne(targetEntity="Niveau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="maf_nivsortie", referencedColumnName="niv_id")
     * })
     */
    private $mafNivsortie;

    /**
     * @var \NomenInt
     *
     * @ORM\ManyToOne(targetEntity="NomenInt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="maf_nomint", referencedColumnName="nin_id")
     * })
     */
    private $mafNomint;

    /**
     * @var \Nsf
     *
     * @ORM\ManyToOne(targetEntity="Nsf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="maf_nsfprinc", referencedColumnName="nsf_id")
     * })
     */
    private $mafNsfprinc;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="maf_origine", referencedColumnName="cmd_id")
     * })
     */
    private $mafOrigine;

    /**
     * @var \UnitePrest
     *
     * @ORM\ManyToOne(targetEntity="UnitePrest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="maf_unitref", referencedColumnName="unp_id")
     * })
     */
    private $mafUnitref;

    /**
     * @var \Validation
     *
     * @ORM\ManyToOne(targetEntity="Validation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="maf_valid", referencedColumnName="val_id")
     * })
     */
    private $mafValid;

    /**
     * @var \ZoneEmploi
     *
     * @ORM\ManyToOne(targetEntity="ZoneEmploi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="maf_zone", referencedColumnName="zoe_id")
     * })
     */
    private $mafZone;

    public function getMafId(): ?int
    {
        return $this->mafId;
    }

    public function getMafCode(): ?string
    {
        return $this->mafCode;
    }

    public function setMafCode(string $mafCode): self
    {
        $this->mafCode = $mafCode;

        return $this;
    }

    public function getMafLibelle(): ?string
    {
        return $this->mafLibelle;
    }

    public function setMafLibelle(string $mafLibelle): self
    {
        $this->mafLibelle = $mafLibelle;

        return $this;
    }

    public function getMafEtat(): ?string
    {
        return $this->mafEtat;
    }

    public function setMafEtat(string $mafEtat): self
    {
        $this->mafEtat = $mafEtat;

        return $this;
    }

    public function getMafLibform(): ?string
    {
        return $this->mafLibform;
    }

    public function setMafLibform(string $mafLibform): self
    {
        $this->mafLibform = $mafLibform;

        return $this;
    }

    public function getMafPourcent(): ?string
    {
        return $this->mafPourcent;
    }

    public function setMafPourcent(string $mafPourcent): self
    {
        $this->mafPourcent = $mafPourcent;

        return $this;
    }

    public function getMafPourent(): ?string
    {
        return $this->mafPourent;
    }

    public function setMafPourent(string $mafPourent): self
    {
        $this->mafPourent = $mafPourent;

        return $this;
    }

    public function getMafDureemini(): ?string
    {
        return $this->mafDureemini;
    }

    public function setMafDureemini(string $mafDureemini): self
    {
        $this->mafDureemini = $mafDureemini;

        return $this;
    }

    public function getMafDureemaxi(): ?string
    {
        return $this->mafDureemaxi;
    }

    public function setMafDureemaxi(string $mafDureemaxi): self
    {
        $this->mafDureemaxi = $mafDureemaxi;

        return $this;
    }

    public function getMafContrib(): ?string
    {
        return $this->mafContrib;
    }

    public function setMafContrib(?string $mafContrib): self
    {
        $this->mafContrib = $mafContrib;

        return $this;
    }

    public function getMafPublicp(): ?string
    {
        return $this->mafPublicp;
    }

    public function setMafPublicp(?string $mafPublicp): self
    {
        $this->mafPublicp = $mafPublicp;

        return $this;
    }

    public function getMafCondac(): ?string
    {
        return $this->mafCondac;
    }

    public function setMafCondac(?string $mafCondac): self
    {
        $this->mafCondac = $mafCondac;

        return $this;
    }

    public function getMafObjectif(): ?string
    {
        return $this->mafObjectif;
    }

    public function setMafObjectif(?string $mafObjectif): self
    {
        $this->mafObjectif = $mafObjectif;

        return $this;
    }

    public function getMafResultat(): ?string
    {
        return $this->mafResultat;
    }

    public function setMafResultat(?string $mafResultat): self
    {
        $this->mafResultat = $mafResultat;

        return $this;
    }

    public function getMafOrgapeda(): ?string
    {
        return $this->mafOrgapeda;
    }

    public function setMafOrgapeda(?string $mafOrgapeda): self
    {
        $this->mafOrgapeda = $mafOrgapeda;

        return $this;
    }

    public function getMafAuteurc(): ?string
    {
        return $this->mafAuteurc;
    }

    public function setMafAuteurc(string $mafAuteurc): self
    {
        $this->mafAuteurc = $mafAuteurc;

        return $this;
    }

    public function getMafDatec(): ?\DateTimeInterface
    {
        return $this->mafDatec;
    }

    public function setMafDatec(\DateTimeInterface $mafDatec): self
    {
        $this->mafDatec = $mafDatec;

        return $this;
    }

    public function getMafAuteurm(): ?string
    {
        return $this->mafAuteurm;
    }

    public function setMafAuteurm(?string $mafAuteurm): self
    {
        $this->mafAuteurm = $mafAuteurm;

        return $this;
    }

    public function getMafDatem(): ?\DateTimeInterface
    {
        return $this->mafDatem;
    }

    public function setMafDatem(?\DateTimeInterface $mafDatem): self
    {
        $this->mafDatem = $mafDatem;

        return $this;
    }

    public function getMafAuteura(): ?string
    {
        return $this->mafAuteura;
    }

    public function setMafAuteura(?string $mafAuteura): self
    {
        $this->mafAuteura = $mafAuteura;

        return $this;
    }

    public function getMafDatea(): ?\DateTimeInterface
    {
        return $this->mafDatea;
    }

    public function setMafDatea(?\DateTimeInterface $mafDatea): self
    {
        $this->mafDatea = $mafDatea;

        return $this;
    }

    public function getMafDatev(): ?\DateTimeInterface
    {
        return $this->mafDatev;
    }

    public function setMafDatev(?\DateTimeInterface $mafDatev): self
    {
        $this->mafDatev = $mafDatev;

        return $this;
    }

    public function getMafSpecifo(): ?string
    {
        return $this->mafSpecifo;
    }

    public function setMafSpecifo(?string $mafSpecifo): self
    {
        $this->mafSpecifo = $mafSpecifo;

        return $this;
    }

    public function getMafPrerequis(): ?string
    {
        return $this->mafPrerequis;
    }

    public function setMafPrerequis(?string $mafPrerequis): self
    {
        $this->mafPrerequis = $mafPrerequis;

        return $this;
    }

    public function getMafAgreremu(): ?string
    {
        return $this->mafAgreremu;
    }

    public function setMafAgreremu(?string $mafAgreremu): self
    {
        $this->mafAgreremu = $mafAgreremu;

        return $this;
    }

    public function getMafTypemar(): ?string
    {
        return $this->mafTypemar;
    }

    public function setMafTypemar(?string $mafTypemar): self
    {
        $this->mafTypemar = $mafTypemar;

        return $this;
    }

    public function getMafAuteurv(): ?Utilisateur
    {
        return $this->mafAuteurv;
    }

    public function setMafAuteurv(?Utilisateur $mafAuteurv): self
    {
        $this->mafAuteurv = $mafAuteurv;

        return $this;
    }

    public function getMafGfeprinc(): ?Gfe
    {
        return $this->mafGfeprinc;
    }

    public function setMafGfeprinc(?Gfe $mafGfeprinc): self
    {
        $this->mafGfeprinc = $mafGfeprinc;

        return $this;
    }

    public function getMafMesurep(): ?Mesure
    {
        return $this->mafMesurep;
    }

    public function setMafMesurep(?Mesure $mafMesurep): self
    {
        $this->mafMesurep = $mafMesurep;

        return $this;
    }

    public function getMafMode(): ?ModAch
    {
        return $this->mafMode;
    }

    public function setMafMode(?ModAch $mafMode): self
    {
        $this->mafMode = $mafMode;

        return $this;
    }

    public function getMafNivsortie(): ?Niveau
    {
        return $this->mafNivsortie;
    }

    public function setMafNivsortie(?Niveau $mafNivsortie): self
    {
        $this->mafNivsortie = $mafNivsortie;

        return $this;
    }

    public function getMafNomint(): ?NomenInt
    {
        return $this->mafNomint;
    }

    public function setMafNomint(?NomenInt $mafNomint): self
    {
        $this->mafNomint = $mafNomint;

        return $this;
    }

    public function getMafNsfprinc(): ?Nsf
    {
        return $this->mafNsfprinc;
    }

    public function setMafNsfprinc(?Nsf $mafNsfprinc): self
    {
        $this->mafNsfprinc = $mafNsfprinc;

        return $this;
    }

    public function getMafOrigine(): ?Commande
    {
        return $this->mafOrigine;
    }

    public function setMafOrigine(?Commande $mafOrigine): self
    {
        $this->mafOrigine = $mafOrigine;

        return $this;
    }

    public function getMafUnitref(): ?UnitePrest
    {
        return $this->mafUnitref;
    }

    public function setMafUnitref(?UnitePrest $mafUnitref): self
    {
        $this->mafUnitref = $mafUnitref;

        return $this;
    }

    public function getMafValid(): ?Validation
    {
        return $this->mafValid;
    }

    public function setMafValid(?Validation $mafValid): self
    {
        $this->mafValid = $mafValid;

        return $this;
    }

    public function getMafZone(): ?ZoneEmploi
    {
        return $this->mafZone;
    }

    public function setMafZone(?ZoneEmploi $mafZone): self
    {
        $this->mafZone = $mafZone;

        return $this;
    }


}
