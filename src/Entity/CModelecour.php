<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CModelecour
 *
 * @ORM\Table(name="c_modelecour", uniqueConstraints={@ORM\UniqueConstraint(name="c_modelecour_pk", columns={"cmc_id"})}, indexes={@ORM\Index(name="c_modelecour_tmtif", columns={"cmc_type"})})
 * @ORM\Entity
 */
class CModelecour
{
    /**
     * @var string
     *
     * @ORM\Column(name="cmc_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="c_modelecour_cmc_id_seq", allocationSize=1, initialValue=1)
     */
    private $cmcId;

    /**
     * @var string
     *
     * @ORM\Column(name="cmc_nomfichier", type="string", length=50, nullable=false)
     */
    private $cmcNomfichier;

    /**
     * @var string
     *
     * @ORM\Column(name="cmc_champfichier", type="string", length=50, nullable=false)
     */
    private $cmcChampfichier;

    /**
     * @var string
     *
     * @ORM\Column(name="cmc_champmodele", type="string", length=16, nullable=false)
     */
    private $cmcChampmodele;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmc_valdef", type="string", length=100, nullable=true)
     */
    private $cmcValdef;

    /**
     * @var string
     *
     * @ORM\Column(name="cmc_typechamp", type="decimal", precision=1, scale=0, nullable=false, options={"comment"="1 => String, 2 => Date, 3 => Entier, 4 => Float"})
     */
    private $cmcTypechamp;

