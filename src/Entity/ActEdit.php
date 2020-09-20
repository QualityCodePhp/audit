<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActEdit
 *
 * @ORM\Table(name="act_edit", uniqueConstraints={@ORM\UniqueConstraint(name="act_edit_pk", columns={"ace_id"})}, indexes={@ORM\Index(name="act_edit_ace_mode_mamif", columns={"ace_mode"})})
 * @ORM\Entity
 */
class ActEdit
{
    /**
     * @var string
     *
     * @ORM\Column(name="ace_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_edit_ace_id_seq", allocationSize=1, initialValue=1)
     */
    private $aceId;

    /**
     * @var string
     *
     * @ORM\Column(name="ace_codedev", type="string", length=10, nullable=false)
     */
    private $aceCodedev;

    /**
     * @var string
     *
     * @ORM\Column(name="ace_libelle", type="string", length=50, nullable=false)
     */
    private $aceLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="ace_edimod", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $aceEdimod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ace_filtre", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $aceFiltre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ace_filtre1", type="string", length=10, nullable=true)
     */
    private $aceFiltre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ace_courrier", type="string", length=30, nullable=true)
     */
    private $aceCourrier;

    /**
     * @var \ModAch
     *
     * @ORM\ManyToOne(targetEntity="ModAch")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ace_mode", referencedColumnName="mod_id")
     * })
     */
    private $aceMode;

    public function getAceId(): ?string
    {
        return $this->aceId;
    }

    public function getAceCodedev(): ?string
    {
        return $this->aceCodedev;
    }

    public function setAceCodedev(string $aceCodedev): self
    {
        $this->aceCodedev = $aceCodedev;

        return $this;
    }

    public function getAceLibelle(): ?string
    {
        return $this->aceLibelle;
    }

    public function setAceLibelle(string $aceLibelle): self
    {
        $this->aceLibelle = $aceLibelle;

        return $this;
    }

    public function getAceEdimod(): ?string
    {
        return $this->aceEdimod;
    }

    public function setAceEdimod(string $aceEdimod): self
    {
        $this->aceEdimod = $aceEdimod;

        return $this;
    }

    public function getAceFiltre(): ?string
    {
        return $this->aceFiltre;
    }

    public function setAceFiltre(?string $aceFiltre): self
    {
        $this->aceFiltre = $aceFiltre;

        return $this;
    }

    public function getAceFiltre1(): ?string
    {
        return $this->aceFiltre1;
    }

    public function setAceFiltre1(?string $aceFiltre1): self
    {
        $this->aceFiltre1 = $aceFiltre1;

        return $this;
    }

    public function getAceCourrier(): ?string
    {
        return $this->aceCourrier;
    }

    public function setAceCourrier(?string $aceCourrier): self
    {
        $this->aceCourrier = $aceCourrier;

        return $this;
    }

    public function getAceMode(): ?ModAch
    {
        return $this->aceMode;
    }

    public function setAceMode(?ModAch $aceMode): self
    {
        $this->aceMode = $aceMode;

        return $this;
    }


}
