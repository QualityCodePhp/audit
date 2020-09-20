<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VFormulaire
 *
 * @ORM\Table(name="v_formulaire", uniqueConstraints={@ORM\UniqueConstraint(name="v_formulaire_pk", columns={"vfo_id"})}, indexes={@ORM\Index(name="v_formulaire_rfrif", columns={"vfo_rformulaire"}), @ORM\Index(name="reference_461_fk", columns={"for_frm_id"}), @ORM\Index(name="v_formulaire_ffif", columns={"vfo_formulaire"}), @ORM\Index(name="v_formulaire_dfdif", columns={"vfo_dformulaire"})})
 * @ORM\Entity
 */
class VFormulaire
{
    /**
     * @var string
     *
     * @ORM\Column(name="vfo_id", type="decimal", precision=12, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="v_formulaire_vfo_id_seq", allocationSize=1, initialValue=1)
     */
    private $vfoId;

    /**
     * @var string
     *
     * @ORM\Column(name="vfo_style", type="string", length=2, nullable=false, options={"comment"="1=Texte, 2=NumÃ©rique, 3=Booleen, 4=Texte Long"})
     */
    private $vfoStyle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vfo_valeur", type="string", length=3000, nullable=true)
     */
    private $vfoValeur;

    /**
     * @var \Formulaire
     *
     * @ORM\ManyToOne(targetEntity="Formulaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="for_frm_id", referencedColumnName="frm_id")
     * })
     */
    private $forFrm;

    /**
     * @var \DFormulaire
     *
     * @ORM\ManyToOne(targetEntity="DFormulaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vfo_dformulaire", referencedColumnName="def_id")
     * })
     */
    private $vfoDformulaire;

    /**
     * @var \Formulaire
     *
     * @ORM\ManyToOne(targetEntity="Formulaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vfo_formulaire", referencedColumnName="frm_id")
     * })
     */
    private $vfoFormulaire;

    /**
     * @var \RFormulaire
     *
     * @ORM\ManyToOne(targetEntity="RFormulaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vfo_rformulaire", referencedColumnName="ruf_id")
     * })
     */
    private $vfoRformulaire;

    public function getVfoId(): ?string
    {
        return $this->vfoId;
    }

    public function getVfoStyle(): ?string
    {
        return $this->vfoStyle;
    }

    public function setVfoStyle(string $vfoStyle): self
    {
        $this->vfoStyle = $vfoStyle;

        return $this;
    }

    public function getVfoValeur(): ?string
    {
        return $this->vfoValeur;
    }

    public function setVfoValeur(?string $vfoValeur): self
    {
        $this->vfoValeur = $vfoValeur;

        return $this;
    }

    public function getForFrm(): ?Formulaire
    {
        return $this->forFrm;
    }

    public function setForFrm(?Formulaire $forFrm): self
    {
        $this->forFrm = $forFrm;

        return $this;
    }

    public function getVfoDformulaire(): ?DFormulaire
    {
        return $this->vfoDformulaire;
    }

    public function setVfoDformulaire(?DFormulaire $vfoDformulaire): self
    {
        $this->vfoDformulaire = $vfoDformulaire;

        return $this;
    }

    public function getVfoFormulaire(): ?Formulaire
    {
        return $this->vfoFormulaire;
    }

    public function setVfoFormulaire(?Formulaire $vfoFormulaire): self
    {
        $this->vfoFormulaire = $vfoFormulaire;

        return $this;
    }

    public function getVfoRformulaire(): ?RFormulaire
    {
        return $this->vfoRformulaire;
    }

    public function setVfoRformulaire(?RFormulaire $vfoRformulaire): self
    {
        $this->vfoRformulaire = $vfoRformulaire;

        return $this;
    }


}