    /**
     * @var string
     *
     * @ORM\Column(name="cmc_utilisation", type="string", length=1, nullable=false, options={"comment"="0=texte, 1=Ã©lÃ©ment de tableau"})
     */
    private $cmcUtilisation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmc_ntableau", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $cmcNtableau;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmc_cle", type="string", length=30, nullable=true, options={"comment"="Nom de la variable passÃ© en session  renfermant l'identifiant qui servira Ã  la lecture de la table (cmc_nomfichier)"})
     */
    private $cmcCle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmc_cle1", type="string", length=30, nullable=true, options={"comment"="non utilisÃ©"})
     */
    private $cmcCle1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmc_linkfichier", type="string", length=50, nullable=true, options={"comment"="Jointure sur la table afin de rÃ©cupÃ©rer des champs de celle-ci"})
     */
    private $cmcLinkfichier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmc_champcalc", type="string", length=16, nullable=true)
     */
    private $cmcChampcalc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmc_fonction", type="string", length=50, nullable=true)
     */
    private $cmcFonction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmc_repertoire", type="string", length=50, nullable=true)
     */
    private $cmcRepertoire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmc_classeobj", type="string", length=50, nullable=true)
     */
    private $cmcClasseobj;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmc_parm1", type="string", length=50, nullable=true)
     */
    private $cmcParm1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmc_parm2", type="string", length=50, nullable=true)
     */
    private $cmcParm2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmc_repfnc", type="string", length=50, nullable=true)
     */
    private $cmcRepfnc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmc_description", type="string", length=200, nullable=true)
     */
    private $cmcDescription;

    /**
     * @var \TModelecour
     *
     * @ORM\ManyToOne(targetEntity="TModelecour")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cmc_type", referencedColumnName="tmc_id")
     * })
     */
    private $cmcType;

    public function getCmcId(): ?string
    {
        return $this->cmcId;
    }

    public function getCmcNomfichier(): ?string
    {
        return $this->cmcNomfichier;
    }

    public function setCmcNomfichier(string $cmcNomfichier): self
    {
        $this->cmcNomfichier = $cmcNomfichier;

        return $this;
    }

    public function getCmcChampfichier(): ?string
    {
        return $this->cmcChampfichier;
    }

    public function setCmcChampfichier(string $cmcChampfichier): self
    {
        $this->cmcChampfichier = $cmcChampfichier;

        return $this;
    }

    public function getCmcChampmodele(): ?string
    {
        return $this->cmcChampmodele;
    }

    public function setCmcChampmodele(string $cmcChampmodele): self
    {
        $this->cmcChampmodele = $cmcChampmodele;

        return $this;
    }

    public function getCmcValdef(): ?string
    {
        return $this->cmcValdef;
    }

    public function setCmcValdef(?string $cmcValdef): self
    {
        $this->cmcValdef = $cmcValdef;

        return $this;
    }

    public function getCmcTypechamp(): ?string
    {
        return $this->cmcTypechamp;
    }

    public function setCmcTypechamp(string $cmcTypechamp): self
    {
        $this->cmcTypechamp = $cmcTypechamp;

        return $this;
    }

    public function getCmcUtilisation(): ?string
    {
        return $this->cmcUtilisation;
    }

    public function setCmcUtilisation(string $cmcUtilisation): self
    {
        $this->cmcUtilisation = $cmcUtilisation;

        return $this;
    }

    public function getCmcNtableau(): ?string
    {
        return $this->cmcNtableau;
    }

    public function setCmcNtableau(?string $cmcNtableau): self
    {
        $this->cmcNtableau = $cmcNtableau;

        return $this;
    }

    public function getCmcCle(): ?string
    {
        return $this->cmcCle;
    }

    public function setCmcCle(?string $cmcCle): self
    {
        $this->cmcCle = $cmcCle;

        return $this;
    }

    public function getCmcCle1(): ?string
    {
        return $this->cmcCle1;
    }

    public function setCmcCle1(?string $cmcCle1): self
    {
        $this->cmcCle1 = $cmcCle1;

        return $this;
    }

    public function getCmcLinkfichier(): ?string
    {
        return $this->cmcLinkfichier;
    }

    public function setCmcLinkfichier(?string $cmcLinkfichier): self
    {
        $this->cmcLinkfichier = $cmcLinkfichier;

        return $this;
    }

    public function getCmcChampcalc(): ?string
    {
        return $this->cmcChampcalc;
    }

    public function setCmcChampcalc(?string $cmcChampcalc): self
    {
        $this->cmcChampcalc = $cmcChampcalc;

        return $this;
    }

    public function getCmcFonction(): ?string
    {
        return $this->cmcFonction;
    }

    public function setCmcFonction(?string $cmcFonction): self
    {
        $this->cmcFonction = $cmcFonction;

        return $this;
    }

    public function getCmcRepertoire(): ?string
    {
        return $this->cmcRepertoire;
    }

    public function setCmcRepertoire(?string $cmcRepertoire): self
    {
        $this->cmcRepertoire = $cmcRepertoire;

        return $this;
    }

    public function getCmcClasseobj(): ?string
    {
        return $this->cmcClasseobj;
    }

    public function setCmcClasseobj(?string $cmcClasseobj): self
    {
        $this->cmcClasseobj = $cmcClasseobj;

        return $this;
    }

    public function getCmcParm1(): ?string
    {
        return $this->cmcParm1;
    }

    public function setCmcParm1(?string $cmcParm1): self
    {
        $this->cmcParm1 = $cmcParm1;

        return $this;
    }

    public function getCmcParm2(): ?string
    {
        return $this->cmcParm2;
    }

    public function setCmcParm2(?string $cmcParm2): self
    {
        $this->cmcParm2 = $cmcParm2;

        return $this;
    }

    public function getCmcRepfnc(): ?string
    {
        return $this->cmcRepfnc;
    }

    public function setCmcRepfnc(?string $cmcRepfnc): self
    {
        $this->cmcRepfnc = $cmcRepfnc;

        return $this;
    }

    public function getCmcDescription(): ?string
    {
        return $this->cmcDescription;
    }

    public function setCmcDescription(?string $cmcDescription): self
    {
        $this->cmcDescription = $cmcDescription;

        return $this;
    }

    public function getCmcType(): ?TModelecour
    {
        return $this->cmcType;
    }

    public function setCmcType(?TModelecour $cmcType): self
    {
        $this->cmcType = $cmcType;

        return $this;
    }


}
