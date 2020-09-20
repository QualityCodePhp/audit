<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffrePresta
 *
 * @ORM\Table(name="offre_presta", uniqueConstraints={@ORM\UniqueConstraint(name="offre_presta_pk", columns={"ofp_id"})}, indexes={@ORM\Index(name="ofp_lie_titulaire_fk", columns={"ofp_id_titulaire"}), @ORM\Index(name="ets_ofp_fk", columns={"ofp_ets"}), @ORM\Index(name="ofp_ref_tva_fk", columns={"ref_id_tva"}), @ORM\Index(name="off_ofprestataire_fk", columns={"ofp_offre"})})
 * @ORM\Entity
 */
class OffrePresta
{
    /**
     * @var string
     *
     * @ORM\Column(name="ofp_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="offre_presta_ofp_id_seq", allocationSize=1, initialValue=1)
     */
    private $ofpId;

    /**
     * @var string
     *
     * @ORM\Column(name="ofp_typepresta", type="string", length=1, nullable=false, options={"comment"="T = titulaire, C = co-traitant, S = sous-traitant"})
     */
    private $ofpTypepresta;

    /**
     * @var string
     *
     * @ORM\Column(name="ofp_peuacceder", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $ofpPeuacceder;

    /**
     * @var string
     *
     * @ORM\Column(name="ofp_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $ofpEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="ofp_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $ofpAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ofp_datec", type="datetime", nullable=false)
     */
    private $ofpDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofp_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $ofpAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ofp_datem", type="datetime", nullable=true)
     */
    private $ofpDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofp_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $ofpAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ofp_datea", type="datetime", nullable=true)
     */
    private $ofpDatea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofp_mntpresta", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $ofpMntpresta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofp_mandataire", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $ofpMandataire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofp_peut_saisir_real", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $ofpPeutSaisirReal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofp_sam_ets_id", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $ofpSamEtsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofp_signataire_civilite", type="string", length=3, nullable=true)
     */
    private $ofpSignataireCivilite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofp_signataire_qualite", type="string", length=100, nullable=true)
     */
    private $ofpSignataireQualite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofp_signataire_nom", type="string", length=100, nullable=true)
     */
    private $ofpSignataireNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofp_signataire_prenom", type="string", length=100, nullable=true)
     */
    private $ofpSignatairePrenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofp_flg_modif_presta", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $ofpFlgModifPresta;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ofp_ets", referencedColumnName="ets_id")
     * })
     */
    private $ofpEts;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ofp_offre", referencedColumnName="off_id")
     * })
     */
    private $ofpOffre;

    /**
     * @var \OffrePresta
     *
     * @ORM\ManyToOne(targetEntity="OffrePresta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ofp_id_titulaire", referencedColumnName="ofp_id")
     * })
     */
    private $ofpIdTitulaire;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_tva", referencedColumnName="ref_id")
     * })
     */
    private $refIdTva;

    public function getOfpId(): ?string
    {
        return $this->ofpId;
    }

    public function getOfpTypepresta(): ?string
    {
        return $this->ofpTypepresta;
    }

    public function setOfpTypepresta(string $ofpTypepresta): self
    {
        $this->ofpTypepresta = $ofpTypepresta;

        return $this;
    }

    public function getOfpPeuacceder(): ?string
    {
        return $this->ofpPeuacceder;
    }

    public function setOfpPeuacceder(string $ofpPeuacceder): self
    {
        $this->ofpPeuacceder = $ofpPeuacceder;

        return $this;
    }

    public function getOfpEtat(): ?string
    {
        return $this->ofpEtat;
    }

    public function setOfpEtat(string $ofpEtat): self
    {
        $this->ofpEtat = $ofpEtat;

        return $this;
    }

    public function getOfpAuteurc(): ?string
    {
        return $this->ofpAuteurc;
    }

    public function setOfpAuteurc(string $ofpAuteurc): self
    {
        $this->ofpAuteurc = $ofpAuteurc;

        return $this;
    }

    public function getOfpDatec(): ?\DateTimeInterface
    {
        return $this->ofpDatec;
    }

    public function setOfpDatec(\DateTimeInterface $ofpDatec): self
    {
        $this->ofpDatec = $ofpDatec;

        return $this;
    }

    public function getOfpAuteurm(): ?string
    {
        return $this->ofpAuteurm;
    }

    public function setOfpAuteurm(?string $ofpAuteurm): self
    {
        $this->ofpAuteurm = $ofpAuteurm;

        return $this;
    }

    public function getOfpDatem(): ?\DateTimeInterface
    {
        return $this->ofpDatem;
    }

    public function setOfpDatem(?\DateTimeInterface $ofpDatem): self
    {
        $this->ofpDatem = $ofpDatem;

        return $this;
    }

    public function getOfpAuteura(): ?string
    {
        return $this->ofpAuteura;
    }

    public function setOfpAuteura(?string $ofpAuteura): self
    {
        $this->ofpAuteura = $ofpAuteura;

        return $this;
    }

    public function getOfpDatea(): ?\DateTimeInterface
    {
        return $this->ofpDatea;
    }

    public function setOfpDatea(?\DateTimeInterface $ofpDatea): self
    {
        $this->ofpDatea = $ofpDatea;

        return $this;
    }

    public function getOfpMntpresta(): ?string
    {
        return $this->ofpMntpresta;
    }

    public function setOfpMntpresta(?string $ofpMntpresta): self
    {
        $this->ofpMntpresta = $ofpMntpresta;

        return $this;
    }

    public function getOfpMandataire(): ?string
    {
        return $this->ofpMandataire;
    }

    public function setOfpMandataire(?string $ofpMandataire): self
    {
        $this->ofpMandataire = $ofpMandataire;

        return $this;
    }

    public function getOfpPeutSaisirReal(): ?string
    {
        return $this->ofpPeutSaisirReal;
    }

    public function setOfpPeutSaisirReal(?string $ofpPeutSaisirReal): self
    {
        $this->ofpPeutSaisirReal = $ofpPeutSaisirReal;

        return $this;
    }

    public function getOfpSamEtsId(): ?string
    {
        return $this->ofpSamEtsId;
    }

    public function setOfpSamEtsId(?string $ofpSamEtsId): self
    {
        $this->ofpSamEtsId = $ofpSamEtsId;

        return $this;
    }

    public function getOfpSignataireCivilite(): ?string
    {
        return $this->ofpSignataireCivilite;
    }

    public function setOfpSignataireCivilite(?string $ofpSignataireCivilite): self
    {
        $this->ofpSignataireCivilite = $ofpSignataireCivilite;

        return $this;
    }

    public function getOfpSignataireQualite(): ?string
    {
        return $this->ofpSignataireQualite;
    }

    public function setOfpSignataireQualite(?string $ofpSignataireQualite): self
    {
        $this->ofpSignataireQualite = $ofpSignataireQualite;

        return $this;
    }

    public function getOfpSignataireNom(): ?string
    {
        return $this->ofpSignataireNom;
    }

    public function setOfpSignataireNom(?string $ofpSignataireNom): self
    {
        $this->ofpSignataireNom = $ofpSignataireNom;

        return $this;
    }

    public function getOfpSignatairePrenom(): ?string
    {
        return $this->ofpSignatairePrenom;
    }

    public function setOfpSignatairePrenom(?string $ofpSignatairePrenom): self
    {
        $this->ofpSignatairePrenom = $ofpSignatairePrenom;

        return $this;
    }

    public function getOfpFlgModifPresta(): ?string
    {
        return $this->ofpFlgModifPresta;
    }

    public function setOfpFlgModifPresta(?string $ofpFlgModifPresta): self
    {
        $this->ofpFlgModifPresta = $ofpFlgModifPresta;

        return $this;
    }

    public function getOfpEts(): ?Etablssmt
    {
        return $this->ofpEts;
    }

    public function setOfpEts(?Etablssmt $ofpEts): self
    {
        $this->ofpEts = $ofpEts;

        return $this;
    }

    public function getOfpOffre(): ?Offre
    {
        return $this->ofpOffre;
    }

    public function setOfpOffre(?Offre $ofpOffre): self
    {
        $this->ofpOffre = $ofpOffre;

        return $this;
    }

    public function getOfpIdTitulaire(): ?self
    {
        return $this->ofpIdTitulaire;
    }

    public function setOfpIdTitulaire(?self $ofpIdTitulaire): self
    {
        $this->ofpIdTitulaire = $ofpIdTitulaire;

        return $this;
    }

    public function getRefIdTva(): ?Referentiel
    {
        return $this->refIdTva;
    }

    public function setRefIdTva(?Referentiel $refIdTva): self
    {
        $this->refIdTva = $refIdTva;

        return $this;
    }


}
