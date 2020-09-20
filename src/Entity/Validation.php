<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Validation
 *
 * @ORM\Table(name="validation", uniqueConstraints={@ORM\UniqueConstraint(name="validation_pk", columns={"val_id"})})
 * @ORM\Entity
 */
class Validation
{
    /**
     * @var string
     *
     * @ORM\Column(name="val_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="validation_val_id_seq", allocationSize=1, initialValue=1)
     */
    private $valId;

    /**
     * @var string
     *
     * @ORM\Column(name="val_code", type="string", length=6, nullable=false)
     */
    private $valCode;

    /**
     * @var string
     *
     * @ORM\Column(name="val_libelle", type="string", length=50, nullable=false)
     */
    private $valLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="val_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $valEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="val_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $valAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="val_datec", type="datetime", nullable=false)
     */
    private $valDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="val_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $valAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="val_datem", type="datetime", nullable=true)
     */
    private $valDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="val_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $valAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="val_datea", type="datetime", nullable=true)
     */
    private $valDatea;

    public function getValId(): ?string
    {
        return $this->valId;
    }

    public function getValCode(): ?string
    {
        return $this->valCode;
    }

    public function setValCode(string $valCode): self
    {
        $this->valCode = $valCode;

        return $this;
    }

    public function getValLibelle(): ?string
    {
        return $this->valLibelle;
    }

    public function setValLibelle(string $valLibelle): self
    {
        $this->valLibelle = $valLibelle;

        return $this;
    }

    public function getValEtat(): ?string
    {
        return $this->valEtat;
    }

    public function setValEtat(string $valEtat): self
    {
        $this->valEtat = $valEtat;

        return $this;
    }

    public function getValAuteurc(): ?string
    {
        return $this->valAuteurc;
    }

    public function setValAuteurc(string $valAuteurc): self
    {
        $this->valAuteurc = $valAuteurc;

        return $this;
    }

    public function getValDatec(): ?\DateTimeInterface
    {
        return $this->valDatec;
    }

    public function setValDatec(\DateTimeInterface $valDatec): self
    {
        $this->valDatec = $valDatec;

        return $this;
    }

    public function getValAuteurm(): ?string
    {
        return $this->valAuteurm;
    }

    public function setValAuteurm(?string $valAuteurm): self
    {
        $this->valAuteurm = $valAuteurm;

        return $this;
    }

    public function getValDatem(): ?\DateTimeInterface
    {
        return $this->valDatem;
    }

    public function setValDatem(?\DateTimeInterface $valDatem): self
    {
        $this->valDatem = $valDatem;

        return $this;
    }

    public function getValAuteura(): ?string
    {
        return $this->valAuteura;
    }

    public function setValAuteura(?string $valAuteura): self
    {
        $this->valAuteura = $valAuteura;

        return $this;
    }

    public function getValDatea(): ?\DateTimeInterface
    {
        return $this->valDatea;
    }

    public function setValDatea(?\DateTimeInterface $valDatea): self
    {
        $this->valDatea = $valDatea;

        return $this;
    }


}
