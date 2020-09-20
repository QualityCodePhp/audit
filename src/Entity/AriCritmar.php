<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AriCritmar
 *
 * @ORM\Table(name="ari_critmar", uniqueConstraints={@ORM\UniqueConstraint(name="ari_critmar_pk", columns={"acm_id"})})
 * @ORM\Entity
 */
class AriCritmar
{
    /**
     * @var string
     *
     * @ORM\Column(name="acm_id", type="decimal", precision=12, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ari_critmar_acm_id_seq", allocationSize=1, initialValue=1)
     */
    private $acmId;

    /**
     * @var string
     *
     * @ORM\Column(name="acm_numero", type="decimal", precision=2, scale=0, nullable=false, options={"comment"="NumÃ©ro"})
     */
    private $acmNumero;

    /**
     * @var string
     *
     * @ORM\Column(name="acm_code", type="string", length=5, nullable=false, options={"comment"="Code"})
     */
    private $acmCode;

    /**
     * @var string
     *
     * @ORM\Column(name="acm_libelle", type="string", length=30, nullable=false, options={"comment"="LibellÃ©"})
     */
    private $acmLibelle;

    public function getAcmId(): ?string
    {
        return $this->acmId;
    }

    public function getAcmNumero(): ?string
    {
        return $this->acmNumero;
    }

    public function setAcmNumero(string $acmNumero): self
    {
        $this->acmNumero = $acmNumero;

        return $this;
    }

    public function getAcmCode(): ?string
    {
        return $this->acmCode;
    }

    public function setAcmCode(string $acmCode): self
    {
        $this->acmCode = $acmCode;

        return $this;
    }

    public function getAcmLibelle(): ?string
    {
        return $this->acmLibelle;
    }

    public function setAcmLibelle(string $acmLibelle): self
    {
        $this->acmLibelle = $acmLibelle;

        return $this;
    }


}
