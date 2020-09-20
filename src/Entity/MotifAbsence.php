<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MotifAbsence
 *
 * @ORM\Table(name="motif_absence", uniqueConstraints={@ORM\UniqueConstraint(name="motif_absence_pk", columns={"mab_id"})})
 * @ORM\Entity
 */
class MotifAbsence
{
    /**
     * @var string
     *
     * @ORM\Column(name="mab_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="motif_absence_mab_id_seq", allocationSize=1, initialValue=1)
     */
    private $mabId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mab_code", type="string", length=20, nullable=true)
     */
    private $mabCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mab_libelle", type="string", length=100, nullable=true)
     */
    private $mabLibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mab_flg_remunere", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $mabFlgRemunere;

    public function getMabId(): ?string
    {
        return $this->mabId;
    }

    public function getMabCode(): ?string
    {
        return $this->mabCode;
    }

    public function setMabCode(?string $mabCode): self
    {
        $this->mabCode = $mabCode;

        return $this;
    }

    public function getMabLibelle(): ?string
    {
        return $this->mabLibelle;
    }

    public function setMabLibelle(?string $mabLibelle): self
    {
        $this->mabLibelle = $mabLibelle;

        return $this;
    }

    public function getMabFlgRemunere(): ?string
    {
        return $this->mabFlgRemunere;
    }

    public function setMabFlgRemunere(?string $mabFlgRemunere): self
    {
        $this->mabFlgRemunere = $mabFlgRemunere;

        return $this;
    }


}
