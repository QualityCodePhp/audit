<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Niveau
 *
 * @ORM\Table(name="niveau", uniqueConstraints={@ORM\UniqueConstraint(name="niveau_pk", columns={"niv_id"})})
 * @ORM\Entity
 */
class Niveau
{
    /**
     * @var int
     *
     * @ORM\Column(name="niv_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="niveau_niv_id_seq", allocationSize=1, initialValue=1)
     */
    private $nivId;

    /**
     * @var string
     *
     * @ORM\Column(name="niv_code", type="string", length=2, nullable=false)
     */
    private $nivCode;

    /**
     * @var string
     *
     * @ORM\Column(name="niv_libelle", type="string", length=50, nullable=false)
     */
    private $nivLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="niv_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nivEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="niv_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $nivAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="niv_datec", type="datetime", nullable=false)
     */
    private $nivDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="niv_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $nivAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="niv_datem", type="datetime", nullable=true)
     */
    private $nivDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="niv_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $nivAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="niv_datea", type="datetime", nullable=true)
     */
    private $nivDatea;

    public function getNivId(): ?int
    {
        return $this->nivId;
    }

    public function getNivCode(): ?string
    {
        return $this->nivCode;
    }

    public function setNivCode(string $nivCode): self
    {
        $this->nivCode = $nivCode;

        return $this;
    }

    public function getNivLibelle(): ?string
    {
        return $this->nivLibelle;
    }

    public function setNivLibelle(string $nivLibelle): self
    {
        $this->nivLibelle = $nivLibelle;

        return $this;
    }

    public function getNivEtat(): ?string
    {
        return $this->nivEtat;
    }

    public function setNivEtat(string $nivEtat): self
    {
        $this->nivEtat = $nivEtat;

        return $this;
    }

    public function getNivAuteurc(): ?string
    {
        return $this->nivAuteurc;
    }

    public function setNivAuteurc(string $nivAuteurc): self
    {
        $this->nivAuteurc = $nivAuteurc;

        return $this;
    }

    public function getNivDatec(): ?\DateTimeInterface
    {
        return $this->nivDatec;
    }

    public function setNivDatec(\DateTimeInterface $nivDatec): self
    {
        $this->nivDatec = $nivDatec;

        return $this;
    }

    public function getNivAuteurm(): ?string
    {
        return $this->nivAuteurm;
    }

    public function setNivAuteurm(?string $nivAuteurm): self
    {
        $this->nivAuteurm = $nivAuteurm;

        return $this;
    }

    public function getNivDatem(): ?\DateTimeInterface
    {
        return $this->nivDatem;
    }

    public function setNivDatem(?\DateTimeInterface $nivDatem): self
    {
        $this->nivDatem = $nivDatem;

        return $this;
    }

    public function getNivAuteura(): ?string
    {
        return $this->nivAuteura;
    }

    public function setNivAuteura(?string $nivAuteura): self
    {
        $this->nivAuteura = $nivAuteura;

        return $this;
    }

    public function getNivDatea(): ?\DateTimeInterface
    {
        return $this->nivDatea;
    }

    public function setNivDatea(?\DateTimeInterface $nivDatea): self
    {
        $this->nivDatea = $nivDatea;

        return $this;
    }


}
