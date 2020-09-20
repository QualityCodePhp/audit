<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LstOptionm
 *
 * @ORM\Table(name="lst_optionm", uniqueConstraints={@ORM\UniqueConstraint(name="lst_optionm_pk", columns={"lom_id"})}, indexes={@ORM\Index(name="lst_optionm_omoif", columns={"lom_optionm"}), @ORM\Index(name="lst_optionm_smsif", columns={"lom_statm"}), @ORM\Index(name="lst_optionm_mamif", columns={"lom_modaf"})})
 * @ORM\Entity
 */
class LstOptionm
{
    /**
     * @var string
     *
     * @ORM\Column(name="lom_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lst_optionm_lom_id_seq", allocationSize=1, initialValue=1)
     */
    private $lomId;

    /**
     * @var string
     *
     * @ORM\Column(name="lom_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $lomEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="lom_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $lomAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lom_datec", type="datetime", nullable=false)
     */
    private $lomDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lom_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $lomAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="lom_datem", type="datetime", nullable=true)
     */
    private $lomDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lom_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $lomAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="lom_datea", type="datetime", nullable=true)
     */
    private $lomDatea;

    /**
     * @var \ModeleAf
     *
     * @ORM\ManyToOne(targetEntity="ModeleAf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lom_modaf", referencedColumnName="maf_id")
     * })
     */
    private $lomModaf;

    /**
     * @var \OptionModaf
     *
     * @ORM\ManyToOne(targetEntity="OptionModaf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lom_optionm", referencedColumnName="opm_id")
     * })
     */
    private $lomOptionm;

    /**
     * @var \StatModaf
     *
     * @ORM\ManyToOne(targetEntity="StatModaf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lom_statm", referencedColumnName="stm_id")
     * })
     */
    private $lomStatm;

    public function getLomId(): ?string
    {
        return $this->lomId;
    }

    public function getLomEtat(): ?string
    {
        return $this->lomEtat;
    }

    public function setLomEtat(string $lomEtat): self
    {
        $this->lomEtat = $lomEtat;

        return $this;
    }

    public function getLomAuteurc(): ?string
    {
        return $this->lomAuteurc;
    }

    public function setLomAuteurc(string $lomAuteurc): self
    {
        $this->lomAuteurc = $lomAuteurc;

        return $this;
    }

    public function getLomDatec(): ?\DateTimeInterface
    {
        return $this->lomDatec;
    }

    public function setLomDatec(\DateTimeInterface $lomDatec): self
    {
        $this->lomDatec = $lomDatec;

        return $this;
    }

    public function getLomAuteurm(): ?string
    {
        return $this->lomAuteurm;
    }

    public function setLomAuteurm(?string $lomAuteurm): self
    {
        $this->lomAuteurm = $lomAuteurm;

        return $this;
    }

    public function getLomDatem(): ?\DateTimeInterface
    {
        return $this->lomDatem;
    }

    public function setLomDatem(?\DateTimeInterface $lomDatem): self
    {
        $this->lomDatem = $lomDatem;

        return $this;
    }

    public function getLomAuteura(): ?string
    {
        return $this->lomAuteura;
    }

    public function setLomAuteura(?string $lomAuteura): self
    {
        $this->lomAuteura = $lomAuteura;

        return $this;
    }

    public function getLomDatea(): ?\DateTimeInterface
    {
        return $this->lomDatea;
    }

    public function setLomDatea(?\DateTimeInterface $lomDatea): self
    {
        $this->lomDatea = $lomDatea;

        return $this;
    }

    public function getLomModaf(): ?ModeleAf
    {
        return $this->lomModaf;
    }

    public function setLomModaf(?ModeleAf $lomModaf): self
    {
        $this->lomModaf = $lomModaf;

        return $this;
    }

    public function getLomOptionm(): ?OptionModaf
    {
        return $this->lomOptionm;
    }

    public function setLomOptionm(?OptionModaf $lomOptionm): self
    {
        $this->lomOptionm = $lomOptionm;

        return $this;
    }

    public function getLomStatm(): ?StatModaf
    {
        return $this->lomStatm;
    }

    public function setLomStatm(?StatModaf $lomStatm): self
    {
        $this->lomStatm = $lomStatm;

        return $this;
    }


}
