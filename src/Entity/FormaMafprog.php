<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormaMafprog
 *
 * @ORM\Table(name="forma_mafprog", uniqueConstraints={@ORM\UniqueConstraint(name="forma_mafprog_pk", columns={"fmp_id"})}, indexes={@ORM\Index(name="forma_mafprog_ffif", columns={"fmp_formacode"}), @ORM\Index(name="forma_mafprog_mpmif", columns={"fmp_modafprog"})})
 * @ORM\Entity
 */
class FormaMafprog
{
    /**
     * @var string
     *
     * @ORM\Column(name="fmp_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="forma_mafprog_fmp_id_seq", allocationSize=1, initialValue=1)
     */
    private $fmpId;

    /**
     * @var string
     *
     * @ORM\Column(name="fmp_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $fmpEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="fmp_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $fmpAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fmp_datec", type="datetime", nullable=false)
     */
    private $fmpDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fmp_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $fmpAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fmp_datem", type="datetime", nullable=true)
     */
    private $fmpDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fmp_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $fmpAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fmp_datea", type="datetime", nullable=true)
     */
    private $fmpDatea;

    /**
     * @var \Formacode
     *
     * @ORM\ManyToOne(targetEntity="Formacode")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fmp_formacode", referencedColumnName="fmc_id")
     * })
     */
    private $fmpFormacode;

    /**
     * @var \ModafProg
     *
     * @ORM\ManyToOne(targetEntity="ModafProg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fmp_modafprog", referencedColumnName="mop_id")
     * })
     */
    private $fmpModafprog;

    public function getFmpId(): ?string
    {
        return $this->fmpId;
    }

    public function getFmpEtat(): ?string
    {
        return $this->fmpEtat;
    }

    public function setFmpEtat(string $fmpEtat): self
    {
        $this->fmpEtat = $fmpEtat;

        return $this;
    }

    public function getFmpAuteurc(): ?string
    {
        return $this->fmpAuteurc;
    }

    public function setFmpAuteurc(string $fmpAuteurc): self
    {
        $this->fmpAuteurc = $fmpAuteurc;

        return $this;
    }

    public function getFmpDatec(): ?\DateTimeInterface
    {
        return $this->fmpDatec;
    }

    public function setFmpDatec(\DateTimeInterface $fmpDatec): self
    {
        $this->fmpDatec = $fmpDatec;

        return $this;
    }

    public function getFmpAuteurm(): ?string
    {
        return $this->fmpAuteurm;
    }

    public function setFmpAuteurm(?string $fmpAuteurm): self
    {
        $this->fmpAuteurm = $fmpAuteurm;

        return $this;
    }

    public function getFmpDatem(): ?\DateTimeInterface
    {
        return $this->fmpDatem;
    }

    public function setFmpDatem(?\DateTimeInterface $fmpDatem): self
    {
        $this->fmpDatem = $fmpDatem;

        return $this;
    }

    public function getFmpAuteura(): ?string
    {
        return $this->fmpAuteura;
    }

    public function setFmpAuteura(?string $fmpAuteura): self
    {
        $this->fmpAuteura = $fmpAuteura;

        return $this;
    }

    public function getFmpDatea(): ?\DateTimeInterface
    {
        return $this->fmpDatea;
    }

    public function setFmpDatea(?\DateTimeInterface $fmpDatea): self
    {
        $this->fmpDatea = $fmpDatea;

        return $this;
    }

    public function getFmpFormacode(): ?Formacode
    {
        return $this->fmpFormacode;
    }

    public function setFmpFormacode(?Formacode $fmpFormacode): self
    {
        $this->fmpFormacode = $fmpFormacode;

        return $this;
    }

    public function getFmpModafprog(): ?ModafProg
    {
        return $this->fmpModafprog;
    }

    public function setFmpModafprog(?ModafProg $fmpModafprog): self
    {
        $this->fmpModafprog = $fmpModafprog;

        return $this;
    }


}
