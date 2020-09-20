<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Programme
 *
 * @ORM\Table(name="programme", uniqueConstraints={@ORM\UniqueConstraint(name="programme_pk", columns={"prg_id"})}, indexes={@ORM\Index(name="programme_prg_uuif10", columns={"prg_horscperph"}), @ORM\Index(name="programme_prg_uuif4", columns={"prg_auteurdeclo"}), @ORM\Index(name="ref_id_type_achat_fk", columns={"ref_id_type_achat"}), @ORM\Index(name="programme_prg_uuif9", columns={"prg_horscperop"}), @ORM\Index(name="programme_prg_uuif8", columns={"prg_auteurdecprg"}), @ORM\Index(name="programme_prg_uuif6", columns={"prg_auteurdacprg"}), @ORM\Index(name="programme_prg_uuif", columns={"prg_auteurv"}), @ORM\Index(name="programme_prg_ppif", columns={"prg_origine"}), @ORM\Index(name="programme_prg_uuif5", columns={"prg_auteuractprg"}), @ORM\Index(name="programme_prg_uuif7", columns={"prg_auteurcloprg"}), @ORM\Index(name="programme_prg_uuif2", columns={"prg_auteurdeval"}), @ORM\Index(name="programme_ddif", columns={"prg_dispo"}), @ORM\Index(name="programme_prg_uuif3", columns={"prg_auteurclot"}), @ORM\Index(name="ref_id_type_action_fk", columns={"ref_id_type_action"}), @ORM\Index(name="programme_pepif", columns={"prg_echeancier"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProgrammeRepository")
 */
class Programme
{
    /**
     * @var int
     *
     * @ORM\Column(name="prg_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="programme_prg_id_seq", allocationSize=1, initialValue=1)
     */
    private $prgId;

    /**
     * @var string
     *
     * @ORM\Column(name="prg_code", type="string", length=20, nullable=false)
     */
    private $prgCode;

    /**
     * @var string
     *
     * @ORM\Column(name="prg_libelle", type="string", length=50, nullable=false)
     */
    private $prgLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="prg_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $prgEtat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prg_datev", type="datetime", nullable=true)
     */
    private $prgDatev;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prg_datevdeval", type="datetime", nullable=true)
     */
    private $prgDatevdeval;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prg_dateclot", type="datetime", nullable=true)
     */
    private $prgDateclot;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prg_datedeclot", type="datetime", nullable=true)
     */
    private $prgDatedeclot;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prg_dateactprg", type="datetime", nullable=true)
     */
    private $prgDateactprg;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prg_datedacprg", type="datetime", nullable=true)
     */
    private $prgDatedacprg;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prg_datecloprg", type="datetime", nullable=true)
     */
    private $prgDatecloprg;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prg_datedecprg", type="datetime", nullable=true)
     */
    private $prgDatedecprg;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prg_datepdebrece", type="datetime", nullable=true)
     */
    private $prgDatepdebrece;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prg_datepfinrece", type="datetime", nullable=true)
     */
    private $prgDatepfinrece;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prg_datepdebtech", type="datetime", nullable=true)
     */
    private $prgDatepdebtech;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prg_datepfintech", type="datetime", nullable=true)
     */
    private $prgDatepfintech;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prg_datedebdepo", type="datetime", nullable=true)
     */
    private $prgDatedebdepo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prg_datefindepo", type="datetime", nullable=true)
     */
    private $prgDatefindepo;

    /**
     * @var string
     *
     * @ORM\Column(name="prg_exercice", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $prgExercice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_seuilit", type="decimal", precision=5, scale=0, nullable=true)
     */
    private $prgSeuilit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_budgetprev", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $prgBudgetprev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_imputation", type="string", length=50, nullable=true)
     */
    private $prgImputation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prg_datefinnego", type="datetime", nullable=true)
     */
    private $prgDatefinnego;

    /**
     * @var string
     *
     * @ORM\Column(name="prg_reconduit", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $prgReconduit;

    /**
     * @var string
     *
     * @ORM\Column(name="prg_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $prgAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prg_datec", type="datetime", nullable=false)
     */
    private $prgDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $prgAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prg_datem", type="datetime", nullable=true)
     */
    private $prgDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $prgAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prg_datea", type="datetime", nullable=true)
     */
    private $prgDatea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_ecartnego", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $prgEcartnego;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_mntprgfse", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $prgMntprgfse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_mntestremu", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $prgMntestremu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_numenv", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $prgNumenv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_codbudget", type="string", length=2, nullable=true)
     */
    private $prgCodbudget;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_exbudget", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $prgExbudget;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_rpegann", type="decimal", precision=4, scale=0, nullable=true, options={"comment"="Millesime reservation d'AE"})
     */
    private $prgRpegann;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_rpegcod", type="string", length=5, nullable=true, options={"comment"="Code reservation d'AE"})
     */
    private $prgRpegcod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_rpegnum", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Numero reservation d'AE"})
     */
    private $prgRpegnum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_rpdglig", type="decimal", precision=3, scale=0, nullable=true, options={"comment"="Ligne reservation d'AE"})
     */
    private $prgRpdglig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_typemar", type="string", length=1, nullable=true, options={"comment"="Type marche (forfaitaire_F/bon de commande_B)"})
     */
    private $prgTypemar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_num_campagne", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgNumCampagne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_mbc_sans_mini_maxi", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgMbcSansMiniMaxi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_interdit_creer_stg", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgInterditCreerStg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_interdit_ajout_sess_a_", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgInterditAjoutSessA;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_ne_pas_gerer_paiement", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgNePasGererPaiement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_integre_presta_pfe", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgIntegrePrestaPfe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_gere_emargos", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgGereEmargos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_pas_voir_qte_estimee", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgPasVoirQteEstimee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_marche_recond_def", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgMarcheRecondDef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_pas_modif_bdp_prepa_bc", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgPasModifBdpPrepaBc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prg_date_deb_forcee", type="datetime", nullable=true)
     */
    private $prgDateDebForcee;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prg_date_fin_forcee", type="datetime", nullable=true)
     */
    private $prgDateFinForcee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_pas_creer_prepa_bc", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgPasCreerPrepaBc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prg_date_exec_fin_forcee", type="datetime", nullable=true)
     */
    private $prgDateExecFinForcee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_nb_mois_dt_debut_fin_bc", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $prgNbMoisDtDebutFinBc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_solde_bc_autorise", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgSoldeBcAutorise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_creer_bc_revise", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgCreerBcRevise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_nb_stg_echantillon", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $prgNbStgEchantillon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_pas_calcul_cre_parc", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgPasCalculCreParc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_pas_calcul_cre_ent", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgPasCalculCreEnt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_taux_fsd3_revision", type="decimal", precision=10, scale=8, nullable=true)
     */
    private $prgTauxFsd3Revision;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_sess_anonyme", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgSessAnonyme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_cor_chapcode", type="string", length=50, nullable=true)
     */
    private $prgCorChapcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_cor_schacode", type="string", length=50, nullable=true)
     */
    private $prgCorSchacode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_cor_articod", type="string", length=50, nullable=true)
     */
    private $prgCorArticod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_cor_prognum", type="string", length=50, nullable=true)
     */
    private $prgCorPrognum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_cor_mpnccod1", type="string", length=50, nullable=true)
     */
    private $prgCorMpnccod1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_bc_prix_revise", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgBcPrixRevise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_absences_remu", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgAbsencesRemu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_dmd_modif_autor", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgDmdModifAutor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_volum_remu_bc", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgVolumRemuBc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_gestion_remu", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgGestionRemu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_pas_prescription", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgPasPrescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_pas_valid_sess", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgPasValidSess;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_interface_lms", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgInterfaceLms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_cor_afdglig", type="decimal", precision=12, scale=0, nullable=true)
     */
    private $prgCorAfdglig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_import_sess_trans", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgImportSessTrans;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_prc_creation_bc_auto", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $prgPrcCreationBcAuto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prg_flg_sess_financ_remu", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $prgFlgSessFinancRemu;

    /**
     * @var \Dispositif
     *
     * @ORM\ManyToOne(targetEntity="Dispositif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prg_dispo", referencedColumnName="dsp_id")
     * })
     */
    private $prgDispo;

    /**
     * @var \PEcheancier
     *
     * @ORM\ManyToOne(targetEntity="PEcheancier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prg_echeancier", referencedColumnName="pec_id")
     * })
     */
    private $prgEcheancier;

    /**
     * @var \CperOpera
     *
     * @ORM\ManyToOne(targetEntity="CperOpera")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prg_horscperop", referencedColumnName="cop_id")
     * })
     */
    private $prgHorscperop;

    /**
     * @var \CperPhase
     *
     * @ORM\ManyToOne(targetEntity="CperPhase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prg_horscperph", referencedColumnName="cph_id")
     * })
     */
    private $prgHorscperph;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prg_origine", referencedColumnName="prg_id")
     * })
     */
    private $prgOrigine;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prg_auteurv", referencedColumnName="uti_id")
     * })
     */
    private $prgAuteurv;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prg_auteurdeval", referencedColumnName="uti_id")
     * })
     */
    private $prgAuteurdeval;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prg_auteurclot", referencedColumnName="uti_id")
     * })
     */
    private $prgAuteurclot;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prg_auteurdeclo", referencedColumnName="uti_id")
     * })
     */
    private $prgAuteurdeclo;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prg_auteuractprg", referencedColumnName="uti_id")
     * })
     */
    private $prgAuteuractprg;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prg_auteurdacprg", referencedColumnName="uti_id")
     * })
     */
    private $prgAuteurdacprg;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prg_auteurcloprg", referencedColumnName="uti_id")
     * })
     */
    private $prgAuteurcloprg;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prg_auteurdecprg", referencedColumnName="uti_id")
     * })
     */
    private $prgAuteurdecprg;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_type_achat", referencedColumnName="ref_id")
     * })
     */
    private $refIdTypeAchat;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_type_action", referencedColumnName="ref_id")
     * })
     */
    private $refIdTypeAction;

    public function getPrgId(): ?int
    {
        return $this->prgId;
    }

    public function getPrgCode(): ?string
    {
        return $this->prgCode;
    }

    public function setPrgCode(string $prgCode): self
    {
        $this->prgCode = $prgCode;

        return $this;
    }

    public function getPrgLibelle(): ?string
    {
        return $this->prgLibelle;
    }

    public function setPrgLibelle(string $prgLibelle): self
    {
        $this->prgLibelle = $prgLibelle;

        return $this;
    }

    public function getPrgEtat(): ?string
    {
        return $this->prgEtat;
    }

    public function setPrgEtat(string $prgEtat): self
    {
        $this->prgEtat = $prgEtat;

        return $this;
    }

    public function getPrgDatev(): ?\DateTimeInterface
    {
        return $this->prgDatev;
    }

    public function setPrgDatev(?\DateTimeInterface $prgDatev): self
    {
        $this->prgDatev = $prgDatev;

        return $this;
    }

    public function getPrgDatevdeval(): ?\DateTimeInterface
    {
        return $this->prgDatevdeval;
    }

    public function setPrgDatevdeval(?\DateTimeInterface $prgDatevdeval): self
    {
        $this->prgDatevdeval = $prgDatevdeval;

        return $this;
    }

    public function getPrgDateclot(): ?\DateTimeInterface
    {
        return $this->prgDateclot;
    }

    public function setPrgDateclot(?\DateTimeInterface $prgDateclot): self
    {
        $this->prgDateclot = $prgDateclot;

        return $this;
    }

    public function getPrgDatedeclot(): ?\DateTimeInterface
    {
        return $this->prgDatedeclot;
    }

    public function setPrgDatedeclot(?\DateTimeInterface $prgDatedeclot): self
    {
        $this->prgDatedeclot = $prgDatedeclot;

        return $this;
    }

    public function getPrgDateactprg(): ?\DateTimeInterface
    {
        return $this->prgDateactprg;
    }

    public function setPrgDateactprg(?\DateTimeInterface $prgDateactprg): self
    {
        $this->prgDateactprg = $prgDateactprg;

        return $this;
    }

    public function getPrgDatedacprg(): ?\DateTimeInterface
    {
        return $this->prgDatedacprg;
    }

    public function setPrgDatedacprg(?\DateTimeInterface $prgDatedacprg): self
    {
        $this->prgDatedacprg = $prgDatedacprg;

        return $this;
    }

    public function getPrgDatecloprg(): ?\DateTimeInterface
    {
        return $this->prgDatecloprg;
    }

    public function setPrgDatecloprg(?\DateTimeInterface $prgDatecloprg): self
    {
        $this->prgDatecloprg = $prgDatecloprg;

        return $this;
    }

    public function getPrgDatedecprg(): ?\DateTimeInterface
    {
        return $this->prgDatedecprg;
    }

    public function setPrgDatedecprg(?\DateTimeInterface $prgDatedecprg): self
    {
        $this->prgDatedecprg = $prgDatedecprg;

        return $this;
    }

    public function getPrgDatepdebrece(): ?\DateTimeInterface
    {
        return $this->prgDatepdebrece;
    }

    public function setPrgDatepdebrece(?\DateTimeInterface $prgDatepdebrece): self
    {
        $this->prgDatepdebrece = $prgDatepdebrece;

        return $this;
    }

    public function getPrgDatepfinrece(): ?\DateTimeInterface
    {
        return $this->prgDatepfinrece;
    }

    public function setPrgDatepfinrece(?\DateTimeInterface $prgDatepfinrece): self
    {
        $this->prgDatepfinrece = $prgDatepfinrece;

        return $this;
    }

    public function getPrgDatepdebtech(): ?\DateTimeInterface
    {
        return $this->prgDatepdebtech;
    }

    public function setPrgDatepdebtech(?\DateTimeInterface $prgDatepdebtech): self
    {
        $this->prgDatepdebtech = $prgDatepdebtech;

        return $this;
    }

    public function getPrgDatepfintech(): ?\DateTimeInterface
    {
        return $this->prgDatepfintech;
    }

    public function setPrgDatepfintech(?\DateTimeInterface $prgDatepfintech): self
    {
        $this->prgDatepfintech = $prgDatepfintech;

        return $this;
    }

    public function getPrgDatedebdepo(): ?\DateTimeInterface
    {
        return $this->prgDatedebdepo;
    }

    public function setPrgDatedebdepo(?\DateTimeInterface $prgDatedebdepo): self
    {
        $this->prgDatedebdepo = $prgDatedebdepo;

        return $this;
    }

    public function getPrgDatefindepo(): ?\DateTimeInterface
    {
        return $this->prgDatefindepo;
    }

    public function setPrgDatefindepo(?\DateTimeInterface $prgDatefindepo): self
    {
        $this->prgDatefindepo = $prgDatefindepo;

        return $this;
    }

    public function getPrgExercice(): ?string
    {
        return $this->prgExercice;
    }

    public function setPrgExercice(string $prgExercice): self
    {
        $this->prgExercice = $prgExercice;

        return $this;
    }

    public function getPrgSeuilit(): ?string
    {
        return $this->prgSeuilit;
    }

    public function setPrgSeuilit(?string $prgSeuilit): self
    {
        $this->prgSeuilit = $prgSeuilit;

        return $this;
    }

    public function getPrgBudgetprev(): ?string
    {
        return $this->prgBudgetprev;
    }

    public function setPrgBudgetprev(?string $prgBudgetprev): self
    {
        $this->prgBudgetprev = $prgBudgetprev;

        return $this;
    }

    public function getPrgImputation(): ?string
    {
        return $this->prgImputation;
    }

    public function setPrgImputation(?string $prgImputation): self
    {
        $this->prgImputation = $prgImputation;

        return $this;
    }

    public function getPrgDatefinnego(): ?\DateTimeInterface
    {
        return $this->prgDatefinnego;
    }

    public function setPrgDatefinnego(?\DateTimeInterface $prgDatefinnego): self
    {
        $this->prgDatefinnego = $prgDatefinnego;

        return $this;
    }

    public function getPrgReconduit(): ?string
    {
        return $this->prgReconduit;
    }

    public function setPrgReconduit(string $prgReconduit): self
    {
        $this->prgReconduit = $prgReconduit;

        return $this;
    }

    public function getPrgAuteurc(): ?string
    {
        return $this->prgAuteurc;
    }

    public function setPrgAuteurc(string $prgAuteurc): self
    {
        $this->prgAuteurc = $prgAuteurc;

        return $this;
    }

    public function getPrgDatec(): ?\DateTimeInterface
    {
        return $this->prgDatec;
    }

    public function setPrgDatec(\DateTimeInterface $prgDatec): self
    {
        $this->prgDatec = $prgDatec;

        return $this;
    }

    public function getPrgAuteurm(): ?string
    {
        return $this->prgAuteurm;
    }

    public function setPrgAuteurm(?string $prgAuteurm): self
    {
        $this->prgAuteurm = $prgAuteurm;

        return $this;
    }

    public function getPrgDatem(): ?\DateTimeInterface
    {
        return $this->prgDatem;
    }

    public function setPrgDatem(?\DateTimeInterface $prgDatem): self
    {
        $this->prgDatem = $prgDatem;

        return $this;
    }

    public function getPrgAuteura(): ?string
    {
        return $this->prgAuteura;
    }

    public function setPrgAuteura(?string $prgAuteura): self
    {
        $this->prgAuteura = $prgAuteura;

        return $this;
    }

    public function getPrgDatea(): ?\DateTimeInterface
    {
        return $this->prgDatea;
    }

    public function setPrgDatea(?\DateTimeInterface $prgDatea): self
    {
        $this->prgDatea = $prgDatea;

        return $this;
    }

    public function getPrgEcartnego(): ?string
    {
        return $this->prgEcartnego;
    }

    public function setPrgEcartnego(?string $prgEcartnego): self
    {
        $this->prgEcartnego = $prgEcartnego;

        return $this;
    }

    public function getPrgMntprgfse(): ?string
    {
        return $this->prgMntprgfse;
    }

    public function setPrgMntprgfse(?string $prgMntprgfse): self
    {
        $this->prgMntprgfse = $prgMntprgfse;

        return $this;
    }

    public function getPrgMntestremu(): ?string
    {
        return $this->prgMntestremu;
    }

    public function setPrgMntestremu(?string $prgMntestremu): self
    {
        $this->prgMntestremu = $prgMntestremu;

        return $this;
    }

    public function getPrgNumenv(): ?string
    {
        return $this->prgNumenv;
    }

    public function setPrgNumenv(?string $prgNumenv): self
    {
        $this->prgNumenv = $prgNumenv;

        return $this;
    }

    public function getPrgCodbudget(): ?string
    {
        return $this->prgCodbudget;
    }

    public function setPrgCodbudget(?string $prgCodbudget): self
    {
        $this->prgCodbudget = $prgCodbudget;

        return $this;
    }

    public function getPrgExbudget(): ?string
    {
        return $this->prgExbudget;
    }

    public function setPrgExbudget(?string $prgExbudget): self
    {
        $this->prgExbudget = $prgExbudget;

        return $this;
    }

    public function getPrgRpegann(): ?string
    {
        return $this->prgRpegann;
    }

    public function setPrgRpegann(?string $prgRpegann): self
    {
        $this->prgRpegann = $prgRpegann;

        return $this;
    }

    public function getPrgRpegcod(): ?string
    {
        return $this->prgRpegcod;
    }

    public function setPrgRpegcod(?string $prgRpegcod): self
    {
        $this->prgRpegcod = $prgRpegcod;

        return $this;
    }

    public function getPrgRpegnum(): ?string
    {
        return $this->prgRpegnum;
    }

    public function setPrgRpegnum(?string $prgRpegnum): self
    {
        $this->prgRpegnum = $prgRpegnum;

        return $this;
    }

    public function getPrgRpdglig(): ?string
    {
        return $this->prgRpdglig;
    }

    public function setPrgRpdglig(?string $prgRpdglig): self
    {
        $this->prgRpdglig = $prgRpdglig;

        return $this;
    }

    public function getPrgTypemar(): ?string
    {
        return $this->prgTypemar;
    }

    public function setPrgTypemar(?string $prgTypemar): self
    {
        $this->prgTypemar = $prgTypemar;

        return $this;
    }

    public function getPrgNumCampagne(): ?string
    {
        return $this->prgNumCampagne;
    }

    public function setPrgNumCampagne(?string $prgNumCampagne): self
    {
        $this->prgNumCampagne = $prgNumCampagne;

        return $this;
    }

    public function getPrgFlgMbcSansMiniMaxi(): ?string
    {
        return $this->prgFlgMbcSansMiniMaxi;
    }

    public function setPrgFlgMbcSansMiniMaxi(?string $prgFlgMbcSansMiniMaxi): self
    {
        $this->prgFlgMbcSansMiniMaxi = $prgFlgMbcSansMiniMaxi;

        return $this;
    }

    public function getPrgFlgInterditCreerStg(): ?string
    {
        return $this->prgFlgInterditCreerStg;
    }

    public function setPrgFlgInterditCreerStg(?string $prgFlgInterditCreerStg): self
    {
        $this->prgFlgInterditCreerStg = $prgFlgInterditCreerStg;

        return $this;
    }

    public function getPrgFlgInterditAjoutSessA(): ?string
    {
        return $this->prgFlgInterditAjoutSessA;
    }

    public function setPrgFlgInterditAjoutSessA(?string $prgFlgInterditAjoutSessA): self
    {
        $this->prgFlgInterditAjoutSessA = $prgFlgInterditAjoutSessA;

        return $this;
    }

    public function getPrgFlgNePasGererPaiement(): ?string
    {
        return $this->prgFlgNePasGererPaiement;
    }

    public function setPrgFlgNePasGererPaiement(?string $prgFlgNePasGererPaiement): self
    {
        $this->prgFlgNePasGererPaiement = $prgFlgNePasGererPaiement;

        return $this;
    }

    public function getPrgFlgIntegrePrestaPfe(): ?string
    {
        return $this->prgFlgIntegrePrestaPfe;
    }

    public function setPrgFlgIntegrePrestaPfe(?string $prgFlgIntegrePrestaPfe): self
    {
        $this->prgFlgIntegrePrestaPfe = $prgFlgIntegrePrestaPfe;

        return $this;
    }

    public function getPrgFlgGereEmargos(): ?string
    {
        return $this->prgFlgGereEmargos;
    }

    public function setPrgFlgGereEmargos(?string $prgFlgGereEmargos): self
    {
        $this->prgFlgGereEmargos = $prgFlgGereEmargos;

        return $this;
    }

    public function getPrgFlgPasVoirQteEstimee(): ?string
    {
        return $this->prgFlgPasVoirQteEstimee;
    }

    public function setPrgFlgPasVoirQteEstimee(?string $prgFlgPasVoirQteEstimee): self
    {
        $this->prgFlgPasVoirQteEstimee = $prgFlgPasVoirQteEstimee;

        return $this;
    }

    public function getPrgFlgMarcheRecondDef(): ?string
    {
        return $this->prgFlgMarcheRecondDef;
    }

    public function setPrgFlgMarcheRecondDef(?string $prgFlgMarcheRecondDef): self
    {
        $this->prgFlgMarcheRecondDef = $prgFlgMarcheRecondDef;

        return $this;
    }

    public function getPrgFlgPasModifBdpPrepaBc(): ?string
    {
        return $this->prgFlgPasModifBdpPrepaBc;
    }

    public function setPrgFlgPasModifBdpPrepaBc(?string $prgFlgPasModifBdpPrepaBc): self
    {
        $this->prgFlgPasModifBdpPrepaBc = $prgFlgPasModifBdpPrepaBc;

        return $this;
    }

    public function getPrgDateDebForcee(): ?\DateTimeInterface
    {
        return $this->prgDateDebForcee;
    }

    public function setPrgDateDebForcee(?\DateTimeInterface $prgDateDebForcee): self
    {
        $this->prgDateDebForcee = $prgDateDebForcee;

        return $this;
    }

    public function getPrgDateFinForcee(): ?\DateTimeInterface
    {
        return $this->prgDateFinForcee;
    }

    public function setPrgDateFinForcee(?\DateTimeInterface $prgDateFinForcee): self
    {
        $this->prgDateFinForcee = $prgDateFinForcee;

        return $this;
    }

    public function getPrgFlgPasCreerPrepaBc(): ?string
    {
        return $this->prgFlgPasCreerPrepaBc;
    }

    public function setPrgFlgPasCreerPrepaBc(?string $prgFlgPasCreerPrepaBc): self
    {
        $this->prgFlgPasCreerPrepaBc = $prgFlgPasCreerPrepaBc;

        return $this;
    }

    public function getPrgDateExecFinForcee(): ?\DateTimeInterface
    {
        return $this->prgDateExecFinForcee;
    }

    public function setPrgDateExecFinForcee(?\DateTimeInterface $prgDateExecFinForcee): self
    {
        $this->prgDateExecFinForcee = $prgDateExecFinForcee;

        return $this;
    }

    public function getPrgNbMoisDtDebutFinBc(): ?string
    {
        return $this->prgNbMoisDtDebutFinBc;
    }

    public function setPrgNbMoisDtDebutFinBc(?string $prgNbMoisDtDebutFinBc): self
    {
        $this->prgNbMoisDtDebutFinBc = $prgNbMoisDtDebutFinBc;

        return $this;
    }

    public function getPrgFlgSoldeBcAutorise(): ?string
    {
        return $this->prgFlgSoldeBcAutorise;
    }

    public function setPrgFlgSoldeBcAutorise(?string $prgFlgSoldeBcAutorise): self
    {
        $this->prgFlgSoldeBcAutorise = $prgFlgSoldeBcAutorise;

        return $this;
    }

    public function getPrgFlgCreerBcRevise(): ?string
    {
        return $this->prgFlgCreerBcRevise;
    }

    public function setPrgFlgCreerBcRevise(?string $prgFlgCreerBcRevise): self
    {
        $this->prgFlgCreerBcRevise = $prgFlgCreerBcRevise;

        return $this;
    }

    public function getPrgNbStgEchantillon(): ?string
    {
        return $this->prgNbStgEchantillon;
    }

    public function setPrgNbStgEchantillon(?string $prgNbStgEchantillon): self
    {
        $this->prgNbStgEchantillon = $prgNbStgEchantillon;

        return $this;
    }

    public function getPrgFlgPasCalculCreParc(): ?string
    {
        return $this->prgFlgPasCalculCreParc;
    }

    public function setPrgFlgPasCalculCreParc(?string $prgFlgPasCalculCreParc): self
    {
        $this->prgFlgPasCalculCreParc = $prgFlgPasCalculCreParc;

        return $this;
    }

    public function getPrgFlgPasCalculCreEnt(): ?string
    {
        return $this->prgFlgPasCalculCreEnt;
    }

    public function setPrgFlgPasCalculCreEnt(?string $prgFlgPasCalculCreEnt): self
    {
        $this->prgFlgPasCalculCreEnt = $prgFlgPasCalculCreEnt;

        return $this;
    }

    public function getPrgTauxFsd3Revision(): ?string
    {
        return $this->prgTauxFsd3Revision;
    }

    public function setPrgTauxFsd3Revision(?string $prgTauxFsd3Revision): self
    {
        $this->prgTauxFsd3Revision = $prgTauxFsd3Revision;

        return $this;
    }

    public function getPrgFlgSessAnonyme(): ?string
    {
        return $this->prgFlgSessAnonyme;
    }

    public function setPrgFlgSessAnonyme(?string $prgFlgSessAnonyme): self
    {
        $this->prgFlgSessAnonyme = $prgFlgSessAnonyme;

        return $this;
    }

    public function getPrgCorChapcode(): ?string
    {
        return $this->prgCorChapcode;
    }

    public function setPrgCorChapcode(?string $prgCorChapcode): self
    {
        $this->prgCorChapcode = $prgCorChapcode;

        return $this;
    }

    public function getPrgCorSchacode(): ?string
    {
        return $this->prgCorSchacode;
    }

    public function setPrgCorSchacode(?string $prgCorSchacode): self
    {
        $this->prgCorSchacode = $prgCorSchacode;

        return $this;
    }

    public function getPrgCorArticod(): ?string
    {
        return $this->prgCorArticod;
    }

    public function setPrgCorArticod(?string $prgCorArticod): self
    {
        $this->prgCorArticod = $prgCorArticod;

        return $this;
    }

    public function getPrgCorPrognum(): ?string
    {
        return $this->prgCorPrognum;
    }

    public function setPrgCorPrognum(?string $prgCorPrognum): self
    {
        $this->prgCorPrognum = $prgCorPrognum;

        return $this;
    }

    public function getPrgCorMpnccod1(): ?string
    {
        return $this->prgCorMpnccod1;
    }

    public function setPrgCorMpnccod1(?string $prgCorMpnccod1): self
    {
        $this->prgCorMpnccod1 = $prgCorMpnccod1;

        return $this;
    }

    public function getPrgFlgBcPrixRevise(): ?string
    {
        return $this->prgFlgBcPrixRevise;
    }

    public function setPrgFlgBcPrixRevise(?string $prgFlgBcPrixRevise): self
    {
        $this->prgFlgBcPrixRevise = $prgFlgBcPrixRevise;

        return $this;
    }

    public function getPrgFlgAbsencesRemu(): ?string
    {
        return $this->prgFlgAbsencesRemu;
    }

    public function setPrgFlgAbsencesRemu(?string $prgFlgAbsencesRemu): self
    {
        $this->prgFlgAbsencesRemu = $prgFlgAbsencesRemu;

        return $this;
    }

    public function getPrgFlgDmdModifAutor(): ?string
    {
        return $this->prgFlgDmdModifAutor;
    }

    public function setPrgFlgDmdModifAutor(?string $prgFlgDmdModifAutor): self
    {
        $this->prgFlgDmdModifAutor = $prgFlgDmdModifAutor;

        return $this;
    }

    public function getPrgFlgVolumRemuBc(): ?string
    {
        return $this->prgFlgVolumRemuBc;
    }

    public function setPrgFlgVolumRemuBc(?string $prgFlgVolumRemuBc): self
    {
        $this->prgFlgVolumRemuBc = $prgFlgVolumRemuBc;

        return $this;
    }

    public function getPrgFlgGestionRemu(): ?string
    {
        return $this->prgFlgGestionRemu;
    }

    public function setPrgFlgGestionRemu(?string $prgFlgGestionRemu): self
    {
        $this->prgFlgGestionRemu = $prgFlgGestionRemu;

        return $this;
    }

    public function getPrgFlgPasPrescription(): ?string
    {
        return $this->prgFlgPasPrescription;
    }

    public function setPrgFlgPasPrescription(?string $prgFlgPasPrescription): self
    {
        $this->prgFlgPasPrescription = $prgFlgPasPrescription;

        return $this;
    }

    public function getPrgFlgPasValidSess(): ?string
    {
        return $this->prgFlgPasValidSess;
    }

    public function setPrgFlgPasValidSess(?string $prgFlgPasValidSess): self
    {
        $this->prgFlgPasValidSess = $prgFlgPasValidSess;

        return $this;
    }

    public function getPrgFlgInterfaceLms(): ?string
    {
        return $this->prgFlgInterfaceLms;
    }

    public function setPrgFlgInterfaceLms(?string $prgFlgInterfaceLms): self
    {
        $this->prgFlgInterfaceLms = $prgFlgInterfaceLms;

        return $this;
    }

    public function getPrgCorAfdglig(): ?string
    {
        return $this->prgCorAfdglig;
    }

    public function setPrgCorAfdglig(?string $prgCorAfdglig): self
    {
        $this->prgCorAfdglig = $prgCorAfdglig;

        return $this;
    }

    public function getPrgFlgImportSessTrans(): ?string
    {
        return $this->prgFlgImportSessTrans;
    }

    public function setPrgFlgImportSessTrans(?string $prgFlgImportSessTrans): self
    {
        $this->prgFlgImportSessTrans = $prgFlgImportSessTrans;

        return $this;
    }

    public function getPrgPrcCreationBcAuto(): ?string
    {
        return $this->prgPrcCreationBcAuto;
    }

    public function setPrgPrcCreationBcAuto(?string $prgPrcCreationBcAuto): self
    {
        $this->prgPrcCreationBcAuto = $prgPrcCreationBcAuto;

        return $this;
    }

    public function getPrgFlgSessFinancRemu(): ?string
    {
        return $this->prgFlgSessFinancRemu;
    }

    public function setPrgFlgSessFinancRemu(?string $prgFlgSessFinancRemu): self
    {
        $this->prgFlgSessFinancRemu = $prgFlgSessFinancRemu;

        return $this;
    }

    public function getPrgDispo(): ?Dispositif
    {
        return $this->prgDispo;
    }

    public function setPrgDispo(?Dispositif $prgDispo): self
    {
        $this->prgDispo = $prgDispo;

        return $this;
    }

    public function getPrgEcheancier(): ?PEcheancier
    {
        return $this->prgEcheancier;
    }

    public function setPrgEcheancier(?PEcheancier $prgEcheancier): self
    {
        $this->prgEcheancier = $prgEcheancier;

        return $this;
    }

    public function getPrgHorscperop(): ?CperOpera
    {
        return $this->prgHorscperop;
    }

    public function setPrgHorscperop(?CperOpera $prgHorscperop): self
    {
        $this->prgHorscperop = $prgHorscperop;

        return $this;
    }

    public function getPrgHorscperph(): ?CperPhase
    {
        return $this->prgHorscperph;
    }

    public function setPrgHorscperph(?CperPhase $prgHorscperph): self
    {
        $this->prgHorscperph = $prgHorscperph;

        return $this;
    }

    public function getPrgOrigine(): ?self
    {
        return $this->prgOrigine;
    }

    public function setPrgOrigine(?self $prgOrigine): self
    {
        $this->prgOrigine = $prgOrigine;

        return $this;
    }

    public function getPrgAuteurv(): ?Utilisateur
    {
        return $this->prgAuteurv;
    }

    public function setPrgAuteurv(?Utilisateur $prgAuteurv): self
    {
        $this->prgAuteurv = $prgAuteurv;

        return $this;
    }

    public function getPrgAuteurdeval(): ?Utilisateur
    {
        return $this->prgAuteurdeval;
    }

    public function setPrgAuteurdeval(?Utilisateur $prgAuteurdeval): self
    {
        $this->prgAuteurdeval = $prgAuteurdeval;

        return $this;
    }

    public function getPrgAuteurclot(): ?Utilisateur
    {
        return $this->prgAuteurclot;
    }

    public function setPrgAuteurclot(?Utilisateur $prgAuteurclot): self
    {
        $this->prgAuteurclot = $prgAuteurclot;

        return $this;
    }

    public function getPrgAuteurdeclo(): ?Utilisateur
    {
        return $this->prgAuteurdeclo;
    }

    public function setPrgAuteurdeclo(?Utilisateur $prgAuteurdeclo): self
    {
        $this->prgAuteurdeclo = $prgAuteurdeclo;

        return $this;
    }

    public function getPrgAuteuractprg(): ?Utilisateur
    {
        return $this->prgAuteuractprg;
    }

    public function setPrgAuteuractprg(?Utilisateur $prgAuteuractprg): self
    {
        $this->prgAuteuractprg = $prgAuteuractprg;

        return $this;
    }

    public function getPrgAuteurdacprg(): ?Utilisateur
    {
        return $this->prgAuteurdacprg;
    }

    public function setPrgAuteurdacprg(?Utilisateur $prgAuteurdacprg): self
    {
        $this->prgAuteurdacprg = $prgAuteurdacprg;

        return $this;
    }

    public function getPrgAuteurcloprg(): ?Utilisateur
    {
        return $this->prgAuteurcloprg;
    }

    public function setPrgAuteurcloprg(?Utilisateur $prgAuteurcloprg): self
    {
        $this->prgAuteurcloprg = $prgAuteurcloprg;

        return $this;
    }

    public function getPrgAuteurdecprg(): ?Utilisateur
    {
        return $this->prgAuteurdecprg;
    }

    public function setPrgAuteurdecprg(?Utilisateur $prgAuteurdecprg): self
    {
        $this->prgAuteurdecprg = $prgAuteurdecprg;

        return $this;
    }

    public function getRefIdTypeAchat(): ?Referentiel
    {
        return $this->refIdTypeAchat;
    }

    public function setRefIdTypeAchat(?Referentiel $refIdTypeAchat): self
    {
        $this->refIdTypeAchat = $refIdTypeAchat;

        return $this;
    }

    public function getRefIdTypeAction(): ?Referentiel
    {
        return $this->refIdTypeAction;
    }

    public function setRefIdTypeAction(?Referentiel $refIdTypeAction): self
    {
        $this->refIdTypeAction = $refIdTypeAction;

        return $this;
    }


}
