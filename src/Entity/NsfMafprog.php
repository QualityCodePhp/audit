<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NsfMafprog
 *
 * @ORM\Table(name="nsf_mafprog", uniqueConstraints={@ORM\UniqueConstraint(name="nsf_mafprog_pk", columns={"nmp_id"})}, indexes={@ORM\Index(name="nsf_mafprog_nnif", columns={"nmp_nsf"}), @ORM\Index(name="nsf_mafprog_mpmif", columns={"nmp_modafprog"})})
 * @ORM\Entity
 */
class NsfMafprog
{
    /**
     * @var string
     *
     * @ORM\Column(name="nmp_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="nsf_mafprog_nmp_id_seq", allocationSize=1, initialValue=1)
     */
    private $nmpId;

    /**
     * @var string
     *
     * @ORM\Column(name="nmp_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nmpEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="nmp_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $nmpAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="nmp_datec", type="datetime", nullable=false)
     */
    private $nmpDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nmp_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $nmpAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="nmp_datem", type="datetime", nullable=true)
     */
    private $nmpDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nmp_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $nmpAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="nmp_datea", type="datetime", nullable=true)
     */
    private $nmpDatea;

    /**
     * @var \ModafProg
     *
     * @ORM\ManyToOne(targetEntity="ModafProg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nmp_modafprog", referencedColumnName="mop_id")
     * })
     */
    private $nmpModafprog;

    /**
     * @var \Nsf
     *
     * @ORM\ManyToOne(targetEntity="Nsf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nmp_nsf", referencedColumnName="nsf_id")
     * })
     */
    private $nmpNsf;

    public function getNmpId(): ?string
    {
        return $this->nmpId;
    }

    public function getNmpEtat(): ?string
    {
        return $this->nmpEtat;
    }

    public function setNmpEtat(string $nmpEtat): self
    {
        $this->nmpEtat = $nmpEtat;

        return $this;
    }

    public function getNmpAuteurc(): ?string
    {
        return $this->nmpAuteurc;
    }

    public function setNmpAuteurc(string $nmpAuteurc): self
    {
        $this->nmpAuteurc = $nmpAuteurc;

        return $this;
    }

    public function getNmpDatec(): ?\DateTimeInterface
    {
        return $this->nmpDatec;
    }

    public function setNmpDatec(\DateTimeInterface $nmpDatec): self
    {
        $this->nmpDatec = $nmpDatec;

        return $this;
    }

    public function getNmpAuteurm(): ?string
    {
        return $this->nmpAuteurm;
    }

    public function setNmpAuteurm(?string $nmpAuteurm): self
    {
        $this->nmpAuteurm = $nmpAuteurm;

        return $this;
    }

    public function getNmpDatem(): ?\DateTimeInterface
    {
        return $this->nmpDatem;
    }

    public function setNmpDatem(?\DateTimeInterface $nmpDatem): self
    {
        $this->nmpDatem = $nmpDatem;

        return $this;
    }

    public function getNmpAuteura(): ?string
    {
        return $this->nmpAuteura;
    }

    public function setNmpAuteura(?string $nmpAuteura): self
    {
        $this->nmpAuteura = $nmpAuteura;

        return $this;
    }

    public function getNmpDatea(): ?\DateTimeInterface
    {
        return $this->nmpDatea;
    }

    public function setNmpDatea(?\DateTimeInterface $nmpDatea): self
    {
        $this->nmpDatea = $nmpDatea;

        return $this;
    }

    public function getNmpModafprog(): ?ModafProg
    {
        return $this->nmpModafprog;
    }

    public function setNmpModafprog(?ModafProg $nmpModafprog): self
    {
        $this->nmpModafprog = $nmpModafprog;

        return $this;
    }

    public function getNmpNsf(): ?Nsf
    {
        return $this->nmpNsf;
    }

    public function setNmpNsf(?Nsf $nmpNsf): self
    {
        $this->nmpNsf = $nmpNsf;

        return $this;
    }


}
