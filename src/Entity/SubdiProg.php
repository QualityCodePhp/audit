<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubdiProg
 *
 * @ORM\Table(name="subdi_prog", uniqueConstraints={@ORM\UniqueConstraint(name="subdi_prog_pk", columns={"sup_id"})}, indexes={@ORM\Index(name="subdi_prog_sdsif", columns={"sup_subdispo"}), @ORM\Index(name="subdi_prog_ppif", columns={"sup_prog"})})
 * @ORM\Entity
 */
class SubdiProg
{
    /**
     * @var int
     *
     * @ORM\Column(name="sup_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="subdi_prog_sup_id_seq", allocationSize=1, initialValue=1)
     */
    private $supId;

    /**
     * @var string
     *
     * @ORM\Column(name="sup_budget", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $supBudget;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sup_budgetremu", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $supBudgetremu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sup_nbcommande", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $supNbcommande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sup_datec", type="datetime", nullable=false)
     */
    private $supDatec;

    /**
     * @var string
     *
     * @ORM\Column(name="sup_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $supAuteurc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sup_datem", type="datetime", nullable=true)
     */
    private $supDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sup_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $supAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sup_datea", type="datetime", nullable=true)
     */
    private $supDatea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sup_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $supAuteura;

    /**
     * @var string
     *
     * @ORM\Column(name="sup_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $supEtat;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sup_prog", referencedColumnName="prg_id")
     * })
     */
    private $supProg;

    /**
     * @var \SubdiDispo
     *
     * @ORM\ManyToOne(targetEntity="SubdiDispo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sup_subdispo", referencedColumnName="sud_id")
     * })
     */
    private $supSubdispo;

    public function getSupId(): ?int
    {
        return $this->supId;
    }

    public function getSupBudget(): ?string
    {
        return $this->supBudget;
    }

    public function setSupBudget(string $supBudget): self
    {
        $this->supBudget = $supBudget;

        return $this;
    }

    public function getSupBudgetremu(): ?string
    {
        return $this->supBudgetremu;
    }

    public function setSupBudgetremu(?string $supBudgetremu): self
    {
        $this->supBudgetremu = $supBudgetremu;

        return $this;
    }

    public function getSupNbcommande(): ?string
    {
        return $this->supNbcommande;
    }

    public function setSupNbcommande(?string $supNbcommande): self
    {
        $this->supNbcommande = $supNbcommande;

        return $this;
    }

    public function getSupDatec(): ?\DateTimeInterface
    {
        return $this->supDatec;
    }

    public function setSupDatec(\DateTimeInterface $supDatec): self
    {
        $this->supDatec = $supDatec;

        return $this;
    }

    public function getSupAuteurc(): ?string
    {
        return $this->supAuteurc;
    }

    public function setSupAuteurc(string $supAuteurc): self
    {
        $this->supAuteurc = $supAuteurc;

        return $this;
    }

    public function getSupDatem(): ?\DateTimeInterface
    {
        return $this->supDatem;
    }

    public function setSupDatem(?\DateTimeInterface $supDatem): self
    {
        $this->supDatem = $supDatem;

        return $this;
    }

    public function getSupAuteurm(): ?string
    {
        return $this->supAuteurm;
    }

    public function setSupAuteurm(?string $supAuteurm): self
    {
        $this->supAuteurm = $supAuteurm;

        return $this;
    }

    public function getSupDatea(): ?\DateTimeInterface
    {
        return $this->supDatea;
    }

    public function setSupDatea(?\DateTimeInterface $supDatea): self
    {
        $this->supDatea = $supDatea;

        return $this;
    }

    public function getSupAuteura(): ?string
    {
        return $this->supAuteura;
    }

    public function setSupAuteura(?string $supAuteura): self
    {
        $this->supAuteura = $supAuteura;

        return $this;
    }

    public function getSupEtat(): ?string
    {
        return $this->supEtat;
    }

    public function setSupEtat(string $supEtat): self
    {
        $this->supEtat = $supEtat;

        return $this;
    }

    public function getSupProg(): ?Programme
    {
        return $this->supProg;
    }

    public function setSupProg(?Programme $supProg): self
    {
        $this->supProg = $supProg;

        return $this;
    }

    public function getSupSubdispo(): ?SubdiDispo
    {
        return $this->supSubdispo;
    }

    public function setSupSubdispo(?SubdiDispo $supSubdispo): self
    {
        $this->supSubdispo = $supSubdispo;

        return $this;
    }


}
