<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CTableau
 *
 * @ORM\Table(name="c_tableau", uniqueConstraints={@ORM\UniqueConstraint(name="c_tableau_pk", columns={"ctb_id"})}, indexes={@ORM\Index(name="c_tableau_tmtif", columns={"ctb_type"})})
 * @ORM\Entity
 */
class CTableau
{
    /**
     * @var string
     *
     * @ORM\Column(name="ctb_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="c_tableau_ctb_id_seq", allocationSize=1, initialValue=1)
     */
    private $ctbId;

    /**
     * @var string
     *
     * @ORM\Column(name="ctb_ntableau", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $ctbNtableau;

    /**
     * @var string
     *
     * @ORM\Column(name="ctb_typechamp", type="decimal", precision=1, scale=0, nullable=false, options={"comment"="1 => String, 2 => Date, 3 => Entier, 4 => Float"})
     */
    private $ctbTypechamp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ctb_or", type="string", length=2, nullable=true, options={"comment"="AND par dÃ©faut et mettre condition  OR si nÃ©cessaire"})
     */
    private $ctbOr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ctb_compar", type="string", length=10, nullable=true, options={"comment"="< , > , <=, >=, =, !="})
     */
    private $ctbCompar;

    /**
     * @var string
     *
     * @ORM\Column(name="ctb_clenom", type="string", length=100, nullable=false, options={"comment"="Nom du champ utilisÃ©  dans la requÃªte"})
     */
    private $ctbClenom;

    /**
     * @var string
     *
     * @ORM\Column(name="ctb_cleval", type="string", length=30, nullable=false, options={"comment"="Valeur du champ dans la requÃªte"})
     */
    private $ctbCleval;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ctb_rang", type="decimal", precision=2, scale=0, nullable=true, options={"comment"="Ordre des critÃ¨res de sÃ©lection dans la requÃªte"})
     */
    private $ctbRang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ctb_distinct", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $ctbDistinct;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ctb_joint", type="string", length=10, nullable=true)
     */
    private $ctbJoint;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ctb_tabsupp", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $ctbTabsupp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ctb_description", type="string", length=200, nullable=true)
     */
    private $ctbDescription;

    /**
     * @var \TModelecour
     *
     * @ORM\ManyToOne(targetEntity="TModelecour")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ctb_type", referencedColumnName="tmc_id")
     * })
     */
    private $ctbType;

    public function getCtbId(): ?string
    {
        return $this->ctbId;
    }

    public function getCtbNtableau(): ?string
    {
        return $this->ctbNtableau;
    }

    public function setCtbNtableau(string $ctbNtableau): self
    {
        $this->ctbNtableau = $ctbNtableau;

        return $this;
    }

    public function getCtbTypechamp(): ?string
    {
        return $this->ctbTypechamp;
    }

    public function setCtbTypechamp(string $ctbTypechamp): self
    {
        $this->ctbTypechamp = $ctbTypechamp;

        return $this;
    }

    public function getCtbOr(): ?string
    {
        return $this->ctbOr;
    }

    public function setCtbOr(?string $ctbOr): self
    {
        $this->ctbOr = $ctbOr;

        return $this;
    }

    public function getCtbCompar(): ?string
    {
        return $this->ctbCompar;
    }

    public function setCtbCompar(?string $ctbCompar): self
    {
        $this->ctbCompar = $ctbCompar;

        return $this;
    }

    public function getCtbClenom(): ?string
    {
        return $this->ctbClenom;
    }

    public function setCtbClenom(string $ctbClenom): self
    {
        $this->ctbClenom = $ctbClenom;

        return $this;
    }

    public function getCtbCleval(): ?string
    {
        return $this->ctbCleval;
    }

    public function setCtbCleval(string $ctbCleval): self
    {
        $this->ctbCleval = $ctbCleval;

        return $this;
    }

    public function getCtbRang(): ?string
    {
        return $this->ctbRang;
    }

    public function setCtbRang(?string $ctbRang): self
    {
        $this->ctbRang = $ctbRang;

        return $this;
    }

    public function getCtbDistinct(): ?string
    {
        return $this->ctbDistinct;
    }

    public function setCtbDistinct(?string $ctbDistinct): self
    {
        $this->ctbDistinct = $ctbDistinct;

        return $this;
    }

    public function getCtbJoint(): ?string
    {
        return $this->ctbJoint;
    }

    public function setCtbJoint(?string $ctbJoint): self
    {
        $this->ctbJoint = $ctbJoint;

        return $this;
    }

    public function getCtbTabsupp(): ?string
    {
        return $this->ctbTabsupp;
    }

    public function setCtbTabsupp(?string $ctbTabsupp): self
    {
        $this->ctbTabsupp = $ctbTabsupp;

        return $this;
    }

    public function getCtbDescription(): ?string
    {
        return $this->ctbDescription;
    }

    public function setCtbDescription(?string $ctbDescription): self
    {
        $this->ctbDescription = $ctbDescription;

        return $this;
    }

    public function getCtbType(): ?TModelecour
    {
        return $this->ctbType;
    }

    public function setCtbType(?TModelecour $ctbType): self
    {
        $this->ctbType = $ctbType;

        return $this;
    }


}
