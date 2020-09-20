<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prgcertif
 *
 * @ORM\Table(name="prgcertif", uniqueConstraints={@ORM\UniqueConstraint(name="prgcertif_pk", columns={"prc_id"})})
 * @ORM\Entity
 */
class Prgcertif
{
    /**
     * @var string
     *
     * @ORM\Column(name="prc_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="prgcertif_prc_id_seq", allocationSize=1, initialValue=1)
     */
    private $prcId;

    /**
     * @var string
     *
     * @ORM\Column(name="prc_code", type="string", length=15, nullable=false)
     */
    private $prcCode;

    /**
     * @var string
     *
     * @ORM\Column(name="prc_libelle", type="string", length=50, nullable=false)
     */
    private $prcLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="prc_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $prcEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="prc_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $prcAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prc_datec", type="datetime", nullable=false)
     */
    private $prcDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prc_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $prcAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prc_datem", type="datetime", nullable=true)
     */
    private $prcDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prc_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $prcAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prc_datea", type="datetime", nullable=true)
     */
    private $prcDatea;

    public function getPrcId(): ?string
    {
        return $this->prcId;
    }

    public function getPrcCode(): ?string
    {
        return $this->prcCode;
    }

    public function setPrcCode(string $prcCode): self
    {
        $this->prcCode = $prcCode;

        return $this;
    }

    public function getPrcLibelle(): ?string
    {
        return $this->prcLibelle;
    }

    public function setPrcLibelle(string $prcLibelle): self
    {
        $this->prcLibelle = $prcLibelle;

        return $this;
    }

    public function getPrcEtat(): ?string
    {
        return $this->prcEtat;
    }

    public function setPrcEtat(string $prcEtat): self
    {
        $this->prcEtat = $prcEtat;

        return $this;
    }

    public function getPrcAuteurc(): ?string
    {
        return $this->prcAuteurc;
    }

    public function setPrcAuteurc(string $prcAuteurc): self
    {
        $this->prcAuteurc = $prcAuteurc;

        return $this;
    }

    public function getPrcDatec(): ?\DateTimeInterface
    {
        return $this->prcDatec;
    }

    public function setPrcDatec(\DateTimeInterface $prcDatec): self
    {
        $this->prcDatec = $prcDatec;

        return $this;
    }

    public function getPrcAuteurm(): ?string
    {
        return $this->prcAuteurm;
    }

    public function setPrcAuteurm(?string $prcAuteurm): self
    {
        $this->prcAuteurm = $prcAuteurm;

        return $this;
    }

    public function getPrcDatem(): ?\DateTimeInterface
    {
        return $this->prcDatem;
    }

    public function setPrcDatem(?\DateTimeInterface $prcDatem): self
    {
        $this->prcDatem = $prcDatem;

        return $this;
    }

    public function getPrcAuteura(): ?string
    {
        return $this->prcAuteura;
    }

    public function setPrcAuteura(?string $prcAuteura): self
    {
        $this->prcAuteura = $prcAuteura;

        return $this;
    }

    public function getPrcDatea(): ?\DateTimeInterface
    {
        return $this->prcDatea;
    }

    public function setPrcDatea(?\DateTimeInterface $prcDatea): self
    {
        $this->prcDatea = $prcDatea;

        return $this;
    }


}
