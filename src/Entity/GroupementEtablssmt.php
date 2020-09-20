<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupementEtablssmt
 *
 * @ORM\Table(name="groupement_etablssmt", uniqueConstraints={@ORM\UniqueConstraint(name="groupement_etablssmt_pk", columns={"gpe_id"})}, indexes={@ORM\Index(name="gpt_ets_ets_fk", columns={"ets_id"}), @ORM\Index(name="gpt_gpt_ets_fk", columns={"gpt_id"})})
 * @ORM\Entity
 */
class GroupementEtablssmt
{
    /**
     * @var string
     *
     * @ORM\Column(name="gpe_id", type="decimal", precision=8, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="groupement_etablssmt_gpe_id_seq", allocationSize=1, initialValue=1)
     */
    private $gpeId;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ets_id", referencedColumnName="ets_id")
     * })
     */
    private $ets;

    /**
     * @var \Groupement
     *
     * @ORM\ManyToOne(targetEntity="Groupement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gpt_id", referencedColumnName="gpt_id")
     * })
     */
    private $gpt;

    public function getGpeId(): ?string
    {
        return $this->gpeId;
    }

    public function getEts(): ?Etablssmt
    {
        return $this->ets;
    }

    public function setEts(?Etablssmt $ets): self
    {
        $this->ets = $ets;

        return $this;
    }

    public function getGpt(): ?Groupement
    {
        return $this->gpt;
    }

    public function setGpt(?Groupement $gpt): self
    {
        $this->gpt = $gpt;

        return $this;
    }


}
