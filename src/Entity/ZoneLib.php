<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZoneLib
 *
 * @ORM\Table(name="zone_lib", uniqueConstraints={@ORM\UniqueConstraint(name="zone_lib_pk", columns={"zol_id"})})
 * @ORM\Entity
 */
class ZoneLib
{
    /**
     * @var string
     *
     * @ORM\Column(name="zol_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="zone_lib_zol_id_seq", allocationSize=1, initialValue=1)
     */
    private $zolId;

    /**
     * @var string
     *
     * @ORM\Column(name="zol_code", type="decimal", precision=4, scale=0, nullable=false, options={"comment"="Correspond Ã  Zone Emploi ANPE de ZONE_EMPLOI"})
     */
    private $zolCode;

    /**
     * @var string
     *
     * @ORM\Column(name="zol_libelle", type="string", length=50, nullable=false)
     */
    private $zolLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="zol_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $zolEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="zol_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $zolAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="zol_datec", type="datetime", nullable=false)
     */
    private $zolDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zol_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $zolAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="zol_datem", type="datetime", nullable=true)
     */
    private $zolDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zol_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $zolAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="zol_datea", type="datetime", nullable=true)
     */
    private $zolDatea;

    public function getZolId(): ?string
    {
        return $this->zolId;
    }

    public function getZolCode(): ?string
    {
        return $this->zolCode;
    }

    public function setZolCode(string $zolCode): self
    {
        $this->zolCode = $zolCode;

        return $this;
    }

    public function getZolLibelle(): ?string
    {
        return $this->zolLibelle;
    }

    public function setZolLibelle(string $zolLibelle): self
    {
        $this->zolLibelle = $zolLibelle;

        return $this;
    }

    public function getZolEtat(): ?string
    {
        return $this->zolEtat;
    }

    public function setZolEtat(string $zolEtat): self
    {
        $this->zolEtat = $zolEtat;

        return $this;
    }

    public function getZolAuteurc(): ?string
    {
        return $this->zolAuteurc;
    }

    public function setZolAuteurc(string $zolAuteurc): self
    {
        $this->zolAuteurc = $zolAuteurc;

        return $this;
    }

    public function getZolDatec(): ?\DateTimeInterface
    {
        return $this->zolDatec;
    }

    public function setZolDatec(\DateTimeInterface $zolDatec): self
    {
        $this->zolDatec = $zolDatec;

        return $this;
    }

    public function getZolAuteurm(): ?string
    {
        return $this->zolAuteurm;
    }

    public function setZolAuteurm(?string $zolAuteurm): self
    {
        $this->zolAuteurm = $zolAuteurm;

        return $this;
    }

    public function getZolDatem(): ?\DateTimeInterface
    {
        return $this->zolDatem;
    }

    public function setZolDatem(?\DateTimeInterface $zolDatem): self
    {
        $this->zolDatem = $zolDatem;

        return $this;
    }

    public function getZolAuteura(): ?string
    {
        return $this->zolAuteura;
    }

    public function setZolAuteura(?string $zolAuteura): self
    {
        $this->zolAuteura = $zolAuteura;

        return $this;
    }

    public function getZolDatea(): ?\DateTimeInterface
    {
        return $this->zolDatea;
    }

    public function setZolDatea(?\DateTimeInterface $zolDatea): self
    {
        $this->zolDatea = $zolDatea;

        return $this;
    }


}
