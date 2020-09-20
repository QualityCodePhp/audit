<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DdePaiement
 *
 * @ORM\Table(name="dde_paiement", uniqueConstraints={@ORM\UniqueConstraint(name="dde_paiement_pk", columns={"ddp_id"})}, indexes={@ORM\Index(name="fk_uti_sign_tit_fk", columns={"uti_id_sign_tit"}), @ORM\Index(name="dde_paiement_uuif4", columns={"ddp_autmandat"}), @ORM\Index(name="dde_paiement_uuif2", columns={"ddp_auteurcr"}), @ORM\Index(name="ddp_rep_fk", columns={"rep_id"}), @ORM\Index(name="fk_ddp_psig_fk", columns={"psig_id"}), @ORM\Index(name="fk_uti_sign_region_fk", columns={"uti_id_sign_reg"}), @ORM\Index(name="dde_paiement_bbif", columns={"ddp_bordereau"}), @ORM\Index(name="dde_paiement_uuif7", columns={"ddp_auteurvcr"}), @ORM\Index(name="dde_paiement_upuif", columns={"ddp_unite"}), @ORM\Index(name="ddp_ref_id_type_csf_fk", columns={"ref_id_type_csf"}), @ORM\Index(name="ddp_ddp_titulaire_fk", columns={"ddp_id_titulaire"}), @ORM\Index(name="dde_paiement_uuif5", columns={"ddp_autpaiemt"}), @ORM\Index(name="dde_paiement_eeif", columns={"ddp_etspaye"}), @ORM\Index(name="dde_paiement_uuif", columns={"ddp_auteurar"}), @ORM\Index(name="fk_uti_sign_st_fk", columns={"uti_id_sign_st"}), @ORM\Index(name="dde_paiement_eeif2", columns={"ddp_etspresta"}), @ORM\Index(name="dde_paiement_uuif3", columns={"ddp_autliquid"}), @ORM\Index(name="ddp_bdp_initial_fk", columns={"bdp_id_initial"}), @ORM\Index(name="dde_paiement_uuif6", columns={"ddp_auteurv"}), @ORM\Index(name="dde_paiement_ofif", columns={"ddp_offre"})})
 * @ORM\Entity
 */
class DdePaiement
{
    /**
     * @var string
     *
     * @ORM\Column(name="ddp_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dde_paiement_ddp_id_seq", allocationSize=1, initialValue=1)
     */
    private $ddpId;

    /**
     * @var string
     *
     * @ORM\Column(name="ddp_code", type="string", length=6, nullable=false)
     */
    private $ddpCode;

    /**
     * @var string
     *
     * @ORM\Column(name="ddp_type", type="decimal", precision=1, scale=0, nullable=false, options={"comment"="1:Avance / 2:Acompte / 3:Solde"})
     */
    private $ddpType;

    /**
     * @var string
     *
     * @ORM\Column(name="ddp_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $ddpEtat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ddp_datear", type="datetime", nullable=true)
     */
    private $ddpDatear;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ddp_datecr", type="datetime", nullable=true)
     */
    private $ddpDatecr;

    /**
     * @var string
     *
     * @ORM\Column(name="ddp_nbreal", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $ddpNbreal;

    /**
     * @var string
     *
     * @ORM\Column(name="ddp_mntdde", type="decimal", precision=12, scale=2, nullable=false)
     */
    private $ddpMntdde;

