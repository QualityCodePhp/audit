<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TRapport
 *
 * @ORM\Table(name="t_rapport", uniqueConstraints={@ORM\UniqueConstraint(name="t_rapport_pk", columns={"trp_id"})})
 * @ORM\Entity
 */
class TRapport
{
    /**
     * @var string
     *
     * @ORM\Column(name="trp_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="t_rapport_trp_id_seq", allocationSize=1, initialValue=1)
     */
    private $trpId;

    /**
     * @var string
     *
     * @ORM\Column(name="trp_libelle", type="string", length=25, nullable=false)
     */
    private $trpLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="trp_format", type="string", length=1, nullable=false, options={"comment"="T : TÃ©lÃ©chargÃ© / S : Saisie"})
     */
    private $trpFormat;

    public function getTrpId(): ?string
    {
        return $this->trpId;
    }

    public function getTrpLibelle(): ?string
    {
        return $this->trpLibelle;
    }

    public function setTrpLibelle(string $trpLibelle): self
    {
        $this->trpLibelle = $trpLibelle;

        return $this;
    }

    public function getTrpFormat(): ?string
    {
        return $this->trpFormat;
    }

    public function setTrpFormat(string $trpFormat): self
    {
        $this->trpFormat = $trpFormat;

        return $this;
    }


}
