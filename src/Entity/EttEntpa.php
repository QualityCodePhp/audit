<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EttEntpa
 *
 * @ORM\Table(name="ett_entpa", uniqueConstraints={@ORM\UniqueConstraint(name="ett_entpa_pk", columns={"eea_id"})}, indexes={@ORM\Index(name="ett_entpa_eeeif", columns={"eea_entreprise"})})
 * @ORM\Entity
 */
class EttEntpa
{
    /**
     * @var string
     *
     * @ORM\Column(name="eea_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ett_entpa_eea_id_seq", allocationSize=1, initialValue=1)
     */
    private $eeaId;

    /**
     * @var string
     *
     * @ORM\Column(name="eea_indice", type="decimal", precision=1, scale=0, nullable=false, options={"comment"="NÂ° de colonne correspondant Ã  l''annÃ©e saisie (n-1 Ã  n-3)"})
     */
    private $eeaIndice;

    /**
     * @var string
     *
     * @ORM\Column(name="eea_annee", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $eeaAnnee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_rcaht", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaRcaht;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_rresnet", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaRresnet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_rcapprop", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaRcapprop;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_reffectif", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaReffectif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_rnbstg", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaRnbstg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_pcaht", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaPcaht;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_presnet", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaPresnet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_pcapprop", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaPcapprop;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_peffectif", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaPeffectif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_pnbstg", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaPnbstg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_rmassesal", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaRmassesal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_rdfpcdecl", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaRdfpcdecl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_rpmform", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaRpmform;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_rsubrecues", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaRsubrecues;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_rsubattend", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaRsubattend;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_rdfpcnette", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaRdfpcnette;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_pmassesal", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaPmassesal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_pdfpcdecl", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaPdfpcdecl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_ppmform", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaPpmform;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_psubrecues", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaPsubrecues;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_psubattend", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaPsubattend;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_pdfpcnette", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaPdfpcnette;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_revolefonq", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaRevolefonq;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_revolefoq", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaRevolefoq;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_revolefemp", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaRevolefemp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_revoleftec", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaRevoleftec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_revolefcad", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaRevolefcad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_revoleftot", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaRevoleftot;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_pevolefonq", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaPevolefonq;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_pevolefoq", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaPevolefoq;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_pevolefemp", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaPevolefemp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_pevoleftec", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaPevoleftec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_pevolefcad", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaPevolefcad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eea_pevoleftot", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eeaPevoleftot;

    /**
     * @var \EttEntp
     *
     * @ORM\ManyToOne(targetEntity="EttEntp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="eea_entreprise", referencedColumnName="een_id")
     * })
     */
    private $eeaEntreprise;

    public function getEeaId(): ?string
    {
        return $this->eeaId;
    }

    public function getEeaIndice(): ?string
    {
        return $this->eeaIndice;
    }

    public function setEeaIndice(string $eeaIndice): self
    {
        $this->eeaIndice = $eeaIndice;

        return $this;
    }

    public function getEeaAnnee(): ?string
    {
        return $this->eeaAnnee;
    }

    public function setEeaAnnee(string $eeaAnnee): self
    {
        $this->eeaAnnee = $eeaAnnee;

        return $this;
    }

    public function getEeaRcaht(): ?string
    {
        return $this->eeaRcaht;
    }

    public function setEeaRcaht(?string $eeaRcaht): self
    {
        $this->eeaRcaht = $eeaRcaht;

        return $this;
    }

    public function getEeaRresnet(): ?string
    {
        return $this->eeaRresnet;
    }

    public function setEeaRresnet(?string $eeaRresnet): self
    {
        $this->eeaRresnet = $eeaRresnet;

        return $this;
    }

    public function getEeaRcapprop(): ?string
    {
        return $this->eeaRcapprop;
    }

    public function setEeaRcapprop(?string $eeaRcapprop): self
    {
        $this->eeaRcapprop = $eeaRcapprop;

        return $this;
    }

    public function getEeaReffectif(): ?string
    {
        return $this->eeaReffectif;
    }

    public function setEeaReffectif(?string $eeaReffectif): self
    {
        $this->eeaReffectif = $eeaReffectif;

        return $this;
    }

