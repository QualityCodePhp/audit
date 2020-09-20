<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffreSyntheseDetail
 *
 * @ORM\Table(name="offre_synthese_detail", uniqueConstraints={@ORM\UniqueConstraint(name="offre_synthese_detail_pk", columns={"ofsd_id"})}, indexes={@ORM\Index(name="ofs_id_fk", columns={"ofs_id"}), @ORM\Index(name="ofds_ref_type_fk", columns={"ref_id_type"})})
 * @ORM\Entity
 */
class OffreSyntheseDetail
{
    /**
     * @var int
     *
     * @ORM\Column(name="ofsd_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="offre_synthese_detail_ofsd_id_seq", allocationSize=1, initialValue=1)
     */
    private $ofsdId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofsd_ets", type="string", length=160, nullable=true)
     */
    private $ofsdEts;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofsd_prestation", type="string", length=50, nullable=true)
     */
    private $ofsdPrestation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofsd_unite", type="string", length=50, nullable=true)
     */
    private $ofsdUnite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofsd_nb_mini", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $ofsdNbMini;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofsd_nb_maxi", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $ofsdNbMaxi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofsd_px_unite", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $ofsdPxUnite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofsd_nb_restant", type="decimal", precision=9, scale=2, nullable=true)
     */
    private $ofsdNbRestant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofsd_montant_ht", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ofsdMontantHt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ofsd_dt_der_real", type="datetime", nullable=true)
     */
    private $ofsdDtDerReal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofsd_num_bc", type="decimal", precision=16, scale=0, nullable=true)
     */
    private $ofsdNumBc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofsd_rang", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $ofsdRang;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ofsd_date_deb", type="datetime", nullable=true)
     */
    private $ofsdDateDeb;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ofsd_date_fin", type="datetime", nullable=true)
     */
    private $ofsdDateFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofsd_montant_paye", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ofsdMontantPaye;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofsd_valeur", type="string", length=500, nullable=true)
     */
    private $ofsdValeur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofsd_pourcentage", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $ofsdPourcentage;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_type", referencedColumnName="ref_id")
     * })
     */
    private $refIdType;

    /**
     * @var \OffreSynthese
     *
     * @ORM\ManyToOne(targetEntity="OffreSynthese")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ofs_id", referencedColumnName="ofs_id")
     * })
     */
    private $ofs;

    public function getOfsdId(): ?int
    {
        return $this->ofsdId;
    }

    public function getOfsdEts(): ?string
    {
        return $this->ofsdEts;
    }

    public function setOfsdEts(?string $ofsdEts): self
    {
        $this->ofsdEts = $ofsdEts;

        return $this;
    }

    public function getOfsdPrestation(): ?string
    {
        return $this->ofsdPrestation;
    }

    public function setOfsdPrestation(?string $ofsdPrestation): self
    {
        $this->ofsdPrestation = $ofsdPrestation;

        return $this;
    }

    public function getOfsdUnite(): ?string
    {
        return $this->ofsdUnite;
    }

    public function setOfsdUnite(?string $ofsdUnite): self
    {
        $this->ofsdUnite = $ofsdUnite;

        return $this;
    }

    public function getOfsdNbMini(): ?string
    {
        return $this->ofsdNbMini;
    }

    public function setOfsdNbMini(?string $ofsdNbMini): self
    {
        $this->ofsdNbMini = $ofsdNbMini;

        return $this;
    }

    public function getOfsdNbMaxi(): ?string
    {
        return $this->ofsdNbMaxi;
    }

    public function setOfsdNbMaxi(?string $ofsdNbMaxi): self
    {
        $this->ofsdNbMaxi = $ofsdNbMaxi;

        return $this;
    }

    public function getOfsdPxUnite(): ?string
    {
        return $this->ofsdPxUnite;
    }

    public function setOfsdPxUnite(?string $ofsdPxUnite): self
    {
        $this->ofsdPxUnite = $ofsdPxUnite;

        return $this;
    }

    public function getOfsdNbRestant(): ?string
    {
        return $this->ofsdNbRestant;
    }

    public function setOfsdNbRestant(?string $ofsdNbRestant): self
    {
        $this->ofsdNbRestant = $ofsdNbRestant;

        return $this;
    }

    public function getOfsdMontantHt(): ?string
    {
        return $this->ofsdMontantHt;
    }

    public function setOfsdMontantHt(?string $ofsdMontantHt): self
    {
        $this->ofsdMontantHt = $ofsdMontantHt;

        return $this;
    }

    public function getOfsdDtDerReal(): ?\DateTimeInterface
    {
        return $this->ofsdDtDerReal;
    }

    public function setOfsdDtDerReal(?\DateTimeInterface $ofsdDtDerReal): self
    {
        $this->ofsdDtDerReal = $ofsdDtDerReal;

        return $this;
    }

    public function getOfsdNumBc(): ?string
    {
        return $this->ofsdNumBc;
    }

    public function setOfsdNumBc(?string $ofsdNumBc): self
    {
        $this->ofsdNumBc = $ofsdNumBc;

        return $this;
    }

    public function getOfsdRang(): ?string
    {
        return $this->ofsdRang;
    }

    public function setOfsdRang(?string $ofsdRang): self
    {
        $this->ofsdRang = $ofsdRang;

        return $this;
    }

    public function getOfsdDateDeb(): ?\DateTimeInterface
    {
        return $this->ofsdDateDeb;
    }

    public function setOfsdDateDeb(?\DateTimeInterface $ofsdDateDeb): self
    {
        $this->ofsdDateDeb = $ofsdDateDeb;

        return $this;
    }

    public function getOfsdDateFin(): ?\DateTimeInterface
    {
        return $this->ofsdDateFin;
    }

    public function setOfsdDateFin(?\DateTimeInterface $ofsdDateFin): self
    {
        $this->ofsdDateFin = $ofsdDateFin;

        return $this;
    }

    public function getOfsdMontantPaye(): ?string
    {
        return $this->ofsdMontantPaye;
    }

    public function setOfsdMontantPaye(?string $ofsdMontantPaye): self
    {
        $this->ofsdMontantPaye = $ofsdMontantPaye;

        return $this;
    }

    public function getOfsdValeur(): ?string
    {
        return $this->ofsdValeur;
    }

    public function setOfsdValeur(?string $ofsdValeur): self
    {
        $this->ofsdValeur = $ofsdValeur;

        return $this;
    }

    public function getOfsdPourcentage(): ?string
    {
        return $this->ofsdPourcentage;
    }

    public function setOfsdPourcentage(?string $ofsdPourcentage): self
    {
        $this->ofsdPourcentage = $ofsdPourcentage;

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

    public function getOfs(): ?OffreSynthese
    {
        return $this->ofs;
    }

    public function setOfs(?OffreSynthese $ofs): self
    {
        $this->ofs = $ofs;

        return $this;
    }


}
