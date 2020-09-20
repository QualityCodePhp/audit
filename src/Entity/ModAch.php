<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModAch
 *
 * @ORM\Table(name="mod_ach", uniqueConstraints={@ORM\UniqueConstraint(name="mod_ach_pk", columns={"mod_id"})})
 * @ORM\Entity
 */
class ModAch
{
    /**
     * @var int
     *
     * @ORM\Column(name="mod_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mod_ach_mod_id_seq", allocationSize=1, initialValue=1)
     */
    private $modId;

    /**
     * @var string
     *
     * @ORM\Column(name="mod_libelle", type="string", length=50, nullable=false)
     */
    private $modLibelle;

    public function getModId(): ?int
    {
        return $this->modId;
    }

    public function getModLibelle(): ?string
    {
        return $this->modLibelle;
    }

    public function setModLibelle(string $modLibelle): self
    {
        $this->modLibelle = $modLibelle;

        return $this;
    }


}
