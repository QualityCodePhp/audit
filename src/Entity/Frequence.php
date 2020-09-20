<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Frequence
 *
 * @ORM\Table(name="frequence", uniqueConstraints={@ORM\UniqueConstraint(name="frequence_pk", columns={"frq_id"})})
 * @ORM\Entity
 */
class Frequence
{
    /**
     * @var string
     *
     * @ORM\Column(name="frq_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="frequence_frq_id_seq", allocationSize=1, initialValue=1)
     */
    private $frqId;

    /**
     * @var string
     *
     * @ORM\Column(name="frq_code", type="string", length=2, nullable=false)
     */
    private $frqCode;

    /**
     * @var string
     *
     * @ORM\Column(name="frq_libelle", type="string", length=50, nullable=false)
     */
    private $frqLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="frq_mois", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $frqMois;

    public function getFrqId(): ?string
    {
        return $this->frqId;
    }

    public function getFrqCode(): ?string
    {
        return $this->frqCode;
    }

    public function setFrqCode(string $frqCode): self
    {
        $this->frqCode = $frqCode;

        return $this;
    }

    public function getFrqLibelle(): ?string
    {
        return $this->frqLibelle;
    }

    public function setFrqLibelle(string $frqLibelle): self
    {
        $this->frqLibelle = $frqLibelle;

        return $this;
    }

    public function getFrqMois(): ?string
    {
        return $this->frqMois;
    }

    public function setFrqMois(string $frqMois): self
    {
        $this->frqMois = $frqMois;

        return $this;
    }


}
