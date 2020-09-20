<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SessionStagiaireHisto
 *
 * @ORM\Table(name="session_stagiaire_histo", uniqueConstraints={@ORM\UniqueConstraint(name="session_stagiaire_histo_pk", columns={"sestghis_id"})}, indexes={@ORM\Index(name="sestghis_motifsortie_fk", columns={"ref_id_motifsortie"}), @ORM\Index(name="sestghis_orgaremu_fk", columns={"sestghis_orgaremu"}), @ORM\Index(name="sestghis_ref_rqth_fk", columns={"ref_id_pr_rqth_fk"}), @ORM\Index(name="sestghis_sttentree_fk", columns={"sestghis_sttentree"}), @ORM\Index(name="sestghis_detail_situation_fk", columns={"ref_id_detail_situation"}), @ORM\Index(name="sestghis_resultat_concours_fk", columns={"ref_id_resultat_concours"}), @ORM\Index(name="sestghis_motif_sortie_fk", columns={"ref_id_motif_sortie"}), @ORM\Index(name="sestghis_type_off_sortie_fk", columns={"ref_type_offre_sortie_form"}), @ORM\Index(name="sestghis_partenaire_orient_fk", columns={"ref_id_partenaire_orient"}), @ORM\Index(name="sestghis_rythme_parcours_fk", columns={"ref_id_rythme"}), @ORM\Index(name="sestghis_sit_ap_6_mois_fk", columns={"ref_id_sit_ap_6_mois"}), @ORM\Index(name="sestghis_form_non_certif_fk", columns={"ref_formation_non_certif"}), @ORM\Index(name="sestghis_situation_sortie_fk", columns={"ref_id_situation_sortie"}), @ORM\Index(name="sestghis_type_dossier_fk", columns={"ref_id_type_dossier"}), @ORM\Index(name="sestghis_statut_sur_marche_fk", columns={"ref_id_statut_sur_marche"}), @ORM\Index(name="sestghis_det_sit_ap_6_mois_fk", columns={"ref_id_det_sit_ap_6_mois"}), @ORM\Index(name="sestg_histo_motif_fk", columns={"mot_id"}), @ORM\Index(name="sestghis_niveau_entree_fk", columns={"ref_id_niveau_entree"}), @ORM\Index(name="sestghis_resultat_fk", columns={"ref_id_resultat"}), @ORM\Index(name="sestghis_pr_suivi_speci_fk", columns={"ref_id_pr_suivi_speci"}), @ORM\Index(name="sestghis_sttentree2_fk", columns={"ref_id_sttentree"}), @ORM\Index(name="sestghis_gfe_insertion_fk", columns={"ref_id_gfe_insertion"}), @ORM\Index(name="sestghis_cat_prof_fk", columns={"ref_id_cat_prof"}), @ORM\Index(name="sestg_sestghis_fk", columns={"sestg_id"}), @ORM\Index(name="sestghis_utilisateur_fk", columns={"uti_id"}), @ORM\Index(name="sestghis_pr_ctr_speci_fk", columns={"ref_id_pr_ctr_speci"}), @ORM\Index(name="sestghis_validation_fk", columns={"res_id"}), @ORM\Index(name="sestghis_type_remuneration_fk", columns={"ref_id_type_remuneration"})})
 * @ORM\Entity
 */
