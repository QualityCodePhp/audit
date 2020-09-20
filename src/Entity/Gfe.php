<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gfe
 *
 * @ORM\Table(name="gfe", uniqueConstraints={@ORM\UniqueConstraint(name="gfe_pk", columns={"gfe_id"})})
 * @ORM\Entity
 */
class Gfe
{
    /**
     * @var string
     *
     * @ORM\Column(name="gfe_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gfe_gfe_id_seq", allocationSize=1, initialValue=1)
     */
    private $gfeId;

    /**
     * @var string
     *
     * @ORM\Column(name="gfe_code", type="string", length=3, nullable=false)
     */
    private $gfeCode;

    /**
     * @var string
     *
     * @ORM\Column(name="gfe_libelle", type="string", length=100, nullable=false)
     */
    private $gfeLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="gfe_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $gfeEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="gfe_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $gfeAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gfe_datec", type="datetime", nullable=false)
     */
    private $gfeDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gfe_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $gfeAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="gfe_datem", type="datetime", nullable=true)
     */
    private $gfeDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gfe_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $gfeAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="gfe_datea", type="datetime", nullable=true)
     */
    private $gfeDatea;

    public function getGfeId(): ?string
    {
        return $this->gfeId;
    }

    public function getGfeCode(): ?string
    {
        return $this->gfeCode;
    }

    public function setGfeCode(string $gfeCode): self
    {
        $this->gfeCode = $gfeCode;

        return $this;
    }

    public function getGfeLibelle(): ?string
    {
        return $this->gfeLibelle;
    }

    public function setGfeLibelle(string $gfeLibelle): self
    {
        $this->gfeLibelle = $gfeLibelle;

        return $this;
    }

    public function getGfeEtat(): ?string
    {
        return $this->gfeEtat;
    }

    public function setGfeEtat(string $gfeEtat): self
    {
        $this->gfeEtat = $gfeEtat;

        return $this;
    }

    public function getGfeAuteurc(): ?string
    {
        return $this->gfeAuteurc;
    }

    public function setGfeAuteurc(string $gfeAuteurc): self
    {
        $this->gfeAuteurc = $gfeAuteurc;

        return $this;
    }

    public function getGfeDatec(): ?\DateTimeInterface
    {
        return $this->gfeDatec;
    }

    public function setGfeDatec(\DateTimeInterface $gfeDatec): self
    {
        $this->gfeDatec = $gfeDatec;

        return $this;
    }

    public function getGfeAuteurm(): ?string
    {
        return $this->gfeAuteurm;
    }

    public function setGfeAuteurm(?string $gfeAuteurm): self
    {
        $this->gfeAuteurm = $gfeAuteurm;

        return $this;
    }

    public function getGfeDatem(): ?\DateTimeInterface
    {
        return $this->gfeDatem;
    }

    public function setGfeDatem(?\DateTimeInterface $gfeDatem): self
    {
        $this->gfeDatem = $gfeDatem;

        return $this;
    }

    public function getGfeAuteura(): ?string
    {
        return $this->gfeAuteura;
    }

    public function setGfeAuteura(?string $gfeAuteura): self
    {
        $this->gfeAuteura = $gfeAuteura;

        return $this;
    }

    public function getGfeDatea(): ?\DateTimeInterface
    {
        return $this->gfeDatea;
    }

    public function setGfeDatea(?\DateTimeInterface $gfeDatea): self
    {
        $this->gfeDatea = $gfeDatea;

        return $this;
    }


}
