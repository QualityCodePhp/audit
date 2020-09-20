<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TCommission
 *
 * @ORM\Table(name="t_commission", uniqueConstraints={@ORM\UniqueConstraint(name="t_commission_pk", columns={"tco_id"})})
 * @ORM\Entity
 */
class TCommission
{
    /**
     * @var string
     *
     * @ORM\Column(name="tco_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="t_commission_tco_id_seq", allocationSize=1, initialValue=1)
     */
    private $tcoId;

    /**
     * @var string
     *
     * @ORM\Column(name="tco_libelle", type="string", length=25, nullable=false)
     */
    private $tcoLibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tco_refarianne", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $tcoRefarianne;

    public function getTcoId(): ?string
    {
        return $this->tcoId;
    }

    public function getTcoLibelle(): ?string
    {
        return $this->tcoLibelle;
    }

    public function setTcoLibelle(string $tcoLibelle): self
    {
        $this->tcoLibelle = $tcoLibelle;

        return $this;
    }

    public function getTcoRefarianne(): ?string
    {
        return $this->tcoRefarianne;
    }

    public function setTcoRefarianne(?string $tcoRefarianne): self
    {
        $this->tcoRefarianne = $tcoRefarianne;

        return $this;
    }


}
