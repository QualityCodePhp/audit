<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LstOmafprog
 *
 * @ORM\Table(name="lst_omafprog", uniqueConstraints={@ORM\UniqueConstraint(name="lst_omafprog_pk", columns={"lmp_id"})}, indexes={@ORM\Index(name="lst_omafprog_smsif", columns={"lmp_statm"}), @ORM\Index(name="lst_omafprog_omoif", columns={"lmp_optionm"}), @ORM\Index(name="lst_omafprog_mpmif", columns={"lmp_modafprog"})})
 * @ORM\Entity
 */
class LstOmafprog
{
    /**
     * @var string
     *
     * @ORM\Column(name="lmp_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lst_omafprog_lmp_id_seq", allocationSize=1, initialValue=1)
     */
    private $lmpId;

    /**
     * @var string
     *
     * @ORM\Column(name="lmp_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $lmpEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="lmp_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $lmpAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lmp_datec", type="datetime", nullable=false)
     */
    private $lmpDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lmp_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $lmpAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="lmp_datem", type="datetime", nullable=true)
     */
    private $lmpDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lmp_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $lmpAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="lmp_datea", type="datetime", nullable=true)
     */
    private $lmpDatea;

    /**
     * @var \ModafProg
     *
     * @ORM\ManyToOne(targetEntity="ModafProg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lmp_modafprog", referencedColumnName="mop_id")
     * })
     */
    private $lmpModafprog;

    /**
     * @var \OptionModaf
     *
     * @ORM\ManyToOne(targetEntity="OptionModaf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lmp_optionm", referencedColumnName="opm_id")
     * })
     */
    private $lmpOptionm;

    /**
     * @var \StatModaf
     *
     * @ORM\ManyToOne(targetEntity="StatModaf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lmp_statm", referencedColumnName="stm_id")
     * })
     */
    private $lmpStatm;

    public function getLmpId(): ?string
    {
        return $this->lmpId;
    }

    public function getLmpEtat(): ?string
    {
        return $this->lmpEtat;
    }

    public function setLmpEtat(string $lmpEtat): self
    {
        $this->lmpEtat = $lmpEtat;

        return $this;
    }

    public function getLmpAuteurc(): ?string
    {
        return $this->lmpAuteurc;
    }

    public function setLmpAuteurc(string $lmpAuteurc): self
    {
        $this->lmpAuteurc = $lmpAuteurc;

        return $this;
    }

    public function getLmpDatec(): ?\DateTimeInterface
    {
        return $this->lmpDatec;
    }

    public function setLmpDatec(\DateTimeInterface $lmpDatec): self
    {
        $this->lmpDatec = $lmpDatec;

        return $this;
    }

    public function getLmpAuteurm(): ?string
    {
        return $this->lmpAuteurm;
    }

    public function setLmpAuteurm(?string $lmpAuteurm): self
    {
        $this->lmpAuteurm = $lmpAuteurm;

        return $this;
    }

    public function getLmpDatem(): ?\DateTimeInterface
    {
        return $this->lmpDatem;
    }

    public function setLmpDatem(?\DateTimeInterface $lmpDatem): self
    {
        $this->lmpDatem = $lmpDatem;

        return $this;
    }

    public function getLmpAuteura(): ?string
    {
        return $this->lmpAuteura;
    }

    public function setLmpAuteura(?string $lmpAuteura): self
    {
        $this->lmpAuteura = $lmpAuteura;

        return $this;
    }

    public function getLmpDatea(): ?\DateTimeInterface
    {
        return $this->lmpDatea;
    }

    public function setLmpDatea(?\DateTimeInterface $lmpDatea): self
    {
        $this->lmpDatea = $lmpDatea;

        return $this;
    }

    public function getLmpModafprog(): ?ModafProg
    {
        return $this->lmpModafprog;
    }

    public function setLmpModafprog(?ModafProg $lmpModafprog): self
    {
        $this->lmpModafprog = $lmpModafprog;

        return $this;
    }

    public function getLmpOptionm(): ?OptionModaf
    {
        return $this->lmpOptionm;
    }

    public function setLmpOptionm(?OptionModaf $lmpOptionm): self
    {
        $this->lmpOptionm = $lmpOptionm;

        return $this;
    }

    public function getLmpStatm(): ?StatModaf
    {
        return $this->lmpStatm;
    }

    public function setLmpStatm(?StatModaf $lmpStatm): self
    {
        $this->lmpStatm = $lmpStatm;

        return $this;
    }


}
