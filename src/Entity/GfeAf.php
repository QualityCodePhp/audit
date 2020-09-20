<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GfeAf
 *
 * @ORM\Table(name="gfe_af", uniqueConstraints={@ORM\UniqueConstraint(name="gfe_af_pk", columns={"gaf_id"})}, indexes={@ORM\Index(name="gfe_af_gaf_af___af_afo_id_fk", columns={"gaf_af"}), @ORM\Index(name="gfe_af_gaf_gfe___gfe_gfe_id_fk", columns={"gaf_gfe"})})
 * @ORM\Entity
 */
class GfeAf
{
    /**
     * @var string
     *
     * @ORM\Column(name="gaf_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gfe_af_gaf_id_seq", allocationSize=1, initialValue=1)
     */
    private $gafId;

    /**
     * @var string
     *
     * @ORM\Column(name="gaf_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $gafEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="gaf_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $gafAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gaf_datec", type="datetime", nullable=false)
     */
    private $gafDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gaf_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $gafAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="gaf_datem", type="datetime", nullable=true)
     */
    private $gafDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gaf_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $gafAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="gaf_datea", type="datetime", nullable=true)
     */
    private $gafDatea;

    /**
     * @var \Af
     *
     * @ORM\ManyToOne(targetEntity="Af")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gaf_af", referencedColumnName="afo_id")
     * })
     */
    private $gafAf;

    /**
     * @var \Gfe
     *
     * @ORM\ManyToOne(targetEntity="Gfe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gaf_gfe", referencedColumnName="gfe_id")
     * })
     */
    private $gafGfe;

    public function getGafId(): ?string
    {
        return $this->gafId;
    }

    public function getGafEtat(): ?string
    {
        return $this->gafEtat;
    }

    public function setGafEtat(string $gafEtat): self
    {
        $this->gafEtat = $gafEtat;

        return $this;
    }

    public function getGafAuteurc(): ?string
    {
        return $this->gafAuteurc;
    }

    public function setGafAuteurc(string $gafAuteurc): self
    {
        $this->gafAuteurc = $gafAuteurc;

        return $this;
    }

    public function getGafDatec(): ?\DateTimeInterface
    {
        return $this->gafDatec;
    }

    public function setGafDatec(\DateTimeInterface $gafDatec): self
    {
        $this->gafDatec = $gafDatec;

        return $this;
    }

    public function getGafAuteurm(): ?string
    {
        return $this->gafAuteurm;
    }

    public function setGafAuteurm(?string $gafAuteurm): self
    {
        $this->gafAuteurm = $gafAuteurm;

        return $this;
    }

    public function getGafDatem(): ?\DateTimeInterface
    {
        return $this->gafDatem;
    }

    public function setGafDatem(?\DateTimeInterface $gafDatem): self
    {
        $this->gafDatem = $gafDatem;

        return $this;
    }

    public function getGafAuteura(): ?string
    {
        return $this->gafAuteura;
    }

    public function setGafAuteura(?string $gafAuteura): self
    {
        $this->gafAuteura = $gafAuteura;

        return $this;
    }

    public function getGafDatea(): ?\DateTimeInterface
    {
        return $this->gafDatea;
    }

    public function setGafDatea(?\DateTimeInterface $gafDatea): self
    {
        $this->gafDatea = $gafDatea;

        return $this;
    }

    public function getGafAf(): ?Af
    {
        return $this->gafAf;
    }

    public function setGafAf(?Af $gafAf): self
    {
        $this->gafAf = $gafAf;

        return $this;
    }

    public function getGafGfe(): ?Gfe
    {
        return $this->gafGfe;
    }

    public function setGafGfe(?Gfe $gafGfe): self
    {
        $this->gafGfe = $gafGfe;

        return $this;
    }


}
