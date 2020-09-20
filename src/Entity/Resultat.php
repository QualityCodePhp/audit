<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resultat
 *
 * @ORM\Table(name="resultat", uniqueConstraints={@ORM\UniqueConstraint(name="resultat_pk", columns={"res_id"})})
 * @ORM\Entity
 */
class Resultat
{
    /**
     * @var int
     *
     * @ORM\Column(name="res_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="resultat_res_id_seq", allocationSize=1, initialValue=1)
     */
    private $resId;

    /**
     * @var string
     *
     * @ORM\Column(name="res_libelle", type="string", length=50, nullable=false)
     */
    private $resLibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="res_flg_suppr", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $resFlgSuppr;

    public function getResId(): ?int
    {
        return $this->resId;
    }

    public function getResLibelle(): ?string
    {
        return $this->resLibelle;
    }

    public function setResLibelle(string $resLibelle): self
    {
        $this->resLibelle = $resLibelle;

        return $this;
    }

    public function getResFlgSuppr(): ?string
    {
        return $this->resFlgSuppr;
    }

    public function setResFlgSuppr(?string $resFlgSuppr): self
    {
        $this->resFlgSuppr = $resFlgSuppr;

        return $this;
    }


}
