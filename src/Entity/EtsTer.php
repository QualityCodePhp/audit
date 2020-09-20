<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtsTer
 *
 * @ORM\Table(name="ets_ter", uniqueConstraints={@ORM\UniqueConstraint(name="ets_ter_pk", columns={"etr_id"})}, indexes={@ORM\Index(name="ets_ter_eeif", columns={"etr_etablssmt"}), @ORM\Index(name="ets_ter_zezif", columns={"etr_zone"})})
 * @ORM\Entity
 */
class EtsTer
{
    /**
     * @var string
     *
     * @ORM\Column(name="etr_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ets_ter_etr_id_seq", allocationSize=1, initialValue=1)
     */
    private $etrId;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="etr_etablssmt", referencedColumnName="ets_id")
     * })
     */
    private $etrEtablssmt;

    /**
     * @var \ZoneEmploi
     *
     * @ORM\ManyToOne(targetEntity="ZoneEmploi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="etr_zone", referencedColumnName="zoe_id")
     * })
     */
    private $etrZone;

    public function getEtrId(): ?string
    {
        return $this->etrId;
    }

    public function getEtrEtablssmt(): ?Etablssmt
    {
        return $this->etrEtablssmt;
    }

    public function setEtrEtablssmt(?Etablssmt $etrEtablssmt): self
    {
        $this->etrEtablssmt = $etrEtablssmt;

        return $this;
    }

    public function getEtrZone(): ?ZoneEmploi
    {
        return $this->etrZone;
    }

    public function setEtrZone(?ZoneEmploi $etrZone): self
    {
        $this->etrZone = $etrZone;

        return $this;
    }


}
