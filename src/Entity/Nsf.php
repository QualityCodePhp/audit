<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nsf
 *
 * @ORM\Table(name="nsf", uniqueConstraints={@ORM\UniqueConstraint(name="nsf_pk", columns={"nsf_id"})}, indexes={@ORM\Index(name="nsf_nsf_gfe___gfe_gfe_id_fk", columns={"nsf_gfe"})})
 * @ORM\Entity
 */
class Nsf
{
    /**
     * @var string
     *
     * @ORM\Column(name="nsf_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="nsf_nsf_id_seq", allocationSize=1, initialValue=1)
     */
    private $nsfId;

    /**
     * @var string
     *
     * @ORM\Column(name="nsf_code", type="string", length=5, nullable=false)
     */
    private $nsfCode;

    /**
     * @var string
     *
     * @ORM\Column(name="nsf_spec", type="string", length=3, nullable=false)
     */
    private $nsfSpec;

    /**
     * @var string
     *
     * @ORM\Column(name="nsf_sspec", type="string", length=2, nullable=false)
     */
    private $nsfSspec;

    /**
     * @var string
     *
     * @ORM\Column(name="nsf_libelle", type="string", length=100, nullable=false)
     */
    private $nsfLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="nsf_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nsfEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="nsf_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $nsfAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="nsf_datec", type="datetime", nullable=false)
     */
    private $nsfDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nsf_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $nsfAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="nsf_datem", type="datetime", nullable=true)
     */
    private $nsfDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nsf_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $nsfAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="nsf_datea", type="datetime", nullable=true)
     */
    private $nsfDatea;

    /**
     * @var \Gfe
     *
     * @ORM\ManyToOne(targetEntity="Gfe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nsf_gfe", referencedColumnName="gfe_id")
     * })
     */
    private $nsfGfe;

    public function getNsfId(): ?string
    {
        return $this->nsfId;
    }

    public function getNsfCode(): ?string
    {
        return $this->nsfCode;
    }

    public function setNsfCode(string $nsfCode): self
    {
        $this->nsfCode = $nsfCode;

        return $this;
    }

    public function getNsfSpec(): ?string
    {
        return $this->nsfSpec;
    }

    public function setNsfSpec(string $nsfSpec): self
    {
        $this->nsfSpec = $nsfSpec;

        return $this;
    }

    public function getNsfSspec(): ?string
    {
        return $this->nsfSspec;
    }

    public function setNsfSspec(string $nsfSspec): self
    {
        $this->nsfSspec = $nsfSspec;

        return $this;
    }

    public function getNsfLibelle(): ?string
    {
        return $this->nsfLibelle;
    }

    public function setNsfLibelle(string $nsfLibelle): self
    {
        $this->nsfLibelle = $nsfLibelle;

        return $this;
    }

    public function getNsfEtat(): ?string
    {
        return $this->nsfEtat;
    }

    public function setNsfEtat(string $nsfEtat): self
    {
        $this->nsfEtat = $nsfEtat;

        return $this;
    }

    public function getNsfAuteurc(): ?string
    {
        return $this->nsfAuteurc;
    }

    public function setNsfAuteurc(string $nsfAuteurc): self
    {
        $this->nsfAuteurc = $nsfAuteurc;

        return $this;
    }

    public function getNsfDatec(): ?\DateTimeInterface
    {
        return $this->nsfDatec;
    }

    public function setNsfDatec(\DateTimeInterface $nsfDatec): self
    {
        $this->nsfDatec = $nsfDatec;

        return $this;
    }

    public function getNsfAuteurm(): ?string
    {
        return $this->nsfAuteurm;
    }

    public function setNsfAuteurm(?string $nsfAuteurm): self
    {
        $this->nsfAuteurm = $nsfAuteurm;

        return $this;
    }

    public function getNsfDatem(): ?\DateTimeInterface
    {
        return $this->nsfDatem;
    }

    public function setNsfDatem(?\DateTimeInterface $nsfDatem): self
    {
        $this->nsfDatem = $nsfDatem;

        return $this;
    }

    public function getNsfAuteura(): ?string
    {
        return $this->nsfAuteura;
    }

    public function setNsfAuteura(?string $nsfAuteura): self
    {
        $this->nsfAuteura = $nsfAuteura;

        return $this;
    }

    public function getNsfDatea(): ?\DateTimeInterface
    {
        return $this->nsfDatea;
    }

    public function setNsfDatea(?\DateTimeInterface $nsfDatea): self
    {
        $this->nsfDatea = $nsfDatea;

        return $this;
    }

    public function getNsfGfe(): ?Gfe
    {
        return $this->nsfGfe;
    }

    public function setNsfGfe(?Gfe $nsfGfe): self
    {
        $this->nsfGfe = $nsfGfe;

        return $this;
    }


}
