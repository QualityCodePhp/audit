<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Motifsortie
 *
 * @ORM\Table(name="motifsortie", uniqueConstraints={@ORM\UniqueConstraint(name="motifsortie_pk", columns={"mot_id"})})
 * @ORM\Entity
 */
class Motifsortie
{
    /**
     * @var int
     *
     * @ORM\Column(name="mot_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="motifsortie_mot_id_seq", allocationSize=1, initialValue=1)
     */
    private $motId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mot_code", type="string", length=3, nullable=true)
     */
    private $motCode;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_libelle", type="string", length=50, nullable=false)
     */
    private $motLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $motEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $motAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mot_datec", type="datetime", nullable=false)
     */
    private $motDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mot_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $motAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="mot_datem", type="datetime", nullable=true)
     */
    private $motDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mot_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $motAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="mot_datea", type="datetime", nullable=true)
     */
    private $motDatea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mot_rang", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $motRang;

    public function getMotId(): ?int
    {
        return $this->motId;
    }

    public function getMotCode(): ?string
    {
        return $this->motCode;
    }

    public function setMotCode(?string $motCode): self
    {
        $this->motCode = $motCode;

        return $this;
    }

    public function getMotLibelle(): ?string
    {
        return $this->motLibelle;
    }

    public function setMotLibelle(string $motLibelle): self
    {
        $this->motLibelle = $motLibelle;

        return $this;
    }

    public function getMotEtat(): ?string
    {
        return $this->motEtat;
    }

    public function setMotEtat(string $motEtat): self
    {
        $this->motEtat = $motEtat;

        return $this;
    }

    public function getMotAuteurc(): ?string
    {
        return $this->motAuteurc;
    }

    public function setMotAuteurc(string $motAuteurc): self
    {
        $this->motAuteurc = $motAuteurc;

        return $this;
    }

    public function getMotDatec(): ?\DateTimeInterface
    {
        return $this->motDatec;
    }

    public function setMotDatec(\DateTimeInterface $motDatec): self
    {
        $this->motDatec = $motDatec;

        return $this;
    }

    public function getMotAuteurm(): ?string
    {
        return $this->motAuteurm;
    }

    public function setMotAuteurm(?string $motAuteurm): self
    {
        $this->motAuteurm = $motAuteurm;

        return $this;
    }

    public function getMotDatem(): ?\DateTimeInterface
    {
        return $this->motDatem;
    }

    public function setMotDatem(?\DateTimeInterface $motDatem): self
    {
        $this->motDatem = $motDatem;

        return $this;
    }

    public function getMotAuteura(): ?string
    {
        return $this->motAuteura;
    }

    public function setMotAuteura(?string $motAuteura): self
    {
        $this->motAuteura = $motAuteura;

        return $this;
    }

    public function getMotDatea(): ?\DateTimeInterface
    {
        return $this->motDatea;
    }

    public function setMotDatea(?\DateTimeInterface $motDatea): self
    {
        $this->motDatea = $motDatea;

        return $this;
    }

    public function getMotRang(): ?string
    {
        return $this->motRang;
    }

    public function setMotRang(?string $motRang): self
    {
        $this->motRang = $motRang;

        return $this;
    }


}
