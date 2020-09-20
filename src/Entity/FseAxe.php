<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FseAxe
 *
 * @ORM\Table(name="fse_axe", uniqueConstraints={@ORM\UniqueConstraint(name="fse_axe_pk", columns={"fsa_id"})}, indexes={@ORM\Index(name="fse_axe_fofif", columns={"fsa_objectif"})})
 * @ORM\Entity
 */
class FseAxe
{
    /**
     * @var int
     *
     * @ORM\Column(name="fsa_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fse_axe_fsa_id_seq", allocationSize=1, initialValue=1)
     */
    private $fsaId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fsa_code", type="string", length=6, nullable=true)
     */
    private $fsaCode;

    /**
     * @var string
     *
     * @ORM\Column(name="fsa_libelle", type="string", length=50, nullable=false)
     */
    private $fsaLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="fsa_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $fsaEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="fsa_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $fsaAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fsa_datec", type="datetime", nullable=false)
     */
    private $fsaDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fsa_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $fsaAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fsa_datem", type="datetime", nullable=true)
     */
    private $fsaDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fsa_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $fsaAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fsa_datea", type="datetime", nullable=true)
     */
    private $fsaDatea;

    /**
     * @var \FseObj
     *
     * @ORM\ManyToOne(targetEntity="FseObj")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fsa_objectif", referencedColumnName="fso_id")
     * })
     */
    private $fsaObjectif;

    public function getFsaId(): ?int
    {
        return $this->fsaId;
    }

    public function getFsaCode(): ?string
    {
        return $this->fsaCode;
    }

    public function setFsaCode(?string $fsaCode): self
    {
        $this->fsaCode = $fsaCode;

        return $this;
    }

    public function getFsaLibelle(): ?string
    {
        return $this->fsaLibelle;
    }

    public function setFsaLibelle(string $fsaLibelle): self
    {
        $this->fsaLibelle = $fsaLibelle;

        return $this;
    }

    public function getFsaEtat(): ?string
    {
        return $this->fsaEtat;
    }

    public function setFsaEtat(string $fsaEtat): self
    {
        $this->fsaEtat = $fsaEtat;

        return $this;
    }

    public function getFsaAuteurc(): ?string
    {
        return $this->fsaAuteurc;
    }

    public function setFsaAuteurc(string $fsaAuteurc): self
    {
        $this->fsaAuteurc = $fsaAuteurc;

        return $this;
    }

    public function getFsaDatec(): ?\DateTimeInterface
    {
        return $this->fsaDatec;
    }

    public function setFsaDatec(\DateTimeInterface $fsaDatec): self
    {
        $this->fsaDatec = $fsaDatec;

        return $this;
    }

    public function getFsaAuteurm(): ?string
    {
        return $this->fsaAuteurm;
    }

    public function setFsaAuteurm(?string $fsaAuteurm): self
    {
        $this->fsaAuteurm = $fsaAuteurm;

        return $this;
    }

    public function getFsaDatem(): ?\DateTimeInterface
    {
        return $this->fsaDatem;
    }

    public function setFsaDatem(?\DateTimeInterface $fsaDatem): self
    {
        $this->fsaDatem = $fsaDatem;

        return $this;
    }

    public function getFsaAuteura(): ?string
    {
        return $this->fsaAuteura;
    }

    public function setFsaAuteura(?string $fsaAuteura): self
    {
        $this->fsaAuteura = $fsaAuteura;

        return $this;
    }

    public function getFsaDatea(): ?\DateTimeInterface
    {
        return $this->fsaDatea;
    }

    public function setFsaDatea(?\DateTimeInterface $fsaDatea): self
    {
        $this->fsaDatea = $fsaDatea;

        return $this;
    }

    public function getFsaObjectif(): ?FseObj
    {
        return $this->fsaObjectif;
    }

    public function setFsaObjectif(?FseObj $fsaObjectif): self
    {
        $this->fsaObjectif = $fsaObjectif;

        return $this;
    }


}
