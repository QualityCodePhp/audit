<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubdiDispo
 *
 * @ORM\Table(name="subdi_dispo", uniqueConstraints={@ORM\UniqueConstraint(name="subdi_dispo_pk", columns={"sud_id"})}, indexes={@ORM\Index(name="subdi_dispo_ddif", columns={"sud_dispo"})})
 * @ORM\Entity
 */
class SubdiDispo
{
    /**
     * @var int
     *
     * @ORM\Column(name="sud_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="subdi_dispo_sud_id_seq", allocationSize=1, initialValue=1)
     */
    private $sudId;

    /**
     * @var string
     *
     * @ORM\Column(name="sud_code", type="string", length=10, nullable=false)
     */
    private $sudCode;

    /**
     * @var string
     *
     * @ORM\Column(name="sud_libelle", type="string", length=50, nullable=false)
     */
    private $sudLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="sud_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $sudEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sud_datec", type="datetime", nullable=false)
     */
    private $sudDatec;

    /**
     * @var string
     *
     * @ORM\Column(name="sud_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $sudAuteurc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sud_datem", type="datetime", nullable=true)
     */
    private $sudDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sud_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $sudAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sud_datea", type="datetime", nullable=true)
     */
    private $sudDatea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sud_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $sudAuteura;

    /**
     * @var \Dispositif
     *
     * @ORM\ManyToOne(targetEntity="Dispositif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sud_dispo", referencedColumnName="dsp_id")
     * })
     */
    private $sudDispo;

    public function getSudId(): ?int
    {
        return $this->sudId;
    }

    public function getSudCode(): ?string
    {
        return $this->sudCode;
    }

    public function setSudCode(string $sudCode): self
    {
        $this->sudCode = $sudCode;

        return $this;
    }

    public function getSudLibelle(): ?string
    {
        return $this->sudLibelle;
    }

    public function setSudLibelle(string $sudLibelle): self
    {
        $this->sudLibelle = $sudLibelle;

        return $this;
    }

    public function getSudEtat(): ?string
    {
        return $this->sudEtat;
    }

    public function setSudEtat(string $sudEtat): self
    {
        $this->sudEtat = $sudEtat;

        return $this;
    }

    public function getSudDatec(): ?\DateTimeInterface
    {
        return $this->sudDatec;
    }

    public function setSudDatec(\DateTimeInterface $sudDatec): self
    {
        $this->sudDatec = $sudDatec;

        return $this;
    }

    public function getSudAuteurc(): ?string
    {
        return $this->sudAuteurc;
    }

    public function setSudAuteurc(string $sudAuteurc): self
    {
        $this->sudAuteurc = $sudAuteurc;

        return $this;
    }

    public function getSudDatem(): ?\DateTimeInterface
    {
        return $this->sudDatem;
    }

    public function setSudDatem(?\DateTimeInterface $sudDatem): self
    {
        $this->sudDatem = $sudDatem;

        return $this;
    }

    public function getSudAuteurm(): ?string
    {
        return $this->sudAuteurm;
    }

    public function setSudAuteurm(?string $sudAuteurm): self
    {
        $this->sudAuteurm = $sudAuteurm;

        return $this;
    }

    public function getSudDatea(): ?\DateTimeInterface
    {
        return $this->sudDatea;
    }

    public function setSudDatea(?\DateTimeInterface $sudDatea): self
    {
        $this->sudDatea = $sudDatea;

        return $this;
    }

    public function getSudAuteura(): ?string
    {
        return $this->sudAuteura;
    }

    public function setSudAuteura(?string $sudAuteura): self
    {
        $this->sudAuteura = $sudAuteura;

        return $this;
    }

    public function getSudDispo(): ?Dispositif
    {
        return $this->sudDispo;
    }

    public function setSudDispo(?Dispositif $sudDispo): self
    {
        $this->sudDispo = $sudDispo;

        return $this;
    }


}
