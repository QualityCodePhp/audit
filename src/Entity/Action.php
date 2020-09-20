<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Action
 *
 * @ORM\Table(name="action", uniqueConstraints={@ORM\UniqueConstraint(name="action_pk", columns={"act_id"})}, indexes={@ORM\Index(name="action_act_fonction_rfrif", columns={"act_fonction"})})
 * @ORM\Entity
 */
class Action
{
    /**
     * @var string
     *
     * @ORM\Column(name="act_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="action_act_id_seq", allocationSize=1, initialValue=1)
     */
    private $actId;

    /**
     * @var string
     *
     * @ORM\Column(name="act_niv1", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $actNiv1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="act_niv2", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $actNiv2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="act_niv3", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $actNiv3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="act_rang", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $actRang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="act_code", type="string", length=100, nullable=true)
     */
    private $actCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="act_codr", type="string", length=3, nullable=true, options={"comment"="Ex : LST, UPD, NEW..."})
     */
    private $actCodr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="act_niveau", type="decimal", precision=2, scale=0, nullable=true, options={"comment"="Permet d'alimenter un droit automatiquement si le niveau supÃ©rieur est sÃ©lectionnÃ©. Ex : Droit de CrÃ©ation donne droit Ã  la Consultation"})
     */
    private $actNiveau;

    /**
     * @var string
     *
     * @ORM\Column(name="act_menu", type="string", length=5, nullable=false, options={"comment"="Valeur possible : Menu, Lien ou Droit"})
     */
    private $actMenu;

    /**
     * @var string
     *
     * @ORM\Column(name="act_libelle", type="string", length=50, nullable=false)
     */
    private $actLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="act_type", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $actType;

    /**
     * @var string
     *
     * @ORM\Column(name="act_defaut", type="decimal", precision=1, scale=0, nullable=false, options={"comment"="Actif par dÃ©faut Ã  la crÃ©ation"})
     */
    private $actDefaut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="act_ref", type="string", length=50, nullable=true)
     */
    private $actRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="act_comment", type="string", length=300, nullable=true)
     */
    private $actComment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="act_lib_ongmenu", type="string", length=100, nullable=true)
     */
    private $actLibOngmenu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="act_variable", type="string", length=100, nullable=true)
     */
    private $actVariable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="act_page", type="string", length=30, nullable=true)
     */
    private $actPage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="act_courrier", type="string", length=30, nullable=true)
     */
    private $actCourrier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="act_courrier1", type="string", length=30, nullable=true)
     */
    private $actCourrier1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="act_courrier2", type="string", length=30, nullable=true)
     */
    private $actCourrier2;

    /**
     * @var \RegFonction
     *
     * @ORM\ManyToOne(targetEntity="RegFonction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="act_fonction", referencedColumnName="rfo_id")
     * })
     */
    private $actFonction;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Profil", mappedBy="drtAction")
     */
    private $drtProfil;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->drtProfil = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getActId(): ?string
    {
        return $this->actId;
    }

    public function getActNiv1(): ?string
    {
        return $this->actNiv1;
    }

    public function setActNiv1(string $actNiv1): self
    {
        $this->actNiv1 = $actNiv1;

        return $this;
    }

    public function getActNiv2(): ?string
    {
        return $this->actNiv2;
    }

    public function setActNiv2(?string $actNiv2): self
    {
        $this->actNiv2 = $actNiv2;

        return $this;
    }

    public function getActNiv3(): ?string
    {
        return $this->actNiv3;
    }

    public function setActNiv3(?string $actNiv3): self
    {
        $this->actNiv3 = $actNiv3;

        return $this;
    }

    public function getActRang(): ?string
    {
        return $this->actRang;
    }

    public function setActRang(?string $actRang): self
    {
        $this->actRang = $actRang;

        return $this;
    }

    public function getActCode(): ?string
    {
        return $this->actCode;
    }

    public function setActCode(?string $actCode): self
    {
        $this->actCode = $actCode;

        return $this;
    }

    public function getActCodr(): ?string
    {
        return $this->actCodr;
    }

    public function setActCodr(?string $actCodr): self
    {
        $this->actCodr = $actCodr;

        return $this;
    }

    public function getActNiveau(): ?string
    {
        return $this->actNiveau;
    }

    public function setActNiveau(?string $actNiveau): self
    {
        $this->actNiveau = $actNiveau;

        return $this;
    }

    public function getActMenu(): ?string
    {
        return $this->actMenu;
    }

    public function setActMenu(string $actMenu): self
    {
        $this->actMenu = $actMenu;

        return $this;
    }

    public function getActLibelle(): ?string
    {
        return $this->actLibelle;
    }

    public function setActLibelle(string $actLibelle): self
    {
        $this->actLibelle = $actLibelle;

        return $this;
    }

    public function getActType(): ?string
    {
        return $this->actType;
    }

    public function setActType(string $actType): self
    {
        $this->actType = $actType;

        return $this;
    }

    public function getActDefaut(): ?string
    {
        return $this->actDefaut;
    }

    public function setActDefaut(string $actDefaut): self
    {
        $this->actDefaut = $actDefaut;

        return $this;
    }

    public function getActRef(): ?string
    {
        return $this->actRef;
    }

    public function setActRef(?string $actRef): self
    {
        $this->actRef = $actRef;

        return $this;
    }

    public function getActComment(): ?string
    {
        return $this->actComment;
    }

    public function setActComment(?string $actComment): self
    {
        $this->actComment = $actComment;

        return $this;
    }

    public function getActLibOngmenu(): ?string
    {
        return $this->actLibOngmenu;
    }

    public function setActLibOngmenu(?string $actLibOngmenu): self
    {
        $this->actLibOngmenu = $actLibOngmenu;

        return $this;
    }

    public function getActVariable(): ?string
    {
        return $this->actVariable;
    }

    public function setActVariable(?string $actVariable): self
    {
        $this->actVariable = $actVariable;

        return $this;
    }

    public function getActPage(): ?string
    {
        return $this->actPage;
    }

    public function setActPage(?string $actPage): self
    {
        $this->actPage = $actPage;

        return $this;
    }

    public function getActCourrier(): ?string
    {
        return $this->actCourrier;
    }

    public function setActCourrier(?string $actCourrier): self
    {
        $this->actCourrier = $actCourrier;

        return $this;
    }

    public function getActCourrier1(): ?string
    {
        return $this->actCourrier1;
    }

    public function setActCourrier1(?string $actCourrier1): self
    {
        $this->actCourrier1 = $actCourrier1;

        return $this;
    }

    public function getActCourrier2(): ?string
    {
        return $this->actCourrier2;
    }

    public function setActCourrier2(?string $actCourrier2): self
    {
        $this->actCourrier2 = $actCourrier2;

        return $this;
    }

    public function getActFonction(): ?RegFonction
    {
        return $this->actFonction;
    }

    public function setActFonction(?RegFonction $actFonction): self
    {
        $this->actFonction = $actFonction;

        return $this;
    }

    /**
     * @return Collection|Profil[]
     */
    public function getDrtProfil(): Collection
    {
        return $this->drtProfil;
    }

    public function addDrtProfil(Profil $drtProfil): self
    {
        if (!$this->drtProfil->contains($drtProfil)) {
            $this->drtProfil[] = $drtProfil;
            $drtProfil->addDrtAction($this);
        }

        return $this;
    }

    public function removeDrtProfil(Profil $drtProfil): self
    {
        if ($this->drtProfil->contains($drtProfil)) {
            $this->drtProfil->removeElement($drtProfil);
            $drtProfil->removeDrtAction($this);
        }

        return $this;
    }

}
