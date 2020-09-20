<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NsfAf
 *
 * @ORM\Table(name="nsf_af", uniqueConstraints={@ORM\UniqueConstraint(name="nsf_af_pk", columns={"naf_id"})}, indexes={@ORM\Index(name="nsf_af_naf_nsf___nsf_nsf_id_fk", columns={"naf_nsf"}), @ORM\Index(name="nsf_af_naf_af___af_afo_id_fk", columns={"naf_af"})})
 * @ORM\Entity
 */
class NsfAf
{
    /**
     * @var string
     *
     * @ORM\Column(name="naf_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="nsf_af_naf_id_seq", allocationSize=1, initialValue=1)
     */
    private $nafId;

    /**
     * @var string
     *
     * @ORM\Column(name="naf_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nafEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="naf_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $nafAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="naf_datec", type="datetime", nullable=false)
     */
    private $nafDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="naf_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $nafAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="naf_datem", type="datetime", nullable=true)
     */
    private $nafDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="naf_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $nafAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="naf_datea", type="datetime", nullable=true)
     */
    private $nafDatea;

    /**
     * @var \Af
     *
     * @ORM\ManyToOne(targetEntity="Af")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="naf_af", referencedColumnName="afo_id")
     * })
     */
    private $nafAf;

    /**
     * @var \Nsf
     *
     * @ORM\ManyToOne(targetEntity="Nsf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="naf_nsf", referencedColumnName="nsf_id")
     * })
     */
    private $nafNsf;

    public function getNafId(): ?string
    {
        return $this->nafId;
    }

    public function getNafEtat(): ?string
    {
        return $this->nafEtat;
    }

    public function setNafEtat(string $nafEtat): self
    {
        $this->nafEtat = $nafEtat;

        return $this;
    }

    public function getNafAuteurc(): ?string
    {
        return $this->nafAuteurc;
    }

    public function setNafAuteurc(string $nafAuteurc): self
    {
        $this->nafAuteurc = $nafAuteurc;

        return $this;
    }

    public function getNafDatec(): ?\DateTimeInterface
    {
        return $this->nafDatec;
    }

    public function setNafDatec(\DateTimeInterface $nafDatec): self
    {
        $this->nafDatec = $nafDatec;

        return $this;
    }

    public function getNafAuteurm(): ?string
    {
        return $this->nafAuteurm;
    }

    public function setNafAuteurm(?string $nafAuteurm): self
    {
        $this->nafAuteurm = $nafAuteurm;

        return $this;
    }

    public function getNafDatem(): ?\DateTimeInterface
    {
        return $this->nafDatem;
    }

    public function setNafDatem(?\DateTimeInterface $nafDatem): self
    {
        $this->nafDatem = $nafDatem;

        return $this;
    }

    public function getNafAuteura(): ?string
    {
        return $this->nafAuteura;
    }

    public function setNafAuteura(?string $nafAuteura): self
    {
        $this->nafAuteura = $nafAuteura;

        return $this;
    }

    public function getNafDatea(): ?\DateTimeInterface
    {
        return $this->nafDatea;
    }

    public function setNafDatea(?\DateTimeInterface $nafDatea): self
    {
        $this->nafDatea = $nafDatea;

        return $this;
    }

    public function getNafAf(): ?Af
    {
        return $this->nafAf;
    }

    public function setNafAf(?Af $nafAf): self
    {
        $this->nafAf = $nafAf;

        return $this;
    }

    public function getNafNsf(): ?Nsf
    {
        return $this->nafNsf;
    }

    public function setNafNsf(?Nsf $nafNsf): self
    {
        $this->nafNsf = $nafNsf;

        return $this;
    }


}
