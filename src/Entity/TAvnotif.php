<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TAvnotif
 *
 * @ORM\Table(name="t_avnotif", uniqueConstraints={@ORM\UniqueConstraint(name="t_avnotif_pk", columns={"tan_id"})}, indexes={@ORM\Index(name="t_avnotif_mamif2", columns={"tan_mode"})})
 * @ORM\Entity
 */
class TAvnotif
{
    /**
     * @var string
     *
     * @ORM\Column(name="tan_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="t_avnotif_tan_id_seq", allocationSize=1, initialValue=1)
     */
    private $tanId;

    /**
     * @var string
     *
     * @ORM\Column(name="tan_code", type="string", length=3, nullable=false)
     */
    private $tanCode;

    /**
     * @var string
     *
     * @ORM\Column(name="tan_libelle", type="string", length=50, nullable=false)
     */
    private $tanLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="tan_tri", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $tanTri;

    /**
     * @var \ModAch
     *
     * @ORM\ManyToOne(targetEntity="ModAch")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tan_mode", referencedColumnName="mod_id")
     * })
     */
    private $tanMode;

    public function getTanId(): ?string
    {
        return $this->tanId;
    }

    public function getTanCode(): ?string
    {
        return $this->tanCode;
    }

    public function setTanCode(string $tanCode): self
    {
        $this->tanCode = $tanCode;

        return $this;
    }

    public function getTanLibelle(): ?string
    {
        return $this->tanLibelle;
    }

    public function setTanLibelle(string $tanLibelle): self
    {
        $this->tanLibelle = $tanLibelle;

        return $this;
    }

    public function getTanTri(): ?string
    {
        return $this->tanTri;
    }

    public function setTanTri(string $tanTri): self
    {
        $this->tanTri = $tanTri;

        return $this;
    }

    public function getTanMode(): ?ModAch
    {
        return $this->tanMode;
    }

    public function setTanMode(?ModAch $tanMode): self
    {
        $this->tanMode = $tanMode;

        return $this;
    }


}
