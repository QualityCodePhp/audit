<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * SessionFormationEnvoi
 *
 * @ORM\Table(name="session_formation_envoi", uniqueConstraints={@ORM\UniqueConstraint(name="session_formation_envoi_pk", columns={"seshis_id"})}, indexes={@ORM\Index(name="sesenv_nature_agrement_fk", columns={"ref_id_nature_agrement"}), @ORM\Index(name="sesenv_sess_avis_niv_1_fk", columns={"seshis_avis_niv1"}), @ORM\Index(name="sesenv_etat_recrutement_fk", columns={"ref_id_etat_recrutement"}), @ORM\Index(name="sesenv_ref_type_entree_fk", columns={"ref_id_type_entree"}), @ORM\Index(name="sesenv_type_session_fk", columns={"ref_id_type_session"})})
 * @ORM\Entity(repositoryClass="App\Repository\SessionFormationEnvoiRepository")
 */
class SessionFormationEnvoi
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="air_id", type="decimal", precision=6, scale=0, nullable=true, options={"comment"="Identifiant Aire de recrutement"})
     */
    private $airId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uti_id", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $utiId;

    /**
     * @var \SessionFormation
     *
     * @ORM\ManyToOne(targetEntity="SessionFormation", inversedBy="sessionFormationEnvoi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sess_id", referencedColumnName="sess_id")
     * })
     */
    private $sessionFormation;

    /**
     * @var \Etablssmnt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ets_id_form", referencedColumnName="ets_id", nullable=true)
     * })
     */
    private $etsIdForm;

    /**
     * @var \Etablssmnt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ant_id_form", referencedColumnName="ets_id", nullable=true)
     * })
     */
    private $antIdForm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eta_code", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $etaCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_lieu", type="string", length=100, nullable=true)
     */
    private $seshisLieu;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="seshis_date_deb", type="date", nullable=true)
     */
    private $seshisDateDeb;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="seshis_date_fin", type="date", nullable=true)
     */
    private $seshisDateFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_commentaire", type="string", length=2000, nullable=true)
     */
    private $seshisCommentaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_nb_places", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $seshisNbPlaces;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="seshis_date_info_co", type="date", nullable=true)
     */
    private $seshisDateInfoCo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_eff_mini_pour_mo", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $seshisEffMiniPourMo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_ratio_suite_parcours", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $seshisRatioSuiteParcours;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_contact_nom", type="string", length=100, nullable=true)
     */
    private $seshisContactNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_contact_tel", type="string", length=100, nullable=true)
     */
    private $seshisContactTel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_contact_mail", type="string", length=100, nullable=true)
     */
    private $seshisContactMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_lib", type="string", length=100, nullable=true)
     */
    private $seshisLib;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_flg_annulee", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $seshisFlgAnnulee;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="seshis_dt_lim_inscrip", type="date", nullable=true)
     */
    private $seshisDtLimInscrip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_ville", type="string", length=50, nullable=true)
     */
    private $seshisVille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_code_postal", type="string", length=5, nullable=true)
     */
    private $seshisCodePostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_ville_code_insee", type="string", length=5, nullable=true)
     */
    private $seshisVilleCodeInsee;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="seshis_dt_envoi", type="date", nullable=true)
     */
    private $seshisDtEnvoi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_version", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $seshisVersion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_adr1", type="string", length=200, nullable=true)
     */
    private $seshisAdr1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_adr2", type="string", length=100, nullable=true)
     */
    private $seshisAdr2;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="seshis_date_modif", type="date", nullable=true)
     */
    private $seshisDateModif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_eff_vise", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $seshisEffVise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_attach_bc", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $seshisAttachBc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_flg_cree_auto", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $seshisFlgCreeAuto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_flg_obligatoire", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $seshisFlgObligatoire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_precis_module", type="string", length=200, nullable=true)
     */
    private $seshisPrecisModule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_lib_calc", type="string", length=250, nullable=true)
     */
    private $seshisLibCalc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_lib_presc", type="string", length=250, nullable=true)
     */
    private $seshisLibPresc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_type_site", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $seshisTypeSite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_eff_vise_total", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $seshisEffViseTotal;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="seshis_date_debut_presc", type="date", nullable=true)
     */
    private $seshisDateDebutPresc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="seshis_date_fin_presc", type="date", nullable=true)
     */
    private $seshisDateFinPresc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_specificites", type="string", length=500, nullable=true)
     */
    private $seshisSpecificites;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="seshis_date", type="date", nullable=true)
     */
    private $seshisDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_comment_vers_of", type="string", length=2000, nullable=true)
     */
    private $seshisCommentVersOf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_comment_interne_niv1", type="string", length=2000, nullable=true)
     */
    private $seshisCommentInterneNiv1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_flg_site_oblig", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $seshisFlgSiteOblig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_flg_site_option", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $seshisFlgSiteOption;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_flg_site_suppl", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $seshisFlgSiteSuppl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_nom_of_non_trouve", type="string", length=300, nullable=true)
     */
    private $seshisNomOfNonTrouve;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="seshis_date_entree_tardive", type="date", nullable=true)
     */
    private $seshisDateEntreeTardive;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_adresse_nom", type="string", length=100, nullable=true)
     */
    private $seshisAdresseNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_comment_of_pour_region", type="string", length=2000, nullable=true)
     */
    private $seshisCommentOfPourRegion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_dur_moy_centre", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $seshisDurMoyCentre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_dur_moy_ent", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $seshisDurMoyEnt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_flg_adr_differente", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $seshisFlgAdrDifferente;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_commentaire_non_diffuse", type="string", length=2000, nullable=true)
     */
    private $seshisCommentaireNonDiffuse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ofmou_id", type="integer", nullable=true)
     */
    private $ofmouId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_adr0", type="string", length=100, nullable=true)
     */
    private $seshisAdr0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_resto_sur_place", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $seshisRestoSurPlace;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_heberg_sur_place", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $seshisHebergSurPlace;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_acces_handicape", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $seshisAccesHandicape;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_contact_fax", type="string", length=100, nullable=true)
     */
    private $seshisContactFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_site_internet", type="string", length=200, nullable=true)
     */
    private $seshisSiteInternet;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="seshis_date_info_collective", type="date", nullable=true)
     */
    private $seshisDateInfoCollective;

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
     * @ORM\Column(name="seshis_lieu_info_collect_nom", type="string", length=200, nullable=true)
     */
    private $seshisLieuInfoCollectNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_lieu_info_collect_adr1", type="string", length=500, nullable=true)
     */
    private $seshisLieuInfoCollectAdr1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_lieu_info_collect_adr2", type="string", length=500, nullable=true)
     */
    private $seshisLieuInfoCollectAdr2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_lieu_info_collect_cp", type="string", length=20, nullable=true)
     */
    private $seshisLieuInfoCollectCp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_lieu_info_collect_prec", type="string", length=500, nullable=true)
     */
    private $seshisLieuInfoCollectPrec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_lieu_info_collect_ville", type="string", length=500, nullable=true)
     */
    private $seshisLieuInfoCollectVille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_code_eligibilite", type="string", length=10, nullable=true)
     */
    private $seshisCodeEligibilite;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="seshis_date_debut_envoi_carif", type="date", nullable=true)
     */
    private $seshisDateDebutEnvoiCarif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_flg_solde", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $seshisFlgSolde;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adr_id", type="decimal", precision=12, scale=0, nullable=true)
     */
    /**
     * @var \Adresse
     *
     * @ORM\ManyToOne(targetEntity="Adresse", fetch="EAGER")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="adr_id", referencedColumnName="adr_id")
     * })
     */
    private $adr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshis_rythme_hebdo_h", type="decimal", precision=2, scale=0, nullable=true)
     */
    private $seshisRythmeHebdoH;

    /**
     * @var \SessionFormationHisto
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SessionFormationHisto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="seshis_id", referencedColumnName="seshis_id")
     * })
     */
    private $seshis;

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
     *   @ORM\JoinColumn(name="ref_id_nature_agrement", referencedColumnName="ref_id")
     * })
     */
    private $refIdNatureAgrement;

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
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="seshis_avis_niv1", referencedColumnName="ref_id")
     * })
     */
    private $seshisAvisNiv1;

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
     * @var \SessionFinanceurEnvoi
     *
     * @ORM\OneToMany(targetEntity="SessionFinanceurEnvoi", mappedBy="seshis", fetch="EAGER")
     */
    private $sessionFinanceurEnvoi;

    public function  __construct()
    {
        $this->sessionFinanceurEnvoi = new ArrayCollection();
    }

    public function getAirId(): ?string
    {
        return $this->airId;
    }

    public function setAirId(?string $airId): self
    {
        $this->airId = $airId;

        return $this;
    }

    public function getUtiId(): ?string
    {
        return $this->utiId;
    }

    public function setUtiId(?string $utiId): self
    {
        $this->utiId = $utiId;

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

    /**
     * @param SessionFormation $sessionFormation
     */
    public function setSessionFormation(SessionFormation $sessionFormation): void
    {
        $this->sessionFormation = $sessionFormation;
    }

    /**
     * @return SessionFormation
     */
    public function getSessionFormation(): SessionFormation
    {
        return $this->sessionFormation;
    }

    public function getAntIdForm(): ?Etablssmt
    {
        return $this->antIdForm;
    }

    public function setAntIdForm(?Etablssmt $antIdForm): self
    {
        $this->antIdForm = $antIdForm;

        return $this;
    }

    public function getEtaCode(): ?string
    {
        return $this->etaCode;
    }

    public function setEtaCode(?string $etaCode): self
    {
        $this->etaCode = $etaCode;

        return $this;
    }

    public function getSeshisLieu(): ?string
    {
        return $this->seshisLieu;
    }

    public function setSeshisLieu(?string $seshisLieu): self
    {
        $this->seshisLieu = $seshisLieu;

        return $this;
    }

    public function getSeshisDateDeb(): ?\DateTimeInterface
    {
        return $this->seshisDateDeb;
    }

    public function setSeshisDateDeb(?\DateTimeInterface $seshisDateDeb): self
    {
        $this->seshisDateDeb = $seshisDateDeb;

        return $this;
    }

    public function getSeshisDateFin(): ?\DateTimeInterface
    {
        return $this->seshisDateFin;
    }

    public function setSeshisDateFin(?\DateTimeInterface $seshisDateFin): self
    {
        $this->seshisDateFin = $seshisDateFin;

        return $this;
    }

    public function getSeshisCommentaire(): ?string
    {
        return $this->seshisCommentaire;
    }

    public function setSeshisCommentaire(?string $seshisCommentaire): self
    {
        $this->seshisCommentaire = $seshisCommentaire;

        return $this;
    }

    public function getSeshisNbPlaces(): ?string
    {
        return $this->seshisNbPlaces;
    }

    public function setSeshisNbPlaces(?string $seshisNbPlaces): self
    {
        $this->seshisNbPlaces = $seshisNbPlaces;

        return $this;
    }

    public function getSeshisDateInfoCo(): ?\DateTimeInterface
    {
        return $this->seshisDateInfoCo;
    }

    public function setSeshisDateInfoCo(?\DateTimeInterface $seshisDateInfoCo): self
    {
        $this->seshisDateInfoCo = $seshisDateInfoCo;

        return $this;
    }

    public function getSeshisEffMiniPourMo(): ?string
    {
        return $this->seshisEffMiniPourMo;
    }

    public function setSeshisEffMiniPourMo(?string $seshisEffMiniPourMo): self
    {
        $this->seshisEffMiniPourMo = $seshisEffMiniPourMo;

        return $this;
    }

    public function getSeshisRatioSuiteParcours(): ?string
    {
        return $this->seshisRatioSuiteParcours;
    }

    public function setSeshisRatioSuiteParcours(?string $seshisRatioSuiteParcours): self
    {
        $this->seshisRatioSuiteParcours = $seshisRatioSuiteParcours;

        return $this;
    }

    public function getSeshisContactNom(): ?string
    {
        return $this->seshisContactNom;
    }

    public function setSeshisContactNom(?string $seshisContactNom): self
    {
        $this->seshisContactNom = $seshisContactNom;

        return $this;
    }

    public function getSeshisContactTel(): ?string
    {
        return $this->seshisContactTel;
    }

    public function setSeshisContactTel(?string $seshisContactTel): self
    {
        $this->seshisContactTel = $seshisContactTel;

        return $this;
    }

    public function getSeshisContactMail(): ?string
    {
        return $this->seshisContactMail;
    }

    public function setSeshisContactMail(?string $seshisContactMail): self
    {
        $this->seshisContactMail = $seshisContactMail;

        return $this;
    }

    public function getSeshisLib(): ?string
    {
        return $this->seshisLib;
    }

    public function setSeshisLib(?string $seshisLib): self
    {
        $this->seshisLib = $seshisLib;

        return $this;
    }

    public function getSeshisFlgAnnulee(): ?string
    {
        return $this->seshisFlgAnnulee;
    }

    public function setSeshisFlgAnnulee(?string $seshisFlgAnnulee): self
    {
        $this->seshisFlgAnnulee = $seshisFlgAnnulee;

        return $this;
    }

    public function getSeshisDtLimInscrip(): ?\DateTimeInterface
    {
        return $this->seshisDtLimInscrip;
    }

    public function setSeshisDtLimInscrip(?\DateTimeInterface $seshisDtLimInscrip): self
    {
        $this->seshisDtLimInscrip = $seshisDtLimInscrip;

        return $this;
    }

    public function getSeshisVille(): ?string
    {
        return $this->seshisVille;
    }

    public function setSeshisVille(?string $seshisVille): self
    {
        $this->seshisVille = $seshisVille;

        return $this;
    }

    public function getSeshisCodePostal(): ?string
    {
        return $this->seshisCodePostal;
    }

    public function setSeshisCodePostal(?string $seshisCodePostal): self
    {
        $this->seshisCodePostal = $seshisCodePostal;

        return $this;
    }

    public function getSeshisVilleCodeInsee(): ?string
    {
        return $this->seshisVilleCodeInsee;
    }

    public function setSeshisVilleCodeInsee(?string $seshisVilleCodeInsee): self
    {
        $this->seshisVilleCodeInsee = $seshisVilleCodeInsee;

        return $this;
    }

    public function getSeshisDtEnvoi(): ?\DateTimeInterface
    {
        return $this->seshisDtEnvoi;
    }

    public function setSeshisDtEnvoi(?\DateTimeInterface $seshisDtEnvoi): self
    {
        $this->seshisDtEnvoi = $seshisDtEnvoi;

        return $this;
    }

    public function getSeshisVersion(): ?string
    {
        return $this->seshisVersion;
    }

    public function setSeshisVersion(?string $seshisVersion): self
    {
        $this->seshisVersion = $seshisVersion;

        return $this;
    }

    public function getSeshisAdr1(): ?string
    {
        return $this->seshisAdr1;
    }

    public function setSeshisAdr1(?string $seshisAdr1): self
    {
        $this->seshisAdr1 = $seshisAdr1;

        return $this;
    }

    public function getSeshisAdr2(): ?string
    {
        return $this->seshisAdr2;
    }

    public function setSeshisAdr2(?string $seshisAdr2): self
    {
        $this->seshisAdr2 = $seshisAdr2;

        return $this;
    }

    public function getSeshisDateModif(): ?\DateTimeInterface
    {
        return $this->seshisDateModif;
    }

    public function setSeshisDateModif(?\DateTimeInterface $seshisDateModif): self
    {
        $this->seshisDateModif = $seshisDateModif;

        return $this;
    }

    public function getSeshisEffVise(): ?string
    {
        return $this->seshisEffVise;
    }

    public function setSeshisEffVise(?string $seshisEffVise): self
    {
        $this->seshisEffVise = $seshisEffVise;

        return $this;
    }

    public function getSeshisAttachBc(): ?string
    {
        return $this->seshisAttachBc;
    }

    public function setSeshisAttachBc(?string $seshisAttachBc): self
    {
        $this->seshisAttachBc = $seshisAttachBc;

        return $this;
    }

    public function getSeshisFlgCreeAuto(): ?string
    {
        return $this->seshisFlgCreeAuto;
    }

    public function setSeshisFlgCreeAuto(?string $seshisFlgCreeAuto): self
    {
        $this->seshisFlgCreeAuto = $seshisFlgCreeAuto;

        return $this;
    }

    public function getSeshisFlgObligatoire(): ?string
    {
        return $this->seshisFlgObligatoire;
    }

    public function setSeshisFlgObligatoire(?string $seshisFlgObligatoire): self
    {
        $this->seshisFlgObligatoire = $seshisFlgObligatoire;

        return $this;
    }

    public function getSeshisPrecisModule(): ?string
    {
        return $this->seshisPrecisModule;
    }

    public function setSeshisPrecisModule(?string $seshisPrecisModule): self
    {
        $this->seshisPrecisModule = $seshisPrecisModule;

        return $this;
    }

    public function getSeshisLibCalc(): ?string
    {
        return $this->seshisLibCalc;
    }

    public function setSeshisLibCalc(?string $seshisLibCalc): self
    {
        $this->seshisLibCalc = $seshisLibCalc;

        return $this;
    }

    public function getSeshisLibPresc(): ?string
    {
        return $this->seshisLibPresc;
    }

    public function setSeshisLibPresc(?string $seshisLibPresc): self
    {
        $this->seshisLibPresc = $seshisLibPresc;

        return $this;
    }

    public function getSeshisTypeSite(): ?string
    {
        return $this->seshisTypeSite;
    }

    public function setSeshisTypeSite(?string $seshisTypeSite): self
    {
        $this->seshisTypeSite = $seshisTypeSite;

        return $this;
    }

    public function getSeshisEffViseTotal(): ?string
    {
        return $this->seshisEffViseTotal;
    }

    public function setSeshisEffViseTotal(?string $seshisEffViseTotal): self
    {
        $this->seshisEffViseTotal = $seshisEffViseTotal;

        return $this;
    }

    public function getSeshisDateDebutPresc(): ?\DateTimeInterface
    {
        return $this->seshisDateDebutPresc;
    }

    public function setSeshisDateDebutPresc(?\DateTimeInterface $seshisDateDebutPresc): self
    {
        $this->seshisDateDebutPresc = $seshisDateDebutPresc;

        return $this;
    }

    public function getSeshisDateFinPresc(): ?\DateTimeInterface
    {
        return $this->seshisDateFinPresc;
    }

    public function setSeshisDateFinPresc(?\DateTimeInterface $seshisDateFinPresc): self
    {
        $this->seshisDateFinPresc = $seshisDateFinPresc;

        return $this;
    }

    public function getSeshisSpecificites(): ?string
    {
        return $this->seshisSpecificites;
    }

    public function setSeshisSpecificites(?string $seshisSpecificites): self
    {
        $this->seshisSpecificites = $seshisSpecificites;

        return $this;
    }

    public function getSeshisDate(): ?\DateTimeInterface
    {
        return $this->seshisDate;
    }

    public function setSeshisDate(?\DateTimeInterface $seshisDate): self
    {
        $this->seshisDate = $seshisDate;

        return $this;
    }

    public function getSeshisCommentVersOf(): ?string
    {
        return $this->seshisCommentVersOf;
    }

    public function setSeshisCommentVersOf(?string $seshisCommentVersOf): self
    {
        $this->seshisCommentVersOf = $seshisCommentVersOf;

        return $this;
    }

    public function getSeshisCommentInterneNiv1(): ?string
    {
        return $this->seshisCommentInterneNiv1;
    }

    public function setSeshisCommentInterneNiv1(?string $seshisCommentInterneNiv1): self
    {
        $this->seshisCommentInterneNiv1 = $seshisCommentInterneNiv1;

        return $this;
    }

    public function getSeshisFlgSiteOblig(): ?string
    {
        return $this->seshisFlgSiteOblig;
    }

    public function setSeshisFlgSiteOblig(?string $seshisFlgSiteOblig): self
    {
        $this->seshisFlgSiteOblig = $seshisFlgSiteOblig;

        return $this;
    }

    public function getSeshisFlgSiteOption(): ?string
    {
        return $this->seshisFlgSiteOption;
    }

    public function setSeshisFlgSiteOption(?string $seshisFlgSiteOption): self
    {
        $this->seshisFlgSiteOption = $seshisFlgSiteOption;

        return $this;
    }

    public function getSeshisFlgSiteSuppl(): ?string
    {
        return $this->seshisFlgSiteSuppl;
    }

    public function setSeshisFlgSiteSuppl(?string $seshisFlgSiteSuppl): self
    {
        $this->seshisFlgSiteSuppl = $seshisFlgSiteSuppl;

        return $this;
    }

    public function getSeshisNomOfNonTrouve(): ?string
    {
        return $this->seshisNomOfNonTrouve;
    }

    public function setSeshisNomOfNonTrouve(?string $seshisNomOfNonTrouve): self
    {
        $this->seshisNomOfNonTrouve = $seshisNomOfNonTrouve;

        return $this;
    }

    public function getSeshisDateEntreeTardive(): ?\DateTimeInterface
    {
        return $this->seshisDateEntreeTardive;
    }

    public function setSeshisDateEntreeTardive(?\DateTimeInterface $seshisDateEntreeTardive): self
    {
        $this->seshisDateEntreeTardive = $seshisDateEntreeTardive;

        return $this;
    }

    public function getSeshisAdresseNom(): ?string
    {
        return $this->seshisAdresseNom;
    }

    public function setSeshisAdresseNom(?string $seshisAdresseNom): self
    {
        $this->seshisAdresseNom = $seshisAdresseNom;

        return $this;
    }

    public function getSeshisCommentOfPourRegion(): ?string
    {
        return $this->seshisCommentOfPourRegion;
    }

    public function setSeshisCommentOfPourRegion(?string $seshisCommentOfPourRegion): self
    {
        $this->seshisCommentOfPourRegion = $seshisCommentOfPourRegion;

        return $this;
    }

    public function getSeshisDurMoyCentre(): ?string
    {
        return $this->seshisDurMoyCentre;
    }

    public function setSeshisDurMoyCentre(?string $seshisDurMoyCentre): self
    {
        $this->seshisDurMoyCentre = $seshisDurMoyCentre;

        return $this;
    }

    public function getSeshisDurMoyEnt(): ?string
    {
        return $this->seshisDurMoyEnt;
    }

    public function setSeshisDurMoyEnt(?string $seshisDurMoyEnt): self
    {
        $this->seshisDurMoyEnt = $seshisDurMoyEnt;

        return $this;
    }

    public function getSeshisFlgAdrDifferente(): ?string
    {
        return $this->seshisFlgAdrDifferente;
    }

    public function setSeshisFlgAdrDifferente(?string $seshisFlgAdrDifferente): self
    {
        $this->seshisFlgAdrDifferente = $seshisFlgAdrDifferente;

        return $this;
    }

    public function getSeshisCommentaireNonDiffuse(): ?string
    {
        return $this->seshisCommentaireNonDiffuse;
    }

    public function setSeshisCommentaireNonDiffuse(?string $seshisCommentaireNonDiffuse): self
    {
        $this->seshisCommentaireNonDiffuse = $seshisCommentaireNonDiffuse;

        return $this;
    }

    public function getOfmouId(): ?int
    {
        return $this->ofmouId;
    }

    public function setOfmouId(?int $ofmouId): self
    {
        $this->ofmouId = $ofmouId;

        return $this;
    }

    public function getSeshisAdr0(): ?string
    {
        return $this->seshisAdr0;
    }

    public function setSeshisAdr0(?string $seshisAdr0): self
    {
        $this->seshisAdr0 = $seshisAdr0;

        return $this;
    }

    public function getSeshisRestoSurPlace(): ?string
    {
        return $this->seshisRestoSurPlace;
    }

    public function setSeshisRestoSurPlace(?string $seshisRestoSurPlace): self
    {
        $this->seshisRestoSurPlace = $seshisRestoSurPlace;

        return $this;
    }

    public function getSeshisHebergSurPlace(): ?string
    {
        return $this->seshisHebergSurPlace;
    }

    public function setSeshisHebergSurPlace(?string $seshisHebergSurPlace): self
    {
        $this->seshisHebergSurPlace = $seshisHebergSurPlace;

        return $this;
    }

    public function getSeshisAccesHandicape(): ?string
    {
        return $this->seshisAccesHandicape;
    }

    public function setSeshisAccesHandicape(?string $seshisAccesHandicape): self
    {
        $this->seshisAccesHandicape = $seshisAccesHandicape;

        return $this;
    }

    public function getSeshisContactFax(): ?string
    {
        return $this->seshisContactFax;
    }

    public function setSeshisContactFax(?string $seshisContactFax): self
    {
        $this->seshisContactFax = $seshisContactFax;

        return $this;
    }

    public function getSeshisSiteInternet(): ?string
    {
        return $this->seshisSiteInternet;
    }

    public function setSeshisSiteInternet(?string $seshisSiteInternet): self
    {
        $this->seshisSiteInternet = $seshisSiteInternet;

        return $this;
    }

    public function getSeshisDateInfoCollective(): ?\DateTimeInterface
    {
        return $this->seshisDateInfoCollective;
    }

    public function setSeshisDateInfoCollective(?\DateTimeInterface $seshisDateInfoCollective): self
    {
        $this->seshisDateInfoCollective = $seshisDateInfoCollective;

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

    public function getSeshisLieuInfoCollectNom(): ?string
    {
        return $this->seshisLieuInfoCollectNom;
    }

    public function setSeshisLieuInfoCollectNom(?string $seshisLieuInfoCollectNom): self
    {
        $this->seshisLieuInfoCollectNom = $seshisLieuInfoCollectNom;

        return $this;
    }

    public function getSeshisLieuInfoCollectAdr1(): ?string
    {
        return $this->seshisLieuInfoCollectAdr1;
    }

    public function setSeshisLieuInfoCollectAdr1(?string $seshisLieuInfoCollectAdr1): self
    {
        $this->seshisLieuInfoCollectAdr1 = $seshisLieuInfoCollectAdr1;

        return $this;
    }

    public function getSeshisLieuInfoCollectAdr2(): ?string
    {
        return $this->seshisLieuInfoCollectAdr2;
    }

    public function setSeshisLieuInfoCollectAdr2(?string $seshisLieuInfoCollectAdr2): self
    {
        $this->seshisLieuInfoCollectAdr2 = $seshisLieuInfoCollectAdr2;

        return $this;
    }

    public function getSeshisLieuInfoCollectCp(): ?string
    {
        return $this->seshisLieuInfoCollectCp;
    }

    public function setSeshisLieuInfoCollectCp(?string $seshisLieuInfoCollectCp): self
    {
        $this->seshisLieuInfoCollectCp = $seshisLieuInfoCollectCp;

        return $this;
    }

    public function getSeshisLieuInfoCollectPrec(): ?string
    {
        return $this->seshisLieuInfoCollectPrec;
    }

    public function setSeshisLieuInfoCollectPrec(?string $seshisLieuInfoCollectPrec): self
    {
        $this->seshisLieuInfoCollectPrec = $seshisLieuInfoCollectPrec;

        return $this;
    }

    public function getSeshisLieuInfoCollectVille(): ?string
    {
        return $this->seshisLieuInfoCollectVille;
    }

    public function setSeshisLieuInfoCollectVille(?string $seshisLieuInfoCollectVille): self
    {
        $this->seshisLieuInfoCollectVille = $seshisLieuInfoCollectVille;

        return $this;
    }

    public function getSeshisCodeEligibilite(): ?string
    {
        return $this->seshisCodeEligibilite;
    }

    public function setSeshisCodeEligibilite(?string $seshisCodeEligibilite): self
    {
        $this->seshisCodeEligibilite = $seshisCodeEligibilite;

        return $this;
    }

    public function getSeshisDateDebutEnvoiCarif(): ?\DateTimeInterface
    {
        return $this->seshisDateDebutEnvoiCarif;
    }

    public function setSeshisDateDebutEnvoiCarif(?\DateTimeInterface $seshisDateDebutEnvoiCarif): self
    {
        $this->seshisDateDebutEnvoiCarif = $seshisDateDebutEnvoiCarif;

        return $this;
    }

    public function getSeshisFlgSolde(): ?string
    {
        return $this->seshisFlgSolde;
    }

    public function setSeshisFlgSolde(?string $seshisFlgSolde): self
    {
        $this->seshisFlgSolde = $seshisFlgSolde;

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

    public function getSeshisRythmeHebdoH(): ?string
    {
        return $this->seshisRythmeHebdoH;
    }

    public function setSeshisRythmeHebdoH(?string $seshisRythmeHebdoH): self
    {
        $this->seshisRythmeHebdoH = $seshisRythmeHebdoH;

        return $this;
    }

    public function getSeshis(): ?SessionFormationHisto
    {
        return $this->seshis;
    }

    public function setSeshis(?SessionFormationHisto $seshis): self
    {
        $this->seshis = $seshis;

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

    public function getRefIdNatureAgrement(): ?Referentiel
    {
        return $this->refIdNatureAgrement;
    }

    public function setRefIdNatureAgrement(?Referentiel $refIdNatureAgrement): self
    {
        $this->refIdNatureAgrement = $refIdNatureAgrement;

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

    public function getSeshisAvisNiv1(): ?Referentiel
    {
        return $this->seshisAvisNiv1;
    }

    public function setSeshisAvisNiv1(?Referentiel $seshisAvisNiv1): self
    {
        $this->seshisAvisNiv1 = $seshisAvisNiv1;

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

    /**
     * @return Collection|SessionFinanceurEnvoi[]
     */
    public function getSessionFinanceurEnvoi()
    {
        return $this->sessionFinanceurEnvoi;
    }



    public function addSessionFinanceurEnvoi(SessionFinanceurEnvoi $sessionFinanceurEnvoi): self
    {
        if (!$this->sessionFinanceurEnvoi->contains($sessionFinanceurEnvoi)) {
            $this->sessionFinanceurEnvoi[] = $sessionFinanceurEnvoi;
            $sessionFinanceurEnvoi->setSeshis($this);
        }
        return $this;
    }

    public function removeSessionFinanceurEnvoi(SessionFinanceurEnvoi $sessionFinanceurEnvoi): self
    {
        if ($this->sessionFinanceurEnvoi->contains($sessionFinanceurEnvoi)) {
            $this->sessionFinanceurEnvoi->removeElement($sessionFinanceurEnvoi);
            if ($sessionFinanceurEnvoi->getSeshis() === $this) {
                $sessionFinanceurEnvoi->setSeshis(null);
            }
        }
        return $this;
    }
}
