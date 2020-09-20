<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatModaf
 *
 * @ORM\Table(name="stat_modaf", uniqueConstraints={@ORM\UniqueConstraint(name="stat_modaf_pk", columns={"stm_id"})}, indexes={@ORM\Index(name="stat_modaf_omoif", columns={"stm_opmodaf"})})
 * @ORM\Entity
 */
class StatModaf
{
    /**
     * @var string
     *
     * @ORM\Column(name="stm_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="stat_modaf_stm_id_seq", allocationSize=1, initialValue=1)
     */
    private $stmId;

    /**
     * @var string
     *
     * @ORM\Column(name="stm_code", type="string", length=4, nullable=false)
     */
    private $stmCode;

    /**
     * @var string
     *
     * @ORM\Column(name="stm_libelle", type="string", length=50, nullable=false)
     */
    private $stmLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="stm_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $stmEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="stm_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $stmAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="stm_datec", type="datetime", nullable=false)
     */
    private $stmDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stm_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $stmAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="stm_datem", type="datetime", nullable=true)
     */
    private $stmDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stm_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $stmAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="stm_datea", type="datetime", nullable=true)
     */
    private $stmDatea;

    /**
     * @var \OptionModaf
     *
     * @ORM\ManyToOne(targetEntity="OptionModaf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stm_opmodaf", referencedColumnName="opm_id")
     * })
     */
    private $stmOpmodaf;

    public function getStmId(): ?string
    {
        return $this->stmId;
    }

    public function getStmCode(): ?string
    {
        return $this->stmCode;
    }

    public function setStmCode(string $stmCode): self
    {
        $this->stmCode = $stmCode;

        return $this;
    }

    public function getStmLibelle(): ?string
    {
        return $this->stmLibelle;
    }

    public function setStmLibelle(string $stmLibelle): self
    {
        $this->stmLibelle = $stmLibelle;

        return $this;
    }

    public function getStmEtat(): ?string
    {
        return $this->stmEtat;
    }

    public function setStmEtat(string $stmEtat): self
    {
        $this->stmEtat = $stmEtat;

        return $this;
    }

    public function getStmAuteurc(): ?string
    {
        return $this->stmAuteurc;
    }

    public function setStmAuteurc(string $stmAuteurc): self
    {
        $this->stmAuteurc = $stmAuteurc;

        return $this;
    }

    public function getStmDatec(): ?\DateTimeInterface
    {
        return $this->stmDatec;
    }

    public function setStmDatec(\DateTimeInterface $stmDatec): self
    {
        $this->stmDatec = $stmDatec;

        return $this;
    }

    public function getStmAuteurm(): ?string
    {
        return $this->stmAuteurm;
    }

    public function setStmAuteurm(?string $stmAuteurm): self
    {
        $this->stmAuteurm = $stmAuteurm;

        return $this;
    }

    public function getStmDatem(): ?\DateTimeInterface
    {
        return $this->stmDatem;
    }

    public function setStmDatem(?\DateTimeInterface $stmDatem): self
    {
        $this->stmDatem = $stmDatem;

        return $this;
    }

    public function getStmAuteura(): ?string
    {
        return $this->stmAuteura;
    }

    public function setStmAuteura(?string $stmAuteura): self
    {
        $this->stmAuteura = $stmAuteura;

        return $this;
    }

    public function getStmDatea(): ?\DateTimeInterface
    {
        return $this->stmDatea;
    }

    public function setStmDatea(?\DateTimeInterface $stmDatea): self
    {
        $this->stmDatea = $stmDatea;

        return $this;
    }

    public function getStmOpmodaf(): ?OptionModaf
    {
        return $this->stmOpmodaf;
    }

    public function setStmOpmodaf(?OptionModaf $stmOpmodaf): self
    {
        $this->stmOpmodaf = $stmOpmodaf;

        return $this;
    }


}
