<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrRecette
 *
 * @ORM\Table(name="tr_recette", uniqueConstraints={@ORM\UniqueConstraint(name="tr_recette_pk", columns={"trr_id"})})
 * @ORM\Entity
 */
class TrRecette
{
    /**
     * @var string
     *
     * @ORM\Column(name="trr_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tr_recette_trr_id_seq", allocationSize=1, initialValue=1)
     */
    private $trrId;

    /**
     * @var string
     *
     * @ORM\Column(name="trr_code", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $trrCode;

    /**
     * @var string
     *
     * @ORM\Column(name="trr_libelle", type="string", length=50, nullable=false)
     */
    private $trrLibelle;

    public function getTrrId(): ?string
    {
        return $this->trrId;
    }

    public function getTrrCode(): ?string
    {
        return $this->trrCode;
    }

    public function setTrrCode(string $trrCode): self
    {
        $this->trrCode = $trrCode;

        return $this;
    }

    public function getTrrLibelle(): ?string
    {
        return $this->trrLibelle;
    }

    public function setTrrLibelle(string $trrLibelle): self
    {
        $this->trrLibelle = $trrLibelle;

        return $this;
    }


}
