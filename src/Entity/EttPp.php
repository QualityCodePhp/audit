<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EttPp
 *
 * @ORM\Table(name="ett_pp", uniqueConstraints={@ORM\UniqueConstraint(name="ett_pp_pk", columns={"epp_id"})})
 * @ORM\Entity
 */
class EttPp
{
    /**
     * @var string
     *
     * @ORM\Column(name="epp_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ett_pp_epp_id_seq", allocationSize=1, initialValue=1)
     */
    private $eppId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="epp_activite", type="string", length=50, nullable=true)
     */
    private $eppActivite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="epp_nbagents", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eppNbagents;

    /**
     * @var string|null
     *
     * @ORM\Column(name="epp_nbagef", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eppNbagef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="epp_nbhabit", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eppNbhabit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="epp_budget", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eppBudget;

    public function getEppId(): ?string
    {
        return $this->eppId;
    }

    public function getEppActivite(): ?string
    {
        return $this->eppActivite;
    }

    public function setEppActivite(?string $eppActivite): self
    {
        $this->eppActivite = $eppActivite;

        return $this;
    }

    public function getEppNbagents(): ?string
    {
        return $this->eppNbagents;
    }

    public function setEppNbagents(?string $eppNbagents): self
    {
        $this->eppNbagents = $eppNbagents;

        return $this;
    }

    public function getEppNbagef(): ?string
    {
        return $this->eppNbagef;
    }

    public function setEppNbagef(?string $eppNbagef): self
    {
        $this->eppNbagef = $eppNbagef;

        return $this;
    }

    public function getEppNbhabit(): ?string
    {
        return $this->eppNbhabit;
    }

    public function setEppNbhabit(?string $eppNbhabit): self
    {
        $this->eppNbhabit = $eppNbhabit;

        return $this;
    }

    public function getEppBudget(): ?string
    {
        return $this->eppBudget;
    }

    public function setEppBudget(?string $eppBudget): self
    {
        $this->eppBudget = $eppBudget;

        return $this;
    }


}
