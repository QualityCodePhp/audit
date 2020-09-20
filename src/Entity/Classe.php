<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe
 *
 * @ORM\Table(name="classe", uniqueConstraints={@ORM\UniqueConstraint(name="classe_pk", columns={"cls_id"})})
 * @ORM\Entity
 */
class Classe
{
    /**
     * @var int
     *
     * @ORM\Column(name="cls_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="classe_cls_id_seq", allocationSize=1, initialValue=1)
     */
    private $clsId;

    /**
     * @var string
     *
     * @ORM\Column(name="cls_code", type="string", length=10, nullable=false)
     */
    private $clsCode;

    /**
     * @var string
     *
     * @ORM\Column(name="cls_libelle", type="string", length=50, nullable=false)
     */
    private $clsLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="cls_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $clsEtat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cls_desc", type="string", length=100, nullable=true)
     */
    private $clsDesc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cls_adrsimmeub", type="string", length=38, nullable=true)
     */
    private $clsAdrsimmeub;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cls_nvoie", type="string", length=7, nullable=true)
     */
    private $clsNvoie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cls_bister", type="string", length=1, nullable=true)
     */
    private $clsBister;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cls_adr1", type="string", length=38, nullable=true)
     */
    private $clsAdr1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cls_adr2", type="string", length=38, nullable=true)
     */
    private $clsAdr2;

    /**
     * @var string
     *
     * @ORM\Column(name="cls_cpostal", type="string", length=5, nullable=false)
     */
    private $clsCpostal;

    /**
     * @var string
     *
     * @ORM\Column(name="cls_ville", type="string", length=32, nullable=false)
     */
    private $clsVille;

    /**
     * @var string
     *
     * @ORM\Column(name="cls_pays", type="string", length=38, nullable=false)
     */
    private $clsPays;

    /**
     * @var string
     *
     * @ORM\Column(name="cls_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $clsAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cls_datec", type="datetime", nullable=false)
     */
    private $clsDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cls_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $clsAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cls_datem", type="datetime", nullable=true)
     */
    private $clsDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cls_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $clsAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cls_datea", type="datetime", nullable=true)
     */
    private $clsDatea;

    public function getClsId(): ?int
    {
        return $this->clsId;
    }

    public function getClsCode(): ?string
    {
        return $this->clsCode;
    }

    public function setClsCode(string $clsCode): self
    {
        $this->clsCode = $clsCode;

        return $this;
    }

    public function getClsLibelle(): ?string
    {
        return $this->clsLibelle;
    }

    public function setClsLibelle(string $clsLibelle): self
    {
        $this->clsLibelle = $clsLibelle;

        return $this;
    }

    public function getClsEtat(): ?string
    {
        return $this->clsEtat;
    }

    public function setClsEtat(string $clsEtat): self
    {
        $this->clsEtat = $clsEtat;

        return $this;
    }

    public function getClsDesc(): ?string
    {
        return $this->clsDesc;
    }

    public function setClsDesc(?string $clsDesc): self
    {
        $this->clsDesc = $clsDesc;

        return $this;
    }

    public function getClsAdrsimmeub(): ?string
    {
        return $this->clsAdrsimmeub;
    }

    public function setClsAdrsimmeub(?string $clsAdrsimmeub): self
    {
        $this->clsAdrsimmeub = $clsAdrsimmeub;

        return $this;
    }

    public function getClsNvoie(): ?string
    {
        return $this->clsNvoie;
    }

    public function setClsNvoie(?string $clsNvoie): self
    {
        $this->clsNvoie = $clsNvoie;

        return $this;
    }

    public function getClsBister(): ?string
    {
        return $this->clsBister;
    }

    public function setClsBister(?string $clsBister): self
    {
        $this->clsBister = $clsBister;

        return $this;
    }

    public function getClsAdr1(): ?string
    {
        return $this->clsAdr1;
    }

    public function setClsAdr1(?string $clsAdr1): self
    {
        $this->clsAdr1 = $clsAdr1;

        return $this;
    }

    public function getClsAdr2(): ?string
    {
        return $this->clsAdr2;
    }

    public function setClsAdr2(?string $clsAdr2): self
    {
        $this->clsAdr2 = $clsAdr2;

        return $this;
    }

    public function getClsCpostal(): ?string
    {
        return $this->clsCpostal;
    }

    public function setClsCpostal(string $clsCpostal): self
    {
        $this->clsCpostal = $clsCpostal;

        return $this;
    }

    public function getClsVille(): ?string
    {
        return $this->clsVille;
    }

    public function setClsVille(string $clsVille): self
    {
        $this->clsVille = $clsVille;

        return $this;
    }

    public function getClsPays(): ?string
    {
        return $this->clsPays;
    }

    public function setClsPays(string $clsPays): self
    {
        $this->clsPays = $clsPays;

        return $this;
    }

    public function getClsAuteurc(): ?string
    {
        return $this->clsAuteurc;
    }

    public function setClsAuteurc(string $clsAuteurc): self
    {
        $this->clsAuteurc = $clsAuteurc;

        return $this;
    }

    public function getClsDatec(): ?\DateTimeInterface
    {
        return $this->clsDatec;
    }

    public function setClsDatec(\DateTimeInterface $clsDatec): self
    {
        $this->clsDatec = $clsDatec;

        return $this;
    }

    public function getClsAuteurm(): ?string
    {
        return $this->clsAuteurm;
    }

    public function setClsAuteurm(?string $clsAuteurm): self
    {
        $this->clsAuteurm = $clsAuteurm;

        return $this;
    }

    public function getClsDatem(): ?\DateTimeInterface
    {
        return $this->clsDatem;
    }

    public function setClsDatem(?\DateTimeInterface $clsDatem): self
    {
        $this->clsDatem = $clsDatem;

        return $this;
    }

    public function getClsAuteura(): ?string
    {
        return $this->clsAuteura;
    }

    public function setClsAuteura(?string $clsAuteura): self
    {
        $this->clsAuteura = $clsAuteura;

        return $this;
    }

    public function getClsDatea(): ?\DateTimeInterface
    {
        return $this->clsDatea;
    }

    public function setClsDatea(?\DateTimeInterface $clsDatea): self
    {
        $this->clsDatea = $clsDatea;

        return $this;
    }


}
