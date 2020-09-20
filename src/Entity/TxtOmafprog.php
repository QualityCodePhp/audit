<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TxtOmafprog
 *
 * @ORM\Table(name="txt_omafprog", uniqueConstraints={@ORM\UniqueConstraint(name="txt_omafprog_pk", columns={"tmp_id"})}, indexes={@ORM\Index(name="txt_omafprog_omoif", columns={"tmp_optionm"}), @ORM\Index(name="txt_omafprog_mpmif", columns={"tmp_modafprog"})})
 * @ORM\Entity
 */
class TxtOmafprog
{
    /**
     * @var string
     *
     * @ORM\Column(name="tmp_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="txt_omafprog_tmp_id_seq", allocationSize=1, initialValue=1)
     */
    private $tmpId;

    /**
     * @var string
     *
     * @ORM\Column(name="tmp_actif", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $tmpActif;

    /**
     * @var string
     *
     * @ORM\Column(name="tmp_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $tmpEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="tmp_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $tmpAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tmp_datec", type="datetime", nullable=false)
     */
    private $tmpDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tmp_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $tmpAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tmp_datem", type="datetime", nullable=true)
     */
    private $tmpDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tmp_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $tmpAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tmp_datea", type="datetime", nullable=true)
     */
    private $tmpDatea;

    /**
     * @var \ModafProg
     *
     * @ORM\ManyToOne(targetEntity="ModafProg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tmp_modafprog", referencedColumnName="mop_id")
     * })
     */
    private $tmpModafprog;

    /**
     * @var \OptionModaf
     *
     * @ORM\ManyToOne(targetEntity="OptionModaf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tmp_optionm", referencedColumnName="opm_id")
     * })
     */
    private $tmpOptionm;

    public function getTmpId(): ?string
    {
        return $this->tmpId;
    }

    public function getTmpActif(): ?string
    {
        return $this->tmpActif;
    }

    public function setTmpActif(string $tmpActif): self
    {
        $this->tmpActif = $tmpActif;

        return $this;
    }

    public function getTmpEtat(): ?string
    {
        return $this->tmpEtat;
    }

    public function setTmpEtat(string $tmpEtat): self
    {
        $this->tmpEtat = $tmpEtat;

        return $this;
    }

    public function getTmpAuteurc(): ?string
    {
        return $this->tmpAuteurc;
    }

    public function setTmpAuteurc(string $tmpAuteurc): self
    {
        $this->tmpAuteurc = $tmpAuteurc;

        return $this;
    }

    public function getTmpDatec(): ?\DateTimeInterface
    {
        return $this->tmpDatec;
    }

    public function setTmpDatec(\DateTimeInterface $tmpDatec): self
    {
        $this->tmpDatec = $tmpDatec;

        return $this;
    }

    public function getTmpAuteurm(): ?string
    {
        return $this->tmpAuteurm;
    }

    public function setTmpAuteurm(?string $tmpAuteurm): self
    {
        $this->tmpAuteurm = $tmpAuteurm;

        return $this;
    }

    public function getTmpDatem(): ?\DateTimeInterface
    {
        return $this->tmpDatem;
    }

    public function setTmpDatem(?\DateTimeInterface $tmpDatem): self
    {
        $this->tmpDatem = $tmpDatem;

        return $this;
    }

    public function getTmpAuteura(): ?string
    {
        return $this->tmpAuteura;
    }

    public function setTmpAuteura(?string $tmpAuteura): self
    {
        $this->tmpAuteura = $tmpAuteura;

        return $this;
    }

    public function getTmpDatea(): ?\DateTimeInterface
    {
        return $this->tmpDatea;
    }

    public function setTmpDatea(?\DateTimeInterface $tmpDatea): self
    {
        $this->tmpDatea = $tmpDatea;

        return $this;
    }

    public function getTmpModafprog(): ?ModafProg
    {
        return $this->tmpModafprog;
    }

    public function setTmpModafprog(?ModafProg $tmpModafprog): self
    {
        $this->tmpModafprog = $tmpModafprog;

        return $this;
    }

    public function getTmpOptionm(): ?OptionModaf
    {
        return $this->tmpOptionm;
    }

    public function setTmpOptionm(?OptionModaf $tmpOptionm): self
    {
        $this->tmpOptionm = $tmpOptionm;

        return $this;
    }


}
