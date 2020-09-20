<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefTypePrestation
 *
 * @ORM\Table(name="ref_type_prestation", uniqueConstraints={@ORM\UniqueConstraint(name="ref_type_prestation_pk", columns={"refpr_id"})})
 * @ORM\Entity
 */
class RefTypePrestation
{
    /**
     * @var string
     *
     * @ORM\Column(name="refpr_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ref_type_prestation_refpr_id_seq", allocationSize=1, initialValue=1)
     */
    private $refprId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="refpr_code", type="string", length=20, nullable=true)
     */
    private $refprCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="refpr_libelle", type="string", length=100, nullable=true)
     */
    private $refprLibelle;

    public function getRefprId(): ?string
    {
        return $this->refprId;
    }

    public function getRefprCode(): ?string
    {
        return $this->refprCode;
    }

    public function setRefprCode(?string $refprCode): self
    {
        $this->refprCode = $refprCode;

        return $this;
    }

    public function getRefprLibelle(): ?string
    {
        return $this->refprLibelle;
    }

    public function setRefprLibelle(?string $refprLibelle): self
    {
        $this->refprLibelle = $refprLibelle;

        return $this;
    }


}
