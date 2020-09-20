<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FseZoneville
 *
 * @ORM\Table(name="fse_zoneville", uniqueConstraints={@ORM\UniqueConstraint(name="fse_zoneville_pk", columns={"fsv_id"})}, indexes={@ORM\Index(name="fse_zoneville_ddcf", columns={"fsv_depmnt"})})
 * @ORM\Entity
 */
class FseZoneville
{
    /**
     * @var string
     *
     * @ORM\Column(name="fsv_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fse_zoneville_fsv_id_seq", allocationSize=1, initialValue=1)
     */
    private $fsvId;

    /**
     * @var string
     *
     * @ORM\Column(name="fsv_cpostal", type="string", length=5, nullable=false)
     */
    private $fsvCpostal;

    /**
     * @var string
     *
     * @ORM\Column(name="fsv_canton", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $fsvCanton;

    /**
     * @var string
     *
     * @ORM\Column(name="fsv_numcom", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $fsvNumcom;

    /**
     * @var string
     *
     * @ORM\Column(name="fsv_libelle", type="string", length=32, nullable=false)
     */
    private $fsvLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="fsv_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $fsvEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="fsv_insee", type="decimal", precision=5, scale=0, nullable=false)
     */
    private $fsvInsee;

    /**
     * @var string
     *
     * @ORM\Column(name="fsv_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $fsvAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fsv_datec", type="datetime", nullable=false)
     */
    private $fsvDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fsv_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $fsvAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fsv_datem", type="datetime", nullable=true)
     */
    private $fsvDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fsv_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $fsvAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fsv_datea", type="datetime", nullable=true)
     */
    private $fsvDatea;

    /**
     * @var \Departement
     *
     * @ORM\ManyToOne(targetEntity="Departement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fsv_depmnt", referencedColumnName="dep_code")
     * })
     */
    private $fsvDepmnt;

    public function getFsvId(): ?string
    {
        return $this->fsvId;
    }

    public function getFsvCpostal(): ?string
    {
        return $this->fsvCpostal;
    }

    public function setFsvCpostal(string $fsvCpostal): self
    {
        $this->fsvCpostal = $fsvCpostal;

        return $this;
    }

    public function getFsvCanton(): ?string
    {
        return $this->fsvCanton;
    }

    public function setFsvCanton(string $fsvCanton): self
    {
        $this->fsvCanton = $fsvCanton;

        return $this;
    }

    public function getFsvNumcom(): ?string
    {
        return $this->fsvNumcom;
    }

    public function setFsvNumcom(string $fsvNumcom): self
    {
        $this->fsvNumcom = $fsvNumcom;

        return $this;
    }

    public function getFsvLibelle(): ?string
    {
        return $this->fsvLibelle;
    }

    public function setFsvLibelle(string $fsvLibelle): self
    {
        $this->fsvLibelle = $fsvLibelle;

        return $this;
    }

    public function getFsvEtat(): ?string
    {
        return $this->fsvEtat;
    }

    public function setFsvEtat(string $fsvEtat): self
    {
        $this->fsvEtat = $fsvEtat;

        return $this;
    }

    public function getFsvInsee(): ?string
    {
        return $this->fsvInsee;
    }

    public function setFsvInsee(string $fsvInsee): self
    {
        $this->fsvInsee = $fsvInsee;

        return $this;
    }

    public function getFsvAuteurc(): ?string
    {
        return $this->fsvAuteurc;
    }

    public function setFsvAuteurc(string $fsvAuteurc): self
    {
        $this->fsvAuteurc = $fsvAuteurc;

        return $this;
    }

    public function getFsvDatec(): ?\DateTimeInterface
    {
        return $this->fsvDatec;
    }

    public function setFsvDatec(\DateTimeInterface $fsvDatec): self
    {
        $this->fsvDatec = $fsvDatec;

        return $this;
    }

    public function getFsvAuteurm(): ?string
    {
        return $this->fsvAuteurm;
    }

    public function setFsvAuteurm(?string $fsvAuteurm): self
    {
        $this->fsvAuteurm = $fsvAuteurm;

        return $this;
    }

    public function getFsvDatem(): ?\DateTimeInterface
    {
        return $this->fsvDatem;
    }

    public function setFsvDatem(?\DateTimeInterface $fsvDatem): self
    {
        $this->fsvDatem = $fsvDatem;

        return $this;
    }

    public function getFsvAuteura(): ?string
    {
        return $this->fsvAuteura;
    }

    public function setFsvAuteura(?string $fsvAuteura): self
    {
        $this->fsvAuteura = $fsvAuteura;

        return $this;
    }

    public function getFsvDatea(): ?\DateTimeInterface
    {
        return $this->fsvDatea;
    }

    public function setFsvDatea(?\DateTimeInterface $fsvDatea): self
    {
        $this->fsvDatea = $fsvDatea;

        return $this;
    }

    public function getFsvDepmnt(): ?Departement
    {
        return $this->fsvDepmnt;
    }

    public function setFsvDepmnt(?Departement $fsvDepmnt): self
    {
        $this->fsvDepmnt = $fsvDepmnt;

        return $this;
    }


}
