<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rome
 *
 * @ORM\Table(name="rome", uniqueConstraints={@ORM\UniqueConstraint(name="rome_pk", columns={"rom_id"})})
 * @ORM\Entity
 */
class Rome
{
    /**
     * @var string
     *
     * @ORM\Column(name="rom_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rome_rom_id_seq", allocationSize=1, initialValue=1)
     */
    private $romId;

    /**
     * @var string
     *
     * @ORM\Column(name="rom_code", type="string", length=5, nullable=false)
     */
    private $romCode;

    /**
     * @var string
     *
     * @ORM\Column(name="rom_libelle", type="string", length=200, nullable=false)
     */
    private $romLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="rom_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $romEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="rom_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $romAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rom_datec", type="datetime", nullable=false)
     */
    private $romDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rom_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $romAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rom_datem", type="datetime", nullable=true)
     */
    private $romDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rom_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $romAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rom_datea", type="datetime", nullable=true)
     */
    private $romDatea;

    public function getRomId(): ?string
    {
        return $this->romId;
    }

    public function getRomCode(): ?string
    {
        return $this->romCode;
    }

    public function setRomCode(string $romCode): self
    {
        $this->romCode = $romCode;

        return $this;
    }

    public function getRomLibelle(): ?string
    {
        return $this->romLibelle;
    }

    public function setRomLibelle(string $romLibelle): self
    {
        $this->romLibelle = $romLibelle;

        return $this;
    }

    public function getRomEtat(): ?string
    {
        return $this->romEtat;
    }

    public function setRomEtat(string $romEtat): self
    {
        $this->romEtat = $romEtat;

        return $this;
    }

    public function getRomAuteurc(): ?string
    {
        return $this->romAuteurc;
    }

    public function setRomAuteurc(string $romAuteurc): self
    {
        $this->romAuteurc = $romAuteurc;

        return $this;
    }

    public function getRomDatec(): ?\DateTimeInterface
    {
        return $this->romDatec;
    }

    public function setRomDatec(\DateTimeInterface $romDatec): self
    {
        $this->romDatec = $romDatec;

        return $this;
    }

    public function getRomAuteurm(): ?string
    {
        return $this->romAuteurm;
    }

    public function setRomAuteurm(?string $romAuteurm): self
    {
        $this->romAuteurm = $romAuteurm;

        return $this;
    }

    public function getRomDatem(): ?\DateTimeInterface
    {
        return $this->romDatem;
    }

    public function setRomDatem(?\DateTimeInterface $romDatem): self
    {
        $this->romDatem = $romDatem;

        return $this;
    }

    public function getRomAuteura(): ?string
    {
        return $this->romAuteura;
    }

    public function setRomAuteura(?string $romAuteura): self
    {
        $this->romAuteura = $romAuteura;

        return $this;
    }

    public function getRomDatea(): ?\DateTimeInterface
    {
        return $this->romDatea;
    }

    public function setRomDatea(?\DateTimeInterface $romDatea): self
    {
        $this->romDatea = $romDatea;

        return $this;
    }


}
