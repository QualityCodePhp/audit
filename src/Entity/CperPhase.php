<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CperPhase
 *
 * @ORM\Table(name="cper_phase", uniqueConstraints={@ORM\UniqueConstraint(name="cper_phase_pk", columns={"cph_id"})}, indexes={@ORM\Index(name="cper_phase_cocif2", columns={"cph_opera"})})
 * @ORM\Entity
 */
class CperPhase
{
    /**
     * @var string
     *
     * @ORM\Column(name="cph_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cper_phase_cph_id_seq", allocationSize=1, initialValue=1)
     */
    private $cphId;

    /**
     * @var string
     *
     * @ORM\Column(name="cph_code", type="string", length=3, nullable=false)
     */
    private $cphCode;

    /**
     * @var string
     *
     * @ORM\Column(name="cph_libelle", type="string", length=50, nullable=false)
     */
    private $cphLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="cph_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $cphEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="cph_horscper", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $cphHorscper;

    /**
     * @var string
     *
     * @ORM\Column(name="cph_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $cphAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cph_datec", type="datetime", nullable=false)
     */
    private $cphDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cph_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $cphAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cph_datem", type="datetime", nullable=true)
     */
    private $cphDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cph_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $cphAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cph_datea", type="datetime", nullable=true)
     */
    private $cphDatea;



    public function getCphId(): ?string
    {
        return $this->cphId;
    }

    public function getCphCode(): ?string
    {
        return $this->cphCode;
    }

    public function setCphCode(string $cphCode): self
    {
        $this->cphCode = $cphCode;

        return $this;
    }

    public function getCphLibelle(): ?string
    {
        return $this->cphLibelle;
    }

    public function setCphLibelle(string $cphLibelle): self
    {
        $this->cphLibelle = $cphLibelle;

        return $this;
    }

    public function getCphEtat(): ?string
    {
        return $this->cphEtat;
    }

    public function setCphEtat(string $cphEtat): self
    {
        $this->cphEtat = $cphEtat;

        return $this;
    }

    public function getCphHorscper(): ?string
    {
        return $this->cphHorscper;
    }

    public function setCphHorscper(string $cphHorscper): self
    {
        $this->cphHorscper = $cphHorscper;

        return $this;
    }

    public function getCphAuteurc(): ?string
    {
        return $this->cphAuteurc;
    }

    public function setCphAuteurc(string $cphAuteurc): self
    {
        $this->cphAuteurc = $cphAuteurc;

        return $this;
    }

    public function getCphDatec(): ?\DateTimeInterface
    {
        return $this->cphDatec;
    }

    public function setCphDatec(\DateTimeInterface $cphDatec): self
    {
        $this->cphDatec = $cphDatec;

        return $this;
    }

    public function getCphAuteurm(): ?string
    {
        return $this->cphAuteurm;
    }

    public function setCphAuteurm(?string $cphAuteurm): self
    {
        $this->cphAuteurm = $cphAuteurm;

        return $this;
    }

    public function getCphDatem(): ?\DateTimeInterface
    {
        return $this->cphDatem;
    }

    public function setCphDatem(?\DateTimeInterface $cphDatem): self
    {
        $this->cphDatem = $cphDatem;

        return $this;
    }

    public function getCphAuteura(): ?string
    {
        return $this->cphAuteura;
    }

    public function setCphAuteura(?string $cphAuteura): self
    {
        $this->cphAuteura = $cphAuteura;

        return $this;
    }

    public function getCphDatea(): ?\DateTimeInterface
    {
        return $this->cphDatea;
    }

    public function setCphDatea(?\DateTimeInterface $cphDatea): self
    {
        $this->cphDatea = $cphDatea;

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

    public function getCphOpera(): ?CperOpera
    {
        return $this->cphOpera;
    }

    public function setCphOpera(?CperOpera $cphOpera): self
    {
        $this->cphOpera = $cphOpera;

        return $this;
    }


}
