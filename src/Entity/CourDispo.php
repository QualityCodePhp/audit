<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CourDispo
 *
 * @ORM\Table(name="cour_dispo", uniqueConstraints={@ORM\UniqueConstraint(name="cour_dispo_pk", columns={"mcd_id"})}, indexes={@ORM\Index(name="cour_dispo_tmtif", columns={"mcd_type"}), @ORM\Index(name="cour_dispo_mcmif", columns={"mcd_modele"}), @ORM\Index(name="cour_dispo_ddif", columns={"mcd_dispo"})})
 * @ORM\Entity
 */
class CourDispo
{
    /**
     * @var string
     *
     * @ORM\Column(name="mcd_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cour_dispo_mcd_id_seq", allocationSize=1, initialValue=1)
     */
    private $mcdId;

    /**
     * @var string
     *
     * @ORM\Column(name="mcd_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $mcdEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="mcd_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $mcdAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mcd_datec", type="datetime", nullable=false)
     */
    private $mcdDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mcd_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $mcdAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="mcd_datem", type="datetime", nullable=true)
     */
    private $mcdDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mcd_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $mcdAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="mcd_datea", type="datetime", nullable=true)
     */
    private $mcdDatea;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="mcd_date_deb_valid", type="datetime", nullable=true)
     */
    private $mcdDateDebValid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="mcd_date_fin_valid", type="datetime", nullable=true)
     */
    private $mcdDateFinValid;

    /**
     * @var \Dispositif
     *
     * @ORM\ManyToOne(targetEntity="Dispositif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mcd_dispo", referencedColumnName="dsp_id")
     * })
     */
    private $mcdDispo;

    /**
     * @var \ModeleCour
     *
     * @ORM\ManyToOne(targetEntity="ModeleCour")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mcd_modele", referencedColumnName="mcr_id")
     * })
     */
    private $mcdModele;

    /**
     * @var \TModelecour
     *
     * @ORM\ManyToOne(targetEntity="TModelecour")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mcd_type", referencedColumnName="tmc_id")
     * })
     */
    private $mcdType;

    public function getMcdId(): ?string
    {
        return $this->mcdId;
    }

    public function getMcdEtat(): ?string
    {
        return $this->mcdEtat;
    }

    public function setMcdEtat(string $mcdEtat): self
    {
        $this->mcdEtat = $mcdEtat;

        return $this;
    }

    public function getMcdAuteurc(): ?string
    {
        return $this->mcdAuteurc;
    }

    public function setMcdAuteurc(string $mcdAuteurc): self
    {
        $this->mcdAuteurc = $mcdAuteurc;

        return $this;
    }

    public function getMcdDatec(): ?\DateTimeInterface
    {
        return $this->mcdDatec;
    }

    public function setMcdDatec(\DateTimeInterface $mcdDatec): self
    {
        $this->mcdDatec = $mcdDatec;

        return $this;
    }

    public function getMcdAuteurm(): ?string
    {
        return $this->mcdAuteurm;
    }

    public function setMcdAuteurm(?string $mcdAuteurm): self
    {
        $this->mcdAuteurm = $mcdAuteurm;

        return $this;
    }

    public function getMcdDatem(): ?\DateTimeInterface
    {
        return $this->mcdDatem;
    }

    public function setMcdDatem(?\DateTimeInterface $mcdDatem): self
    {
        $this->mcdDatem = $mcdDatem;

        return $this;
    }

    public function getMcdAuteura(): ?string
    {
        return $this->mcdAuteura;
    }

    public function setMcdAuteura(?string $mcdAuteura): self
    {
        $this->mcdAuteura = $mcdAuteura;

        return $this;
    }

    public function getMcdDatea(): ?\DateTimeInterface
    {
        return $this->mcdDatea;
    }

    public function setMcdDatea(?\DateTimeInterface $mcdDatea): self
    {
        $this->mcdDatea = $mcdDatea;

        return $this;
    }

    public function getMcdDateDebValid(): ?\DateTimeInterface
    {
        return $this->mcdDateDebValid;
    }

    public function setMcdDateDebValid(?\DateTimeInterface $mcdDateDebValid): self
    {
        $this->mcdDateDebValid = $mcdDateDebValid;

        return $this;
    }

    public function getMcdDateFinValid(): ?\DateTimeInterface
    {
        return $this->mcdDateFinValid;
    }

    public function setMcdDateFinValid(?\DateTimeInterface $mcdDateFinValid): self
    {
        $this->mcdDateFinValid = $mcdDateFinValid;

        return $this;
    }

    public function getMcdDispo(): ?Dispositif
    {
        return $this->mcdDispo;
    }

    public function setMcdDispo(?Dispositif $mcdDispo): self
    {
        $this->mcdDispo = $mcdDispo;

        return $this;
    }

    public function getMcdModele(): ?ModeleCour
    {
        return $this->mcdModele;
    }

    public function setMcdModele(?ModeleCour $mcdModele): self
    {
        $this->mcdModele = $mcdModele;

        return $this;
    }

    public function getMcdType(): ?TModelecour
    {
        return $this->mcdType;
    }

    public function setMcdType(?TModelecour $mcdType): self
    {
        $this->mcdType = $mcdType;

        return $this;
    }


}
