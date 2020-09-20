<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModafProg
 *
 * @ORM\Table(name="modaf_prog", uniqueConstraints={@ORM\UniqueConstraint(name="modaf_prog_pk", columns={"mop_id"})}, indexes={@ORM\Index(name="modaf_prog_zezif", columns={"mop_zone"}), @ORM\Index(name="modaf_prog_nnif2", columns={"mop_nivsortie"}), @ORM\Index(name="modaf_prog_nnif", columns={"mop_nsfprinc"}), @ORM\Index(name="modaf_prog_vvif", columns={"mop_valid"}), @ORM\Index(name="modaf_prog_upuif", columns={"mop_unitref"}), @ORM\Index(name="modaf_prog_mamif2", columns={"mop_mode"}), @ORM\Index(name="modaf_prog_ggif", columns={"mop_gfeprinc"}), @ORM\Index(name="modaf_prog_mpmif", columns={"mop_mesurep"}), @ORM\Index(name="modaf_prog_ninif", columns={"mop_nomint"}), @ORM\Index(name="modaf_prog_mamif", columns={"mop_modeleaf"}), @ORM\Index(name="modaf_prog_ppif", columns={"mop_prog"})})
 * @ORM\Entity
 */
class ModafProg
{
    /**
     * @var string
     *
     * @ORM\Column(name="mop_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="modaf_prog_mop_id_seq", allocationSize=1, initialValue=1)
     */
    private $mopId;

    /**
     * @var string
     *
     * @ORM\Column(name="mop_code", type="string", length=20, nullable=false)
     */
    private $mopCode;

