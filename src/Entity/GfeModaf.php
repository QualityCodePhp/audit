<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GfeModaf
 *
 * @ORM\Table(name="gfe_modaf", uniqueConstraints={@ORM\UniqueConstraint(name="gfe_modaf_pk", columns={"gma_id"})}, indexes={@ORM\Index(name="gfe_modaf_ggif2", columns={"gma_gfe"}), @ORM\Index(name="gfe_modaf_mamif", columns={"gma_modaf"})})
 * @ORM\Entity
 */
class GfeModaf
{
    /**
     * @var string
     *
     * @ORM\Column(name="gma_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gfe_modaf_gma_id_seq", allocationSize=1, initialValue=1)
     */
    private $gmaId;

    /**
     * @var string
     *
     * @ORM\Column(name="gma_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $gmaEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="gma_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $gmaAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gma_datec", type="datetime", nullable=false)
     */
    private $gmaDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gma_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $gmaAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="gma_datem", type="datetime", nullable=true)
     */
    private $gmaDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gma_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $gmaAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="gma_datea", type="datetime", nullable=true)
     */
    private $gmaDatea;

    /**
     * @var \Gfe
     *
     * @ORM\ManyToOne(targetEntity="Gfe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gma_gfe", referencedColumnName="gfe_id")
     * })
     */
    private $gmaGfe;

    /**
     * @var \ModeleAf
     *
     * @ORM\ManyToOne(targetEntity="ModeleAf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gma_modaf", referencedColumnName="maf_id")
     * })
     */
    private $gmaModaf;

    public function getGmaId(): ?string
    {
        return $this->gmaId;
    }

    public function getGmaEtat(): ?string
    {
        return $this->gmaEtat;
    }

    public function setGmaEtat(string $gmaEtat): self
    {
        $this->gmaEtat = $gmaEtat;

        return $this;
    }

    public function getGmaAuteurc(): ?string
    {
        return $this->gmaAuteurc;
    }

    public function setGmaAuteurc(string $gmaAuteurc): self
    {
        $this->gmaAuteurc = $gmaAuteurc;

        return $this;
    }

    public function getGmaDatec(): ?\DateTimeInterface
    {
        return $this->gmaDatec;
    }

    public function setGmaDatec(\DateTimeInterface $gmaDatec): self
    {
        $this->gmaDatec = $gmaDatec;

        return $this;
    }

    public function getGmaAuteurm(): ?string
    {
        return $this->gmaAuteurm;
    }

    public function setGmaAuteurm(?string $gmaAuteurm): self
    {
        $this->gmaAuteurm = $gmaAuteurm;

        return $this;
    }

    public function getGmaDatem(): ?\DateTimeInterface
    {
        return $this->gmaDatem;
    }

    public function setGmaDatem(?\DateTimeInterface $gmaDatem): self
    {
        $this->gmaDatem = $gmaDatem;

        return $this;
    }

    public function getGmaAuteura(): ?string
    {
        return $this->gmaAuteura;
    }

    public function setGmaAuteura(?string $gmaAuteura): self
    {
        $this->gmaAuteura = $gmaAuteura;

        return $this;
    }

    public function getGmaDatea(): ?\DateTimeInterface
    {
        return $this->gmaDatea;
    }

    public function setGmaDatea(?\DateTimeInterface $gmaDatea): self
    {
        $this->gmaDatea = $gmaDatea;

        return $this;
    }

    public function getGmaGfe(): ?Gfe
    {
        return $this->gmaGfe;
    }

    public function setGmaGfe(?Gfe $gmaGfe): self
    {
        $this->gmaGfe = $gmaGfe;

        return $this;
    }

    public function getGmaModaf(): ?ModeleAf
    {
        return $this->gmaModaf;
    }

    public function setGmaModaf(?ModeleAf $gmaModaf): self
    {
        $this->gmaModaf = $gmaModaf;

        return $this;
    }


}
