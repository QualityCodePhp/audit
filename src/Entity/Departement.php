<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement", uniqueConstraints={@ORM\UniqueConstraint(name="departement_pk", columns={"dep_code"})})
 * @ORM\Entity
 */
class Departement
{
    /**
     * @var string
     *
     * @ORM\Column(name="dep_code", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="departement_dep_code_seq", allocationSize=1, initialValue=1)
     */
    private $depCode;

    /**
     * @var string
     *
     * @ORM\Column(name="dep_libelle", type="string", length=50, nullable=false)
     */
    private $depLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="dep_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $depEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="dep_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $depAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dep_datec", type="datetime", nullable=false)
     */
    private $depDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dep_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $depAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dep_datem", type="datetime", nullable=true)
     */
    private $depDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dep_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $depAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dep_datea", type="datetime", nullable=true)
     */
    private $depDatea;

    public function getDepCode(): ?string
    {
        return $this->depCode;
    }

    public function getDepLibelle(): ?string
    {
        return $this->depLibelle;
    }

    public function setDepLibelle(string $depLibelle): self
    {
        $this->depLibelle = $depLibelle;

        return $this;
    }

    public function getDepEtat(): ?string
    {
        return $this->depEtat;
    }

    public function setDepEtat(string $depEtat): self
    {
        $this->depEtat = $depEtat;

        return $this;
    }

    public function getDepAuteurc(): ?string
    {
        return $this->depAuteurc;
    }

    public function setDepAuteurc(string $depAuteurc): self
    {
        $this->depAuteurc = $depAuteurc;

        return $this;
    }

    public function getDepDatec(): ?\DateTimeInterface
    {
        return $this->depDatec;
    }

    public function setDepDatec(\DateTimeInterface $depDatec): self
    {
        $this->depDatec = $depDatec;

        return $this;
    }

    public function getDepAuteurm(): ?string
    {
        return $this->depAuteurm;
    }

    public function setDepAuteurm(?string $depAuteurm): self
    {
        $this->depAuteurm = $depAuteurm;

        return $this;
    }

    public function getDepDatem(): ?\DateTimeInterface
    {
        return $this->depDatem;
    }

    public function setDepDatem(?\DateTimeInterface $depDatem): self
    {
        $this->depDatem = $depDatem;

        return $this;
    }

    public function getDepAuteura(): ?string
    {
        return $this->depAuteura;
    }

    public function setDepAuteura(?string $depAuteura): self
    {
        $this->depAuteura = $depAuteura;

        return $this;
    }

    public function getDepDatea(): ?\DateTimeInterface
    {
        return $this->depDatea;
    }

    public function setDepDatea(?\DateTimeInterface $depDatea): self
    {
        $this->depDatea = $depDatea;

        return $this;
    }


}
