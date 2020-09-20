<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DFormulaire
 *
 * @ORM\Table(name="d_formulaire", uniqueConstraints={@ORM\UniqueConstraint(name="d_formulaire_pk", columns={"def_id"})}, indexes={@ORM\Index(name="d_formulaire_rfrif", columns={"def_rubrique"}), @ORM\Index(name="d_formulaire_cfcif2", columns={"def_champ"})})
 * @ORM\Entity
 */
class DFormulaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="def_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="d_formulaire_def_id_seq", allocationSize=1, initialValue=1)
     */
    private $defId;

    /**
     * @var string
     *
     * @ORM\Column(name="def_rang", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $defRang;

    /**
     * @var string
     *
     * @ORM\Column(name="def_libelle", type="string", length=50, nullable=false)
     */
    private $defLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="def_oblig", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $defOblig;

    /**
     * @var string
     *
     * @ORM\Column(name="def_lgmini", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $defLgmini;

    /**
     * @var string
     *
     * @ORM\Column(name="def_lgmaxi", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $defLgmaxi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="def_decimal", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $defDecimal;

    /**
     * @var string
     *
     * @ORM\Column(name="def_initiale", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $defInitiale;

    /**
     * @var string
     *
     * @ORM\Column(name="def_variante", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $defVariante;

    /**
     * @var string
     *
     * @ORM\Column(name="def_negociee", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $defNegociee;

    /**
     * @var string
     *
     * @ORM\Column(name="def_dmdmodi", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $defDmdmodi;

    /**
     * @var string
     *
     * @ORM\Column(name="def_avenant", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $defAvenant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="def_comment", type="string", length=300, nullable=true)
     */
    private $defComment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="def_type", type="decimal", precision=1, scale=0, nullable=true, options={"comment"="1-bons de commande 0-autres"})
     */
    private $defType;

    /**
     * @var \CFormulaire
     *
     * @ORM\ManyToOne(targetEntity="CFormulaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="def_champ", referencedColumnName="cfo_id")
     * })
     */
    private $defChamp;

    /**
     * @var \RFormulaire
     *
     * @ORM\ManyToOne(targetEntity="RFormulaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="def_rubrique", referencedColumnName="ruf_id")
     * })
     */
    private $defRubrique;

    public function getDefId(): ?int
    {
        return $this->defId;
    }

    public function getDefRang(): ?string
    {
        return $this->defRang;
    }

    public function setDefRang(string $defRang): self
    {
        $this->defRang = $defRang;

        return $this;
    }

    public function getDefLibelle(): ?string
    {
        return $this->defLibelle;
    }

    public function setDefLibelle(string $defLibelle): self
    {
        $this->defLibelle = $defLibelle;

        return $this;
    }

    public function getDefOblig(): ?string
    {
        return $this->defOblig;
    }

    public function setDefOblig(string $defOblig): self
    {
        $this->defOblig = $defOblig;

        return $this;
    }

    public function getDefLgmini(): ?string
    {
        return $this->defLgmini;
    }

    public function setDefLgmini(string $defLgmini): self
    {
        $this->defLgmini = $defLgmini;

        return $this;
    }

    public function getDefLgmaxi(): ?string
    {
        return $this->defLgmaxi;
    }

    public function setDefLgmaxi(string $defLgmaxi): self
    {
        $this->defLgmaxi = $defLgmaxi;

        return $this;
    }

    public function getDefDecimal(): ?string
    {
        return $this->defDecimal;
    }

    public function setDefDecimal(?string $defDecimal): self
    {
        $this->defDecimal = $defDecimal;

        return $this;
    }

    public function getDefInitiale(): ?string
    {
        return $this->defInitiale;
    }

    public function setDefInitiale(string $defInitiale): self
    {
        $this->defInitiale = $defInitiale;

        return $this;
    }

    public function getDefVariante(): ?string
    {
        return $this->defVariante;
    }

    public function setDefVariante(string $defVariante): self
    {
        $this->defVariante = $defVariante;

        return $this;
    }

    public function getDefNegociee(): ?string
    {
        return $this->defNegociee;
    }

    public function setDefNegociee(string $defNegociee): self
    {
        $this->defNegociee = $defNegociee;

        return $this;
    }

    public function getDefDmdmodi(): ?string
    {
        return $this->defDmdmodi;
    }

    public function setDefDmdmodi(string $defDmdmodi): self
    {
        $this->defDmdmodi = $defDmdmodi;

        return $this;
    }

    public function getDefAvenant(): ?string
    {
        return $this->defAvenant;
    }

    public function setDefAvenant(string $defAvenant): self
    {
        $this->defAvenant = $defAvenant;

        return $this;
    }

    public function getDefComment(): ?string
    {
        return $this->defComment;
    }

    public function setDefComment(?string $defComment): self
    {
        $this->defComment = $defComment;

        return $this;
    }

    public function getDefType(): ?string
    {
        return $this->defType;
    }

    public function setDefType(?string $defType): self
    {
        $this->defType = $defType;

        return $this;
    }

    public function getDefChamp(): ?CFormulaire
    {
        return $this->defChamp;
    }

    public function setDefChamp(?CFormulaire $defChamp): self
    {
        $this->defChamp = $defChamp;

        return $this;
    }

    public function getDefRubrique(): ?RFormulaire
    {
        return $this->defRubrique;
    }

    public function setDefRubrique(?RFormulaire $defRubrique): self
    {
        $this->defRubrique = $defRubrique;

        return $this;
    }


}