    public function getEeaRnbstg(): ?string
    {
        return $this->eeaRnbstg;
    }

    public function setEeaRnbstg(?string $eeaRnbstg): self
    {
        $this->eeaRnbstg = $eeaRnbstg;

        return $this;
    }

    public function getEeaPcaht(): ?string
    {
        return $this->eeaPcaht;
    }

    public function setEeaPcaht(?string $eeaPcaht): self
    {
        $this->eeaPcaht = $eeaPcaht;

        return $this;
    }

    public function getEeaPresnet(): ?string
    {
        return $this->eeaPresnet;
    }

    public function setEeaPresnet(?string $eeaPresnet): self
    {
        $this->eeaPresnet = $eeaPresnet;

        return $this;
    }

    public function getEeaPcapprop(): ?string
    {
        return $this->eeaPcapprop;
    }

    public function setEeaPcapprop(?string $eeaPcapprop): self
    {
        $this->eeaPcapprop = $eeaPcapprop;

        return $this;
    }

    public function getEeaPeffectif(): ?string
    {
        return $this->eeaPeffectif;
    }

    public function setEeaPeffectif(?string $eeaPeffectif): self
    {
        $this->eeaPeffectif = $eeaPeffectif;

        return $this;
    }

    public function getEeaPnbstg(): ?string
    {
        return $this->eeaPnbstg;
    }

    public function setEeaPnbstg(?string $eeaPnbstg): self
    {
        $this->eeaPnbstg = $eeaPnbstg;

        return $this;
    }

    public function getEeaRmassesal(): ?string
    {
        return $this->eeaRmassesal;
    }

    public function setEeaRmassesal(?string $eeaRmassesal): self
    {
        $this->eeaRmassesal = $eeaRmassesal;

        return $this;
    }

    public function getEeaRdfpcdecl(): ?string
    {
        return $this->eeaRdfpcdecl;
    }

    public function setEeaRdfpcdecl(?string $eeaRdfpcdecl): self
    {
        $this->eeaRdfpcdecl = $eeaRdfpcdecl;

        return $this;
    }

    public function getEeaRpmform(): ?string
    {
        return $this->eeaRpmform;
    }

    public function setEeaRpmform(?string $eeaRpmform): self
    {
        $this->eeaRpmform = $eeaRpmform;

        return $this;
    }

    public function getEeaRsubrecues(): ?string
    {
        return $this->eeaRsubrecues;
    }

    public function setEeaRsubrecues(?string $eeaRsubrecues): self
    {
        $this->eeaRsubrecues = $eeaRsubrecues;

        return $this;
    }

    public function getEeaRsubattend(): ?string
    {
        return $this->eeaRsubattend;
    }

    public function setEeaRsubattend(?string $eeaRsubattend): self
    {
        $this->eeaRsubattend = $eeaRsubattend;

        return $this;
    }

    public function getEeaRdfpcnette(): ?string
    {
        return $this->eeaRdfpcnette;
    }

    public function setEeaRdfpcnette(?string $eeaRdfpcnette): self
    {
        $this->eeaRdfpcnette = $eeaRdfpcnette;

        return $this;
    }

    public function getEeaPmassesal(): ?string
    {
        return $this->eeaPmassesal;
    }

    public function setEeaPmassesal(?string $eeaPmassesal): self
    {
        $this->eeaPmassesal = $eeaPmassesal;

        return $this;
    }

    public function getEeaPdfpcdecl(): ?string
    {
        return $this->eeaPdfpcdecl;
    }

    public function setEeaPdfpcdecl(?string $eeaPdfpcdecl): self
    {
        $this->eeaPdfpcdecl = $eeaPdfpcdecl;

        return $this;
    }

    public function getEeaPpmform(): ?string
    {
        return $this->eeaPpmform;
    }

    public function setEeaPpmform(?string $eeaPpmform): self
    {
        $this->eeaPpmform = $eeaPpmform;

        return $this;
    }

    public function getEeaPsubrecues(): ?string
    {
        return $this->eeaPsubrecues;
    }

    public function setEeaPsubrecues(?string $eeaPsubrecues): self
    {
        $this->eeaPsubrecues = $eeaPsubrecues;

        return $this;
    }

