<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TxtOptionm
 *
 * @ORM\Table(name="txt_optionm", uniqueConstraints={@ORM\UniqueConstraint(name="txt_optionm_pk", columns={"tom_id"})}, indexes={@ORM\Index(name="txt_optionm_mamif", columns={"tom_modaf"}), @ORM\Index(name="txt_optionm_omoif2", columns={"tom_optionm"})})
 * @ORM\Entity
 */
class TxtOptionm
{
    /**
     * @var string
     *
     * @ORM\Column(name="tom_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="txt_optionm_tom_id_seq", allocationSize=1, initialValue=1)
     */
    private $tomId;

    /**
     * @var string
     *
     * @ORM\Column(name="tom_actif", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $tomActif;

    /**
     * @var string
     *
     * @ORM\Column(name="tom_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $tomEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="tom_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $tomAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tom_datec", type="datetime", nullable=false)
     */
    private $tomDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tom_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $tomAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tom_datem", type="datetime", nullable=true)
     */
    private $tomDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tom_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $tomAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tom_datea", type="datetime", nullable=true)
     */
    private $tomDatea;

    /**
     * @var \ModeleAf
     *
     * @ORM\ManyToOne(targetEntity="ModeleAf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tom_modaf", referencedColumnName="maf_id")
     * })
     */
    private $tomModaf;

    /**
     * @var \OptionModaf
     *
     * @ORM\ManyToOne(targetEntity="OptionModaf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tom_optionm", referencedColumnName="opm_id")
     * })
     */
    private $tomOptionm;

    public function getTomId(): ?string
    {
        return $this->tomId;
    }

    public function getTomActif(): ?string
    {
        return $this->tomActif;
    }

    public function setTomActif(string $tomActif): self
    {
        $this->tomActif = $tomActif;

        return $this;
    }

    public function getTomEtat(): ?string
    {
        return $this->tomEtat;
    }

    public function setTomEtat(string $tomEtat): self
    {
        $this->tomEtat = $tomEtat;

        return $this;
    }

    public function getTomAuteurc(): ?string
    {
        return $this->tomAuteurc;
    }

    public function setTomAuteurc(string $tomAuteurc): self
    {
        $this->tomAuteurc = $tomAuteurc;

        return $this;
    }

    public function getTomDatec(): ?\DateTimeInterface
    {
        return $this->tomDatec;
    }

    public function setTomDatec(\DateTimeInterface $tomDatec): self
    {
        $this->tomDatec = $tomDatec;

        return $this;
    }

    public function getTomAuteurm(): ?string
    {
        return $this->tomAuteurm;
    }

    public function setTomAuteurm(?string $tomAuteurm): self
    {
        $this->tomAuteurm = $tomAuteurm;

        return $this;
    }

    public function getTomDatem(): ?\DateTimeInterface
    {
        return $this->tomDatem;
    }

    public function setTomDatem(?\DateTimeInterface $tomDatem): self
    {
        $this->tomDatem = $tomDatem;

        return $this;
    }

    public function getTomAuteura(): ?string
    {
        return $this->tomAuteura;
    }

    public function setTomAuteura(?string $tomAuteura): self
    {
        $this->tomAuteura = $tomAuteura;

        return $this;
    }

    public function getTomDatea(): ?\DateTimeInterface
    {
        return $this->tomDatea;
    }

    public function setTomDatea(?\DateTimeInterface $tomDatea): self
    {
        $this->tomDatea = $tomDatea;

        return $this;
    }

    public function getTomModaf(): ?ModeleAf
    {
        return $this->tomModaf;
    }

    public function setTomModaf(?ModeleAf $tomModaf): self
    {
        $this->tomModaf = $tomModaf;

        return $this;
    }

    public function getTomOptionm(): ?OptionModaf
    {
        return $this->tomOptionm;
    }

    public function setTomOptionm(?OptionModaf $tomOptionm): self
    {
        $this->tomOptionm = $tomOptionm;

        return $this;
    }


}
