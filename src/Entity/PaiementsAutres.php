<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaiementsAutres
 *
 * @ORM\Table(name="paiements_autres", uniqueConstraints={@ORM\UniqueConstraint(name="paiements_autres_pk", columns={"pau_id"})}, indexes={@ORM\Index(name="pau_ref_objet_fk", columns={"ref_id_objet"}), @ORM\Index(name="pai_sestg_fk", columns={"sestg_id"}), @ORM\Index(name="pau_ddp_fk", columns={"ddp_id"}), @ORM\Index(name="pau_ref_type_paiement_fk", columns={"ref_id_type"}), @ORM\Index(name="pau_ofp_fk", columns={"ofp_id"})})
 * @ORM\Entity
 */
class PaiementsAutres
{
    /**
     * @var int
     *
     * @ORM\Column(name="pau_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="paiements_autres_pau_id_seq", allocationSize=1, initialValue=1)
     */
    private $pauId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="pau_dt", type="datetime", nullable=true)
     */
    private $pauDt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pau_commentaire", type="string", length=2000, nullable=true)
     */
    private $pauCommentaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pau_montant_ht", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $pauMontantHt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="pau_date_suppr", type="datetime", nullable=true)
     */
    private $pauDateSuppr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pau_flg_suppr", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $pauFlgSuppr;

    /**
     * @var \SessionStagiaire
     *
     * @ORM\ManyToOne(targetEntity="SessionStagiaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sestg_id", referencedColumnName="sestg_id")
     * })
     */
    private $sestg;

    /**
     * @var \DdePaiement
     *
     * @ORM\ManyToOne(targetEntity="DdePaiement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ddp_id", referencedColumnName="ddp_id")
     * })
     */
    private $ddp;

    /**
     * @var \OffrePresta
     *
     * @ORM\ManyToOne(targetEntity="OffrePresta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ofp_id", referencedColumnName="ofp_id")
     * })
     */
    private $ofp;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_objet", referencedColumnName="ref_id")
     * })
     */
    private $refIdObjet;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_type", referencedColumnName="ref_id")
     * })
     */
    private $refIdType;

    public function getPauId(): ?int
    {
        return $this->pauId;
    }

    public function getPauDt(): ?\DateTimeInterface
    {
        return $this->pauDt;
    }

    public function setPauDt(?\DateTimeInterface $pauDt): self
    {
        $this->pauDt = $pauDt;

        return $this;
    }

    public function getPauCommentaire(): ?string
    {
        return $this->pauCommentaire;
    }

    public function setPauCommentaire(?string $pauCommentaire): self
    {
        $this->pauCommentaire = $pauCommentaire;

        return $this;
    }

    public function getPauMontantHt(): ?string
    {
        return $this->pauMontantHt;
    }

    public function setPauMontantHt(?string $pauMontantHt): self
    {
        $this->pauMontantHt = $pauMontantHt;

        return $this;
    }

    public function getPauDateSuppr(): ?\DateTimeInterface
    {
        return $this->pauDateSuppr;
    }

    public function setPauDateSuppr(?\DateTimeInterface $pauDateSuppr): self
    {
        $this->pauDateSuppr = $pauDateSuppr;

        return $this;
    }

    public function getPauFlgSuppr(): ?string
    {
        return $this->pauFlgSuppr;
    }

    public function setPauFlgSuppr(?string $pauFlgSuppr): self
    {
        $this->pauFlgSuppr = $pauFlgSuppr;

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

    public function getDdp(): ?DdePaiement
    {
        return $this->ddp;
    }

    public function setDdp(?DdePaiement $ddp): self
    {
        $this->ddp = $ddp;

        return $this;
    }

    public function getOfp(): ?OffrePresta
    {
        return $this->ofp;
    }

    public function setOfp(?OffrePresta $ofp): self
    {
        $this->ofp = $ofp;

        return $this;
    }

    public function getRefIdObjet(): ?Referentiel
    {
        return $this->refIdObjet;
    }

    public function setRefIdObjet(?Referentiel $refIdObjet): self
    {
        $this->refIdObjet = $refIdObjet;

        return $this;
    }

    public function getRefIdType(): ?Referentiel
    {
        return $this->refIdType;
    }

    public function setRefIdType(?Referentiel $refIdType): self
    {
        $this->refIdType = $refIdType;

        return $this;
    }


}
