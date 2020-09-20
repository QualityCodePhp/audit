<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publics
 *
 * @ORM\Table(name="publics", uniqueConstraints={@ORM\UniqueConstraint(name="publics_pk", columns={"pub_id"})})
 * @ORM\Entity
 */
class Publics
{
    /**
     * @var string
     *
     * @ORM\Column(name="pub_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="publics_pub_id_seq", allocationSize=1, initialValue=1)
     */
    private $pubId;

    /**
     * @var string
     *
     * @ORM\Column(name="pub_code", type="string", length=4, nullable=false)
     */
    private $pubCode;

    /**
     * @var string
     *
     * @ORM\Column(name="pub_libelle", type="string", length=50, nullable=false)
     */
    private $pubLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="pub_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $pubEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="pub_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $pubAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pub_datec", type="datetime", nullable=false)
     */
    private $pubDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pub_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $pubAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="pub_datem", type="datetime", nullable=true)
     */
    private $pubDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pub_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $pubAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="pub_datea", type="datetime", nullable=true)
     */
    private $pubDatea;

    public function getPubId(): ?string
    {
        return $this->pubId;
    }

    public function getPubCode(): ?string
    {
        return $this->pubCode;
    }

    public function setPubCode(string $pubCode): self
    {
        $this->pubCode = $pubCode;

        return $this;
    }

    public function getPubLibelle(): ?string
    {
        return $this->pubLibelle;
    }

    public function setPubLibelle(string $pubLibelle): self
    {
        $this->pubLibelle = $pubLibelle;

        return $this;
    }

    public function getPubEtat(): ?string
    {
        return $this->pubEtat;
    }

    public function setPubEtat(string $pubEtat): self
    {
        $this->pubEtat = $pubEtat;

        return $this;
    }

    public function getPubAuteurc(): ?string
    {
        return $this->pubAuteurc;
    }

    public function setPubAuteurc(string $pubAuteurc): self
    {
        $this->pubAuteurc = $pubAuteurc;

        return $this;
    }

    public function getPubDatec(): ?\DateTimeInterface
    {
        return $this->pubDatec;
    }

    public function setPubDatec(\DateTimeInterface $pubDatec): self
    {
        $this->pubDatec = $pubDatec;

        return $this;
    }

    public function getPubAuteurm(): ?string
    {
        return $this->pubAuteurm;
    }

    public function setPubAuteurm(?string $pubAuteurm): self
    {
        $this->pubAuteurm = $pubAuteurm;

        return $this;
    }

    public function getPubDatem(): ?\DateTimeInterface
    {
        return $this->pubDatem;
    }

    public function setPubDatem(?\DateTimeInterface $pubDatem): self
    {
        $this->pubDatem = $pubDatem;

        return $this;
    }

    public function getPubAuteura(): ?string
    {
        return $this->pubAuteura;
    }

    public function setPubAuteura(?string $pubAuteura): self
    {
        $this->pubAuteura = $pubAuteura;

        return $this;
    }

    public function getPubDatea(): ?\DateTimeInterface
    {
        return $this->pubDatea;
    }

    public function setPubDatea(?\DateTimeInterface $pubDatea): self
    {
        $this->pubDatea = $pubDatea;

        return $this;
    }


}
