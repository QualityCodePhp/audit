<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BordereauTva
 *
 * @ORM\Table(name="bordereau_tva", uniqueConstraints={@ORM\UniqueConstraint(name="bordereau_tva_pk", columns={"bdptva_id"})}, indexes={@ORM\Index(name="bdp_bdp_tva_fk", columns={"bdp_id"}), @ORM\Index(name="ref_bdp_tva_fk", columns={"ref_id_tva"})})
 * @ORM\Entity
 */
class BordereauTva
{
    /**
     * @var string
     *
     * @ORM\Column(name="bdptva_id", type="decimal", precision=12, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="bordereau_tva_bdptva_id_seq", allocationSize=1, initialValue=1)
     */
    private $bdptvaId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdptva_base", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $bdptvaBase;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bdptva_mt_tva", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $bdptvaMtTva;

    /**
     * @var \Bordereau
     *
     * @ORM\ManyToOne(targetEntity="Bordereau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bdp_id", referencedColumnName="bdp_id")
     * })
     */
    private $bdp;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_tva", referencedColumnName="ref_id")
     * })
     */
    private $refIdTva;

    public function getBdptvaId(): ?string
    {
        return $this->bdptvaId;
    }

    public function getBdptvaBase(): ?string
    {
        return $this->bdptvaBase;
    }

    public function setBdptvaBase(?string $bdptvaBase): self
    {
        $this->bdptvaBase = $bdptvaBase;

        return $this;
    }

    public function getBdptvaMtTva(): ?string
    {
        return $this->bdptvaMtTva;
    }

    public function setBdptvaMtTva(?string $bdptvaMtTva): self
    {
        $this->bdptvaMtTva = $bdptvaMtTva;

        return $this;
    }

    public function getBdp(): ?Bordereau
    {
        return $this->bdp;
    }

    public function setBdp(?Bordereau $bdp): self
    {
        $this->bdp = $bdp;

        return $this;
    }

    public function getRefIdTva(): ?Referentiel
    {
        return $this->refIdTva;
    }

    public function setRefIdTva(?Referentiel $refIdTva): self
    {
        $this->refIdTva = $refIdTva;

        return $this;
    }


}
