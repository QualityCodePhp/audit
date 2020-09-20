<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Referentiel
 *
 * @ORM\Table(name="referentiel", uniqueConstraints={@ORM\UniqueConstraint(name="referentiel_pk", columns={"ref_id"}), @ORM\UniqueConstraint(name="ak_referentiel_uk_referent", columns={"ref_code", "trf_code"})}, indexes={@ORM\Index(name="referentiel_a_pour_type_ref_fk", columns={"trf_code"})})
 * @ORM\Entity(repositoryClass="App\Repository\ReferentielRepository")
 */
class Referentiel
{
    /**
     * @var int
     *
     * @ORM\Column(name="ref_id", type="integer", nullable=false, options={"comment"="Identifiant unique du rÃ©fÃ©rentiel"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="referentiel_ref_id_seq", allocationSize=1, initialValue=1)
     */
    private $refId;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_code", type="string", length=30, nullable=false, options={"comment"="Code du rÃ©fÃ©rentiel"})
     */
    private $refCode;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_lib_court", type="string", length=50, nullable=false, options={"comment"="LibellÃ© court du rÃ©fÃ©rentiel"})
     */
    private $refLibCourt;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_lib_long", type="string", length=200, nullable=false, options={"comment"="LibellÃ© long du rÃ©fÃ©rentiel"})
     */
    private $refLibLong;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_rang", type="decimal", precision=5, scale=0, nullable=true, options={"comment"="Rand d'affichage du rÃ©fÃ©rentiel"})
     */
    private $refRang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_supprime", type="decimal", precision=1, scale=0, nullable=true, options={"comment"="Si la donnÃ©es n'est plus utilisable, cette zone contient ""O"" sinon elle contient ""N"""})
     */
    private $refSupprime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_code_parent", type="string", length=30, nullable=true)
     */
    private $refCodeParent;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ref_date_deb", type="datetime", nullable=true)
     */
    private $refDateDeb;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ref_date_fin", type="datetime", nullable=true)
     */
    private $refDateFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_ref_externe", type="string", length=100, nullable=true)
     */
    private $refRefExterne;

    /**
     * @var \RefTypeReferentiel
     *
     * @ORM\ManyToOne(targetEntity="RefTypeReferentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="trf_code", referencedColumnName="trf_code")
     * })
     */
    private $trfCode;

    public function getRefId(): ?int
    {
        return $this->refId;
    }

    public function getRefCode(): ?string
    {
        return $this->refCode;
    }

    public function setRefCode(string $refCode): self
    {
        $this->refCode = $refCode;

        return $this;
    }

    public function getRefLibCourt(): ?string
    {
        return $this->refLibCourt;
    }

    public function setRefLibCourt(string $refLibCourt): self
    {
        $this->refLibCourt = $refLibCourt;

        return $this;
    }

    public function getRefLibLong(): ?string
    {
        return $this->refLibLong;
    }

    public function setRefLibLong(string $refLibLong): self
    {
        $this->refLibLong = $refLibLong;

        return $this;
    }

    public function getRefRang(): ?string
    {
        return $this->refRang;
    }

    public function setRefRang(?string $refRang): self
    {
        $this->refRang = $refRang;

        return $this;
    }

    public function getRefSupprime(): ?string
    {
        return $this->refSupprime;
    }

    public function setRefSupprime(?string $refSupprime): self
    {
        $this->refSupprime = $refSupprime;

        return $this;
    }

    public function getRefCodeParent(): ?string
    {
        return $this->refCodeParent;
    }

    public function setRefCodeParent(?string $refCodeParent): self
    {
        $this->refCodeParent = $refCodeParent;

        return $this;
    }

    public function getRefDateDeb(): ?\DateTimeInterface
    {
        return $this->refDateDeb;
    }

    public function setRefDateDeb(?\DateTimeInterface $refDateDeb): self
    {
        $this->refDateDeb = $refDateDeb;

        return $this;
    }

    public function getRefDateFin(): ?\DateTimeInterface
    {
        return $this->refDateFin;
    }

    public function setRefDateFin(?\DateTimeInterface $refDateFin): self
    {
        $this->refDateFin = $refDateFin;

        return $this;
    }

    public function getRefRefExterne(): ?string
    {
        return $this->refRefExterne;
    }

    public function setRefRefExterne(?string $refRefExterne): self
    {
        $this->refRefExterne = $refRefExterne;

        return $this;
    }

    public function getTrfCode(): ?RefTypeReferentiel
    {
        return $this->trfCode;
    }

    public function setTrfCode(?RefTypeReferentiel $trfCode): self
    {
        $this->trfCode = $trfCode;

        return $this;
    }

    public function __toString()
    {
        return $this->refLibLong;
    }


}
