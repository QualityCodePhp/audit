<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Periode
 *
 * @ORM\Table(name="periode", uniqueConstraints={@ORM\UniqueConstraint(name="periode_pk", columns={"per_id"})})
 * @ORM\Entity
 */
class Periode
{
    /**
     * @var int
     *
     * @ORM\Column(name="per_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="periode_per_id_seq", allocationSize=1, initialValue=1)
     */
    private $perId;

    /**
     * @var string
     *
     * @ORM\Column(name="per_code", type="string", length=2, nullable=false)
     */
    private $perCode;

    /**
     * @var string
     *
     * @ORM\Column(name="per_libelle", type="string", length=50, nullable=false)
     */
    private $perLibelle;

    public function getPerId(): ?int
    {
        return $this->perId;
    }

    public function getPerCode(): ?string
    {
        return $this->perCode;
    }

    public function setPerCode(string $perCode): self
    {
        $this->perCode = $perCode;

        return $this;
    }

    public function getPerLibelle(): ?string
    {
        return $this->perLibelle;
    }

    public function setPerLibelle(string $perLibelle): self
    {
        $this->perLibelle = $perLibelle;

        return $this;
    }


}
