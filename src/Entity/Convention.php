<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Convention
 *
 * @ORM\Table(name="convention", uniqueConstraints={@ORM\UniqueConstraint(name="convention_pk", columns={"cvt_id"})}, indexes={@ORM\Index(name="convention_ccif", columns={"cvt_origine"}), @ORM\Index(name="convention_ooif", columns={"cvt_offre"})})
 * @ORM\Entity
 */
class Convention
{
    /**
     * @var string
     *
     * @ORM\Column(name="cvt_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="convention_cvt_id_seq", allocationSize=1, initialValue=1)
     */
    private $cvtId;

    /**
     * @var string
     *
     * @ORM\Column(name="cvt_type", type="string", length=1, nullable=false, options={"comment"="C = Convention,  M = ModifiÃ©, A = Avenant"})
     */
    private $cvtType;

    /**
     * @var string
     *
     * @ORM\Column(name="cvt_active", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $cvtActive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cvt_datec", type="datetime", nullable=false)
     */
    private $cvtDatec;

    /**
     * @var string
     *
     * @ORM\Column(name="cvt_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $cvtAuteurc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cvt_datem", type="datetime", nullable=true)
     */
    private $cvtDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cvt_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $cvtAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cvt_dateesigncr", type="datetime", nullable=true)
     */
    private $cvtDateesigncr;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cvt_datersigncr", type="datetime", nullable=true)
     */
    private $cvtDatersigncr;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cvt_dateesgar", type="datetime", nullable=true)
     */
    private $cvtDateesgar;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cvt_datersgar", type="datetime", nullable=true)
     */
    private $cvtDatersgar;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cvt_dateavisatt", type="datetime", nullable=true)
     */
    private $cvtDateavisatt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cvt_dateeconv", type="datetime", nullable=true)
     */
    private $cvtDateeconv;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cvt_daterconv", type="datetime", nullable=true)
     */
    private $cvtDaterconv;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cvt_dateverif", type="datetime", nullable=true)
     */
    private $cvtDateverif;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre", inversedBy="cvt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cvt_offre", referencedColumnName="off_id")
     * })
     */
    private $cvtOffre;

    /**
     * @var \Convention
     *
     * @ORM\ManyToOne(targetEntity="Convention")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cvt_origine", referencedColumnName="cvt_id")
     * })
     */
    private $cvtOrigine;

    public function getCvtId(): ?string
    {
        return $this->cvtId;
    }

    public function getCvtType(): ?string
    {
        return $this->cvtType;
    }

    public function setCvtType(string $cvtType): self
    {
        $this->cvtType = $cvtType;

        return $this;
    }

    public function getCvtActive(): ?string
    {
        return $this->cvtActive;
    }

    public function setCvtActive(string $cvtActive): self
    {
        $this->cvtActive = $cvtActive;

        return $this;
    }

    public function getCvtDatec(): ?\DateTimeInterface
    {
        return $this->cvtDatec;
    }

    public function setCvtDatec(\DateTimeInterface $cvtDatec): self
    {
        $this->cvtDatec = $cvtDatec;

        return $this;
    }

    public function getCvtAuteurc(): ?string
    {
        return $this->cvtAuteurc;
    }

    public function setCvtAuteurc(string $cvtAuteurc): self
    {
        $this->cvtAuteurc = $cvtAuteurc;

        return $this;
    }

    public function getCvtDatem(): ?\DateTimeInterface
    {
        return $this->cvtDatem;
    }

    public function setCvtDatem(?\DateTimeInterface $cvtDatem): self
    {
        $this->cvtDatem = $cvtDatem;

        return $this;
    }

    public function getCvtAuteurm(): ?string
    {
        return $this->cvtAuteurm;
    }

    public function setCvtAuteurm(?string $cvtAuteurm): self
    {
        $this->cvtAuteurm = $cvtAuteurm;

        return $this;
    }

    public function getCvtDateesigncr(): ?\DateTimeInterface
    {
        return $this->cvtDateesigncr;
    }

    public function setCvtDateesigncr(?\DateTimeInterface $cvtDateesigncr): self
    {
        $this->cvtDateesigncr = $cvtDateesigncr;

        return $this;
    }

    public function getCvtDatersigncr(): ?\DateTimeInterface
    {
        return $this->cvtDatersigncr;
    }

    public function setCvtDatersigncr(?\DateTimeInterface $cvtDatersigncr): self
    {
        $this->cvtDatersigncr = $cvtDatersigncr;

        return $this;
    }

    public function getCvtDateesgar(): ?\DateTimeInterface
    {
        return $this->cvtDateesgar;
    }

    public function setCvtDateesgar(?\DateTimeInterface $cvtDateesgar): self
    {
        $this->cvtDateesgar = $cvtDateesgar;

        return $this;
    }

    public function getCvtDatersgar(): ?\DateTimeInterface
    {
        return $this->cvtDatersgar;
    }

    public function setCvtDatersgar(?\DateTimeInterface $cvtDatersgar): self
    {
        $this->cvtDatersgar = $cvtDatersgar;

        return $this;
    }

    public function getCvtDateavisatt(): ?\DateTimeInterface
    {
        return $this->cvtDateavisatt;
    }

    public function setCvtDateavisatt(?\DateTimeInterface $cvtDateavisatt): self
    {
        $this->cvtDateavisatt = $cvtDateavisatt;

        return $this;
    }

    public function getCvtDateeconv(): ?\DateTimeInterface
    {
        return $this->cvtDateeconv;
    }

    public function setCvtDateeconv(?\DateTimeInterface $cvtDateeconv): self
    {
        $this->cvtDateeconv = $cvtDateeconv;

        return $this;
    }

    public function getCvtDaterconv(): ?\DateTimeInterface
    {
        return $this->cvtDaterconv;
    }

    public function setCvtDaterconv(?\DateTimeInterface $cvtDaterconv): self
    {
        $this->cvtDaterconv = $cvtDaterconv;

        return $this;
    }

    public function getCvtDateverif(): ?\DateTimeInterface
    {
        return $this->cvtDateverif;
    }

    public function setCvtDateverif(?\DateTimeInterface $cvtDateverif): self
    {
        $this->cvtDateverif = $cvtDateverif;

        return $this;
    }

    public function getCvtOffre(): ?Offre
    {
        return $this->cvtOffre;
    }

    public function setCvtOffre(?Offre $cvtOffre): self
    {
        $this->cvtOffre = $cvtOffre;

        return $this;
    }

    public function getCvtOrigine(): ?self
    {
        return $this->cvtOrigine;
    }

    public function setCvtOrigine(?self $cvtOrigine): self
    {
        $this->cvtOrigine = $cvtOrigine;

        return $this;
    }


}
