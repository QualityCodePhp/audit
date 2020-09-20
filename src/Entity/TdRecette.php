<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TdRecette
 *
 * @ORM\Table(name="td_recette", uniqueConstraints={@ORM\UniqueConstraint(name="td_recette_pk", columns={"tdr_id"})}, indexes={@ORM\Index(name="td_recette_trtif", columns={"tdr_typerub"})})
 * @ORM\Entity
 */
class TdRecette
{
    /**
     * @var string
     *
     * @ORM\Column(name="tdr_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="td_recette_tdr_id_seq", allocationSize=1, initialValue=1)
     */
    private $tdrId;

    /**
     * @var string
     *
     * @ORM\Column(name="tdr_code", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $tdrCode;

    /**
     * @var string
     *
     * @ORM\Column(name="tdr_libelle", type="string", length=50, nullable=false)
     */
    private $tdrLibelle;

    /**
     * @var \TrRecette
     *
     * @ORM\ManyToOne(targetEntity="TrRecette")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tdr_typerub", referencedColumnName="trr_id")
     * })
     */
    private $tdrTyperub;

    public function getTdrId(): ?string
    {
        return $this->tdrId;
    }

    public function getTdrCode(): ?string
    {
        return $this->tdrCode;
    }

    public function setTdrCode(string $tdrCode): self
    {
        $this->tdrCode = $tdrCode;

        return $this;
    }

    public function getTdrLibelle(): ?string
    {
        return $this->tdrLibelle;
    }

    public function setTdrLibelle(string $tdrLibelle): self
    {
        $this->tdrLibelle = $tdrLibelle;

        return $this;
    }

    public function getTdrTyperub(): ?TrRecette
    {
        return $this->tdrTyperub;
    }

    public function setTdrTyperub(?TrRecette $tdrTyperub): self
    {
        $this->tdrTyperub = $tdrTyperub;

        return $this;
    }


}
