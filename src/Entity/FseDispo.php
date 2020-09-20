<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FseDispo
 *
 * @ORM\Table(name="fse_dispo", uniqueConstraints={@ORM\UniqueConstraint(name="fse_dispo_pk", columns={"fsi_id"})}, indexes={@ORM\Index(name="fse_dispo_fafif2", columns={"fsi_axe"}), @ORM\Index(name="fse_dispo_fmfif", columns={"fsi_mesure"}), @ORM\Index(name="fse_dispo_fofif", columns={"fsi_objectif"}), @ORM\Index(name="fse_dispo_ddif", columns={"fsi_dispo"})})
 * @ORM\Entity
 */
class FseDispo
{
    /**
     * @var string
     *
     * @ORM\Column(name="fsi_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fse_dispo_fsi_id_seq", allocationSize=1, initialValue=1)
     */
    private $fsiId;

    /**
     * @var string
     *
     * @ORM\Column(name="fsi_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $fsiEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="fsi_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $fsiAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fsi_datec", type="datetime", nullable=false)
     */
    private $fsiDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fsi_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $fsiAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fsi_datea", type="datetime", nullable=true)
     */
    private $fsiDatea;

    /**
     * @var \FseAxe
     *
     * @ORM\ManyToOne(targetEntity="FseAxe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fsi_axe", referencedColumnName="fsa_id")
     * })
     */
    private $fsiAxe;

    /**
     * @var \Dispositif
     *
     * @ORM\ManyToOne(targetEntity="Dispositif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fsi_dispo", referencedColumnName="dsp_id")
     * })
     */
    private $fsiDispo;

    /**
     * @var \FseMes
     *
     * @ORM\ManyToOne(targetEntity="FseMes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fsi_mesure", referencedColumnName="fsm_id")
     * })
     */
    private $fsiMesure;

    /**
     * @var \FseObj
     *
     * @ORM\ManyToOne(targetEntity="FseObj")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fsi_objectif", referencedColumnName="fso_id")
     * })
     */
    private $fsiObjectif;

    public function getFsiId(): ?string
    {
        return $this->fsiId;
    }

    public function getFsiEtat(): ?string
    {
        return $this->fsiEtat;
    }

    public function setFsiEtat(string $fsiEtat): self
    {
        $this->fsiEtat = $fsiEtat;

        return $this;
    }

    public function getFsiAuteurc(): ?string
    {
        return $this->fsiAuteurc;
    }

    public function setFsiAuteurc(string $fsiAuteurc): self
    {
        $this->fsiAuteurc = $fsiAuteurc;

        return $this;
    }

    public function getFsiDatec(): ?\DateTimeInterface
    {
        return $this->fsiDatec;
    }

    public function setFsiDatec(\DateTimeInterface $fsiDatec): self
    {
        $this->fsiDatec = $fsiDatec;

        return $this;
    }

    public function getFsiAuteura(): ?string
    {
        return $this->fsiAuteura;
    }

    public function setFsiAuteura(?string $fsiAuteura): self
    {
        $this->fsiAuteura = $fsiAuteura;

        return $this;
    }

    public function getFsiDatea(): ?\DateTimeInterface
    {
        return $this->fsiDatea;
    }

    public function setFsiDatea(?\DateTimeInterface $fsiDatea): self
    {
        $this->fsiDatea = $fsiDatea;

        return $this;
    }

    public function getFsiAxe(): ?FseAxe
    {
        return $this->fsiAxe;
    }

    public function setFsiAxe(?FseAxe $fsiAxe): self
    {
        $this->fsiAxe = $fsiAxe;

        return $this;
    }

    public function getFsiDispo(): ?Dispositif
    {
        return $this->fsiDispo;
    }

    public function setFsiDispo(?Dispositif $fsiDispo): self
    {
        $this->fsiDispo = $fsiDispo;

        return $this;
    }

    public function getFsiMesure(): ?FseMes
    {
        return $this->fsiMesure;
    }

    public function setFsiMesure(?FseMes $fsiMesure): self
    {
        $this->fsiMesure = $fsiMesure;

        return $this;
    }

    public function getFsiObjectif(): ?FseObj
    {
        return $this->fsiObjectif;
    }

    public function setFsiObjectif(?FseObj $fsiObjectif): self
    {
        $this->fsiObjectif = $fsiObjectif;

        return $this;
    }


}
