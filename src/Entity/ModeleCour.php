<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModeleCour
 *
 * @ORM\Table(name="modele_cour", uniqueConstraints={@ORM\UniqueConstraint(name="modele_cour_pk", columns={"mcr_id"})}, indexes={@ORM\Index(name="modele_cour_tmtif", columns={"mcr_type"})})
 * @ORM\Entity
 */
class ModeleCour
{
    /**
     * @var string
     *
     * @ORM\Column(name="mcr_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="modele_cour_mcr_id_seq", allocationSize=1, initialValue=1)
     */
    private $mcrId;

    /**
     * @var string
     *
     * @ORM\Column(name="mcr_code", type="string", length=20, nullable=false)
     */
    private $mcrCode;

    /**
     * @var string
     *
     * @ORM\Column(name="mcr_libelle", type="string", length=50, nullable=false)
     */
    private $mcrLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="mcr_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $mcrEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="mcr_emplacement", type="string", length=100, nullable=false, options={"comment"="Nom du fichier sans l'extension"})
     */
    private $mcrEmplacement;

    /**
     * @var string
     *
     * @ORM\Column(name="mcr_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $mcrAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mcr_datec", type="datetime", nullable=false)
     */
    private $mcrDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mcr_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $mcrAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="mcr_datem", type="datetime", nullable=true)
     */
    private $mcrDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mcr_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $mcrAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="mcr_datea", type="datetime", nullable=true)
     */
    private $mcrDatea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mcr_stpage", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $mcrStpage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mcr_edition_externe", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $mcrEditionExterne;

    /**
     * @var \TModelecour
     *
     * @ORM\ManyToOne(targetEntity="TModelecour")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mcr_type", referencedColumnName="tmc_id")
     * })
     */
    private $mcrType;

    public function getMcrId(): ?string
    {
        return $this->mcrId;
    }

    public function getMcrCode(): ?string
    {
        return $this->mcrCode;
    }

    public function setMcrCode(string $mcrCode): self
    {
        $this->mcrCode = $mcrCode;

        return $this;
    }

    public function getMcrLibelle(): ?string
    {
        return $this->mcrLibelle;
    }

    public function setMcrLibelle(string $mcrLibelle): self
    {
        $this->mcrLibelle = $mcrLibelle;

        return $this;
    }

    public function getMcrEtat(): ?string
    {
        return $this->mcrEtat;
    }

    public function setMcrEtat(string $mcrEtat): self
    {
        $this->mcrEtat = $mcrEtat;

        return $this;
    }

    public function getMcrEmplacement(): ?string
    {
        return $this->mcrEmplacement;
    }

    public function setMcrEmplacement(string $mcrEmplacement): self
    {
        $this->mcrEmplacement = $mcrEmplacement;

        return $this;
    }

    public function getMcrAuteurc(): ?string
    {
        return $this->mcrAuteurc;
    }

    public function setMcrAuteurc(string $mcrAuteurc): self
    {
        $this->mcrAuteurc = $mcrAuteurc;

        return $this;
    }

    public function getMcrDatec(): ?\DateTimeInterface
    {
        return $this->mcrDatec;
    }

    public function setMcrDatec(\DateTimeInterface $mcrDatec): self
    {
        $this->mcrDatec = $mcrDatec;

        return $this;
    }

    public function getMcrAuteurm(): ?string
    {
        return $this->mcrAuteurm;
    }

    public function setMcrAuteurm(?string $mcrAuteurm): self
    {
        $this->mcrAuteurm = $mcrAuteurm;

        return $this;
    }

    public function getMcrDatem(): ?\DateTimeInterface
    {
        return $this->mcrDatem;
    }

    public function setMcrDatem(?\DateTimeInterface $mcrDatem): self
    {
        $this->mcrDatem = $mcrDatem;

        return $this;
    }

    public function getMcrAuteura(): ?string
    {
        return $this->mcrAuteura;
    }

    public function setMcrAuteura(?string $mcrAuteura): self
    {
        $this->mcrAuteura = $mcrAuteura;

        return $this;
    }

    public function getMcrDatea(): ?\DateTimeInterface
    {
        return $this->mcrDatea;
    }

    public function setMcrDatea(?\DateTimeInterface $mcrDatea): self
    {
        $this->mcrDatea = $mcrDatea;

        return $this;
    }

    public function getMcrStpage(): ?string
    {
        return $this->mcrStpage;
    }

    public function setMcrStpage(?string $mcrStpage): self
    {
        $this->mcrStpage = $mcrStpage;

        return $this;
    }

    public function getMcrEditionExterne(): ?string
    {
        return $this->mcrEditionExterne;
    }

    public function setMcrEditionExterne(?string $mcrEditionExterne): self
    {
        $this->mcrEditionExterne = $mcrEditionExterne;

        return $this;
    }

    public function getMcrType(): ?TModelecour
    {
        return $this->mcrType;
    }

    public function setMcrType(?TModelecour $mcrType): self
    {
        $this->mcrType = $mcrType;

        return $this;
    }


}
