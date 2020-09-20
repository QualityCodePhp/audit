<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etat
 *
 * @ORM\Table(name="etat", uniqueConstraints={@ORM\UniqueConstraint(name="etat_pk", columns={"eta_id"})})
 * @ORM\Entity
 */
class Etat
{
    /**
     * @var string
     *
     * @ORM\Column(name="eta_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="etat_eta_id_seq", allocationSize=1, initialValue=1)
     */
    private $etaId;

    /**
     * @var string
     *
     * @ORM\Column(name="eta_code", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $etaCode;

    /**
     * @var string
     *
     * @ORM\Column(name="eta_libelle", type="string", length=50, nullable=false)
     */
    private $etaLibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eta_comment", type="string", length=300, nullable=true)
     */
    private $etaComment;

    public function getEtaId(): ?string
    {
        return $this->etaId;
    }

    public function getEtaCode(): ?string
    {
        return $this->etaCode;
    }

    public function setEtaCode(string $etaCode): self
    {
        $this->etaCode = $etaCode;

        return $this;
    }

    public function getEtaLibelle(): ?string
    {
        return $this->etaLibelle;
    }

    public function setEtaLibelle(string $etaLibelle): self
    {
        $this->etaLibelle = $etaLibelle;

        return $this;
    }

    public function getEtaComment(): ?string
    {
        return $this->etaComment;
    }

    public function setEtaComment(?string $etaComment): self
    {
        $this->etaComment = $etaComment;

        return $this;
    }


}
