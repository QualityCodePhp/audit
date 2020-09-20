<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * SessionFormation
 *
 * @ORM\Table(name="session_formation", uniqueConstraints={@ORM\UniqueConstraint(name="session_formation_pk", columns={"sess_id"})}, indexes={@ORM\Index(name="modalite_entree_fk", columns={"ref_id_modalite_entree"}), @ORM\Index(name="sess_ref_type_entree_fk", columns={"ref_id_type_entree"}), @ORM\Index(name="adr_sess_fk", columns={"adr_id"}), @ORM\Index(name="sess_ref_id_etat_recrut_fk", columns={"ref_id_etat_recrutement"}), @ORM\Index(name="ref_type_session_fk", columns={"ref_id_type_session"}), @ORM\Index(name="sess_ant_fk", columns={"ant_id_form"}), @ORM\Index(name="sess_offmou_fk", columns={"ofmou_id"}), @ORM\Index(name="sess_nature_agrement_fk", columns={"ref_id_nature_agrement"}), @ORM\Index(name="sess_rattachee_a_bc_fk", columns={"off_id_attache_bc"}), @ORM\Index(name="sess_ets_formateur_fk", columns={"ets_id_form"}), @ORM\Index(name="sess_air_fk", columns={"air_id"}), @ORM\Index(name="sess_uti_der_modif_fk", columns={"uti_id_der_modif"}), @ORM\Index(name="sess_uti_createur_fk", columns={"uti_id_createur"}), @ORM\Index(name="sess_off_fk", columns={"off_id"})})
 * @ORM\Entity
 */
class SessionFormation
{
    /**
     * @var int
     *
     * @ORM\Column(name="sess_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="session_formation_sess_id_seq", allocationSize=1, initialValue=1)
     */
    private $sessId;

