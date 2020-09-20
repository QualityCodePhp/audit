<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Simulsubdi
 *
 * @ORM\Table(name="simulsubdi", uniqueConstraints={@ORM\UniqueConstraint(name="simulsubdi_pk", columns={"sms_id"})}, indexes={@ORM\Index(name="simulsubdi_fdfif", columns={"sms_fsedispo"}), @ORM\Index(name="simulsubdi_ppif2", columns={"sms_prgcertif"}), @ORM\Index(name="simulsubdi_spsif", columns={"sms_subdiprog"}), @ORM\Index(name="simulsubdi_ppif", columns={"sms_programme"})})
 * @ORM\Entity
 */
class Simulsubdi
{
    /**
     * @var string
     *
     * @ORM\Column(name="sms_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="simulsubdi_sms_id_seq", allocationSize=1, initialValue=1)
     */
    private $smsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sms_orgcertif", type="string", length=50, nullable=true)
     */
    private $smsOrgcertif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sms_eligible", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $smsEligible;

    /**
     * @var string
     *
     * @ORM\Column(name="sms_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $smsEtat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sms_budget", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $smsBudget;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sms_mntfse", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $smsMntfse;

    /**
     * @var \FseDispo
     *
     * @ORM\ManyToOne(targetEntity="FseDispo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sms_fsedispo", referencedColumnName="fsi_id")
     * })
     */
    private $smsFsedispo;

    /**
     * @var \Prgcertif
     *
     * @ORM\ManyToOne(targetEntity="Prgcertif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sms_prgcertif", referencedColumnName="prc_id")
     * })
     */
    private $smsPrgcertif;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sms_programme", referencedColumnName="prg_id")
     * })
     */
    private $smsProgramme;

    /**
     * @var \SubdiProg
     *
     * @ORM\ManyToOne(targetEntity="SubdiProg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sms_subdiprog", referencedColumnName="sup_id")
     * })
     */
    private $smsSubdiprog;

    public function getSmsId(): ?string
    {
        return $this->smsId;
    }

    public function getSmsOrgcertif(): ?string
    {
        return $this->smsOrgcertif;
    }

    public function setSmsOrgcertif(?string $smsOrgcertif): self
    {
        $this->smsOrgcertif = $smsOrgcertif;

        return $this;
    }

    public function getSmsEligible(): ?string
    {
        return $this->smsEligible;
    }

    public function setSmsEligible(?string $smsEligible): self
    {
        $this->smsEligible = $smsEligible;

        return $this;
    }

    public function getSmsEtat(): ?string
    {
        return $this->smsEtat;
    }

    public function setSmsEtat(string $smsEtat): self
    {
        $this->smsEtat = $smsEtat;

        return $this;
    }

    public function getSmsBudget(): ?string
    {
        return $this->smsBudget;
    }

    public function setSmsBudget(?string $smsBudget): self
    {
        $this->smsBudget = $smsBudget;

        return $this;
    }

    public function getSmsMntfse(): ?string
    {
        return $this->smsMntfse;
    }

    public function setSmsMntfse(?string $smsMntfse): self
    {
        $this->smsMntfse = $smsMntfse;

        return $this;
    }

    public function getSmsFsedispo(): ?FseDispo
    {
        return $this->smsFsedispo;
    }

    public function setSmsFsedispo(?FseDispo $smsFsedispo): self
    {
        $this->smsFsedispo = $smsFsedispo;

        return $this;
    }

    public function getSmsPrgcertif(): ?Prgcertif
    {
        return $this->smsPrgcertif;
    }

    public function setSmsPrgcertif(?Prgcertif $smsPrgcertif): self
    {
        $this->smsPrgcertif = $smsPrgcertif;

        return $this;
    }

    public function getSmsProgramme(): ?Programme
    {
        return $this->smsProgramme;
    }

    public function setSmsProgramme(?Programme $smsProgramme): self
    {
        $this->smsProgramme = $smsProgramme;

        return $this;
    }

    public function getSmsSubdiprog(): ?SubdiProg
    {
        return $this->smsSubdiprog;
    }

    public function setSmsSubdiprog(?SubdiProg $smsSubdiprog): self
    {
        $this->smsSubdiprog = $smsSubdiprog;

        return $this;
    }


}
