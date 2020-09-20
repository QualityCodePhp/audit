<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AriPara
 *
 * @ORM\Table(name="ari_para", uniqueConstraints={@ORM\UniqueConstraint(name="ari_para_pk", columns={"apa_id"})})
 * @ORM\Entity
 */
class AriPara
{
    /**
     * @var string
     *
     * @ORM\Column(name="apa_id", type="decimal", precision=12, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ari_para_apa_id_seq", allocationSize=1, initialValue=1)
     */
    private $apaId;

    /**
     * @var string
     *
     * @ORM\Column(name="apa_ebae", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $apaEbae;

    /**
     * @var string
     *
     * @ORM\Column(name="apa_ebhae", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $apaEbhae;

    /**
     * @var string
     *
     * @ORM\Column(name="apa_dscparam", type="string", length=20, nullable=false)
     */
    private $apaDscparam;

    /**
     * @var string
     *
     * @ORM\Column(name="apa_delaip", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $apaDelaip;

    /**
     * @var string
     *
     * @ORM\Column(name="apa_modep", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $apaModep;

    /**
     * @var string
     *
     * @ORM\Column(name="apa_servgest", type="string", length=5, nullable=false)
     */
    private $apaServgest;

    /**
     * @var string
     *
     * @ORM\Column(name="apa_codecoll", type="string", length=5, nullable=false)
     */
    private $apaCodecoll;

    public function getApaId(): ?string
    {
        return $this->apaId;
    }

    public function getApaEbae(): ?string
    {
        return $this->apaEbae;
    }

    public function setApaEbae(string $apaEbae): self
    {
        $this->apaEbae = $apaEbae;

        return $this;
    }

    public function getApaEbhae(): ?string
    {
        return $this->apaEbhae;
    }

    public function setApaEbhae(string $apaEbhae): self
    {
        $this->apaEbhae = $apaEbhae;

        return $this;
    }

    public function getApaDscparam(): ?string
    {
        return $this->apaDscparam;
    }

    public function setApaDscparam(string $apaDscparam): self
    {
        $this->apaDscparam = $apaDscparam;

        return $this;
    }

    public function getApaDelaip(): ?string
    {
        return $this->apaDelaip;
    }

    public function setApaDelaip(string $apaDelaip): self
    {
        $this->apaDelaip = $apaDelaip;

        return $this;
    }

    public function getApaModep(): ?string
    {
        return $this->apaModep;
    }

    public function setApaModep(string $apaModep): self
    {
        $this->apaModep = $apaModep;

        return $this;
    }

    public function getApaServgest(): ?string
    {
        return $this->apaServgest;
    }

    public function setApaServgest(string $apaServgest): self
    {
        $this->apaServgest = $apaServgest;

        return $this;
    }

    public function getApaCodecoll(): ?string
    {
        return $this->apaCodecoll;
    }

    public function setApaCodecoll(string $apaCodecoll): self
    {
        $this->apaCodecoll = $apaCodecoll;

        return $this;
    }


}
