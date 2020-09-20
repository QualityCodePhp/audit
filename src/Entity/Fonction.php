<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fonction
 *
 * @ORM\Table(name="fonction", uniqueConstraints={@ORM\UniqueConstraint(name="fonction_pk", columns={"fct_id"})})
 * @ORM\Entity
 */
class Fonction
{
    /**
     * @var string
     *
     * @ORM\Column(name="fct_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fonction_fct_id_seq", allocationSize=1, initialValue=1)
     */
    private $fctId;

    /**
     * @var string
     *
     * @ORM\Column(name="fct_code", type="string", length=10, nullable=false)
     */
    private $fctCode;

    /**
     * @var string
     *
     * @ORM\Column(name="fct_libelle", type="string", length=50, nullable=false)
     */
    private $fctLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="fct_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $fctEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="fct_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $fctAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fct_datec", type="datetime", nullable=false)
     */
    private $fctDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fct_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $fctAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fct_datem", type="datetime", nullable=true)
     */
    private $fctDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fct_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $fctAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fct_datea", type="datetime", nullable=true)
     */
    private $fctDatea;

    public function getFctId(): ?string
    {
        return $this->fctId;
    }

    public function getFctCode(): ?string
    {
        return $this->fctCode;
    }

    public function setFctCode(string $fctCode): self
    {
        $this->fctCode = $fctCode;

        return $this;
    }

    public function getFctLibelle(): ?string
    {
        return $this->fctLibelle;
    }

    public function setFctLibelle(string $fctLibelle): self
    {
        $this->fctLibelle = $fctLibelle;

        return $this;
    }

    public function getFctEtat(): ?string
    {
        return $this->fctEtat;
    }

    public function setFctEtat(string $fctEtat): self
    {
        $this->fctEtat = $fctEtat;

        return $this;
    }

    public function getFctAuteurc(): ?string
    {
        return $this->fctAuteurc;
    }

    public function setFctAuteurc(string $fctAuteurc): self
    {
        $this->fctAuteurc = $fctAuteurc;

        return $this;
    }

    public function getFctDatec(): ?\DateTimeInterface
    {
        return $this->fctDatec;
    }

    public function setFctDatec(\DateTimeInterface $fctDatec): self
    {
        $this->fctDatec = $fctDatec;

        return $this;
    }

    public function getFctAuteurm(): ?string
    {
        return $this->fctAuteurm;
    }

    public function setFctAuteurm(?string $fctAuteurm): self
    {
        $this->fctAuteurm = $fctAuteurm;

        return $this;
    }

    public function getFctDatem(): ?\DateTimeInterface
    {
        return $this->fctDatem;
    }

    public function setFctDatem(?\DateTimeInterface $fctDatem): self
    {
        $this->fctDatem = $fctDatem;

        return $this;
    }

    public function getFctAuteura(): ?string
    {
        return $this->fctAuteura;
    }

    public function setFctAuteura(?string $fctAuteura): self
    {
        $this->fctAuteura = $fctAuteura;

        return $this;
    }

    public function getFctDatea(): ?\DateTimeInterface
    {
        return $this->fctDatea;
    }

    public function setFctDatea(?\DateTimeInterface $fctDatea): self
    {
        $this->fctDatea = $fctDatea;

        return $this;
    }


}
