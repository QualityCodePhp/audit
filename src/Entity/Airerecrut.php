<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Airerecrut
 *
 * @ORM\Table(name="airerecrut", uniqueConstraints={@ORM\UniqueConstraint(name="airerecrut_pk", columns={"air_id"})})
 * @ORM\Entity
 */
class Airerecrut
{
    /**
     * @var string
     *
     * @ORM\Column(name="air_id", type="decimal", precision=6, scale=0, nullable=false, options={"comment"="Identifiant Aire de recrutement"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="airerecrut_air_id_seq", allocationSize=1, initialValue=1)
     */
    private $airId;

    /**
     * @var string
     *
     * @ORM\Column(name="air_code", type="string", length=15, nullable=false)
     */
    private $airCode;

    /**
     * @var string
     *
     * @ORM\Column(name="air_libelle", type="string", length=50, nullable=false)
     */
    private $airLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="air_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $airEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="air_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $airAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="air_datec", type="datetime", nullable=false)
     */
    private $airDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="air_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $airAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="air_datem", type="datetime", nullable=true)
     */
    private $airDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="air_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $airAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="air_datea", type="datetime", nullable=true)
     */
    private $airDatea;

    public function getAirId(): ?string
    {
        return $this->airId;
    }

    public function getAirCode(): ?string
    {
        return $this->airCode;
    }

    public function setAirCode(string $airCode): self
    {
        $this->airCode = $airCode;

        return $this;
    }

    public function getAirLibelle(): ?string
    {
        return $this->airLibelle;
    }

    public function setAirLibelle(string $airLibelle): self
    {
        $this->airLibelle = $airLibelle;

        return $this;
    }

    public function getAirEtat(): ?string
    {
        return $this->airEtat;
    }

    public function setAirEtat(string $airEtat): self
    {
        $this->airEtat = $airEtat;

        return $this;
    }

    public function getAirAuteurc(): ?string
    {
        return $this->airAuteurc;
    }

    public function setAirAuteurc(string $airAuteurc): self
    {
        $this->airAuteurc = $airAuteurc;

        return $this;
    }

    public function getAirDatec(): ?\DateTimeInterface
    {
        return $this->airDatec;
    }

    public function setAirDatec(\DateTimeInterface $airDatec): self
    {
        $this->airDatec = $airDatec;

        return $this;
    }

    public function getAirAuteurm(): ?string
    {
        return $this->airAuteurm;
    }

    public function setAirAuteurm(?string $airAuteurm): self
    {
        $this->airAuteurm = $airAuteurm;

        return $this;
    }

    public function getAirDatem(): ?\DateTimeInterface
    {
        return $this->airDatem;
    }

    public function setAirDatem(?\DateTimeInterface $airDatem): self
    {
        $this->airDatem = $airDatem;

        return $this;
    }

    public function getAirAuteura(): ?string
    {
        return $this->airAuteura;
    }

    public function setAirAuteura(?string $airAuteura): self
    {
        $this->airAuteura = $airAuteura;

        return $this;
    }

    public function getAirDatea(): ?\DateTimeInterface
    {
        return $this->airDatea;
    }

    public function setAirDatea(?\DateTimeInterface $airDatea): self
    {
        $this->airDatea = $airDatea;

        return $this;
    }


}
