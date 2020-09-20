<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CFormulaire
 *
 * @ORM\Table(name="c_formulaire", uniqueConstraints={@ORM\UniqueConstraint(name="c_formulaire_pk", columns={"cfo_id"})}, indexes={@ORM\Index(name="c_formulaire_mamif", columns={"cfo_mode"}), @ORM\Index(name="d_formulaire_cfcif", columns={"def_id"})})
 * @ORM\Entity
 */
class CFormulaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="cfo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="c_formulaire_cfo_id_seq", allocationSize=1, initialValue=1)
     */
    private $cfoId;

    /**
     * @var string
     *
     * @ORM\Column(name="cfo_libtech", type="string", length=50, nullable=false)
     */
    private $cfoLibtech;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cfo_contdef", type="string", length=500, nullable=true)
     */
    private $cfoContdef;

    /**
     * @var string
     *
     * @ORM\Column(name="cfo_libre", type="decimal", precision=1, scale=0, nullable=false, options={"comment"="0 = Champs de table, 1= Champs libre"})
     */
    private $cfoLibre;

    /**
     * @var string
     *
     * @ORM\Column(name="cfo_tablorig", type="string", length=12, nullable=false, options={"comment"="Nom de la table d'origine ou LIBRE"})
     */
    private $cfoTablorig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cfo_chorig", type="string", length=16, nullable=true, options={"comment"="Si autre que LIBRE"})
     */
    private $cfoChorig;

    /**
     * @var string
     *
     * @ORM\Column(name="cfo_format", type="string", length=2, nullable=false, options={"comment"="(1=Texte, 2=NumÃ©rique, 3=Booleen, 4=Texte Long, 5=Date)"})
     */
    private $cfoFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="cfo_lg", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $cfoLg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cfo_nbdec", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $cfoNbdec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cfo_tabldestin", type="string", length=12, nullable=true)
     */
    private $cfoTabldestin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cfo_chdestin", type="string", length=16, nullable=true)
     */
    private $cfoChdestin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cfo_gestdestin", type="string", length=15, nullable=true, options={"comment"="Si LIBRE = IDENTIFIANT"})
     */
    private $cfoGestdestin;

    /**
     * @var string
     *
     * @ORM\Column(name="cfo_affoblig", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $cfoAffoblig;

    /**
     * @var string
     *
     * @ORM\Column(name="cfo_affseul", type="decimal", precision=1, scale=0, nullable=false, options={"comment"="Possible que si autre que LIBRE"})
     */
    private $cfoAffseul;

    /**
     * @var string
     *
     * @ORM\Column(name="cfo_repet", type="decimal", precision=1, scale=0, nullable=false, options={"comment"="Pour LIBRE seulement"})
     */
    private $cfoRepet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cfo_ctrlass", type="string", length=16, nullable=true, options={"comment"="Nom de la Fonction PHP gÃ©rant l'affichage les controles associÃ©es au champ (Liste dÃ©roulante par exemple)"})
     */
    private $cfoCtrlass;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cfo_regr", type="string", length=16, nullable=true)
     */
    private $cfoRegr;

    /**
     * @var string
     *
     * @ORM\Column(name="cfo_prest", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $cfoPrest;

    /**
     * @var string
     *
     * @ORM\Column(name="cfo_alimorig", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $cfoAlimorig;

    /**
     * @var \ModAch
     *
     * @ORM\ManyToOne(targetEntity="ModAch")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cfo_mode", referencedColumnName="mod_id")
     * })
     */
    private $cfoMode;

    /**
     * @var \DFormulaire
     *
     * @ORM\ManyToOne(targetEntity="DFormulaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="def_id", referencedColumnName="def_id")
     * })
     */
    private $def;

    public function getCfoId(): ?int
    {
        return $this->cfoId;
    }

    public function getCfoLibtech(): ?string
    {
        return $this->cfoLibtech;
    }

    public function setCfoLibtech(string $cfoLibtech): self
    {
        $this->cfoLibtech = $cfoLibtech;

        return $this;
    }

    public function getCfoContdef(): ?string
    {
        return $this->cfoContdef;
    }

    public function setCfoContdef(?string $cfoContdef): self
    {
        $this->cfoContdef = $cfoContdef;

        return $this;
    }

    public function getCfoLibre(): ?string
    {
        return $this->cfoLibre;
    }

    public function setCfoLibre(string $cfoLibre): self
    {
        $this->cfoLibre = $cfoLibre;

        return $this;
    }

    public function getCfoTablorig(): ?string
    {
        return $this->cfoTablorig;
    }

    public function setCfoTablorig(string $cfoTablorig): self
    {
        $this->cfoTablorig = $cfoTablorig;

        return $this;
    }

    public function getCfoChorig(): ?string
    {
        return $this->cfoChorig;
    }

    public function setCfoChorig(?string $cfoChorig): self
    {
        $this->cfoChorig = $cfoChorig;

        return $this;
    }

    public function getCfoFormat(): ?string
    {
        return $this->cfoFormat;
    }

    public function setCfoFormat(string $cfoFormat): self
    {
        $this->cfoFormat = $cfoFormat;

        return $this;
    }

    public function getCfoLg(): ?string
    {
        return $this->cfoLg;
    }

    public function setCfoLg(string $cfoLg): self
    {
        $this->cfoLg = $cfoLg;

        return $this;
    }

    public function getCfoNbdec(): ?string
    {
        return $this->cfoNbdec;
    }

    public function setCfoNbdec(?string $cfoNbdec): self
    {
        $this->cfoNbdec = $cfoNbdec;

        return $this;
    }

    public function getCfoTabldestin(): ?string
    {
        return $this->cfoTabldestin;
    }

    public function setCfoTabldestin(?string $cfoTabldestin): self
    {
        $this->cfoTabldestin = $cfoTabldestin;

        return $this;
    }

    public function getCfoChdestin(): ?string
    {
        return $this->cfoChdestin;
    }

    public function setCfoChdestin(?string $cfoChdestin): self
    {
        $this->cfoChdestin = $cfoChdestin;

        return $this;
    }

    public function getCfoGestdestin(): ?string
    {
        return $this->cfoGestdestin;
    }

    public function setCfoGestdestin(?string $cfoGestdestin): self
    {
        $this->cfoGestdestin = $cfoGestdestin;

        return $this;
    }

    public function getCfoAffoblig(): ?string
    {
        return $this->cfoAffoblig;
    }

    public function setCfoAffoblig(string $cfoAffoblig): self
    {
        $this->cfoAffoblig = $cfoAffoblig;

        return $this;
    }

    public function getCfoAffseul(): ?string
    {
        return $this->cfoAffseul;
    }

    public function setCfoAffseul(string $cfoAffseul): self
    {
        $this->cfoAffseul = $cfoAffseul;

        return $this;
    }

    public function getCfoRepet(): ?string
    {
        return $this->cfoRepet;
    }

    public function setCfoRepet(string $cfoRepet): self
    {
        $this->cfoRepet = $cfoRepet;

        return $this;
    }

    public function getCfoCtrlass(): ?string
    {
        return $this->cfoCtrlass;
    }

    public function setCfoCtrlass(?string $cfoCtrlass): self
    {
        $this->cfoCtrlass = $cfoCtrlass;

        return $this;
    }

    public function getCfoRegr(): ?string
    {
        return $this->cfoRegr;
    }

    public function setCfoRegr(?string $cfoRegr): self
    {
        $this->cfoRegr = $cfoRegr;

        return $this;
    }

    public function getCfoPrest(): ?string
    {
        return $this->cfoPrest;
    }

    public function setCfoPrest(string $cfoPrest): self
    {
        $this->cfoPrest = $cfoPrest;

        return $this;
    }

    public function getCfoAlimorig(): ?string
    {
        return $this->cfoAlimorig;
    }

    public function setCfoAlimorig(string $cfoAlimorig): self
    {
        $this->cfoAlimorig = $cfoAlimorig;

        return $this;
    }

    public function getCfoMode(): ?ModAch
    {
        return $this->cfoMode;
    }

    public function setCfoMode(?ModAch $cfoMode): self
    {
        $this->cfoMode = $cfoMode;

        return $this;
    }

    public function getDef(): ?DFormulaire
    {
        return $this->def;
    }

    public function setDef(?DFormulaire $def): self
    {
        $this->def = $def;

        return $this;
    }


}
