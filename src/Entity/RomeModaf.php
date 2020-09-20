<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RomeModaf
 *
 * @ORM\Table(name="rome_modaf", uniqueConstraints={@ORM\UniqueConstraint(name="rome_modaf_pk", columns={"rma_id"})}, indexes={@ORM\Index(name="rome_mamif", columns={"rma_modaf"}), @ORM\Index(name="rome_rrif2", columns={"rma_rome"})})
 * @ORM\Entity
 */
class RomeModaf
{
    /**
     * @var string
     *
     * @ORM\Column(name="rma_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rome_modaf_rma_id_seq", allocationSize=1, initialValue=1)
     */
    private $rmaId;

    /**
     * @var string
     *
     * @ORM\Column(name="rma_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $rmaEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="rma_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $rmaAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rma_datec", type="datetime", nullable=false)
     */
    private $rmaDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rma_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $rmaAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rma_datem", type="datetime", nullable=true)
     */
    private $rmaDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rma_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $rmaAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rma_datea", type="datetime", nullable=true)
     */
    private $rmaDatea;

    /**
     * @var \ModeleAf
     *
     * @ORM\ManyToOne(targetEntity="ModeleAf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rma_modaf", referencedColumnName="maf_id")
     * })
     */
    private $rmaModaf;

    /**
     * @var \Rome
     *
     * @ORM\ManyToOne(targetEntity="Rome")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rma_rome", referencedColumnName="rom_id")
     * })
     */
    private $rmaRome;

    public function getRmaId(): ?string
    {
        return $this->rmaId;
    }

    public function getRmaEtat(): ?string
    {
        return $this->rmaEtat;
    }

    public function setRmaEtat(string $rmaEtat): self
    {
        $this->rmaEtat = $rmaEtat;

        return $this;
    }

    public function getRmaAuteurc(): ?string
    {
        return $this->rmaAuteurc;
    }

    public function setRmaAuteurc(string $rmaAuteurc): self
    {
        $this->rmaAuteurc = $rmaAuteurc;

        return $this;
    }

    public function getRmaDatec(): ?\DateTimeInterface
    {
        return $this->rmaDatec;
    }

    public function setRmaDatec(\DateTimeInterface $rmaDatec): self
    {
        $this->rmaDatec = $rmaDatec;

        return $this;
    }

    public function getRmaAuteurm(): ?string
    {
        return $this->rmaAuteurm;
    }

    public function setRmaAuteurm(?string $rmaAuteurm): self
    {
        $this->rmaAuteurm = $rmaAuteurm;

        return $this;
    }

    public function getRmaDatem(): ?\DateTimeInterface
    {
        return $this->rmaDatem;
    }

    public function setRmaDatem(?\DateTimeInterface $rmaDatem): self
    {
        $this->rmaDatem = $rmaDatem;

        return $this;
    }

    public function getRmaAuteura(): ?string
    {
        return $this->rmaAuteura;
    }

    public function setRmaAuteura(?string $rmaAuteura): self
    {
        $this->rmaAuteura = $rmaAuteura;

        return $this;
    }

    public function getRmaDatea(): ?\DateTimeInterface
    {
        return $this->rmaDatea;
    }

    public function setRmaDatea(?\DateTimeInterface $rmaDatea): self
    {
        $this->rmaDatea = $rmaDatea;

        return $this;
    }

    public function getRmaModaf(): ?ModeleAf
    {
        return $this->rmaModaf;
    }

    public function setRmaModaf(?ModeleAf $rmaModaf): self
    {
        $this->rmaModaf = $rmaModaf;

        return $this;
    }

    public function getRmaRome(): ?Rome
    {
        return $this->rmaRome;
    }

    public function setRmaRome(?Rome $rmaRome): self
    {
        $this->rmaRome = $rmaRome;

        return $this;
    }


}
