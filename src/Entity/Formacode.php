<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formacode
 *
 * @ORM\Table(name="formacode", uniqueConstraints={@ORM\UniqueConstraint(name="formacode_pk", columns={"fmc_id"})})
 * @ORM\Entity
 */
class Formacode
{
    /**
     * @var string
     *
     * @ORM\Column(name="fmc_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="formacode_fmc_id_seq", allocationSize=1, initialValue=1)
     */
    private $fmcId;

    /**
     * @var string
     *
     * @ORM\Column(name="fmc_code", type="string", length=5, nullable=false)
     */
    private $fmcCode;

    /**
     * @var string
     *
     * @ORM\Column(name="fmc_libelle", type="string", length=100, nullable=false)
     */
    private $fmcLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="fmc_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $fmcEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="fmc_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $fmcAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fmc_datec", type="datetime", nullable=false)
     */
    private $fmcDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fmc_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $fmcAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fmc_datem", type="datetime", nullable=true)
     */
    private $fmcDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fmc_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $fmcAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fmc_datea", type="datetime", nullable=true)
     */
    private $fmcDatea;

    public function getFmcId(): ?string
    {
        return $this->fmcId;
    }

    public function getFmcCode(): ?string
    {
        return $this->fmcCode;
    }

    public function setFmcCode(string $fmcCode): self
    {
        $this->fmcCode = $fmcCode;

        return $this;
    }

    public function getFmcLibelle(): ?string
    {
        return $this->fmcLibelle;
    }

    public function setFmcLibelle(string $fmcLibelle): self
    {
        $this->fmcLibelle = $fmcLibelle;

        return $this;
    }

    public function getFmcEtat(): ?string
    {
        return $this->fmcEtat;
    }

    public function setFmcEtat(string $fmcEtat): self
    {
        $this->fmcEtat = $fmcEtat;

        return $this;
    }

    public function getFmcAuteurc(): ?string
    {
        return $this->fmcAuteurc;
    }

    public function setFmcAuteurc(string $fmcAuteurc): self
    {
        $this->fmcAuteurc = $fmcAuteurc;

        return $this;
    }

    public function getFmcDatec(): ?\DateTimeInterface
    {
        return $this->fmcDatec;
    }

    public function setFmcDatec(\DateTimeInterface $fmcDatec): self
    {
        $this->fmcDatec = $fmcDatec;

        return $this;
    }

    public function getFmcAuteurm(): ?string
    {
        return $this->fmcAuteurm;
    }

    public function setFmcAuteurm(?string $fmcAuteurm): self
    {
        $this->fmcAuteurm = $fmcAuteurm;

        return $this;
    }

    public function getFmcDatem(): ?\DateTimeInterface
    {
        return $this->fmcDatem;
    }

    public function setFmcDatem(?\DateTimeInterface $fmcDatem): self
    {
        $this->fmcDatem = $fmcDatem;

        return $this;
    }

    public function getFmcAuteura(): ?string
    {
        return $this->fmcAuteura;
    }

    public function setFmcAuteura(?string $fmcAuteura): self
    {
        $this->fmcAuteura = $fmcAuteura;

        return $this;
    }

    public function getFmcDatea(): ?\DateTimeInterface
    {
        return $this->fmcDatea;
    }

    public function setFmcDatea(?\DateTimeInterface $fmcDatea): self
    {
        $this->fmcDatea = $fmcDatea;

        return $this;
    }


}
