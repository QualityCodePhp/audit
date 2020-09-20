<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AriCritiers
 *
 * @ORM\Table(name="ari_critiers", uniqueConstraints={@ORM\UniqueConstraint(name="ari_critiers_pk", columns={"acr_id"})})
 * @ORM\Entity
 */
class AriCritiers
{
    /**
     * @var string
     *
     * @ORM\Column(name="acr_id", type="decimal", precision=12, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ari_critiers_acr_id_seq", allocationSize=1, initialValue=1)
     */
    private $acrId;

    /**
     * @var string
     *
     * @ORM\Column(name="acr_numero", type="decimal", precision=2, scale=0, nullable=false, options={"comment"="NumÃ©ro CritÃ¨re Tiers"})
     */
    private $acrNumero;

    /**
     * @var string
     *
     * @ORM\Column(name="acr_code", type="string", length=5, nullable=false, options={"comment"="Code"})
     */
    private $acrCode;

    /**
     * @var string
     *
     * @ORM\Column(name="acr_libelle", type="string", length=30, nullable=false, options={"comment"="LibellÃ©"})
     */
    private $acrLibelle;

    public function getAcrId(): ?string
    {
        return $this->acrId;
    }

    public function getAcrNumero(): ?string
    {
        return $this->acrNumero;
    }

    public function setAcrNumero(string $acrNumero): self
    {
        $this->acrNumero = $acrNumero;

        return $this;
    }

    public function getAcrCode(): ?string
    {
        return $this->acrCode;
    }

    public function setAcrCode(string $acrCode): self
    {
        $this->acrCode = $acrCode;

        return $this;
    }

    public function getAcrLibelle(): ?string
    {
        return $this->acrLibelle;
    }

    public function setAcrLibelle(string $acrLibelle): self
    {
        $this->acrLibelle = $acrLibelle;

        return $this;
    }


}
