<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 *
 * @ORM\Table(name="module", uniqueConstraints={@ORM\UniqueConstraint(name="module_pk", columns={"mou_id"})})
 * @ORM\Entity
 */
class Module
{
    /**
     * @var int
     *
     * @ORM\Column(name="mou_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="module_mou_id_seq", allocationSize=1, initialValue=1)
     */
    private $mouId;

    /**
     * @var string
     *
     * @ORM\Column(name="mou_lib", type="string", length=100, nullable=false)
     */
    private $mouLib;

    /**
     * @var string
     *
     * @ORM\Column(name="mou_flg_suppr", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $mouFlgSuppr;

    public function getMouId(): ?int
    {
        return $this->mouId;
    }

    public function getMouLib(): ?string
    {
        return $this->mouLib;
    }

    public function setMouLib(string $mouLib): self
    {
        $this->mouLib = $mouLib;

        return $this;
    }

    public function getMouFlgSuppr(): ?string
    {
        return $this->mouFlgSuppr;
    }

    public function setMouFlgSuppr(string $mouFlgSuppr): self
    {
        $this->mouFlgSuppr = $mouFlgSuppr;

        return $this;
    }


}