class SessionStagiaireHisto
{
    /**
     * @var string
     *
     * @ORM\Column(name="sestghis_id", type="decimal", precision=8, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="session_stagiaire_histo_sestghis_id_seq", allocationSize=1, initialValue=1)
     */
    private $sestghisId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sestghis_date_entree_relle", type="date", nullable=true)
     */
    private $sestghisDateEntreeRelle;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sestghis_date_de_sortie_reelle", type="date", nullable=true)
     */
    private $sestghisDateDeSortieReelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_flg_sortie_anticipee", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestghisFlgSortieAnticipee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_acm_reference", type="string", length=50, nullable=true)
     */
    private $sestghisAcmReference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_nb_heure_cent_previ", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $sestghisNbHeureCentPrevi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_nb_heure_ent_previ", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $sestghisNbHeureEntPrevi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_flg_mobiliser_cpf", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestghisFlgMobiliserCpf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_code_eligibilite", type="string", length=10, nullable=true)
     */
    private $sestghisCodeEligibilite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_num_decision_cpf", type="string", length=10, nullable=true)
     */
    private $sestghisNumDecisionCpf;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sestghis_dt_decision_cpf", type="date", nullable=true)
     */
    private $sestghisDtDecisionCpf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_nb_h_mobilisables", type="decimal", precision=5, scale=0, nullable=true)
     */
    private $sestghisNbHMobilisables;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sestghis_date_histo", type="date", nullable=true)
     */
    private $sestghisDateHisto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_commentaire", type="string", length=500, nullable=true)
     */
    private $sestghisCommentaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_motif_non_entree", type="string", length=500, nullable=true)
     */
    private $sestghisMotifNonEntree;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sestghis_date_entree_previ", type="datetime", nullable=true)
     */
    private $sestghisDateEntreePrevi;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sestghis_date_sortie_previ", type="datetime", nullable=true)
     */
    private $sestghisDateSortiePrevi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_num_nir", type="string", length=13, nullable=true)
     */
    private $sestghisNumNir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_cle_nir", type="string", length=2, nullable=true)
     */
    private $sestghisCleNir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_flg_envoi_cpf", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestghisFlgEnvoiCpf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_code_retour_cpf", type="string", length=50, nullable=true)
     */
    private $sestghisCodeRetourCpf;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sestghis_date_envoi_cpf", type="datetime", nullable=true)
     */
    private $sestghisDateEnvoiCpf;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sestghis_date_der_envoi_cpf", type="datetime", nullable=true)
     */
    private $sestghisDateDerEnvoiCpf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_message_retour_cpf", type="string", length=500, nullable=true)
     */
    private $sestghisMessageRetourCpf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_flg_entree_parc_ind", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestghisFlgEntreeParcInd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_flg_clea", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestghisFlgClea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_pr_precision_rqth", type="string", length=2000, nullable=true)
     */
    private $sestghisPrPrecisionRqth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_type_formation", type="string", length=400, nullable=true)
     */
    private $sestghisTypeFormation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_annee_real_formation", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $sestghisAnneeRealFormation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_type_validation", type="string", length=400, nullable=true)
     */
    private $sestghisTypeValidation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_pr_rech_emp_dep_mois", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $sestghisPrRechEmpDepMois;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_flg_emploi_avenir", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestghisFlgEmploiAvenir;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sestghis_dt_inscription_pe", type="datetime", nullable=true)
     */
    private $sestghisDtInscriptionPe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_identifiant_pe", type="string", length=20, nullable=true)
     */
    private $sestghisIdentifiantPe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_pr_prescripteur", type="string", length=100, nullable=true)
     */
    private $sestghisPrPrescripteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_type_prescripteur", type="string", length=100, nullable=true)
     */
    private $sestghisTypePrescripteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_pr_objectifs", type="string", length=2000, nullable=true)
     */
    private $sestghisPrObjectifs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_pr_projets", type="string", length=2000, nullable=true)
     */
    private $sestghisPrProjets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_flg_presc_cadre_cared", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestghisFlgPrescCadreCared;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_num_conv_cared", type="string", length=10, nullable=true)
     */
    private $sestghisNumConvCared;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_flg_formation_vae", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestghisFlgFormationVae;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_remunere", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestghisRemunere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_num_asp", type="string", length=10, nullable=true)
     */
    private $sestghisNumAsp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_detail_emploi", type="string", length=500, nullable=true)
     */
    private $sestghisDetailEmploi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_concours_presente", type="string", length=500, nullable=true)
     */
    private $sestghisConcoursPresente;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_flg_sit_mieux_ap_6_m", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestghisFlgSitMieuxAp6M;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_obs_sit_ap_6_mois", type="string", length=2000, nullable=true)
     */
    private $sestghisObsSitAp6Mois;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_nivform", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $sestghisNivform;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_flg_present_concours", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestghisFlgPresentConcours;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_flg_offre_sortie_form", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestghisFlgOffreSortieForm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sestghis_dt_deb_remu", type="datetime", nullable=true)
     */
    private $sestghisDtDebRemu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_flg_jamais_entre", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $sestghisFlgJamaisEntre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestghis_nb_heure_hebdo", type="decimal", precision=2, scale=0, nullable=true)
     */
    private $sestghisNbHeureHebdo;

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
     *   @ORM\JoinColumn(name="ref_formation_non_certif", referencedColumnName="ref_id")
     * })
     */
    private $refFormationNonCertif;

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
     *   @ORM\JoinColumn(name="ref_id_motif_sortie", referencedColumnName="ref_id")
     * })
     */
    private $refIdMotifSortie;

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
     *   @ORM\JoinColumn(name="sestghis_orgaremu", referencedColumnName="orr_id")
     * })
     */
    private $sestghisOrgaremu;

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
     *   @ORM\JoinColumn(name="ref_id_pr_rqth_fk", referencedColumnName="ref_id")
     * })
     */
    private $refIdPrRqthFk;

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
     *   @ORM\JoinColumn(name="ref_id_situation_sortie", referencedColumnName="ref_id")
     * })
     */
    private $refIdSituationSortie;

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
     *   @ORM\JoinColumn(name="sestghis_sttentree", referencedColumnName="stt_id")
     * })
     */
    private $sestghisSttentree;

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
     *   @ORM\JoinColumn(name="ref_type_offre_sortie_form", referencedColumnName="ref_id")
     * })
     */
    private $refTypeOffreSortieForm;

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
     *   @ORM\JoinColumn(name="uti_id", referencedColumnName="uti_id")
     * })
     */
    private $uti;

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
     * @var \Motifsortie
     *
     * @ORM\ManyToOne(targetEntity="Motifsortie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mot_id", referencedColumnName="mot_id")
     * })
     */
    private $mot;

    /**
     * @var \SessionStagiaire
     *
     * @ORM\ManyToOne(targetEntity="SessionStagiaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sestg_id", referencedColumnName="sestg_id")
     * })
     */
    private $sestg;

    public function getSestghisId(): ?string
    {
        return $this->sestghisId;
    }

    public function getSestghisDateEntreeRelle(): ?\DateTimeInterface
    {
        return $this->sestghisDateEntreeRelle;
    }

    public function setSestghisDateEntreeRelle(?\DateTimeInterface $sestghisDateEntreeRelle): self
    {
        $this->sestghisDateEntreeRelle = $sestghisDateEntreeRelle;

        return $this;
    }

    public function getSestghisDateDeSortieReelle(): ?\DateTimeInterface
    {
        return $this->sestghisDateDeSortieReelle;
    }

    public function setSestghisDateDeSortieReelle(?\DateTimeInterface $sestghisDateDeSortieReelle): self
    {
        $this->sestghisDateDeSortieReelle = $sestghisDateDeSortieReelle;

        return $this;
    }

    public function getSestghisFlgSortieAnticipee(): ?string
    {
        return $this->sestghisFlgSortieAnticipee;
    }

    public function setSestghisFlgSortieAnticipee(?string $sestghisFlgSortieAnticipee): self
    {
        $this->sestghisFlgSortieAnticipee = $sestghisFlgSortieAnticipee;

        return $this;
    }

    public function getSestghisAcmReference(): ?string
    {
        return $this->sestghisAcmReference;
    }

    public function setSestghisAcmReference(?string $sestghisAcmReference): self
    {
        $this->sestghisAcmReference = $sestghisAcmReference;

        return $this;
    }

    public function getSestghisNbHeureCentPrevi(): ?string
    {
        return $this->sestghisNbHeureCentPrevi;
    }

    public function setSestghisNbHeureCentPrevi(?string $sestghisNbHeureCentPrevi): self
    {
        $this->sestghisNbHeureCentPrevi = $sestghisNbHeureCentPrevi;

        return $this;
    }

    public function getSestghisNbHeureEntPrevi(): ?string
    {
        return $this->sestghisNbHeureEntPrevi;
    }

    public function setSestghisNbHeureEntPrevi(?string $sestghisNbHeureEntPrevi): self
    {
        $this->sestghisNbHeureEntPrevi = $sestghisNbHeureEntPrevi;

        return $this;
    }

    public function getSestghisFlgMobiliserCpf(): ?string
    {
        return $this->sestghisFlgMobiliserCpf;
    }

    public function setSestghisFlgMobiliserCpf(?string $sestghisFlgMobiliserCpf): self
    {
        $this->sestghisFlgMobiliserCpf = $sestghisFlgMobiliserCpf;

        return $this;
    }

    public function getSestghisCodeEligibilite(): ?string
    {
        return $this->sestghisCodeEligibilite;
    }

    public function setSestghisCodeEligibilite(?string $sestghisCodeEligibilite): self
    {
        $this->sestghisCodeEligibilite = $sestghisCodeEligibilite;

        return $this;
    }

    public function getSestghisNumDecisionCpf(): ?string
    {
        return $this->sestghisNumDecisionCpf;
    }

    public function setSestghisNumDecisionCpf(?string $sestghisNumDecisionCpf): self
    {
        $this->sestghisNumDecisionCpf = $sestghisNumDecisionCpf;

        return $this;
    }

    public function getSestghisDtDecisionCpf(): ?\DateTimeInterface
    {
        return $this->sestghisDtDecisionCpf;
    }

    public function setSestghisDtDecisionCpf(?\DateTimeInterface $sestghisDtDecisionCpf): self
    {
        $this->sestghisDtDecisionCpf = $sestghisDtDecisionCpf;

        return $this;
    }

    public function getSestghisNbHMobilisables(): ?string
    {
        return $this->sestghisNbHMobilisables;
    }

    public function setSestghisNbHMobilisables(?string $sestghisNbHMobilisables): self
    {
        $this->sestghisNbHMobilisables = $sestghisNbHMobilisables;

        return $this;
    }

    public function getSestghisDateHisto(): ?\DateTimeInterface
    {
        return $this->sestghisDateHisto;
    }

    public function setSestghisDateHisto(?\DateTimeInterface $sestghisDateHisto): self
    {
        $this->sestghisDateHisto = $sestghisDateHisto;

        return $this;
    }

    public function getSestghisCommentaire(): ?string
    {
        return $this->sestghisCommentaire;
    }

    public function setSestghisCommentaire(?string $sestghisCommentaire): self
    {
        $this->sestghisCommentaire = $sestghisCommentaire;

        return $this;
    }

    public function getSestghisMotifNonEntree(): ?string
    {
        return $this->sestghisMotifNonEntree;
    }

    public function setSestghisMotifNonEntree(?string $sestghisMotifNonEntree): self
    {
        $this->sestghisMotifNonEntree = $sestghisMotifNonEntree;

        return $this;
    }

    public function getSestghisDateEntreePrevi(): ?\DateTimeInterface
    {
        return $this->sestghisDateEntreePrevi;
    }

    public function setSestghisDateEntreePrevi(?\DateTimeInterface $sestghisDateEntreePrevi): self
    {
        $this->sestghisDateEntreePrevi = $sestghisDateEntreePrevi;

        return $this;
    }

    public function getSestghisDateSortiePrevi(): ?\DateTimeInterface
    {
        return $this->sestghisDateSortiePrevi;
    }

    public function setSestghisDateSortiePrevi(?\DateTimeInterface $sestghisDateSortiePrevi): self
    {
        $this->sestghisDateSortiePrevi = $sestghisDateSortiePrevi;

        return $this;
    }

    public function getSestghisNumNir(): ?string
    {
        return $this->sestghisNumNir;
    }

    public function setSestghisNumNir(?string $sestghisNumNir): self
    {
        $this->sestghisNumNir = $sestghisNumNir;

        return $this;
    }

    public function getSestghisCleNir(): ?string
    {
        return $this->sestghisCleNir;
    }

    public function setSestghisCleNir(?string $sestghisCleNir): self
    {
        $this->sestghisCleNir = $sestghisCleNir;

        return $this;
    }

    public function getSestghisFlgEnvoiCpf(): ?string
    {
        return $this->sestghisFlgEnvoiCpf;
    }

    public function setSestghisFlgEnvoiCpf(?string $sestghisFlgEnvoiCpf): self
    {
        $this->sestghisFlgEnvoiCpf = $sestghisFlgEnvoiCpf;

        return $this;
    }

    public function getSestghisCodeRetourCpf(): ?string
    {
        return $this->sestghisCodeRetourCpf;
    }

    public function setSestghisCodeRetourCpf(?string $sestghisCodeRetourCpf): self
    {
        $this->sestghisCodeRetourCpf = $sestghisCodeRetourCpf;

        return $this;
    }

    public function getSestghisDateEnvoiCpf(): ?\DateTimeInterface
    {
        return $this->sestghisDateEnvoiCpf;
    }

    public function setSestghisDateEnvoiCpf(?\DateTimeInterface $sestghisDateEnvoiCpf): self
    {
        $this->sestghisDateEnvoiCpf = $sestghisDateEnvoiCpf;

        return $this;
    }

    public function getSestghisDateDerEnvoiCpf(): ?\DateTimeInterface
    {
        return $this->sestghisDateDerEnvoiCpf;
    }

    public function setSestghisDateDerEnvoiCpf(?\DateTimeInterface $sestghisDateDerEnvoiCpf): self
    {
        $this->sestghisDateDerEnvoiCpf = $sestghisDateDerEnvoiCpf;

        return $this;
    }

    public function getSestghisMessageRetourCpf(): ?string
    {
        return $this->sestghisMessageRetourCpf;
    }

    public function setSestghisMessageRetourCpf(?string $sestghisMessageRetourCpf): self
    {
        $this->sestghisMessageRetourCpf = $sestghisMessageRetourCpf;

        return $this;
    }

    public function getSestghisFlgEntreeParcInd(): ?string
    {
        return $this->sestghisFlgEntreeParcInd;
    }

    public function setSestghisFlgEntreeParcInd(?string $sestghisFlgEntreeParcInd): self
    {
        $this->sestghisFlgEntreeParcInd = $sestghisFlgEntreeParcInd;

        return $this;
    }

    public function getSestghisFlgClea(): ?string
    {
        return $this->sestghisFlgClea;
    }

    public function setSestghisFlgClea(?string $sestghisFlgClea): self
    {
        $this->sestghisFlgClea = $sestghisFlgClea;

        return $this;
    }

    public function getSestghisPrPrecisionRqth(): ?string
    {
        return $this->sestghisPrPrecisionRqth;
    }

    public function setSestghisPrPrecisionRqth(?string $sestghisPrPrecisionRqth): self
    {
        $this->sestghisPrPrecisionRqth = $sestghisPrPrecisionRqth;

        return $this;
    }

    public function getSestghisTypeFormation(): ?string
    {
        return $this->sestghisTypeFormation;
    }

    public function setSestghisTypeFormation(?string $sestghisTypeFormation): self
    {
        $this->sestghisTypeFormation = $sestghisTypeFormation;

        return $this;
    }

    public function getSestghisAnneeRealFormation(): ?string
    {
        return $this->sestghisAnneeRealFormation;
    }

    public function setSestghisAnneeRealFormation(?string $sestghisAnneeRealFormation): self
    {
        $this->sestghisAnneeRealFormation = $sestghisAnneeRealFormation;

        return $this;
    }

    public function getSestghisTypeValidation(): ?string
    {
        return $this->sestghisTypeValidation;
    }

    public function setSestghisTypeValidation(?string $sestghisTypeValidation): self
    {
        $this->sestghisTypeValidation = $sestghisTypeValidation;

        return $this;
    }

    public function getSestghisPrRechEmpDepMois(): ?string
    {
        return $this->sestghisPrRechEmpDepMois;
    }

    public function setSestghisPrRechEmpDepMois(?string $sestghisPrRechEmpDepMois): self
    {
        $this->sestghisPrRechEmpDepMois = $sestghisPrRechEmpDepMois;

        return $this;
    }

    public function getSestghisFlgEmploiAvenir(): ?string
    {
        return $this->sestghisFlgEmploiAvenir;
    }

    public function setSestghisFlgEmploiAvenir(?string $sestghisFlgEmploiAvenir): self
    {
        $this->sestghisFlgEmploiAvenir = $sestghisFlgEmploiAvenir;

        return $this;
    }

    public function getSestghisDtInscriptionPe(): ?\DateTimeInterface
    {
        return $this->sestghisDtInscriptionPe;
    }

    public function setSestghisDtInscriptionPe(?\DateTimeInterface $sestghisDtInscriptionPe): self
    {
        $this->sestghisDtInscriptionPe = $sestghisDtInscriptionPe;

        return $this;
    }

    public function getSestghisIdentifiantPe(): ?string
    {
        return $this->sestghisIdentifiantPe;
    }

    public function setSestghisIdentifiantPe(?string $sestghisIdentifiantPe): self
    {
        $this->sestghisIdentifiantPe = $sestghisIdentifiantPe;

        return $this;
    }

    public function getSestghisPrPrescripteur(): ?string
    {
        return $this->sestghisPrPrescripteur;
    }

    public function setSestghisPrPrescripteur(?string $sestghisPrPrescripteur): self
    {
        $this->sestghisPrPrescripteur = $sestghisPrPrescripteur;

        return $this;
    }

    public function getSestghisTypePrescripteur(): ?string
    {
        return $this->sestghisTypePrescripteur;
    }

    public function setSestghisTypePrescripteur(?string $sestghisTypePrescripteur): self
    {
        $this->sestghisTypePrescripteur = $sestghisTypePrescripteur;

        return $this;
    }

    public function getSestghisPrObjectifs(): ?string
    {
        return $this->sestghisPrObjectifs;
    }

    public function setSestghisPrObjectifs(?string $sestghisPrObjectifs): self
    {
        $this->sestghisPrObjectifs = $sestghisPrObjectifs;

        return $this;
    }

    public function getSestghisPrProjets(): ?string
    {
        return $this->sestghisPrProjets;
    }

    public function setSestghisPrProjets(?string $sestghisPrProjets): self
    {
        $this->sestghisPrProjets = $sestghisPrProjets;

        return $this;
    }

    public function getSestghisFlgPrescCadreCared(): ?string
    {
        return $this->sestghisFlgPrescCadreCared;
    }

    public function setSestghisFlgPrescCadreCared(?string $sestghisFlgPrescCadreCared): self
    {
        $this->sestghisFlgPrescCadreCared = $sestghisFlgPrescCadreCared;

        return $this;
    }

    public function getSestghisNumConvCared(): ?string
    {
        return $this->sestghisNumConvCared;
    }

    public function setSestghisNumConvCared(?string $sestghisNumConvCared): self
    {
        $this->sestghisNumConvCared = $sestghisNumConvCared;

        return $this;
    }

    public function getSestghisFlgFormationVae(): ?string
    {
        return $this->sestghisFlgFormationVae;
    }

    public function setSestghisFlgFormationVae(?string $sestghisFlgFormationVae): self
    {
        $this->sestghisFlgFormationVae = $sestghisFlgFormationVae;

        return $this;
    }

    public function getSestghisRemunere(): ?string
    {
        return $this->sestghisRemunere;
    }

    public function setSestghisRemunere(?string $sestghisRemunere): self
    {
        $this->sestghisRemunere = $sestghisRemunere;

        return $this;
    }

    public function getSestghisNumAsp(): ?string
    {
        return $this->sestghisNumAsp;
    }

    public function setSestghisNumAsp(?string $sestghisNumAsp): self
    {
        $this->sestghisNumAsp = $sestghisNumAsp;

        return $this;
    }

    public function getSestghisDetailEmploi(): ?string
    {
        return $this->sestghisDetailEmploi;
    }

    public function setSestghisDetailEmploi(?string $sestghisDetailEmploi): self
    {
        $this->sestghisDetailEmploi = $sestghisDetailEmploi;

        return $this;
    }

    public function getSestghisConcoursPresente(): ?string
    {
        return $this->sestghisConcoursPresente;
    }

    public function setSestghisConcoursPresente(?string $sestghisConcoursPresente): self
    {
        $this->sestghisConcoursPresente = $sestghisConcoursPresente;

        return $this;
    }

    public function getSestghisFlgSitMieuxAp6M(): ?string
    {
        return $this->sestghisFlgSitMieuxAp6M;
    }

    public function setSestghisFlgSitMieuxAp6M(?string $sestghisFlgSitMieuxAp6M): self
    {
        $this->sestghisFlgSitMieuxAp6M = $sestghisFlgSitMieuxAp6M;

        return $this;
    }

    public function getSestghisObsSitAp6Mois(): ?string
    {
        return $this->sestghisObsSitAp6Mois;
    }

    public function setSestghisObsSitAp6Mois(?string $sestghisObsSitAp6Mois): self
    {
        $this->sestghisObsSitAp6Mois = $sestghisObsSitAp6Mois;

        return $this;
    }

    public function getSestghisNivform(): ?string
    {
        return $this->sestghisNivform;
    }

    public function setSestghisNivform(?string $sestghisNivform): self
    {
        $this->sestghisNivform = $sestghisNivform;

        return $this;
    }

    public function getSestghisFlgPresentConcours(): ?string
    {
        return $this->sestghisFlgPresentConcours;
    }

    public function setSestghisFlgPresentConcours(?string $sestghisFlgPresentConcours): self
    {
        $this->sestghisFlgPresentConcours = $sestghisFlgPresentConcours;

        return $this;
    }

    public function getSestghisFlgOffreSortieForm(): ?string
    {
        return $this->sestghisFlgOffreSortieForm;
    }

    public function setSestghisFlgOffreSortieForm(?string $sestghisFlgOffreSortieForm): self
    {
        $this->sestghisFlgOffreSortieForm = $sestghisFlgOffreSortieForm;

        return $this;
    }

    public function getSestghisDtDebRemu(): ?\DateTimeInterface
    {
        return $this->sestghisDtDebRemu;
    }

    public function setSestghisDtDebRemu(?\DateTimeInterface $sestghisDtDebRemu): self
    {
        $this->sestghisDtDebRemu = $sestghisDtDebRemu;

        return $this;
    }

    public function getSestghisFlgJamaisEntre(): ?string
    {
        return $this->sestghisFlgJamaisEntre;
    }

    public function setSestghisFlgJamaisEntre(?string $sestghisFlgJamaisEntre): self
    {
        $this->sestghisFlgJamaisEntre = $sestghisFlgJamaisEntre;

        return $this;
    }

    public function getSestghisNbHeureHebdo(): ?string
    {
        return $this->sestghisNbHeureHebdo;
    }

    public function setSestghisNbHeureHebdo(?string $sestghisNbHeureHebdo): self
    {
        $this->sestghisNbHeureHebdo = $sestghisNbHeureHebdo;

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

    public function getRefFormationNonCertif(): ?Referentiel
    {
        return $this->refFormationNonCertif;
    }

    public function setRefFormationNonCertif(?Referentiel $refFormationNonCertif): self
    {
        $this->refFormationNonCertif = $refFormationNonCertif;

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

    public function getSestghisOrgaremu(): ?OrgRemu
    {
        return $this->sestghisOrgaremu;
    }

    public function setSestghisOrgaremu(?OrgRemu $sestghisOrgaremu): self
    {
        $this->sestghisOrgaremu = $sestghisOrgaremu;

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

    public function getRefIdSituationSortie(): ?Referentiel
    {
        return $this->refIdSituationSortie;
    }

    public function setRefIdSituationSortie(?Referentiel $refIdSituationSortie): self
    {
        $this->refIdSituationSortie = $refIdSituationSortie;

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

    public function getSestghisSttentree(): ?Statut
    {
        return $this->sestghisSttentree;
    }

    public function setSestghisSttentree(?Statut $sestghisSttentree): self
    {
        $this->sestghisSttentree = $sestghisSttentree;

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

    public function getRefTypeOffreSortieForm(): ?Referentiel
    {
        return $this->refTypeOffreSortieForm;
    }

    public function setRefTypeOffreSortieForm(?Referentiel $refTypeOffreSortieForm): self
    {
        $this->refTypeOffreSortieForm = $refTypeOffreSortieForm;

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

    public function getUti(): ?Utilisateur
    {
        return $this->uti;
    }

    public function setUti(?Utilisateur $uti): self
    {
        $this->uti = $uti;

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

    public function getMot(): ?Motifsortie
    {
        return $this->mot;
    }

    public function setMot(?Motifsortie $mot): self
    {
        $this->mot = $mot;

        return $this;
    }

    public function getSestg(): ?SessionStagiaire
    {
        return $this->sestg;
    }

    public function setSestg(?SessionStagiaire $sestg): self
    {
        $this->sestg = $sestg;

        return $this;
    }


}