    public function getEeaPsubattend(): ?string
    {
        return $this->eeaPsubattend;
    }

    public function setEeaPsubattend(?string $eeaPsubattend): self
    {
        $this->eeaPsubattend = $eeaPsubattend;

        return $this;
    }

    public function getEeaPdfpcnette(): ?string
    {
        return $this->eeaPdfpcnette;
    }

    public function setEeaPdfpcnette(?string $eeaPdfpcnette): self
    {
        $this->eeaPdfpcnette = $eeaPdfpcnette;

        return $this;
    }

    public function getEeaRevolefonq(): ?string
    {
        return $this->eeaRevolefonq;
    }

    public function setEeaRevolefonq(?string $eeaRevolefonq): self
    {
        $this->eeaRevolefonq = $eeaRevolefonq;

        return $this;
    }

    public function getEeaRevolefoq(): ?string
    {
        return $this->eeaRevolefoq;
    }

    public function setEeaRevolefoq(?string $eeaRevolefoq): self
    {
        $this->eeaRevolefoq = $eeaRevolefoq;

        return $this;
    }

    public function getEeaRevolefemp(): ?string
    {
        return $this->eeaRevolefemp;
    }

    public function setEeaRevolefemp(?string $eeaRevolefemp): self
    {
        $this->eeaRevolefemp = $eeaRevolefemp;

        return $this;
    }

    public function getEeaRevoleftec(): ?string
    {
        return $this->eeaRevoleftec;
    }

    public function setEeaRevoleftec(?string $eeaRevoleftec): self
    {
        $this->eeaRevoleftec = $eeaRevoleftec;

        return $this;
    }

    public function getEeaRevolefcad(): ?string
    {
        return $this->eeaRevolefcad;
    }

    public function setEeaRevolefcad(?string $eeaRevolefcad): self
    {
        $this->eeaRevolefcad = $eeaRevolefcad;

        return $this;
    }

    public function getEeaRevoleftot(): ?string
    {
        return $this->eeaRevoleftot;
    }

    public function setEeaRevoleftot(?string $eeaRevoleftot): self
    {
        $this->eeaRevoleftot = $eeaRevoleftot;

        return $this;
    }

    public function getEeaPevolefonq(): ?string
    {
        return $this->eeaPevolefonq;
    }

    public function setEeaPevolefonq(?string $eeaPevolefonq): self
    {
        $this->eeaPevolefonq = $eeaPevolefonq;

        return $this;
    }

    public function getEeaPevolefoq(): ?string
    {
        return $this->eeaPevolefoq;
    }

    public function setEeaPevolefoq(?string $eeaPevolefoq): self
    {
        $this->eeaPevolefoq = $eeaPevolefoq;

        return $this;
    }

    public function getEeaPevolefemp(): ?string
    {
        return $this->eeaPevolefemp;
    }

    public function setEeaPevolefemp(?string $eeaPevolefemp): self
    {
        $this->eeaPevolefemp = $eeaPevolefemp;

        return $this;
    }

    public function getEeaPevoleftec(): ?string
    {
        return $this->eeaPevoleftec;
    }

    public function setEeaPevoleftec(?string $eeaPevoleftec): self
    {
        $this->eeaPevoleftec = $eeaPevoleftec;

        return $this;
    }

    public function getEeaPevolefcad(): ?string
    {
        return $this->eeaPevolefcad;
    }

    public function setEeaPevolefcad(?string $eeaPevolefcad): self
    {
        $this->eeaPevolefcad = $eeaPevolefcad;

        return $this;
    }

    public function getEeaPevoleftot(): ?string
    {
        return $this->eeaPevoleftot;
    }

    public function setEeaPevoleftot(?string $eeaPevoleftot): self
    {
        $this->eeaPevoleftot = $eeaPevoleftot;

        return $this;
    }

    public function getEeaEntreprise(): ?EttEntp
    {
        return $this->eeaEntreprise;
    }

    public function setEeaEntreprise(?EttEntp $eeaEntreprise): self
    {
        $this->eeaEntreprise = $eeaEntreprise;

        return $this;
    }


}
