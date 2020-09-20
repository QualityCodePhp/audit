<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EttSaa
 *
 * @ORM\Table(name="ett_saa", uniqueConstraints={@ORM\UniqueConstraint(name="ett_saa_pk", columns={"eaa_id"})}, indexes={@ORM\Index(name="ett_saa_eseif", columns={"eaa_sa"})})
 * @ORM\Entity
 */
class EttSaa
{
    /**
     * @var string
     *
     * @ORM\Column(name="eaa_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ett_saa_eaa_id_seq", allocationSize=1, initialValue=1)
     */
    private $eaaId;

    /**
     * @var string
     *
     * @ORM\Column(name="eaa_annee", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $eaaAnnee;

    /**
     * @var string
     *
     * @ORM\Column(name="eaa_indice", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $eaaIndice;

    /**
     * @var string
     *
     * @ORM\Column(name="eaa_budget", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $eaaBudget;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eaa_budgetreg", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eaaBudgetreg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eaa_budgetfpr", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eaaBudgetfpr;

    /**
     * @var \EttSa
     *
     * @ORM\ManyToOne(targetEntity="EttSa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="eaa_sa", referencedColumnName="esa_id")
     * })
     */
    private $eaaSa;

    public function getEaaId(): ?string
    {
        return $this->eaaId;
    }

    public function getEaaAnnee(): ?string
    {
        return $this->eaaAnnee;
    }

    public function setEaaAnnee(string $eaaAnnee): self
    {
        $this->eaaAnnee = $eaaAnnee;

        return $this;
    }

    public function getEaaIndice(): ?string
    {
        return $this->eaaIndice;
    }

    public function setEaaIndice(string $eaaIndice): self
    {
        $this->eaaIndice = $eaaIndice;

        return $this;
    }

    public function getEaaBudget(): ?string
    {
        return $this->eaaBudget;
    }

    public function setEaaBudget(string $eaaBudget): self
    {
        $this->eaaBudget = $eaaBudget;

        return $this;
    }

    public function getEaaBudgetreg(): ?string
    {
        return $this->eaaBudgetreg;
    }

    public function setEaaBudgetreg(?string $eaaBudgetreg): self
    {
        $this->eaaBudgetreg = $eaaBudgetreg;

        return $this;
    }

    public function getEaaBudgetfpr(): ?string
    {
        return $this->eaaBudgetfpr;
    }

    public function setEaaBudgetfpr(?string $eaaBudgetfpr): self
    {
        $this->eaaBudgetfpr = $eaaBudgetfpr;

        return $this;
    }

    public function getEaaSa(): ?EttSa
    {
        return $this->eaaSa;
    }

    public function setEaaSa(?EttSa $eaaSa): self
    {
        $this->eaaSa = $eaaSa;

        return $this;
    }


}
