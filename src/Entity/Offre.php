<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="offre", uniqueConstraints={@ORM\UniqueConstraint(name="offre_pk", columns={"off_id"})}, indexes={@ORM\Index(name="offre_off_uuif8", columns={"off_auteurvinst"}), @ORM\Index(name="offre_off_tgtif", columns={"off_tgroupmnt"}), @ORM\Index(name="offre_off_ccif2", columns={"off_commission"}), @ORM\Index(name="offre_off_ccif", columns={"off_commande"}), @ORM\Index(name="offre_off_rrif", columns={"off_rythme"}), @ORM\Index(name="offre_off_ooif", columns={"off_origine"}), @ORM\Index(name="off_ref_id_secteur_activite_fk", columns={"ref_id_secteur_activite"}), @ORM\Index(name="offre_off_uuif3", columns={"off_auteurdcomm"}), @ORM\Index(name="offre_off_tftif", columns={"off_tfinance"}), @ORM\Index(name="offre_off_uuif6", columns={"off_auteurdfinal"}), @ORM\Index(name="offre_off_uuif5", columns={"off_auteurdevins"}), @ORM\Index(name="offre_off_uuif", columns={"off_auteurv"}), @ORM\Index(name="offre_comission_associe_fk", columns={"com_id"}), @ORM\Index(name="fk_off_psig_fk", columns={"psig_id_bc"}), @ORM\Index(name="offre_off_uuif4", columns={"off_auteurdecint"}), @ORM\Index(name="offre_gpt_entrep_fk", columns={"gpt_id"}), @ORM\Index(name="offre_off_uuif2", columns={"off_auteurposit"}), @ORM\Index(name="off_ets_obsolete_fk", columns={"off_etstitulaire"}), @ORM\Index(name="offre_off_uuif7", columns={"off_auteurresil"})})
 * @ORM\Entity(repositoryClass="App\Repository\OffreRepository")
 */
class Offre
{
    /**
     * @var int
     *
     * @ORM\Column(name="off_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="offre_off_id_seq", allocationSize=1, initialValue=1)
     */
    private $offId;

    /**
     * @var string
     *
     * @ORM\Column(name="off_code", type="string", length=4, nullable=false)
     */
    private $offCode;

