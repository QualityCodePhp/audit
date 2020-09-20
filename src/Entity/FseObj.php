<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FseObj
 *
 * @ORM\Table(name="fse_obj", uniqueConstraints={@ORM\UniqueConstraint(name="fse_obj_pk", columns={"fso_id"})})
 * @ORM\Entity
 */
class FseObj
{
    /**
     * @var int
     *
     * @ORM\Column(name="fso_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fse_obj_fso_id_seq", allocationSize=1, initialValue=1)
     */
    private $fsoId;

    /**
     * @var string
     *
     * @ORM\Column(name="fso_code", type="string", length=2, nullable=false)
     */
    private $fsoCode;

    /**
     * @var string
     *
     * @ORM\Column(name="fso_libelle", type="string", length=50, nullable=false)
     */
    private $fsoLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="fso_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $fsoEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="fso_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $fsoAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fso_datec", type="datetime", nullable=false)
     */
    private $fsoDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fso_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $fsoAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fso_datem", type="datetime", nullable=true)
     */
    private $fsoDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fso_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $fsoAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fso_datea", type="datetime", nullable=true)
     */
    private $fsoDatea;

    /**
     * @var string
     *
     * @ORM\Column(name="fso_zonage", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $fsoZonage;

    public function getFsoId(): ?int
    {
        return $this->fsoId;
    }

    public function getFsoCode(): ?string
    {
        return $this->fsoCode;
    }

    public function setFsoCode(string $fsoCode): self
    {
        $this->fsoCode = $fsoCode;

        return $this;
    }

    public function getFsoLibelle(): ?string
    {
        return $this->fsoLibelle;
    }

    public function setFsoLibelle(string $fsoLibelle): self
    {
        $this->fsoLibelle = $fsoLibelle;

        return $this;
    }

    public function getFsoEtat(): ?string
    {
        return $this->fsoEtat;
    }

    public function setFsoEtat(string $fsoEtat): self
    {
        $this->fsoEtat = $fsoEtat;

        return $this;
    }

    public function getFsoAuteurc(): ?string
    {
        return $this->fsoAuteurc;
    }

    public function setFsoAuteurc(string $fsoAuteurc): self
    {
        $this->fsoAuteurc = $fsoAuteurc;

        return $this;
    }

    public function getFsoDatec(): ?\DateTimeInterface
    {
        return $this->fsoDatec;
    }

    public function setFsoDatec(\DateTimeInterface $fsoDatec): self
    {
        $this->fsoDatec = $fsoDatec;

        return $this;
    }

    public function getFsoAuteurm(): ?string
    {
        return $this->fsoAuteurm;
    }

    public function setFsoAuteurm(?string $fsoAuteurm): self
    {
        $this->fsoAuteurm = $fsoAuteurm;

        return $this;
    }

    public function getFsoDatem(): ?\DateTimeInterface
    {
        return $this->fsoDatem;
    }

    public function setFsoDatem(?\DateTimeInterface $fsoDatem): self
    {
        $this->fsoDatem = $fsoDatem;

        return $this;
    }

    public function getFsoAuteura(): ?string
    {
        return $this->fsoAuteura;
    }

    public function setFsoAuteura(?string $fsoAuteura): self
    {
        $this->fsoAuteura = $fsoAuteura;

        return $this;
    }

    public function getFsoDatea(): ?\DateTimeInterface
    {
        return $this->fsoDatea;
    }

    public function setFsoDatea(?\DateTimeInterface $fsoDatea): self
    {
        $this->fsoDatea = $fsoDatea;

        return $this;
    }

    public function getFsoZonage(): ?string
    {
        return $this->fsoZonage;
    }

    public function setFsoZonage(string $fsoZonage): self
    {
        $this->fsoZonage = $fsoZonage;

        return $this;
    }


}
