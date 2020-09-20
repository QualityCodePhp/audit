<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegFonction
 *
 * @ORM\Table(name="reg_fonction", uniqueConstraints={@ORM\UniqueConstraint(name="reg_fonction_pk", columns={"rfo_id"})})
 * @ORM\Entity
 */
class RegFonction
{
    /**
     * @var string
     *
     * @ORM\Column(name="rfo_id", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="reg_fonction_rfo_id_seq", allocationSize=1, initialValue=1)
     */
    private $rfoId;

    /**
     * @var string
     *
     * @ORM\Column(name="rfo_code", type="string", length=3, nullable=false)
     */
    private $rfoCode;

    /**
     * @var string
     *
     * @ORM\Column(name="rfo_libelle", type="string", length=50, nullable=false)
     */
    private $rfoLibelle;

    public function getRfoId(): ?string
    {
        return $this->rfoId;
    }

    public function getRfoCode(): ?string
    {
        return $this->rfoCode;
    }

    public function setRfoCode(string $rfoCode): self
    {
        $this->rfoCode = $rfoCode;

        return $this;
    }

    public function getRfoLibelle(): ?string
    {
        return $this->rfoLibelle;
    }

    public function setRfoLibelle(string $rfoLibelle): self
    {
        $this->rfoLibelle = $rfoLibelle;

        return $this;
    }


}
