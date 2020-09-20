<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SessionStagiaire
 *
 * @ORM\Table(name="session_stagiaire", uniqueConstraints={@ORM\UniqueConstraint(name="session_stagiaire_pk", columns={"sestg_id"})}, indexes={@ORM\Index(name="sestg_ref_type_off_sortie_fk", columns={"ref_type_offre_sortie_form"}), @ORM\Index(name="sestg_type_dossier_fk", columns={"ref_id_type_dossier"}), @ORM\Index(name="sestg_pr_suivi_speci_fk", columns={"ref_id_pr_suivi_speci"}), @ORM\Index(name="sestg_resultat_concours_fk", columns={"ref_id_resultat_concours"}), @ORM\Index(name="sestg_uti_der_modif_fk", columns={"sestg_utim"}), @ORM\Index(name="stg_sestg_fk", columns={"stg_id"}), @ORM\Index(name="sestg_det_sit_ap_6_mois_fk", columns={"ref_id_det_sit_ap_6_mois"}), @ORM\Index(name="sestg_validation_fk", columns={"res_id"}), @ORM\Index(name="sestg_niveau_entree_fk", columns={"ref_id_niveau_entree"}), @ORM\Index(name="sestg_ref_motif_sortie_fk", columns={"ref_id_motif_sortie"}), @ORM\Index(name="sestg_resultat_fk", columns={"ref_id_resultat"}), @ORM\Index(name="sestg_statut_sur_marche_fk", columns={"ref_id_statut_sur_marche"}), @ORM\Index(name="sestg_cat_prof_fk", columns={"ref_id_cat_prof"}), @ORM\Index(name="sestg_motifsortie_fk", columns={"ref_id_motifsortie"}), @ORM\Index(name="sestg_sit_ap_6_mois_fk", columns={"ref_id_sit_ap_6_mois"}), @ORM\Index(name="sestg_uti_create_fk", columns={"sestg_utic"}), @ORM\Index(name="sess_sestg_fk", columns={"sess_id"}), @ORM\Index(name="sestg_partenaire_orient_fk", columns={"ref_id_partenaire_orient"}), @ORM\Index(name="sestg_detail_situation_fk", columns={"ref_id_detail_situation"}), @ORM\Index(name="sestg_ref_situation_sortie_fk", columns={"ref_id_situation_sortie"}), @ORM\Index(name="sestg_gfe_insertion_fk", columns={"ref_id_gfe_insertion"}), @ORM\Index(name="parc_sestg_fk", columns={"parc_id"}), @ORM\Index(name="sestg_pr_ctr_speci_fk", columns={"ref_id_pr_ctr_speci"}), @ORM\Index(name="sestg_sttentree_fk", columns={"sestg_sttentree"}), @ORM\Index(name="sestg_sttentree2_fk", columns={"ref_id_sttentree"}), @ORM\Index(name="ref_formation_ncif", columns={"ref_formation_non_certif"}), @ORM\Index(name="sestg_rythme_parcours_fk", columns={"ref_id_rythme"}), @ORM\Index(name="sestg_ref_rqth_fk", columns={"ref_id_pr_rqth_fk"}), @ORM\Index(name="mot_id_fk", columns={"mot_id"}), @ORM\Index(name="sestg_orgaremu_fk", columns={"sestg_orgaremu"}), @ORM\Index(name="sestg_type_remuneration_fk", columns={"ref_id_type_remuneration"})})
 * @ORM\Entity
 */
class SessionStagiaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="sestg_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="session_stagiaire_sestg_id_seq", allocationSize=1, initialValue=1)
     */
    private $sestgId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sestg_date_entree_relle", type="date", nullable=true)
     */
    private $sestgDateEntreeRelle;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sestg_date_de_sortie_reelle", type="date", nullable=true)
     */
    private $sestgDateDeSortieReelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_flg_sortie_anticipee", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestgFlgSortieAnticipee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_acm_reference", type="string", length=50, nullable=true)
     */
    private $sestgAcmReference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_nb_heure_cent_previ", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $sestgNbHeureCentPrevi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_nb_heure_ent_previ", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $sestgNbHeureEntPrevi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_flg_mobiliser_cpf", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestgFlgMobiliserCpf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_code_eligibilite", type="string", length=10, nullable=true)
     */
    private $sestgCodeEligibilite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_num_decision_cpf", type="string", length=10, nullable=true)
     */
    private $sestgNumDecisionCpf;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sestg_dt_decision_cpf", type="datetime", nullable=true)
     */
    private $sestgDtDecisionCpf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_nb_h_mobilisables", type="decimal", precision=5, scale=0, nullable=true)
     */
    private $sestgNbHMobilisables;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_flg_suppr", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestgFlgSuppr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_motif_non_entree", type="string", length=500, nullable=true)
     */
    private $sestgMotifNonEntree;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sestg_date_entree_previ", type="datetime", nullable=true)
     */
    private $sestgDateEntreePrevi;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sestg_date_sortie_previ", type="datetime", nullable=true)
     */
    private $sestgDateSortiePrevi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_num_nir", type="string", length=13, nullable=true)
     */
    private $sestgNumNir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_cle_nir", type="string", length=2, nullable=true)
     */
    private $sestgCleNir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_flg_envoi_cpf", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestgFlgEnvoiCpf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_code_retour_cpf", type="string", length=50, nullable=true)
     */
    private $sestgCodeRetourCpf;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sestg_date_envoi_cpf", type="datetime", nullable=true)
     */
    private $sestgDateEnvoiCpf;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sestg_date_der_envoi_cpf", type="datetime", nullable=true)
     */
    private $sestgDateDerEnvoiCpf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_message_retour_cpf", type="string", length=500, nullable=true)
     */
    private $sestgMessageRetourCpf;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sestg_datec", type="datetime", nullable=true)
     */
    private $sestgDatec;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sestg_datem", type="datetime", nullable=true)
     */
    private $sestgDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_flg_entree_parc_ind", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestgFlgEntreeParcInd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_flg_clea", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestgFlgClea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_pr_precision_rqth", type="string", length=2000, nullable=true)
     */
    private $sestgPrPrecisionRqth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_type_formation", type="string", length=400, nullable=true)
     */
    private $sestgTypeFormation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_annee_real_formation", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $sestgAnneeRealFormation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_type_validation", type="string", length=400, nullable=true)
     */
    private $sestgTypeValidation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_pr_rech_emp_dep_mois", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $sestgPrRechEmpDepMois;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_flg_emploi_avenir", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestgFlgEmploiAvenir;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sestg_dt_inscription_pe", type="datetime", nullable=true)
     */
    private $sestgDtInscriptionPe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_identifiant_pe", type="string", length=20, nullable=true)
     */
    private $sestgIdentifiantPe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_pr_prescripteur", type="string", length=100, nullable=true)
     */
    private $sestgPrPrescripteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_type_prescripteur", type="string", length=100, nullable=true)
     */
    private $sestgTypePrescripteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_pr_objectifs", type="string", length=2000, nullable=true)
     */
    private $sestgPrObjectifs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_pr_projets", type="string", length=2000, nullable=true)
     */
    private $sestgPrProjets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_flg_presc_cadre_cared", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestgFlgPrescCadreCared;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_num_conv_cared", type="string", length=10, nullable=true)
     */
    private $sestgNumConvCared;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_flg_formation_vae", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestgFlgFormationVae;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_remunere", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestgRemunere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_num_asp", type="string", length=10, nullable=true)
     */
    private $sestgNumAsp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_detail_emploi", type="string", length=500, nullable=true)
     */
    private $sestgDetailEmploi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_concours_presente", type="string", length=500, nullable=true)
     */
    private $sestgConcoursPresente;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_flg_sit_mieux_ap_6_m", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestgFlgSitMieuxAp6M;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_obs_sit_ap_6_mois", type="string", length=2000, nullable=true)
     */
    private $sestgObsSitAp6Mois;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_nivform", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $sestgNivform;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_flg_present_concours", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestgFlgPresentConcours;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_flg_offre_sortie_form", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestgFlgOffreSortieForm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sestg_dt_deb_remu", type="datetime", nullable=true)
     */
    private $sestgDtDebRemu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_flg_jamais_entre", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestgFlgJamaisEntre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_flg_envoi_remu", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestgFlgEnvoiRemu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_id_silo_agora", type="string", length=20, nullable=true)
     */
    private $sestgIdSiloAgora;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_id_dossier_agora", type="string", length=20, nullable=true)
     */
    private $sestgIdDossierAgora;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_flg_envoi_agora", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestgFlgEnvoiAgora;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sestg_dt_envoi_agora", type="datetime", nullable=true)
     */
    private $sestgDtEnvoiAgora;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_msg_erreur_agora", type="string", length=2000, nullable=true)
     */
    private $sestgMsgErreurAgora;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestg_nb_heure_hebdo", type="decimal", precision=2, scale=0, nullable=true)
     */
    private $sestgNbHeureHebdo;

    /**
     * @var \Motifsortie
     *
     * @ORM\ManyToOne(targetEntity="Motifsortie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mot_id", referencedColumnName="mot_id")
     * })
     */
    private $mot;

    /**
     * @var \Parcours
     *
     * @ORM\ManyToOne(targetEntity="Parcours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parc_id", referencedColumnName="parc_id")
     * })
     */
    private $parc;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_formation_non_certif", referencedColumnName="ref_id")
     * })
     */
    private $refFormationNonCertif;

    /**
     * @var \SessionFormation
     *
     * @ORM\ManyToOne(targetEntity="SessionFormation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sess_id", referencedColumnName="sess_id")
     * })
     */
    private $sess;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_cat_prof", referencedColumnName="ref_id")
     * })
     */
    private $refIdCatProf;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_detail_situation", referencedColumnName="ref_id")
     * })
     */
    private $refIdDetailSituation;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_det_sit_ap_6_mois", referencedColumnName="ref_id")
     * })
     */
    private $refIdDetSitAp6Mois;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_gfe_insertion", referencedColumnName="ref_id")
     * })
     */
    private $refIdGfeInsertion;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_motifsortie", referencedColumnName="ref_id")
     * })
     */
    private $refIdMotifsortie;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_niveau_entree", referencedColumnName="ref_id")
     * })
     */
    private $refIdNiveauEntree;

    /**
     * @var \OrgRemu
     *
     * @ORM\ManyToOne(targetEntity="OrgRemu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sestg_orgaremu", referencedColumnName="orr_id")
     * })
     */
    private $sestgOrgaremu;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_partenaire_orient", referencedColumnName="ref_id")
     * })
     */
    private $refIdPartenaireOrient;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_pr_ctr_speci", referencedColumnName="ref_id")
     * })
     */
    private $refIdPrCtrSpeci;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_pr_suivi_speci", referencedColumnName="ref_id")
     * })
     */
    private $refIdPrSuiviSpeci;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_motif_sortie", referencedColumnName="ref_id")
     * })
     */
    private $refIdMotifSortie;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_pr_rqth_fk", referencedColumnName="ref_id")
     * })
     */
    private $refIdPrRqthFk;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_situation_sortie", referencedColumnName="ref_id")
     * })
     */
    private $refIdSituationSortie;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_type_offre_sortie_form", referencedColumnName="ref_id")
     * })
     */
    private $refTypeOffreSortieForm;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_resultat", referencedColumnName="ref_id")
     * })
     */
    private $refIdResultat;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_resultat_concours", referencedColumnName="ref_id")
     * })
     */
    private $refIdResultatConcours;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_rythme", referencedColumnName="ref_id")
     * })
     */
    private $refIdRythme;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_sit_ap_6_mois", referencedColumnName="ref_id")
     * })
     */
    private $refIdSitAp6Mois;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_statut_sur_marche", referencedColumnName="ref_id")
     * })
     */
    private $refIdStatutSurMarche;

    /**
     * @var \Statut
     *
     * @ORM\ManyToOne(targetEntity="Statut")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sestg_sttentree", referencedColumnName="stt_id")
     * })
     */
    private $sestgSttentree;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_sttentree", referencedColumnName="ref_id")
     * })
     */
    private $refIdSttentree;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_type_dossier", referencedColumnName="ref_id")
     * })
     */
    private $refIdTypeDossier;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_type_remuneration", referencedColumnName="ref_id")
     * })
     */
    private $refIdTypeRemuneration;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sestg_utic", referencedColumnName="uti_id")
     * })
     */
    private $sestgUtic;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sestg_utim", referencedColumnName="uti_id")
     * })
     */
    private $sestgUtim;

    /**
     * @var \Resultat
     *
     * @ORM\ManyToOne(targetEntity="Resultat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="res_id", referencedColumnName="res_id")
     * })
     */
    private $res;

    /**
     * @var \Stagiaire
     *
     * @ORM\ManyToOne(targetEntity="Stagiaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stg_id", referencedColumnName="stg_id")
     * })
     */
    private $stg;

    public function getSestgId(): ?int
    {
        return $this->sestgId;
    }

    public function getSestgDateEntreeRelle(): ?\DateTimeInterface
    {
        return $this->sestgDateEntreeRelle;
    }

    public function setSestgDateEntreeRelle(?\DateTimeInterface $sestgDateEntreeRelle): self
    {
        $this->sestgDateEntreeRelle = $sestgDateEntreeRelle;

        return $this;
    }

    public function getSestgDateDeSortieReelle(): ?\DateTimeInterface
    {
        return $this->sestgDateDeSortieReelle;
    }

    public function setSestgDateDeSortieReelle(?\DateTimeInterface $sestgDateDeSortieReelle): self
    {
        $this->sestgDateDeSortieReelle = $sestgDateDeSortieReelle;

        return $this;
    }

    public function getSestgFlgSortieAnticipee(): ?string
    {
        return $this->sestgFlgSortieAnticipee;
    }

    public function setSestgFlgSortieAnticipee(?string $sestgFlgSortieAnticipee): self
    {
        $this->sestgFlgSortieAnticipee = $sestgFlgSortieAnticipee;

        return $this;
    }

    public function getSestgAcmReference(): ?string
    {
        return $this->sestgAcmReference;
    }

    public function setSestgAcmReference(?string $sestgAcmReference): self
    {
        $this->sestgAcmReference = $sestgAcmReference;

        return $this;
    }

    public function getSestgNbHeureCentPrevi(): ?string
    {
        return $this->sestgNbHeureCentPrevi;
    }

    public function setSestgNbHeureCentPrevi(?string $sestgNbHeureCentPrevi): self
    {
        $this->sestgNbHeureCentPrevi = $sestgNbHeureCentPrevi;

        return $this;
    }

    public function getSestgNbHeureEntPrevi(): ?string
    {
        return $this->sestgNbHeureEntPrevi;
    }

    public function setSestgNbHeureEntPrevi(?string $sestgNbHeureEntPrevi): self
    {
        $this->sestgNbHeureEntPrevi = $sestgNbHeureEntPrevi;

        return $this;
    }

    public function getSestgFlgMobiliserCpf(): ?string
    {
        return $this->sestgFlgMobiliserCpf;
    }

    public function setSestgFlgMobiliserCpf(?string $sestgFlgMobiliserCpf): self
    {
        $this->sestgFlgMobiliserCpf = $sestgFlgMobiliserCpf;

        return $this;
    }

    public function getSestgCodeEligibilite(): ?string
    {
        return $this->sestgCodeEligibilite;
    }

    public function setSestgCodeEligibilite(?string $sestgCodeEligibilite): self
    {
        $this->sestgCodeEligibilite = $sestgCodeEligibilite;

        return $this;
    }

    public function getSestgNumDecisionCpf(): ?string
    {
        return $this->sestgNumDecisionCpf;
    }

    public function setSestgNumDecisionCpf(?string $sestgNumDecisionCpf): self
    {
        $this->sestgNumDecisionCpf = $sestgNumDecisionCpf;

        return $this;
    }

    public function getSestgDtDecisionCpf(): ?\DateTimeInterface
    {
        return $this->sestgDtDecisionCpf;
    }

    public function setSestgDtDecisionCpf(?\DateTimeInterface $sestgDtDecisionCpf): self
    {
        $this->sestgDtDecisionCpf = $sestgDtDecisionCpf;

        return $this;
    }

    public function getSestgNbHMobilisables(): ?string
    {
        return $this->sestgNbHMobilisables;
    }

    public function setSestgNbHMobilisables(?string $sestgNbHMobilisables): self
    {
        $this->sestgNbHMobilisables = $sestgNbHMobilisables;

        return $this;
    }

    public function getSestgFlgSuppr(): ?string
    {
        return $this->sestgFlgSuppr;
    }

    public function setSestgFlgSuppr(?string $sestgFlgSuppr): self
    {
        $this->sestgFlgSuppr = $sestgFlgSuppr;

        return $this;
    }

    public function getSestgMotifNonEntree(): ?string
    {
        return $this->sestgMotifNonEntree;
    }

    public function setSestgMotifNonEntree(?string $sestgMotifNonEntree): self
    {
        $this->sestgMotifNonEntree = $sestgMotifNonEntree;

        return $this;
    }

    public function getSestgDateEntreePrevi(): ?\DateTimeInterface
    {
        return $this->sestgDateEntreePrevi;
    }

    public function setSestgDateEntreePrevi(?\DateTimeInterface $sestgDateEntreePrevi): self
    {
        $this->sestgDateEntreePrevi = $sestgDateEntreePrevi;

        return $this;
    }

    public function getSestgDateSortiePrevi(): ?\DateTimeInterface
    {
        return $this->sestgDateSortiePrevi;
    }

    public function setSestgDateSortiePrevi(?\DateTimeInterface $sestgDateSortiePrevi): self
    {
        $this->sestgDateSortiePrevi = $sestgDateSortiePrevi;

        return $this;
    }

    public function getSestgNumNir(): ?string
    {
        return $this->sestgNumNir;
    }

    public function setSestgNumNir(?string $sestgNumNir): self
    {
        $this->sestgNumNir = $sestgNumNir;

        return $this;
    }

    public function getSestgCleNir(): ?string
    {
        return $this->sestgCleNir;
    }

    public function setSestgCleNir(?string $sestgCleNir): self
    {
        $this->sestgCleNir = $sestgCleNir;

        return $this;
    }

    public function getSestgFlgEnvoiCpf(): ?string
    {
        return $this->sestgFlgEnvoiCpf;
    }

    public function setSestgFlgEnvoiCpf(?string $sestgFlgEnvoiCpf): self
    {
        $this->sestgFlgEnvoiCpf = $sestgFlgEnvoiCpf;

        return $this;
    }

    public function getSestgCodeRetourCpf(): ?string
    {
        return $this->sestgCodeRetourCpf;
    }

    public function setSestgCodeRetourCpf(?string $sestgCodeRetourCpf): self
    {
        $this->sestgCodeRetourCpf = $sestgCodeRetourCpf;

        return $this;
    }

    public function getSestgDateEnvoiCpf(): ?\DateTimeInterface
    {
        return $this->sestgDateEnvoiCpf;
    }

    public function setSestgDateEnvoiCpf(?\DateTimeInterface $sestgDateEnvoiCpf): self
    {
        $this->sestgDateEnvoiCpf = $sestgDateEnvoiCpf;

        return $this;
    }

    public function getSestgDateDerEnvoiCpf(): ?\DateTimeInterface
    {
        return $this->sestgDateDerEnvoiCpf;
    }

    public function setSestgDateDerEnvoiCpf(?\DateTimeInterface $sestgDateDerEnvoiCpf): self
    {
        $this->sestgDateDerEnvoiCpf = $sestgDateDerEnvoiCpf;

        return $this;
    }

    public function getSestgMessageRetourCpf(): ?string
    {
        return $this->sestgMessageRetourCpf;
    }

    public function setSestgMessageRetourCpf(?string $sestgMessageRetourCpf): self
    {
        $this->sestgMessageRetourCpf = $sestgMessageRetourCpf;

        return $this;
    }

    public function getSestgDatec(): ?\DateTimeInterface
    {
        return $this->sestgDatec;
    }

    public function setSestgDatec(?\DateTimeInterface $sestgDatec): self
    {
        $this->sestgDatec = $sestgDatec;

        return $this;
    }

    public function getSestgDatem(): ?\DateTimeInterface
    {
        return $this->sestgDatem;
    }

    public function setSestgDatem(?\DateTimeInterface $sestgDatem): self
    {
        $this->sestgDatem = $sestgDatem;

        return $this;
    }

    public function getSestgFlgEntreeParcInd(): ?string
    {
        return $this->sestgFlgEntreeParcInd;
    }

    public function setSestgFlgEntreeParcInd(?string $sestgFlgEntreeParcInd): self
    {
        $this->sestgFlgEntreeParcInd = $sestgFlgEntreeParcInd;

        return $this;
    }

    public function getSestgFlgClea(): ?string
    {
        return $this->sestgFlgClea;
    }

    public function setSestgFlgClea(?string $sestgFlgClea): self
    {
        $this->sestgFlgClea = $sestgFlgClea;

        return $this;
    }

    public function getSestgPrPrecisionRqth(): ?string
    {
        return $this->sestgPrPrecisionRqth;
    }

    public function setSestgPrPrecisionRqth(?string $sestgPrPrecisionRqth): self
    {
        $this->sestgPrPrecisionRqth = $sestgPrPrecisionRqth;

        return $this;
    }

    public function getSestgTypeFormation(): ?string
    {
        return $this->sestgTypeFormation;
    }

    public function setSestgTypeFormation(?string $sestgTypeFormation): self
    {
        $this->sestgTypeFormation = $sestgTypeFormation;

        return $this;
    }

    public function getSestgAnneeRealFormation(): ?string
    {
        return $this->sestgAnneeRealFormation;
    }

    public function setSestgAnneeRealFormation(?string $sestgAnneeRealFormation): self
    {
        $this->sestgAnneeRealFormation = $sestgAnneeRealFormation;

        return $this;
    }

    public function getSestgTypeValidation(): ?string
    {
        return $this->sestgTypeValidation;
    }

    public function setSestgTypeValidation(?string $sestgTypeValidation): self
    {
        $this->sestgTypeValidation = $sestgTypeValidation;

        return $this;
    }

    public function getSestgPrRechEmpDepMois(): ?string
    {
        return $this->sestgPrRechEmpDepMois;
    }

    public function setSestgPrRechEmpDepMois(?string $sestgPrRechEmpDepMois): self
    {
        $this->sestgPrRechEmpDepMois = $sestgPrRechEmpDepMois;

        return $this;
    }

    public function getSestgFlgEmploiAvenir(): ?string
    {
        return $this->sestgFlgEmploiAvenir;
    }

    public function setSestgFlgEmploiAvenir(?string $sestgFlgEmploiAvenir): self
    {
        $this->sestgFlgEmploiAvenir = $sestgFlgEmploiAvenir;

        return $this;
    }

    public function getSestgDtInscriptionPe(): ?\DateTimeInterface
    {
        return $this->sestgDtInscriptionPe;
    }

    public function setSestgDtInscriptionPe(?\DateTimeInterface $sestgDtInscriptionPe): self
    {
        $this->sestgDtInscriptionPe = $sestgDtInscriptionPe;

        return $this;
    }

    public function getSestgIdentifiantPe(): ?string
    {
        return $this->sestgIdentifiantPe;
    }

    public function setSestgIdentifiantPe(?string $sestgIdentifiantPe): self
    {
        $this->sestgIdentifiantPe = $sestgIdentifiantPe;

        return $this;
    }

    public function getSestgPrPrescripteur(): ?string
    {
        return $this->sestgPrPrescripteur;
    }

    public function setSestgPrPrescripteur(?string $sestgPrPrescripteur): self
    {
        $this->sestgPrPrescripteur = $sestgPrPrescripteur;

        return $this;
    }

    public function getSestgTypePrescripteur(): ?string
    {
        return $this->sestgTypePrescripteur;
    }

    public function setSestgTypePrescripteur(?string $sestgTypePrescripteur): self
    {
        $this->sestgTypePrescripteur = $sestgTypePrescripteur;

        return $this;
    }

    public function getSestgPrObjectifs(): ?string
    {
        return $this->sestgPrObjectifs;
    }

    public function setSestgPrObjectifs(?string $sestgPrObjectifs): self
    {
        $this->sestgPrObjectifs = $sestgPrObjectifs;

        return $this;
    }

    public function getSestgPrProjets(): ?string
    {
        return $this->sestgPrProjets;
    }

    public function setSestgPrProjets(?string $sestgPrProjets): self
    {
        $this->sestgPrProjets = $sestgPrProjets;

        return $this;
    }

    public function getSestgFlgPrescCadreCared(): ?string
    {
        return $this->sestgFlgPrescCadreCared;
    }

    public function setSestgFlgPrescCadreCared(?string $sestgFlgPrescCadreCared): self
    {
        $this->sestgFlgPrescCadreCared = $sestgFlgPrescCadreCared;

        return $this;
    }

    public function getSestgNumConvCared(): ?string
    {
        return $this->sestgNumConvCared;
    }

    public function setSestgNumConvCared(?string $sestgNumConvCared): self
    {
        $this->sestgNumConvCared = $sestgNumConvCared;

        return $this;
    }

    public function getSestgFlgFormationVae(): ?string
    {
        return $this->sestgFlgFormationVae;
    }

    public function setSestgFlgFormationVae(?string $sestgFlgFormationVae): self
    {
        $this->sestgFlgFormationVae = $sestgFlgFormationVae;

        return $this;
    }

    public function getSestgRemunere(): ?string
    {
        return $this->sestgRemunere;
    }

    public function setSestgRemunere(?string $sestgRemunere): self
    {
        $this->sestgRemunere = $sestgRemunere;

        return $this;
    }

    public function getSestgNumAsp(): ?string
    {
        return $this->sestgNumAsp;
    }

    public function setSestgNumAsp(?string $sestgNumAsp): self
    {
        $this->sestgNumAsp = $sestgNumAsp;

        return $this;
    }

    public function getSestgDetailEmploi(): ?string
    {
        return $this->sestgDetailEmploi;
    }

    public function setSestgDetailEmploi(?string $sestgDetailEmploi): self
    {
        $this->sestgDetailEmploi = $sestgDetailEmploi;

        return $this;
    }

    public function getSestgConcoursPresente(): ?string
    {
        return $this->sestgConcoursPresente;
    }

    public function setSestgConcoursPresente(?string $sestgConcoursPresente): self
    {
        $this->sestgConcoursPresente = $sestgConcoursPresente;

        return $this;
    }

    public function getSestgFlgSitMieuxAp6M(): ?string
    {
        return $this->sestgFlgSitMieuxAp6M;
    }

    public function setSestgFlgSitMieuxAp6M(?string $sestgFlgSitMieuxAp6M): self
    {
        $this->sestgFlgSitMieuxAp6M = $sestgFlgSitMieuxAp6M;

        return $this;
    }

    public function getSestgObsSitAp6Mois(): ?string
    {
        return $this->sestgObsSitAp6Mois;
    }

    public function setSestgObsSitAp6Mois(?string $sestgObsSitAp6Mois): self
    {
        $this->sestgObsSitAp6Mois = $sestgObsSitAp6Mois;

        return $this;
    }

    public function getSestgNivform(): ?string
    {
        return $this->sestgNivform;
    }

    public function setSestgNivform(?string $sestgNivform): self
    {
        $this->sestgNivform = $sestgNivform;

        return $this;
    }

    public function getSestgFlgPresentConcours(): ?string
    {
        return $this->sestgFlgPresentConcours;
    }

    public function setSestgFlgPresentConcours(?string $sestgFlgPresentConcours): self
    {
        $this->sestgFlgPresentConcours = $sestgFlgPresentConcours;

        return $this;
    }

    public function getSestgFlgOffreSortieForm(): ?string
    {
        return $this->sestgFlgOffreSortieForm;
    }

    public function setSestgFlgOffreSortieForm(?string $sestgFlgOffreSortieForm): self
    {
        $this->sestgFlgOffreSortieForm = $sestgFlgOffreSortieForm;

        return $this;
    }

    public function getSestgDtDebRemu(): ?\DateTimeInterface
    {
        return $this->sestgDtDebRemu;
    }

    public function setSestgDtDebRemu(?\DateTimeInterface $sestgDtDebRemu): self
    {
        $this->sestgDtDebRemu = $sestgDtDebRemu;

        return $this;
    }

    public function getSestgFlgJamaisEntre(): ?string
    {
        return $this->sestgFlgJamaisEntre;
    }

    public function setSestgFlgJamaisEntre(?string $sestgFlgJamaisEntre): self
    {
        $this->sestgFlgJamaisEntre = $sestgFlgJamaisEntre;

        return $this;
    }

    public function getSestgFlgEnvoiRemu(): ?string
    {
        return $this->sestgFlgEnvoiRemu;
    }

    public function setSestgFlgEnvoiRemu(?string $sestgFlgEnvoiRemu): self
    {
        $this->sestgFlgEnvoiRemu = $sestgFlgEnvoiRemu;

        return $this;
    }

    public function getSestgIdSiloAgora(): ?string
    {
        return $this->sestgIdSiloAgora;
    }

    public function setSestgIdSiloAgora(?string $sestgIdSiloAgora): self
    {
        $this->sestgIdSiloAgora = $sestgIdSiloAgora;

        return $this;
    }

    public function getSestgIdDossierAgora(): ?string
    {
        return $this->sestgIdDossierAgora;
    }

    public function setSestgIdDossierAgora(?string $sestgIdDossierAgora): self
    {
        $this->sestgIdDossierAgora = $sestgIdDossierAgora;

        return $this;
    }

    public function getSestgFlgEnvoiAgora(): ?string
    {
        return $this->sestgFlgEnvoiAgora;
    }

    public function setSestgFlgEnvoiAgora(?string $sestgFlgEnvoiAgora): self
    {
        $this->sestgFlgEnvoiAgora = $sestgFlgEnvoiAgora;

        return $this;
    }

    public function getSestgDtEnvoiAgora(): ?\DateTimeInterface
    {
        return $this->sestgDtEnvoiAgora;
    }

    public function setSestgDtEnvoiAgora(?\DateTimeInterface $sestgDtEnvoiAgora): self
    {
        $this->sestgDtEnvoiAgora = $sestgDtEnvoiAgora;

        return $this;
    }

    public function getSestgMsgErreurAgora(): ?string
    {
        return $this->sestgMsgErreurAgora;
    }

    public function setSestgMsgErreurAgora(?string $sestgMsgErreurAgora): self
    {
        $this->sestgMsgErreurAgora = $sestgMsgErreurAgora;

        return $this;
    }

    public function getSestgNbHeureHebdo(): ?string
    {
        return $this->sestgNbHeureHebdo;
    }

    public function setSestgNbHeureHebdo(?string $sestgNbHeureHebdo): self
    {
        $this->sestgNbHeureHebdo = $sestgNbHeureHebdo;

        return $this;
    }

    public function getMot(): ?Motifsortie
    {
        return $this->mot;
    }

    public function setMot(?Motifsortie $mot): self
    {
        $this->mot = $mot;

        return $this;
    }

    public function getParc(): ?Parcours
    {
        return $this->parc;
    }

    public function setParc(?Parcours $parc): self
    {
        $this->parc = $parc;

        return $this;
    }

    public function getRefFormationNonCertif(): ?Referentiel
    {
        return $this->refFormationNonCertif;
    }

    public function setRefFormationNonCertif(?Referentiel $refFormationNonCertif): self
    {
        $this->refFormationNonCertif = $refFormationNonCertif;

        return $this;
    }

    public function getSess(): ?SessionFormation
    {
        return $this->sess;
    }

    public function setSess(?SessionFormation $sess): self
    {
        $this->sess = $sess;

        return $this;
    }

    public function getRefIdCatProf(): ?Referentiel
    {
        return $this->refIdCatProf;
    }

    public function setRefIdCatProf(?Referentiel $refIdCatProf): self
    {
        $this->refIdCatProf = $refIdCatProf;

        return $this;
    }

    public function getRefIdDetailSituation(): ?Referentiel
    {
        return $this->refIdDetailSituation;
    }

    public function setRefIdDetailSituation(?Referentiel $refIdDetailSituation): self
    {
        $this->refIdDetailSituation = $refIdDetailSituation;

        return $this;
    }

    public function getRefIdDetSitAp6Mois(): ?Referentiel
    {
        return $this->refIdDetSitAp6Mois;
    }

    public function setRefIdDetSitAp6Mois(?Referentiel $refIdDetSitAp6Mois): self
    {
        $this->refIdDetSitAp6Mois = $refIdDetSitAp6Mois;

        return $this;
    }

    public function getRefIdGfeInsertion(): ?Referentiel
    {
        return $this->refIdGfeInsertion;
    }

    public function setRefIdGfeInsertion(?Referentiel $refIdGfeInsertion): self
    {
        $this->refIdGfeInsertion = $refIdGfeInsertion;

        return $this;
    }

    public function getRefIdMotifsortie(): ?Referentiel
    {
        return $this->refIdMotifsortie;
    }

    public function setRefIdMotifsortie(?Referentiel $refIdMotifsortie): self
    {
        $this->refIdMotifsortie = $refIdMotifsortie;

        return $this;
    }

    public function getRefIdNiveauEntree(): ?Referentiel
    {
        return $this->refIdNiveauEntree;
    }

    public function setRefIdNiveauEntree(?Referentiel $refIdNiveauEntree): self
    {
        $this->refIdNiveauEntree = $refIdNiveauEntree;

        return $this;
    }

    public function getSestgOrgaremu(): ?OrgRemu
    {
        return $this->sestgOrgaremu;
    }

    public function setSestgOrgaremu(?OrgRemu $sestgOrgaremu): self
    {
        $this->sestgOrgaremu = $sestgOrgaremu;

        return $this;
    }

    public function getRefIdPartenaireOrient(): ?Referentiel
    {
        return $this->refIdPartenaireOrient;
    }

    public function setRefIdPartenaireOrient(?Referentiel $refIdPartenaireOrient): self
    {
        $this->refIdPartenaireOrient = $refIdPartenaireOrient;

        return $this;
    }

    public function getRefIdPrCtrSpeci(): ?Referentiel
    {
        return $this->refIdPrCtrSpeci;
    }

    public function setRefIdPrCtrSpeci(?Referentiel $refIdPrCtrSpeci): self
    {
        $this->refIdPrCtrSpeci = $refIdPrCtrSpeci;

        return $this;
    }

    public function getRefIdPrSuiviSpeci(): ?Referentiel
    {
        return $this->refIdPrSuiviSpeci;
    }

    public function setRefIdPrSuiviSpeci(?Referentiel $refIdPrSuiviSpeci): self
    {
        $this->refIdPrSuiviSpeci = $refIdPrSuiviSpeci;

        return $this;
    }

    public function getRefIdPrRqthFk(): ?Referentiel
    {
        return $this->refIdPrRqthFk;
    }

    public function setRefIdPrRqthFk(?Referentiel $refIdPrRqthFk): self
    {
        $this->refIdPrRqthFk = $refIdPrRqthFk;

        return $this;
    }

    public function getRefIdSituationSortie(): ?Referentiel
    {
        return $this->refIdSituationSortie;
    }

    public function setRefIdSituationSortie(?Referentiel $refIdSituationSortie): self
    {
        $this->refIdSituationSortie = $refIdSituationSortie;

        return $this;
    }

    public function getRefTypeOffreSortieForm(): ?Referentiel
    {
        return $this->refTypeOffreSortieForm;
    }

    public function setRefTypeOffreSortieForm(?Referentiel $refTypeOffreSortieForm): self
    {
        $this->refTypeOffreSortieForm = $refTypeOffreSortieForm;

        return $this;
    }

    public function getRefIdResultat(): ?Referentiel
    {
        return $this->refIdResultat;
    }

    public function setRefIdResultat(?Referentiel $refIdResultat): self
    {
        $this->refIdResultat = $refIdResultat;

        return $this;
    }

    public function getRefIdResultatConcours(): ?Referentiel
    {
        return $this->refIdResultatConcours;
    }

    public function setRefIdResultatConcours(?Referentiel $refIdResultatConcours): self
    {
        $this->refIdResultatConcours = $refIdResultatConcours;

        return $this;
    }

    public function getRefIdRythme(): ?Referentiel
    {
        return $this->refIdRythme;
    }

    public function setRefIdRythme(?Referentiel $refIdRythme): self
    {
        $this->refIdRythme = $refIdRythme;

        return $this;
    }

    public function getRefIdSitAp6Mois(): ?Referentiel
    {
        return $this->refIdSitAp6Mois;
    }

    public function setRefIdSitAp6Mois(?Referentiel $refIdSitAp6Mois): self
    {
        $this->refIdSitAp6Mois = $refIdSitAp6Mois;

        return $this;
    }

    public function getRefIdStatutSurMarche(): ?Referentiel
    {
        return $this->refIdStatutSurMarche;
    }

    public function setRefIdStatutSurMarche(?Referentiel $refIdStatutSurMarche): self
    {
        $this->refIdStatutSurMarche = $refIdStatutSurMarche;

        return $this;
    }

    public function getSestgSttentree(): ?Statut
    {
        return $this->sestgSttentree;
    }

    public function setSestgSttentree(?Statut $sestgSttentree): self
    {
        $this->sestgSttentree = $sestgSttentree;

        return $this;
    }

    public function getRefIdSttentree(): ?Referentiel
    {
        return $this->refIdSttentree;
    }

    public function setRefIdSttentree(?Referentiel $refIdSttentree): self
    {
        $this->refIdSttentree = $refIdSttentree;

        return $this;
    }

    public function getRefIdTypeDossier(): ?Referentiel
    {
        return $this->refIdTypeDossier;
    }

    public function setRefIdTypeDossier(?Referentiel $refIdTypeDossier): self
    {
        $this->refIdTypeDossier = $refIdTypeDossier;

        return $this;
    }

    public function getRefIdTypeRemuneration(): ?Referentiel
    {
        return $this->refIdTypeRemuneration;
    }

    public function setRefIdTypeRemuneration(?Referentiel $refIdTypeRemuneration): self
    {
        $this->refIdTypeRemuneration = $refIdTypeRemuneration;

        return $this;
    }

    public function getSestgUtic(): ?Utilisateur
    {
        return $this->sestgUtic;
    }

    public function setSestgUtic(?Utilisateur $sestgUtic): self
    {
        $this->sestgUtic = $sestgUtic;

        return $this;
    }

    public function getSestgUtim(): ?Utilisateur
    {
        return $this->sestgUtim;
    }

    public function setSestgUtim(?Utilisateur $sestgUtim): self
    {
        $this->sestgUtim = $sestgUtim;

        return $this;
    }

    public function getRes(): ?Resultat
    {
        return $this->res;
    }

    public function setRes(?Resultat $res): self
    {
        $this->res = $res;

        return $this;
    }

    public function getStg(): ?Stagiaire
    {
        return $this->stg;
    }

    public function setStg(?Stagiaire $stg): self
    {
        $this->stg = $stg;

        return $this;
    }


}
