<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VtFormulaire
 *
 * @ORM\Table(name="vt_formulaire", uniqueConstraints={@ORM\UniqueConstraint(name="vt_formulaire_pk", columns={"vtf_id"})}, indexes={@ORM\Index(name="vt_formulaire_ffif", columns={"vtf_formulaire"}), @ORM\Index(name="vt_formulaire_rfrif", columns={"vtf_rformulaire"})})
 * @ORM\Entity
 */
class VtFormulaire
{
    /**
     * @var string
     *
     * @ORM\Column(name="vtf_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="vt_formulaire_vtf_id_seq", allocationSize=1, initialValue=1)
     */
    private $vtfId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vtf_valeur1", type="string", length=3000, nullable=true)
     */
    private $vtfValeur1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vtf_valeur2", type="string", length=3000, nullable=true)
     */
    private $vtfValeur2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vtf_valeur3", type="string", length=3000, nullable=true)
     */
    private $vtfValeur3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vtf_valeur4", type="string", length=3000, nullable=true)
     */
    private $vtfValeur4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vtf_valeur5", type="string", length=3000, nullable=true)
     */
    private $vtfValeur5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vtf_valeur6", type="string", length=3000, nullable=true)
     */
    private $vtfValeur6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vtf_valeur7", type="string", length=3000, nullable=true)
     */
    private $vtfValeur7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vtf_valeur8", type="string", length=3000, nullable=true)
     */
    private $vtfValeur8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vtf_valeur9", type="string", length=3000, nullable=true)
     */
    private $vtfValeur9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vtf_valeur10", type="string", length=3000, nullable=true)
     */
    private $vtfValeur10;

    /**
     * @var \Formulaire
     *
     * @ORM\ManyToOne(targetEntity="Formulaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vtf_formulaire", referencedColumnName="frm_id")
     * })
     */
    private $vtfFormulaire;

    /**
     * @var \RFormulaire
     *
     * @ORM\ManyToOne(targetEntity="RFormulaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vtf_rformulaire", referencedColumnName="ruf_id")
     * })
     */
    private $vtfRformulaire;

    public function getVtfId(): ?string
    {
        return $this->vtfId;
    }

    public function getVtfValeur1(): ?string
    {
        return $this->vtfValeur1;
    }

    public function setVtfValeur1(?string $vtfValeur1): self
    {
        $this->vtfValeur1 = $vtfValeur1;

        return $this;
    }

    public function getVtfValeur2(): ?string
    {
        return $this->vtfValeur2;
    }

    public function setVtfValeur2(?string $vtfValeur2): self
    {
        $this->vtfValeur2 = $vtfValeur2;

        return $this;
    }

    public function getVtfValeur3(): ?string
    {
        return $this->vtfValeur3;
    }

    public function setVtfValeur3(?string $vtfValeur3): self
    {
        $this->vtfValeur3 = $vtfValeur3;

        return $this;
    }

    public function getVtfValeur4(): ?string
    {
        return $this->vtfValeur4;
    }

    public function setVtfValeur4(?string $vtfValeur4): self
    {
        $this->vtfValeur4 = $vtfValeur4;

        return $this;
    }

    public function getVtfValeur5(): ?string
    {
        return $this->vtfValeur5;
    }

    public function setVtfValeur5(?string $vtfValeur5): self
    {
        $this->vtfValeur5 = $vtfValeur5;

        return $this;
    }

    public function getVtfValeur6(): ?string
    {
        return $this->vtfValeur6;
    }

    public function setVtfValeur6(?string $vtfValeur6): self
    {
        $this->vtfValeur6 = $vtfValeur6;

        return $this;
    }

    public function getVtfValeur7(): ?string
    {
        return $this->vtfValeur7;
    }

    public function setVtfValeur7(?string $vtfValeur7): self
    {
        $this->vtfValeur7 = $vtfValeur7;

        return $this;
    }

    public function getVtfValeur8(): ?string
    {
        return $this->vtfValeur8;
    }

    public function setVtfValeur8(?string $vtfValeur8): self
    {
        $this->vtfValeur8 = $vtfValeur8;

        return $this;
    }

    public function getVtfValeur9(): ?string
    {
        return $this->vtfValeur9;
    }

    public function setVtfValeur9(?string $vtfValeur9): self
    {
        $this->vtfValeur9 = $vtfValeur9;

        return $this;
    }

    public function getVtfValeur10(): ?string
    {
        return $this->vtfValeur10;
    }

    public function setVtfValeur10(?string $vtfValeur10): self
    {
        $this->vtfValeur10 = $vtfValeur10;

        return $this;
    }

    public function getVtfFormulaire(): ?Formulaire
    {
        return $this->vtfFormulaire;
    }

    public function setVtfFormulaire(?Formulaire $vtfFormulaire): self
    {
        $this->vtfFormulaire = $vtfFormulaire;

        return $this;
    }

    public function getVtfRformulaire(): ?RFormulaire
    {
        return $this->vtfRformulaire;
    }

    public function setVtfRformulaire(?RFormulaire $vtfRformulaire): self
    {
        $this->vtfRformulaire = $vtfRformulaire;

        return $this;
    }


}
