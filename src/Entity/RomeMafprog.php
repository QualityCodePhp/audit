<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RomeMafprog
 *
 * @ORM\Table(name="rome_mafprog", uniqueConstraints={@ORM\UniqueConstraint(name="rome_mafprog_pk", columns={"rmp_id"})}, indexes={@ORM\Index(name="rome_mpmif", columns={"rmp_modafprog"}), @ORM\Index(name="rome_rrif", columns={"rmp_rome"})})
 * @ORM\Entity
 */
class RomeMafprog
{
    /**
     * @var string
     *
     * @ORM\Column(name="rmp_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rome_mafprog_rmp_id_seq", allocationSize=1, initialValue=1)
     */
    private $rmpId;

    /**
     * @var string
     *
     * @ORM\Column(name="rmp_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $rmpEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="rmp_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $rmpAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rmp_datec", type="datetime", nullable=false)
     */
    private $rmpDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rmp_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $rmpAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rmp_datem", type="datetime", nullable=true)
     */
    private $rmpDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rmp_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $rmpAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rmp_datea", type="datetime", nullable=true)
     */
    private $rmpDatea;

    /**
     * @var \ModafProg
     *
     * @ORM\ManyToOne(targetEntity="ModafProg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rmp_modafprog", referencedColumnName="mop_id")
     * })
     */
    private $rmpModafprog;

    /**
     * @var \Rome
     *
     * @ORM\ManyToOne(targetEntity="Rome")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rmp_rome", referencedColumnName="rom_id")
     * })
     */
    private $rmpRome;

    public function getRmpId(): ?string
    {
        return $this->rmpId;
    }

    public function getRmpEtat(): ?string
    {
        return $this->rmpEtat;
    }

    public function setRmpEtat(string $rmpEtat): self
    {
        $this->rmpEtat = $rmpEtat;

        return $this;
    }

    public function getRmpAuteurc(): ?string
    {
        return $this->rmpAuteurc;
    }

    public function setRmpAuteurc(string $rmpAuteurc): self
    {
        $this->rmpAuteurc = $rmpAuteurc;

        return $this;
    }

    public function getRmpDatec(): ?\DateTimeInterface
    {
        return $this->rmpDatec;
    }

    public function setRmpDatec(\DateTimeInterface $rmpDatec): self
    {
        $this->rmpDatec = $rmpDatec;

        return $this;
    }

    public function getRmpAuteurm(): ?string
    {
        return $this->rmpAuteurm;
    }

    public function setRmpAuteurm(?string $rmpAuteurm): self
    {
        $this->rmpAuteurm = $rmpAuteurm;

        return $this;
    }

    public function getRmpDatem(): ?\DateTimeInterface
    {
        return $this->rmpDatem;
    }

    public function setRmpDatem(?\DateTimeInterface $rmpDatem): self
    {
        $this->rmpDatem = $rmpDatem;

        return $this;
    }

    public function getRmpAuteura(): ?string
    {
        return $this->rmpAuteura;
    }

    public function setRmpAuteura(?string $rmpAuteura): self
    {
        $this->rmpAuteura = $rmpAuteura;

        return $this;
    }

    public function getRmpDatea(): ?\DateTimeInterface
    {
        return $this->rmpDatea;
    }

    public function setRmpDatea(?\DateTimeInterface $rmpDatea): self
    {
        $this->rmpDatea = $rmpDatea;

        return $this;
    }

    public function getRmpModafprog(): ?ModafProg
    {
        return $this->rmpModafprog;
    }

    public function setRmpModafprog(?ModafProg $rmpModafprog): self
    {
        $this->rmpModafprog = $rmpModafprog;

        return $this;
    }

    public function getRmpRome(): ?Rome
    {
        return $this->rmpRome;
    }

    public function setRmpRome(?Rome $rmpRome): self
    {
        $this->rmpRome = $rmpRome;

        return $this;
    }


}
