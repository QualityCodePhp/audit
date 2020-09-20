<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormaModaf
 *
 * @ORM\Table(name="forma_modaf", uniqueConstraints={@ORM\UniqueConstraint(name="forma_modaf_pk", columns={"fma_id"})}, indexes={@ORM\Index(name="forma_modaf_famif", columns={"fma_modelaf"}), @ORM\Index(name="forma_modaf_fffif2", columns={"fma_formacode"})})
 * @ORM\Entity
 */
class FormaModaf
{
    /**
     * @var string
     *
     * @ORM\Column(name="fma_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="forma_modaf_fma_id_seq", allocationSize=1, initialValue=1)
     */
    private $fmaId;

    /**
     * @var string
     *
     * @ORM\Column(name="fma_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $fmaEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="fma_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $fmaAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fma_datec", type="datetime", nullable=false)
     */
    private $fmaDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fma_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $fmaAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fma_datea", type="datetime", nullable=true)
     */
    private $fmaDatea;

    /**
     * @var \Formacode
     *
     * @ORM\ManyToOne(targetEntity="Formacode")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fma_formacode", referencedColumnName="fmc_id")
     * })
     */
    private $fmaFormacode;

    /**
     * @var \ModeleAf
     *
     * @ORM\ManyToOne(targetEntity="ModeleAf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fma_modelaf", referencedColumnName="maf_id")
     * })
     */
    private $fmaModelaf;

    public function getFmaId(): ?string
    {
        return $this->fmaId;
    }

    public function getFmaEtat(): ?string
    {
        return $this->fmaEtat;
    }

    public function setFmaEtat(string $fmaEtat): self
    {
        $this->fmaEtat = $fmaEtat;

        return $this;
    }

    public function getFmaAuteurc(): ?string
    {
        return $this->fmaAuteurc;
    }

    public function setFmaAuteurc(string $fmaAuteurc): self
    {
        $this->fmaAuteurc = $fmaAuteurc;

        return $this;
    }

    public function getFmaDatec(): ?\DateTimeInterface
    {
        return $this->fmaDatec;
    }

    public function setFmaDatec(\DateTimeInterface $fmaDatec): self
    {
        $this->fmaDatec = $fmaDatec;

        return $this;
    }

    public function getFmaAuteura(): ?string
    {
        return $this->fmaAuteura;
    }

    public function setFmaAuteura(?string $fmaAuteura): self
    {
        $this->fmaAuteura = $fmaAuteura;

        return $this;
    }

    public function getFmaDatea(): ?\DateTimeInterface
    {
        return $this->fmaDatea;
    }

    public function setFmaDatea(?\DateTimeInterface $fmaDatea): self
    {
        $this->fmaDatea = $fmaDatea;

        return $this;
    }

    public function getFmaFormacode(): ?Formacode
    {
        return $this->fmaFormacode;
    }

    public function setFmaFormacode(?Formacode $fmaFormacode): self
    {
        $this->fmaFormacode = $fmaFormacode;

        return $this;
    }

    public function getFmaModelaf(): ?ModeleAf
    {
        return $this->fmaModelaf;
    }

    public function setFmaModelaf(?ModeleAf $fmaModelaf): self
    {
        $this->fmaModelaf = $fmaModelaf;

        return $this;
    }


}
