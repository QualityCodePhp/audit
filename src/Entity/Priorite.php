<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Priorite
 *
 * @ORM\Table(name="priorite", uniqueConstraints={@ORM\UniqueConstraint(name="priorite_pk", columns={"pri_id"})})
 * @ORM\Entity
 */
class Priorite
{
    /**
     * @var string
     *
     * @ORM\Column(name="pri_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="priorite_pri_id_seq", allocationSize=1, initialValue=1)
     */
    private $priId;

    /**
     * @var string
     *
     * @ORM\Column(name="pri_code", type="string", length=3, nullable=false)
     */
    private $priCode;

    /**
     * @var string
     *
     * @ORM\Column(name="pri_libelle", type="string", length=50, nullable=false)
     */
    private $priLibelle;

    public function getPriId(): ?string
    {
        return $this->priId;
    }

    public function getPriCode(): ?string
    {
        return $this->priCode;
    }

    public function setPriCode(string $priCode): self
    {
        $this->priCode = $priCode;

        return $this;
    }

    public function getPriLibelle(): ?string
    {
        return $this->priLibelle;
    }

    public function setPriLibelle(string $priLibelle): self
    {
        $this->priLibelle = $priLibelle;

        return $this;
    }


}