    /**
     * @var string
     *
     * @ORM\Column(name="mop_libelle", type="string", length=50, nullable=false)
     */
    private $mopLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="mop_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $mopEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="mop_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $mopAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mop_datec", type="datetime", nullable=false)
     */
    private $mopDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mop_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $mopAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="mop_datem", type="datetime", nullable=true)
     */
    private $mopDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mop_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $mopAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="mop_datea", type="datetime", nullable=true)
     */
    private $mopDatea;

    /**
     * @var string
     *
     * @ORM\Column(name="mop_libform", type="string", length=50, nullable=false)
     */
    private $mopLibform;

    /**
     * @var string
     *
     * @ORM\Column(name="mop_pourcent", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $mopPourcent;

    /**
     * @var string
     *
     * @ORM\Column(name="mop_pourent", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $mopPourent;

    /**
     * @var string
     *
     * @ORM\Column(name="mop_dureemini", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $mopDureemini;

    /**
     * @var string
     *
     * @ORM\Column(name="mop_dureemaxi", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $mopDureemaxi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mop_htotal", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $mopHtotal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mop_hstagremu", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $mopHstagremu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mop_maxistagremu", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $mopMaxistagremu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mop_nbvisestag", type="decimal", precision=5, scale=0, nullable=true)
     */
    private $mopNbvisestag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mop_coutheure", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $mopCoutheure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mop_agreremu", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $mopAgreremu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mop_alternance", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $mopAlternance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mop_typemar", type="string", length=1, nullable=true, options={"comment"="Type marche (forfaitaire_F/bon de commande_B)"})
     */
    private $mopTypemar;

    /**
     * @var \Gfe
     *
     * @ORM\ManyToOne(targetEntity="Gfe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mop_gfeprinc", referencedColumnName="gfe_id")
     * })
     */
    private $mopGfeprinc;

    /**
     * @var \MesProg
     *
     * @ORM\ManyToOne(targetEntity="MesProg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mop_mesurep", referencedColumnName="mpg_id")
     * })
     */
    private $mopMesurep;

    /**
     * @var \ModeleAf
     *
     * @ORM\ManyToOne(targetEntity="ModeleAf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mop_modeleaf", referencedColumnName="maf_id")
     * })
     */
    private $mopModeleaf;

    /**
     * @var \ModAch
     *
     * @ORM\ManyToOne(targetEntity="ModAch")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mop_mode", referencedColumnName="mod_id")
     * })
     */
    private $mopMode;

    /**
     * @var \Niveau
     *
     * @ORM\ManyToOne(targetEntity="Niveau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mop_nivsortie", referencedColumnName="niv_id")
     * })
     */
    private $mopNivsortie;

    /**
     * @var \NomenInt
     *
     * @ORM\ManyToOne(targetEntity="NomenInt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mop_nomint", referencedColumnName="nin_id")
     * })
     */
    private $mopNomint;

    /**
     * @var \Nsf
     *
     * @ORM\ManyToOne(targetEntity="Nsf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mop_nsfprinc", referencedColumnName="nsf_id")
     * })
     */
    private $mopNsfprinc;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mop_prog", referencedColumnName="prg_id")
     * })
     */
    private $mopProg;

    /**
     * @var \UnitePrest
     *
     * @ORM\ManyToOne(targetEntity="UnitePrest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mop_unitref", referencedColumnName="unp_id")
     * })
     */
    private $mopUnitref;

    /**
     * @var \Validation
     *
     * @ORM\ManyToOne(targetEntity="Validation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mop_valid", referencedColumnName="val_id")
     * })
     */
    private $mopValid;

    /**
     * @var \ZoneEmploi
     *
     * @ORM\ManyToOne(targetEntity="ZoneEmploi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mop_zone", referencedColumnName="zoe_id")
     * })
     */
    private $mopZone;

    public function getMopId(): ?string
    {
        return $this->mopId;
    }

    public function getMopCode(): ?string
    {
        return $this->mopCode;
    }

    public function setMopCode(string $mopCode): self
    {
        $this->mopCode = $mopCode;

        return $this;
    }

    public function getMopLibelle(): ?string
    {
        return $this->mopLibelle;
    }

    public function setMopLibelle(string $mopLibelle): self
    {
        $this->mopLibelle = $mopLibelle;

        return $this;
    }

    public function getMopEtat(): ?string
    {
        return $this->mopEtat;
    }

    public function setMopEtat(string $mopEtat): self
    {
        $this->mopEtat = $mopEtat;

        return $this;
    }

    public function getMopAuteurc(): ?string
    {
        return $this->mopAuteurc;
    }

    public function setMopAuteurc(string $mopAuteurc): self
    {
        $this->mopAuteurc = $mopAuteurc;

        return $this;
    }

    public function getMopDatec(): ?\DateTimeInterface
    {
        return $this->mopDatec;
    }

    public function setMopDatec(\DateTimeInterface $mopDatec): self
    {
        $this->mopDatec = $mopDatec;

        return $this;
    }

    public function getMopAuteurm(): ?string
    {
        return $this->mopAuteurm;
    }

    public function setMopAuteurm(?string $mopAuteurm): self
    {
        $this->mopAuteurm = $mopAuteurm;

        return $this;
    }

    public function getMopDatem(): ?\DateTimeInterface
    {
        return $this->mopDatem;
    }

    public function setMopDatem(?\DateTimeInterface $mopDatem): self
    {
        $this->mopDatem = $mopDatem;

        return $this;
    }

    public function getMopAuteura(): ?string
    {
        return $this->mopAuteura;
    }

    public function setMopAuteura(?string $mopAuteura): self
    {
        $this->mopAuteura = $mopAuteura;

        return $this;
    }

    public function getMopDatea(): ?\DateTimeInterface
    {
        return $this->mopDatea;
    }

    public function setMopDatea(?\DateTimeInterface $mopDatea): self
    {
        $this->mopDatea = $mopDatea;

        return $this;
    }

    public function getMopLibform(): ?string
    {
        return $this->mopLibform;
    }

    public function setMopLibform(string $mopLibform): self
    {
        $this->mopLibform = $mopLibform;

        return $this;
    }

    public function getMopPourcent(): ?string
    {
        return $this->mopPourcent;
    }

    public function setMopPourcent(string $mopPourcent): self
    {
        $this->mopPourcent = $mopPourcent;

        return $this;
    }

    public function getMopPourent(): ?string
    {
        return $this->mopPourent;
    }

    public function setMopPourent(string $mopPourent): self
    {
        $this->mopPourent = $mopPourent;

        return $this;
    }

    public function getMopDureemini(): ?string
    {
        return $this->mopDureemini;
    }

    public function setMopDureemini(string $mopDureemini): self
    {
        $this->mopDureemini = $mopDureemini;

        return $this;
    }

    public function getMopDureemaxi(): ?string
    {
        return $this->mopDureemaxi;
    }

    public function setMopDureemaxi(string $mopDureemaxi): self
    {
        $this->mopDureemaxi = $mopDureemaxi;

        return $this;
    }

    public function getMopHtotal(): ?string
    {
        return $this->mopHtotal;
    }

    public function setMopHtotal(?string $mopHtotal): self
    {
        $this->mopHtotal = $mopHtotal;

        return $this;
    }

    public function getMopHstagremu(): ?string
    {
        return $this->mopHstagremu;
    }

    public function setMopHstagremu(?string $mopHstagremu): self
    {
        $this->mopHstagremu = $mopHstagremu;

        return $this;
    }

    public function getMopMaxistagremu(): ?string
    {
        return $this->mopMaxistagremu;
    }

    public function setMopMaxistagremu(?string $mopMaxistagremu): self
    {
        $this->mopMaxistagremu = $mopMaxistagremu;

        return $this;
    }

    public function getMopNbvisestag(): ?string
    {
        return $this->mopNbvisestag;
    }

    public function setMopNbvisestag(?string $mopNbvisestag): self
    {
        $this->mopNbvisestag = $mopNbvisestag;

        return $this;
    }

    public function getMopCoutheure(): ?string
    {
        return $this->mopCoutheure;
    }

    public function setMopCoutheure(?string $mopCoutheure): self
    {
        $this->mopCoutheure = $mopCoutheure;

        return $this;
    }

    public function getMopAgreremu(): ?string
    {
        return $this->mopAgreremu;
    }

    public function setMopAgreremu(?string $mopAgreremu): self
    {
        $this->mopAgreremu = $mopAgreremu;

        return $this;
    }

    public function getMopAlternance(): ?string
    {
        return $this->mopAlternance;
    }

    public function setMopAlternance(?string $mopAlternance): self
    {
        $this->mopAlternance = $mopAlternance;

        return $this;
    }

    public function getMopTypemar(): ?string
    {
        return $this->mopTypemar;
    }

    public function setMopTypemar(?string $mopTypemar): self
    {
        $this->mopTypemar = $mopTypemar;

        return $this;
    }

    public function getMopGfeprinc(): ?Gfe
    {
        return $this->mopGfeprinc;
    }

    public function setMopGfeprinc(?Gfe $mopGfeprinc): self
    {
        $this->mopGfeprinc = $mopGfeprinc;

        return $this;
    }

    public function getMopMesurep(): ?MesProg
    {
        return $this->mopMesurep;
    }

    public function setMopMesurep(?MesProg $mopMesurep): self
    {
        $this->mopMesurep = $mopMesurep;

        return $this;
    }

    public function getMopModeleaf(): ?ModeleAf
    {
        return $this->mopModeleaf;
    }

    public function setMopModeleaf(?ModeleAf $mopModeleaf): self
    {
        $this->mopModeleaf = $mopModeleaf;

        return $this;
    }

    public function getMopMode(): ?ModAch
    {
        return $this->mopMode;
    }

    public function setMopMode(?ModAch $mopMode): self
    {
        $this->mopMode = $mopMode;

        return $this;
    }

    public function getMopNivsortie(): ?Niveau
    {
        return $this->mopNivsortie;
    }

    public function setMopNivsortie(?Niveau $mopNivsortie): self
    {
        $this->mopNivsortie = $mopNivsortie;

        return $this;
    }

    public function getMopNomint(): ?NomenInt
    {
        return $this->mopNomint;
    }

    public function setMopNomint(?NomenInt $mopNomint): self
    {
        $this->mopNomint = $mopNomint;

        return $this;
    }

    public function getMopNsfprinc(): ?Nsf
    {
        return $this->mopNsfprinc;
    }

    public function setMopNsfprinc(?Nsf $mopNsfprinc): self
    {
        $this->mopNsfprinc = $mopNsfprinc;

        return $this;
    }

    public function getMopProg(): ?Programme
    {
        return $this->mopProg;
    }

    public function setMopProg(?Programme $mopProg): self
    {
        $this->mopProg = $mopProg;

        return $this;
    }

    public function getMopUnitref(): ?UnitePrest
    {
        return $this->mopUnitref;
    }

    public function setMopUnitref(?UnitePrest $mopUnitref): self
    {
        $this->mopUnitref = $mopUnitref;

        return $this;
    }

    public function getMopValid(): ?Validation
    {
        return $this->mopValid;
    }

    public function setMopValid(?Validation $mopValid): self
    {
        $this->mopValid = $mopValid;

        return $this;
    }

    public function getMopZone(): ?ZoneEmploi
    {
        return $this->mopZone;
    }

    public function setMopZone(?ZoneEmploi $mopZone): self
    {
        $this->mopZone = $mopZone;

        return $this;
    }


}
