<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RomeAf
 *
 * @ORM\Table(name="rome_af", uniqueConstraints={@ORM\UniqueConstraint(name="rome_af_pk", columns={"raf_id"})}, indexes={@ORM\Index(name="rome_af_raf_af___rome_rom_id_fk", columns={"raf_rome"}), @ORM\Index(name="rome_af_raf_af___af_afo_id_fk", columns={"raf_af"})})
 * @ORM\Entity
 */
class RomeAf
{
    /**
     * @var string
     *
     * @ORM\Column(name="raf_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rome_af_raf_id_seq", allocationSize=1, initialValue=1)
     */
    private $rafId;

    /**
     * @var string
     *
     * @ORM\Column(name="raf_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $rafEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="raf_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $rafAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="raf_datec", type="datetime", nullable=false)
     */
    private $rafDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="raf_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $rafAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="raf_datem", type="datetime", nullable=true)
     */
    private $rafDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="raf_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $rafAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="raf_datea", type="datetime", nullable=true)
     */
    private $rafDatea;

    /**
     * @var \Af
     *
     * @ORM\ManyToOne(targetEntity="Af")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="raf_af", referencedColumnName="afo_id")
     * })
     */
    private $rafAf;

    /**
     * @var \Rome
     *
     * @ORM\ManyToOne(targetEntity="Rome")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="raf_rome", referencedColumnName="rom_id")
     * })
     */
    private $rafRome;

    public function getRafId(): ?string
    {
        return $this->rafId;
    }

    public function getRafEtat(): ?string
    {
        return $this->rafEtat;
    }

    public function setRafEtat(string $rafEtat): self
    {
        $this->rafEtat = $rafEtat;

        return $this;
    }

    public function getRafAuteurc(): ?string
    {
        return $this->rafAuteurc;
    }

    public function setRafAuteurc(string $rafAuteurc): self
    {
        $this->rafAuteurc = $rafAuteurc;

        return $this;
    }

    public function getRafDatec(): ?\DateTimeInterface
    {
        return $this->rafDatec;
    }

    public function setRafDatec(\DateTimeInterface $rafDatec): self
    {
        $this->rafDatec = $rafDatec;

        return $this;
    }

    public function getRafAuteurm(): ?string
    {
        return $this->rafAuteurm;
    }

    public function setRafAuteurm(?string $rafAuteurm): self
    {
        $this->rafAuteurm = $rafAuteurm;

        return $this;
    }

    public function getRafDatem(): ?\DateTimeInterface
    {
        return $this->rafDatem;
    }

    public function setRafDatem(?\DateTimeInterface $rafDatem): self
    {
        $this->rafDatem = $rafDatem;

        return $this;
    }

    public function getRafAuteura(): ?string
    {
        return $this->rafAuteura;
    }

    public function setRafAuteura(?string $rafAuteura): self
    {
        $this->rafAuteura = $rafAuteura;

        return $this;
    }

    public function getRafDatea(): ?\DateTimeInterface
    {
        return $this->rafDatea;
    }

    public function setRafDatea(?\DateTimeInterface $rafDatea): self
    {
        $this->rafDatea = $rafDatea;

        return $this;
    }

    public function getRafAf(): ?Af
    {
        return $this->rafAf;
    }

    public function setRafAf(?Af $rafAf): self
    {
        $this->rafAf = $rafAf;

        return $this;
    }

    public function getRafRome(): ?Rome
    {
        return $this->rafRome;
    }

    public function setRafRome(?Rome $rafRome): self
    {
        $this->rafRome = $rafRome;

        return $this;
    }


}
