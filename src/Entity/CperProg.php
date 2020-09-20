<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CperProg
 *
 * @ORM\Table(name="cper_prog", uniqueConstraints={@ORM\UniqueConstraint(name="cper_prog_pk", columns={"cpr_id"})}, indexes={@ORM\Index(name="cper_prog_cpcif3", columns={"cpr_operation"}), @ORM\Index(name="cper_prog_ppif", columns={"cpr_programme"}), @ORM\Index(name="cper_prog_cpcif2", columns={"cpr_phase"})})
 * @ORM\Entity
 */
class CperProg
{
    /**
     * @var int
     *
     * @ORM\Column(name="cpr_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cper_prog_cpr_id_seq", allocationSize=1, initialValue=1)
     */
    private $cprId;

    /**
     * @var string
     *
     * @ORM\Column(name="cpr_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $cprEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="cpr_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $cprAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cpr_datec", type="datetime", nullable=false)
     */
    private $cprDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cpr_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $cprAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cpr_datea", type="datetime", nullable=true)
     */
    private $cprDatea;

    /**
     * @var \CperOpera
     *
     * @ORM\ManyToOne(targetEntity="CperOpera")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cpr_operation", referencedColumnName="cop_id")
     * })
     */
    private $cprOperation;

    /**
     * @var \CperPhase
     *
     * @ORM\ManyToOne(targetEntity="CperPhase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cpr_phase", referencedColumnName="cph_id")
     * })
     */
    private $cprPhase;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cpr_programme", referencedColumnName="prg_id")
     * })
     */
    private $cprProgramme;

    public function getCprId(): ?int
    {
        return $this->cprId;
    }

    public function getCprEtat(): ?string
    {
        return $this->cprEtat;
    }

    public function setCprEtat(string $cprEtat): self
    {
        $this->cprEtat = $cprEtat;

        return $this;
    }

    public function getCprAuteurc(): ?string
    {
        return $this->cprAuteurc;
    }

    public function setCprAuteurc(string $cprAuteurc): self
    {
        $this->cprAuteurc = $cprAuteurc;

        return $this;
    }

    public function getCprDatec(): ?\DateTimeInterface
    {
        return $this->cprDatec;
    }

    public function setCprDatec(\DateTimeInterface $cprDatec): self
    {
        $this->cprDatec = $cprDatec;

        return $this;
    }

    public function getCprAuteura(): ?string
    {
        return $this->cprAuteura;
    }

    public function setCprAuteura(?string $cprAuteura): self
    {
        $this->cprAuteura = $cprAuteura;

        return $this;
    }

    public function getCprDatea(): ?\DateTimeInterface
    {
        return $this->cprDatea;
    }

    public function setCprDatea(?\DateTimeInterface $cprDatea): self
    {
        $this->cprDatea = $cprDatea;

        return $this;
    }

    public function getCprOperation(): ?CperOpera
    {
        return $this->cprOperation;
    }

    public function setCprOperation(?CperOpera $cprOperation): self
    {
        $this->cprOperation = $cprOperation;

        return $this;
    }

    public function getCprPhase(): ?CperPhase
    {
        return $this->cprPhase;
    }

    public function setCprPhase(?CperPhase $cprPhase): self
    {
        $this->cprPhase = $cprPhase;

        return $this;
    }

    public function getCprProgramme(): ?Programme
    {
        return $this->cprProgramme;
    }

    public function setCprProgramme(?Programme $cprProgramme): self
    {
        $this->cprProgramme = $cprProgramme;

        return $this;
    }


}
