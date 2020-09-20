<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EBordereau
 *
 * @ORM\Table(name="e_bordereau", uniqueConstraints={@ORM\UniqueConstraint(name="e_bordereau_pk", columns={"mpe_id"})}, indexes={@ORM\Index(name="e_bordereau_mpmif", columns={"mpe_modafprog"}), @ORM\Index(name="e_bordereau_uuif", columns={"mpe_auteurv"})})
 * @ORM\Entity
 */
class EBordereau
{
    /**
     * @var int
     *
     * @ORM\Column(name="mpe_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_bordereau_mpe_id_seq", allocationSize=1, initialValue=1)
     */
    private $mpeId;

    /**
     * @var string
     *
     * @ORM\Column(name="mpe_code", type="string", length=4, nullable=false)
     */
    private $mpeCode;

    /**
     * @var string
     *
     * @ORM\Column(name="mpe_libelle", type="string", length=50, nullable=false)
     */
    private $mpeLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="mpe_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $mpeEtat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="mpe_datev", type="datetime", nullable=true)
     */
    private $mpeDatev;

    /**
     * @var string
     *
     * @ORM\Column(name="mpe_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $mpeAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mpe_datec", type="datetime", nullable=false)
     */
    private $mpeDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mpe_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $mpeAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="mpe_datem", type="datetime", nullable=true)
     */
    private $mpeDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mpe_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $mpeAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="mpe_datea", type="datetime", nullable=true)
     */
    private $mpeDatea;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mpe_auteurv", referencedColumnName="uti_id")
     * })
     */
    private $mpeAuteurv;

    /**
     * @var \ModafProg
     *
     * @ORM\ManyToOne(targetEntity="ModafProg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mpe_modafprog", referencedColumnName="mop_id")
     * })
     */
    private $mpeModafprog;

    public function getMpeId(): ?int
    {
        return $this->mpeId;
    }

    public function getMpeCode(): ?string
    {
        return $this->mpeCode;
    }

    public function setMpeCode(string $mpeCode): self
    {
        $this->mpeCode = $mpeCode;

        return $this;
    }

    public function getMpeLibelle(): ?string
    {
        return $this->mpeLibelle;
    }

    public function setMpeLibelle(string $mpeLibelle): self
    {
        $this->mpeLibelle = $mpeLibelle;

        return $this;
    }

    public function getMpeEtat(): ?string
    {
        return $this->mpeEtat;
    }

    public function setMpeEtat(string $mpeEtat): self
    {
        $this->mpeEtat = $mpeEtat;

        return $this;
    }

    public function getMpeDatev(): ?\DateTimeInterface
    {
        return $this->mpeDatev;
    }

    public function setMpeDatev(?\DateTimeInterface $mpeDatev): self
    {
        $this->mpeDatev = $mpeDatev;

        return $this;
    }

    public function getMpeAuteurc(): ?string
    {
        return $this->mpeAuteurc;
    }

    public function setMpeAuteurc(string $mpeAuteurc): self
    {
        $this->mpeAuteurc = $mpeAuteurc;

        return $this;
    }

    public function getMpeDatec(): ?\DateTimeInterface
    {
        return $this->mpeDatec;
    }

    public function setMpeDatec(\DateTimeInterface $mpeDatec): self
    {
        $this->mpeDatec = $mpeDatec;

        return $this;
    }

    public function getMpeAuteurm(): ?string
    {
        return $this->mpeAuteurm;
    }

    public function setMpeAuteurm(?string $mpeAuteurm): self
    {
        $this->mpeAuteurm = $mpeAuteurm;

        return $this;
    }

    public function getMpeDatem(): ?\DateTimeInterface
    {
        return $this->mpeDatem;
    }

    public function setMpeDatem(?\DateTimeInterface $mpeDatem): self
    {
        $this->mpeDatem = $mpeDatem;

        return $this;
    }

    public function getMpeAuteura(): ?string
    {
        return $this->mpeAuteura;
    }

    public function setMpeAuteura(?string $mpeAuteura): self
    {
        $this->mpeAuteura = $mpeAuteura;

        return $this;
    }

    public function getMpeDatea(): ?\DateTimeInterface
    {
        return $this->mpeDatea;
    }

    public function setMpeDatea(?\DateTimeInterface $mpeDatea): self
    {
        $this->mpeDatea = $mpeDatea;

        return $this;
    }

    public function getMpeAuteurv(): ?Utilisateur
    {
        return $this->mpeAuteurv;
    }

    public function setMpeAuteurv(?Utilisateur $mpeAuteurv): self
    {
        $this->mpeAuteurv = $mpeAuteurv;

        return $this;
    }

    public function getMpeModafprog(): ?ModafProg
    {
        return $this->mpeModafprog;
    }

    public function setMpeModafprog(?ModafProg $mpeModafprog): self
    {
        $this->mpeModafprog = $mpeModafprog;

        return $this;
    }


}
