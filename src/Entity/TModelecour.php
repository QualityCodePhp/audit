<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TModelecour
 *
 * @ORM\Table(name="t_modelecour", uniqueConstraints={@ORM\UniqueConstraint(name="t_modelecour_pk", columns={"tmc_id"})}, indexes={@ORM\Index(name="tmc_ref_type_fk", columns={"ref_id_type"}), @ORM\Index(name="t_modelecour_mamif", columns={"tmc_mode"})})
 * @ORM\Entity
 */
class TModelecour
{
    /**
     * @var string
     *
     * @ORM\Column(name="tmc_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="t_modelecour_tmc_id_seq", allocationSize=1, initialValue=1)
     */
    private $tmcId;

    /**
     * @var string
     *
     * @ORM\Column(name="tmc_code", type="string", length=30, nullable=false)
     */
    private $tmcCode;

    /**
     * @var string
     *
     * @ORM\Column(name="tmc_libelle", type="string", length=50, nullable=false)
     */
    private $tmcLibelle;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_type", referencedColumnName="ref_id")
     * })
     */
    private $refIdType;

    /**
     * @var \ModAch
     *
     * @ORM\ManyToOne(targetEntity="ModAch")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tmc_mode", referencedColumnName="mod_id")
     * })
     */
    private $tmcMode;

    public function getTmcId(): ?string
    {
        return $this->tmcId;
    }

    public function getTmcCode(): ?string
    {
        return $this->tmcCode;
    }

    public function setTmcCode(string $tmcCode): self
    {
        $this->tmcCode = $tmcCode;

        return $this;
    }

    public function getTmcLibelle(): ?string
    {
        return $this->tmcLibelle;
    }

    public function setTmcLibelle(string $tmcLibelle): self
    {
        $this->tmcLibelle = $tmcLibelle;

        return $this;
    }

    public function getRefIdType(): ?Referentiel
    {
        return $this->refIdType;
    }

    public function setRefIdType(?Referentiel $refIdType): self
    {
        $this->refIdType = $refIdType;

        return $this;
    }

    public function getTmcMode(): ?ModAch
    {
        return $this->tmcMode;
    }

    public function setTmcMode(?ModAch $tmcMode): self
    {
        $this->tmcMode = $tmcMode;

        return $this;
    }


}
