<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AriQualite
 *
 * @ORM\Table(name="ari_qualite", uniqueConstraints={@ORM\UniqueConstraint(name="ari_qualite_pk", columns={"aqu_id"})})
 * @ORM\Entity
 */
class AriQualite
{
    /**
     * @var string
     *
     * @ORM\Column(name="aqu_id", type="decimal", precision=12, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ari_qualite_aqu_id_seq", allocationSize=1, initialValue=1)
     */
    private $aquId;

    /**
     * @var string
     *
     * @ORM\Column(name="aqu_code", type="string", length=2, nullable=false, options={"comment"="Code QualitÃ©"})
     */
    private $aquCode;

    /**
     * @var string
     *
     * @ORM\Column(name="aqu_libelle", type="string", length=15, nullable=false, options={"comment"="LibellÃ© QualitÃ©"})
     */
    private $aquLibelle;

    public function getAquId(): ?string
    {
        return $this->aquId;
    }

    public function getAquCode(): ?string
    {
        return $this->aquCode;
    }

    public function setAquCode(string $aquCode): self
    {
        $this->aquCode = $aquCode;

        return $this;
    }

    public function getAquLibelle(): ?string
    {
        return $this->aquLibelle;
    }

    public function setAquLibelle(string $aquLibelle): self
    {
        $this->aquLibelle = $aquLibelle;

        return $this;
    }


}
