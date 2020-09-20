<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OptionModaf
 *
 * @ORM\Table(name="option_modaf", uniqueConstraints={@ORM\UniqueConstraint(name="option_modaf_pk", columns={"opm_id"})})
 * @ORM\Entity
 */
class OptionModaf
{
    /**
     * @var string
     *
     * @ORM\Column(name="opm_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="option_modaf_opm_id_seq", allocationSize=1, initialValue=1)
     */
    private $opmId;

    /**
     * @var string
     *
     * @ORM\Column(name="opm_code", type="string", length=4, nullable=false)
     */
    private $opmCode;

    /**
     * @var string
     *
     * @ORM\Column(name="opm_libelle", type="string", length=50, nullable=false)
     */
    private $opmLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="opm_codedev", type="string", length=10, nullable=false)
     */
    private $opmCodedev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="opm_present", type="decimal", precision=1, scale=0, nullable=true, options={"comment"="0 = Non prÃ©sent, 1 = PrÃ©sent"})
     */
    private $opmPresent;

    public function getOpmId(): ?string
    {
        return $this->opmId;
    }

    public function getOpmCode(): ?string
    {
        return $this->opmCode;
    }

    public function setOpmCode(string $opmCode): self
    {
        $this->opmCode = $opmCode;

        return $this;
    }

    public function getOpmLibelle(): ?string
    {
        return $this->opmLibelle;
    }

    public function setOpmLibelle(string $opmLibelle): self
    {
        $this->opmLibelle = $opmLibelle;

        return $this;
    }

    public function getOpmCodedev(): ?string
    {
        return $this->opmCodedev;
    }

    public function setOpmCodedev(string $opmCodedev): self
    {
        $this->opmCodedev = $opmCodedev;

        return $this;
    }

    public function getOpmPresent(): ?string
    {
        return $this->opmPresent;
    }

    public function setOpmPresent(?string $opmPresent): self
    {
        $this->opmPresent = $opmPresent;

        return $this;
    }


}
