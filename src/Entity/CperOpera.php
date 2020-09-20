<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CperOpera
 *
 * @ORM\Table(name="cper_opera", uniqueConstraints={@ORM\UniqueConstraint(name="cper_opera_pk", columns={"cop_id"})})
 * @ORM\Entity
 */
class CperOpera
{
    /**
     * @var string
     *
     * @ORM\Column(name="cop_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cper_opera_cop_id_seq", allocationSize=1, initialValue=1)
     */
    private $copId;

    /**
     * @var string
     *
     * @ORM\Column(name="cop_code", type="string", length=3, nullable=false)
     */
    private $copCode;

    /**
     * @var string
     *
     * @ORM\Column(name="cop_libelle", type="string", length=50, nullable=false)
     */
    private $copLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="cop_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $copEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="cop_horscper", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $copHorscper;

    /**
     * @var string
     *
     * @ORM\Column(name="cop_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $copAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cop_datec", type="datetime", nullable=false)
     */
    private $copDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cop_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $copAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cop_datem", type="datetime", nullable=true)
     */
    private $copDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cop_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $copAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cop_datea", type="datetime", nullable=true)
     */
    private $copDatea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cop_refarianne", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $copRefarianne;

    public function getCopId(): ?string
    {
        return $this->copId;
    }

    public function getCopCode(): ?string
    {
        return $this->copCode;
    }

    public function setCopCode(string $copCode): self
    {
        $this->copCode = $copCode;

        return $this;
    }

    public function getCopLibelle(): ?string
    {
        return $this->copLibelle;
    }

    public function setCopLibelle(string $copLibelle): self
    {
        $this->copLibelle = $copLibelle;

        return $this;
    }

    public function getCopEtat(): ?string
    {
        return $this->copEtat;
    }

    public function setCopEtat(string $copEtat): self
    {
        $this->copEtat = $copEtat;

        return $this;
    }

    public function getCopHorscper(): ?string
    {
        return $this->copHorscper;
    }

    public function setCopHorscper(string $copHorscper): self
    {
        $this->copHorscper = $copHorscper;

        return $this;
    }

    public function getCopAuteurc(): ?string
    {
        return $this->copAuteurc;
    }

    public function setCopAuteurc(string $copAuteurc): self
    {
        $this->copAuteurc = $copAuteurc;

        return $this;
    }

    public function getCopDatec(): ?\DateTimeInterface
    {
        return $this->copDatec;
    }

    public function setCopDatec(\DateTimeInterface $copDatec): self
    {
        $this->copDatec = $copDatec;

        return $this;
    }

    public function getCopAuteurm(): ?string
    {
        return $this->copAuteurm;
    }

    public function setCopAuteurm(?string $copAuteurm): self
    {
        $this->copAuteurm = $copAuteurm;

        return $this;
    }

    public function getCopDatem(): ?\DateTimeInterface
    {
        return $this->copDatem;
    }

    public function setCopDatem(?\DateTimeInterface $copDatem): self
    {
        $this->copDatem = $copDatem;

        return $this;
    }

    public function getCopAuteura(): ?string
    {
        return $this->copAuteura;
    }

    public function setCopAuteura(?string $copAuteura): self
    {
        $this->copAuteura = $copAuteura;

        return $this;
    }

    public function getCopDatea(): ?\DateTimeInterface
    {
        return $this->copDatea;
    }

    public function setCopDatea(?\DateTimeInterface $copDatea): self
    {
        $this->copDatea = $copDatea;

        return $this;
    }

    public function getCopRefarianne(): ?string
    {
        return $this->copRefarianne;
    }

    public function setCopRefarianne(?string $copRefarianne): self
    {
        $this->copRefarianne = $copRefarianne;

        return $this;
    }

    public function getCprId(): ?int
    {
        return $this->cprId;
    }

    public function setCprId(?int $cprId): self
    {
        $this->cprId = $cprId;

        return $this;
    }

    public function getCphId(): ?string
    {
        return $this->cphId;
    }

    public function setCphId(?string $cphId): self
    {
        $this->cphId = $cphId;

        return $this;
    }


}
