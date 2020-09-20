<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PerProg
 *
 * @ORM\Table(name="per_prog", uniqueConstraints={@ORM\UniqueConstraint(name="per_prog_pk", columns={"ppr_id"})}, indexes={@ORM\Index(name="per_prog_ppif2", columns={"ppr_prog"}), @ORM\Index(name="per_prog_ppif", columns={"ppr_periode"})})
 * @ORM\Entity
 */
class PerProg
{
    /**
     * @var int
     *
     * @ORM\Column(name="ppr_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="per_prog_ppr_id_seq", allocationSize=1, initialValue=1)
     */
    private $pprId;

    /**
     * @var string
     *
     * @ORM\Column(name="ppr_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $pprEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ppr_datedeb", type="datetime", nullable=false)
     */
    private $pprDatedeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ppr_datefin", type="datetime", nullable=false)
     */
    private $pprDatefin;

    /**
     * @var string
     *
     * @ORM\Column(name="ppr_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $pprAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ppr_datec", type="datetime", nullable=false)
     */
    private $pprDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ppr_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $pprAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ppr_datem", type="datetime", nullable=true)
     */
    private $pprDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ppr_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $pprAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ppr_datea", type="datetime", nullable=true)
     */
    private $pprDatea;

    /**
     * @var \Periode
     *
     * @ORM\ManyToOne(targetEntity="Periode")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ppr_periode", referencedColumnName="per_id")
     * })
     */
    private $pprPeriode;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ppr_prog", referencedColumnName="prg_id")
     * })
     */
    private $pprProg;

    public function getPprId(): ?int
    {
        return $this->pprId;
    }

    public function getPprEtat(): ?string
    {
        return $this->pprEtat;
    }

    public function setPprEtat(string $pprEtat): self
    {
        $this->pprEtat = $pprEtat;

        return $this;
    }

    public function getPprDatedeb(): ?\DateTimeInterface
    {
        return $this->pprDatedeb;
    }

    public function setPprDatedeb(\DateTimeInterface $pprDatedeb): self
    {
        $this->pprDatedeb = $pprDatedeb;

        return $this;
    }

    public function getPprDatefin(): ?\DateTimeInterface
    {
        return $this->pprDatefin;
    }

    public function setPprDatefin(\DateTimeInterface $pprDatefin): self
    {
        $this->pprDatefin = $pprDatefin;

        return $this;
    }

    public function getPprAuteurc(): ?string
    {
        return $this->pprAuteurc;
    }

    public function setPprAuteurc(string $pprAuteurc): self
    {
        $this->pprAuteurc = $pprAuteurc;

        return $this;
    }

    public function getPprDatec(): ?\DateTimeInterface
    {
        return $this->pprDatec;
    }

    public function setPprDatec(\DateTimeInterface $pprDatec): self
    {
        $this->pprDatec = $pprDatec;

        return $this;
    }

    public function getPprAuteurm(): ?string
    {
        return $this->pprAuteurm;
    }

    public function setPprAuteurm(?string $pprAuteurm): self
    {
        $this->pprAuteurm = $pprAuteurm;

        return $this;
    }

    public function getPprDatem(): ?\DateTimeInterface
    {
        return $this->pprDatem;
    }

    public function setPprDatem(?\DateTimeInterface $pprDatem): self
    {
        $this->pprDatem = $pprDatem;

        return $this;
    }

    public function getPprAuteura(): ?string
    {
        return $this->pprAuteura;
    }

    public function setPprAuteura(?string $pprAuteura): self
    {
        $this->pprAuteura = $pprAuteura;

        return $this;
    }

    public function getPprDatea(): ?\DateTimeInterface
    {
        return $this->pprDatea;
    }

    public function setPprDatea(?\DateTimeInterface $pprDatea): self
    {
        $this->pprDatea = $pprDatea;

        return $this;
    }

    public function getPprPeriode(): ?Periode
    {
        return $this->pprPeriode;
    }

    public function setPprPeriode(?Periode $pprPeriode): self
    {
        $this->pprPeriode = $pprPeriode;

        return $this;
    }

    public function getPprProg(): ?Programme
    {
        return $this->pprProg;
    }

    public function setPprProg(?Programme $pprProg): self
    {
        $this->pprProg = $pprProg;

        return $this;
    }


}