    /**
     * @var string
     *
     * @ORM\Column(name="eta_code", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $etaCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_lieu", type="string", length=100, nullable=true)
     */
    private $sessLieu;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sess_date_deb", type="datetime", nullable=true)
     */
    private $sessDateDeb;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sess_date_fin", type="datetime", nullable=true)
     */
    private $sessDateFin;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sess_date_der_etat", type="datetime", nullable=true)
     */
    private $sessDateDerEtat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_commentaire", type="string", length=2000, nullable=true)
     */
    private $sessCommentaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_nb_places", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $sessNbPlaces;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sess_date_info_co", type="datetime", nullable=true)
     */
    private $sessDateInfoCo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_eff_mini_pour_mo", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $sessEffMiniPourMo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_ratio_suite_parcours", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $sessRatioSuiteParcours;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_contact_nom", type="string", length=100, nullable=true)
     */
    private $sessContactNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_contact_tel", type="string", length=100, nullable=true)
     */
    private $sessContactTel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_contact_mail", type="string", length=100, nullable=true)
     */
    private $sessContactMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_lib", type="string", length=100, nullable=true)
     */
    private $sessLib;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_flg_annulee", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sessFlgAnnulee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_nb_heures_cent", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $sessNbHeuresCent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_nb_heures_ese", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $sessNbHeuresEse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_nb_heures_acc", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $sessNbHeuresAcc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sess_date_creation", type="date", nullable=true)
     */
    private $sessDateCreation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_nb_heures", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $sessNbHeures;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sess_dt_lim_inscrip", type="date", nullable=true)
     */
    private $sessDtLimInscrip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_ville", type="string", length=100, nullable=true)
     */
    private $sessVille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_commentaire_non_diffuse", type="string", length=2000, nullable=true)
     */
    private $sessCommentaireNonDiffuse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_flg_suppr", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sessFlgSuppr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_envoi_flg", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sessEnvoiFlg;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sess_envoi_dt_premier", type="date", nullable=true)
     */
    private $sessEnvoiDtPremier;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sess_envoi_dt_dernier", type="date", nullable=true)
     */
    private $sessEnvoiDtDernier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_code_postal", type="string", length=5, nullable=true)
     */
    private $sessCodePostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_ville_code_insee", type="string", length=5, nullable=true)
     */
    private $sessVilleCodeInsee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_acm_reference", type="string", length=50, nullable=true)
     */
    private $sessAcmReference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_acm_flg_creation", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sessAcmFlgCreation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_adr1", type="string", length=200, nullable=true)
     */
    private $sessAdr1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_adr2", type="string", length=100, nullable=true)
     */
    private $sessAdr2;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sess_date_modif", type="date", nullable=true)
     */
    private $sessDateModif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_eff_vise", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $sessEffVise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_flg_cree_auto", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sessFlgCreeAuto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_flg_obligatoire", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sessFlgObligatoire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_precis_module", type="string", length=200, nullable=true)
     */
    private $sessPrecisModule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_lib_calc", type="string", length=250, nullable=true)
     */
    private $sessLibCalc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_lib_presc", type="string", length=250, nullable=true)
     */
    private $sessLibPresc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_type_site", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sessTypeSite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_eff_vise_total", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $sessEffViseTotal;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sess_date_debut_presc", type="datetime", nullable=true)
     */
    private $sessDateDebutPresc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sess_date_fin_presc", type="datetime", nullable=true)
     */
    private $sessDateFinPresc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_specificites", type="string", length=500, nullable=true)
     */
    private $sessSpecificites;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_comment_vers_of", type="string", length=2000, nullable=true)
     */
    private $sessCommentVersOf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_comment_interne_niv1", type="string", length=2000, nullable=true)
     */
    private $sessCommentInterneNiv1;

    /**
     * @var int
     *
     * @ORM\Column(name="sess_avis_niv1", type="integer", nullable=false)
     */
    private $sessAvisNiv1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_flg_site_oblig", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sessFlgSiteOblig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_flg_site_option", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sessFlgSiteOption;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_flg_site_suppl", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sessFlgSiteSuppl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_nom_of_non_trouve", type="string", length=300, nullable=true)
     */
    private $sessNomOfNonTrouve;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sess_date_entree_tardive", type="datetime", nullable=true)
     */
    private $sessDateEntreeTardive;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_cp_ville_init_passation", type="string", length=500, nullable=true)
     */
    private $sessCpVilleInitPassation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_adr0", type="string", length=100, nullable=true)
     */
    private $sessAdr0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_comment_of_pour_region", type="string", length=2000, nullable=true)
     */
    private $sessCommentOfPourRegion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_dur_moy_centre", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $sessDurMoyCentre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_dur_moy_ent", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $sessDurMoyEnt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_flg_adr_differente", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sessFlgAdrDifferente;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sess_date_assoc_bc", type="datetime", nullable=true)
     */
    private $sessDateAssocBc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_flg_resto_sur_place", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sessFlgRestoSurPlace;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_flg_heberg_sur_place", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sessFlgHebergSurPlace;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_flg_acces_handicape", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sessFlgAccesHandicape;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_contact_fax", type="string", length=100, nullable=true)
     */
    private $sessContactFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_site_internet", type="string", length=200, nullable=true)
     */
    private $sessSiteInternet;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sess_date_info_collective", type="datetime", nullable=true)
     */
    private $sessDateInfoCollective;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_h_deb_seq_def_cent_matin", type="string", length=5, nullable=true)
     */
    private $sessHDebSeqDefCentMatin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_h_fin_seq_def_cent_matin", type="string", length=5, nullable=true)
     */
    private $sessHFinSeqDefCentMatin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_h_deb_seq_def_cent_aprem", type="string", length=5, nullable=true)
     */
    private $sessHDebSeqDefCentAprem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_h_fin_seq_def_cent_aprem", type="string", length=5, nullable=true)
     */
    private $sessHFinSeqDefCentAprem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_h_deb_seq_def_ent_matin", type="string", length=5, nullable=true)
     */
    private $sessHDebSeqDefEntMatin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_h_fin_seq_def_ent_matin", type="string", length=5, nullable=true)
     */
    private $sessHFinSeqDefEntMatin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_h_deb_seq_def_ent_aprem", type="string", length=5, nullable=true)
     */
    private $sessHDebSeqDefEntAprem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_h_fin_seq_def_ent_aprem", type="string", length=5, nullable=true)
     */
    private $sessHFinSeqDefEntAprem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_lieu_info_collect_nom", type="string", length=200, nullable=true)
     */
    private $sessLieuInfoCollectNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_lieu_info_collect_adr1", type="string", length=500, nullable=true)
     */
    private $sessLieuInfoCollectAdr1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_lieu_info_collect_adr2", type="string", length=500, nullable=true)
     */
    private $sessLieuInfoCollectAdr2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_lieu_info_collect_cp", type="string", length=20, nullable=true)
     */
    private $sessLieuInfoCollectCp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_lieu_info_collect_prec", type="string", length=500, nullable=true)
     */
    private $sessLieuInfoCollectPrec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_lieu_info_collect_ville", type="string", length=500, nullable=true)
     */
    private $sessLieuInfoCollectVille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_eff_vise_origine", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $sessEffViseOrigine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_code_eligibilite", type="string", length=10, nullable=true)
     */
    private $sessCodeEligibilite;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sess_date_debut_envoi_carif", type="date", nullable=true)
     */
    private $sessDateDebutEnvoiCarif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_flg_solde", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sessFlgSolde;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_flg_envoi_remu", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sessFlgEnvoiRemu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_code_offreinfo", type="string", length=50, nullable=true)
     */
    private $sessCodeOffreinfo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_rythme_hebdo_h", type="decimal", precision=2, scale=0, nullable=true)
     */
    private $sessRythmeHebdoH;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_eff_vise_histo", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $sessEffViseHisto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sess_id_antenne_sam_tmp", type="string", length=12, nullable=true)
     */
    private $sessIdAntenneSamTmp;

    /**
     * @var \Adresse
     *
     * @ORM\ManyToOne(targetEntity="Adresse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="adr_id", referencedColumnName="adr_id")
     * })
     */
    private $adr;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_modalite_entree", referencedColumnName="ref_id")
     * })
     */
    private $refIdModaliteEntree;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_type_session", referencedColumnName="ref_id")
     * })
     */
    private $refIdTypeSession;

    /**
     * @var \Airerecrut
     *
     * @ORM\ManyToOne(targetEntity="Airerecrut")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="air_id", referencedColumnName="air_id")
     * })
     */
    private $air;

    /**
     * @var \Antenne
     *
     * @ORM\ManyToOne(targetEntity="Antenne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ant_id_form", referencedColumnName="ant_id")
     * })
     */
    private $antIdForm;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ets_id_form", referencedColumnName="ets_id")
     * })
     */
    private $etsIdForm;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_nature_agrement", referencedColumnName="ref_id")
     * })
     */
    private $refIdNatureAgrement;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_id", referencedColumnName="off_id")
     * })
     */
    private $off;

    /**
     * @var \OffreModule
     *
     * @ORM\ManyToOne(targetEntity="OffreModule", inversedBy="sessionsFormation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ofmou_id", referencedColumnName="ofmou_id")
     * })
     */
    private $ofmou;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_id_attache_bc", referencedColumnName="off_id")
     * })
     */
    private $offIdAttacheBc;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_etat_recrutement", referencedColumnName="ref_id")
     * })
     */
    private $refIdEtatRecrutement;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_type_entree", referencedColumnName="ref_id")
     * })
     */
    private $refIdTypeEntree;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uti_id_createur", referencedColumnName="uti_id")
     * })
     */
    private $utiIdCreateur;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uti_id_der_modif", referencedColumnName="uti_id")
     * })
     */
    private $utiIdDerModif;


    /**
     * @var \Collection
     *
     * @ORM\OneToMany(targetEntity="SessionFormationEnvoi", mappedBy="sessionFormation", fetch="EAGER")
     * @ORM\OrderBy({"name" = "DESC"})
     */
    private $sessionFormationEnvoi;

    /**
     * @var \Collection
     *
     * @ORM\OneToMany(targetEntity="SessionPlageFerm", mappedBy="sess", fetch="EAGER")
     * @ORM\OrderBy({"name" = "DESC"})
     */
    private $sessionPlageFermeture;

    /**
     * @var \Collection
     *
     * @ORM\OneToMany(targetEntity="SessionDateEntree", mappedBy="sess", fetch="EAGER")
     * @ORM\OrderBy({"name" = "DESC"})
     */
    private $sessionDateEntree;


    public function __construct()
    {
        $this->sessionFormationEnvoi = new ArrayCollection();
        $this->sessionPlageFermeture = new ArrayCollection();
        $this->sessionDateEntree = new ArrayCollection();
    }

    public function getSessId(): ?int
    {
        return $this->sessId;
    }

    public function getEtaCode(): ?string
    {
        return $this->etaCode;
    }

    public function setEtaCode(string $etaCode): self
    {
        $this->etaCode = $etaCode;

        return $this;
    }

    public function getSessLieu(): ?string
    {
        return $this->sessLieu;
    }

    public function setSessLieu(?string $sessLieu): self
    {
        $this->sessLieu = $sessLieu;

        return $this;
    }

    public function getSessDateDeb(): ?\DateTimeInterface
    {
        return $this->sessDateDeb;
    }

    public function setSessDateDeb(?\DateTimeInterface $sessDateDeb): self
    {
        $this->sessDateDeb = $sessDateDeb;

        return $this;
    }

    public function getSessDateFin(): ?\DateTimeInterface
    {
        return $this->sessDateFin;
    }

    public function setSessDateFin(?\DateTimeInterface $sessDateFin): self
    {
        $this->sessDateFin = $sessDateFin;

        return $this;
    }

    public function getSessDateDerEtat(): ?\DateTimeInterface
    {
        return $this->sessDateDerEtat;
    }

    public function setSessDateDerEtat(?\DateTimeInterface $sessDateDerEtat): self
    {
        $this->sessDateDerEtat = $sessDateDerEtat;

        return $this;
    }

    public function getSessCommentaire(): ?string
    {
        return $this->sessCommentaire;
    }

    public function setSessCommentaire(?string $sessCommentaire): self
    {
        $this->sessCommentaire = $sessCommentaire;

        return $this;
    }

    public function getSessNbPlaces(): ?string
    {
        return $this->sessNbPlaces;
    }

    public function setSessNbPlaces(?string $sessNbPlaces): self
    {
        $this->sessNbPlaces = $sessNbPlaces;

        return $this;
    }

    public function getSessDateInfoCo(): ?\DateTimeInterface
    {
        return $this->sessDateInfoCo;
    }

    public function setSessDateInfoCo(?\DateTimeInterface $sessDateInfoCo): self
    {
        $this->sessDateInfoCo = $sessDateInfoCo;

        return $this;
    }

    public function getSessEffMiniPourMo(): ?string
    {
        return $this->sessEffMiniPourMo;
    }

    public function setSessEffMiniPourMo(?string $sessEffMiniPourMo): self
    {
        $this->sessEffMiniPourMo = $sessEffMiniPourMo;

        return $this;
    }

    public function getSessRatioSuiteParcours(): ?string
    {
        return $this->sessRatioSuiteParcours;
    }

    public function setSessRatioSuiteParcours(?string $sessRatioSuiteParcours): self
    {
        $this->sessRatioSuiteParcours = $sessRatioSuiteParcours;

        return $this;
    }

    public function getSessContactNom(): ?string
    {
        return $this->sessContactNom;
    }

    public function setSessContactNom(?string $sessContactNom): self
    {
        $this->sessContactNom = $sessContactNom;

        return $this;
    }

    public function getSessContactTel(): ?string
    {
        return $this->sessContactTel;
    }

    public function setSessContactTel(?string $sessContactTel): self
    {
        $this->sessContactTel = $sessContactTel;

        return $this;
    }

    public function getSessContactMail(): ?string
    {
        return $this->sessContactMail;
    }

    public function setSessContactMail(?string $sessContactMail): self
    {
        $this->sessContactMail = $sessContactMail;

        return $this;
    }

    public function getSessLib(): ?string
    {
        return $this->sessLib;
    }

    public function setSessLib(?string $sessLib): self
    {
        $this->sessLib = $sessLib;

        return $this;
    }

    public function getSessFlgAnnulee(): ?string
    {
        return $this->sessFlgAnnulee;
    }

    public function setSessFlgAnnulee(?string $sessFlgAnnulee): self
    {
        $this->sessFlgAnnulee = $sessFlgAnnulee;

        return $this;
    }

    public function getSessNbHeuresCent(): ?string
    {
        return $this->sessNbHeuresCent;
    }

    public function setSessNbHeuresCent(?string $sessNbHeuresCent): self
    {
        $this->sessNbHeuresCent = $sessNbHeuresCent;

        return $this;
    }

    public function getSessNbHeuresEse(): ?string
    {
        return $this->sessNbHeuresEse;
    }

    public function setSessNbHeuresEse(?string $sessNbHeuresEse): self
    {
        $this->sessNbHeuresEse = $sessNbHeuresEse;

        return $this;
    }

    public function getSessNbHeuresAcc(): ?string
    {
        return $this->sessNbHeuresAcc;
    }

    public function setSessNbHeuresAcc(?string $sessNbHeuresAcc): self
    {
        $this->sessNbHeuresAcc = $sessNbHeuresAcc;

        return $this;
    }

    public function getSessDateCreation(): ?\DateTimeInterface
    {
        return $this->sessDateCreation;
    }

    public function setSessDateCreation(?\DateTimeInterface $sessDateCreation): self
    {
        $this->sessDateCreation = $sessDateCreation;

        return $this;
    }

    public function getSessNbHeures(): ?string
    {
        return $this->sessNbHeures;
    }

    public function setSessNbHeures(?string $sessNbHeures): self
    {
        $this->sessNbHeures = $sessNbHeures;

        return $this;
    }

    public function getSessDtLimInscrip(): ?\DateTimeInterface
    {
        return $this->sessDtLimInscrip;
    }

    public function setSessDtLimInscrip(?\DateTimeInterface $sessDtLimInscrip): self
    {
        $this->sessDtLimInscrip = $sessDtLimInscrip;

        return $this;
    }

    public function getSessVille(): ?string
    {
        return $this->sessVille;
    }

    public function setSessVille(?string $sessVille): self
    {
        $this->sessVille = $sessVille;

        return $this;
    }

    public function getSessCommentaireNonDiffuse(): ?string
    {
        return $this->sessCommentaireNonDiffuse;
    }

    public function setSessCommentaireNonDiffuse(?string $sessCommentaireNonDiffuse): self
    {
        $this->sessCommentaireNonDiffuse = $sessCommentaireNonDiffuse;

        return $this;
    }

    public function getSessFlgSuppr(): ?string
    {
        return $this->sessFlgSuppr;
    }

    public function setSessFlgSuppr(?string $sessFlgSuppr): self
    {
        $this->sessFlgSuppr = $sessFlgSuppr;

        return $this;
    }

    public function getSessEnvoiFlg(): ?string
    {
        return $this->sessEnvoiFlg;
    }

    public function setSessEnvoiFlg(?string $sessEnvoiFlg): self
    {
        $this->sessEnvoiFlg = $sessEnvoiFlg;

        return $this;
    }

    public function getSessEnvoiDtPremier(): ?\DateTimeInterface
    {
        return $this->sessEnvoiDtPremier;
    }

    public function setSessEnvoiDtPremier(?\DateTimeInterface $sessEnvoiDtPremier): self
    {
        $this->sessEnvoiDtPremier = $sessEnvoiDtPremier;

        return $this;
    }

    public function getSessEnvoiDtDernier(): ?\DateTimeInterface
    {
        return $this->sessEnvoiDtDernier;
    }

    public function setSessEnvoiDtDernier(?\DateTimeInterface $sessEnvoiDtDernier): self
    {
        $this->sessEnvoiDtDernier = $sessEnvoiDtDernier;

        return $this;
    }

    public function getSessCodePostal(): ?string
    {
        return $this->sessCodePostal;
    }

    public function setSessCodePostal(?string $sessCodePostal): self
    {
        $this->sessCodePostal = $sessCodePostal;

        return $this;
    }

    public function getSessVilleCodeInsee(): ?string
    {
        return $this->sessVilleCodeInsee;
    }

    public function setSessVilleCodeInsee(?string $sessVilleCodeInsee): self
    {
        $this->sessVilleCodeInsee = $sessVilleCodeInsee;

        return $this;
    }

    public function getSessAcmReference(): ?string
    {
        return $this->sessAcmReference;
    }

    public function setSessAcmReference(?string $sessAcmReference): self
    {
        $this->sessAcmReference = $sessAcmReference;

        return $this;
    }

    public function getSessAcmFlgCreation(): ?string
    {
        return $this->sessAcmFlgCreation;
    }

    public function setSessAcmFlgCreation(?string $sessAcmFlgCreation): self
    {
        $this->sessAcmFlgCreation = $sessAcmFlgCreation;

        return $this;
    }

    public function getSessAdr1(): ?string
    {
        return $this->sessAdr1;
    }

    public function setSessAdr1(?string $sessAdr1): self
    {
        $this->sessAdr1 = $sessAdr1;

        return $this;
    }

    public function getSessAdr2(): ?string
    {
        return $this->sessAdr2;
    }

    public function setSessAdr2(?string $sessAdr2): self
    {
        $this->sessAdr2 = $sessAdr2;

        return $this;
    }

    public function getSessDateModif(): ?\DateTimeInterface
    {
        return $this->sessDateModif;
    }

    public function setSessDateModif(?\DateTimeInterface $sessDateModif): self
    {
        $this->sessDateModif = $sessDateModif;

        return $this;
    }

    public function getSessEffVise(): ?string
    {
        return $this->sessEffVise;
    }

    public function setSessEffVise(?string $sessEffVise): self
    {
        $this->sessEffVise = $sessEffVise;

        return $this;
    }

    public function getSessFlgCreeAuto(): ?string
    {
        return $this->sessFlgCreeAuto;
    }

    public function setSessFlgCreeAuto(?string $sessFlgCreeAuto): self
    {
        $this->sessFlgCreeAuto = $sessFlgCreeAuto;

        return $this;
    }

    public function getSessFlgObligatoire(): ?string
    {
        return $this->sessFlgObligatoire;
    }

    public function setSessFlgObligatoire(?string $sessFlgObligatoire): self
    {
        $this->sessFlgObligatoire = $sessFlgObligatoire;

        return $this;
    }

    public function getSessPrecisModule(): ?string
    {
        return $this->sessPrecisModule;
    }

    public function setSessPrecisModule(?string $sessPrecisModule): self
    {
        $this->sessPrecisModule = $sessPrecisModule;

        return $this;
    }

    public function getSessLibCalc(): ?string
    {
        return $this->sessLibCalc;
    }

    public function setSessLibCalc(?string $sessLibCalc): self
    {
        $this->sessLibCalc = $sessLibCalc;

        return $this;
    }

    public function getSessLibPresc(): ?string
    {
        return $this->sessLibPresc;
    }

    public function setSessLibPresc(?string $sessLibPresc): self
    {
        $this->sessLibPresc = $sessLibPresc;

        return $this;
    }

    public function getSessTypeSite(): ?string
    {
        return $this->sessTypeSite;
    }

    public function setSessTypeSite(?string $sessTypeSite): self
    {
        $this->sessTypeSite = $sessTypeSite;

        return $this;
    }

    public function getSessEffViseTotal(): ?string
    {
        return $this->sessEffViseTotal;
    }

    public function setSessEffViseTotal(?string $sessEffViseTotal): self
    {
        $this->sessEffViseTotal = $sessEffViseTotal;

        return $this;
    }

    public function getSessDateDebutPresc(): ?\DateTimeInterface
    {
        return $this->sessDateDebutPresc;
    }

    public function setSessDateDebutPresc(?\DateTimeInterface $sessDateDebutPresc): self
    {
        $this->sessDateDebutPresc = $sessDateDebutPresc;

        return $this;
    }

    public function getSessDateFinPresc(): ?\DateTimeInterface
    {
        return $this->sessDateFinPresc;
    }

    public function setSessDateFinPresc(?\DateTimeInterface $sessDateFinPresc): self
    {
        $this->sessDateFinPresc = $sessDateFinPresc;

        return $this;
    }

    public function getSessSpecificites(): ?string
    {
        return $this->sessSpecificites;
    }

    public function setSessSpecificites(?string $sessSpecificites): self
    {
        $this->sessSpecificites = $sessSpecificites;

        return $this;
    }

    public function getSessCommentVersOf(): ?string
    {
        return $this->sessCommentVersOf;
    }

    public function setSessCommentVersOf(?string $sessCommentVersOf): self
    {
        $this->sessCommentVersOf = $sessCommentVersOf;

        return $this;
    }

    public function getSessCommentInterneNiv1(): ?string
    {
        return $this->sessCommentInterneNiv1;
    }

    public function setSessCommentInterneNiv1(?string $sessCommentInterneNiv1): self
    {
        $this->sessCommentInterneNiv1 = $sessCommentInterneNiv1;

        return $this;
    }

    public function getSessAvisNiv1(): ?int
    {
        return $this->sessAvisNiv1;
    }

    public function setSessAvisNiv1(int $sessAvisNiv1): self
    {
        $this->sessAvisNiv1 = $sessAvisNiv1;

        return $this;
    }

    public function getSessFlgSiteOblig(): ?string
    {
        return $this->sessFlgSiteOblig;
    }

    public function setSessFlgSiteOblig(?string $sessFlgSiteOblig): self
    {
        $this->sessFlgSiteOblig = $sessFlgSiteOblig;

        return $this;
    }

    public function getSessFlgSiteOption(): ?string
    {
        return $this->sessFlgSiteOption;
    }

    public function setSessFlgSiteOption(?string $sessFlgSiteOption): self
    {
        $this->sessFlgSiteOption = $sessFlgSiteOption;

        return $this;
    }

    public function getSessFlgSiteSuppl(): ?string
    {
        return $this->sessFlgSiteSuppl;
    }

    public function setSessFlgSiteSuppl(?string $sessFlgSiteSuppl): self
    {
        $this->sessFlgSiteSuppl = $sessFlgSiteSuppl;

        return $this;
    }

    public function getSessNomOfNonTrouve(): ?string
    {
        return $this->sessNomOfNonTrouve;
    }

    public function setSessNomOfNonTrouve(?string $sessNomOfNonTrouve): self
    {
        $this->sessNomOfNonTrouve = $sessNomOfNonTrouve;

        return $this;
    }

    public function getSessDateEntreeTardive(): ?\DateTimeInterface
    {
        return $this->sessDateEntreeTardive;
    }

    public function setSessDateEntreeTardive(?\DateTimeInterface $sessDateEntreeTardive): self
    {
        $this->sessDateEntreeTardive = $sessDateEntreeTardive;

        return $this;
    }

    public function getSessCpVilleInitPassation(): ?string
    {
        return $this->sessCpVilleInitPassation;
    }

    public function setSessCpVilleInitPassation(?string $sessCpVilleInitPassation): self
    {
        $this->sessCpVilleInitPassation = $sessCpVilleInitPassation;

        return $this;
    }

    public function getSessAdr0(): ?string
    {
        return $this->sessAdr0;
    }

    public function setSessAdr0(?string $sessAdr0): self
    {
        $this->sessAdr0 = $sessAdr0;

        return $this;
    }

    public function getSessCommentOfPourRegion(): ?string
    {
        return $this->sessCommentOfPourRegion;
    }

    public function setSessCommentOfPourRegion(?string $sessCommentOfPourRegion): self
    {
        $this->sessCommentOfPourRegion = $sessCommentOfPourRegion;

        return $this;
    }

    public function getSessDurMoyCentre(): ?string
    {
        return $this->sessDurMoyCentre;
    }

    public function setSessDurMoyCentre(?string $sessDurMoyCentre): self
    {
        $this->sessDurMoyCentre = $sessDurMoyCentre;

        return $this;
    }

    public function getSessDurMoyEnt(): ?string
    {
        return $this->sessDurMoyEnt;
    }

    public function setSessDurMoyEnt(?string $sessDurMoyEnt): self
    {
        $this->sessDurMoyEnt = $sessDurMoyEnt;

        return $this;
    }

    public function getSessFlgAdrDifferente(): ?string
    {
        return $this->sessFlgAdrDifferente;
    }

    public function setSessFlgAdrDifferente(?string $sessFlgAdrDifferente): self
    {
        $this->sessFlgAdrDifferente = $sessFlgAdrDifferente;

        return $this;
    }

    public function getSessDateAssocBc(): ?\DateTimeInterface
    {
        return $this->sessDateAssocBc;
    }

    public function setSessDateAssocBc(?\DateTimeInterface $sessDateAssocBc): self
    {
        $this->sessDateAssocBc = $sessDateAssocBc;

        return $this;
    }

    public function getSessFlgRestoSurPlace(): ?string
    {
        return $this->sessFlgRestoSurPlace;
    }

    public function setSessFlgRestoSurPlace(?string $sessFlgRestoSurPlace): self
    {
        $this->sessFlgRestoSurPlace = $sessFlgRestoSurPlace;

        return $this;
    }

    public function getSessFlgHebergSurPlace(): ?string
    {
        return $this->sessFlgHebergSurPlace;
    }

    public function setSessFlgHebergSurPlace(?string $sessFlgHebergSurPlace): self
    {
        $this->sessFlgHebergSurPlace = $sessFlgHebergSurPlace;

        return $this;
    }

    public function getSessFlgAccesHandicape(): ?string
    {
        return $this->sessFlgAccesHandicape;
    }

    public function setSessFlgAccesHandicape(?string $sessFlgAccesHandicape): self
    {
        $this->sessFlgAccesHandicape = $sessFlgAccesHandicape;

        return $this;
    }

    public function getSessContactFax(): ?string
    {
        return $this->sessContactFax;
    }

    public function setSessContactFax(?string $sessContactFax): self
    {
        $this->sessContactFax = $sessContactFax;

        return $this;
    }

    public function getSessSiteInternet(): ?string
    {
        return $this->sessSiteInternet;
    }

    public function setSessSiteInternet(?string $sessSiteInternet): self
    {
        $this->sessSiteInternet = $sessSiteInternet;

        return $this;
    }

    public function getSessDateInfoCollective(): ?\DateTimeInterface
    {
        return $this->sessDateInfoCollective;
    }

    public function setSessDateInfoCollective(?\DateTimeInterface $sessDateInfoCollective): self
    {
        $this->sessDateInfoCollective = $sessDateInfoCollective;

        return $this;
    }

    public function getSessHDebSeqDefCentMatin(): ?string
    {
        return $this->sessHDebSeqDefCentMatin;
    }

    public function setSessHDebSeqDefCentMatin(?string $sessHDebSeqDefCentMatin): self
    {
        $this->sessHDebSeqDefCentMatin = $sessHDebSeqDefCentMatin;

        return $this;
    }

    public function getSessHFinSeqDefCentMatin(): ?string
    {
        return $this->sessHFinSeqDefCentMatin;
    }

    public function setSessHFinSeqDefCentMatin(?string $sessHFinSeqDefCentMatin): self
    {
        $this->sessHFinSeqDefCentMatin = $sessHFinSeqDefCentMatin;

        return $this;
    }

    public function getSessHDebSeqDefCentAprem(): ?string
    {
        return $this->sessHDebSeqDefCentAprem;
    }

    public function setSessHDebSeqDefCentAprem(?string $sessHDebSeqDefCentAprem): self
    {
        $this->sessHDebSeqDefCentAprem = $sessHDebSeqDefCentAprem;

        return $this;
    }

    public function getSessHFinSeqDefCentAprem(): ?string
    {
        return $this->sessHFinSeqDefCentAprem;
    }

    public function setSessHFinSeqDefCentAprem(?string $sessHFinSeqDefCentAprem): self
    {
        $this->sessHFinSeqDefCentAprem = $sessHFinSeqDefCentAprem;

        return $this;
    }

    public function getSessHDebSeqDefEntMatin(): ?string
    {
        return $this->sessHDebSeqDefEntMatin;
    }

    public function setSessHDebSeqDefEntMatin(?string $sessHDebSeqDefEntMatin): self
    {
        $this->sessHDebSeqDefEntMatin = $sessHDebSeqDefEntMatin;

        return $this;
    }

    public function getSessHFinSeqDefEntMatin(): ?string
    {
        return $this->sessHFinSeqDefEntMatin;
    }

    public function setSessHFinSeqDefEntMatin(?string $sessHFinSeqDefEntMatin): self
    {
        $this->sessHFinSeqDefEntMatin = $sessHFinSeqDefEntMatin;

        return $this;
    }

    public function getSessHDebSeqDefEntAprem(): ?string
    {
        return $this->sessHDebSeqDefEntAprem;
    }

    public function setSessHDebSeqDefEntAprem(?string $sessHDebSeqDefEntAprem): self
    {
        $this->sessHDebSeqDefEntAprem = $sessHDebSeqDefEntAprem;

        return $this;
    }

    public function getSessHFinSeqDefEntAprem(): ?string
    {
        return $this->sessHFinSeqDefEntAprem;
    }

    public function setSessHFinSeqDefEntAprem(?string $sessHFinSeqDefEntAprem): self
    {
        $this->sessHFinSeqDefEntAprem = $sessHFinSeqDefEntAprem;

        return $this;
    }

    public function getSessLieuInfoCollectNom(): ?string
    {
        return $this->sessLieuInfoCollectNom;
    }

    public function setSessLieuInfoCollectNom(?string $sessLieuInfoCollectNom): self
    {
        $this->sessLieuInfoCollectNom = $sessLieuInfoCollectNom;

        return $this;
    }

    public function getSessLieuInfoCollectAdr1(): ?string
    {
        return $this->sessLieuInfoCollectAdr1;
    }

    public function setSessLieuInfoCollectAdr1(?string $sessLieuInfoCollectAdr1): self
    {
        $this->sessLieuInfoCollectAdr1 = $sessLieuInfoCollectAdr1;

        return $this;
    }

    public function getSessLieuInfoCollectAdr2(): ?string
    {
        return $this->sessLieuInfoCollectAdr2;
    }

    public function setSessLieuInfoCollectAdr2(?string $sessLieuInfoCollectAdr2): self
    {
        $this->sessLieuInfoCollectAdr2 = $sessLieuInfoCollectAdr2;

        return $this;
    }

    public function getSessLieuInfoCollectCp(): ?string
    {
        return $this->sessLieuInfoCollectCp;
    }

    public function setSessLieuInfoCollectCp(?string $sessLieuInfoCollectCp): self
    {
        $this->sessLieuInfoCollectCp = $sessLieuInfoCollectCp;

        return $this;
    }

    public function getSessLieuInfoCollectPrec(): ?string
    {
        return $this->sessLieuInfoCollectPrec;
    }

    public function setSessLieuInfoCollectPrec(?string $sessLieuInfoCollectPrec): self
    {
        $this->sessLieuInfoCollectPrec = $sessLieuInfoCollectPrec;

        return $this;
    }

    public function getSessLieuInfoCollectVille(): ?string
    {
        return $this->sessLieuInfoCollectVille;
    }

    public function setSessLieuInfoCollectVille(?string $sessLieuInfoCollectVille): self
    {
        $this->sessLieuInfoCollectVille = $sessLieuInfoCollectVille;

        return $this;
    }

    public function getSessEffViseOrigine(): ?string
    {
        return $this->sessEffViseOrigine;
    }

    public function setSessEffViseOrigine(?string $sessEffViseOrigine): self
    {
        $this->sessEffViseOrigine = $sessEffViseOrigine;

        return $this;
    }

    public function getSessCodeEligibilite(): ?string
    {
        return $this->sessCodeEligibilite;
    }

    public function setSessCodeEligibilite(?string $sessCodeEligibilite): self
    {
        $this->sessCodeEligibilite = $sessCodeEligibilite;

        return $this;
    }

    public function getSessDateDebutEnvoiCarif(): ?\DateTimeInterface
    {
        return $this->sessDateDebutEnvoiCarif;
    }

    public function setSessDateDebutEnvoiCarif(?\DateTimeInterface $sessDateDebutEnvoiCarif): self
    {
        $this->sessDateDebutEnvoiCarif = $sessDateDebutEnvoiCarif;

        return $this;
    }

    public function getSessFlgSolde(): ?string
    {
        return $this->sessFlgSolde;
    }

    public function setSessFlgSolde(?string $sessFlgSolde): self
    {
        $this->sessFlgSolde = $sessFlgSolde;

        return $this;
    }

    public function getSessFlgEnvoiRemu(): ?string
    {
        return $this->sessFlgEnvoiRemu;
    }

    public function setSessFlgEnvoiRemu(?string $sessFlgEnvoiRemu): self
    {
        $this->sessFlgEnvoiRemu = $sessFlgEnvoiRemu;

        return $this;
    }

    public function getSessCodeOffreinfo(): ?string
    {
        return $this->sessCodeOffreinfo;
    }

    public function setSessCodeOffreinfo(?string $sessCodeOffreinfo): self
    {
        $this->sessCodeOffreinfo = $sessCodeOffreinfo;

        return $this;
    }

    public function getSessRythmeHebdoH(): ?string
    {
        return $this->sessRythmeHebdoH;
    }

    public function setSessRythmeHebdoH(?string $sessRythmeHebdoH): self
    {
        $this->sessRythmeHebdoH = $sessRythmeHebdoH;

        return $this;
    }

    public function getSessEffViseHisto(): ?string
    {
        return $this->sessEffViseHisto;
    }

    public function setSessEffViseHisto(?string $sessEffViseHisto): self
    {
        $this->sessEffViseHisto = $sessEffViseHisto;

        return $this;
    }

    public function getSessIdAntenneSamTmp(): ?string
    {
        return $this->sessIdAntenneSamTmp;
    }

    public function setSessIdAntenneSamTmp(?string $sessIdAntenneSamTmp): self
    {
        $this->sessIdAntenneSamTmp = $sessIdAntenneSamTmp;

        return $this;
    }

    public function getAdr(): ?Adresse
    {
        return $this->adr;
    }

    public function setAdr(?Adresse $adr): self
    {
        $this->adr = $adr;

        return $this;
    }

    public function getRefIdModaliteEntree(): ?Referentiel
    {
        return $this->refIdModaliteEntree;
    }

    public function setRefIdModaliteEntree(?Referentiel $refIdModaliteEntree): self
    {
        $this->refIdModaliteEntree = $refIdModaliteEntree;

        return $this;
    }

    public function getRefIdTypeSession(): ?Referentiel
    {
        return $this->refIdTypeSession;
    }

    public function setRefIdTypeSession(?Referentiel $refIdTypeSession): self
    {
        $this->refIdTypeSession = $refIdTypeSession;

        return $this;
    }

    public function getAir(): ?Airerecrut
    {
        return $this->air;
    }

    public function setAir(?Airerecrut $air): self
    {
        $this->air = $air;

        return $this;
    }

    public function getAntIdForm(): ?Antenne
    {
        return $this->antIdForm;
    }

    public function setAntIdForm(?Antenne $antIdForm): self
    {
        $this->antIdForm = $antIdForm;

        return $this;
    }

    public function getEtsIdForm(): ?Etablssmt
    {
        return $this->etsIdForm;
    }

    public function setEtsIdForm(?Etablssmt $etsIdForm): self
    {
        $this->etsIdForm = $etsIdForm;

        return $this;
    }

    public function getRefIdNatureAgrement(): ?Referentiel
    {
        return $this->refIdNatureAgrement;
    }

    public function setRefIdNatureAgrement(?Referentiel $refIdNatureAgrement): self
    {
        $this->refIdNatureAgrement = $refIdNatureAgrement;

        return $this;
    }

    public function getOff(): ?Offre
    {
        return $this->off;
    }

    public function setOff(?Offre $off): self
    {
        $this->off = $off;

        return $this;
    }

    public function getOfmou(): ?OffreModule
    {
        return $this->ofmou;
    }

    public function setOfmou(?OffreModule $ofmou): self
    {
        $this->ofmou = $ofmou;

        return $this;
    }

    public function getOffIdAttacheBc(): ?Offre
    {
        return $this->offIdAttacheBc;
    }

    public function setOffIdAttacheBc(?Offre $offIdAttacheBc): self
    {
        $this->offIdAttacheBc = $offIdAttacheBc;

        return $this;
    }

    public function getRefIdEtatRecrutement(): ?Referentiel
    {
        return $this->refIdEtatRecrutement;
    }

    public function setRefIdEtatRecrutement(?Referentiel $refIdEtatRecrutement): self
    {
        $this->refIdEtatRecrutement = $refIdEtatRecrutement;

        return $this;
    }

    public function getRefIdTypeEntree(): ?Referentiel
    {
        return $this->refIdTypeEntree;
    }

    public function setRefIdTypeEntree(?Referentiel $refIdTypeEntree): self
    {
        $this->refIdTypeEntree = $refIdTypeEntree;

        return $this;
    }

    public function getUtiIdCreateur(): ?Utilisateur
    {
        return $this->utiIdCreateur;
    }

    public function setUtiIdCreateur(?Utilisateur $utiIdCreateur): self
    {
        $this->utiIdCreateur = $utiIdCreateur;

        return $this;
    }

    public function getUtiIdDerModif(): ?Utilisateur
    {
        return $this->utiIdDerModif;
    }

    public function setUtiIdDerModif(?Utilisateur $utiIdDerModif): self
    {
        $this->utiIdDerModif = $utiIdDerModif;

        return $this;
    }

    /**
     * @return Collection|SessionFormationEnvoi[]
     */
    public function getSessionFormationEnvoi()
    {
        return $this->sessionFormationEnvoi;
    }



    public function addSessionFormationEnvoi(SessionFormationEnvoi $sessionFormationEnvoi): self
    {
        if (!$this->sessionFormationEnvoi->contains($sessionFormationEnvoi)) {
            $this->sessionFormationEnvoi[] = $sessionFormationEnvoi;
            $sessionFormationEnvoi->setSessionFormation($this);
        }
        return $this;
    }

    public function removeSessionFormationEnvoi(SessionFormationEnvoi $sessionFormationEnvoi): self
    {
        if ($this->sessionFormationEnvoi->contains($sessionFormationEnvoi)) {
            $this->sessionFormationEnvoi->removeElement($sessionFormationEnvoi);
            if ($sessionFormationEnvoi->getSessionFormation() === $this) {
                $sessionFormationEnvoi->setSessionFormation(null);
            }
        }
        return $this;
    }


    /**
     * @return Collection|SessionFormationEnvoi[]
     */
    public function getSessionPlageFermeture()
    {
        return $this->sessionPlageFermeture;
    }



    public function addSessionPlageFermeture(SessionPlageFerm $sessionPlageFermeture): self
    {
        if (!$this->sessionPlageFermeture->contains($sessionPlageFermeture)) {
            $this->sessionPlageFermeture[] = $sessionPlageFermeture;
            $sessionPlageFermeture->setSess($this);
        }
        return $this;
    }

    public function removeSessionPlageFermeture(SessionPlageFerm $sessionPlageFermeture): self
    {
        if ($this->sessionPlageFermeture->contains($sessionPlageFermeture)) {
            $this->sessionPlageFermeture->removeElement($sessionPlageFermeture);
            if ($sessionPlageFermeture->getSess() === $this) {
                $sessionPlageFermeture->setSess(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection|SessionFormationEnvoi[]
     */
    public function getSessionDateEntree()
    {
        return $this->sessionPlageFermeture;
    }



    public function addSessionDateEntree(SessionPlageFerm $sessionPlageFermeture): self
    {
        if (!$this->sessionPlageFermeture->contains($sessionPlageFermeture)) {
            $this->sessionPlageFermeture[] = $sessionPlageFermeture;
            $sessionPlageFermeture->setSess($this);
        }
        return $this;
    }

    public function removeSessionDateEntree(SessionPlageFerm $sessionDateEntree): self
    {
        if ($this->sessionDateEntree->contains($sessionDateEntree)) {
            $this->sessionDateEntree->removeElement($sessionDateEntree);
            if ($sessionDateEntree->getSess() === $this) {
                $sessionDateEntree->setSess(null);
            }
        }
        return $this;
    }

}
