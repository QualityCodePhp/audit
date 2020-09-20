<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GfeMafprog
 *
 * @ORM\Table(name="gfe_mafprog", uniqueConstraints={@ORM\UniqueConstraint(name="gfe_mafprog_pk", columns={"gmp_id"})}, indexes={@ORM\Index(name="gfe_mafprog_mpmif", columns={"gmp_modafprog"}), @ORM\Index(name="gfe_mafprog_ggif", columns={"gmp_gfe"})})
 * @ORM\Entity
 */
class GfeMafprog
{
    /**
     * @var string
     *
     * @ORM\Column(name="gmp_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gfe_mafprog_gmp_id_seq", allocationSize=1, initialValue=1)
     */
    private $gmpId;

    /**
     * @var string
     *
     * @ORM\Column(name="gmp_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $gmpEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="gmp_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $gmpAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gmp_datec", type="datetime", nullable=false)
     */
    private $gmpDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gmp_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $gmpAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="gmp_datem", type="datetime", nullable=true)
     */
    private $gmpDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gmp_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $gmpAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="gmp_datea", type="datetime", nullable=true)
     */
    private $gmpDatea;

    /**
     * @var \Gfe
     *
     * @ORM\ManyToOne(targetEntity="Gfe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gmp_gfe", referencedColumnName="gfe_id")
     * })
     */
    private $gmpGfe;

    /**
     * @var \ModafProg
     *
     * @ORM\ManyToOne(targetEntity="ModafProg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gmp_modafprog", referencedColumnName="mop_id")
     * })
     */
    private $gmpModafprog;

    public function getGmpId(): ?string
    {
        return $this->gmpId;
    }

    public function getGmpEtat(): ?string
    {
        return $this->gmpEtat;
    }

    public function setGmpEtat(string $gmpEtat): self
    {
        $this->gmpEtat = $gmpEtat;

        return $this;
    }

    public function getGmpAuteurc(): ?string
    {
        return $this->gmpAuteurc;
    }

    public function setGmpAuteurc(string $gmpAuteurc): self
    {
        $this->gmpAuteurc = $gmpAuteurc;

        return $this;
    }

    public function getGmpDatec(): ?\DateTimeInterface
    {
        return $this->gmpDatec;
    }

    public function setGmpDatec(\DateTimeInterface $gmpDatec): self
    {
        $this->gmpDatec = $gmpDatec;

        return $this;
    }

    public function getGmpAuteurm(): ?string
    {
        return $this->gmpAuteurm;
    }

    public function setGmpAuteurm(?string $gmpAuteurm): self
    {
        $this->gmpAuteurm = $gmpAuteurm;

        return $this;
    }

    public function getGmpDatem(): ?\DateTimeInterface
    {
        return $this->gmpDatem;
    }

    public function setGmpDatem(?\DateTimeInterface $gmpDatem): self
    {
        $this->gmpDatem = $gmpDatem;

        return $this;
    }

    public function getGmpAuteura(): ?string
    {
        return $this->gmpAuteura;
    }

    public function setGmpAuteura(?string $gmpAuteura): self
    {
        $this->gmpAuteura = $gmpAuteura;

        return $this;
    }

    public function getGmpDatea(): ?\DateTimeInterface
    {
        return $this->gmpDatea;
    }

    public function setGmpDatea(?\DateTimeInterface $gmpDatea): self
    {
        $this->gmpDatea = $gmpDatea;

        return $this;
    }

    public function getGmpGfe(): ?Gfe
    {
        return $this->gmpGfe;
    }

    public function setGmpGfe(?Gfe $gmpGfe): self
    {
        $this->gmpGfe = $gmpGfe;

        return $this;
    }

    public function getGmpModafprog(): ?ModafProg
    {
        return $this->gmpModafprog;
    }

    public function setGmpModafprog(?ModafProg $gmpModafprog): self
    {
        $this->gmpModafprog = $gmpModafprog;

        return $this;
    }


}
