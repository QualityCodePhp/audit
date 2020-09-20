<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SRapport
 *
 * @ORM\Table(name="s_rapport", uniqueConstraints={@ORM\UniqueConstraint(name="s_rapport_pk", columns={"srp_id"})})
 * @ORM\Entity
 */
class SRapport
{
    /**
     * @var string
     *
     * @ORM\Column(name="srp_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="s_rapport_srp_id_seq", allocationSize=1, initialValue=1)
     */
    private $srpId;

    /**
     * @var string
     *
     * @ORM\Column(name="srp_libelle", type="string", length=50, nullable=false)
     */
    private $srpLibelle;

    public function getSrpId(): ?string
    {
        return $this->srpId;
    }

    public function getSrpLibelle(): ?string
    {
        return $this->srpLibelle;
    }

    public function setSrpLibelle(string $srpLibelle): self
    {
        $this->srpLibelle = $srpLibelle;

        return $this;
    }


}
