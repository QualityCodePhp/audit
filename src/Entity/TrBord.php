<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrBord
 *
 * @ORM\Table(name="tr_bord", uniqueConstraints={@ORM\UniqueConstraint(name="tr_bord_pk", columns={"trb_id"})})
 * @ORM\Entity
 */
class TrBord
{
    /**
     * @var string
     *
     * @ORM\Column(name="trb_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tr_bord_trb_id_seq", allocationSize=1, initialValue=1)
     */
    private $trbId;

    /**
     * @var string
     *
     * @ORM\Column(name="trb_code", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $trbCode;

    /**
     * @var string
     *
     * @ORM\Column(name="trb_libelle", type="string", length=50, nullable=false)
     */
    private $trbLibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trb_comment", type="string", length=300, nullable=true)
     */
    private $trbComment;

    /**
     * @var string
     *
     * @ORM\Column(name="trb_repet", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $trbRepet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trb_typemar", type="string", length=1, nullable=true, options={"comment"="Type de marche F-Forfaitaire B-Bon de commande"})
     */
    private $trbTypemar;

    public function getTrbId(): ?string
    {
        return $this->trbId;
    }

    public function getTrbCode(): ?string
    {
        return $this->trbCode;
    }

    public function setTrbCode(string $trbCode): self
    {
        $this->trbCode = $trbCode;

        return $this;
    }

    public function getTrbLibelle(): ?string
    {
        return $this->trbLibelle;
    }

    public function setTrbLibelle(string $trbLibelle): self
    {
        $this->trbLibelle = $trbLibelle;

        return $this;
    }

    public function getTrbComment(): ?string
    {
        return $this->trbComment;
    }

    public function setTrbComment(?string $trbComment): self
    {
        $this->trbComment = $trbComment;

        return $this;
    }

    public function getTrbRepet(): ?string
    {
        return $this->trbRepet;
    }

    public function setTrbRepet(string $trbRepet): self
    {
        $this->trbRepet = $trbRepet;

        return $this;
    }

    public function getTrbTypemar(): ?string
    {
        return $this->trbTypemar;
    }

    public function setTrbTypemar(?string $trbTypemar): self
    {
        $this->trbTypemar = $trbTypemar;

        return $this;
    }


}