    /**
     * @var string
     *
     * @ORM\Column(name="off_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $offEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="off_type", type="decimal", precision=1, scale=0, nullable=false, options={"comment"="1=Initiale, 2=Variante, 3=NegociÃ©e, 4=Demande de Modification"})
     */
    private $offType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_active", type="decimal", precision=1, scale=0, nullable=true, options={"comment"="0=inactive, 1=active"})
     */
    private $offActive;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_dateenvdgal", type="datetime", nullable=true)
     */
    private $offDateenvdgal;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_daterecep", type="datetime", nullable=true)
     */
    private $offDaterecep;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_recevable", type="decimal", precision=1, scale=0, nullable=true, options={"comment"="0=Non Recevable, 1=Recevable"})
     */
    private $offRecevable;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_datecertaine", type="datetime", nullable=true)
     */
    private $offDatecertaine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_varexist", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offVarexist;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_objoffre", type="string", length=300, nullable=true)
     */
    private $offObjoffre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_rangsim", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $offRangsim;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="off_datec", type="datetime", nullable=false)
     */
    private $offDatec;

    /**
     * @var string
     *
     * @ORM\Column(name="off_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $offAuteurc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_datem", type="datetime", nullable=true)
     */
    private $offDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $offAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_datea", type="datetime", nullable=true)
     */
    private $offDatea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $offAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_datev", type="datetime", nullable=true)
     */
    private $offDatev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_deciint", type="decimal", precision=1, scale=0, nullable=true, options={"comment"="1 = ValidÃ©, 2 =  RejetÃ©"})
     */
    private $offDeciint;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_decicom", type="decimal", precision=1, scale=0, nullable=true, options={"comment"="1 = ValidÃ©, 2 =  RejetÃ©"})
     */
    private $offDecicom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_decifinal", type="decimal", precision=1, scale=0, nullable=true, options={"comment"="1 = ValidÃ©, 2 =  RejetÃ©"})
     */
    private $offDecifinal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_decirecond", type="decimal", precision=1, scale=0, nullable=true, options={"comment"="1 = ValidÃ©, 2 =  RejetÃ©"})
     */
    private $offDecirecond;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_decifincom", type="string", length=300, nullable=true)
     */
    private $offDecifincom;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_dateposit", type="datetime", nullable=true)
     */
    private $offDateposit;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_datedcomm", type="datetime", nullable=true)
     */
    private $offDatedcomm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_datedecint", type="datetime", nullable=true)
     */
    private $offDatedecint;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_datedevins", type="datetime", nullable=true)
     */
    private $offDatedevins;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_objdevins", type="string", length=300, nullable=true)
     */
    private $offObjdevins;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_datedfinale", type="datetime", nullable=true)
     */
    private $offDatedfinale;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_dateprevresi", type="datetime", nullable=true)
     */
    private $offDateprevresi;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_dateresil", type="datetime", nullable=true)
     */
    private $offDateresil;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_datevinst", type="datetime", nullable=true)
     */
    private $offDatevinst;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_cledos", type="string", length=32, nullable=true)
     */
    private $offCledos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_retenue", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offRetenue;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_dateods", type="datetime", nullable=true, options={"comment"="Date conservÃ© lors de  l'edition de l'ODS"})
     */
    private $offDateods;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_proaven", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offProaven;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_dureemini", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $offDureemini;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_dureemaxi", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $offDureemaxi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_alternance", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offAlternance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_hebdocent", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $offHebdocent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_hebdoent", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $offHebdoent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_nbvisestag", type="decimal", precision=5, scale=0, nullable=true)
     */
    private $offNbvisestag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_agreremu", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offAgreremu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_hstagremu", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $offHstagremu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_maxistagremu", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $offMaxistagremu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_nbhrcent", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $offNbhrcent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_nbhrent", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $offNbhrent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_finsaisie", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offFinsaisie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_numenv", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $offNumenv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_codbudget", type="string", length=2, nullable=true)
     */
    private $offCodbudget;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_exbudget", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $offExbudget;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_meeng", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $offMeeng;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_refarianne", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offRefarianne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_comarianne", type="string", length=210, nullable=true)
     */
    private $offComarianne;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_datevdmd", type="datetime", nullable=true)
     */
    private $offDatevdmd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_mntinit", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $offMntinit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_nbuinit", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $offNbuinit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_marcann", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $offMarcann;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_marcnum", type="decimal", precision=5, scale=0, nullable=true)
     */
    private $offMarcnum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_mbcid", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $offMbcid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_dtdebexe", type="datetime", nullable=true, options={"comment"="Copie de la date debut de la commande originale (demandes de modif)"})
     */
    private $offDtdebexe;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_dtfinexe", type="datetime", nullable=true, options={"comment"="Copie de la date fin de la commande originale (demandes de modif)"})
     */
    private $offDtfinexe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_forpro", type="string", length=1, nullable=true, options={"comment"="0 ou null = Non importÃ©, 1 = ImportÃ©, 2 = Dossier dont l''origine est un dossier importÃ©"})
     */
    private $offForpro;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_dateimp", type="datetime", nullable=true)
     */
    private $offDateimp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_auteurimp", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $offAuteurimp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_num_marche", type="string", length=20, nullable=true)
     */
    private $offNumMarche;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_detail_par_produit", type="string", length=1, nullable=true)
     */
    private $offDetailParProduit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_flg_sans_bdp_marche", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offFlgSansBdpMarche;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_acm_orga_resp_nom", type="string", length=200, nullable=true)
     */
    private $offAcmOrgaRespNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_acm_orga_resp_tel", type="string", length=20, nullable=true)
     */
    private $offAcmOrgaRespTel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_acm_orga_resp_mail", type="string", length=100, nullable=true)
     */
    private $offAcmOrgaRespMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_acm_orga_resp_id_tus", type="string", length=20, nullable=true)
     */
    private $offAcmOrgaRespIdTus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_flg_version_toilettee", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offFlgVersionToilettee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_commentaire", type="string", length=2000, nullable=true)
     */
    private $offCommentaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_flg_envoi_finance", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offFlgEnvoiFinance;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_date_envoi_finance", type="datetime", nullable=true)
     */
    private $offDateEnvoiFinance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_flg_dmde_par_of", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offFlgDmdeParOf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_num_etat_rglt_finance", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $offNumEtatRgltFinance;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_dt_ar_bc", type="date", nullable=true)
     */
    private $offDtArBc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_dt_fin_marche_vrai", type="date", nullable=true)
     */
    private $offDtFinMarcheVrai;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_numero_offre_passation", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $offNumeroOffrePassation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_zone_de_formation", type="string", length=2000, nullable=true)
     */
    private $offZoneDeFormation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_code_formation_prof", type="string", length=100, nullable=true)
     */
    private $offCodeFormationProf;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_date_ar_notif", type="date", nullable=true)
     */
    private $offDateArNotif;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_date_envoi_notif", type="date", nullable=true)
     */
    private $offDateEnvoiNotif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_mt_revise_ht", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $offMtReviseHt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_mt_revise_ttc", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $offMtReviseTtc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_zone_de_formation_dept", type="string", length=200, nullable=true)
     */
    private $offZoneDeFormationDept;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_flg_dmd_en_cours", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offFlgDmdEnCours;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_flg_dmd_fiche_action", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offFlgDmdFicheAction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_flg_champ_oblig_rens", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offFlgChampObligRens;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_flg_bc_telecharge", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offFlgBcTelecharge;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_dt_telecharge_bc", type="datetime", nullable=true)
     */
    private $offDtTelechargeBc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_auteur_telecharge", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $offAuteurTelecharge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_flg_dmd_autre", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offFlgDmdAutre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_dt_der_telecharge_bc", type="datetime", nullable=true)
     */
    private $offDtDerTelechargeBc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_num_rectificatif", type="decimal", precision=2, scale=0, nullable=true)
     */
    private $offNumRectificatif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_comm_dmd_fiche_action", type="string", length=2000, nullable=true)
     */
    private $offCommDmdFicheAction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_flg_modif_dates", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offFlgModifDates;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_flg_modif_bdc_marche", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offFlgModifBdcMarche;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_flg_modif_bdc_sstrait", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offFlgModifBdcSstrait;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_comm_dmd_autre", type="string", length=2000, nullable=true)
     */
    private $offCommDmdAutre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_flg_dmd_ajout_sstrait", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offFlgDmdAjoutSstrait;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_flg_gere_emargos", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offFlgGereEmargos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_objet_avenant", type="string", length=2000, nullable=true)
     */
    private $offObjetAvenant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_motivation_dmd_modif", type="string", length=2000, nullable=true)
     */
    private $offMotivationDmdModif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_details_signataire", type="string", length=300, nullable=true)
     */
    private $offDetailsSignataire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_public_vise", type="string", length=50, nullable=true)
     */
    private $offPublicVise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_eff_vise_total", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $offEffViseTotal;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_dtdebexe_initiale", type="date", nullable=true)
     */
    private $offDtdebexeInitiale;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_dtfinexe_initiale", type="date", nullable=true)
     */
    private $offDtfinexeInitiale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_flg_a_ete_active", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offFlgAEteActive;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_effectif_vise", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $offEffectifVise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_flg_maj_dt_stagiaire", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offFlgMajDtStagiaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_flg_change_titulaire", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offFlgChangeTitulaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_flg_sais_reg_bc_cloturee", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offFlgSaisRegBcCloturee;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="off_dt_deb_emargos", type="date", nullable=true)
     */
    private $offDtDebEmargos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_flg_payeur_gere_avance", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offFlgPayeurGereAvance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_flg_bc_signe_elec", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offFlgBcSigneElec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_cor_entengag", type="decimal", precision=12, scale=0, nullable=true)
     */
    private $offCorEntengag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_flg_bc_a_signer_elec", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offFlgBcASignerElec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_flg_pas_revise", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $offFlgPasRevise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_acc_cadre_libelle", type="string", length=255, nullable=true)
     */
    private $offAccCadreLibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_acc_cadre_reference", type="string", length=20, nullable=true)
     */
    private $offAccCadreReference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_acc_cadre_lot_numero", type="string", length=6, nullable=true)
     */
    private $offAccCadreLotNumero;

    /**
     * @var string|null
     *
     * @ORM\Column(name="off_acc_cadre_lot_libelle", type="string", length=500, nullable=true)
     */
    private $offAccCadreLotLibelle;

    /**
     * @var \PieceSignee
     *
     * @ORM\ManyToOne(targetEntity="PieceSignee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="psig_id_bc", referencedColumnName="psig_id")
     * })
     */
    private $psigIdBc;

    /**
     * @var \Commission
     *
     * @ORM\ManyToOne(targetEntity="Commission")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="com_id", referencedColumnName="com_id")
     * })
     */
    private $com;

    /**
     * @var \Groupement
     *
     * @ORM\ManyToOne(targetEntity="Groupement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gpt_id", referencedColumnName="gpt_id")
     * })
     */
    private $gpt;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_commande", referencedColumnName="cmd_id")
     * })
     */
    private $offCommande;

    /**
     * @var \Commission
     *
     * @ORM\ManyToOne(targetEntity="Commission")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_commission", referencedColumnName="com_id")
     * })
     */
    private $offCommission;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_origine", referencedColumnName="off_id")
     * })
     */
    private $offOrigine;

    /**
     * @var \Rythme
     *
     * @ORM\ManyToOne(targetEntity="Rythme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_rythme", referencedColumnName="ryt_id")
     * })
     */
    private $offRythme;

    /**
     * @var \TFinancement
     *
     * @ORM\ManyToOne(targetEntity="TFinancement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_tfinance", referencedColumnName="tfi_id")
     * })
     */
    private $offTfinance;

    /**
     * @var \TGroupement
     *
     * @ORM\ManyToOne(targetEntity="TGroupement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_tgroupmnt", referencedColumnName="tgr_id")
     * })
     */
    private $offTgroupmnt;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_auteurv", referencedColumnName="uti_id")
     * })
     */
    private $offAuteurv;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_auteurposit", referencedColumnName="uti_id")
     * })
     */
    private $offAuteurposit;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_auteurdcomm", referencedColumnName="uti_id")
     * })
     */
    private $offAuteurdcomm;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_auteurdecint", referencedColumnName="uti_id")
     * })
     */
    private $offAuteurdecint;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_auteurdevins", referencedColumnName="uti_id")
     * })
     */
    private $offAuteurdevins;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_auteurdfinal", referencedColumnName="uti_id")
     * })
     */
    private $offAuteurdfinal;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_auteurresil", referencedColumnName="uti_id")
     * })
     */
    private $offAuteurresil;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_auteurvinst", referencedColumnName="uti_id")
     * })
     */
    private $offAuteurvinst;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_etstitulaire", referencedColumnName="ets_id")
     * })
     */
    private $offEtstitulaire;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_secteur_activite", referencedColumnName="ref_id")
     * })
     */
    private $refIdSecteurActivite;

    /**
     * @var \OffreModule
     *
     * @ORM\OneToMany(targetEntity="OffreModule", mappedBy="off",  fetch="EAGER")
     *
     */
    private $ofmou;

    /**
     * @var \Convention
     *
     * @ORM\OneToMany(targetEntity="Convention", mappedBy="cvtOffre",  fetch="EAGER")

     */
    private $cvt;

    /**
     * Offre constructor.
     */
    public function __construct()
    {
        $this->ofmou = new ArrayCollection();
        $this->cvt = new ArrayCollection();
    }

    public function getOffId(): ?int
    {
        return $this->offId;
    }

    public function getOffCode(): ?string
    {
        return $this->offCode;
    }

    public function setOffCode(string $offCode): self
    {
        $this->offCode = $offCode;

        return $this;
    }

    public function getOffEtat(): ?string
    {
        return $this->offEtat;
    }

    public function setOffEtat(string $offEtat): self
    {
        $this->offEtat = $offEtat;

        return $this;
    }

    public function getOffType(): ?string
    {
        return $this->offType;
    }

    public function setOffType(string $offType): self
    {
        $this->offType = $offType;

        return $this;
    }

    public function getOffActive(): ?string
    {
        return $this->offActive;
    }

    public function setOffActive(?string $offActive): self
    {
        $this->offActive = $offActive;

        return $this;
    }

    public function getOffDateenvdgal(): ?\DateTimeInterface
    {
        return $this->offDateenvdgal;
    }

    public function setOffDateenvdgal(?\DateTimeInterface $offDateenvdgal): self
    {
        $this->offDateenvdgal = $offDateenvdgal;

        return $this;
    }

    public function getOffDaterecep(): ?\DateTimeInterface
    {
        return $this->offDaterecep;
    }

    public function setOffDaterecep(?\DateTimeInterface $offDaterecep): self
    {
        $this->offDaterecep = $offDaterecep;

        return $this;
    }

    public function getOffRecevable(): ?string
    {
        return $this->offRecevable;
    }

    public function setOffRecevable(?string $offRecevable): self
    {
        $this->offRecevable = $offRecevable;

        return $this;
    }

    public function getOffDatecertaine(): ?\DateTimeInterface
    {
        return $this->offDatecertaine;
    }

    public function setOffDatecertaine(?\DateTimeInterface $offDatecertaine): self
    {
        $this->offDatecertaine = $offDatecertaine;

        return $this;
    }

    public function getOffVarexist(): ?string
    {
        return $this->offVarexist;
    }

    public function setOffVarexist(?string $offVarexist): self
    {
        $this->offVarexist = $offVarexist;

        return $this;
    }

    public function getOffObjoffre(): ?string
    {
        return $this->offObjoffre;
    }

    public function setOffObjoffre(?string $offObjoffre): self
    {
        $this->offObjoffre = $offObjoffre;

        return $this;
    }

    public function getOffRangsim(): ?string
    {
        return $this->offRangsim;
    }

    public function setOffRangsim(?string $offRangsim): self
    {
        $this->offRangsim = $offRangsim;

        return $this;
    }

    public function getOffDatec(): ?\DateTimeInterface
    {
        return $this->offDatec;
    }

    public function setOffDatec(\DateTimeInterface $offDatec): self
    {
        $this->offDatec = $offDatec;

        return $this;
    }

    public function getOffAuteurc(): ?string
    {
        return $this->offAuteurc;
    }

    public function setOffAuteurc(string $offAuteurc): self
    {
        $this->offAuteurc = $offAuteurc;

        return $this;
    }

    public function getOffDatem(): ?\DateTimeInterface
    {
        return $this->offDatem;
    }

    public function setOffDatem(?\DateTimeInterface $offDatem): self
    {
        $this->offDatem = $offDatem;

        return $this;
    }

    public function getOffAuteurm(): ?string
    {
        return $this->offAuteurm;
    }

    public function setOffAuteurm(?string $offAuteurm): self
    {
        $this->offAuteurm = $offAuteurm;

        return $this;
    }

    public function getOffDatea(): ?\DateTimeInterface
    {
        return $this->offDatea;
    }

    public function setOffDatea(?\DateTimeInterface $offDatea): self
    {
        $this->offDatea = $offDatea;

        return $this;
    }

    public function getOffAuteura(): ?string
    {
        return $this->offAuteura;
    }

    public function setOffAuteura(?string $offAuteura): self
    {
        $this->offAuteura = $offAuteura;

        return $this;
    }

    public function getOffDatev(): ?\DateTimeInterface
    {
        return $this->offDatev;
    }

    public function setOffDatev(?\DateTimeInterface $offDatev): self
    {
        $this->offDatev = $offDatev;

        return $this;
    }

    public function getOffDeciint(): ?string
    {
        return $this->offDeciint;
    }

    public function setOffDeciint(?string $offDeciint): self
    {
        $this->offDeciint = $offDeciint;

        return $this;
    }

    public function getOffDecicom(): ?string
    {
        return $this->offDecicom;
    }

    public function setOffDecicom(?string $offDecicom): self
    {
        $this->offDecicom = $offDecicom;

        return $this;
    }

    public function getOffDecifinal(): ?string
    {
        return $this->offDecifinal;
    }

    public function setOffDecifinal(?string $offDecifinal): self
    {
        $this->offDecifinal = $offDecifinal;

        return $this;
    }

    public function getOffDecirecond(): ?string
    {
        return $this->offDecirecond;
    }

    public function setOffDecirecond(?string $offDecirecond): self
    {
        $this->offDecirecond = $offDecirecond;

        return $this;
    }

    public function getOffDecifincom(): ?string
    {
        return $this->offDecifincom;
    }

    public function setOffDecifincom(?string $offDecifincom): self
    {
        $this->offDecifincom = $offDecifincom;

        return $this;
    }

    public function getOffDateposit(): ?\DateTimeInterface
    {
        return $this->offDateposit;
    }

    public function setOffDateposit(?\DateTimeInterface $offDateposit): self
    {
        $this->offDateposit = $offDateposit;

        return $this;
    }

    public function getOffDatedcomm(): ?\DateTimeInterface
    {
        return $this->offDatedcomm;
    }

    public function setOffDatedcomm(?\DateTimeInterface $offDatedcomm): self
    {
        $this->offDatedcomm = $offDatedcomm;

        return $this;
    }

    public function getOffDatedecint(): ?\DateTimeInterface
    {
        return $this->offDatedecint;
    }

    public function setOffDatedecint(?\DateTimeInterface $offDatedecint): self
    {
        $this->offDatedecint = $offDatedecint;

        return $this;
    }

    public function getOffDatedevins(): ?\DateTimeInterface
    {
        return $this->offDatedevins;
    }

    public function setOffDatedevins(?\DateTimeInterface $offDatedevins): self
    {
        $this->offDatedevins = $offDatedevins;

        return $this;
    }

    public function getOffObjdevins(): ?string
    {
        return $this->offObjdevins;
    }

    public function setOffObjdevins(?string $offObjdevins): self
    {
        $this->offObjdevins = $offObjdevins;

        return $this;
    }

    public function getOffDatedfinale(): ?\DateTimeInterface
    {
        return $this->offDatedfinale;
    }

    public function setOffDatedfinale(?\DateTimeInterface $offDatedfinale): self
    {
        $this->offDatedfinale = $offDatedfinale;

        return $this;
    }

    public function getOffDateprevresi(): ?\DateTimeInterface
    {
        return $this->offDateprevresi;
    }

    public function setOffDateprevresi(?\DateTimeInterface $offDateprevresi): self
    {
        $this->offDateprevresi = $offDateprevresi;

        return $this;
    }

    public function getOffDateresil(): ?\DateTimeInterface
    {
        return $this->offDateresil;
    }

    public function setOffDateresil(?\DateTimeInterface $offDateresil): self
    {
        $this->offDateresil = $offDateresil;

        return $this;
    }

    public function getOffDatevinst(): ?\DateTimeInterface
    {
        return $this->offDatevinst;
    }

    public function setOffDatevinst(?\DateTimeInterface $offDatevinst): self
    {
        $this->offDatevinst = $offDatevinst;

        return $this;
    }

    public function getOffCledos(): ?string
    {
        return $this->offCledos;
    }

    public function setOffCledos(?string $offCledos): self
    {
        $this->offCledos = $offCledos;

        return $this;
    }

    public function getOffRetenue(): ?string
    {
        return $this->offRetenue;
    }

    public function setOffRetenue(?string $offRetenue): self
    {
        $this->offRetenue = $offRetenue;

        return $this;
    }

    public function getOffDateods(): ?\DateTimeInterface
    {
        return $this->offDateods;
    }

    public function setOffDateods(?\DateTimeInterface $offDateods): self
    {
        $this->offDateods = $offDateods;

        return $this;
    }

    public function getOffProaven(): ?string
    {
        return $this->offProaven;
    }

    public function setOffProaven(?string $offProaven): self
    {
        $this->offProaven = $offProaven;

        return $this;
    }

    public function getOffDureemini(): ?string
    {
        return $this->offDureemini;
    }

    public function setOffDureemini(?string $offDureemini): self
    {
        $this->offDureemini = $offDureemini;

        return $this;
    }

    public function getOffDureemaxi(): ?string
    {
        return $this->offDureemaxi;
    }

    public function setOffDureemaxi(?string $offDureemaxi): self
    {
        $this->offDureemaxi = $offDureemaxi;

        return $this;
    }

    public function getOffAlternance(): ?string
    {
        return $this->offAlternance;
    }

    public function setOffAlternance(?string $offAlternance): self
    {
        $this->offAlternance = $offAlternance;

        return $this;
    }

    public function getOffHebdocent(): ?string
    {
        return $this->offHebdocent;
    }

    public function setOffHebdocent(?string $offHebdocent): self
    {
        $this->offHebdocent = $offHebdocent;

        return $this;
    }

    public function getOffHebdoent(): ?string
    {
        return $this->offHebdoent;
    }

    public function setOffHebdoent(?string $offHebdoent): self
    {
        $this->offHebdoent = $offHebdoent;

        return $this;
    }

    public function getOffNbvisestag(): ?string
    {
        return $this->offNbvisestag;
    }

    public function setOffNbvisestag(?string $offNbvisestag): self
    {
        $this->offNbvisestag = $offNbvisestag;

        return $this;
    }

    public function getOffAgreremu(): ?string
    {
        return $this->offAgreremu;
    }

    public function setOffAgreremu(?string $offAgreremu): self
    {
        $this->offAgreremu = $offAgreremu;

        return $this;
    }

    public function getOffHstagremu(): ?string
    {
        return $this->offHstagremu;
    }

    public function setOffHstagremu(?string $offHstagremu): self
    {
        $this->offHstagremu = $offHstagremu;

        return $this;
    }

    public function getOffMaxistagremu(): ?string
    {
        return $this->offMaxistagremu;
    }

    public function setOffMaxistagremu(?string $offMaxistagremu): self
    {
        $this->offMaxistagremu = $offMaxistagremu;

        return $this;
    }

    public function getOffNbhrcent(): ?string
    {
        return $this->offNbhrcent;
    }

    public function setOffNbhrcent(?string $offNbhrcent): self
    {
        $this->offNbhrcent = $offNbhrcent;

        return $this;
    }

    public function getOffNbhrent(): ?string
    {
        return $this->offNbhrent;
    }

    public function setOffNbhrent(?string $offNbhrent): self
    {
        $this->offNbhrent = $offNbhrent;

        return $this;
    }

    public function getOffFinsaisie(): ?string
    {
        return $this->offFinsaisie;
    }

    public function setOffFinsaisie(?string $offFinsaisie): self
    {
        $this->offFinsaisie = $offFinsaisie;

        return $this;
    }

    public function getOffNumenv(): ?string
    {
        return $this->offNumenv;
    }

    public function setOffNumenv(?string $offNumenv): self
    {
        $this->offNumenv = $offNumenv;

        return $this;
    }

    public function getOffCodbudget(): ?string
    {
        return $this->offCodbudget;
    }

    public function setOffCodbudget(?string $offCodbudget): self
    {
        $this->offCodbudget = $offCodbudget;

        return $this;
    }

    public function getOffExbudget(): ?string
    {
        return $this->offExbudget;
    }

    public function setOffExbudget(?string $offExbudget): self
    {
        $this->offExbudget = $offExbudget;

        return $this;
    }

    public function getOffMeeng(): ?string
    {
        return $this->offMeeng;
    }

    public function setOffMeeng(?string $offMeeng): self
    {
        $this->offMeeng = $offMeeng;

        return $this;
    }

    public function getOffRefarianne(): ?string
    {
        return $this->offRefarianne;
    }

    public function setOffRefarianne(?string $offRefarianne): self
    {
        $this->offRefarianne = $offRefarianne;

        return $this;
    }

    public function getOffComarianne(): ?string
    {
        return $this->offComarianne;
    }

    public function setOffComarianne(?string $offComarianne): self
    {
        $this->offComarianne = $offComarianne;

        return $this;
    }

    public function getOffDatevdmd(): ?\DateTimeInterface
    {
        return $this->offDatevdmd;
    }

    public function setOffDatevdmd(?\DateTimeInterface $offDatevdmd): self
    {
        $this->offDatevdmd = $offDatevdmd;

        return $this;
    }

    public function getOffMntinit(): ?string
    {
        return $this->offMntinit;
    }

    public function setOffMntinit(?string $offMntinit): self
    {
        $this->offMntinit = $offMntinit;

        return $this;
    }

    public function getOffNbuinit(): ?string
    {
        return $this->offNbuinit;
    }

    public function setOffNbuinit(?string $offNbuinit): self
    {
        $this->offNbuinit = $offNbuinit;

        return $this;
    }

    public function getOffMarcann(): ?string
    {
        return $this->offMarcann;
    }

    public function setOffMarcann(?string $offMarcann): self
    {
        $this->offMarcann = $offMarcann;

        return $this;
    }

    public function getOffMarcnum(): ?string
    {
        return $this->offMarcnum;
    }

    public function setOffMarcnum(?string $offMarcnum): self
    {
        $this->offMarcnum = $offMarcnum;

        return $this;
    }

    public function getOffMbcid(): ?string
    {
        return $this->offMbcid;
    }

    public function setOffMbcid(?string $offMbcid): self
    {
        $this->offMbcid = $offMbcid;

        return $this;
    }

    public function getOffDtdebexe(): ?\DateTimeInterface
    {
        return $this->offDtdebexe;
    }

    public function setOffDtdebexe(?\DateTimeInterface $offDtdebexe): self
    {
        $this->offDtdebexe = $offDtdebexe;

        return $this;
    }

    public function getOffDtfinexe(): ?\DateTimeInterface
    {
        return $this->offDtfinexe;
    }

    public function setOffDtfinexe(?\DateTimeInterface $offDtfinexe): self
    {
        $this->offDtfinexe = $offDtfinexe;

        return $this;
    }

    public function getOffForpro(): ?string
    {
        return $this->offForpro;
    }

    public function setOffForpro(?string $offForpro): self
    {
        $this->offForpro = $offForpro;

        return $this;
    }

    public function getOffDateimp(): ?\DateTimeInterface
    {
        return $this->offDateimp;
    }

    public function setOffDateimp(?\DateTimeInterface $offDateimp): self
    {
        $this->offDateimp = $offDateimp;

        return $this;
    }

    public function getOffAuteurimp(): ?string
    {
        return $this->offAuteurimp;
    }

    public function setOffAuteurimp(?string $offAuteurimp): self
    {
        $this->offAuteurimp = $offAuteurimp;

        return $this;
    }

    public function getOffNumMarche(): ?string
    {
        return $this->offNumMarche;
    }

    public function setOffNumMarche(?string $offNumMarche): self
    {
        $this->offNumMarche = $offNumMarche;

        return $this;
    }

    public function getOffDetailParProduit(): ?string
    {
        return $this->offDetailParProduit;
    }

    public function setOffDetailParProduit(?string $offDetailParProduit): self
    {
        $this->offDetailParProduit = $offDetailParProduit;

        return $this;
    }

    public function getOffFlgSansBdpMarche(): ?string
    {
        return $this->offFlgSansBdpMarche;
    }

    public function setOffFlgSansBdpMarche(?string $offFlgSansBdpMarche): self
    {
        $this->offFlgSansBdpMarche = $offFlgSansBdpMarche;

        return $this;
    }

    public function getOffAcmOrgaRespNom(): ?string
    {
        return $this->offAcmOrgaRespNom;
    }

    public function setOffAcmOrgaRespNom(?string $offAcmOrgaRespNom): self
    {
        $this->offAcmOrgaRespNom = $offAcmOrgaRespNom;

        return $this;
    }

    public function getOffAcmOrgaRespTel(): ?string
    {
        return $this->offAcmOrgaRespTel;
    }

    public function setOffAcmOrgaRespTel(?string $offAcmOrgaRespTel): self
    {
        $this->offAcmOrgaRespTel = $offAcmOrgaRespTel;

        return $this;
    }

    public function getOffAcmOrgaRespMail(): ?string
    {
        return $this->offAcmOrgaRespMail;
    }

    public function setOffAcmOrgaRespMail(?string $offAcmOrgaRespMail): self
    {
        $this->offAcmOrgaRespMail = $offAcmOrgaRespMail;

        return $this;
    }

    public function getOffAcmOrgaRespIdTus(): ?string
    {
        return $this->offAcmOrgaRespIdTus;
    }

    public function setOffAcmOrgaRespIdTus(?string $offAcmOrgaRespIdTus): self
    {
        $this->offAcmOrgaRespIdTus = $offAcmOrgaRespIdTus;

        return $this;
    }

    public function getOffFlgVersionToilettee(): ?string
    {
        return $this->offFlgVersionToilettee;
    }

    public function setOffFlgVersionToilettee(?string $offFlgVersionToilettee): self
    {
        $this->offFlgVersionToilettee = $offFlgVersionToilettee;

        return $this;
    }

    public function getOffCommentaire(): ?string
    {
        return $this->offCommentaire;
    }

    public function setOffCommentaire(?string $offCommentaire): self
    {
        $this->offCommentaire = $offCommentaire;

        return $this;
    }

    public function getOffFlgEnvoiFinance(): ?string
    {
        return $this->offFlgEnvoiFinance;
    }

    public function setOffFlgEnvoiFinance(?string $offFlgEnvoiFinance): self
    {
        $this->offFlgEnvoiFinance = $offFlgEnvoiFinance;

        return $this;
    }

    public function getOffDateEnvoiFinance(): ?\DateTimeInterface
    {
        return $this->offDateEnvoiFinance;
    }

    public function setOffDateEnvoiFinance(?\DateTimeInterface $offDateEnvoiFinance): self
    {
        $this->offDateEnvoiFinance = $offDateEnvoiFinance;

        return $this;
    }

    public function getOffFlgDmdeParOf(): ?string
    {
        return $this->offFlgDmdeParOf;
    }

    public function setOffFlgDmdeParOf(?string $offFlgDmdeParOf): self
    {
        $this->offFlgDmdeParOf = $offFlgDmdeParOf;

        return $this;
    }

    public function getOffNumEtatRgltFinance(): ?string
    {
        return $this->offNumEtatRgltFinance;
    }

    public function setOffNumEtatRgltFinance(?string $offNumEtatRgltFinance): self
    {
        $this->offNumEtatRgltFinance = $offNumEtatRgltFinance;

        return $this;
    }

    public function getOffDtArBc(): ?\DateTimeInterface
    {
        return $this->offDtArBc;
    }

    public function setOffDtArBc(?\DateTimeInterface $offDtArBc): self
    {
        $this->offDtArBc = $offDtArBc;

        return $this;
    }

    public function getOffDtFinMarcheVrai(): ?\DateTimeInterface
    {
        return $this->offDtFinMarcheVrai;
    }

    public function setOffDtFinMarcheVrai(?\DateTimeInterface $offDtFinMarcheVrai): self
    {
        $this->offDtFinMarcheVrai = $offDtFinMarcheVrai;

        return $this;
    }

    public function getOffNumeroOffrePassation(): ?string
    {
        return $this->offNumeroOffrePassation;
    }

    public function setOffNumeroOffrePassation(?string $offNumeroOffrePassation): self
    {
        $this->offNumeroOffrePassation = $offNumeroOffrePassation;

        return $this;
    }

    public function getOffZoneDeFormation(): ?string
    {
        return $this->offZoneDeFormation;
    }

    public function setOffZoneDeFormation(?string $offZoneDeFormation): self
    {
        $this->offZoneDeFormation = $offZoneDeFormation;

        return $this;
    }

    public function getOffCodeFormationProf(): ?string
    {
        return $this->offCodeFormationProf;
    }

    public function setOffCodeFormationProf(?string $offCodeFormationProf): self
    {
        $this->offCodeFormationProf = $offCodeFormationProf;

        return $this;
    }

    public function getOffDateArNotif(): ?\DateTimeInterface
    {
        return $this->offDateArNotif;
    }

    public function setOffDateArNotif(?\DateTimeInterface $offDateArNotif): self
    {
        $this->offDateArNotif = $offDateArNotif;

        return $this;
    }

    public function getOffDateEnvoiNotif(): ?\DateTimeInterface
    {
        return $this->offDateEnvoiNotif;
    }

    public function setOffDateEnvoiNotif(?\DateTimeInterface $offDateEnvoiNotif): self
    {
        $this->offDateEnvoiNotif = $offDateEnvoiNotif;

        return $this;
    }

    public function getOffMtReviseHt(): ?string
    {
        return $this->offMtReviseHt;
    }

    public function setOffMtReviseHt(?string $offMtReviseHt): self
    {
        $this->offMtReviseHt = $offMtReviseHt;

        return $this;
    }

    public function getOffMtReviseTtc(): ?string
    {
        return $this->offMtReviseTtc;
    }

    public function setOffMtReviseTtc(?string $offMtReviseTtc): self
    {
        $this->offMtReviseTtc = $offMtReviseTtc;

        return $this;
    }

    public function getOffZoneDeFormationDept(): ?string
    {
        return $this->offZoneDeFormationDept;
    }

    public function setOffZoneDeFormationDept(?string $offZoneDeFormationDept): self
    {
        $this->offZoneDeFormationDept = $offZoneDeFormationDept;

        return $this;
    }

    public function getOffFlgDmdEnCours(): ?string
    {
        return $this->offFlgDmdEnCours;
    }

    public function setOffFlgDmdEnCours(?string $offFlgDmdEnCours): self
    {
        $this->offFlgDmdEnCours = $offFlgDmdEnCours;

        return $this;
    }

    public function getOffFlgDmdFicheAction(): ?string
    {
        return $this->offFlgDmdFicheAction;
    }

    public function setOffFlgDmdFicheAction(?string $offFlgDmdFicheAction): self
    {
        $this->offFlgDmdFicheAction = $offFlgDmdFicheAction;

        return $this;
    }

    public function getOffFlgChampObligRens(): ?string
    {
        return $this->offFlgChampObligRens;
    }

    public function setOffFlgChampObligRens(?string $offFlgChampObligRens): self
    {
        $this->offFlgChampObligRens = $offFlgChampObligRens;

        return $this;
    }

    public function getOffFlgBcTelecharge(): ?string
    {
        return $this->offFlgBcTelecharge;
    }

    public function setOffFlgBcTelecharge(?string $offFlgBcTelecharge): self
    {
        $this->offFlgBcTelecharge = $offFlgBcTelecharge;

        return $this;
    }

    public function getOffDtTelechargeBc(): ?\DateTimeInterface
    {
        return $this->offDtTelechargeBc;
    }

    public function setOffDtTelechargeBc(?\DateTimeInterface $offDtTelechargeBc): self
    {
        $this->offDtTelechargeBc = $offDtTelechargeBc;

        return $this;
    }

    public function getOffAuteurTelecharge(): ?string
    {
        return $this->offAuteurTelecharge;
    }

    public function setOffAuteurTelecharge(?string $offAuteurTelecharge): self
    {
        $this->offAuteurTelecharge = $offAuteurTelecharge;

        return $this;
    }

    public function getOffFlgDmdAutre(): ?string
    {
        return $this->offFlgDmdAutre;
    }

    public function setOffFlgDmdAutre(?string $offFlgDmdAutre): self
    {
        $this->offFlgDmdAutre = $offFlgDmdAutre;

        return $this;
    }

    public function getOffDtDerTelechargeBc(): ?\DateTimeInterface
    {
        return $this->offDtDerTelechargeBc;
    }

    public function setOffDtDerTelechargeBc(?\DateTimeInterface $offDtDerTelechargeBc): self
    {
        $this->offDtDerTelechargeBc = $offDtDerTelechargeBc;

        return $this;
    }

    public function getOffNumRectificatif(): ?string
    {
        return $this->offNumRectificatif;
    }

    public function setOffNumRectificatif(?string $offNumRectificatif): self
    {
        $this->offNumRectificatif = $offNumRectificatif;

        return $this;
    }

    public function getOffCommDmdFicheAction(): ?string
    {
        return $this->offCommDmdFicheAction;
    }

    public function setOffCommDmdFicheAction(?string $offCommDmdFicheAction): self
    {
        $this->offCommDmdFicheAction = $offCommDmdFicheAction;

        return $this;
    }

    public function getOffFlgModifDates(): ?string
    {
        return $this->offFlgModifDates;
    }

    public function setOffFlgModifDates(?string $offFlgModifDates): self
    {
        $this->offFlgModifDates = $offFlgModifDates;

        return $this;
    }

    public function getOffFlgModifBdcMarche(): ?string
    {
        return $this->offFlgModifBdcMarche;
    }

    public function setOffFlgModifBdcMarche(?string $offFlgModifBdcMarche): self
    {
        $this->offFlgModifBdcMarche = $offFlgModifBdcMarche;

        return $this;
    }

    public function getOffFlgModifBdcSstrait(): ?string
    {
        return $this->offFlgModifBdcSstrait;
    }

    public function setOffFlgModifBdcSstrait(?string $offFlgModifBdcSstrait): self
    {
        $this->offFlgModifBdcSstrait = $offFlgModifBdcSstrait;

        return $this;
    }

    public function getOffCommDmdAutre(): ?string
    {
        return $this->offCommDmdAutre;
    }

    public function setOffCommDmdAutre(?string $offCommDmdAutre): self
    {
        $this->offCommDmdAutre = $offCommDmdAutre;

        return $this;
    }

    public function getOffFlgDmdAjoutSstrait(): ?string
    {
        return $this->offFlgDmdAjoutSstrait;
    }

    public function setOffFlgDmdAjoutSstrait(?string $offFlgDmdAjoutSstrait): self
    {
        $this->offFlgDmdAjoutSstrait = $offFlgDmdAjoutSstrait;

        return $this;
    }

    public function getOffFlgGereEmargos(): ?string
    {
        return $this->offFlgGereEmargos;
    }

    public function setOffFlgGereEmargos(?string $offFlgGereEmargos): self
    {
        $this->offFlgGereEmargos = $offFlgGereEmargos;

        return $this;
    }

    public function getOffObjetAvenant(): ?string
    {
        return $this->offObjetAvenant;
    }

    public function setOffObjetAvenant(?string $offObjetAvenant): self
    {
        $this->offObjetAvenant = $offObjetAvenant;

        return $this;
    }

    public function getOffMotivationDmdModif(): ?string
    {
        return $this->offMotivationDmdModif;
    }

    public function setOffMotivationDmdModif(?string $offMotivationDmdModif): self
    {
        $this->offMotivationDmdModif = $offMotivationDmdModif;

        return $this;
    }

    public function getOffDetailsSignataire(): ?string
    {
        return $this->offDetailsSignataire;
    }

    public function setOffDetailsSignataire(?string $offDetailsSignataire): self
    {
        $this->offDetailsSignataire = $offDetailsSignataire;

        return $this;
    }

    public function getOffPublicVise(): ?string
    {
        return $this->offPublicVise;
    }

    public function setOffPublicVise(?string $offPublicVise): self
    {
        $this->offPublicVise = $offPublicVise;

        return $this;
    }

    public function getOffEffViseTotal(): ?string
    {
        return $this->offEffViseTotal;
    }

    public function setOffEffViseTotal(?string $offEffViseTotal): self
    {
        $this->offEffViseTotal = $offEffViseTotal;

        return $this;
    }

    public function getOffDtdebexeInitiale(): ?\DateTimeInterface
    {
        return $this->offDtdebexeInitiale;
    }

    public function setOffDtdebexeInitiale(?\DateTimeInterface $offDtdebexeInitiale): self
    {
        $this->offDtdebexeInitiale = $offDtdebexeInitiale;

        return $this;
    }

    public function getOffDtfinexeInitiale(): ?\DateTimeInterface
    {
        return $this->offDtfinexeInitiale;
    }

    public function setOffDtfinexeInitiale(?\DateTimeInterface $offDtfinexeInitiale): self
    {
        $this->offDtfinexeInitiale = $offDtfinexeInitiale;

        return $this;
    }

    public function getOffFlgAEteActive(): ?string
    {
        return $this->offFlgAEteActive;
    }

    public function setOffFlgAEteActive(?string $offFlgAEteActive): self
    {
        $this->offFlgAEteActive = $offFlgAEteActive;

        return $this;
    }

    public function getOffEffectifVise(): ?string
    {
        return $this->offEffectifVise;
    }

    public function setOffEffectifVise(?string $offEffectifVise): self
    {
        $this->offEffectifVise = $offEffectifVise;

        return $this;
    }

    public function getOffFlgMajDtStagiaire(): ?string
    {
        return $this->offFlgMajDtStagiaire;
    }

    public function setOffFlgMajDtStagiaire(?string $offFlgMajDtStagiaire): self
    {
        $this->offFlgMajDtStagiaire = $offFlgMajDtStagiaire;

        return $this;
    }

    public function getOffFlgChangeTitulaire(): ?string
    {
        return $this->offFlgChangeTitulaire;
    }

    public function setOffFlgChangeTitulaire(?string $offFlgChangeTitulaire): self
    {
        $this->offFlgChangeTitulaire = $offFlgChangeTitulaire;

        return $this;
    }

    public function getOffFlgSaisRegBcCloturee(): ?string
    {
        return $this->offFlgSaisRegBcCloturee;
    }

    public function setOffFlgSaisRegBcCloturee(?string $offFlgSaisRegBcCloturee): self
    {
        $this->offFlgSaisRegBcCloturee = $offFlgSaisRegBcCloturee;

        return $this;
    }

    public function getOffDtDebEmargos(): ?\DateTimeInterface
    {
        return $this->offDtDebEmargos;
    }

    public function setOffDtDebEmargos(?\DateTimeInterface $offDtDebEmargos): self
    {
        $this->offDtDebEmargos = $offDtDebEmargos;

        return $this;
    }

    public function getOffFlgPayeurGereAvance(): ?string
    {
        return $this->offFlgPayeurGereAvance;
    }

    public function setOffFlgPayeurGereAvance(?string $offFlgPayeurGereAvance): self
    {
        $this->offFlgPayeurGereAvance = $offFlgPayeurGereAvance;

        return $this;
    }

    public function getOffFlgBcSigneElec(): ?string
    {
        return $this->offFlgBcSigneElec;
    }

    public function setOffFlgBcSigneElec(?string $offFlgBcSigneElec): self
    {
        $this->offFlgBcSigneElec = $offFlgBcSigneElec;

        return $this;
    }

    public function getOffCorEntengag(): ?string
    {
        return $this->offCorEntengag;
    }

    public function setOffCorEntengag(?string $offCorEntengag): self
    {
        $this->offCorEntengag = $offCorEntengag;

        return $this;
    }

    public function getOffFlgBcASignerElec(): ?string
    {
        return $this->offFlgBcASignerElec;
    }

    public function setOffFlgBcASignerElec(?string $offFlgBcASignerElec): self
    {
        $this->offFlgBcASignerElec = $offFlgBcASignerElec;

        return $this;
    }

    public function getOffFlgPasRevise(): ?string
    {
        return $this->offFlgPasRevise;
    }

    public function setOffFlgPasRevise(?string $offFlgPasRevise): self
    {
        $this->offFlgPasRevise = $offFlgPasRevise;

        return $this;
    }

    public function getOffAccCadreLibelle(): ?string
    {
        return $this->offAccCadreLibelle;
    }

    public function setOffAccCadreLibelle(?string $offAccCadreLibelle): self
    {
        $this->offAccCadreLibelle = $offAccCadreLibelle;

        return $this;
    }

    public function getOffAccCadreReference(): ?string
    {
        return $this->offAccCadreReference;
    }

    public function setOffAccCadreReference(?string $offAccCadreReference): self
    {
        $this->offAccCadreReference = $offAccCadreReference;

        return $this;
    }

    public function getOffAccCadreLotNumero(): ?string
    {
        return $this->offAccCadreLotNumero;
    }

    public function setOffAccCadreLotNumero(?string $offAccCadreLotNumero): self
    {
        $this->offAccCadreLotNumero = $offAccCadreLotNumero;

        return $this;
    }

    public function getOffAccCadreLotLibelle(): ?string
    {
        return $this->offAccCadreLotLibelle;
    }

    public function setOffAccCadreLotLibelle(?string $offAccCadreLotLibelle): self
    {
        $this->offAccCadreLotLibelle = $offAccCadreLotLibelle;

        return $this;
    }

    public function getPsigIdBc(): ?PieceSignee
    {
        return $this->psigIdBc;
    }

    public function setPsigIdBc(?PieceSignee $psigIdBc): self
    {
        $this->psigIdBc = $psigIdBc;

        return $this;
    }

    public function getCom(): ?Commission
    {
        return $this->com;
    }

    public function setCom(?Commission $com): self
    {
        $this->com = $com;

        return $this;
    }

    public function getGpt(): ?Groupement
    {
        return $this->gpt;
    }

    public function setGpt(?Groupement $gpt): self
    {
        $this->gpt = $gpt;

        return $this;
    }

    public function getOffCommande(): ?Commande
    {
        return $this->offCommande;
    }

    public function setOffCommande(?Commande $offCommande): self
    {
        $this->offCommande = $offCommande;

        return $this;
    }

    public function getOffCommission(): ?Commission
    {
        return $this->offCommission;
    }

    public function setOffCommission(?Commission $offCommission): self
    {
        $this->offCommission = $offCommission;

        return $this;
    }

    public function getOffOrigine(): ?self
    {
        return $this->offOrigine;
    }

    public function setOffOrigine(?self $offOrigine): self
    {
        $this->offOrigine = $offOrigine;

        return $this;
    }

    public function getOffRythme(): ?Rythme
    {
        return $this->offRythme;
    }

    public function setOffRythme(?Rythme $offRythme): self
    {
        $this->offRythme = $offRythme;

        return $this;
    }

    public function getOffTfinance(): ?TFinancement
    {
        return $this->offTfinance;
    }

    public function setOffTfinance(?TFinancement $offTfinance): self
    {
        $this->offTfinance = $offTfinance;

        return $this;
    }

    public function getOffTgroupmnt(): ?TGroupement
    {
        return $this->offTgroupmnt;
    }

    public function setOffTgroupmnt(?TGroupement $offTgroupmnt): self
    {
        $this->offTgroupmnt = $offTgroupmnt;

        return $this;
    }

    public function getOffAuteurv(): ?Utilisateur
    {
        return $this->offAuteurv;
    }

    public function setOffAuteurv(?Utilisateur $offAuteurv): self
    {
        $this->offAuteurv = $offAuteurv;

        return $this;
    }

    public function getOffAuteurposit(): ?Utilisateur
    {
        return $this->offAuteurposit;
    }

    public function setOffAuteurposit(?Utilisateur $offAuteurposit): self
    {
        $this->offAuteurposit = $offAuteurposit;

        return $this;
    }

    public function getOffAuteurdcomm(): ?Utilisateur
    {
        return $this->offAuteurdcomm;
    }

    public function setOffAuteurdcomm(?Utilisateur $offAuteurdcomm): self
    {
        $this->offAuteurdcomm = $offAuteurdcomm;

        return $this;
    }

    public function getOffAuteurdecint(): ?Utilisateur
    {
        return $this->offAuteurdecint;
    }

    public function setOffAuteurdecint(?Utilisateur $offAuteurdecint): self
    {
        $this->offAuteurdecint = $offAuteurdecint;

        return $this;
    }

    public function getOffAuteurdevins(): ?Utilisateur
    {
        return $this->offAuteurdevins;
    }

    public function setOffAuteurdevins(?Utilisateur $offAuteurdevins): self
    {
        $this->offAuteurdevins = $offAuteurdevins;

        return $this;
    }

    public function getOffAuteurdfinal(): ?Utilisateur
    {
        return $this->offAuteurdfinal;
    }

    public function setOffAuteurdfinal(?Utilisateur $offAuteurdfinal): self
    {
        $this->offAuteurdfinal = $offAuteurdfinal;

        return $this;
    }

    public function getOffAuteurresil(): ?Utilisateur
    {
        return $this->offAuteurresil;
    }

    public function setOffAuteurresil(?Utilisateur $offAuteurresil): self
    {
        $this->offAuteurresil = $offAuteurresil;

        return $this;
    }

    public function getOffAuteurvinst(): ?Utilisateur
    {
        return $this->offAuteurvinst;
    }

    public function setOffAuteurvinst(?Utilisateur $offAuteurvinst): self
    {
        $this->offAuteurvinst = $offAuteurvinst;

        return $this;
    }

    public function getOffEtstitulaire(): ?Etablssmt
    {
        return $this->offEtstitulaire;
    }

    public function setOffEtstitulaire(?Etablssmt $offEtstitulaire): self
    {
        $this->offEtstitulaire = $offEtstitulaire;

        return $this;
    }

    public function getRefIdSecteurActivite(): ?Referentiel
    {
        return $this->refIdSecteurActivite;
    }

    public function setRefIdSecteurActivite(?Referentiel $refIdSecteurActivite): self
    {
        $this->refIdSecteurActivite = $refIdSecteurActivite;

        return $this;
    }

    /**
 * @return Collection|OffreModule[]
 */
    public function getOfmou(): Collection
    {
        return $this->ofmou;
    }

    public function addOfmou(OffreModule $ofmou): self
    {
        if (!$this->ofmou->contains($ofmou)) {
            $this->ofmou[] = $ofmou;
            $ofmou->setOff($this);
        }
        return $this;
    }

    public function removeOfmou(OffreModule $ofmou): self
    {
        if ($this->ofmou->contains($ofmou)) {
            $this->ofmou->removeElement($ofmou);
            if ($ofmou->getOff() === $this) {
                $ofmou->setOff(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection|Convention[]
     */
    public function getCvt(): Collection
    {
        return $this->cvt;
    }

    public function addCvt(Convention $cvt): self
    {
        if (!$this->cvt->contains($cvt)) {
            $this->cvt[] = $cvt;
            $cvt->setCvtOffre($this);
        }
        return $this;
    }

    public function removeCvt(Convention $cvt): self
    {
        if ($this->cvt->contains($cvt)) {
            $this->cvt->removeElement($cvt);
            if ($cvt->getCvtOffre() === $this) {
                $cvt->setCvtOffre(null);
            }
        }
        return $this;
    }
}
