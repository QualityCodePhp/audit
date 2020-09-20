<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefTypeReferentiel
 *
 * @ORM\Table(name="ref_type_referentiel", uniqueConstraints={@ORM\UniqueConstraint(name="ref_type_referentiel_pk", columns={"trf_code"})})
 * @ORM\Entity
 */
class RefTypeReferentiel
{
    /**
     * @var string
     *
     * @ORM\Column(name="trf_code", type="string", length=20, nullable=false, options={"comment"="Code du type de rÃ©fÃ©rentiel :
- FCT : Fonction
- ACT : ActivitÃ©
- FAM : Famille
- UOR : UnitÃ© d'oeuvre pour les ratios
- UOF : unitÃ© d'oeuvre pour les forfaits
- PHA : Phase pour les ratios"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ref_type_referentiel_trf_code_seq", allocationSize=1, initialValue=1)
     */
    private $trfCode;

    /**
     * @var string
     *
     * @ORM\Column(name="trf_libelle", type="string", length=100, nullable=false, options={"comment"="LibellÃ© du type de rÃ©fÃ©rentiel"})
     */
    private $trfLibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trf_modifiable", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $trfModifiable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trf_visualisable", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $trfVisualisable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trf_libelle_assoc", type="string", length=50, nullable=true)
     */
    private $trfLibelleAssoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trf_flg_administrable", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $trfFlgAdministrable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trf_flg_personnalisable", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $trfFlgPersonnalisable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trf_ref_externe", type="string", length=100, nullable=true)
     */
    private $trfRefExterne;

    public function getTrfCode(): ?string
    {
        return $this->trfCode;
    }

    public function getTrfLibelle(): ?string
    {
        return $this->trfLibelle;
    }

    public function setTrfLibelle(string $trfLibelle): self
    {
        $this->trfLibelle = $trfLibelle;

        return $this;
    }

    public function getTrfModifiable(): ?string
    {
        return $this->trfModifiable;
    }

    public function setTrfModifiable(?string $trfModifiable): self
    {
        $this->trfModifiable = $trfModifiable;

        return $this;
    }

    public function getTrfVisualisable(): ?string
    {
        return $this->trfVisualisable;
    }

    public function setTrfVisualisable(?string $trfVisualisable): self
    {
        $this->trfVisualisable = $trfVisualisable;

        return $this;
    }

    public function getTrfLibelleAssoc(): ?string
    {
        return $this->trfLibelleAssoc;
    }

    public function setTrfLibelleAssoc(?string $trfLibelleAssoc): self
    {
        $this->trfLibelleAssoc = $trfLibelleAssoc;

        return $this;
    }

    public function getTrfFlgAdministrable(): ?string
    {
        return $this->trfFlgAdministrable;
    }

    public function setTrfFlgAdministrable(?string $trfFlgAdministrable): self
    {
        $this->trfFlgAdministrable = $trfFlgAdministrable;

        return $this;
    }

    public function getTrfFlgPersonnalisable(): ?string
    {
        return $this->trfFlgPersonnalisable;
    }

    public function setTrfFlgPersonnalisable(?string $trfFlgPersonnalisable): self
    {
        $this->trfFlgPersonnalisable = $trfFlgPersonnalisable;

        return $this;
    }

    public function getTrfRefExterne(): ?string
    {
        return $this->trfRefExterne;
    }

    public function setTrfRefExterne(?string $trfRefExterne): self
    {
        $this->trfRefExterne = $trfRefExterne;

        return $this;
    }


}
