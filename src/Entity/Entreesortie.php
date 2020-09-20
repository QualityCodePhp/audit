<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreesortie
 *
 * @ORM\Table(name="entreesortie", uniqueConstraints={@ORM\UniqueConstraint(name="entreesortie_pk", columns={"ens_id"})})
 * @ORM\Entity
 */
class Entreesortie
{
    /**
     * @var int
     *
     * @ORM\Column(name="ens_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="entreesortie_ens_id_seq", allocationSize=1, initialValue=1)
     */
    private $ensId;

    /**
     * @var string
     *
     * @ORM\Column(name="ens_code", type="string", length=3, nullable=false)
     */
    private $ensCode;

    /**
     * @var string
     *
     * @ORM\Column(name="ens_libelle", type="string", length=50, nullable=false)
     */
    private $ensLibelle;

    public function getEnsId(): ?int
    {
        return $this->ensId;
    }

    public function getEnsCode(): ?string
    {
        return $this->ensCode;
    }

    public function setEnsCode(string $ensCode): self
    {
        $this->ensCode = $ensCode;

        return $this;
    }

    public function getEnsLibelle(): ?string
    {
        return $this->ensLibelle;
    }

    public function setEnsLibelle(string $ensLibelle): self
    {
        $this->ensLibelle = $ensLibelle;

        return $this;
    }


}
