<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stagiaire
 *
 * @ORM\Table(name="stagiaire", uniqueConstraints={@ORM\UniqueConstraint(name="stagiaire_pk", columns={"stg_id"})}, indexes={@ORM\Index(name="stg_ref_domaine_emploi_vise_fk", columns={"ref_id_domaine_emploi_vise"}), @ORM\Index(name="stagiaire_ccif", columns={"stg_civilite"}), @ORM\Index(name="stagiaire_rrif", columns={"stg_resultat"}), @ORM\Index(name="stg_ref_type_offre_form_fk", columns={"ref_type_offre_sortie_form"}), @ORM\Index(name="stg_ref_pr_der_dip_obtenu_fk", columns={"ref_id_pr_der_dip_obtenu"}), @ORM\Index(name="stagiaire_ssif", columns={"stg_sttsortie"}), @ORM\Index(name="stg_ref_partenaire_orient_fk", columns={"ref_id_partenaire_orient"}), @ORM\Index(name="stg_ref_statut_fse_fk", columns={"ref_id_staut_fse"}), @ORM\Index(name="stg_ref_situation_issue_act_fk", columns={"ref_id_situation_issue"}), @ORM\Index(name="stagiaire_oroif", columns={"stg_orgaremu"}), @ORM\Index(name="adr_stg_fk", columns={"adr_id"}), @ORM\Index(name="stg_ref_pr_ctr_speci_fk", columns={"ref_id_pr_ctr_speci"}), @ORM\Index(name="stg_ref_pr_rqth_fk", columns={"ref_id_pr_rqth_fk"}), @ORM\Index(name="stagiaire_nnif", columns={"stg_nivform"}), @ORM\Index(name="stg_ref_cat_prof_fk", columns={"ref_id_cat_prof"}), @ORM\Index(name="stg_ref_pr_sit_rsa_fk", columns={"ref_id_pr_sit_rsa"}), @ORM\Index(name="stagiaire_ooif", columns={"stg_offre"}), @ORM\Index(name="stg_ref_pr_suivi_speci_fk", columns={"ref_id_pr_suivi_speci"}), @ORM\Index(name="stg_ind_fk", columns={"ind_id"}), @ORM\Index(name="stg_ref_nationalite_fk", columns={"ref_id_nationalite"}), @ORM\Index(name="stg_ref_lien_objectif_fk", columns={"ref_id_lien_objectif_init"}), @ORM\Index(name="stg_ref_pr_statut_fk", columns={"ref_id_pr_statut"}), @ORM\Index(name="stg_ref_rythme_fk", columns={"ref_id_rythme"}), @ORM\Index(name="stg_ref_pr_indem_are_fk", columns={"ref_id_pr_indem_are"}), @ORM\Index(name="stg_ref_resultat_concours_fk", columns={"ref_id_resultat_concours"}), @ORM\Index(name="stg_motif_2_situation_fk", columns={"ref_id_motif_2_situation"}), @ORM\Index(name="stagiaire8ssif2", columns={"stg_sttentree"}), @ORM\Index(name="stg_motif_1_fk", columns={"ref_id_motif_1"}), @ORM\Index(name="stg_ref_det_sit_ap_6_mois_fk", columns={"ref_id_det_sit_ap_6_mois"}), @ORM\Index(name="stg_ref_sorti_dispo_region_fk", columns={"ref_id_sorti_dispo_region"}), @ORM\Index(name="stg_sttsortie_fk", columns={"ref_id_sttsortie"}), @ORM\Index(name="stg_ref_statut_sur_marche_fk", columns={"ref_id_statut_sur_marche"}), @ORM\Index(name="stg_ref_typ_contr_issue_for_fk", columns={"ref_id_type_contrat_issue"}), @ORM\Index(name="stg_ref_type_remu_fk", columns={"ref_id_type_remuneration"}), @ORM\Index(name="stg_ref_degre_maitrise_fk", columns={"ref_id_degre_maitrise"}), @ORM\Index(name="stg_ref_sit_ap_6_mois_fk", columns={"ref_id_sit_ap_6_mois"}), @ORM\Index(name="stg_motif_3_detail_fk", columns={"ref_id_motif_3_detail"}), @ORM\Index(name="stg_ref_pr_niv_for_ent_fk", columns={"ref_id_pr_niv_for_ent"}), @ORM\Index(name="stagiaire_mmif", columns={"stg_motifsortie"}), @ORM\Index(name="stg_ref_gfe_insertion_fk", columns={"ref_id_gfe_insertion"}), @ORM\Index(name="stg_ref_propos_fin_stg_fk", columns={"ref_proposition_issu_stag"})})
 * @ORM\Entity
 */
class Stagiaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="stg_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="stagiaire_stg_id_seq", allocationSize=1, initialValue=1)
     */
    private $stgId;

    /**
     * @var string
     *
     * @ORM\Column(name="stg_code", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $stgCode;

    /**
     * @var string
     *
     * @ORM\Column(name="stg_nom", type="string", length=100, nullable=false)
     */
    private $stgNom;

    /**
     * @var string
     *
     * @ORM\Column(name="stg_prenom", type="string", length=50, nullable=false)
     */
    private $stgPrenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_sexe", type="string", length=1, nullable=true, options={"comment"="(Feminin / Masculin)"})
     */
    private $stgSexe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="stg_datenais", type="datetime", nullable=false)
     */
    private $stgDatenais;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="stg_dateentree", type="datetime", nullable=true)
     */
    private $stgDateentree;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="stg_datesortie", type="datetime", nullable=true)
     */
    private $stgDatesortie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_remunere", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $stgRemunere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_cnasea", type="string", length=10, nullable=true)
     */
    private $stgCnasea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_numvoie", type="string", length=7, nullable=true)
     */
    private $stgNumvoie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_bister", type="string", length=1, nullable=true)
     */
    private $stgBister;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_nomvoie", type="string", length=50, nullable=true)
     */
    private $stgNomvoie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_adr1", type="string", length=100, nullable=true)
     */
    private $stgAdr1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_adr2", type="string", length=100, nullable=true)
     */
    private $stgAdr2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_cpostal", type="string", length=5, nullable=true)
     */
    private $stgCpostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_ville", type="string", length=32, nullable=true)
     */
    private $stgVille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_pays", type="string", length=38, nullable=true)
     */
    private $stgPays;

    /**
     * @var string
     *
     * @ORM\Column(name="stg_eligiblefse", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $stgEligiblefse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_nbmstt", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $stgNbmstt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_nbmexper", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $stgNbmexper;

    /**
     * @var string
     *
     * @ORM\Column(name="stg_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $stgEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="stg_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $stgAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="stg_datec", type="datetime", nullable=false)
     */
    private $stgDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $stgAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="stg_datem", type="datetime", nullable=true)
     */
    private $stgDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $stgAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="stg_datea", type="datetime", nullable=true)
     */
    private $stgDatea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_anpe", type="string", length=20, nullable=true)
     */
    private $stgAnpe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_numvoiee", type="string", length=7, nullable=true)
     */
    private $stgNumvoiee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_bistere", type="string", length=1, nullable=true)
     */
    private $stgBistere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_nomvoiee", type="string", length=50, nullable=true)
     */
    private $stgNomvoiee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_adr1e", type="string", length=100, nullable=true)
     */
    private $stgAdr1e;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_adr2e", type="string", length=100, nullable=true)
     */
    private $stgAdr2e;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_cpostale", type="string", length=5, nullable=true)
     */
    private $stgCpostale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_villee", type="string", length=32, nullable=true)
     */
    private $stgVillee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_payse", type="string", length=38, nullable=true)
     */
    private $stgPayse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_handicap", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $stgHandicap;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_nome", type="string", length=38, nullable=true, options={"comment"="Denomination de l'Employeur a l'issue du stage"})
     */
    private $stgNome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_adequa", type="string", length=1, nullable=true, options={"comment"="Adequation Emploi/Formation"})
     */
    private $stgAdequa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_nomsp", type="string", length=38, nullable=true, options={"comment"="Nom de l'entreprise dans laquelle le stagiaire effectue son stage principal"})
     */
    private $stgNomsp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_apesp", type="string", length=5, nullable=true, options={"comment"="Code APE de l'entreprise dans laquelle le stagiaire effectue son stage principal"})
     */
    private $stgApesp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_villesp", type="string", length=6, nullable=true, options={"comment"="Identifiant de la Commune de l'entreprise dans laquelle le stagiaire effectue son stage principal (Lien avec ZONE_EMPLOI.ZOE_ID)"})
     */
    private $stgVillesp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_tel_1", type="string", length=20, nullable=true)
     */
    private $stgTel1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_tel_2", type="string", length=20, nullable=true)
     */
    private $stgTel2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_mail", type="string", length=100, nullable=true)
     */
    private $stgMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_nom_marital", type="string", length=100, nullable=true)
     */
    private $stgNomMarital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_nb_heures_prevues", type="decimal", precision=6, scale=1, nullable=true)
     */
    private $stgNbHeuresPrevues;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_flg_sortie_anticipee", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $stgFlgSortieAnticipee;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="stg_date_sortie_prev", type="date", nullable=true)
     */
    private $stgDateSortiePrev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_pr_numero", type="string", length=10, nullable=true)
     */
    private $stgPrNumero;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_pr_precision_rqth", type="string", length=2000, nullable=true)
     */
    private $stgPrPrecisionRqth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_pr_annee_obt_dip", type="string", length=4, nullable=true)
     */
    private $stgPrAnneeObtDip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_pr_rech_emp_dep_mois", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $stgPrRechEmpDepMois;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="stg_pr_dt_fin_scolarite", type="datetime", nullable=true)
     */
    private $stgPrDtFinScolarite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_pr_id_pole_emploi", type="string", length=10, nullable=true)
     */
    private $stgPrIdPoleEmploi;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="stg_pr_indemnise_jusqu", type="datetime", nullable=true)
     */
    private $stgPrIndemniseJusqu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_pr_prescripteur", type="string", length=100, nullable=true)
     */
    private $stgPrPrescripteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_pr_objectifs", type="string", length=2000, nullable=true)
     */
    private $stgPrObjectifs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_pr_projets", type="string", length=2000, nullable=true)
     */
    private $stgPrProjets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_sor_intit_forma", type="string", length=200, nullable=true)
     */
    private $stgSorIntitForma;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="stg_dt_entree_reelle", type="date", nullable=true)
     */
    private $stgDtEntreeReelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_nationalite", type="string", length=100, nullable=true)
     */
    private $stgNationalite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_pr_parcours_anterieur", type="string", length=2000, nullable=true)
     */
    private $stgPrParcoursAnterieur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_pr_observations", type="string", length=2000, nullable=true)
     */
    private $stgPrObservations;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_flg_creation_acm", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $stgFlgCreationAcm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_num_candidat_acm", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $stgNumCandidatAcm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_der_dip_obtenu_acm", type="string", length=10, nullable=true)
     */
    private $stgDerDipObtenuAcm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_der_annee_scolarite_acm", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $stgDerAnneeScolariteAcm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="stg_dt_fin_contrat_acm", type="datetime", nullable=true)
     */
    private $stgDtFinContratAcm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_indem_chomage_de_ref_acm", type="string", length=10, nullable=true)
     */
    private $stgIndemChomageDeRefAcm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_precis_emp_public_acm", type="string", length=150, nullable=true)
     */
    private $stgPrecisEmpPublicAcm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="stg_date_fin_are_acm", type="datetime", nullable=true)
     */
    private $stgDateFinAreAcm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_flg_zone_zus", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $stgFlgZoneZus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_der_classe_suivie", type="string", length=100, nullable=true)
     */
    private $stgDerClasseSuivie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_der_dip_obtenu", type="string", length=100, nullable=true)
     */
    private $stgDerDipObtenu;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="stg_datesortie_form_init", type="datetime", nullable=true)
     */
    private $stgDatesortieFormInit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_flg_presc_cadre_cared", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $stgFlgPrescCadreCared;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_num_conv_cared", type="string", length=10, nullable=true)
     */
    private $stgNumConvCared;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_flg_formation_vae", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $stgFlgFormationVae;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_nb_heure_cent_prev", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $stgNbHeureCentPrev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_nb_heure_ent_prev", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $stgNbHeureEntPrev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_type_formation", type="string", length=400, nullable=true)
     */
    private $stgTypeFormation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_type_validation", type="string", length=400, nullable=true)
     */
    private $stgTypeValidation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_annee_real_formation", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $stgAnneeRealFormation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_type_prescripteur", type="string", length=100, nullable=true)
     */
    private $stgTypePrescripteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_flg_sdf", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $stgFlgSdf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_cpostal_nais", type="string", length=10, nullable=true)
     */
    private $stgCpostalNais;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_ville_nais", type="string", length=100, nullable=true)
     */
    private $stgVilleNais;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_flg_parent_etranger", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $stgFlgParentEtranger;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_flg_menage_sans_emploi", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $stgFlgMenageSansEmploi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_flg_enfants_a_charge", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $stgFlgEnfantsACharge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_flg_famille_mono_parent", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $stgFlgFamilleMonoParent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_comm_propos_issu_stag", type="string", length=200, nullable=true)
     */
    private $stgCommProposIssuStag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_flg_saisonnier", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $stgFlgSaisonnier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_nb_heure_cent_previ", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $stgNbHeureCentPrevi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_nb_heure_ent_previ", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $stgNbHeureEntPrevi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_nb_heure_hebdo", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $stgNbHeureHebdo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_flg_risque_expulsion", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $stgFlgRisqueExpulsion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_id_de_national", type="string", length=20, nullable=true)
     */
    private $stgIdDeNational;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_flg_diplome_etranger", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $stgFlgDiplomeEtranger;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="stg_dt_inscription_pe", type="datetime", nullable=true)
     */
    private $stgDtInscriptionPe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_flg_fiche_navette", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $stgFlgFicheNavette;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_flg_prerequis_valide", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $stgFlgPrerequisValide;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_formation_visee", type="string", length=500, nullable=true)
     */
    private $stgFormationVisee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_detail_emploi", type="string", length=500, nullable=true)
     */
    private $stgDetailEmploi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_flg_present_concours", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $stgFlgPresentConcours;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_concours_presente", type="string", length=500, nullable=true)
     */
    private $stgConcoursPresente;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_flg_sit_mieux_ap_6_mois", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $stgFlgSitMieuxAp6Mois;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_obs_sit_ap_6_mois", type="string", length=2000, nullable=true)
     */
    private $stgObsSitAp6Mois;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_num_echantillon", type="decimal", precision=2, scale=0, nullable=true)
     */
    private $stgNumEchantillon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_flg_emploi_avenir", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $stgFlgEmploiAvenir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_code_insee", type="string", length=5, nullable=true)
     */
    private $stgCodeInsee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_flg_offre_sortie_form", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $stgFlgOffreSortieForm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_num_nir", type="string", length=13, nullable=true)
     */
    private $stgNumNir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_login", type="string", length=50, nullable=true)
     */
    private $stgLogin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_id_externe", type="string", length=100, nullable=true)
     */
    private $stgIdExterne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stg_code_insee_nais", type="string", length=5, nullable=true)
     */
    private $stgCodeInseeNais;

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
     * @var \Civilite
     *
     * @ORM\ManyToOne(targetEntity="Civilite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stg_civilite", referencedColumnName="civ_id")
     * })
     */
    private $stgCivilite;

    /**
     * @var \Motifsortie
     *
     * @ORM\ManyToOne(targetEntity="Motifsortie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stg_motifsortie", referencedColumnName="mot_id")
     * })
     */
    private $stgMotifsortie;

    /**
     * @var \Niveau
     *
     * @ORM\ManyToOne(targetEntity="Niveau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stg_nivform", referencedColumnName="niv_id")
     * })
     */
    private $stgNivform;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stg_offre", referencedColumnName="off_id")
     * })
     */
    private $stgOffre;

    /**
     * @var \OrgRemu
     *
     * @ORM\ManyToOne(targetEntity="OrgRemu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stg_orgaremu", referencedColumnName="orr_id")
     * })
     */
    private $stgOrgaremu;

    /**
     * @var \Resultat
     *
     * @ORM\ManyToOne(targetEntity="Resultat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stg_resultat", referencedColumnName="res_id")
     * })
     */
    private $stgResultat;

    /**
     * @var \Statut
     *
     * @ORM\ManyToOne(targetEntity="Statut")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stg_sttsortie", referencedColumnName="stt_id")
     * })
     */
    private $stgSttsortie;

    /**
     * @var \Statut
     *
     * @ORM\ManyToOne(targetEntity="Statut")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stg_sttentree", referencedColumnName="stt_id")
     * })
     */
    private $stgSttentree;

    /**
     * @var \Individu
     *
     * @ORM\ManyToOne(targetEntity="Individu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ind_id", referencedColumnName="ind_id")
     * })
     */
    private $ind;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_motif_1", referencedColumnName="ref_id")
     * })
     */
    private $refIdMotif1;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_motif_2_situation", referencedColumnName="ref_id")
     * })
     */
    private $refIdMotif2Situation;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_motif_3_detail", referencedColumnName="ref_id")
     * })
     */
    private $refIdMotif3Detail;

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
     *   @ORM\JoinColumn(name="ref_id_degre_maitrise", referencedColumnName="ref_id")
     * })
     */
    private $refIdDegreMaitrise;

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
     *   @ORM\JoinColumn(name="ref_id_lien_objectif_init", referencedColumnName="ref_id")
     * })
     */
    private $refIdLienObjectifInit;

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
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_nationalite", referencedColumnName="ref_id")
     * })
     */
    private $refIdNationalite;

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
     *   @ORM\JoinColumn(name="ref_proposition_issu_stag", referencedColumnName="ref_id")
     * })
     */
    private $refPropositionIssuStag;

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
     *   @ORM\JoinColumn(name="ref_id_sit_ap_6_mois", referencedColumnName="ref_id")
     * })
     */
    private $refIdSitAp6Mois;

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
     *   @ORM\JoinColumn(name="ref_id_pr_der_dip_obtenu", referencedColumnName="ref_id")
     * })
     */
    private $refIdPrDerDipObtenu;

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
     *   @ORM\JoinColumn(name="ref_id_pr_indem_are", referencedColumnName="ref_id")
     * })
     */
    private $refIdPrIndemAre;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_pr_niv_for_ent", referencedColumnName="ref_id")
     * })
     */
    private $refIdPrNivForEnt;

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
     *   @ORM\JoinColumn(name="ref_id_pr_sit_rsa", referencedColumnName="ref_id")
     * })
     */
    private $refIdPrSitRsa;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_pr_statut", referencedColumnName="ref_id")
     * })
     */
    private $refIdPrStatut;

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
     *   @ORM\JoinColumn(name="ref_id_sorti_dispo_region", referencedColumnName="ref_id")
     * })
     */
    private $refIdSortiDispoRegion;

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
     *   @ORM\JoinColumn(name="ref_id_situation_issue", referencedColumnName="ref_id")
     * })
     */
    private $refIdSituationIssue;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_staut_fse", referencedColumnName="ref_id")
     * })
     */
    private $refIdStautFse;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_type_contrat_issue", referencedColumnName="ref_id")
     * })
     */
    private $refIdTypeContratIssue;

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
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_domaine_emploi_vise", referencedColumnName="ref_id")
     * })
     */
    private $refIdDomaineEmploiVise;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_sttsortie", referencedColumnName="ref_id")
     * })
     */
    private $refIdSttsortie;

    public function getStgId(): ?int
    {
        return $this->stgId;
    }

    public function getStgCode(): ?string
    {
        return $this->stgCode;
    }

    public function setStgCode(string $stgCode): self
    {
        $this->stgCode = $stgCode;

        return $this;
    }

    public function getStgNom(): ?string
    {
        return $this->stgNom;
    }

    public function setStgNom(string $stgNom): self
    {
        $this->stgNom = $stgNom;

        return $this;
    }

    public function getStgPrenom(): ?string
    {
        return $this->stgPrenom;
    }

    public function setStgPrenom(string $stgPrenom): self
    {
        $this->stgPrenom = $stgPrenom;

        return $this;
    }

    public function getStgSexe(): ?string
    {
        return $this->stgSexe;
    }

    public function setStgSexe(?string $stgSexe): self
    {
        $this->stgSexe = $stgSexe;

        return $this;
    }

    public function getStgDatenais(): ?\DateTimeInterface
    {
        return $this->stgDatenais;
    }

    public function setStgDatenais(\DateTimeInterface $stgDatenais): self
    {
        $this->stgDatenais = $stgDatenais;

        return $this;
    }

    public function getStgDateentree(): ?\DateTimeInterface
    {
        return $this->stgDateentree;
    }

    public function setStgDateentree(?\DateTimeInterface $stgDateentree): self
    {
        $this->stgDateentree = $stgDateentree;

        return $this;
    }

    public function getStgDatesortie(): ?\DateTimeInterface
    {
        return $this->stgDatesortie;
    }

    public function setStgDatesortie(?\DateTimeInterface $stgDatesortie): self
    {
        $this->stgDatesortie = $stgDatesortie;

        return $this;
    }

    public function getStgRemunere(): ?string
    {
        return $this->stgRemunere;
    }

    public function setStgRemunere(?string $stgRemunere): self
    {
        $this->stgRemunere = $stgRemunere;

        return $this;
    }

    public function getStgCnasea(): ?string
    {
        return $this->stgCnasea;
    }

    public function setStgCnasea(?string $stgCnasea): self
    {
        $this->stgCnasea = $stgCnasea;

        return $this;
    }

    public function getStgNumvoie(): ?string
    {
        return $this->stgNumvoie;
    }

    public function setStgNumvoie(?string $stgNumvoie): self
    {
        $this->stgNumvoie = $stgNumvoie;

        return $this;
    }

    public function getStgBister(): ?string
    {
        return $this->stgBister;
    }

    public function setStgBister(?string $stgBister): self
    {
        $this->stgBister = $stgBister;

        return $this;
    }

    public function getStgNomvoie(): ?string
    {
        return $this->stgNomvoie;
    }

    public function setStgNomvoie(?string $stgNomvoie): self
    {
        $this->stgNomvoie = $stgNomvoie;

        return $this;
    }

    public function getStgAdr1(): ?string
    {
        return $this->stgAdr1;
    }

    public function setStgAdr1(?string $stgAdr1): self
    {
        $this->stgAdr1 = $stgAdr1;

        return $this;
    }

    public function getStgAdr2(): ?string
    {
        return $this->stgAdr2;
    }

    public function setStgAdr2(?string $stgAdr2): self
    {
        $this->stgAdr2 = $stgAdr2;

        return $this;
    }

    public function getStgCpostal(): ?string
    {
        return $this->stgCpostal;
    }

    public function setStgCpostal(?string $stgCpostal): self
    {
        $this->stgCpostal = $stgCpostal;

        return $this;
    }

    public function getStgVille(): ?string
    {
        return $this->stgVille;
    }

    public function setStgVille(?string $stgVille): self
    {
        $this->stgVille = $stgVille;

        return $this;
    }

    public function getStgPays(): ?string
    {
        return $this->stgPays;
    }

    public function setStgPays(?string $stgPays): self
    {
        $this->stgPays = $stgPays;

        return $this;
    }

    public function getStgEligiblefse(): ?string
    {
        return $this->stgEligiblefse;
    }

    public function setStgEligiblefse(string $stgEligiblefse): self
    {
        $this->stgEligiblefse = $stgEligiblefse;

        return $this;
    }

    public function getStgNbmstt(): ?string
    {
        return $this->stgNbmstt;
    }

    public function setStgNbmstt(?string $stgNbmstt): self
    {
        $this->stgNbmstt = $stgNbmstt;

        return $this;
    }

    public function getStgNbmexper(): ?string
    {
        return $this->stgNbmexper;
    }

    public function setStgNbmexper(?string $stgNbmexper): self
    {
        $this->stgNbmexper = $stgNbmexper;

        return $this;
    }

    public function getStgEtat(): ?string
    {
        return $this->stgEtat;
    }

    public function setStgEtat(string $stgEtat): self
    {
        $this->stgEtat = $stgEtat;

        return $this;
    }

    public function getStgAuteurc(): ?string
    {
        return $this->stgAuteurc;
    }

    public function setStgAuteurc(string $stgAuteurc): self
    {
        $this->stgAuteurc = $stgAuteurc;

        return $this;
    }

    public function getStgDatec(): ?\DateTimeInterface
    {
        return $this->stgDatec;
    }

    public function setStgDatec(\DateTimeInterface $stgDatec): self
    {
        $this->stgDatec = $stgDatec;

        return $this;
    }

    public function getStgAuteurm(): ?string
    {
        return $this->stgAuteurm;
    }

    public function setStgAuteurm(?string $stgAuteurm): self
    {
        $this->stgAuteurm = $stgAuteurm;

        return $this;
    }

    public function getStgDatem(): ?\DateTimeInterface
    {
        return $this->stgDatem;
    }

    public function setStgDatem(?\DateTimeInterface $stgDatem): self
    {
        $this->stgDatem = $stgDatem;

        return $this;
    }

    public function getStgAuteura(): ?string
    {
        return $this->stgAuteura;
    }

    public function setStgAuteura(?string $stgAuteura): self
    {
        $this->stgAuteura = $stgAuteura;

        return $this;
    }

    public function getStgDatea(): ?\DateTimeInterface
    {
        return $this->stgDatea;
    }

    public function setStgDatea(?\DateTimeInterface $stgDatea): self
    {
        $this->stgDatea = $stgDatea;

        return $this;
    }

    public function getStgAnpe(): ?string
    {
        return $this->stgAnpe;
    }

    public function setStgAnpe(?string $stgAnpe): self
    {
        $this->stgAnpe = $stgAnpe;

        return $this;
    }

    public function getStgNumvoiee(): ?string
    {
        return $this->stgNumvoiee;
    }

    public function setStgNumvoiee(?string $stgNumvoiee): self
    {
        $this->stgNumvoiee = $stgNumvoiee;

        return $this;
    }

    public function getStgBistere(): ?string
    {
        return $this->stgBistere;
    }

    public function setStgBistere(?string $stgBistere): self
    {
        $this->stgBistere = $stgBistere;

        return $this;
    }

    public function getStgNomvoiee(): ?string
    {
        return $this->stgNomvoiee;
    }

    public function setStgNomvoiee(?string $stgNomvoiee): self
    {
        $this->stgNomvoiee = $stgNomvoiee;

        return $this;
    }

    public function getStgAdr1e(): ?string
    {
        return $this->stgAdr1e;
    }

    public function setStgAdr1e(?string $stgAdr1e): self
    {
        $this->stgAdr1e = $stgAdr1e;

        return $this;
    }

    public function getStgAdr2e(): ?string
    {
        return $this->stgAdr2e;
    }

    public function setStgAdr2e(?string $stgAdr2e): self
    {
        $this->stgAdr2e = $stgAdr2e;

        return $this;
    }

    public function getStgCpostale(): ?string
    {
        return $this->stgCpostale;
    }

    public function setStgCpostale(?string $stgCpostale): self
    {
        $this->stgCpostale = $stgCpostale;

        return $this;
    }

    public function getStgVillee(): ?string
    {
        return $this->stgVillee;
    }

    public function setStgVillee(?string $stgVillee): self
    {
        $this->stgVillee = $stgVillee;

        return $this;
    }

    public function getStgPayse(): ?string
    {
        return $this->stgPayse;
    }

    public function setStgPayse(?string $stgPayse): self
    {
        $this->stgPayse = $stgPayse;

        return $this;
    }

    public function getStgHandicap(): ?string
    {
        return $this->stgHandicap;
    }

    public function setStgHandicap(?string $stgHandicap): self
    {
        $this->stgHandicap = $stgHandicap;

        return $this;
    }

    public function getStgNome(): ?string
    {
        return $this->stgNome;
    }

    public function setStgNome(?string $stgNome): self
    {
        $this->stgNome = $stgNome;

        return $this;
    }

    public function getStgAdequa(): ?string
    {
        return $this->stgAdequa;
    }

    public function setStgAdequa(?string $stgAdequa): self
    {
        $this->stgAdequa = $stgAdequa;

        return $this;
    }

    public function getStgNomsp(): ?string
    {
        return $this->stgNomsp;
    }

    public function setStgNomsp(?string $stgNomsp): self
    {
        $this->stgNomsp = $stgNomsp;

        return $this;
    }

    public function getStgApesp(): ?string
    {
        return $this->stgApesp;
    }

    public function setStgApesp(?string $stgApesp): self
    {
        $this->stgApesp = $stgApesp;

        return $this;
    }

    public function getStgVillesp(): ?string
    {
        return $this->stgVillesp;
    }

    public function setStgVillesp(?string $stgVillesp): self
    {
        $this->stgVillesp = $stgVillesp;

        return $this;
    }

    public function getStgTel1(): ?string
    {
        return $this->stgTel1;
    }

    public function setStgTel1(?string $stgTel1): self
    {
        $this->stgTel1 = $stgTel1;

        return $this;
    }

    public function getStgTel2(): ?string
    {
        return $this->stgTel2;
    }

    public function setStgTel2(?string $stgTel2): self
    {
        $this->stgTel2 = $stgTel2;

        return $this;
    }

    public function getStgMail(): ?string
    {
        return $this->stgMail;
    }

    public function setStgMail(?string $stgMail): self
    {
        $this->stgMail = $stgMail;

        return $this;
    }

    public function getStgNomMarital(): ?string
    {
        return $this->stgNomMarital;
    }

    public function setStgNomMarital(?string $stgNomMarital): self
    {
        $this->stgNomMarital = $stgNomMarital;

        return $this;
    }

    public function getStgNbHeuresPrevues(): ?string
    {
        return $this->stgNbHeuresPrevues;
    }

    public function setStgNbHeuresPrevues(?string $stgNbHeuresPrevues): self
    {
        $this->stgNbHeuresPrevues = $stgNbHeuresPrevues;

        return $this;
    }

    public function getStgFlgSortieAnticipee(): ?string
    {
        return $this->stgFlgSortieAnticipee;
    }

    public function setStgFlgSortieAnticipee(?string $stgFlgSortieAnticipee): self
    {
        $this->stgFlgSortieAnticipee = $stgFlgSortieAnticipee;

        return $this;
    }

    public function getStgDateSortiePrev(): ?\DateTimeInterface
    {
        return $this->stgDateSortiePrev;
    }

    public function setStgDateSortiePrev(?\DateTimeInterface $stgDateSortiePrev): self
    {
        $this->stgDateSortiePrev = $stgDateSortiePrev;

        return $this;
    }

    public function getStgPrNumero(): ?string
    {
        return $this->stgPrNumero;
    }

    public function setStgPrNumero(?string $stgPrNumero): self
    {
        $this->stgPrNumero = $stgPrNumero;

        return $this;
    }

    public function getStgPrPrecisionRqth(): ?string
    {
        return $this->stgPrPrecisionRqth;
    }

    public function setStgPrPrecisionRqth(?string $stgPrPrecisionRqth): self
    {
        $this->stgPrPrecisionRqth = $stgPrPrecisionRqth;

        return $this;
    }

    public function getStgPrAnneeObtDip(): ?string
    {
        return $this->stgPrAnneeObtDip;
    }

    public function setStgPrAnneeObtDip(?string $stgPrAnneeObtDip): self
    {
        $this->stgPrAnneeObtDip = $stgPrAnneeObtDip;

        return $this;
    }

    public function getStgPrRechEmpDepMois(): ?string
    {
        return $this->stgPrRechEmpDepMois;
    }

    public function setStgPrRechEmpDepMois(?string $stgPrRechEmpDepMois): self
    {
        $this->stgPrRechEmpDepMois = $stgPrRechEmpDepMois;

        return $this;
    }

    public function getStgPrDtFinScolarite(): ?\DateTimeInterface
    {
        return $this->stgPrDtFinScolarite;
    }

    public function setStgPrDtFinScolarite(?\DateTimeInterface $stgPrDtFinScolarite): self
    {
        $this->stgPrDtFinScolarite = $stgPrDtFinScolarite;

        return $this;
    }

    public function getStgPrIdPoleEmploi(): ?string
    {
        return $this->stgPrIdPoleEmploi;
    }

    public function setStgPrIdPoleEmploi(?string $stgPrIdPoleEmploi): self
    {
        $this->stgPrIdPoleEmploi = $stgPrIdPoleEmploi;

        return $this;
    }

    public function getStgPrIndemniseJusqu(): ?\DateTimeInterface
    {
        return $this->stgPrIndemniseJusqu;
    }

    public function setStgPrIndemniseJusqu(?\DateTimeInterface $stgPrIndemniseJusqu): self
    {
        $this->stgPrIndemniseJusqu = $stgPrIndemniseJusqu;

        return $this;
    }

    public function getStgPrPrescripteur(): ?string
    {
        return $this->stgPrPrescripteur;
    }

    public function setStgPrPrescripteur(?string $stgPrPrescripteur): self
    {
        $this->stgPrPrescripteur = $stgPrPrescripteur;

        return $this;
    }

    public function getStgPrObjectifs(): ?string
    {
        return $this->stgPrObjectifs;
    }

    public function setStgPrObjectifs(?string $stgPrObjectifs): self
    {
        $this->stgPrObjectifs = $stgPrObjectifs;

        return $this;
    }

    public function getStgPrProjets(): ?string
    {
        return $this->stgPrProjets;
    }

    public function setStgPrProjets(?string $stgPrProjets): self
    {
        $this->stgPrProjets = $stgPrProjets;

        return $this;
    }

    public function getStgSorIntitForma(): ?string
    {
        return $this->stgSorIntitForma;
    }

    public function setStgSorIntitForma(?string $stgSorIntitForma): self
    {
        $this->stgSorIntitForma = $stgSorIntitForma;

        return $this;
    }

    public function getStgDtEntreeReelle(): ?\DateTimeInterface
    {
        return $this->stgDtEntreeReelle;
    }

    public function setStgDtEntreeReelle(?\DateTimeInterface $stgDtEntreeReelle): self
    {
        $this->stgDtEntreeReelle = $stgDtEntreeReelle;

        return $this;
    }

    public function getStgNationalite(): ?string
    {
        return $this->stgNationalite;
    }

    public function setStgNationalite(?string $stgNationalite): self
    {
        $this->stgNationalite = $stgNationalite;

        return $this;
    }

    public function getStgPrParcoursAnterieur(): ?string
    {
        return $this->stgPrParcoursAnterieur;
    }

    public function setStgPrParcoursAnterieur(?string $stgPrParcoursAnterieur): self
    {
        $this->stgPrParcoursAnterieur = $stgPrParcoursAnterieur;

        return $this;
    }

    public function getStgPrObservations(): ?string
    {
        return $this->stgPrObservations;
    }

    public function setStgPrObservations(?string $stgPrObservations): self
    {
        $this->stgPrObservations = $stgPrObservations;

        return $this;
    }

    public function getStgFlgCreationAcm(): ?string
    {
        return $this->stgFlgCreationAcm;
    }

    public function setStgFlgCreationAcm(?string $stgFlgCreationAcm): self
    {
        $this->stgFlgCreationAcm = $stgFlgCreationAcm;

        return $this;
    }

    public function getStgNumCandidatAcm(): ?string
    {
        return $this->stgNumCandidatAcm;
    }

    public function setStgNumCandidatAcm(?string $stgNumCandidatAcm): self
    {
        $this->stgNumCandidatAcm = $stgNumCandidatAcm;

        return $this;
    }

    public function getStgDerDipObtenuAcm(): ?string
    {
        return $this->stgDerDipObtenuAcm;
    }

    public function setStgDerDipObtenuAcm(?string $stgDerDipObtenuAcm): self
    {
        $this->stgDerDipObtenuAcm = $stgDerDipObtenuAcm;

        return $this;
    }

    public function getStgDerAnneeScolariteAcm(): ?string
    {
        return $this->stgDerAnneeScolariteAcm;
    }

    public function setStgDerAnneeScolariteAcm(?string $stgDerAnneeScolariteAcm): self
    {
        $this->stgDerAnneeScolariteAcm = $stgDerAnneeScolariteAcm;

        return $this;
    }

    public function getStgDtFinContratAcm(): ?\DateTimeInterface
    {
        return $this->stgDtFinContratAcm;
    }

    public function setStgDtFinContratAcm(?\DateTimeInterface $stgDtFinContratAcm): self
    {
        $this->stgDtFinContratAcm = $stgDtFinContratAcm;

        return $this;
    }

    public function getStgIndemChomageDeRefAcm(): ?string
    {
        return $this->stgIndemChomageDeRefAcm;
    }

    public function setStgIndemChomageDeRefAcm(?string $stgIndemChomageDeRefAcm): self
    {
        $this->stgIndemChomageDeRefAcm = $stgIndemChomageDeRefAcm;

        return $this;
    }

    public function getStgPrecisEmpPublicAcm(): ?string
    {
        return $this->stgPrecisEmpPublicAcm;
    }

    public function setStgPrecisEmpPublicAcm(?string $stgPrecisEmpPublicAcm): self
    {
        $this->stgPrecisEmpPublicAcm = $stgPrecisEmpPublicAcm;

        return $this;
    }

    public function getStgDateFinAreAcm(): ?\DateTimeInterface
    {
        return $this->stgDateFinAreAcm;
    }

    public function setStgDateFinAreAcm(?\DateTimeInterface $stgDateFinAreAcm): self
    {
        $this->stgDateFinAreAcm = $stgDateFinAreAcm;

        return $this;
    }

    public function getStgFlgZoneZus(): ?string
    {
        return $this->stgFlgZoneZus;
    }

    public function setStgFlgZoneZus(?string $stgFlgZoneZus): self
    {
        $this->stgFlgZoneZus = $stgFlgZoneZus;

        return $this;
    }

    public function getStgDerClasseSuivie(): ?string
    {
        return $this->stgDerClasseSuivie;
    }

    public function setStgDerClasseSuivie(?string $stgDerClasseSuivie): self
    {
        $this->stgDerClasseSuivie = $stgDerClasseSuivie;

        return $this;
    }

    public function getStgDerDipObtenu(): ?string
    {
        return $this->stgDerDipObtenu;
    }

    public function setStgDerDipObtenu(?string $stgDerDipObtenu): self
    {
        $this->stgDerDipObtenu = $stgDerDipObtenu;

        return $this;
    }

    public function getStgDatesortieFormInit(): ?\DateTimeInterface
    {
        return $this->stgDatesortieFormInit;
    }

    public function setStgDatesortieFormInit(?\DateTimeInterface $stgDatesortieFormInit): self
    {
        $this->stgDatesortieFormInit = $stgDatesortieFormInit;

        return $this;
    }

    public function getStgFlgPrescCadreCared(): ?string
    {
        return $this->stgFlgPrescCadreCared;
    }

    public function setStgFlgPrescCadreCared(?string $stgFlgPrescCadreCared): self
    {
        $this->stgFlgPrescCadreCared = $stgFlgPrescCadreCared;

        return $this;
    }

    public function getStgNumConvCared(): ?string
    {
        return $this->stgNumConvCared;
    }

    public function setStgNumConvCared(?string $stgNumConvCared): self
    {
        $this->stgNumConvCared = $stgNumConvCared;

        return $this;
    }

    public function getStgFlgFormationVae(): ?string
    {
        return $this->stgFlgFormationVae;
    }

    public function setStgFlgFormationVae(?string $stgFlgFormationVae): self
    {
        $this->stgFlgFormationVae = $stgFlgFormationVae;

        return $this;
    }

    public function getStgNbHeureCentPrev(): ?string
    {
        return $this->stgNbHeureCentPrev;
    }

    public function setStgNbHeureCentPrev(?string $stgNbHeureCentPrev): self
    {
        $this->stgNbHeureCentPrev = $stgNbHeureCentPrev;

        return $this;
    }

    public function getStgNbHeureEntPrev(): ?string
    {
        return $this->stgNbHeureEntPrev;
    }

    public function setStgNbHeureEntPrev(?string $stgNbHeureEntPrev): self
    {
        $this->stgNbHeureEntPrev = $stgNbHeureEntPrev;

        return $this;
    }

    public function getStgTypeFormation(): ?string
    {
        return $this->stgTypeFormation;
    }

    public function setStgTypeFormation(?string $stgTypeFormation): self
    {
        $this->stgTypeFormation = $stgTypeFormation;

        return $this;
    }

    public function getStgTypeValidation(): ?string
    {
        return $this->stgTypeValidation;
    }

    public function setStgTypeValidation(?string $stgTypeValidation): self
    {
        $this->stgTypeValidation = $stgTypeValidation;

        return $this;
    }

    public function getStgAnneeRealFormation(): ?string
    {
        return $this->stgAnneeRealFormation;
    }

    public function setStgAnneeRealFormation(?string $stgAnneeRealFormation): self
    {
        $this->stgAnneeRealFormation = $stgAnneeRealFormation;

        return $this;
    }

    public function getStgTypePrescripteur(): ?string
    {
        return $this->stgTypePrescripteur;
    }

    public function setStgTypePrescripteur(?string $stgTypePrescripteur): self
    {
        $this->stgTypePrescripteur = $stgTypePrescripteur;

        return $this;
    }

    public function getStgFlgSdf(): ?string
    {
        return $this->stgFlgSdf;
    }

    public function setStgFlgSdf(?string $stgFlgSdf): self
    {
        $this->stgFlgSdf = $stgFlgSdf;

        return $this;
    }

    public function getStgCpostalNais(): ?string
    {
        return $this->stgCpostalNais;
    }

    public function setStgCpostalNais(?string $stgCpostalNais): self
    {
        $this->stgCpostalNais = $stgCpostalNais;

        return $this;
    }

    public function getStgVilleNais(): ?string
    {
        return $this->stgVilleNais;
    }

    public function setStgVilleNais(?string $stgVilleNais): self
    {
        $this->stgVilleNais = $stgVilleNais;

        return $this;
    }

    public function getStgFlgParentEtranger(): ?string
    {
        return $this->stgFlgParentEtranger;
    }

    public function setStgFlgParentEtranger(?string $stgFlgParentEtranger): self
    {
        $this->stgFlgParentEtranger = $stgFlgParentEtranger;

        return $this;
    }

    public function getStgFlgMenageSansEmploi(): ?string
    {
        return $this->stgFlgMenageSansEmploi;
    }

    public function setStgFlgMenageSansEmploi(?string $stgFlgMenageSansEmploi): self
    {
        $this->stgFlgMenageSansEmploi = $stgFlgMenageSansEmploi;

        return $this;
    }

    public function getStgFlgEnfantsACharge(): ?string
    {
        return $this->stgFlgEnfantsACharge;
    }

    public function setStgFlgEnfantsACharge(?string $stgFlgEnfantsACharge): self
    {
        $this->stgFlgEnfantsACharge = $stgFlgEnfantsACharge;

        return $this;
    }

    public function getStgFlgFamilleMonoParent(): ?string
    {
        return $this->stgFlgFamilleMonoParent;
    }

    public function setStgFlgFamilleMonoParent(?string $stgFlgFamilleMonoParent): self
    {
        $this->stgFlgFamilleMonoParent = $stgFlgFamilleMonoParent;

        return $this;
    }

    public function getStgCommProposIssuStag(): ?string
    {
        return $this->stgCommProposIssuStag;
    }

    public function setStgCommProposIssuStag(?string $stgCommProposIssuStag): self
    {
        $this->stgCommProposIssuStag = $stgCommProposIssuStag;

        return $this;
    }

    public function getStgFlgSaisonnier(): ?string
    {
        return $this->stgFlgSaisonnier;
    }

    public function setStgFlgSaisonnier(?string $stgFlgSaisonnier): self
    {
        $this->stgFlgSaisonnier = $stgFlgSaisonnier;

        return $this;
    }

    public function getStgNbHeureCentPrevi(): ?string
    {
        return $this->stgNbHeureCentPrevi;
    }

    public function setStgNbHeureCentPrevi(?string $stgNbHeureCentPrevi): self
    {
        $this->stgNbHeureCentPrevi = $stgNbHeureCentPrevi;

        return $this;
    }

    public function getStgNbHeureEntPrevi(): ?string
    {
        return $this->stgNbHeureEntPrevi;
    }

    public function setStgNbHeureEntPrevi(?string $stgNbHeureEntPrevi): self
    {
        $this->stgNbHeureEntPrevi = $stgNbHeureEntPrevi;

        return $this;
    }

    public function getStgNbHeureHebdo(): ?string
    {
        return $this->stgNbHeureHebdo;
    }

    public function setStgNbHeureHebdo(?string $stgNbHeureHebdo): self
    {
        $this->stgNbHeureHebdo = $stgNbHeureHebdo;

        return $this;
    }

    public function getStgFlgRisqueExpulsion(): ?string
    {
        return $this->stgFlgRisqueExpulsion;
    }

    public function setStgFlgRisqueExpulsion(?string $stgFlgRisqueExpulsion): self
    {
        $this->stgFlgRisqueExpulsion = $stgFlgRisqueExpulsion;

        return $this;
    }

    public function getStgIdDeNational(): ?string
    {
        return $this->stgIdDeNational;
    }

    public function setStgIdDeNational(?string $stgIdDeNational): self
    {
        $this->stgIdDeNational = $stgIdDeNational;

        return $this;
    }

    public function getStgFlgDiplomeEtranger(): ?string
    {
        return $this->stgFlgDiplomeEtranger;
    }

    public function setStgFlgDiplomeEtranger(?string $stgFlgDiplomeEtranger): self
    {
        $this->stgFlgDiplomeEtranger = $stgFlgDiplomeEtranger;

        return $this;
    }

    public function getStgDtInscriptionPe(): ?\DateTimeInterface
    {
        return $this->stgDtInscriptionPe;
    }

    public function setStgDtInscriptionPe(?\DateTimeInterface $stgDtInscriptionPe): self
    {
        $this->stgDtInscriptionPe = $stgDtInscriptionPe;

        return $this;
    }

    public function getStgFlgFicheNavette(): ?string
    {
        return $this->stgFlgFicheNavette;
    }

    public function setStgFlgFicheNavette(?string $stgFlgFicheNavette): self
    {
        $this->stgFlgFicheNavette = $stgFlgFicheNavette;

        return $this;
    }

    public function getStgFlgPrerequisValide(): ?string
    {
        return $this->stgFlgPrerequisValide;
    }

    public function setStgFlgPrerequisValide(?string $stgFlgPrerequisValide): self
    {
        $this->stgFlgPrerequisValide = $stgFlgPrerequisValide;

        return $this;
    }

    public function getStgFormationVisee(): ?string
    {
        return $this->stgFormationVisee;
    }

    public function setStgFormationVisee(?string $stgFormationVisee): self
    {
        $this->stgFormationVisee = $stgFormationVisee;

        return $this;
    }

    public function getStgDetailEmploi(): ?string
    {
        return $this->stgDetailEmploi;
    }

    public function setStgDetailEmploi(?string $stgDetailEmploi): self
    {
        $this->stgDetailEmploi = $stgDetailEmploi;

        return $this;
    }

    public function getStgFlgPresentConcours(): ?string
    {
        return $this->stgFlgPresentConcours;
    }

    public function setStgFlgPresentConcours(?string $stgFlgPresentConcours): self
    {
        $this->stgFlgPresentConcours = $stgFlgPresentConcours;

        return $this;
    }

    public function getStgConcoursPresente(): ?string
    {
        return $this->stgConcoursPresente;
    }

    public function setStgConcoursPresente(?string $stgConcoursPresente): self
    {
        $this->stgConcoursPresente = $stgConcoursPresente;

        return $this;
    }

    public function getStgFlgSitMieuxAp6Mois(): ?string
    {
        return $this->stgFlgSitMieuxAp6Mois;
    }

    public function setStgFlgSitMieuxAp6Mois(?string $stgFlgSitMieuxAp6Mois): self
    {
        $this->stgFlgSitMieuxAp6Mois = $stgFlgSitMieuxAp6Mois;

        return $this;
    }

    public function getStgObsSitAp6Mois(): ?string
    {
        return $this->stgObsSitAp6Mois;
    }

    public function setStgObsSitAp6Mois(?string $stgObsSitAp6Mois): self
    {
        $this->stgObsSitAp6Mois = $stgObsSitAp6Mois;

        return $this;
    }

    public function getStgNumEchantillon(): ?string
    {
        return $this->stgNumEchantillon;
    }

    public function setStgNumEchantillon(?string $stgNumEchantillon): self
    {
        $this->stgNumEchantillon = $stgNumEchantillon;

        return $this;
    }

    public function getStgFlgEmploiAvenir(): ?string
    {
        return $this->stgFlgEmploiAvenir;
    }

    public function setStgFlgEmploiAvenir(?string $stgFlgEmploiAvenir): self
    {
        $this->stgFlgEmploiAvenir = $stgFlgEmploiAvenir;

        return $this;
    }

    public function getStgCodeInsee(): ?string
    {
        return $this->stgCodeInsee;
    }

    public function setStgCodeInsee(?string $stgCodeInsee): self
    {
        $this->stgCodeInsee = $stgCodeInsee;

        return $this;
    }

    public function getStgFlgOffreSortieForm(): ?string
    {
        return $this->stgFlgOffreSortieForm;
    }

    public function setStgFlgOffreSortieForm(?string $stgFlgOffreSortieForm): self
    {
        $this->stgFlgOffreSortieForm = $stgFlgOffreSortieForm;

        return $this;
    }

    public function getStgNumNir(): ?string
    {
        return $this->stgNumNir;
    }

    public function setStgNumNir(?string $stgNumNir): self
    {
        $this->stgNumNir = $stgNumNir;

        return $this;
    }

    public function getStgLogin(): ?string
    {
        return $this->stgLogin;
    }

    public function setStgLogin(?string $stgLogin): self
    {
        $this->stgLogin = $stgLogin;

        return $this;
    }

    public function getStgIdExterne(): ?string
    {
        return $this->stgIdExterne;
    }

    public function setStgIdExterne(?string $stgIdExterne): self
    {
        $this->stgIdExterne = $stgIdExterne;

        return $this;
    }

    public function getStgCodeInseeNais(): ?string
    {
        return $this->stgCodeInseeNais;
    }

    public function setStgCodeInseeNais(?string $stgCodeInseeNais): self
    {
        $this->stgCodeInseeNais = $stgCodeInseeNais;

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

    public function getStgCivilite(): ?Civilite
    {
        return $this->stgCivilite;
    }

    public function setStgCivilite(?Civilite $stgCivilite): self
    {
        $this->stgCivilite = $stgCivilite;

        return $this;
    }

    public function getStgMotifsortie(): ?Motifsortie
    {
        return $this->stgMotifsortie;
    }

    public function setStgMotifsortie(?Motifsortie $stgMotifsortie): self
    {
        $this->stgMotifsortie = $stgMotifsortie;

        return $this;
    }

    public function getStgNivform(): ?Niveau
    {
        return $this->stgNivform;
    }

    public function setStgNivform(?Niveau $stgNivform): self
    {
        $this->stgNivform = $stgNivform;

        return $this;
    }

    public function getStgOffre(): ?Offre
    {
        return $this->stgOffre;
    }

    public function setStgOffre(?Offre $stgOffre): self
    {
        $this->stgOffre = $stgOffre;

        return $this;
    }

    public function getStgOrgaremu(): ?OrgRemu
    {
        return $this->stgOrgaremu;
    }

    public function setStgOrgaremu(?OrgRemu $stgOrgaremu): self
    {
        $this->stgOrgaremu = $stgOrgaremu;

        return $this;
    }

    public function getStgResultat(): ?Resultat
    {
        return $this->stgResultat;
    }

    public function setStgResultat(?Resultat $stgResultat): self
    {
        $this->stgResultat = $stgResultat;

        return $this;
    }

    public function getStgSttsortie(): ?Statut
    {
        return $this->stgSttsortie;
    }

    public function setStgSttsortie(?Statut $stgSttsortie): self
    {
        $this->stgSttsortie = $stgSttsortie;

        return $this;
    }

    public function getStgSttentree(): ?Statut
    {
        return $this->stgSttentree;
    }

    public function setStgSttentree(?Statut $stgSttentree): self
    {
        $this->stgSttentree = $stgSttentree;

        return $this;
    }

    public function getInd(): ?Individu
    {
        return $this->ind;
    }

    public function setInd(?Individu $ind): self
    {
        $this->ind = $ind;

        return $this;
    }

    public function getRefIdMotif1(): ?Referentiel
    {
        return $this->refIdMotif1;
    }

    public function setRefIdMotif1(?Referentiel $refIdMotif1): self
    {
        $this->refIdMotif1 = $refIdMotif1;

        return $this;
    }

    public function getRefIdMotif2Situation(): ?Referentiel
    {
        return $this->refIdMotif2Situation;
    }

    public function setRefIdMotif2Situation(?Referentiel $refIdMotif2Situation): self
    {
        $this->refIdMotif2Situation = $refIdMotif2Situation;

        return $this;
    }

    public function getRefIdMotif3Detail(): ?Referentiel
    {
        return $this->refIdMotif3Detail;
    }

    public function setRefIdMotif3Detail(?Referentiel $refIdMotif3Detail): self
    {
        $this->refIdMotif3Detail = $refIdMotif3Detail;

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

    public function getRefIdDegreMaitrise(): ?Referentiel
    {
        return $this->refIdDegreMaitrise;
    }

    public function setRefIdDegreMaitrise(?Referentiel $refIdDegreMaitrise): self
    {
        $this->refIdDegreMaitrise = $refIdDegreMaitrise;

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

    public function getRefIdLienObjectifInit(): ?Referentiel
    {
        return $this->refIdLienObjectifInit;
    }

    public function setRefIdLienObjectifInit(?Referentiel $refIdLienObjectifInit): self
    {
        $this->refIdLienObjectifInit = $refIdLienObjectifInit;

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

    public function getRefIdNationalite(): ?Referentiel
    {
        return $this->refIdNationalite;
    }

    public function setRefIdNationalite(?Referentiel $refIdNationalite): self
    {
        $this->refIdNationalite = $refIdNationalite;

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

    public function getRefPropositionIssuStag(): ?Referentiel
    {
        return $this->refPropositionIssuStag;
    }

    public function setRefPropositionIssuStag(?Referentiel $refPropositionIssuStag): self
    {
        $this->refPropositionIssuStag = $refPropositionIssuStag;

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

    public function getRefIdSitAp6Mois(): ?Referentiel
    {
        return $this->refIdSitAp6Mois;
    }

    public function setRefIdSitAp6Mois(?Referentiel $refIdSitAp6Mois): self
    {
        $this->refIdSitAp6Mois = $refIdSitAp6Mois;

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

    public function getRefIdPrDerDipObtenu(): ?Referentiel
    {
        return $this->refIdPrDerDipObtenu;
    }

    public function setRefIdPrDerDipObtenu(?Referentiel $refIdPrDerDipObtenu): self
    {
        $this->refIdPrDerDipObtenu = $refIdPrDerDipObtenu;

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

    public function getRefIdPrIndemAre(): ?Referentiel
    {
        return $this->refIdPrIndemAre;
    }

    public function setRefIdPrIndemAre(?Referentiel $refIdPrIndemAre): self
    {
        $this->refIdPrIndemAre = $refIdPrIndemAre;

        return $this;
    }

    public function getRefIdPrNivForEnt(): ?Referentiel
    {
        return $this->refIdPrNivForEnt;
    }

    public function setRefIdPrNivForEnt(?Referentiel $refIdPrNivForEnt): self
    {
        $this->refIdPrNivForEnt = $refIdPrNivForEnt;

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

    public function getRefIdPrSitRsa(): ?Referentiel
    {
        return $this->refIdPrSitRsa;
    }

    public function setRefIdPrSitRsa(?Referentiel $refIdPrSitRsa): self
    {
        $this->refIdPrSitRsa = $refIdPrSitRsa;

        return $this;
    }

    public function getRefIdPrStatut(): ?Referentiel
    {
        return $this->refIdPrStatut;
    }

    public function setRefIdPrStatut(?Referentiel $refIdPrStatut): self
    {
        $this->refIdPrStatut = $refIdPrStatut;

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

    public function getRefIdSortiDispoRegion(): ?Referentiel
    {
        return $this->refIdSortiDispoRegion;
    }

    public function setRefIdSortiDispoRegion(?Referentiel $refIdSortiDispoRegion): self
    {
        $this->refIdSortiDispoRegion = $refIdSortiDispoRegion;

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

    public function getRefIdSituationIssue(): ?Referentiel
    {
        return $this->refIdSituationIssue;
    }

    public function setRefIdSituationIssue(?Referentiel $refIdSituationIssue): self
    {
        $this->refIdSituationIssue = $refIdSituationIssue;

        return $this;
    }

    public function getRefIdStautFse(): ?Referentiel
    {
        return $this->refIdStautFse;
    }

    public function setRefIdStautFse(?Referentiel $refIdStautFse): self
    {
        $this->refIdStautFse = $refIdStautFse;

        return $this;
    }

    public function getRefIdTypeContratIssue(): ?Referentiel
    {
        return $this->refIdTypeContratIssue;
    }

    public function setRefIdTypeContratIssue(?Referentiel $refIdTypeContratIssue): self
    {
        $this->refIdTypeContratIssue = $refIdTypeContratIssue;

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

    public function getRefIdDomaineEmploiVise(): ?Referentiel
    {
        return $this->refIdDomaineEmploiVise;
    }

    public function setRefIdDomaineEmploiVise(?Referentiel $refIdDomaineEmploiVise): self
    {
        $this->refIdDomaineEmploiVise = $refIdDomaineEmploiVise;

        return $this;
    }

    public function getRefIdSttsortie(): ?Referentiel
    {
        return $this->refIdSttsortie;
    }

    public function setRefIdSttsortie(?Referentiel $refIdSttsortie): self
    {
        $this->refIdSttsortie = $refIdSttsortie;

        return $this;
    }


}
