<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GfPara
 *
 * @ORM\Table(name="gf_para", uniqueConstraints={@ORM\UniqueConstraint(name="gf_para_pk", columns={"gfp_id"})})
 * @ORM\Entity
 */
class GfPara
{
    /**
     * @var string
     *
     * @ORM\Column(name="gfp_id", type="decimal", precision=12, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gf_para_gfp_id_seq", allocationSize=1, initialValue=1)
     */
    private $gfpId;

    /**
     * @var string
     *
     * @ORM\Column(name="gfp_ebae", type="decimal", precision=4, scale=0, nullable=false, options={"comment"="Exercice Autorisation Engagement"})
     */
    private $gfpEbae;

    /**
     * @var string
     *
     * @ORM\Column(name="gfp_ebhae", type="decimal", precision=4, scale=0, nullable=false, options={"comment"="Exercice Hors Autorisation Engagement"})
     */
    private $gfpEbhae;

    /**
     * @var string
     *
     * @ORM\Column(name="gfp_dscparam", type="string", length=20, nullable=false, options={"comment"="Arguments du paramÃ¨tre DSC_PARAM : Â« !CORIOLIS !CORIOLIS Â»"})
     */
    private $gfpDscparam;

    /**
     * @var string
     *
     * @ORM\Column(name="gfp_delaip", type="decimal", precision=3, scale=0, nullable=false, options={"comment"="DÃ©lai de paiement"})
     */
    private $gfpDelaip;

    /**
     * @var string
     *
     * @ORM\Column(name="gfp_modep", type="decimal", precision=3, scale=0, nullable=false, options={"comment"="Mode de paiement"})
     */
    private $gfpModep;

    /**
     * @var string
     *
     * @ORM\Column(name="gfp_servgest", type="string", length=5, nullable=false, options={"comment"="Service gestionnaire"})
     */
    private $gfpServgest;

    /**
     * @var string
     *
     * @ORM\Column(name="gfp_codecoll", type="string", length=5, nullable=false, options={"comment"="Code collectivitÃ©"})
     */
    private $gfpCodecoll;

    public function getGfpId(): ?string
    {
        return $this->gfpId;
    }

    public function getGfpEbae(): ?string
    {
        return $this->gfpEbae;
    }

    public function setGfpEbae(string $gfpEbae): self
    {
        $this->gfpEbae = $gfpEbae;

        return $this;
    }

    public function getGfpEbhae(): ?string
    {
        return $this->gfpEbhae;
    }

    public function setGfpEbhae(string $gfpEbhae): self
    {
        $this->gfpEbhae = $gfpEbhae;

        return $this;
    }

    public function getGfpDscparam(): ?string
    {
        return $this->gfpDscparam;
    }

    public function setGfpDscparam(string $gfpDscparam): self
    {
        $this->gfpDscparam = $gfpDscparam;

        return $this;
    }

    public function getGfpDelaip(): ?string
    {
        return $this->gfpDelaip;
    }

    public function setGfpDelaip(string $gfpDelaip): self
    {
        $this->gfpDelaip = $gfpDelaip;

        return $this;
    }

    public function getGfpModep(): ?string
    {
        return $this->gfpModep;
    }

    public function setGfpModep(string $gfpModep): self
    {
        $this->gfpModep = $gfpModep;

        return $this;
    }

    public function getGfpServgest(): ?string
    {
        return $this->gfpServgest;
    }

    public function setGfpServgest(string $gfpServgest): self
    {
        $this->gfpServgest = $gfpServgest;

        return $this;
    }

    public function getGfpCodecoll(): ?string
    {
        return $this->gfpCodecoll;
    }

    public function setGfpCodecoll(string $gfpCodecoll): self
    {
        $this->gfpCodecoll = $gfpCodecoll;

        return $this;
    }


}
