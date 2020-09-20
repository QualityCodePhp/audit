<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NsfModaf
 *
 * @ORM\Table(name="nsf_modaf", uniqueConstraints={@ORM\UniqueConstraint(name="nsf_modaf_pk", columns={"nma_id"})}, indexes={@ORM\Index(name="nsf_modaf_nnif", columns={"nma_nsf"}), @ORM\Index(name="nsf_modaf_mamif", columns={"nma_modaf"})})
 * @ORM\Entity
 */
class NsfModaf
{
    /**
     * @var string
     *
     * @ORM\Column(name="nma_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="nsf_modaf_nma_id_seq", allocationSize=1, initialValue=1)
     */
    private $nmaId;

    /**
     * @var string
     *
     * @ORM\Column(name="nma_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nmaEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="nma_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $nmaAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="nma_datec", type="datetime", nullable=false)
     */
    private $nmaDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nma_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $nmaAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="nma_datem", type="datetime", nullable=true)
     */
    private $nmaDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nma_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $nmaAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="nma_datea", type="datetime", nullable=true)
     */
    private $nmaDatea;

    /**
     * @var \ModeleAf
     *
     * @ORM\ManyToOne(targetEntity="ModeleAf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nma_modaf", referencedColumnName="maf_id")
     * })
     */
    private $nmaModaf;

    /**
     * @var \Nsf
     *
     * @ORM\ManyToOne(targetEntity="Nsf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nma_nsf", referencedColumnName="nsf_id")
     * })
     */
    private $nmaNsf;

    public function getNmaId(): ?string
    {
        return $this->nmaId;
    }

    public function getNmaEtat(): ?string
    {
        return $this->nmaEtat;
    }

    public function setNmaEtat(string $nmaEtat): self
    {
        $this->nmaEtat = $nmaEtat;

        return $this;
    }

    public function getNmaAuteurc(): ?string
    {
        return $this->nmaAuteurc;
    }

    public function setNmaAuteurc(string $nmaAuteurc): self
    {
        $this->nmaAuteurc = $nmaAuteurc;

        return $this;
    }

    public function getNmaDatec(): ?\DateTimeInterface
    {
        return $this->nmaDatec;
    }

    public function setNmaDatec(\DateTimeInterface $nmaDatec): self
    {
        $this->nmaDatec = $nmaDatec;

        return $this;
    }

    public function getNmaAuteurm(): ?string
    {
        return $this->nmaAuteurm;
    }

    public function setNmaAuteurm(?string $nmaAuteurm): self
    {
        $this->nmaAuteurm = $nmaAuteurm;

        return $this;
    }

    public function getNmaDatem(): ?\DateTimeInterface
    {
        return $this->nmaDatem;
    }

    public function setNmaDatem(?\DateTimeInterface $nmaDatem): self
    {
        $this->nmaDatem = $nmaDatem;

        return $this;
    }

    public function getNmaAuteura(): ?string
    {
        return $this->nmaAuteura;
    }

    public function setNmaAuteura(?string $nmaAuteura): self
    {
        $this->nmaAuteura = $nmaAuteura;

        return $this;
    }

    public function getNmaDatea(): ?\DateTimeInterface
    {
        return $this->nmaDatea;
    }

    public function setNmaDatea(?\DateTimeInterface $nmaDatea): self
    {
        $this->nmaDatea = $nmaDatea;

        return $this;
    }

    public function getNmaModaf(): ?ModeleAf
    {
        return $this->nmaModaf;
    }

    public function setNmaModaf(?ModeleAf $nmaModaf): self
    {
        $this->nmaModaf = $nmaModaf;

        return $this;
    }

    public function getNmaNsf(): ?Nsf
    {
        return $this->nmaNsf;
    }

    public function setNmaNsf(?Nsf $nmaNsf): self
    {
        $this->nmaNsf = $nmaNsf;

        return $this;
    }


}
