<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MesProg
 *
 * @ORM\Table(name="mes_prog", uniqueConstraints={@ORM\UniqueConstraint(name="mes_prog_pk", columns={"mpg_id"})}, indexes={@ORM\Index(name="mes_prog_mdmif", columns={"mpg_mesuredispo"}), @ORM\Index(name="mes_prog_ppif", columns={"mpg_programme"})})
 * @ORM\Entity
 */
class MesProg
{
    /**
     * @var int
     *
     * @ORM\Column(name="mpg_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mes_prog_mpg_id_seq", allocationSize=1, initialValue=1)
     */
    private $mpgId;

    /**
     * @var string
     *
     * @ORM\Column(name="mpg_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $mpgEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="mpg_budget", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $mpgBudget;

    /**
     * @var string
     *
     * @ORM\Column(name="mpg_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $mpgAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mpg_datec", type="datetime", nullable=false)
     */
    private $mpgDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mpg_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $mpgAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="mpg_datem", type="datetime", nullable=true)
     */
    private $mpgDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mpg_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $mpgAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="mpg_datea", type="datetime", nullable=true)
     */
    private $mpgDatea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mpg_mntestremu", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $mpgMntestremu;

    /**
     * @var \MesDispo
     *
     * @ORM\ManyToOne(targetEntity="MesDispo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mpg_mesuredispo", referencedColumnName="mdp_id")
     * })
     */
    private $mpgMesuredispo;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mpg_programme", referencedColumnName="prg_id")
     * })
     */
    private $mpgProgramme;

    public function getMpgId(): ?int
    {
        return $this->mpgId;
    }

    public function getMpgEtat(): ?string
    {
        return $this->mpgEtat;
    }

    public function setMpgEtat(string $mpgEtat): self
    {
        $this->mpgEtat = $mpgEtat;

        return $this;
    }

    public function getMpgBudget(): ?string
    {
        return $this->mpgBudget;
    }

    public function setMpgBudget(string $mpgBudget): self
    {
        $this->mpgBudget = $mpgBudget;

        return $this;
    }

    public function getMpgAuteurc(): ?string
    {
        return $this->mpgAuteurc;
    }

    public function setMpgAuteurc(string $mpgAuteurc): self
    {
        $this->mpgAuteurc = $mpgAuteurc;

        return $this;
    }

    public function getMpgDatec(): ?\DateTimeInterface
    {
        return $this->mpgDatec;
    }

    public function setMpgDatec(\DateTimeInterface $mpgDatec): self
    {
        $this->mpgDatec = $mpgDatec;

        return $this;
    }

    public function getMpgAuteurm(): ?string
    {
        return $this->mpgAuteurm;
    }

    public function setMpgAuteurm(?string $mpgAuteurm): self
    {
        $this->mpgAuteurm = $mpgAuteurm;

        return $this;
    }

    public function getMpgDatem(): ?\DateTimeInterface
    {
        return $this->mpgDatem;
    }

    public function setMpgDatem(?\DateTimeInterface $mpgDatem): self
    {
        $this->mpgDatem = $mpgDatem;

        return $this;
    }

    public function getMpgAuteura(): ?string
    {
        return $this->mpgAuteura;
    }

    public function setMpgAuteura(?string $mpgAuteura): self
    {
        $this->mpgAuteura = $mpgAuteura;

        return $this;
    }

    public function getMpgDatea(): ?\DateTimeInterface
    {
        return $this->mpgDatea;
    }

    public function setMpgDatea(?\DateTimeInterface $mpgDatea): self
    {
        $this->mpgDatea = $mpgDatea;

        return $this;
    }

    public function getMpgMntestremu(): ?string
    {
        return $this->mpgMntestremu;
    }

    public function setMpgMntestremu(?string $mpgMntestremu): self
    {
        $this->mpgMntestremu = $mpgMntestremu;

        return $this;
    }

    public function getMpgMesuredispo(): ?MesDispo
    {
        return $this->mpgMesuredispo;
    }

    public function setMpgMesuredispo(?MesDispo $mpgMesuredispo): self
    {
        $this->mpgMesuredispo = $mpgMesuredispo;

        return $this;
    }

    public function getMpgProgramme(): ?Programme
    {
        return $this->mpgProgramme;
    }

    public function setMpgProgramme(?Programme $mpgProgramme): self
    {
        $this->mpgProgramme = $mpgProgramme;

        return $this;
    }


}
