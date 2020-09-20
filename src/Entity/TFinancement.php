<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFinancement
 *
 * @ORM\Table(name="t_financement", uniqueConstraints={@ORM\UniqueConstraint(name="t_financement_pk", columns={"tfi_id"})})
 * @ORM\Entity
 */
class TFinancement
{
    /**
     * @var string
     *
     * @ORM\Column(name="tfi_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="t_financement_tfi_id_seq", allocationSize=1, initialValue=1)
     */
    private $tfiId;

    /**
     * @var string
     *
     * @ORM\Column(name="tfi_libelle", type="string", length=50, nullable=false)
     */
    private $tfiLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="tfi_deduit", type="decimal", precision=1, scale=0, nullable=false, options={"comment"="0 = Ne dÃ©duit pas co-financement du montant du Bordereau, 1 =  DÃ©duit"})
     */
    private $tfiDeduit;

    /**
     * @var string
     *
     * @ORM\Column(name="tfi_tri", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $tfiTri;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tfi_mode", type="integer", nullable=true)
     */
    private $tfiMode;

    public function getTfiId(): ?string
    {
        return $this->tfiId;
    }

    public function getTfiLibelle(): ?string
    {
        return $this->tfiLibelle;
    }

    public function setTfiLibelle(string $tfiLibelle): self
    {
        $this->tfiLibelle = $tfiLibelle;

        return $this;
    }

    public function getTfiDeduit(): ?string
    {
        return $this->tfiDeduit;
    }

    public function setTfiDeduit(string $tfiDeduit): self
    {
        $this->tfiDeduit = $tfiDeduit;

        return $this;
    }

    public function getTfiTri(): ?string
    {
        return $this->tfiTri;
    }

    public function setTfiTri(string $tfiTri): self
    {
        $this->tfiTri = $tfiTri;

        return $this;
    }

    public function getTfiMode(): ?int
    {
        return $this->tfiMode;
    }

    public function setTfiMode(?int $tfiMode): self
    {
        $this->tfiMode = $tfiMode;

        return $this;
    }


}
