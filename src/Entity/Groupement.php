<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupement
 *
 * @ORM\Table(name="groupement", uniqueConstraints={@ORM\UniqueConstraint(name="groupement_pk", columns={"gpt_id"})}, indexes={@ORM\Index(name="gpt_ets_fk", columns={"ets_id_mandataire"})})
 * @ORM\Entity
 */
class Groupement
{
    /**
     * @var string
     *
     * @ORM\Column(name="gpt_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="groupement_gpt_id_seq", allocationSize=1, initialValue=1)
     */
    private $gptId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gpt_nom", type="string", length=2000, nullable=true)
     */
    private $gptNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gpt_num_finance", type="string", length=50, nullable=true)
     */
    private $gptNumFinance;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ets_id_mandataire", referencedColumnName="ets_id")
     * })
     */
    private $etsIdMandataire;

    public function getGptId(): ?string
    {
        return $this->gptId;
    }

    public function getGptNom(): ?string
    {
        return $this->gptNom;
    }

    public function setGptNom(?string $gptNom): self
    {
        $this->gptNom = $gptNom;

        return $this;
    }

    public function getGptNumFinance(): ?string
    {
        return $this->gptNumFinance;
    }

    public function setGptNumFinance(?string $gptNumFinance): self
    {
        $this->gptNumFinance = $gptNumFinance;

        return $this;
    }

    public function getEtsIdMandataire(): ?Etablssmt
    {
        return $this->etsIdMandataire;
    }

    public function setEtsIdMandataire(?Etablssmt $etsIdMandataire): self
    {
        $this->etsIdMandataire = $etsIdMandataire;

        return $this;
    }


}
