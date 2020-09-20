<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", uniqueConstraints={@ORM\UniqueConstraint(name="commande_pk", columns={"cmd_id"})}, indexes={@ORM\Index(name="commande_eeif", columns={"cmd_sac"}), @ORM\Index(name="commande_ppif", columns={"cmd_programme"}), @ORM\Index(name="commande_ccif", columns={"cmd_commission"}), @ORM\Index(name="commande_agaif", columns={"cmd_afglobal"}), @ORM\Index(name="commande_ggif", columns={"cmd_groupec"}), @ORM\Index(name="commande_aaif", columns={"cmd_antsac"}), @ORM\Index(name="commande_uuif", columns={"cmd_auteurdfinal"}), @ORM\Index(name="commande_ofif", columns={"cmd_offretenue"}), @ORM\Index(name="commande_uuif2", columns={"cmd_auteurdcomm"}), @ORM\Index(name="commande_ccif3", columns={"cmd_origine"}), @ORM\Index(name="commande_cmd_af___af_afo_id_fk", columns={"cmd_af"}), @ORM\Index(name="commande_pppif", columns={"cmd_periode"}), @ORM\Index(name="commande_ccif2", columns={"cmd_rattachee"}), @ORM\Index(name="commande_mpmif", columns={"cmd_modele"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="cmd_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="seq_commande", allocationSize=1, initialValue=1)
     */
    private $cmdId;

    /**
     * @var string
     *
     * @ORM\Column(name="cmd_code", type="string", length=4, nullable=false)
     */
    private $cmdCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmd_lot", type="string", length=2, nullable=true)
     */
    private $cmdLot;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmd_marchea", type="string", length=4, nullable=true)
     */
    private $cmdMarchea;

    /**
     * @var string
     *
     * @ORM\Column(name="cmd_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $cmdEtat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmd_fseprog", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $cmdFseprog;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmd_fsereal", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $cmdFsereal;

    /**
     * @var string
     *
     * @ORM\Column(name="cmd_conductible", type="decimal", precision=1, scale=0, nullable=false, options={"comment"="Sauf mode Chq"})
     */
    private $cmdConductible;

    /**
     * @var string
     *
     * @ORM\Column(name="cmd_reconduite", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $cmdReconduite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cmd_datec", type="datetime", nullable=false)
     */
    private $cmdDatec;

    /**
     * @var string
     *
     * @ORM\Column(name="cmd_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $cmdAuteurc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cmd_datem", type="datetime", nullable=true)
     */
    private $cmdDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmd_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $cmdAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cmd_datea", type="datetime", nullable=true)
     */
    private $cmdDatea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmd_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $cmdAuteura;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmd_typec", type="string", length=2, nullable=true, options={"comment"="GR = Groupe, SA = Structure Acceuil"})
     */
    private $cmdTypec;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cmd_datedfinale", type="datetime", nullable=true)
     */
    private $cmdDatedfinale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmd_decif", type="decimal", precision=1, scale=0, nullable=true, options={"comment"="1 = ValidÃ©, 2 =  RejetÃ©"})
     */
    private $cmdDecif;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cmd_datedcomm", type="datetime", nullable=true)
     */
    private $cmdDatedcomm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmd_decic", type="decimal", precision=1, scale=0, nullable=true, options={"comment"="1 = ValidÃ©, 2 =  RejetÃ©"})
     */
    private $cmdDecic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmd_type", type="decimal", precision=1, scale=0, nullable=true, options={"comment"="Type : Forfait=0,Bon de commande =1, 1=BDC globale"})
     */
    private $cmdType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmd_nobdc", type="decimal", precision=16, scale=0, nullable=true, options={"comment"="Numero bon de commande"})
     */
    private $cmdNobdc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cmd_dtdebexe", type="datetime", nullable=true, options={"comment"="Date debut execution du bon de commande"})
     */
    private $cmdDtdebexe;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cmd_dtfinexe", type="datetime", nullable=true, options={"comment"="Date fin execution du bon de commande"})
     */
    private $cmdDtfinexe;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cmd_dtvalid", type="datetime", nullable=true, options={"comment"="Date validation bon de commande"})
     */
    private $cmdDtvalid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cmd_dtbdcemis", type="datetime", nullable=true, options={"comment"="Date emission bon de commande"})
     */
    private $cmdDtbdcemis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmd_localis", type="string", length=500, nullable=true, options={"comment"="Localisation des prestations BC"})
     */
    private $cmdLocalis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmd_mbcid", type="decimal", precision=6, scale=0, nullable=true, options={"comment"="Commande_ID du marche BC"})
     */
    private $cmdMbcid;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cmd_rattachee", referencedColumnName="cmd_id")
     * })
     */
    private $cmdRattachee;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cmd_origine", referencedColumnName="cmd_id")
     * })
     */
    private $cmdOrigine;

    /**
     * @var \AfGlobal
     *
     * @ORM\ManyToOne(targetEntity="AfGlobal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cmd_afglobal", referencedColumnName="afg_id")
     * })
     */
    private $cmdAfglobal;

    /**
     * @var \Af
     *
     * @ORM\ManyToOne(targetEntity="Af")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cmd_af", referencedColumnName="afo_id")
     * })
     */
    private $cmdAf;

    /**
     * @var \Antenne
     *
     * @ORM\ManyToOne(targetEntity="Antenne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cmd_antsac", referencedColumnName="ant_id")
     * })
     */
    private $cmdAntsac;

    /**
     * @var \Commission
     *
     * @ORM\ManyToOne(targetEntity="Commission")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cmd_commission", referencedColumnName="com_id")
     * })
     */
    private $cmdCommission;

    /**
     * @var \Groupe
     *
     * @ORM\ManyToOne(targetEntity="Groupe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cmd_groupec", referencedColumnName="grp_id")
     * })
     */
    private $cmdGroupec;

    /**
     * @var \ModafProg
     *
     * @ORM\ManyToOne(targetEntity="ModafProg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cmd_modele", referencedColumnName="mop_id")
     * })
     */
    private $cmdModele;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cmd_offretenue", referencedColumnName="off_id")
     * })
     */
    private $cmdOffretenue;

    /**
     * @var \PerProg
     *
     * @ORM\ManyToOne(targetEntity="PerProg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cmd_periode", referencedColumnName="ppr_id")
     * })
     */
    private $cmdPeriode;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cmd_programme", referencedColumnName="prg_id")
     * })
     */
    private $cmdProgramme;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cmd_sac", referencedColumnName="ets_id")
     * })
     */
    private $cmdSac;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cmd_auteurdfinal", referencedColumnName="uti_id")
     * })
     */
    private $cmdAuteurdfinal;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cmd_auteurdcomm", referencedColumnName="uti_id")
     * })
     */
    private $cmdAuteurdcomm;

    public function getCmdId(): ?int
    {
        return $this->cmdId;
    }

    public function getCmdCode(): ?string
    {
        return $this->cmdCode;
    }

    public function setCmdCode(string $cmdCode): self
    {
        $this->cmdCode = $cmdCode;

        return $this;
    }

    public function getCmdLot(): ?string
    {
        return $this->cmdLot;
    }

    public function setCmdLot(?string $cmdLot): self
    {
        $this->cmdLot = $cmdLot;

        return $this;
    }

    public function getCmdMarchea(): ?string
    {
        return $this->cmdMarchea;
    }

    public function setCmdMarchea(?string $cmdMarchea): self
    {
        $this->cmdMarchea = $cmdMarchea;

        return $this;
    }

    public function getCmdEtat(): ?string
    {
        return $this->cmdEtat;
    }

    public function setCmdEtat(string $cmdEtat): self
    {
        $this->cmdEtat = $cmdEtat;

        return $this;
    }

    public function getCmdFseprog(): ?string
    {
        return $this->cmdFseprog;
    }

    public function setCmdFseprog(?string $cmdFseprog): self
    {
        $this->cmdFseprog = $cmdFseprog;

        return $this;
    }

    public function getCmdFsereal(): ?string
    {
        return $this->cmdFsereal;
    }

    public function setCmdFsereal(?string $cmdFsereal): self
    {
        $this->cmdFsereal = $cmdFsereal;

        return $this;
    }

    public function getCmdConductible(): ?string
    {
        return $this->cmdConductible;
    }

    public function setCmdConductible(string $cmdConductible): self
    {
        $this->cmdConductible = $cmdConductible;

        return $this;
    }

    public function getCmdReconduite(): ?string
    {
        return $this->cmdReconduite;
    }

    public function setCmdReconduite(string $cmdReconduite): self
    {
        $this->cmdReconduite = $cmdReconduite;

        return $this;
    }

    public function getCmdDatec(): ?\DateTimeInterface
    {
        return $this->cmdDatec;
    }

    public function setCmdDatec(\DateTimeInterface $cmdDatec): self
    {
        $this->cmdDatec = $cmdDatec;

        return $this;
    }

    public function getCmdAuteurc(): ?string
    {
        return $this->cmdAuteurc;
    }

    public function setCmdAuteurc(string $cmdAuteurc): self
    {
        $this->cmdAuteurc = $cmdAuteurc;

        return $this;
    }

    public function getCmdDatem(): ?\DateTimeInterface
    {
        return $this->cmdDatem;
    }

    public function setCmdDatem(?\DateTimeInterface $cmdDatem): self
    {
        $this->cmdDatem = $cmdDatem;

        return $this;
    }

    public function getCmdAuteurm(): ?string
    {
        return $this->cmdAuteurm;
    }

    public function setCmdAuteurm(?string $cmdAuteurm): self
    {
        $this->cmdAuteurm = $cmdAuteurm;

        return $this;
    }

    public function getCmdDatea(): ?\DateTimeInterface
    {
        return $this->cmdDatea;
    }

    public function setCmdDatea(?\DateTimeInterface $cmdDatea): self
    {
        $this->cmdDatea = $cmdDatea;

        return $this;
    }

    public function getCmdAuteura(): ?string
    {
        return $this->cmdAuteura;
    }

    public function setCmdAuteura(?string $cmdAuteura): self
    {
        $this->cmdAuteura = $cmdAuteura;

        return $this;
    }

    public function getCmdTypec(): ?string
    {
        return $this->cmdTypec;
    }

    public function setCmdTypec(?string $cmdTypec): self
    {
        $this->cmdTypec = $cmdTypec;

        return $this;
    }

    public function getCmdDatedfinale(): ?\DateTimeInterface
    {
        return $this->cmdDatedfinale;
    }

    public function setCmdDatedfinale(?\DateTimeInterface $cmdDatedfinale): self
    {
        $this->cmdDatedfinale = $cmdDatedfinale;

        return $this;
    }

    public function getCmdDecif(): ?string
    {
        return $this->cmdDecif;
    }

    public function setCmdDecif(?string $cmdDecif): self
    {
        $this->cmdDecif = $cmdDecif;

        return $this;
    }

    public function getCmdDatedcomm(): ?\DateTimeInterface
    {
        return $this->cmdDatedcomm;
    }

    public function setCmdDatedcomm(?\DateTimeInterface $cmdDatedcomm): self
    {
        $this->cmdDatedcomm = $cmdDatedcomm;

        return $this;
    }

    public function getCmdDecic(): ?string
    {
        return $this->cmdDecic;
    }

    public function setCmdDecic(?string $cmdDecic): self
    {
        $this->cmdDecic = $cmdDecic;

        return $this;
    }

    public function getCmdType(): ?string
    {
        return $this->cmdType;
    }

    public function setCmdType(?string $cmdType): self
    {
        $this->cmdType = $cmdType;

        return $this;
    }

    public function getCmdNobdc(): ?string
    {
        return $this->cmdNobdc;
    }

    public function setCmdNobdc(?string $cmdNobdc): self
    {
        $this->cmdNobdc = $cmdNobdc;

        return $this;
    }

    public function getCmdDtdebexe(): ?\DateTimeInterface
    {
        return $this->cmdDtdebexe;
    }

    public function setCmdDtdebexe(?\DateTimeInterface $cmdDtdebexe): self
    {
        $this->cmdDtdebexe = $cmdDtdebexe;

        return $this;
    }

    public function getCmdDtfinexe(): ?\DateTimeInterface
    {
        return $this->cmdDtfinexe;
    }

    public function setCmdDtfinexe(?\DateTimeInterface $cmdDtfinexe): self
    {
        $this->cmdDtfinexe = $cmdDtfinexe;

        return $this;
    }

    public function getCmdDtvalid(): ?\DateTimeInterface
    {
        return $this->cmdDtvalid;
    }

    public function setCmdDtvalid(?\DateTimeInterface $cmdDtvalid): self
    {
        $this->cmdDtvalid = $cmdDtvalid;

        return $this;
    }

    public function getCmdDtbdcemis(): ?\DateTimeInterface
    {
        return $this->cmdDtbdcemis;
    }

    public function setCmdDtbdcemis(?\DateTimeInterface $cmdDtbdcemis): self
    {
        $this->cmdDtbdcemis = $cmdDtbdcemis;

        return $this;
    }

    public function getCmdLocalis(): ?string
    {
        return $this->cmdLocalis;
    }

    public function setCmdLocalis(?string $cmdLocalis): self
    {
        $this->cmdLocalis = $cmdLocalis;

        return $this;
    }

    public function getCmdMbcid(): ?string
    {
        return $this->cmdMbcid;
    }

    public function setCmdMbcid(?string $cmdMbcid): self
    {
        $this->cmdMbcid = $cmdMbcid;

        return $this;
    }

    public function getCmdRattachee(): ?self
    {
        return $this->cmdRattachee;
    }

    public function setCmdRattachee(?self $cmdRattachee): self
    {
        $this->cmdRattachee = $cmdRattachee;

        return $this;
    }

    public function getCmdOrigine(): ?self
    {
        return $this->cmdOrigine;
    }

    public function setCmdOrigine(?self $cmdOrigine): self
    {
        $this->cmdOrigine = $cmdOrigine;

        return $this;
    }

    public function getCmdAfglobal(): ?AfGlobal
    {
        return $this->cmdAfglobal;
    }

    public function setCmdAfglobal(?AfGlobal $cmdAfglobal): self
    {
        $this->cmdAfglobal = $cmdAfglobal;

        return $this;
    }

    public function getCmdAf(): ?Af
    {
        return $this->cmdAf;
    }

    public function setCmdAf(?Af $cmdAf): self
    {
        $this->cmdAf = $cmdAf;

        return $this;
    }

    public function getCmdAntsac(): ?Antenne
    {
        return $this->cmdAntsac;
    }

    public function setCmdAntsac(?Antenne $cmdAntsac): self
    {
        $this->cmdAntsac = $cmdAntsac;

        return $this;
    }

    public function getCmdCommission(): ?Commission
    {
        return $this->cmdCommission;
    }

    public function setCmdCommission(?Commission $cmdCommission): self
    {
        $this->cmdCommission = $cmdCommission;

        return $this;
    }

    public function getCmdGroupec(): ?Groupe
    {
        return $this->cmdGroupec;
    }

    public function setCmdGroupec(?Groupe $cmdGroupec): self
    {
        $this->cmdGroupec = $cmdGroupec;

        return $this;
    }

    public function getCmdModele(): ?ModafProg
    {
        return $this->cmdModele;
    }

    public function setCmdModele(?ModafProg $cmdModele): self
    {
        $this->cmdModele = $cmdModele;

        return $this;
    }

    public function getCmdOffretenue(): ?Offre
    {
        return $this->cmdOffretenue;
    }

    public function setCmdOffretenue(?Offre $cmdOffretenue): self
    {
        $this->cmdOffretenue = $cmdOffretenue;

        return $this;
    }

    public function getCmdPeriode(): ?PerProg
    {
        return $this->cmdPeriode;
    }

    public function setCmdPeriode(?PerProg $cmdPeriode): self
    {
        $this->cmdPeriode = $cmdPeriode;

        return $this;
    }

    public function getCmdProgramme(): ?Programme
    {
        return $this->cmdProgramme;
    }

    public function setCmdProgramme(?Programme $cmdProgramme): self
    {
        $this->cmdProgramme = $cmdProgramme;

        return $this;
    }

    public function getCmdSac(): ?Etablssmt
    {
        return $this->cmdSac;
    }

    public function setCmdSac(?Etablssmt $cmdSac): self
    {
        $this->cmdSac = $cmdSac;

        return $this;
    }

    public function getCmdAuteurdfinal(): ?Utilisateur
    {
        return $this->cmdAuteurdfinal;
    }

    public function setCmdAuteurdfinal(?Utilisateur $cmdAuteurdfinal): self
    {
        $this->cmdAuteurdfinal = $cmdAuteurdfinal;

        return $this;
    }

    public function getCmdAuteurdcomm(): ?Utilisateur
    {
        return $this->cmdAuteurdcomm;
    }

    public function setCmdAuteurdcomm(?Utilisateur $cmdAuteurdcomm): self
    {
        $this->cmdAuteurdcomm = $cmdAuteurdcomm;

        return $this;
    }


}