    /**
     * @var string
     *
     * @ORM\Column(name="ddp_mntfse", type="decimal", precision=12, scale=2, nullable=false)
     */
    private $ddpMntfse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_mntliquide", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddpMntliquide;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ddp_dateliquid", type="datetime", nullable=true)
     */
    private $ddpDateliquid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_refaliquid", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $ddpRefaliquid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_mntmandat", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddpMntmandat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ddp_datemandat", type="datetime", nullable=true)
     */
    private $ddpDatemandat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_refamandat", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $ddpRefamandat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_mntpaye", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddpMntpaye;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ddp_datepaiemt", type="datetime", nullable=true)
     */
    private $ddpDatepaiemt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_refapaiemt", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $ddpRefapaiemt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_comment", type="string", length=300, nullable=true)
     */
    private $ddpComment;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ddp_datev", type="datetime", nullable=true)
     */
    private $ddpDatev;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ddp_datevcr", type="datetime", nullable=true)
     */
    private $ddpDatevcr;

    /**
     * @var string
     *
     * @ORM\Column(name="ddp_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $ddpAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ddp_datec", type="datetime", nullable=false)
     */
    private $ddpDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $ddpAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ddp_datem", type="datetime", nullable=true)
     */
    private $ddpDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $ddpAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ddp_datea", type="datetime", nullable=true)
     */
    private $ddpDatea;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ddp_datedispo", type="datetime", nullable=true)
     */
    private $ddpDatedispo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ddp_dateeliq", type="datetime", nullable=true)
     */
    private $ddpDateeliq;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_recupavpc", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $ddpRecupavpc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_recupavmt", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddpRecupavmt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_nbacpt", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $ddpNbacpt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_exefinanpc", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $ddpExefinanpc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_fliqnum", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $ddpFliqnum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_fliqlig", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $ddpFliqlig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_fmantop", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $ddpFmantop;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_fmannum", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $ddpFmannum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_fmanlig", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $ddpFmanlig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_fpainum", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $ddpFpainum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_fpailig", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $ddpFpailig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_fliqbud", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $ddpFliqbud;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_mntdde_ttc", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddpMntddeTtc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_mntfse_ttc", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddpMntfseTtc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_mntliquide_ttc", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddpMntliquideTtc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_mntmandat_ttc", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddpMntmandatTtc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_mntpaye_ttc", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddpMntpayeTtc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_motif_rejet", type="string", length=2000, nullable=true)
     */
    private $ddpMotifRejet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_esttitulaire", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $ddpEsttitulaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_actif", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $ddpActif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_flg_envoi_finance", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $ddpFlgEnvoiFinance;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ddp_date_envoi_finance", type="datetime", nullable=true)
     */
    private $ddpDateEnvoiFinance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_num_prebordereau", type="string", length=20, nullable=true)
     */
    private $ddpNumPrebordereau;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_num_etat_rglt_finance", type="string", length=20, nullable=true)
     */
    private $ddpNumEtatRgltFinance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_montant_bc", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddpMontantBc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_pourc_paye", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $ddpPourcPaye;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_mntvsf_ht", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddpMntvsfHt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_mntvsf_tva", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddpMntvsfTva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_mntvsf_ttc", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddpMntvsfTtc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_flg_suspendue", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $ddpFlgSuspendue;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ddp_dt_der_suspension", type="datetime", nullable=true)
     */
    private $ddpDtDerSuspension;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ddp_dt_ar_suspension", type="datetime", nullable=true)
     */
    private $ddpDtArSuspension;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_comm_suspension", type="string", length=3000, nullable=true)
     */
    private $ddpCommSuspension;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_num_version_tech", type="decimal", precision=2, scale=0, nullable=true)
     */
    private $ddpNumVersionTech;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_flg_vsf", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $ddpFlgVsf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_montant_presta", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddpMontantPresta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_taux_tva", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $ddpTauxTva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_mntavrecup_ht", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddpMntavrecupHt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_mntavrecup_tva", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddpMntavrecupTva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_mntavrecup_ttc", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddpMntavrecupTtc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_ffacnum", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $ddpFfacnum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_ffaclig", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $ddpFfaclig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_num_facture_interne", type="string", length=100, nullable=true)
     */
    private $ddpNumFactureInterne;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ddp_datesign_st", type="datetime", nullable=true)
     */
    private $ddpDatesignSt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ddp_datesign_tit", type="datetime", nullable=true)
     */
    private $ddpDatesignTit;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ddp_datesign_region", type="datetime", nullable=true)
     */
    private $ddpDatesignRegion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddp_comm_vsf", type="string", length=2000, nullable=true)
     */
    private $ddpCommVsf;

    /**
     * @var \Bordereau
     *
     * @ORM\ManyToOne(targetEntity="Bordereau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ddp_bordereau", referencedColumnName="bdp_id")
     * })
     */
    private $ddpBordereau;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ddp_offre", referencedColumnName="off_id")
     * })
     */
    private $ddpOffre;

    /**
     * @var \UnitePrest
     *
     * @ORM\ManyToOne(targetEntity="UnitePrest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ddp_unite", referencedColumnName="unp_id")
     * })
     */
    private $ddpUnite;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ddp_etspresta", referencedColumnName="ets_id")
     * })
     */
    private $ddpEtspresta;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ddp_etspaye", referencedColumnName="ets_id")
     * })
     */
    private $ddpEtspaye;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ddp_auteurcr", referencedColumnName="uti_id")
     * })
     */
    private $ddpAuteurcr;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ddp_auteurar", referencedColumnName="uti_id")
     * })
     */
    private $ddpAuteurar;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ddp_autliquid", referencedColumnName="uti_id")
     * })
     */
    private $ddpAutliquid;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ddp_autmandat", referencedColumnName="uti_id")
     * })
     */
    private $ddpAutmandat;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ddp_autpaiemt", referencedColumnName="uti_id")
     * })
     */
    private $ddpAutpaiemt;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ddp_auteurv", referencedColumnName="uti_id")
     * })
     */
    private $ddpAuteurv;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ddp_auteurvcr", referencedColumnName="uti_id")
     * })
     */
    private $ddpAuteurvcr;

    /**
     * @var \Bordereau
     *
     * @ORM\ManyToOne(targetEntity="Bordereau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bdp_id_initial", referencedColumnName="bdp_id")
     * })
     */
    private $bdpIdInitial;

    /**
     * @var \DdePaiement
     *
     * @ORM\ManyToOne(targetEntity="DdePaiement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ddp_id_titulaire", referencedColumnName="ddp_id")
     * })
     */
    private $ddpIdTitulaire;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_type_csf", referencedColumnName="ref_id")
     * })
     */
    private $refIdTypeCsf;

    /**
     * @var \Reponse
     *
     * @ORM\ManyToOne(targetEntity="Reponse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_id", referencedColumnName="rep_id")
     * })
     */
    private $rep;

    /**
     * @var \PieceSignee
     *
     * @ORM\ManyToOne(targetEntity="PieceSignee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="psig_id", referencedColumnName="psig_id")
     * })
     */
    private $psig;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uti_id_sign_reg", referencedColumnName="uti_id")
     * })
     */
    private $utiIdSignReg;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uti_id_sign_st", referencedColumnName="uti_id")
     * })
     */
    private $utiIdSignSt;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uti_id_sign_tit", referencedColumnName="uti_id")
     * })
     */
    private $utiIdSignTit;

    public function getDdpId(): ?string
    {
        return $this->ddpId;
    }

    public function getDdpCode(): ?string
    {
        return $this->ddpCode;
    }

    public function setDdpCode(string $ddpCode): self
    {
        $this->ddpCode = $ddpCode;

        return $this;
    }

    public function getDdpType(): ?string
    {
        return $this->ddpType;
    }

    public function setDdpType(string $ddpType): self
    {
        $this->ddpType = $ddpType;

        return $this;
    }

    public function getDdpEtat(): ?string
    {
        return $this->ddpEtat;
    }

    public function setDdpEtat(string $ddpEtat): self
    {
        $this->ddpEtat = $ddpEtat;

        return $this;
    }

    public function getDdpDatear(): ?\DateTimeInterface
    {
        return $this->ddpDatear;
    }

    public function setDdpDatear(?\DateTimeInterface $ddpDatear): self
    {
        $this->ddpDatear = $ddpDatear;

        return $this;
    }

    public function getDdpDatecr(): ?\DateTimeInterface
    {
        return $this->ddpDatecr;
    }

    public function setDdpDatecr(?\DateTimeInterface $ddpDatecr): self
    {
        $this->ddpDatecr = $ddpDatecr;

        return $this;
    }

    public function getDdpNbreal(): ?string
    {
        return $this->ddpNbreal;
    }

    public function setDdpNbreal(string $ddpNbreal): self
    {
        $this->ddpNbreal = $ddpNbreal;

        return $this;
    }

    public function getDdpMntdde(): ?string
    {
        return $this->ddpMntdde;
    }

    public function setDdpMntdde(string $ddpMntdde): self
    {
        $this->ddpMntdde = $ddpMntdde;

        return $this;
    }

    public function getDdpMntfse(): ?string
    {
        return $this->ddpMntfse;
    }

    public function setDdpMntfse(string $ddpMntfse): self
    {
        $this->ddpMntfse = $ddpMntfse;

        return $this;
    }

    public function getDdpMntliquide(): ?string
    {
        return $this->ddpMntliquide;
    }

    public function setDdpMntliquide(?string $ddpMntliquide): self
    {
        $this->ddpMntliquide = $ddpMntliquide;

        return $this;
    }

    public function getDdpDateliquid(): ?\DateTimeInterface
    {
        return $this->ddpDateliquid;
    }

    public function setDdpDateliquid(?\DateTimeInterface $ddpDateliquid): self
    {
        $this->ddpDateliquid = $ddpDateliquid;

        return $this;
    }

    public function getDdpRefaliquid(): ?string
    {
        return $this->ddpRefaliquid;
    }

    public function setDdpRefaliquid(?string $ddpRefaliquid): self
    {
        $this->ddpRefaliquid = $ddpRefaliquid;

        return $this;
    }

    public function getDdpMntmandat(): ?string
    {
        return $this->ddpMntmandat;
    }

    public function setDdpMntmandat(?string $ddpMntmandat): self
    {
        $this->ddpMntmandat = $ddpMntmandat;

        return $this;
    }

    public function getDdpDatemandat(): ?\DateTimeInterface
    {
        return $this->ddpDatemandat;
    }

    public function setDdpDatemandat(?\DateTimeInterface $ddpDatemandat): self
    {
        $this->ddpDatemandat = $ddpDatemandat;

        return $this;
    }

    public function getDdpRefamandat(): ?string
    {
        return $this->ddpRefamandat;
    }

    public function setDdpRefamandat(?string $ddpRefamandat): self
    {
        $this->ddpRefamandat = $ddpRefamandat;

        return $this;
    }

    public function getDdpMntpaye(): ?string
    {
        return $this->ddpMntpaye;
    }

    public function setDdpMntpaye(?string $ddpMntpaye): self
    {
        $this->ddpMntpaye = $ddpMntpaye;

        return $this;
    }

    public function getDdpDatepaiemt(): ?\DateTimeInterface
    {
        return $this->ddpDatepaiemt;
    }

    public function setDdpDatepaiemt(?\DateTimeInterface $ddpDatepaiemt): self
    {
        $this->ddpDatepaiemt = $ddpDatepaiemt;

        return $this;
    }

    public function getDdpRefapaiemt(): ?string
    {
        return $this->ddpRefapaiemt;
    }

    public function setDdpRefapaiemt(?string $ddpRefapaiemt): self
    {
        $this->ddpRefapaiemt = $ddpRefapaiemt;

        return $this;
    }

    public function getDdpComment(): ?string
    {
        return $this->ddpComment;
    }

    public function setDdpComment(?string $ddpComment): self
    {
        $this->ddpComment = $ddpComment;

        return $this;
    }

    public function getDdpDatev(): ?\DateTimeInterface
    {
        return $this->ddpDatev;
    }

    public function setDdpDatev(?\DateTimeInterface $ddpDatev): self
    {
        $this->ddpDatev = $ddpDatev;

        return $this;
    }

    public function getDdpDatevcr(): ?\DateTimeInterface
    {
        return $this->ddpDatevcr;
    }

    public function setDdpDatevcr(?\DateTimeInterface $ddpDatevcr): self
    {
        $this->ddpDatevcr = $ddpDatevcr;

        return $this;
    }

    public function getDdpAuteurc(): ?string
    {
        return $this->ddpAuteurc;
    }

    public function setDdpAuteurc(string $ddpAuteurc): self
    {
        $this->ddpAuteurc = $ddpAuteurc;

        return $this;
    }

    public function getDdpDatec(): ?\DateTimeInterface
    {
        return $this->ddpDatec;
    }

    public function setDdpDatec(\DateTimeInterface $ddpDatec): self
    {
        $this->ddpDatec = $ddpDatec;

        return $this;
    }

    public function getDdpAuteurm(): ?string
    {
        return $this->ddpAuteurm;
    }

    public function setDdpAuteurm(?string $ddpAuteurm): self
    {
        $this->ddpAuteurm = $ddpAuteurm;

        return $this;
    }

    public function getDdpDatem(): ?\DateTimeInterface
    {
        return $this->ddpDatem;
    }

    public function setDdpDatem(?\DateTimeInterface $ddpDatem): self
    {
        $this->ddpDatem = $ddpDatem;

        return $this;
    }

    public function getDdpAuteura(): ?string
    {
        return $this->ddpAuteura;
    }

    public function setDdpAuteura(?string $ddpAuteura): self
    {
        $this->ddpAuteura = $ddpAuteura;

        return $this;
    }

    public function getDdpDatea(): ?\DateTimeInterface
    {
        return $this->ddpDatea;
    }

    public function setDdpDatea(?\DateTimeInterface $ddpDatea): self
    {
        $this->ddpDatea = $ddpDatea;

        return $this;
    }

    public function getDdpDatedispo(): ?\DateTimeInterface
    {
        return $this->ddpDatedispo;
    }

    public function setDdpDatedispo(?\DateTimeInterface $ddpDatedispo): self
    {
        $this->ddpDatedispo = $ddpDatedispo;

        return $this;
    }

    public function getDdpDateeliq(): ?\DateTimeInterface
    {
        return $this->ddpDateeliq;
    }

    public function setDdpDateeliq(?\DateTimeInterface $ddpDateeliq): self
    {
        $this->ddpDateeliq = $ddpDateeliq;

        return $this;
    }

    public function getDdpRecupavpc(): ?string
    {
        return $this->ddpRecupavpc;
    }

    public function setDdpRecupavpc(?string $ddpRecupavpc): self
    {
        $this->ddpRecupavpc = $ddpRecupavpc;

        return $this;
    }

    public function getDdpRecupavmt(): ?string
    {
        return $this->ddpRecupavmt;
    }

    public function setDdpRecupavmt(?string $ddpRecupavmt): self
    {
        $this->ddpRecupavmt = $ddpRecupavmt;

        return $this;
    }

    public function getDdpNbacpt(): ?string
    {
        return $this->ddpNbacpt;
    }

    public function setDdpNbacpt(?string $ddpNbacpt): self
    {
        $this->ddpNbacpt = $ddpNbacpt;

        return $this;
    }

    public function getDdpExefinanpc(): ?string
    {
        return $this->ddpExefinanpc;
    }

    public function setDdpExefinanpc(?string $ddpExefinanpc): self
    {
        $this->ddpExefinanpc = $ddpExefinanpc;

        return $this;
    }

    public function getDdpFliqnum(): ?string
    {
        return $this->ddpFliqnum;
    }

    public function setDdpFliqnum(?string $ddpFliqnum): self
    {
        $this->ddpFliqnum = $ddpFliqnum;

        return $this;
    }

    public function getDdpFliqlig(): ?string
    {
        return $this->ddpFliqlig;
    }

    public function setDdpFliqlig(?string $ddpFliqlig): self
    {
        $this->ddpFliqlig = $ddpFliqlig;

        return $this;
    }

    public function getDdpFmantop(): ?string
    {
        return $this->ddpFmantop;
    }

    public function setDdpFmantop(?string $ddpFmantop): self
    {
        $this->ddpFmantop = $ddpFmantop;

        return $this;
    }

    public function getDdpFmannum(): ?string
    {
        return $this->ddpFmannum;
    }

    public function setDdpFmannum(?string $ddpFmannum): self
    {
        $this->ddpFmannum = $ddpFmannum;

        return $this;
    }

    public function getDdpFmanlig(): ?string
    {
        return $this->ddpFmanlig;
    }

    public function setDdpFmanlig(?string $ddpFmanlig): self
    {
        $this->ddpFmanlig = $ddpFmanlig;

        return $this;
    }

    public function getDdpFpainum(): ?string
    {
        return $this->ddpFpainum;
    }

    public function setDdpFpainum(?string $ddpFpainum): self
    {
        $this->ddpFpainum = $ddpFpainum;

        return $this;
    }

    public function getDdpFpailig(): ?string
    {
        return $this->ddpFpailig;
    }

    public function setDdpFpailig(?string $ddpFpailig): self
    {
        $this->ddpFpailig = $ddpFpailig;

        return $this;
    }

    public function getDdpFliqbud(): ?string
    {
        return $this->ddpFliqbud;
    }

    public function setDdpFliqbud(?string $ddpFliqbud): self
    {
        $this->ddpFliqbud = $ddpFliqbud;

        return $this;
    }

    public function getDdpMntddeTtc(): ?string
    {
        return $this->ddpMntddeTtc;
    }

    public function setDdpMntddeTtc(?string $ddpMntddeTtc): self
    {
        $this->ddpMntddeTtc = $ddpMntddeTtc;

        return $this;
    }

    public function getDdpMntfseTtc(): ?string
    {
        return $this->ddpMntfseTtc;
    }

    public function setDdpMntfseTtc(?string $ddpMntfseTtc): self
    {
        $this->ddpMntfseTtc = $ddpMntfseTtc;

        return $this;
    }

    public function getDdpMntliquideTtc(): ?string
    {
        return $this->ddpMntliquideTtc;
    }

    public function setDdpMntliquideTtc(?string $ddpMntliquideTtc): self
    {
        $this->ddpMntliquideTtc = $ddpMntliquideTtc;

        return $this;
    }

    public function getDdpMntmandatTtc(): ?string
    {
        return $this->ddpMntmandatTtc;
    }

    public function setDdpMntmandatTtc(?string $ddpMntmandatTtc): self
    {
        $this->ddpMntmandatTtc = $ddpMntmandatTtc;

        return $this;
    }

    public function getDdpMntpayeTtc(): ?string
    {
        return $this->ddpMntpayeTtc;
    }

    public function setDdpMntpayeTtc(?string $ddpMntpayeTtc): self
    {
        $this->ddpMntpayeTtc = $ddpMntpayeTtc;

        return $this;
    }

    public function getDdpMotifRejet(): ?string
    {
        return $this->ddpMotifRejet;
    }

    public function setDdpMotifRejet(?string $ddpMotifRejet): self
    {
        $this->ddpMotifRejet = $ddpMotifRejet;

        return $this;
    }

    public function getDdpEsttitulaire(): ?string
    {
        return $this->ddpEsttitulaire;
    }

    public function setDdpEsttitulaire(?string $ddpEsttitulaire): self
    {
        $this->ddpEsttitulaire = $ddpEsttitulaire;

        return $this;
    }

    public function getDdpActif(): ?string
    {
        return $this->ddpActif;
    }

    public function setDdpActif(?string $ddpActif): self
    {
        $this->ddpActif = $ddpActif;

        return $this;
    }

    public function getDdpFlgEnvoiFinance(): ?string
    {
        return $this->ddpFlgEnvoiFinance;
    }

    public function setDdpFlgEnvoiFinance(?string $ddpFlgEnvoiFinance): self
    {
        $this->ddpFlgEnvoiFinance = $ddpFlgEnvoiFinance;

        return $this;
    }

    public function getDdpDateEnvoiFinance(): ?\DateTimeInterface
    {
        return $this->ddpDateEnvoiFinance;
    }

    public function setDdpDateEnvoiFinance(?\DateTimeInterface $ddpDateEnvoiFinance): self
    {
        $this->ddpDateEnvoiFinance = $ddpDateEnvoiFinance;

        return $this;
    }

    public function getDdpNumPrebordereau(): ?string
    {
        return $this->ddpNumPrebordereau;
    }

    public function setDdpNumPrebordereau(?string $ddpNumPrebordereau): self
    {
        $this->ddpNumPrebordereau = $ddpNumPrebordereau;

        return $this;
    }

    public function getDdpNumEtatRgltFinance(): ?string
    {
        return $this->ddpNumEtatRgltFinance;
    }

    public function setDdpNumEtatRgltFinance(?string $ddpNumEtatRgltFinance): self
    {
        $this->ddpNumEtatRgltFinance = $ddpNumEtatRgltFinance;

        return $this;
    }

    public function getDdpMontantBc(): ?string
    {
        return $this->ddpMontantBc;
    }

    public function setDdpMontantBc(?string $ddpMontantBc): self
    {
        $this->ddpMontantBc = $ddpMontantBc;

        return $this;
    }

    public function getDdpPourcPaye(): ?string
    {
        return $this->ddpPourcPaye;
    }

    public function setDdpPourcPaye(?string $ddpPourcPaye): self
    {
        $this->ddpPourcPaye = $ddpPourcPaye;

        return $this;
    }

    public function getDdpMntvsfHt(): ?string
    {
        return $this->ddpMntvsfHt;
    }

    public function setDdpMntvsfHt(?string $ddpMntvsfHt): self
    {
        $this->ddpMntvsfHt = $ddpMntvsfHt;

        return $this;
    }

    public function getDdpMntvsfTva(): ?string
    {
        return $this->ddpMntvsfTva;
    }

    public function setDdpMntvsfTva(?string $ddpMntvsfTva): self
    {
        $this->ddpMntvsfTva = $ddpMntvsfTva;

        return $this;
    }

    public function getDdpMntvsfTtc(): ?string
    {
        return $this->ddpMntvsfTtc;
    }

    public function setDdpMntvsfTtc(?string $ddpMntvsfTtc): self
    {
        $this->ddpMntvsfTtc = $ddpMntvsfTtc;

        return $this;
    }

    public function getDdpFlgSuspendue(): ?string
    {
        return $this->ddpFlgSuspendue;
    }

    public function setDdpFlgSuspendue(?string $ddpFlgSuspendue): self
    {
        $this->ddpFlgSuspendue = $ddpFlgSuspendue;

        return $this;
    }

    public function getDdpDtDerSuspension(): ?\DateTimeInterface
    {
        return $this->ddpDtDerSuspension;
    }

    public function setDdpDtDerSuspension(?\DateTimeInterface $ddpDtDerSuspension): self
    {
        $this->ddpDtDerSuspension = $ddpDtDerSuspension;

        return $this;
    }

    public function getDdpDtArSuspension(): ?\DateTimeInterface
    {
        return $this->ddpDtArSuspension;
    }

    public function setDdpDtArSuspension(?\DateTimeInterface $ddpDtArSuspension): self
    {
        $this->ddpDtArSuspension = $ddpDtArSuspension;

        return $this;
    }

    public function getDdpCommSuspension(): ?string
    {
        return $this->ddpCommSuspension;
    }

    public function setDdpCommSuspension(?string $ddpCommSuspension): self
    {
        $this->ddpCommSuspension = $ddpCommSuspension;

        return $this;
    }

    public function getDdpNumVersionTech(): ?string
    {
        return $this->ddpNumVersionTech;
    }

    public function setDdpNumVersionTech(?string $ddpNumVersionTech): self
    {
        $this->ddpNumVersionTech = $ddpNumVersionTech;

        return $this;
    }

    public function getDdpFlgVsf(): ?string
    {
        return $this->ddpFlgVsf;
    }

    public function setDdpFlgVsf(?string $ddpFlgVsf): self
    {
        $this->ddpFlgVsf = $ddpFlgVsf;

        return $this;
    }

    public function getDdpMontantPresta(): ?string
    {
        return $this->ddpMontantPresta;
    }

    public function setDdpMontantPresta(?string $ddpMontantPresta): self
    {
        $this->ddpMontantPresta = $ddpMontantPresta;

        return $this;
    }

    public function getDdpTauxTva(): ?string
    {
        return $this->ddpTauxTva;
    }

    public function setDdpTauxTva(?string $ddpTauxTva): self
    {
        $this->ddpTauxTva = $ddpTauxTva;

        return $this;
    }

    public function getDdpMntavrecupHt(): ?string
    {
        return $this->ddpMntavrecupHt;
    }

    public function setDdpMntavrecupHt(?string $ddpMntavrecupHt): self
    {
        $this->ddpMntavrecupHt = $ddpMntavrecupHt;

        return $this;
    }

    public function getDdpMntavrecupTva(): ?string
    {
        return $this->ddpMntavrecupTva;
    }

    public function setDdpMntavrecupTva(?string $ddpMntavrecupTva): self
    {
        $this->ddpMntavrecupTva = $ddpMntavrecupTva;

        return $this;
    }

    public function getDdpMntavrecupTtc(): ?string
    {
        return $this->ddpMntavrecupTtc;
    }

    public function setDdpMntavrecupTtc(?string $ddpMntavrecupTtc): self
    {
        $this->ddpMntavrecupTtc = $ddpMntavrecupTtc;

        return $this;
    }

    public function getDdpFfacnum(): ?string
    {
        return $this->ddpFfacnum;
    }

    public function setDdpFfacnum(?string $ddpFfacnum): self
    {
        $this->ddpFfacnum = $ddpFfacnum;

        return $this;
    }

    public function getDdpFfaclig(): ?string
    {
        return $this->ddpFfaclig;
    }

    public function setDdpFfaclig(?string $ddpFfaclig): self
    {
        $this->ddpFfaclig = $ddpFfaclig;

        return $this;
    }

    public function getDdpNumFactureInterne(): ?string
    {
        return $this->ddpNumFactureInterne;
    }

    public function setDdpNumFactureInterne(?string $ddpNumFactureInterne): self
    {
        $this->ddpNumFactureInterne = $ddpNumFactureInterne;

        return $this;
    }

    public function getDdpDatesignSt(): ?\DateTimeInterface
    {
        return $this->ddpDatesignSt;
    }

    public function setDdpDatesignSt(?\DateTimeInterface $ddpDatesignSt): self
    {
        $this->ddpDatesignSt = $ddpDatesignSt;

        return $this;
    }

    public function getDdpDatesignTit(): ?\DateTimeInterface
    {
        return $this->ddpDatesignTit;
    }

    public function setDdpDatesignTit(?\DateTimeInterface $ddpDatesignTit): self
    {
        $this->ddpDatesignTit = $ddpDatesignTit;

        return $this;
    }

    public function getDdpDatesignRegion(): ?\DateTimeInterface
    {
        return $this->ddpDatesignRegion;
    }

    public function setDdpDatesignRegion(?\DateTimeInterface $ddpDatesignRegion): self
    {
        $this->ddpDatesignRegion = $ddpDatesignRegion;

        return $this;
    }

    public function getDdpCommVsf(): ?string
    {
        return $this->ddpCommVsf;
    }

    public function setDdpCommVsf(?string $ddpCommVsf): self
    {
        $this->ddpCommVsf = $ddpCommVsf;

        return $this;
    }

    public function getDdpBordereau(): ?Bordereau
    {
        return $this->ddpBordereau;
    }

    public function setDdpBordereau(?Bordereau $ddpBordereau): self
    {
        $this->ddpBordereau = $ddpBordereau;

        return $this;
    }

    public function getDdpOffre(): ?Offre
    {
        return $this->ddpOffre;
    }

    public function setDdpOffre(?Offre $ddpOffre): self
    {
        $this->ddpOffre = $ddpOffre;

        return $this;
    }

    public function getDdpUnite(): ?UnitePrest
    {
        return $this->ddpUnite;
    }

    public function setDdpUnite(?UnitePrest $ddpUnite): self
    {
        $this->ddpUnite = $ddpUnite;

        return $this;
    }

    public function getDdpEtspresta(): ?Etablssmt
    {
        return $this->ddpEtspresta;
    }

    public function setDdpEtspresta(?Etablssmt $ddpEtspresta): self
    {
        $this->ddpEtspresta = $ddpEtspresta;

        return $this;
    }

    public function getDdpEtspaye(): ?Etablssmt
    {
        return $this->ddpEtspaye;
    }

    public function setDdpEtspaye(?Etablssmt $ddpEtspaye): self
    {
        $this->ddpEtspaye = $ddpEtspaye;

        return $this;
    }

    public function getDdpAuteurcr(): ?Utilisateur
    {
        return $this->ddpAuteurcr;
    }

    public function setDdpAuteurcr(?Utilisateur $ddpAuteurcr): self
    {
        $this->ddpAuteurcr = $ddpAuteurcr;

        return $this;
    }

    public function getDdpAuteurar(): ?Utilisateur
    {
        return $this->ddpAuteurar;
    }

    public function setDdpAuteurar(?Utilisateur $ddpAuteurar): self
    {
        $this->ddpAuteurar = $ddpAuteurar;

        return $this;
    }

    public function getDdpAutliquid(): ?Utilisateur
    {
        return $this->ddpAutliquid;
    }

    public function setDdpAutliquid(?Utilisateur $ddpAutliquid): self
    {
        $this->ddpAutliquid = $ddpAutliquid;

        return $this;
    }

    public function getDdpAutmandat(): ?Utilisateur
    {
        return $this->ddpAutmandat;
    }

    public function setDdpAutmandat(?Utilisateur $ddpAutmandat): self
    {
        $this->ddpAutmandat = $ddpAutmandat;

        return $this;
    }

    public function getDdpAutpaiemt(): ?Utilisateur
    {
        return $this->ddpAutpaiemt;
    }

    public function setDdpAutpaiemt(?Utilisateur $ddpAutpaiemt): self
    {
        $this->ddpAutpaiemt = $ddpAutpaiemt;

        return $this;
    }

    public function getDdpAuteurv(): ?Utilisateur
    {
        return $this->ddpAuteurv;
    }

    public function setDdpAuteurv(?Utilisateur $ddpAuteurv): self
    {
        $this->ddpAuteurv = $ddpAuteurv;

        return $this;
    }

    public function getDdpAuteurvcr(): ?Utilisateur
    {
        return $this->ddpAuteurvcr;
    }

    public function setDdpAuteurvcr(?Utilisateur $ddpAuteurvcr): self
    {
        $this->ddpAuteurvcr = $ddpAuteurvcr;

        return $this;
    }

    public function getBdpIdInitial(): ?Bordereau
    {
        return $this->bdpIdInitial;
    }

    public function setBdpIdInitial(?Bordereau $bdpIdInitial): self
    {
        $this->bdpIdInitial = $bdpIdInitial;

        return $this;
    }

    public function getDdpIdTitulaire(): ?self
    {
        return $this->ddpIdTitulaire;
    }

    public function setDdpIdTitulaire(?self $ddpIdTitulaire): self
    {
        $this->ddpIdTitulaire = $ddpIdTitulaire;

        return $this;
    }

    public function getRefIdTypeCsf(): ?Referentiel
    {
        return $this->refIdTypeCsf;
    }

    public function setRefIdTypeCsf(?Referentiel $refIdTypeCsf): self
    {
        $this->refIdTypeCsf = $refIdTypeCsf;

        return $this;
    }

    public function getRep(): ?Reponse
    {
        return $this->rep;
    }

    public function setRep(?Reponse $rep): self
    {
        $this->rep = $rep;

        return $this;
    }

    public function getPsig(): ?PieceSignee
    {
        return $this->psig;
    }

    public function setPsig(?PieceSignee $psig): self
    {
        $this->psig = $psig;

        return $this;
    }

    public function getUtiIdSignReg(): ?Utilisateur
    {
        return $this->utiIdSignReg;
    }

    public function setUtiIdSignReg(?Utilisateur $utiIdSignReg): self
    {
        $this->utiIdSignReg = $utiIdSignReg;

        return $this;
    }

    public function getUtiIdSignSt(): ?Utilisateur
    {
        return $this->utiIdSignSt;
    }

    public function setUtiIdSignSt(?Utilisateur $utiIdSignSt): self
    {
        $this->utiIdSignSt = $utiIdSignSt;

        return $this;
    }

    public function getUtiIdSignTit(): ?Utilisateur
    {
        return $this->utiIdSignTit;
    }

    public function setUtiIdSignTit(?Utilisateur $utiIdSignTit): self
    {
        $this->utiIdSignTit = $utiIdSignTit;

        return $this;
    }


}
