<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IRapport
 *
 * @ORM\Table(name="i_rapport", uniqueConstraints={@ORM\UniqueConstraint(name="i_rapport_pk", columns={"irp_id"})})
 * @ORM\Entity
 */
class IRapport
{
    /**
     * @var string
     *
     * @ORM\Column(name="irp_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="i_rapport_irp_id_seq", allocationSize=1, initialValue=1)
     */
    private $irpId;

    /**
     * @var string
     *
     * @ORM\Column(name="irp_libelle", type="string", length=50, nullable=false)
     */
    private $irpLibelle;

    public function getIrpId(): ?string
    {
        return $this->irpId;
    }

    public function getIrpLibelle(): ?string
    {
        return $this->irpLibelle;
    }

    public function setIrpLibelle(string $irpLibelle): self
    {
        $this->irpLibelle = $irpLibelle;

        return $this;
    }


}
