<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NatJur
 *
 * @ORM\Table(name="nat_jur", uniqueConstraints={@ORM\UniqueConstraint(name="nat_jur_pk", columns={"naj_id"})})
 * @ORM\Entity
 */
class NatJur
{
    /**
     * @var string
     *
     * @ORM\Column(name="naj_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="nat_jur_naj_id_seq", allocationSize=1, initialValue=1)
     */
    private $najId;

    /**
     * @var string
     *
     * @ORM\Column(name="naj_code", type="string", length=4, nullable=false)
     */
    private $najCode;

    /**
     * @var string
     *
     * @ORM\Column(name="naj_libelle", type="string", length=200, nullable=false)
     */
    private $najLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="naj_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $najEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="naj_siretobl", type="decimal", precision=1, scale=0, nullable=false, options={"comment"="(O/N)"})
     */
    private $najSiretobl;

    /**
     * @var string
     *
     * @ORM\Column(name="naj_apeobl", type="decimal", precision=1, scale=0, nullable=false, options={"comment"="(O/N)"})
     */
    private $najApeobl;

    /**
     * @var string
     *
     * @ORM\Column(name="naj_immatobl", type="decimal", precision=1, scale=0, nullable=false, options={"comment"="(O/N)"})
     */
    private $najImmatobl;

    /**
     * @var string
     *
     * @ORM\Column(name="naj_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $najAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="naj_datec", type="datetime", nullable=false)
     */
    private $najDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="naj_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $najAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="naj_datem", type="datetime", nullable=true)
     */
    private $najDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="naj_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $najAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="naj_datea", type="datetime", nullable=true)
     */
    private $najDatea;

    public function getNajId(): ?string
    {
        return $this->najId;
    }

    public function getNajCode(): ?string
    {
        return $this->najCode;
    }

    public function setNajCode(string $najCode): self
    {
        $this->najCode = $najCode;

        return $this;
    }

    public function getNajLibelle(): ?string
    {
        return $this->najLibelle;
    }

    public function setNajLibelle(string $najLibelle): self
    {
        $this->najLibelle = $najLibelle;

        return $this;
    }

    public function getNajEtat(): ?string
    {
        return $this->najEtat;
    }

    public function setNajEtat(string $najEtat): self
    {
        $this->najEtat = $najEtat;

        return $this;
    }

    public function getNajSiretobl(): ?string
    {
        return $this->najSiretobl;
    }

    public function setNajSiretobl(string $najSiretobl): self
    {
        $this->najSiretobl = $najSiretobl;

        return $this;
    }

    public function getNajApeobl(): ?string
    {
        return $this->najApeobl;
    }

    public function setNajApeobl(string $najApeobl): self
    {
        $this->najApeobl = $najApeobl;

        return $this;
    }

    public function getNajImmatobl(): ?string
    {
        return $this->najImmatobl;
    }

    public function setNajImmatobl(string $najImmatobl): self
    {
        $this->najImmatobl = $najImmatobl;

        return $this;
    }

    public function getNajAuteurc(): ?string
    {
        return $this->najAuteurc;
    }

    public function setNajAuteurc(string $najAuteurc): self
    {
        $this->najAuteurc = $najAuteurc;

        return $this;
    }

    public function getNajDatec(): ?\DateTimeInterface
    {
        return $this->najDatec;
    }

    public function setNajDatec(\DateTimeInterface $najDatec): self
    {
        $this->najDatec = $najDatec;

        return $this;
    }

    public function getNajAuteurm(): ?string
    {
        return $this->najAuteurm;
    }

    public function setNajAuteurm(?string $najAuteurm): self
    {
        $this->najAuteurm = $najAuteurm;

        return $this;
    }

    public function getNajDatem(): ?\DateTimeInterface
    {
        return $this->najDatem;
    }

    public function setNajDatem(?\DateTimeInterface $najDatem): self
    {
        $this->najDatem = $najDatem;

        return $this;
    }

    public function getNajAuteura(): ?string
    {
        return $this->najAuteura;
    }

    public function setNajAuteura(?string $najAuteura): self
    {
        $this->najAuteura = $najAuteura;

        return $this;
    }

    public function getNajDatea(): ?\DateTimeInterface
    {
        return $this->najDatea;
    }

    public function setNajDatea(?\DateTimeInterface $najDatea): self
    {
        $this->najDatea = $najDatea;

        return $this;
    }


}
