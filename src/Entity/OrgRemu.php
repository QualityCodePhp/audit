<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrgRemu
 *
 * @ORM\Table(name="org_remu", uniqueConstraints={@ORM\UniqueConstraint(name="org_remu_pk", columns={"orr_id"})})
 * @ORM\Entity
 */
class OrgRemu
{
    /**
     * @var int
     *
     * @ORM\Column(name="orr_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="org_remu_orr_id_seq", allocationSize=1, initialValue=1)
     */
    private $orrId;

    /**
     * @var string
     *
     * @ORM\Column(name="orr_libelle", type="string", length=50, nullable=false)
     */
    private $orrLibelle;

    public function getOrrId(): ?int
    {
        return $this->orrId;
    }

    public function getOrrLibelle(): ?string
    {
        return $this->orrLibelle;
    }

    public function setOrrLibelle(string $orrLibelle): self
    {
        $this->orrLibelle = $orrLibelle;

        return $this;
    }


}
