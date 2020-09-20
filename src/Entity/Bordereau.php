<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bordereau
 *
 * @ORM\Table(name="bordereau", uniqueConstraints={@ORM\UniqueConstraint(name="bordereau_pk", columns={"bdp_id"})}, indexes={@ORM\Index(name="bordereau_rrif", columns={"bdp_reponse"}), @ORM\Index(name="bordereau_mpmif", columns={"bdp_modafprog"}), @ORM\Index(name="bordereau_ccif", columns={"bdp_commande"}), @ORM\Index(name="bordereau_ooif", columns={"bdp_offre"}), @ORM\Index(name="bordereau_emif", columns={"bdp_ebordereau"})})
 * @ORM\Entity
 */
class Bordereau
{
    /**
     * @var int
     *
     * @ORM\Column(name="bdp_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="bordereau_bdp_id_seq", allocationSize=1, initialValue=1)
     */
    private $bdpId;

    /**
     * @var string
     *
     * @ORM\Column(name="bdp_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $bdpEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="bdp_quand", type="string", length=5, nullable=false, options={"comment"="MPROG, CONST, OFFRE"})
     */
    private $bdpQuand;

    /**
     * @var string
     *
     * @ORM\Column(name="bdp_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $bdpAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bdp_datec", type="datetime", nullable=false)
     */
    private $bdpDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $bdpAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="bdp_datem", type="datetime", nullable=true)
     */
    private $bdpDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_type", type="string", length=1, nullable=true, options={"comment"="0 ou nul = MarchÃ© Forfaitaire, 1 = MarchÃ© BC, 2 = Bon de commande"})
     */
    private $bdpType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_montant", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $bdpMontant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_mbcid", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $bdpMbcid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_annee_deb", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $bdpAnneeDeb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_mois_deb", type="decimal", precision=2, scale=0, nullable=true)
     */
    private $bdpMoisDeb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_actif", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $bdpActif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_initial", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $bdpInitial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_montant_ttc", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $bdpMontantTtc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_base_assujetie_mini", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $bdpBaseAssujetieMini;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_base_assujetie_maxi", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $bdpBaseAssujetieMaxi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_montant_tva_mini", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $bdpMontantTvaMini;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_montant_tva_maxi", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $bdpMontantTvaMaxi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_montant_ttc_mini", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $bdpMontantTtcMini;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_montant_ttc_maxi", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $bdpMontantTtcMaxi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_montant_prevu", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $bdpMontantPrevu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_montant_ht_mini", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $bdpMontantHtMini;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_montant_ht_maxi", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $bdpMontantHtMaxi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_montant_tva", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $bdpMontantTva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_montant_tva_initial", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $bdpMontantTvaInitial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_montant_ht_initial", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $bdpMontantHtInitial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_montant_ttc_initial", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $bdpMontantTtcInitial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_valeur_fsd3n_revision", type="decimal", precision=10, scale=8, nullable=true)
     */
    private $bdpValeurFsd3nRevision;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_commentaire_revision", type="string", length=2000, nullable=true)
     */
    private $bdpCommentaireRevision;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdp_taux_revision", type="decimal", precision=10, scale=8, nullable=true)
     */
    private $bdpTauxRevision;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bdp_commande", referencedColumnName="cmd_id")
     * })
     */
    private $bdpCommande;

    /**
     * @var \EBordereau
     *
     * @ORM\ManyToOne(targetEntity="EBordereau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bdp_ebordereau", referencedColumnName="mpe_id")
     * })
     */
    private $bdpEbordereau;

    /**
     * @var \ModafProg
     *
     * @ORM\ManyToOne(targetEntity="ModafProg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bdp_modafprog", referencedColumnName="mop_id")
     * })
     */
    private $bdpModafprog;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bdp_offre", referencedColumnName="off_id")
     * })
     */
    private $bdpOffre;

    /**
     * @var \Reponse
     *
     * @ORM\ManyToOne(targetEntity="Reponse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bdp_reponse", referencedColumnName="rep_id")
     * })
     */
    private $bdpReponse;

    public function getBdpId(): ?int
    {
        return $this->bdpId;
    }

    public function getBdpEtat(): ?string
    {
        return $this->bdpEtat;
    }

    public function setBdpEtat(string $bdpEtat): self
    {
        $this->bdpEtat = $bdpEtat;

        return $this;
    }

    public function getBdpQuand(): ?string
    {
        return $this->bdpQuand;
    }

    public function setBdpQuand(string $bdpQuand): self
    {
        $this->bdpQuand = $bdpQuand;

        return $this;
    }

    public function getBdpAuteurc(): ?string
    {
        return $this->bdpAuteurc;
    }

    public function setBdpAuteurc(string $bdpAuteurc): self
    {
        $this->bdpAuteurc = $bdpAuteurc;

        return $this;
    }

    public function getBdpDatec(): ?\DateTimeInterface
    {
        return $this->bdpDatec;
    }

    public function setBdpDatec(\DateTimeInterface $bdpDatec): self
    {
        $this->bdpDatec = $bdpDatec;

        return $this;
    }

    public function getBdpAuteurm(): ?string
    {
        return $this->bdpAuteurm;
    }

    public function setBdpAuteurm(?string $bdpAuteurm): self
    {
        $this->bdpAuteurm = $bdpAuteurm;

        return $this;
    }

    public function getBdpDatem(): ?\DateTimeInterface
    {
        return $this->bdpDatem;
    }

    public function setBdpDatem(?\DateTimeInterface $bdpDatem): self
    {
        $this->bdpDatem = $bdpDatem;

        return $this;
    }

    public function getBdpType(): ?string
    {
        return $this->bdpType;
    }

    public function setBdpType(?string $bdpType): self
    {
        $this->bdpType = $bdpType;

        return $this;
    }

    public function getBdpMontant(): ?string
    {
        return $this->bdpMontant;
    }

    public function setBdpMontant(?string $bdpMontant): self
    {
        $this->bdpMontant = $bdpMontant;

        return $this;
    }

    public function getBdpMbcid(): ?string
    {
        return $this->bdpMbcid;
    }

    public function setBdpMbcid(?string $bdpMbcid): self
    {
        $this->bdpMbcid = $bdpMbcid;

        return $this;
    }

    public function getBdpAnneeDeb(): ?string
    {
        return $this->bdpAnneeDeb;
    }

    public function setBdpAnneeDeb(?string $bdpAnneeDeb): self
    {
        $this->bdpAnneeDeb = $bdpAnneeDeb;

        return $this;
    }

    public function getBdpMoisDeb(): ?string
    {
        return $this->bdpMoisDeb;
    }

    public function setBdpMoisDeb(?string $bdpMoisDeb): self
    {
        $this->bdpMoisDeb = $bdpMoisDeb;

        return $this;
    }

    public function getBdpActif(): ?string
    {
        return $this->bdpActif;
    }

    public function setBdpActif(?string $bdpActif): self
    {
        $this->bdpActif = $bdpActif;

        return $this;
    }

    public function getBdpInitial(): ?string
    {
        return $this->bdpInitial;
    }

    public function setBdpInitial(?string $bdpInitial): self
    {
        $this->bdpInitial = $bdpInitial;

        return $this;
    }

    public function getBdpMontantTtc(): ?string
    {
        return $this->bdpMontantTtc;
    }

    public function setBdpMontantTtc(?string $bdpMontantTtc): self
    {
        $this->bdpMontantTtc = $bdpMontantTtc;

        return $this;
    }

    public function getBdpBaseAssujetieMini(): ?string
    {
        return $this->bdpBaseAssujetieMini;
    }

    public function setBdpBaseAssujetieMini(?string $bdpBaseAssujetieMini): self
    {
        $this->bdpBaseAssujetieMini = $bdpBaseAssujetieMini;

        return $this;
    }

    public function getBdpBaseAssujetieMaxi(): ?string
    {
        return $this->bdpBaseAssujetieMaxi;
    }

    public function setBdpBaseAssujetieMaxi(?string $bdpBaseAssujetieMaxi): self
    {
        $this->bdpBaseAssujetieMaxi = $bdpBaseAssujetieMaxi;

        return $this;
    }

    public function getBdpMontantTvaMini(): ?string
    {
        return $this->bdpMontantTvaMini;
    }

    public function setBdpMontantTvaMini(?string $bdpMontantTvaMini): self
    {
        $this->bdpMontantTvaMini = $bdpMontantTvaMini;

        return $this;
    }

    public function getBdpMontantTvaMaxi(): ?string
    {
        return $this->bdpMontantTvaMaxi;
    }

    public function setBdpMontantTvaMaxi(?string $bdpMontantTvaMaxi): self
    {
        $this->bdpMontantTvaMaxi = $bdpMontantTvaMaxi;

        return $this;
    }

    public function getBdpMontantTtcMini(): ?string
    {
        return $this->bdpMontantTtcMini;
    }

    public function setBdpMontantTtcMini(?string $bdpMontantTtcMini): self
    {
        $this->bdpMontantTtcMini = $bdpMontantTtcMini;

        return $this;
    }

    public function getBdpMontantTtcMaxi(): ?string
    {
        return $this->bdpMontantTtcMaxi;
    }

    public function setBdpMontantTtcMaxi(?string $bdpMontantTtcMaxi): self
    {
        $this->bdpMontantTtcMaxi = $bdpMontantTtcMaxi;

        return $this;
    }

    public function getBdpMontantPrevu(): ?string
    {
        return $this->bdpMontantPrevu;
    }

    public function setBdpMontantPrevu(?string $bdpMontantPrevu): self
    {
        $this->bdpMontantPrevu = $bdpMontantPrevu;

        return $this;
    }

    public function getBdpMontantHtMini(): ?string
    {
        return $this->bdpMontantHtMini;
    }

    public function setBdpMontantHtMini(?string $bdpMontantHtMini): self
    {
        $this->bdpMontantHtMini = $bdpMontantHtMini;

        return $this;
    }

    public function getBdpMontantHtMaxi(): ?string
    {
        return $this->bdpMontantHtMaxi;
    }

    public function setBdpMontantHtMaxi(?string $bdpMontantHtMaxi): self
    {
        $this->bdpMontantHtMaxi = $bdpMontantHtMaxi;

        return $this;
    }

    public function getBdpMontantTva(): ?string
    {
        return $this->bdpMontantTva;
    }

    public function setBdpMontantTva(?string $bdpMontantTva): self
    {
        $this->bdpMontantTva = $bdpMontantTva;

        return $this;
    }

    public function getBdpMontantTvaInitial(): ?string
    {
        return $this->bdpMontantTvaInitial;
    }

    public function setBdpMontantTvaInitial(?string $bdpMontantTvaInitial): self
    {
        $this->bdpMontantTvaInitial = $bdpMontantTvaInitial;

        return $this;
    }

    public function getBdpMontantHtInitial(): ?string
    {
        return $this->bdpMontantHtInitial;
    }

    public function setBdpMontantHtInitial(?string $bdpMontantHtInitial): self
    {
        $this->bdpMontantHtInitial = $bdpMontantHtInitial;

        return $this;
    }

    public function getBdpMontantTtcInitial(): ?string
    {
        return $this->bdpMontantTtcInitial;
    }

    public function setBdpMontantTtcInitial(?string $bdpMontantTtcInitial): self
    {
        $this->bdpMontantTtcInitial = $bdpMontantTtcInitial;

        return $this;
    }

    public function getBdpValeurFsd3nRevision(): ?string
    {
        return $this->bdpValeurFsd3nRevision;
    }

    public function setBdpValeurFsd3nRevision(?string $bdpValeurFsd3nRevision): self
    {
        $this->bdpValeurFsd3nRevision = $bdpValeurFsd3nRevision;

        return $this;
    }

    public function getBdpCommentaireRevision(): ?string
    {
        return $this->bdpCommentaireRevision;
    }

    public function setBdpCommentaireRevision(?string $bdpCommentaireRevision): self
    {
        $this->bdpCommentaireRevision = $bdpCommentaireRevision;

        return $this;
    }

    public function getBdpTauxRevision(): ?string
    {
        return $this->bdpTauxRevision;
    }

    public function setBdpTauxRevision(?string $bdpTauxRevision): self
    {
        $this->bdpTauxRevision = $bdpTauxRevision;

        return $this;
    }

    public function getBdpCommande(): ?Commande
    {
        return $this->bdpCommande;
    }

    public function setBdpCommande(?Commande $bdpCommande): self
    {
        $this->bdpCommande = $bdpCommande;

        return $this;
    }

    public function getBdpEbordereau(): ?EBordereau
    {
        return $this->bdpEbordereau;
    }

    public function setBdpEbordereau(?EBordereau $bdpEbordereau): self
    {
        $this->bdpEbordereau = $bdpEbordereau;

        return $this;
    }

    public function getBdpModafprog(): ?ModafProg
    {
        return $this->bdpModafprog;
    }

    public function setBdpModafprog(?ModafProg $bdpModafprog): self
    {
        $this->bdpModafprog = $bdpModafprog;

        return $this;
    }

    public function getBdpOffre(): ?Offre
    {
        return $this->bdpOffre;
    }

    public function setBdpOffre(?Offre $bdpOffre): self
    {
        $this->bdpOffre = $bdpOffre;

        return $this;
    }

    public function getBdpReponse(): ?Reponse
    {
        return $this->bdpReponse;
    }

    public function setBdpReponse(?Reponse $bdpReponse): self
    {
        $this->bdpReponse = $bdpReponse;

        return $this;
    }


}
