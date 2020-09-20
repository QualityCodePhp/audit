<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FseZonerue
 *
 * @ORM\Table(name="fse_zonerue", uniqueConstraints={@ORM\UniqueConstraint(name="fse_zonerue_pk", columns={"fsr_id"})}, indexes={@ORM\Index(name="fse_zonerue_fzfif", columns={"fsr_insee"})})
 * @ORM\Entity
 */
class FseZonerue
{
    /**
     * @var string
     *
     * @ORM\Column(name="fsr_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fse_zonerue_fsr_id_seq", allocationSize=1, initialValue=1)
     */
    private $fsrId;

    /**
     * @var string
     *
     * @ORM\Column(name="fsr_nomvoie", type="string", length=50, nullable=false)
     */
    private $fsrNomvoie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fsr_typevoie", type="string", length=50, nullable=true)
     */
    private $fsrTypevoie;

    /**
     * @var string
     *
     * @ORM\Column(name="fsr_eligible", type="string", length=20, nullable=false, options={"comment"="ELIGIBLE, HORS ELIGIBLE, ELIGIBLE PAIR, ELIGIBLE IMPAIR"})
     */
    private $fsrEligible;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fsr_comment", type="string", length=300, nullable=true)
     */
    private $fsrComment;

    /**
     * @var string
     *
     * @ORM\Column(name="fsr_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $fsrEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="fsr_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $fsrAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fsr_datec", type="datetime", nullable=false)
     */
    private $fsrDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fsr_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $fsrAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fsr_datem", type="datetime", nullable=true)
     */
    private $fsrDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fsr_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $fsrAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fsr_datea", type="datetime", nullable=true)
     */
    private $fsrDatea;

    /**
     * @var \FseZoneville
     *
     * @ORM\ManyToOne(targetEntity="FseZoneville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fsr_insee", referencedColumnName="fsv_id")
     * })
     */
    private $fsrInsee;

    public function getFsrId(): ?string
    {
        return $this->fsrId;
    }

    public function getFsrNomvoie(): ?string
    {
        return $this->fsrNomvoie;
    }

    public function setFsrNomvoie(string $fsrNomvoie): self
    {
        $this->fsrNomvoie = $fsrNomvoie;

        return $this;
    }

    public function getFsrTypevoie(): ?string
    {
        return $this->fsrTypevoie;
    }

    public function setFsrTypevoie(?string $fsrTypevoie): self
    {
        $this->fsrTypevoie = $fsrTypevoie;

        return $this;
    }

    public function getFsrEligible(): ?string
    {
        return $this->fsrEligible;
    }

    public function setFsrEligible(string $fsrEligible): self
    {
        $this->fsrEligible = $fsrEligible;

        return $this;
    }

    public function getFsrComment(): ?string
    {
        return $this->fsrComment;
    }

    public function setFsrComment(?string $fsrComment): self
    {
        $this->fsrComment = $fsrComment;

        return $this;
    }

    public function getFsrEtat(): ?string
    {
        return $this->fsrEtat;
    }

    public function setFsrEtat(string $fsrEtat): self
    {
        $this->fsrEtat = $fsrEtat;

        return $this;
    }

    public function getFsrAuteurc(): ?string
    {
        return $this->fsrAuteurc;
    }

    public function setFsrAuteurc(string $fsrAuteurc): self
    {
        $this->fsrAuteurc = $fsrAuteurc;

        return $this;
    }

    public function getFsrDatec(): ?\DateTimeInterface
    {
        return $this->fsrDatec;
    }

    public function setFsrDatec(\DateTimeInterface $fsrDatec): self
    {
        $this->fsrDatec = $fsrDatec;

        return $this;
    }

    public function getFsrAuteurm(): ?string
    {
        return $this->fsrAuteurm;
    }

    public function setFsrAuteurm(?string $fsrAuteurm): self
    {
        $this->fsrAuteurm = $fsrAuteurm;

        return $this;
    }

    public function getFsrDatem(): ?\DateTimeInterface
    {
        return $this->fsrDatem;
    }

    public function setFsrDatem(?\DateTimeInterface $fsrDatem): self
    {
        $this->fsrDatem = $fsrDatem;

        return $this;
    }

    public function getFsrAuteura(): ?string
    {
        return $this->fsrAuteura;
    }

    public function setFsrAuteura(?string $fsrAuteura): self
    {
        $this->fsrAuteura = $fsrAuteura;

        return $this;
    }

    public function getFsrDatea(): ?\DateTimeInterface
    {
        return $this->fsrDatea;
    }

    public function setFsrDatea(?\DateTimeInterface $fsrDatea): self
    {
        $this->fsrDatea = $fsrDatea;

        return $this;
    }

    public function getFsrInsee(): ?FseZoneville
    {
        return $this->fsrInsee;
    }

    public function setFsrInsee(?FseZoneville $fsrInsee): self
    {
        $this->fsrInsee = $fsrInsee;

        return $this;
    }


}
